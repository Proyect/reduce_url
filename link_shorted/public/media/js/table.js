
  function Load(url="json.php"){
    console.log("Load DataTable");
    $.getJSON(url, function(data) {
      $.each(data, function(index, item) {
        const row = '<tr>' +
                      '<td>' + item.url+ '</td>' +
                      '<td>' + item.new_url + '</td>' +                      
                      '<td>  <i  class="bi bi-pencil-square text-primary" Title="Edit" name="edt" data-id= ' + item.id + 
                              ' data-url ="'+item.url+'"  data-new_url ="'+item.new_url+'"   onclick="FormEdit(this)"></i> - <i class="bi bi-x-square text-danger" title="Delete" name="del" data-id ="'+item.id+'" onclick="FormDelete()"></i> </td>' +
                      '</tr>';
          //console.log(row);
          $('tbody').append(row);         
              
        });
        $('#data').DataTable();
      }); console.log("Done");
  };

    $(document).ready(function(){         
        const url = 'json.php';   
        $("#modal_data").modal('hide');
        Load(url);
      });

  function FormEdit(){
    console.log("Show Edit Form");
    //Edit   
    $('[name="edt"]').on('click', function(){
      let item = $(this).data();
      console.log(item);
      $("#modal_data #id").val(item.id);      
      $("#modal_data #name").val(item.firstName); 
      $("#modal_data #email").val(item.email);       
      $("#modal_data #lastName").val(item.lastName);
      $("#modal_data #tel").val(item.Phone);    
    }); 
     
     $("#modal_data").modal('show');   
  };
  
  //send datas
  $("#send_data").submit(function (event) {
    event.preventDefault();
    let data = {
      id:$("#modal_data #id").val(),      
      name:$("#modal_data #name").val(), 
      $("#modal_data #lastName").val(item.lastName);
      $("#modal_data #email").val(item.email);       
      
      $("#modal_data #tel").val(item.Phone); 
    }
  });  
  
      $(document).ready(function(){        
       // FormEdit();    
      });
      
  function  FormDelete(params) {
    console.log("Show delete form");
        //delete
        $("[name='del']").on("click",function(){
          console.log("Delete");
          $("#modalDelete").modal("show");
        });
  };
      $(document).ready(function () {
        FormDelete();
      });   

        
     

