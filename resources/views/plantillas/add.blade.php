@extends('layouts.app')

@section('styles')
	<link rel="stylesheet" href="{{ asset('assets/vendor/ckeditor5/ckeditor5.css') }}">
	<style>
		img {
			width: 90%;
		}
	</style>
@endsection

@section('content')



    <!-- content -->
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">

            
                <div class="row">
            
                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Nueva Plantilla</h5>
                            <div class="card-body p-5">
								
								<div class="row">
									<div class="col-md-6">
										<input type="text" name="namePlantilla" id="namePlantilla" placeholder="Nombre de la Plantilla" class="form-control"  />
									</div>
									<div class="col-md-6 text-right">
		                            	<button type="button" id="getdata" class="btn btn-default pull-right">GET DATA</button>
									</div>
								</div>
								

                            	<br/>
                            	<br/>
	
							

								<div class="document-editor">
								    <div class="document-editor__toolbar"></div>
								    <div class="document-editor__editable-container">
								        <div class="document-editor__editable">
								        </div>
								    </div>
								</div>

									














                                
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->
                </div>
               
                
                

              
                
        </div>
    </div>
    <!--end content -->

<input type="hidden" id="urluploadimg" value="{{ url('ckeditorUploadImg') }}">
<input type="hidden" id="urlGuardarPlantilla" value="{{ url('plantillas') }}">
@endsection

@section('scripts')
	
	<script src="{{ asset('assets/vendor/ckeditor5/ckeditor.js') }}"></script>
	<script type="module">
		
		
		$(document).ready(function(){


		    DecoupledEditor.create( document.querySelector( '.document-editor__editable' ), {

		        extraPlugins: [ MyCustomUploadAdapterPlugin ],
		        cloudServices: {
		           // ....
		        },
		       heading: {
		            options: [
		                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
		                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
		                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
		            ]
		        }




		    } )
		    .then( editor => {
		        const toolbarContainer = document.querySelector( '.document-editor__toolbar' );

		        toolbarContainer.appendChild( editor.ui.view.toolbar.element );

		        window.editor = editor;
		    } )
		    .catch( err => {
		        console.error( err );
		    } );



		    $("#getdata").click(function(){
		    	const data = editor.getData()
		    	let datos = {
		    		'_token': $('meta[name="csrf-token"]').attr('content'),
		    	  	'_method': 'POST',
		    	   	'name': $("#namePlantilla").val(),
		    	   	'plantilla': data
	    	   	};

		    	$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				
				
				$.ajax({
					type: 'POST',
					url: $("#urlGuardarPlantilla").val(),
					data: datos,
					beforeSend:function(){
						 alert_beforeSend('Guardando Plantilla...');
					},
					success: function(res)
					{
						al.close();
						if (res.status) {

							alert_success(res.success);
						}else{

							alert_error('Error inesperado' + res.error)
						}

					
						 
					}
				});

				return false;


		    });


		});

			// const data = editor.getData(); //obtiene la data
			// editor.model.document.on( 'change:data', () => { //escuchando los cambios
			//     console.log( 'The data has changed!' );
			// } );

</script>

<script src="{{ asset('assets/vendor/ckeditor5/CargadeImg.js') }}"></script>


	


@endsection