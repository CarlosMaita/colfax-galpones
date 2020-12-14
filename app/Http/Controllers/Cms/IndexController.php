<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Role;
use Storage;
use Str;

class IndexController extends Controller
{
    public function index()
    {
        $secName = '';
    	return view('cms.index', compact('secName'));
    }

    public function adminUsers()
    {
    	$roles = Role::where('title', '!=', 'comprador')->get();
        $secName = 'usuarios';
    	$usuarios = User::where('cms', '1')->get();
    	return view('cms.usuarios.index', compact('roles', 'usuarios', 'secName'));
    }

    public function perfilBlogger()
    {
        $user = auth()->user();
        $secName = 'blog-perfil';
        return view('cms.blog.perfil', compact('user', 'secName'));
    }

    public function updatePerfilBlogger(Request $request, $id)
    {
        if(auth()->user()->id == $id)
        {
            $user = User::find($id);

            if($request->file('picture'))
            {
                $deleted = Storage::disk('public')->delete($user->picture);

                if(isset($deleted) || $user->picture == null)
                {
                    $path = $request->file('picture')->store('public');
                    $file = Str::replaceFirst('public/', '',$path);

                    $user->update([
                        'name' => $request->name,
                        'apellido' => $request->apellido,
                        'phone' => $request->phone,
                        'email' => $request->email,
                        'picture' => $file,
                    ]);
                }
            }else {
                $user->update([
                    'name' => $request->name,
                    'apellido' => $request->apellido,
                    'phone' => $request->phone,
                    'email' => $request->email,
                ]);
            }

            return back()->with('message', 'Perfil actualizado con éxito');
        }

        return back();
    }
}
