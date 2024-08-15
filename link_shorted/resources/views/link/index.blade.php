@extends('layouts.site')

@section('container')  

    <h2>Links</h2>
@include('components.button')
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
          <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        
        <h2>Registration Form</h2>
          <form id="registration-form" class="form">
            @csrf 
            <div class="row">
            <div class="col">
                <label for="name">ID:</label>
                <input type="text" id="id" name="id" class="form-control w50" required>
            </div>  
            <div class="col">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" class="form-control w50" required>
            </div>
            <div class="col">
              <label for="name">Last Name:</label>
              <input type="text" id="lastName" name="lastName" class="form-control w50" required>
            </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
              </div>
              <div class="col">
                <label for="tel">Tel:</label>
                <input type="tel" id="tel" name="tel" class="form-control" required>        
              </div>
            
            </div>
            <hr/>
            <div class="row">
              <div class="col text-center">
                <button  class="btn btn-primary btn-outline-light fw-bold" id="updateData">
                <i class="bi bi-pencil-fill" title="Edit" name="edt"></i> Register
                </button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="send_data">
                  <i class="bi bi-x-square"></i></i> Close
                </button> 
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
        Are you sure to delete the datas?
        </div>
        <div class="modal-footer">
          <form action="">
            @csrf
            <input type="hidden" name="id" id="id" value="0">
            <button type="button" class="btn btn-danger btn-outline-light">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>  
           </form>      
        </div>
      </div>
    </div>
  </div>
  @endsection