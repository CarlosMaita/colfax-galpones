@extends('cms.layout.main')
@section('title')
    Make Banner
@endsection


@section('content')

    <style type="text/css">
        .banner_container {
            position: relative;
            width: 100%;
            height: 70vh;
            background-color: black;
        }

        .banner_imagen {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .inputs {
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .button_select {
            position: relative;
            left: 100%;
            transform: translateX(-100%);
            cursor: pointer;
        }

        .input_file {
            position: absolute;
            top: 0;
            right: 0;
            opacity: 0;
            height: 50px;
            cursor: pointer;
        }

        .inputs_body {

            display: flex;
            flex: 1;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }


        .options_buttons {
            width: 50%;
            margin: 0 auto;
        }

        .inputs_body textarea {
            background-color: inherit;
            border: 0px;
            text-align: center;
            color: white;
			resize: none;
			overflow:hidden;
        }

        .inputs_body textarea:focus {
            background-color: rgba(1, 1, 1, 0.2);
            outline: none;
        }

        .inputs_body input {
            background-color: inherit;
            border: 0px;
            font-size: 1.8rem;
            text-align: center;
            color: white;
        }

        .inputs_body input:hover,
        .inputs_body textarea:hover {
            cursor: pointer;
        }

        .inputs_body input:focus {
            background-color: rgba(1, 1, 1, 0.2);
            outline: none;
        }

        .inputs_body input::-webkit-input-placeholder,
        .inputs_body textarea::-webkit-input-placeholder {
            /* WebKit, Blink, Edge */
            color: #eee;
        }

        .inputs_body input:-moz-placeholder,
        .inputs_body textarea:-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            color: #eee;
            ;
        }

        .inputs_body input::-moz-placeholder,
        .inputs_body textarea::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            color: #eee;
        }

        .inputs_body input:-ms-input-placeholder,
        .inputs_body textarea:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #eee;
        }

    </style>

    <div class="alert alert-danger" style="display: none;" id="errors_main">

    </div>

    @if (session('message'))
        <div class="alert alert-success my-4" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        <h3 class="col-auto">Create new banner</h3>
        <div class="col-auto ml-auto"><a class="btn btn-outline-info btn-sm px-5" href="{{ route('banners.home') }}">Back</a></div>
    </div>
    <section class="my-3" id="container">
        <div class="banner_container">
            <img class="banner_imagen" id="image_fondo" src="">
            <form action="{{ route('banners.store') }}" class="inputs" id="form" method="POST"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="tipo" value="banner">
                <input type="hidden" name="status" value="1">
                <div class="d-flex">
                    <button type="button" class="btn btn-primary button_select px-4">
                        Add Image
                    </button>
                </div>
                <input type="file" id="file" name="image" class="input_file">
                <div class="inputs_body">
                    <input class="mb-2" maxlength="191" style="width: 50%;" id="i_title" type="text"
                        name="title" placeholder="Enter the title here">
                    <textarea name="description" style="width: 50%;" id="i_description" rows="3"
					placeholder="Enter the description here"></textarea>
                </div>
            </form>
        </div>

        <div class="d-flex justify-content-center my-3 ">
            <button type="button" id="button_submit" class="btn btn-primary mr-5 px-5">Create</button>
            <a href="{{ route('banners.home') }}" class="btn btn-outline-danger">Cancel</a>
        </div>
    </section>

    <div class="modal fade" id="modalBanner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="modal_body">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="button_modal">Create banner</button>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
        let title = document.getElementById('i_title'),
            description = document.getElementById('i_description'),
            submit = document.getElementById('button_submit'),
            image = document.getElementById('image_fondo'),
            inputFile = document.querySelectorAll('.input_file'),
            form = document.getElementById('form'),
            file = document.getElementById('file'),
            button_modal = document.getElementById('button_modal'),
            container = document.getElementById('container');


        inputFile.forEach(input => {
            input.onchange = function(e) {

                let reader = new FileReader();
                reader.readAsDataURL(e.target.files[0]);

                reader.onload = function() {
                    image.src = reader.result;
                }

            }
        });


        button_modal.addEventListener('click', () => {
            form.submit();
        });

        submit.addEventListener('click', (e) => {
            let errors = []
            let container_errors = document.getElementById('errors_main');

            container_errors.innerHTML = '';
            container_errors.style.display = 'none';


            if (file.files.length <= 0) {
                errors.push('you must add an image');
            }


            if (errors.length > 0) {
                let alerta_main = document.createElement('ul')

                errors.forEach(error => {
                    alerta_main.innerHTML += `
          <li> ${error} </li>
         `
                });

                container_errors.appendChild(alerta_main)
                container_errors.style.display = 'block';

            } else {
                modalBanner()
            }


        });



        function modalBanner()
        {
            let message = '',
                modal_body = document.getElementById('modal_body');

            if(title.value == '')
            {
                message = 'Are you sure you want to create the banner without a title?'
            }if(description.value == '')
            {
                message = 'Are you sure you want to create the banner without a description?'
            }if(title.value == '' &&  description.value == '')
            {
                message = 'Are you sure you want to create the banner without a title and description?'
            }


            if(message == '')
            {
                form.submit();
            }else {
                modal_body.innerHTML = `${message}`
                $('#modalBanner').modal('show')
            }
        }

    </script>
@endsection
