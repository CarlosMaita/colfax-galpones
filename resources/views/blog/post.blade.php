@extends('layouts.app')

@section('title')
	{{$post->title}}
@endsection

@section('metas')
<!-- Primary Meta Tags -->
<title>{{$post->title}}</title>
<meta name="title" content="{{$post->title}}">
<meta name="description" content="{{$post->description}}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://metatags.io/">
<meta property="og:title" content="{{$post->title}}">
<meta property="og:description" content="{{$post->description}}">
<meta property="og:image" content="{{asset('storage/'.$post->picture)}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="{{$post->title}}">
<meta property="twitter:description" content="{{$post->description}}">
<meta property="twitter:image" content="{{asset('storage/'.$post->picture)}}">
@endsection

@section('breadcrumb')

    <!-- BREADCRUMB
    ================================================== -->
    <nav class="breadcrumb">
      <div class="container">
        <div class="row align-items-center">

          <div class="col">
            <!-- Heading -->
            <h5 class="breadcrumb-heading">
				Blog post
            </h5>
          </div>
          <div class="col-auto d-flex">
             <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="{{route('home')}}">Home</a>
			</span>
			<!-- Breadcrumb -->
            <span class="breadcrumb-item">
				<a href="{{route('blog')}}">Blog</a>
			  </span>
            <span class="breadcrumb-item active">
				{{$post->title}}
            </span> 
          </div>

        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>
@endsection


@section('content')

    <!-- POST
    ================================================== -->
    <section class="section pb-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8">

            <!-- Meta -->
            <div class="row align-items-center justify-content-center no-gutters mb-4">
              <div class="col-auto">
                
                <p class="mb-0 text-xs text-muted">
                  @lang('by') <strong class="text-body">{{$post->author->name}}</strong> {{$post->created_at->diffForHumans()}}
                </p>

              </div>
            </div> <!-- / .row -->
            
            <!-- Heading -->
            <h1 class="mb-2 font-weight-bold text-center">
              {{$post->title}}
            </h1>
            <h2 class="mb-5 text-center">{{$post->description}}</h2>
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">
            
            <!-- Image -->
            <img src="{{asset('storage/'.$post->picture)}}" alt="..." class="img-fluid mb-3">

          </div>
        </div> <!-- / .row -->
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8">

            <article>
            	{!!$post->content!!}
            </article>

            <!-- Social -->
            <div class="row align-items-center py-3 my-5 border-top border-bottom">
              <div class="col">

                <p class="mb-0 text-xs text-uppercase">
                  @lang('Share the post:')
                </p>

              </div>
              <div class="col-auto">
              	<a href="#!" id="whastapp" class="text-lg text-nounderline mx-2">
              		<i class="fab fa-whatsapp"></i>
              	</a>
                <a href="#!" id="twitter" class="text-lg text-nounderline mx-2">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" id="facebook" class="text-lg text-nounderline mx-2">
                  <i class="fab fa-facebook"></i>
                </a>
                {{-- <a href="#!" class="text-lg text-nounderline mx-2">
                  <i class="fab fa-instagram"></i>
                </a> --}}

              </div>
            </div>

          </div>
        </div> <!-- / .row -->
    </section>

    <!-- FEATURED
    ================================================== -->
    <section class="section m-0 p-4">
      <div class="container">
        <div class="row align-items-stretch">
        @foreach($random_posts as $random_post)
          <div class="col-12 col-lg-4 mb-3">
            
            <a class="card h-100" href="{{route('blog.show', $random_post->slug)}}">
              <div class="card-body">

                <!-- Meta -->
                <div class="row align-items-center no-gutters mb-4">
                  <div class="col">
                    
                    <p class="mb-0 text-xs text-muted">
						@lang('by') <strong class="text-body">{{$random_post->author->name}}</strong> {{$random_post->created_at->diffForHumans()}}
                    </p>

                  </div>
                </div> <!-- / .row -->
                
                <!-- Heading -->
                <h4 class="">
                  {{$random_post->title}}
                </h4>

                <!-- Text -->
                <p class="mb-0 text-sm text-muted">
                  @if(strlen($random_post->content) < 56)
                      {!!$random_post->content!!}
                    @else
                      {!!substr($random_post->content,0, 56)!!}
                    @endif
                </p>
              </div>
            </a>
          </div>
        @endforeach
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>



    <script type="text/javascript">
    //-------- COMPARTIR CON REDES SOCIALES ------------
    	const facebook = document.getElementById('facebook'),
    		  twitter = document.getElementById('twitter'),
    		  whastapp = document.getElementById('whastapp')

    	let dir = window.location;
    	let dir2 = encodeURIComponent(dir);
    	let tit = window.document.title;
    	let tit2 = encodeURIComponent(tit);

    	facebook.addEventListener('click', (e) => {
    		e.preventDefault()
    		url = `http://www.facebook.com/share.php?u=${dir2}&t=${tit2}`
    		window.open(url, '','width=600,height=400,left=50,top=50')
    	})

    	twitter.addEventListener('click', (e) => {
    		e.preventDefault();
    		url= `http://twitter.com/?status=${tit2}%20${dir}`
    		window.open(url, '', 'width=600,height=400,left=50,top=50')
    	})


    	whastapp.addEventListener('click', (e) => {
			e.preventDefault();
			location.href = `https://wa.me/?text=${encodeURIComponent(window.location)}`
		})


    </script>































































