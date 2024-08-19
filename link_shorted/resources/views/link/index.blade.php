@extends('layouts.site')

@section('container')  

    <h2>Links</h2>
    <div class="row">
    <form action="{{route('link.create')}}" method="post">
      @csrf
      <div class="form-group col">     
          @include('components.input',["id"=>"url","name"=>"url","type"=>"url","title"=>"URL"])          
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
<div class="modal fade" id="modal_data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data</h5>          
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        
        <h2>Actualizar Datos</h2>
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
                @include('components.button',["type"=>"button","title"=>"Cancelar","class"=>"btn btn-secondary","add"=>"data-bs-dismiss=modal"])          
              </div>
            </div>      
          </form>
            
        </div>    
      </div>
    </div>
  </div>
  
  <!-- Modal Are you Segure?-->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="idAlert">Alert</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Confirma la eliminacion de la URL?  
        </div>
        <div class="modal-footer">
          <form action="{{route("link.delete")}}" method="POST" id="delete-form">
            @csrf
            @method('DELETE')
              @include('components.input',["title"=>"id","type"=>"text","id"=>"id", "name"=>"id","required"=>"readonly"])
              @include('components.input',["id"=>"url","name"=>"url","type"=>"url","title"=>"URL","required"=>"readonly"])
              @include('components.input',["id"=>"new_url","name"=>"new_url","type"=>"url","title"=>"URL Reducida","required"=>"readonly"])
              @include('components.button',["title"=>"Eliminar Datos","class"=>"btn btn-danger"])
              @include('components.button',["type"=>"button","title"=>"Cancelar","class"=>"btn btn-secondary","add"=>"data-bs-dismiss=modal"])  
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
  <div class="modal fade" id="toast" tabindex="-1" aria-labelledby="toastLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="toastLabel">Notificaciones</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="body_toast">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>          
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