
  function Load(){
    console.log("Load DataTable");
    console.log(data);
    $('tbody').html("");
    $.ajax({
      url: "link/list", 
      method: 'GET', 
      dataType: 'json',
      success: function(data) {
          console.log(data); 
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
      },
      error: function(error) {
          console.error('Error al obtener los datos:', error);
      
        }
  });
           
  };

    $(document).ready(function(){    
        $("#modal_data").modal('hide');
        Load(url);
      });
  
  $("new_link").submit(function (event) {
    event.preventDefault();

    var form = $(this).serialize(); 
    $.ajax({
      type:"POST",
      url:"link/new",
      data: form,
      beforeSend: function () {
        console.log("Enviando Informacion");
        $("#container").hide();
        $("#preload").removeClass("d-none");
        $("#modal_data").modal("hide");         
    },
      success: function(result){
        console.log(result);       
        Load("/link/list");          
        $("#container").show();         
        $("#preload").addClass("d-none");
        //result.mje  
        $("#toast #body_toast").text("Datos Cargados correctamente");
        $("#toast").modal("show");   
        
        setTimeout(function () {
          $('#toast').modal('hide');     
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();   console.log("Ocultando toast");
        },5000);   
      },
      error:function(){
        console.log("Error");       
        Load("link/list/");        
        
        $("#container").show();         
        $("#preload").addClass("d-none");
             
        $("#toast [class='modal-body']").text("Error en la actualizacion de datos");
        $("#toast").modal("show");        

        setTimeout(function () {
          $('#toast').modal('hide');     
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();   console.log("Ocultando toast");
        },5000); 
      }

    });
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
        $("#preload").removeClass("d-none");
        $("#modal_data").modal("hide");         
    },
      success: function(result){
        console.log(result);       
        Load("/link/list");          
        $("#container").show();         
        $("#preload").addClass("d-none");

        $("#toast #body_toast").text("Datos Cargados correctamente");
        $("#toast").modal("show");   
        
        setTimeout(function () {
          $('#toast').modal('hide');     
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();   console.log("Ocultando toast");
        },5000);   
      },
      error:function(){
        console.log("Error");       
        Load("link/list/");        
        
        $("#container").show();         
        $("#preload").addClass("d-none");
             
        $("#toast [class='modal-body']").text("Error en la actualizacion de datos");
        $("#toast").modal("show");        

        setTimeout(function () {
          $('#toast').modal('hide');     
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();   console.log("Ocultando toast");
        },5000); 
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
        $("#modalDelete").modal('hide');          
    },
      success: function(result){
        console.log(result);      
              
        Load("/link/list");          
        $("#container").show();         
        $("#preload").addClass("d-none");

        $("#toast #body_toast").text("Datos Eliminados correctamente");
        $("#toast").modal("show");      

        setTimeout(function () {
          $('#toast').modal('hide');     
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();   console.log("Ocultando toast");
        },5000); 

      },
      error:function(){
        console.log("Error");       
        Load("link/list/");        
        
        $("#container").show();         
        $("#preload").addClass("d-none");        
              
        $("#toast [class='modal-body']").text("Error en la eliminacion de datos");
        $("#toast").modal("show");
        
        setTimeout(function () {
          $('#toast').modal('hide');     
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();   console.log("Ocultando toast");
        },5000); 
      }

    });
  });  
        
     

