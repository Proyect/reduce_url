<!-- Start Service  -->
<div class="{{$class ?? "card border-primary mb-4 mx-auto"}}" style="width: 16rem;">
    <div class="card-header "  >
       <a href='{{$link ?? ""}}'>
       <h6 class="card-title text-primary">							
               <i class="{{$fa ?? "fa fa-sitemap"}}"></i>
                <b> '{{$title ?? ""}}' </b>							
       </h6>
       </a>
    </div>     			 	
    <div class="card-body">            			            
             <p class="card-text">{{$detail ?? ""}}</p>           
    </div>    
</div>
<!-- End Service Icon -->