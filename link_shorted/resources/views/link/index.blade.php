@extends('layouts.site')

@section('container')  

    <h2>Links</h2>
    <div class="row">
    <form  method="POST" id="new_link" action="{{route("link.create")}}">
      @csrf
      <div class="col">     
          @include('components.input',["id"=>"url","name"=>"url","type"=>"url","title"=>"URL"])  
      </div>
      <div class="col">        
          @include('components.button',["title"=>"Crear URL reducida"])
        </div>            
    </form>
  </div> 

<table id="data" class="table table-striped w-100">
    <thead>
      <tr>
          <th>link</th>
          <th>Short Link</th>          
          <th>OP</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>link</th>
        <th>Short Link</th>          
        <th>OP</th>
    </tr>
      </tfoot>
     <tbody>      
    </tbody>
  </table>
  
 <!-- Modal New and edit-->
<div class="modal" id="modal_data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header  bg-primary bg-gradient text-white">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>          
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                
          <form id="registration-form" class="form" action="{{route("link.update")}}" method="POST">
            @csrf 
            <div class="">
              <div class="row">
               @include('components.input',["type"=>"text","id"=>"id", "name"=>"id", "title"=>"id","required"=>"readonly"])
              </div>                             
              <div class="row">  
                @include('components.input',["id"=>"url","name"=>"url","type"=>"url","title"=>"URL"]) 
              </div>
                <div class="row">
                  @include('components.input',["id"=>"new_url","name"=>"new_url","type"=>"url","title"=>"URL Reducida"])                
                </div> 
              </div>
            
            <hr/>
            <div class="row">
              <div class="col text-center">
                @include('components.button',["title"=>"Actualizar Datos"])
                @include('components.button',["type"=>"button","title"=>"Cancelar","class"=>"btn btn-secondary btn-outline-light fw-bold","add"=>"data-bs-dismiss=modal"])          
              </div>
            </div>      
          </form>
            
        </div>    
      </div>
    </div>
  </div>
  
  <!-- Modal Are you Segure?-->
<div class="modal" id="modalDelete" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger bg-gradient text-white">
          <h1 class="modal-title fs-5" id="idAlert">Confirma la eliminacion de la URL?  </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-footer">
          <form action="{{route("link.delete")}}" method="POST" id="delete-form">
            @csrf
            @method('DELETE')
              @include('components.input',["title"=>"id","type"=>"text","id"=>"id", "name"=>"id","required"=>"readonly"])
              @include('components.input',["id"=>"url","name"=>"url","type"=>"url","title"=>"URL","required"=>"readonly"])
              @include('components.input',["id"=>"new_url","name"=>"new_url","type"=>"url","title"=>"URL Reducida","required"=>"readonly"])
              @include('components.button',["title"=>"Eliminar Datos","class"=>"btn btn-danger fw-bold"])
              @include('components.button',["type"=>"button","title"=>"Cancelar","class"=>"btn btn-secondary btn-outline-light fw-bold","add"=>"data-bs-dismiss=modal"])  
           </form>      
        </div>
      </div>
    </div>
  </div>

<!--
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#toast">
    Launch toast
  </button>
  
   Notifications -->
  <div class="modal" id="toast" tabindex="-1" aria-labelledby="toastLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary bg-gradient text-white">
          <h5 class="modal-title" id="toastLabel">Notificaciones</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="body_toast">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-outline-light fw-bold" data-bs-dismiss="modal">Close</button>          
        </div>
      </div>
    </div>
  </div>
</div>
  
  @endsection
  @section('footer')
  <script>
    var url = @json($link);
    
    
  </script>
      
  @endsection