@extends('cms.layout.main')
@section('title')
    Blog | Categories
@endsection


@section('content')
<section>
	<div class="d-flex justify-content-between">
		<h1>Blog Categories</h1>
		<div>
			<button type="button" data-toggle="modal" data-target="#modalCrear" class="btn btn-outline-primary">Create Category</button>
		</div>
	</div>
	@if (session('message'))
	    <div class="alert alert-success" role="alert">
	        {{ session('message') }}
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
	@endif

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
	                <th>Title</th>
	                <th>Parent category</th>
	                <th>Status</th>
	                <th>Description</th>
	                <th>Actions</th>
	            </tr>
	        </thead>
	        <tbody>
	            @foreach($categorias as $categoria)
	                <tr>
	                	<td>{{$categoria->id}}</td>
	                    <td>{{$categoria->name}}</td>
	                    <td>
	                    	@php $padre = $categoria->getFatherName() @endphp
	                    	{{$padre ? $padre->name : 'It has no parent category'}}
	                    </td>
	                    <td>{{$categoria->status}}</td>
	                    <td>{{$categoria->description}}</td>
	                    <td>
	                    	<button id="{{$categoria->id}}" type="button" class="btn btn-sm btn-outline-primary editar_button" data-toggle="modal" data-target="#modalEditar">Edit</button>
	                    	<button id="{{$categoria->id}}" type="button" class="btn btn-sm btn-outline-danger eliminar_button" data-toggle="modal" data-target="#modalEliminar">Delete</button>
	                    </td>
	                </tr>
	            @endforeach
	        </tbody>
	    </table>
	</div>
</section>

