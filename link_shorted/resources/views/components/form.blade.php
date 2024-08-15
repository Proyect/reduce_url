<?php
   /*********************************************
	 *  Sitio web infrasoft
	 * Autor: Ariel Marcelo Diaz
	 * https://infrasoft.com.ar/
	 * Tel: +5493872204925
	 * Salta Capital
	 * Derechos reservados
	 **********************************************/
?>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        @include('components.alert',["$detail"=>$error])
    @endforeach
        
@endif

<form action="{{$action ?? route('form')}}"  name="form" id="form" class="form-inline" role="form"
    method= "POST" {{$form_prop ?? ""}} > 
    @csrf
    <div class="form-group row">
        @include("components.input",["title"=>"Nombre","id"=>"nombre","name"=>"nombre"])
        @include("components.input",["title"=>"Apellido","id"=>"apellido","name"=>"apellido"])
        @include("components.input",["title"=>"Direccion","id"=>"direccion","name"=>"direccion"])
    </div>
    <div class="form-group row">
        @include("components.input",["title"=>"Email","id"=>"email","name"=>"email","type"=>"email"])
        @include("components.input",["title"=>"Telefono","id"=>"tel","name"=>"tel", "type"=>"number","required"=>""])
        @include("components.input",["title"=>"Celular","id"=>"cel","name"=>"cel", "type"=>"number"])
    </div>

    @yield('add_component')

    <div class="form-group row">
        <div class="form-group  col-sm-12 col-md-12 col">
        @include("components.input",["title"=>"Asunto","id"=>"asunto","name"=>"asunto"])
        @include('components.textarea',["title"=>"Contenido","id"=>"contenido", "name"=>"contenido"])
        </div>
        <div class="form-group  col-sm-12 col-md-12 col">
            <input type="hidden" value="{{$titleForm ?? "Contacto"}}" id="form" name="form"/>
            <div class="g-recaptcha  mb-3 p-2" data-sitekey="6LextL4SAAAAAAerQTx4C32KSe90Jg-HkrJjJKq3"></div>
            @include('components.button')
        </div>
    </div>
</form>


<div class="toast top-0 start-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
     
      <strong class="me-auto">Formulario</strong>    
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
    </div>
  </div>