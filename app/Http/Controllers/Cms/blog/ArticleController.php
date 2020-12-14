<?php

namespace App\Http\Controllers\Cms\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\BlogArticle;
use App\BlogCategorie;
use App\Keyword;
use Storage;
use Str;
class ArticleController extends Controller
{
    //--------- PAGINA PRINCIPAL DE BLOG ARTICULOS -----------
    public function index()
    {
        $user = auth()->user();

        if($user->roles->title === 'administrador')
        {
            $articulos = BlogArticle::all();
        }else {
            $articulos = $user->articles;;
        }

    	
        $secName = 'blog';
    	return view('cms.blog.articulos.index', compact('articulos', 'secName'));
    }

    //--------- VERIFICACION DE SLUG VIA AJAX -----------
    public function verifySlug(Request $request, $slug)
    {
        $url = BlogArticle::where('slug', $slug)->first();
        
        if(isset($request->article_id))
        {
            $article = BlogArticle::find($request->article_id);

            if( isset($url) && $url->id == $article->id)
            {
                return 1;
            }
        }

        if(isset($url))
        {
            return 0;
        }else
        {
            return 1;
        }
    }

    public function crearArticulo()
    {
    	$categorias = BlogCategorie::all();
        $secName = 'blog';
    	return view('cms.blog.articulos.crear_articulo', compact('categorias', 'secName'));
    }

    public function guardarArticulo(Request $request)
    {
        
    	$path = $request->file('picture')->store('public');
    	$file = Str::replaceFirst('public/', '',$path);

    	$article = BlogArticle::create([
    		'title' => $request->title,
            'slug' => $request->slug,
    		'content' => $request->content,
    		'category_id' => $request->category_id,
    		'autor_id' => auth()->user()->id,
    		'date' => $request->date,
    		'picture' => $file,
    	]);

        //--------- CREAR Y SINCRONIZAR KEYWORDS -----------
        $keywords = $request->clave;

        $tags = explode(",", $keywords);

        $keywords = [];

        foreach ($tags as $tag) {
            $verificar = Keyword::where('keyword', $tag)->first();

            if(isset($verificar))
            {  
                $keywords[] = $verificar->id;
            }else {
                $keyword = Keyword::create([
                    'keyword' => $tag,
                ]);

                $keywords[] = $keyword->id;
            }
        }

        $article->keywords()->sync($keywords);


    	return back()->with('message', 'Articulo creado con éxito');
    }

    public function editarArticulo($id)
    {
    	$articulo = BlogArticle::find($id);
        $tags = $articulo->keywords;
        $secName = 'blog';

        //--------- RECONSTRUIR KEYWORDS EN UN STRING -----------
        $keywords = null;
        $contador = 1;
        foreach ($tags as $tag) {

            if($contador == 1)
            {
                $keywords = $tag->keyword;
            }else {
                $keywords = $keywords.",".$tag->keyword;
            }

            $contador++;
        }


    	$categorias = BlogCategorie::all();
    	return view('cms.blog.articulos.editar_articulo', compact('articulo', 'categorias', 'keywords', 'secName'));
    }

    public function actualizarArticulo(Request $request, $id)
    {
    	$articulo = BlogArticle::find($id);

    	if($request->file('picture'))
    	{
    		$deleted = Storage::disk('public')->delete($articulo->picture);

    		if(isset($deleted) || $articulo->picture == null)
    		{
    			$path = $request->file('picture')->store('public');
    			$file = Str::replaceFirst('public/', '',$path);

    			$articulo->update([
    				'title' => $request->title,
                    'slug' => $request->slug,
    				'content' => $request->content,
    				'category_id' => $request->category_id,
    				'date' => $request->date,
    				'picture' => $file,
    			]);
    		}else {
    			return back()->with('error', 'No se pudo actualizar el articulo');
    		}

    	}else {
    		$articulo->update([
    			'title' => $request->title,
                'slug' => $request->slug,
    			'content' => $request->content,
    			'category_id' => $request->category_id,
    			'date' => $request->date,
    			'keywords' => 'vacio',
    		]);
    	}


        //agsinación de keywords
        $keywords = $request->clave;

        $tags = explode(",", $keywords);

        $keywords = [];

        foreach ($tags as $tag) {
            $verificar = Keyword::where('keyword', $tag)->first();

            if(isset($verificar))
            {  
                $keywords[] = $verificar->id;
            }else {
                $keyword = Keyword::create([
                    'keyword' => $tag,
                ]);

                $keywords[] = $keyword->id;
            }
        }

        $articulo->keywords()->sync($keywords);

    	return back()->with('message', 'Articulo actualizado con éxito');
    }


    public function eliminarArticulo($id)
    {
    	$articulo = BlogArticle::find($id);

    	$deleted = Storage::disk('public')->delete($articulo->picture);

    	if(isset($deleted) || $articulo->picture == null)
    	{
    		$articulo->delete();

    		return back()->with('error', 'Articulo eliminado con éxito');
    	}else {
    		return back()->with('error', 'No se puo eliminar el articulo con éxito');
    	}
    }
}
