<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo_Banner;

use App\BlogArticle;
use App\BlogCategorie;
use App\Keyword;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function lading()
    {
        $sliders = Logo_Banner::where('tipo', 'banner')->where('status', 1)->get();
        $logo = Logo_Banner::where('tipo', 'logo')->first();
        return view('landing', compact('sliders', 'logo'));
    }


    public function blog()
    {
        $recent_post = BlogArticle::orderBy('id', 'DESC')->first();

        $posts = BlogArticle::where('id', '!=', $recent_post->id)->orderBy('id', 'DESC')->paginate(3);
        $all_posts = BlogArticle::inRandomOrder()->get();

        $categorias = BlogCategorie::all();
        $keywords = Keyword::all();
        $logo = Logo_Banner::where('tipo', 'logo')->first();


        $random_posts = [];

        foreach ($all_posts as $all_post) {
            $verificador = true;

            foreach ($posts as $post) {

                if($post->id == $all_post->id)
                {
                    $verificador = false;
                }
             }

             if($all_post->id == $recent_post->id )
             {
                $verificador = false;
             }

             if($verificador)
             {
                $random_posts[] = $all_post;
             } 

            if(sizeof($random_posts) == 5)
            {
                break;
            }

        }


        return view('blog.index', compact('posts', 'categorias', 'keywords', 'logo', 'recent_post', 'random_posts'));
    }

    public function showPost($slug)
    {
        $post = BlogArticle::where('slug', $slug)->first();
        $random_posts = BlogArticle::where('id', '!=', $post->id)->inRandomOrder()->take(3)->get();
        $logo = Logo_Banner::where('tipo', 'logo')->first();
        return view('blog.post', compact('post', 'logo', 'random_posts'));
    }

    public function blogByCategories($slug)
    {
        $categoria = BlogCategorie::where('slug', $slug)->first();

        $recent_post = BlogArticle::where('category_id', $categoria->id)->orderBy('id', 'DESC')->first();
        $posts = BlogArticle::where('category_id', $categoria->id)->where('id', '!=', $recent_post->id)->orderBy('id', 'DESC')->paginate(3);
        $all_posts = BlogArticle::inRandomOrder()->get();


        $categorias = BlogCategorie::all();
        $keywords = Keyword::all();
        $logo = Logo_Banner::where('tipo', 'logo')->first();


        $random_posts = [];

        foreach ($all_posts as $all_post) {
            $verificador = true;

            foreach ($posts as $post) {

                if($post->id == $all_post->id)
                {
                    $verificador = false;
                }
             }

             if($all_post->id == $recent_post->id )
             {
                 $verificador = false;
             }

             if($verificador)
             {
                $random_posts[] = $all_post;
             } 

            if(sizeof($random_posts) == 5)
            {
                break;
            }

        }

        return view('blog.index', compact('posts', 'categorias', 'keywords', 'logo', 'recent_post', 'random_posts'));
    }

    public function blogByTag($name)
    {
        $tag = Keyword::where('keyword', $name)->first();
        $posts = $tag->articles()->orderBy('id', 'DESC')->paginate(15);
        $categorias = BlogCategorie::all();
        $keywords = Keyword::all();
        $logo = Logo_Banner::where('tipo', 'logo')->first();
        return view('blog.index', compact('posts', 'categorias', 'keywords', 'logo'));
    }

    public function blogByAuthor($name)
    {
        $autor = User::where('name', $name)->first();
        $posts = $autor->articles()->orderBy('id', 'DESC')->paginate(15);
        $categorias = BlogCategorie::all();
        $keywords = Keyword::all();
        $logo = Logo_Banner::where('tipo', 'logo')->first();
        return view('blog.index', compact('posts', 'categorias', 'keywords', 'logo', 'autor'));
    }

}
