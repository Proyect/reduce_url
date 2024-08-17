
  function Load(data="/"){
    console.log("Load DataTable");
    console.log(url);
    
      $.each(data, function(index, item) {
        const row = '<tr>' +
                      '<td>' + item.url+ '</td>' +
                      '<td>' + item.new_url + '</td>' +                      
                      '<td>  <i  class="bi bi-pencil-square text-primary" Title="Edit" name="edt" data-id= ' + item.id + 
                              ' data-url ="'+item.url+'"  data-new_url ="'+item.new_url+'"   onclick="FormEdit(this)"></i> - <i class="bi bi-x-square text-danger" title="Delete" name="del"  data-url ="'+item.url+'"  data-new_url ="'+item.new_url+'"  data-id ="'+item.id+'" onclick="FormDelete()"></i> </td>' +
                      '</tr>';
          //console.log(row);
          $('tbody').append(row);               
        });
        $('#data').DataTable();      
  };

    $(document).ready(function(){    
        $("#modal_data").modal('hide');
        Load(url);
      });

  function FormEdit(element){
    console.log("Show Edit Form");
    //Edit   
    $('[name="edt"]').on('click', function(){
      let item = $(this).data();
      console.log(item);
      $("#modal_data #id").val(item.id);      
      $("#modal_data #url").val(item.url); 
      $("#modal_data #new_url").val(item.new_url);
      
     $("#modal_data").modal('show');   
    })
    };
  
  //send datas update
  $("#registration-form").submit(function (event) {
    event.preventDefault();
    
    var form = $(this).serialize(); 
    $.ajax({
      type:"POST",
      url:"link/edit",
      data: form,
      beforeSend: function () {
        console.log("Enviando Informacion");
        $("#container").hide();
        $("#preload").show();        
    },
      success: function(result){
        console.log(result);       
        location.reload();
        setTimeout(10000);
        $("#preload").hide();
        $("#container").show();
        $("#toast #body_toast").text("Datos Cargados correctamente");
        $("#toast").modal("show");      
      },
      error:function(){
        console.log("Error");       
        location.reload();
        setTimeout(10000);
        $("#container").show();
        $("#preload").hide();
        $("#modal_data").modal('hide');        
        $("#toast [class='modal-body']").text("Error en la actualizacion de datos");
        $("#toast").modal("show");        
      }

    });
  });  
  
      
  function  FormDelete(params) {
    console.log("Show delete form");
        //delete
        $("[name='del']").on("click",function(){
          let item = $(this).data();
          console.log(item);
          $("#delete-form #id").val(item.id);
          $("#delete-form #url").val(item.url); 
          $("#delete-form #new_url").val(item.new_url); 
          $("#modalDelete").modal("show");
        });
    };
     
   //send datas delete
  $("#delete-form").submit(function (event) {
    event.preventDefault();
    
    var form = $(this).serialize(); 
    $.ajax({
      type:"POST",
      url:"link/delete",
      data: form,
      beforeSend: function () {
        console.log("Enviando Informacion");
        $("#container").hide();
        $("#preload").show();        
    },
      success: function(result){
        console.log(result);       
        location.reload();
        setTimeout(10000);
        $("#preload").hide();
        $("#container").show();
        $("#toast #body_toast").text("Datos Eliminados correctamente");
        $("#toast").modal("show");      
      },
      error:function(){
        console.log("Error");       
        location.reload();
        setTimeout(10000);
        $("#container").show();
        $("#preload").hide();
        $("#modal_data").modal('hide');        
        $("#toast [class='modal-body']").text("Error en la eliminacion de datos");
        $("#toast").modal("show");        
      }

    });
  });  
        
     

