@extends('cms.layout.main')
@section('title')
    Leads
@endsection


@section('content')
<section class="mt-4">
	<div>
		<h1>Leads</h1>
	</div>

	@if (session('message'))
	    <div class="alert alert-success" role="alert">
	        {{ session('message') }}
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	    </div>
	@endif

	<div class="table-responsive">
	    <table class="table table-striped table-sm">
	        <th>Nombre</th>
	        <th>Correo</th>
	        <th>telefono</th>
	        <th>Acciones</th>
	        <tbody>
	        @foreach ($leads as $lead)
	            <tr>
	                <td>{{ $lead->name }}</td>
	                <td>{{ $lead->email }}</td>
	                <td>{{ $lead->telefono}}</td>
	                <td>
	                    <a href="{{route('leads.archivar', $lead->id)}}" class="btn btn-sm btn-primary">Archivar</a>
	                </td>
	            </tr>
	            @endforeach
	        </tbody>
	    </table>
	</div>
</section>
@endsection