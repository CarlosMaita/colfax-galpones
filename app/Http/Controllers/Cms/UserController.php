<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\User;

class UserController extends Controller
{
    public function makeUser(Request $request)
    {
    	$user = new User;

    	$user->create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => Hash::make($request->password),
    		'role_id' => $request->role_id,
            'apellido' => 'cms',
            'phone' => '0000',
            'cms' => true,
    	]);

    	return back()->with('message', 'User created successfully');
    }


    public function getUser(Request $request, $id)
    {

        if($request->wantsJson()) {

            $user = User::find($id);
            return $user;
        }

        return redirect('/');
    }

    public function editUser(Request $request, $id)
    {
        $user = User::find($id);

        $user->update($request->all());

        return back()->with('message', 'User updated successfully');
    }

    public function editPassword(Request $request, $id)
    {
        $user = User::find($id);



        if($request->password == $request->corfirm_password)
        {
            $user->password = Hash::make($request->password);
            $user->save();
            return back()->with('message', 'Password updated successfully');
        } else {
            return back()->with('error', 'Passwords have to be the same');
        }
    }


    public function eliminarUsuario($id)
    {
        $user = User::find($id);
        if(isset($user))
        {
            $user->delete();
            return back()->with('error', 'User deleted successfully');
        }

        return back()->with('error', 'Could not delete user');
        
    }



}
