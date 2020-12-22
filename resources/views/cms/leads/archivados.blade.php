@extends('cms.layout.main')
@section('title')
    Leads archived
@endsection


@section('content')
<section class="mt-4">
	<div>
		<h1>Leads Archieved</h1>
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
	    	<th>#</th>
	        <th>Name</th>
	        <th>Email</th>
	        <th>Phone</th>
	        {{-- <th>Acciones</th> --}}
	        <tbody>
	        @foreach ($leads as $lead)
	            <tr>
	            	<td>{{$lead->id}}</td>
	                <td>{{ $lead->name }}</td>
	                <td>{{ $lead->email }}</td>
	                <td>{{ $lead->telefono}}</td>
	                {{-- <td></td> --}}
	            </tr>
	            @endforeach
	        </tbody>
	    </table>
	</div>

	{{$leads->links()}}
</section>

<div class="modal fade" id="modalComentarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Comentario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            	<h5 id="modal_comentario_titulo"></h5>
            	<h5 id="modal_comentario_correo"></h5>
            	<p id="modal_comentario_texto"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Salir</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
	function agregarModal(lead){
		const tituloModal = document.getElementById('modal_comentario_titulo')
			  correoModal = document.getElementById('modal_comentario_correo')
			  comentarioModal = document.getElementById('modal_comentario_texto')
		
		tituloModal.innerHTML = ''
		correoModal.innerHTML = ''
		comentarioModal.innerHTML = ''

		tituloModal.innerHTML = `Comentario del lead: <small> <strong>#${lead.id}</strong> </small>`
		correoModal.innerHTML = `Correo: <small> <strong> ${lead.email} </strong> </small>`
		comentarioModal.innerHTML = `Comentario: 
		<strong>
			${lead.comentario}
		</strong>`
	}

	function obtenerComentario(id){
		axios.get(`/cms/lead/cometario/${id}`)
			.then(res => {
				console.log(res.data);
				agregarModal(res.data)
			})
	}

	function init(){
		const botonesModal = document.querySelectorAll('.comentarios');

		if(botonesModal) {
			botonesModal.forEach(boton => {
				boton.addEventListener('click', (e) => {
					const id = e.target.id;

					obtenerComentario(id)
				})
			})
		}
	}


	document.addEventListener('DOMContentLoaded', () => {
		init()
	})
</script>


@endsection