@extends('cms.layout.main')
@section('title')
    Blogger | Perfil
@endsection


@section('content')
<section>
	<div class="d-flex justify-content-between">
		<h1>Perfil: {{$user->name}}</h1>
	</div>
	@if (session('message'))
	    <div class="alert alert-success" role="alert">
	        {{ session('message') }}
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
	@endif
	<div>
		<form action="{{route('blog.perfil.update', $user->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<h5>Nombre</h5>
				<input class="form-control" type="text" maxlength="191" value="{{$user->name}}" required name="name">
			</div>
			<div class="form-group">
				<h5>Apellido</h5>
				<input class="form-control" type="text" maxlength="191" value="{{$user->apellido}}" required name="apellido">
			</div>
			<div class="form-group">
				<h5>Telefono</h5>
				<input class="form-control" type="text" maxlength="191" value="{{$user->phone}}" required name="phone">
			</div>
			<div class="form-group">
				<h5>Correo electronico</h5>
				<input class="form-control" type="text" maxlength="191" value="{{$user->email}}" required name="email">
			</div>
			<div class="form-group">
				<img src="{{asset('storage/'.$user->picture)}}" style="width: 50px;height: 50px">
				<input type="file" name="picture">
			</div>
			<input type="submit" class="btn btn-primary" value="Actualizar perfil">
		</form>
	</div>
<section></section>

@endsection