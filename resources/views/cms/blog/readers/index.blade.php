@extends('cms.layout.main')
@section('title')
    Blog | Neswletter 
@endsection


@section('content')
<section>
	<div class="d-flex justify-content-between">
		<h1>Newsletter Readers</h1>
	</div>

	@if (session('error'))
	    <div class="alert alert-danger" role="alert">
	        {{ session('error') }}
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	    </div>
	@endif
	<div class="table-responsive">
	    <table class="table table-striped table-sm">
	        <thead>
	            <tr>
	                <th>#</th>
                    <th>Email</th>
                    <th>Date</th>
	            </tr>
	        </thead>
	        <tbody>
	            @foreach($readers as $reader)
	                <tr>
	                	<td>{{$reader->id}}</td>
	                	<td>{{$reader->correo}}</td>
	                	<td>{{$reader->created_at}}</td>
	                </tr>
	            @endforeach
	        </tbody>
	    </table>
	</div>
</section>
{{$readers->links()}}
<!-- 
<div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="eliminar_form" method="POST">
                    @csrf
                </form>
                <p id="name_article"></p>
                <p>Are you sure you want to delete this article?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" id="eliminar_submit" class="btn btn-danger">Delete Article</button>
            </div>
        </div>
    </div>
</div> -->


@endsection