<div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            	<div id="error_div" style="display: none;" class="alert alert-danger"></div>
            	<input type="hidden" id="slug_verify">
                <form action="{{route('blog.categories.create')}}" id="crear_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    	<h5>Title</h5>
                    	<input class="form-control" id="title_crear" autocomplete="off"  type="text" maxlength="191" name="name" required>
                    	<small id="slug-alert-create"></small>
                    </div>
                    <div class="form-group">
                    	<h5>Parent category <small>(optional)</small></h5>
                    	<select class="form-control" name="padre_id">
                    		<option value="0">Select category</option>
                    		<option value="0">Principal</option>
                    		@foreach($categorias as $categoria)
                    		<option value="{{$categoria->id}}">{{$categoria->name}}</option>
                    		@endforeach
                    	</select>
                    </div>
                    <div class="form-group">
                    	<h5>Description</h5>
                    	<textarea required class="form-control" id="description_crear" name="description"></textarea>
                    </div>
                    <input style="visibility: hidden;position: absolute;" class="form-control" type="text" id="slug-create" name="slug">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" id="crear_submit" class="btn btn-primary">Create Category</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            	<div id="error_editar" style="display: none;" class="alert alert-danger"></div>
            	<input type="hidden" id="slug_verify_edit">
                <form action="" id="editar_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="categoria_id_edit">
                    <div class="form-group">
                    	<h5>Title</h5>
                    	<input class="form-control" id="title_editar" autocomplete="off" required type="text" maxlength="191" name="name">
                    	<small id="slug-alert-edit"></small>
                    </div>
                    <div class="form-group">
                    	<h5>Parent category <small>(optional</small></h5>
                    	<select id="categoria_padre_edit" class="form-control" name="padre_id">
                    		
                    	</select>
                    </div>
                    <div class="form-group">
                    	<h5>Description</h5>
                    	<textarea required class="form-control" id="description_editar" name="description"></textarea>
                    </div>
                    <input type="text" style="visibility: hidden;position: absolute;" id="slug-editar" name="slug">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" id="editar_submit" class="btn btn-primary">Update Category</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="eliminar_form" method="POST">
                    @csrf
                </form>
                <p>Are you sure you want to delete this category?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" id="eliminar_submit" class="btn btn-danger">Delete Category</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
	
// --------------- BOTONES PARA SUBMIT DE FORMS -------------

	const crearButton = document.getElementById('crear_submit'),
		  editarButton = document.getElementById('editar_submit'),
		  eliminarButton = document.getElementById('eliminar_submit');

	crearButton.addEventListener('click', (e) => {
		e.preventDefault();
		let form = document.getElementById('crear_form');

		let verificacion = verificar()

		if(verificacion)
		{
			form.submit();
		}

	});


	editarButton.addEventListener('click', (e) => {
		e.preventDefault();
		let form = document.getElementById('editar_form');

		let verificacion = verificar('editar')

		if(verificacion)
		{
			form.submit();
		}

	});

	eliminarButton.addEventListener('click', () =>{
		let form = document.getElementById('eliminar_form');

		form.submit();
	});


</script>



<script type="text/javascript">
// --------------- BOTONES PARA ARBRIR MODALES -------------
	const editarButtons = document.querySelectorAll('.editar_button'),
		  eliminarButtons = document.querySelectorAll('.eliminar_button');


	


	if(editarButtons)
	{
		editarButtons.forEach(button => {
			button.addEventListener('click', (e) => {
				let form = document.getElementById('editar_form'),
					id = e.target.id,
					title = e.target.parentNode.parentNode.cells[1].textContent,
					padre = e.target.parentNode.parentNode.cells[2].innerText,
					description = e.target.parentNode.parentNode.cells[4].textContent;
					console.log(padre)
				axios.get(`/cms/get-category/${id}`)
					.then(res => {
						let categorias = res.data.categorias,
							slug = res.data.slug;

						modalEditar(form,title,description,id,categorias,padre,slug)
					})
			});
		});
	}



	if(eliminarButtons)
	{
		eliminarButtons.forEach(button => {
			button.addEventListener('click', (e) => {
				let id = e.target.id,
					message = e.target.parentNode.parentNode.cells[1].textContent,
					form = document.getElementById('eliminar_form');

				modalEliminar(form, id, message)
			});
		});
	}
</script>


<script type="text/javascript">

// --------------- FUNCION VERIFICAR -------------
	function verificar(text = '')
	{

		let errors = [];
		let title = document.getElementById('title_crear'),
				description = document.getElementById('description_crear'),
				slugVerify = document.getElementById('slug_verify'),
				error_container = document.getElementById('error_div');

		
		if(text == 'editar')
		{
			title = document.getElementById('title_editar')
			description = document.getElementById('description_editar')
			error_container = document.getElementById('error_editar')
			slugVerify = document.getElementById('slug_verify_edit')

		}


		error_container.style.display = 'none';
		error_container.innerHTML = ''

		if(title.value === '')
		{
			errors.push('Debes agregar un titulo')
		}if(description.value === '')
		{
			errors.push('Debes agregar una descripcion')
		}if (slugVerify.value === "0"){
			errors.push('Debes escoger un titulo diferente')
		}
		
		


		if(errors.length > 0)
		{
			let error_main = document.createElement('ul')

			errors.forEach(error => {
				error_main.innerHTML += `

					<li>${error}</li>

				`
			});

			error_container.appendChild(error_main);
			error_container.style.display = 'block';

			return false;
		}else {
			return true;
		}
	}


//------------ FUNCIONES PARA MODALES --------------

	function modalEditar(form,title,description,id, categorias, padre, slug){
		let title_editar = document.getElementById('title_editar'),
			cat_padre = document.getElementById('categoria_padre_edit'),
			slugEditar = document.getElementById('slug-editar'),
			catIdEdit = document.getElementById('categoria_id_edit'),
			description_editar = document.getElementById('description_editar');

		cat_padre.innerHTML = `
		<option value="0">Principal</option>
		`

		categorias.forEach(categoria => {
			if(categoria.id != id){
				cat_padre.innerHTML += `
					<option value="${categoria.id}" ${categoria.name === padre ? 'selected' : ''}>${categoria.name}</option>
				`
			}
		})

		catIdEdit.value = id
		title_editar.value = title
		description_editar.value = description
		slugEditar.value = slug


		form.action = `/cms/editar/categoria/${id}`
	}


	function modalEliminar(form, id,message)
	{
		form.action = `/cms/eliminar/categoria/${id}`
		form.innerHTML += `<div>Category: <strong>${message}</strong></div>`
	}

</script>


<script type="text/javascript">
	//---------- AGREGAR O EDITAR SLUG --------------

	let tituloCrear = document.getElementById('title_crear'),
		tituloEditar = document.getElementById('title_editar'),
		slugCrear = document.getElementById('slug-create'),
		slugEditar = document.getElementById('slug-editar');


	tituloCrear.addEventListener('keyup', () => {
		let slug = string_to_slug(tituloCrear.value)
		slugCrear.value = slug

		if(slug != ''){

			axios.post('/cms/verificar/slug', {
				slug: slug,
			})
			.then(res => {
				changeSlugStatus(res.status, 'crear')
			})
		} else {
			document.getElementById('slug_verify').value = ''
			document.getElementById('slug-alert-create').textContent = ''
		}
	})

	tituloEditar.addEventListener('keyup', () => {
		let slug = string_to_slug(tituloEditar.value),
			catId = document.getElementById('categoria_id_edit');
		slugEditar.value = slug

		if(slug != ''){

			axios.post('/cms/verificar/slug', {
				id: catId.value,
				slug: slug,
			})
			.then(res => {
				changeSlugStatus(res.status, 'editar')
			})
		} else {
			document.getElementById('slug_verify_edit').value = ''
			document.getElementById('slug-alert-edit').textContent = ''
		}
	})

	


	function string_to_slug (str) {
	    str = str.replace(/^\s+|\s+$/g, ''); // trim
	    str = str.toLowerCase();
	  
	    // remove accents, swap ñ for n, etc
	    var from = "àáãäâèéëêìíïîòóöôùúüûñç·/_,:;";
	    var to   = "aaaaaeeeeiiiioooouuuunc------";

	    for (var i=0, l=from.length ; i<l ; i++) {
	        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
	    }

	    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
	        .replace(/\s+/g, '-') // collapse whitespace and replace by -
	        .replace(/-+/g, '-'); // collapse dashes

	    return str;
	}

	//--------------- ESTATUS DEL SLUG DEPENDIEDO DE ACCION ----------

	function changeSlugStatus(status, accion){
		let slugStatus = document.getElementById('slug-alert-create'),
			slugVerify = document.getElementById('slug_verify'),
			slugStatusEdit = document.getElementById('slug-alert-edit'),
			slugVerifyEdit = document.getElementById('slug_verify_edit');

		//----- ACCION CUANDO SE CREA UNA CATEGORIA ------

		if(accion === 'crear') {

			if(status === 200) {
				slugStatus.textContent = 'Title allowed for use'
				slugStatus.style.color = 'green';
				slugVerify.value = 1

			}else if(status === 204){
				slugStatus.textContent = 'This title is in use, please choose another'
				slugStatus.style.color = 'red';
				slugVerify.value = 0
			}

		//----- ACCION CUANDO SE EDITA UNA CATEGORIA ------
		} else if(accion === 'editar') {


			if(status === 200) {
				slugStatusEdit.textContent = 'Title allowed for use'
				slugStatusEdit.style.color = 'green';
				slugVerifyEdit.value = 1

			}else if(status === 204){
				slugStatusEdit.textContent = 'This title is in use, please choose another'
				slugStatusEdit.style.color = 'red';
				slugVerifyEdit.value = 0
			}
		}
	}
</script>

@endsection