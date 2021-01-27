@extends('layouts.login')

@section('content')    
<br />
<br />    
<br />
<div class="col-md-11 col-sm-11 container">
    <div class="card">
        <h5 class="card-header">Followers by Gender</h5>
        <div class="card-body">

            <!-- Smart Wizard  -->
            <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>

            <div id="wizard" class="form_wizard wizard_horizontal">
                <ul class=    "wizard_steps">
                <li>
                    <a href="#step-1">
                    <span class="step_no">1</span>
                    <span class="step_descr">
                        Step 1<br />
                        <small>Step 1 description</small>
                    </span>
                    </a>
                </li>
                <li>
                    <a href="#step-2">
                    <span class="step_no">2</span>
                    <span class="step_descr">
                            Step 2<br />
                            <small>Step 2 description</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#step-3">
                    <span class="step_no">3</span>
                    <span class="step_descr">
                            Step 3<br />
                            <small>Step 3 description</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#step-4">
                    <span class="step_no">4</span>
                    <span class="step_descr">
                            Step 4<br />
                            <small>Step 4 description</small>
                        </span>
                    </a>
                </li>
                </ul>
                <div id="step-1">
					<form action="{{ url('subirArchivo') }}" method="POST" id="form-archivo" onsubmit="submitFile(this); return false" enctype="multipart/form-data">
						<div class="form-group">
							<div class="col-md-5">
								<label for="">Subri Archivo</label>
								<input type="file" name="file">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-5">
								<button type="submit"  class="btn btn-dark"> Enviar</button>
								<!-- onclick="submitFile('#form-archivo')" -->
							</div>
						</div>
					</form>

                </div>
                <div id="step-2">
                    <h2 class="StepTitle">Step 2 Content</h2>
                    <p>
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div id="step-3">
                    <h2 class="StepTitle">Step 3 Content</h2>
                    <p>
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div id="step-4">
                    <h2 class="StepTitle">Step 4 Content</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>

            </div>
            <!-- End SmartWizard Content -->

            
        </div>
    
    </div>
</div>


@endsection


@section('scripts')
    <script src="{{ asset('assets/vendor/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}"></script>
    <script>
        $('#wizard').smartWizard({
            //onLeaveStep:leaveAStepCallback,
            //onFinish:onFinishCallback,
            labelFinish: '<span class="glyphicon glyphicon-floppy-disk"></span> Guardar',
            transitionEffect: 'slide'
        });

        function leaveAStepCallback(obj, context){
            // alert("Leaving step " + context.fromStep + " to go to step " + context.toStep);
            return validateSteps(context.fromStep); // return false to stay on step and true to continue navigation 
        }

        function onFinishCallback(objs, context){
            
            if(validateAllSteps()){
                // $('#datos_academicos').submit();
                // sendData(this);	
            }
        }

        // Your Step validation logic
        function validateSteps(stepnumber){
            var isStepValid = true;
    
            return true;
            
        }
                    
        function validateAllSteps(){
            var isStepValid = true;
            // all step validation logic
            // if (!validator.checkAll($("form")) ) { //vañodandp
            //     isStepValidfalse = false;
            // }	     
            return isStepValid;
        }  

        $('#wizard_verticle').smartWizard({
            transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-primary');
        $('.buttonPrevious').addClass('btn btn-dark');
        $('.buttonFinish').addClass('btn btn-success');



		/*Funcion para subir archivos*/
		function submitFile(e){
			
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			var formData = new FormData(document.getElementById($(e).attr('id')));
			formData.append("dato", "valor");
			$.ajax({
				type:$(e).attr("method"),
				url: $(e).attr("action"),
				dataType: "html",
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				beforeSend:function(){
					console.log('procesando'); 
				},
				success: function(data)
				{
				
				// var json = JSON.parse(data);
				console.log(data); 
				}
			});

			return false;
		}

   </script>

@endsection