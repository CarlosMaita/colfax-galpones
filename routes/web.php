<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', 'HomeController@lading')->name('home');

/*-------------- MIDDLEWARE DE TRADUCCION ----*/
Route::middleware('lang')->group(function () {
// about-us 
	Route::get('/', function(){
		return view('home');
   	} )->name('home');

	// about-us 
	Route::get('/about-us', function(){
		 return view('about-us');
	} )->name('about-us');
	// floorplants
	Route::get('/floorplants', function(){
		return view('floorplants');
	} )->name('floorplants');

	Route::get('/floorplants/typical-unit-plan', function(){
		return view('floorplants_secundaria');
	} )->name('floorplants.secondary');

	Route::get('/floorplants/site-plan', function(){
		return view('floorplants_tercera');
	} )->name('floorplants.third');

	// location
	Route::get('/location', function(){
		return view('location');
	} )->name('location');
	// contact
	Route::get('/contact', function(){
		return view('contact');
	} )->name('contact');
	// Gallery
	Route::get('/gallery', function(){
		return view('gallery');
	} )->name('gallery');

	Route::get('/mortgage-calculator', function() {
		return view('calculadora');
	})->name('calculator');

	Route::get('/mortgage-calculator-report ', function() {
		return view('reporte_calculadora');
	});

	Route::get('/demo', function(){
		return view('demo');
   	} )->name('demo');

	Route::get('/blog', 'HomeController@blog')->name('blog');
	Route::get('/blog/{slug}', 'HomeController@showPost')->name('blog.show');
	Route::get('/autor/{name}', 'HomeController@blogByAuthor')->name('blog.autor');
	Route::get('/blog-categorias/{slug}', 'HomeController@blogByCategories')->name('blog.category.show');
	Route::get('/blog-keywords/{name}', 'HomeController@blogByTag')->name('blog.tag.show');
	Route::post('/blog/email', 'Cms\blog\ReaderController@agregarReader')->name('blog.newsletter');
	Auth::routes();
});







/* ---------- CAMBIAR IDIOMA ------------ */
Route::get('/lang/{lang}', function($lang) {
	Session::put('locale',$lang);
	return back();
})->name('lang');


/*---------------Login --------------*/
Route::get('/admin', 'Cms\LoginController@index');

//Metodo posts
Route::post('/cms/login', 'Cms\LoginController@login')->name('login.admin');
Route::post('/admin/logout', 'Cms\LoginController@logout')->name('login.logout');

/*---------------CMS ACCESO --------------*/

Route::middleware('cms')->group(function () {
	Route::get('/cms', 'Cms\IndexController@index')->name('cms.home');

	/*--------------- LEADS --------------*/
	Route::get('/cms/leads', 'Cms\LeadsController@index')->name('leads.home');
	Route::get('/cms/leads/archivados', 'Cms\LeadsController@leadsArchivados')->name('leads.archivados');

	Route::get('/cms/lead/archivar/{id}', 'Cms\LeadsController@archivarLeads')->name('leads.archivar');
	Route::get('/cms/lead/cometario/{id}', 'Cms\LeadsController@obtenerComentario');
});

/*---------------ADMINISTRADORES --------------*/
Route::middleware('admin')->group(function () {
	/*---------------Usuarios --------------*/
		Route::get('/cms/admin_users', 'Cms\IndexController@adminUsers')->name('cms.users');
		Route::get('/cms/get/user/{id}', 'Cms\UserController@getUser');
		//Metodo posts
		Route::post('/cms/user/create', 'Cms\UserController@makeUser')->name('cms.users.create');
		Route::post('/cms/update/user/{id}', 'Cms\UserController@editUser');
		Route::post('/cms/password/user/{id}', 'Cms\UserController@editPassword');
		Route::post('/cms/eliminar/user/{id}', 'Cms\UserController@eliminarUsuario');
});

