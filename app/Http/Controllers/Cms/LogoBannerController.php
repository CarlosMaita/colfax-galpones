<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Logo_Banner;

use Storage; 
use Str;


class LogoBannerController extends Controller
{
    public function index()
    {
    	$banners = Logo_Banner::where('tipo', 'banner')->get();
    	$logo = Logo_Banner::where('tipo', 'logo')->first();
        $secName = 'web';
    	return view('cms.banner.index')->with(compact('banners', 'logo', 'secName'));
    }


    /* -------------- LOGO ----------*/
    public function guardarLogo(Request $request)
    {

        $logo = Logo_Banner::where('tipo', 'logo')->first();
        if(isset($logo))
        {

            $deleted = Storage::disk('public')->delete($logo->image);

            if(isset($deleted) || $logo->image == null)
            {
                $path = $request->file('image')->store('public');

                $file = Str::replaceFirst('public/', '',$path);

                $logo->update([
                    'image' => $file,
                ]);

                return back()->with('message', 'Logo created successfully');
            }
                
        } else {
            $path = $request->file('image')->store('public');
            $file = Str::replaceFirst('public/', '',$path);
            
            $banner = new Logo_Banner;

            $banner->create([
                'title' => 'logo',
                'description' => 'logo el navbar',
                'status' => 1,
                'tipo' => 'logo',
                'image' => $file,
            ]);

            return back()->with('message', 'Logo updated successfully');
        }
    }


    /*----------------- BANNERS  ------------*/

    public function activarBanner($id)
    {
        $banner = Logo_Banner::find($id);

        $banner->status = 1;
        $banner->save();

        return back()->with('message', 'Banner activated successfully');

    }

    public function ocultarBanner($id)
    {
        $banner = Logo_Banner::find($id);

        $banner->status = 0;
        $banner->save();

        return back()->with('error', 'Baner hidden successfully');
    }

    public function crearBanner()
    {
        $secName = 'web';
    	return view('cms.banner.crear_banner', compact('secName'));
    }


    public function guardarBanner(Request $request)
    {
    	$path = $request->file('image')->store('public');
    	$file = Str::replaceFirst('public/', '',$path);

    	$banner = new Logo_Banner;

    	$banner->create([
            'title' => $request->title,
            'description' =>$request->description,
            'status' => $request->status,
            'tipo' => $request->tipo,
            'image' => $file,
        ]);

    	return back()->with('message', 'Banner created successfully!');
    }


    public function editarBanner($id)
    {
        $banner = Logo_Banner::find($id);
        $secName = 'web';
        return view('cms.banner.editar_banner', compact('banner', 'secName'));
    }

    public function actualizarBanner(Request $request, $id)
    {
        $banner = Logo_Banner::find($id);

        if($request->file('image'))
        {
            $deleted = Storage::disk('public')->delete($banner->image);

            if(isset($deleted) || $banner->image == null)
            {
                $path = $request->file('image')->store('public');

                $file = Str::replaceFirst('public/', '',$path);

                $banner->update([
                    'title' => $request->title,
                    'description' =>$request->description,
                    'image' => $file,
                ]);
                
                return back()->with('message', 'Banner updated successfully!');
            } else {
                return back()->with('message', 'Banner could not be updated');
            }
        } else {
            $banner->update([
                'title' => $request->title,
                'description' =>$request->description,
            ]);

            return back()->with('message', 'Banner updated successfully!');
        }
    }

    public function eliminarBanner($id)
    {
        $banner = Logo_Banner::find($id);
        $deleted = Storage::disk('public')->delete($banner->image);
        
        if(isset($deleted) || $banner->image == null)
        {
            $banner->delete();
            return back()->with('error', 'Banner deleted successfully!');
        } else {
            return back()->with('error', 'Banner could not be deleted');
        }
    }
}
