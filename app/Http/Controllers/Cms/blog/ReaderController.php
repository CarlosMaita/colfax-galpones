<?php

namespace App\Http\Controllers\Cms\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reader;

class ReaderController extends Controller
{
    public function index() 
    {
        $readers = Reader::orderBy('id','DESC')->paginate(20); 
        $secName = 'blog';
        return view('cms.blog.readers.index', compact('readers', 'secName'));
    }

    public function agregarReader(Request $request)
    {
        $email = Reader::where('correo', $request->correo)->first();

        if($email)
        {
            return back()->with('error', 'This email is already registered');
        }else {
            Reader::create($request->all());
            return back()->with('message', 'Email successfully registered');
        }
    }
}
