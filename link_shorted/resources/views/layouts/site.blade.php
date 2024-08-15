
<!DOCTYPE html>
<html lang="es">

<head>
    <title>{{$site[0]->title ?? "Infrasoft Servicios Informaticos"}}</title>
    <!-- Define Charset -->
    <meta charset="utf-8">
    <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="{{$site[0]->descripcion ?? "Sistema"}}"/>
  <meta name="author" content="Ariel Marcelo Diaz">
  <meta name='keywords' content="{{$site[0]->tag ?? "sistemas varios"}}"/>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">	
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href= "./media/css/styles.css" type="text/css" media="screen" /> 
   
<!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

@yield('CodesStyles')
</head>
<body>
  <div class="position-absolute  top-50 start-50 text-center d-flex justify-content-center" >
    <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status" id="preload">     
    </div>
    </div>
    <div class="container d-none">
        <!-- Contact Header -->       
        <!-- Nav -->
      @yield('container')     
    </div>    

<!-- Librería jQuery requerida por los plugins de JavaScript -->  
  	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    
    <!-- Data Tables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script> 
    <script src="./media/js/table.js"></script>
    <script>
         $(document).ready(function(){
          setTimeout(1000);
          $("#preload").hide();
          $(".container").show();	
         }:      

    </script>
@yield('footer')

</body>