{{-- 
<!-- 
<section class="container">
	<input type="hidden" id="articuloId" value="{{$post->id}}">
	<div class="card mb-2 mt-4">
	  <img src="{{asset('storage/'.$post->picture)}}" style="height: 60vh; object-fit: cover;" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title">{{$post->title}}</h5>
	    <p class="card-text">{!!$post->content!!}</p>
	  	<div class="d-flex">
	  		<img class="mr-2" src="{{asset('storage/'.$post->author->picture)}}" style="width: 50px;height: 50px;">
	  		<h5>{{$post->author->name}}</h5>
	  	</div>
	  	<p class="card-text"><small class="text-muted">{{$post->date}}</small></p>
	  </div>
	</div>

	<div class="my-3">
		<h3>Compartir en redes sociales</h3>
		<div class="d-flex">
			<a href="#" id="facebook">
				<img src="/icons/facebook.svg" style="width: 50px;height: 50px; cursor: pointer;">
			</a>
			<a href="#" id="twitter">
				<img src="/icons/twitter.svg" style="width: 50px;height: 50px; cursor: pointer;">
			</a>
			<a href="#" id="linkedin">
				<img src="/icons/linkedin.svg" style="width: 50px;height: 50px; cursor: pointer;">
			</a>
			<a href="#" id="pinterest">
				<img src="/icons/pinterest.svg" style="width: 50px;height: 50px; cursor: pointer;">
			</a>
		</div>
	</div>

	<div>
		<div id="texto_blog" style="position: absolute; visibility: hidden;">
			{{$post->title}}
			{!!$post->content!!}
		</div>
		<button id="boton_reproducir" style="display: none;" class="btn btn-outline-primary">Reproducir post</button>
		<div id="reproductor_container" class="reproductor align-items-center">
			<audio src=""  id="reproductor" controls="true" style="display: none;"></audio>
		</div>
	</div>

	<div class="my-4">
		<h3>Comentarios</h3>
		<div class="">
			<div id="comment_main">
				@foreach($comments as $comment)
					@if($comment->padre_id === 0)	
						<div class="my-4" style="width: 46%">
							<div class="d-flex justify-content-around">
								<img class="mr-3" src="/icons/comment_image.jpg" style="width: 80px; height: 80px; object-fit: cover;">
								<div class="" style="flex: 1">
									<h5>{{$comment->comentarist->name}}</h5>
									<p>{{$comment->comment}}</p>
									<p>Creado el: {{$comment->created_at}}</p>
								</div>
								<div>
									<button id="{{$comment->id}}" class="btn btn-outline-primary boton-respoder">Responder</button>
								</div>
							</div>
							@foreach($comments as $comment_dos)
								@if($comment_dos->padre_id == $comment->id)
									<div class="my-4 pl-5">
										<div class="d-flex justify-content-around">
											<img class="mr-3" src="/icons/comment_image.jpg" style="width: 80px; height: 80px; object-fit: cover;">
											<div class="" style="flex: 1">
												<h5>{{$comment_dos->comentarist->name}}</h5>
												<p>{{$comment_dos->comment}}</p>
												<p>Creado el: {{$comment_dos->created_at}}</p>
											</div>
										</div>
									</div>
								@endif
							@endforeach
							<div class="form-container"></div>
						</div>
					@endif
				@endforeach
			</div>
		</div>
		<div class="my-4">
			<h3>Realizar comentario</h3>
			<form action="" method="POST" id="form_comments" class="mb-2">
				<input type="hidden" id="post_id" value="{{$post->id}}" name="article_id">
				<div class="row">
					<div class="form-group col-md-6">
						<h5>Nombre</h5>
						<input class="form-control" type="text" required maxlength="191" name="name" placeholder="Coloca tu nombre">
					</div>
					<div class="form-group col-md-6">
						<h5>Correo</h5>
						<input class="form-control" type="email" required maxlength="191" name="email" placeholder="Coloca tu correo electronico">
					</div>
					<div class="form-group col-md-12">
						<h5>Comentario</h5>
						<textarea class="form-control" name="comment" id="comment"></textarea>
					</div>
					<div class="col-md-3">
						<input type="submit" id="submit_button" class="btn btn-primary" value="Enviar">
					</div>
				</div>
			</form>
		</div>
	</div>
</section> -->


<!-- <script type="text/javascript">
//--------VARIABLES DE EVENTOS------------
	const responderButtons = document.querySelectorAll('.boton-respoder');
	let formularioComment = document.getElementById('form_comments')



//--------EVENTO ENVIAR COMENTARIO------------
	formularioComment.addEventListener('submit', (e) =>{
		e.preventDefault();

		let postId = formularioComment[0].value,
			name = formularioComment[1].value,
			email = formularioComment[2].value,
			comment = formularioComment[3].value;


		sendComment(postId, comment, name, email)
		formularioComment.reset()
	})


//-------- EVENTO RESPONDER COMENTARIO------------

	if(responderButtons){
		responderButtons.forEach(button => {
			button.addEventListener('click', (e) => {
				let main = e.target.parentNode.parentNode.parentNode,
					id = e.target.id,
					formularioContainer = main.children[main.children.length - 1];
				
					addFormToResponse(formularioContainer, id)
			})
		})
	}




//-------- FUNCIONES DE EVENTOS ------------

	//-------- FUNCION ENVIAR COMENTARIO ------------
	function sendComment(post, comment, name, email, commentId = 0)
	{
		axios.post(`/send/comment`, {
			comment: comment,
			name: name,
			email: email,
			article_id: post,
			comment_id: commentId
		})
		.then(response => {
			if(response.status === 200){
				let comentario = response.data.comentario,
					usuario = 	response.data.user	
				
				addComment(comentario, usuario)
			}
		})
	}


	//-------- FUNCION AGREGAR COMENTARIO AL DOM ------------
	function addComment(comentario, user)
	{
		console.log(comentario)
		const container = document.getElementById('comment_main');

		container.innerHTML += `
			<div class="my-4" style="width: 46%">
				<div class="d-flex justify-content-around">
					<img class="mr-3" src="/icons/comment_image.jpg" style="width: 80px; height: 80px; object-fit: cover;">
					<div class="" style="flex: 1">
						<h5>${user.name}</h5>
						<p>${comentario.comment}</p>
						<p>Creado el: ${comentario.created_at}</p>
					</div>
					<div>
						<button id="${comentario.id}" class="btn btn-outline-primary">Responder</button>
					</div>
				</div>
				<div></div>
			</div>
		`
	}

	//-------- FUNCION AGREGAR FORMULARIO PARA RESPONDER COMENTARIO ------------
	function addFormToResponse(formContainer, id) {
		let template = `
			<form action="" onsubmit="sendFormResponse(event)" id="form_comments" class="mb-2">
				<h5 Responder comentario </h5>
				<input type="hidden" id="post_id" value="${document.getElementById('articuloId').value}" name="article_id">
				<div class="row">
					<div class="form-group col-md-6">
						<h5>Nombre</h5>
						<input class="form-control" type="text" required maxlength="191" name="name" placeholder="Coloca tu nombre">
					</div>
					<div class="form-group col-md-6">
						<h5>Correo</h5>
						<input class="form-control" type="email" required maxlength="191" name="email" placeholder="Coloca tu correo electronico">
					</div>
					<div class="form-group col-md-12">
						<h5>Comentario</h5>
						<textarea class="form-control" name="comment" id="comment"></textarea>
					</div>
					<input type="hidden" id="post_id" value="${id}"
					<div class="col-md-3">
						<input type="submit" id="submit_button" class="btn btn-primary" value="Enviar">
					</div>
				</div>
			</form>
		`

		formContainer.innerHTML = template
	}

	//-------- FUNCION ENVIAR COMENTARIO DE RESPUESTA ------------
	function sendFormResponse(e){
		e.preventDefault();
		let postId = e.target[0].value,
			name = e.target[1].value,
			email = e.target[2].value,
			comment = e.target[3].value,
			comment_id = e.target[4].value,
			container = e.target.parentNode.parentNode;

			console.log(container)
		
		axios.post(`/send/comment`, {
			comment: comment,
			name: name,
			email: email,
			article_id: postId,
			comment_id: comment_id
		})
		.then(response => {
			if(response.status === 200){
				let comentario = response.data.comentario,
					usuario = 	response.data.user	
				
				addingResponseComment(container, e.target, comentario, usuario)
			}
		})


	}

	//-------- FUNCION AGREGAR COMENTARIO DE RESPUESTA AL DOM ------------
	function addingResponseComment(container, formulario, comentario, user){
		let responseMain = document.createElement('div'),
			template = `	
				<div class="d-flex justify-content-around">
					<img class="mr-3" src="/icons/comment_image.jpg" style="width: 80px; height: 80px; object-fit: cover;">
					<div class="" style="flex: 1">
						<h5>${user.name}</h5>
						<p>${comentario.comment}</p>
						<p>Creado el: ${comentario.created_at}</p>
					</div>
				</div>
			`

		responseMain.classList.add('my-4')
		responseMain.classList.add('pl-5')
		responseMain.innerHTML = template

		container.insertBefore(responseMain, formulario.parentNode)

		formulario.parentNode.remove()

	}
</script>

<script type="text/javascript">
//-------- FUNCIONALIDAD REPRODUCTOR POST ------------
	const reproductor = document.getElementById('reproductor')

	let botonReproducir
		

	document.addEventListener('DOMContentLoaded', () => {
		let texto = document.getElementById('texto_blog')
		botonReproducir = document.getElementById('boton_reproducir')
		botonReproducir.style.display = 'block'


		boton_reproducir.addEventListener('click', () => {
			let changeText = encodeURIComponent(texto.textContent)
				url = `https://audio1.spanishdict.com/audio?lang=es&text=${changeText}`

			botonReproducir.style.display = 'none'
			reproductor.style.display = 'block'
			
			reproductor.src = url
			reproductor.play()

		})
	})
</script>

<script type="text/javascript">
//-------- COMPARTIR CON REDES SOCIALES ------------
	const facebook = document.getElementById('facebook'),
		  twitter = document.getElementById('twitter'),
		  linkedin = document.getElementById('linkedin'),
		  pinterest = document.getElementById('pinterest')

	let dir = window.location;
	let dir2 = encodeURIComponent(dir);
	let tit = window.document.title;
	let tit2 = encodeURIComponent(tit);

	facebook.addEventListener('click', (e) => {
		e.preventDefault()
		url = `http://www.facebook.com/share.php?u=${dir2}&t=${tit2}`
		window.open(url, '','width=600,height=400,left=50,top=50')
	})

	twitter.addEventListener('click', (e) => {
		url= `http://twitter.com/?status=${tit2}%20${dir}`
		window.open(url, '', 'width=600,height=400,left=50,top=50')
	})


	linkedin.addEventListener('click', (e) => {
		e.preventDefault();

		window.open(`http://www.linkedin.com/shareArticle?url='+${encodeURIComponent(window.location)}`, '', 'width=600,height=400,left=50,top=50')
	})


</script> -->
  --}}
@endsection