/*---------------EDITORES LANDING PAGE CMS--------------*/
Route::middleware('landing')->group(function () {
	
	Route::get('/cms/banners', 'Cms\LogoBannerController@index')->name('banners.home');
	Route::get('/cms/crear/banner', 'Cms\LogoBannerController@crearBanner')->name('banners.create');
	Route::get('/cms/editar/banner/{id}', 'Cms\LogoBannerController@editarBanner')->name('banners.show');

		//posts
	Route::post('/cms/guardar/banner', 'Cms\LogoBannerController@guardarBanner')->name('banners.store');
	Route::post('/cms/actualizar/banner/{id}', 'Cms\LogoBannerController@actualizarBanner')->name('banners.update');
	Route::post('/cms/eliminar/banner/{id}', 'Cms\LogoBannerController@eliminarBanner')->name('banners.destroy');
	Route::post('/cms/guardar/logo', 'Cms\LogoBannerController@guardarLogo')->name('banners.logo');

	//ocultar/activar banners
	Route::get('/cms/activar/banner/{id}', 'Cms\LogoBannerController@activarBanner')->name('banners.active');
	Route::get('/cms/ocultar/banner/{id}', 'Cms\LogoBannerController@ocultarBanner')->name('banners.desactive');
});

Route::middleware('blog')->group(function () {
	/*--------------- BLOG --------------*/


		/*--------------- CATEGORIAS --------------*/

	Route::get('/cms/blog/categorias', 'Cms\blog\BlogCategorieController@index')->name('blog.categories');
	Route::get('/cms/get-category/{id}', 'Cms\blog\BlogCategorieController@obtenerCategoria');
	Route::post('/cms/verificar/slug', 'Cms\blog\BlogCategorieController@verificarSlugCategoria');
	//métodos posts

	Route::post('/cms/crear/categoria', 'Cms\blog\BlogCategorieController@crearCategoria')->name('blog.categories.create');

	Route::post('/cms/editar/categoria/{id}', 'Cms\blog\BlogCategorieController@actualizarCategoria')->name('blog.categories.update');

	Route::post('/cms/eliminar/categoria/{id}', 'Cms\blog\BlogCategorieController@eliminarCategoria')->name('blog.categories.destroy');


		/*--------------- ARTICULOS --------------*/

	Route::get('/cms/blog/articulos', 'Cms\blog\ArticleController@index')->name('blog.articles');
	Route::get('/cms/crear/articulo', 'Cms\blog\ArticleController@crearArticulo')->name('blog.article.create');
	Route::get('/cms/editar/articulo/{id}', 'Cms\blog\ArticleController@editarArticulo')->name('blog.article.show');
	Route::get('/cms/blog/perfil', 'Cms\IndexController@perfilBlogger')->name('blog.perfil');
	Route::post('/cms/blog/verify/{slug}', 'Cms\blog\ArticleController@verifySlug');

	//metodos posts

	Route::post('/cms/guardar/articulo', 'Cms\blog\ArticleController@guardarArticulo')->name('blog.article.store');

	Route::post('/cms/actualizar/articulo/{id}', 'Cms\blog\ArticleController@actualizarArticulo')->name('blog.article.update');

	Route::post('/cms/eliminar/article/{id}', 'Cms\blog\ArticleController@eliminarArticulo')->name('blog.article.destroy');

	Route::post('/cms/blog/perfil/update/{id}', 'Cms\IndexController@updatePerfilBlogger')->name('blog.perfil.update');
	//------- COMENTARIOS -----------
	Route::get('/get/comments/{id}', 'Cms\blog\BlogCommentController@getComments');

	Route::post('/delete/comment/{id}', 'Cms\blog\BlogCommentController@deleteComment');

		/*--------------- READERS --------------*/
	Route::get('/cms/blog/readers', 'Cms\blog\ReaderController@index')->name('blog.readers');

});


/*--------------- ENVIO DE COMENTARIOS --------------*/

	Route::post('/send/comment', 'Cms\blog\BlogCommentController@addComment');

/*--------------- REGISTRAR LEADS VÍA CONTACTO --------------*/

	Route::post('/add/lead', 'Cms\LeadsController@agregarLead')->name('lead.add');