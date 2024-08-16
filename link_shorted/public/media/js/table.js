
  function Load(data="/"){
    console.log("Load DataTable");
    console.log(url);
    
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
  
  //send datas
  /*$("#send_data").submit(function (event) {
    event.preventDefault();
    let data = {
      id:$("#modal_data #id").val(),      
      url:$("#modal_data #url").val(), 
      new_url:$("#modal_data #new_url").val(),
    }
  });  */
  
      
  function  FormDelete(params) {
    console.log("Show delete form");
        //delete
        $("[name='del']").on("click",function(){
          let item = $(this).data();
          console.log(item);
          $("#modal_data #id").val(item.id); 
          $("#modalDelete").modal("show");
        });
    };
     
        
     

