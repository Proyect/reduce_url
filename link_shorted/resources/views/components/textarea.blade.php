<div class="{{$class ?? "input-group  mb-3 p-2  col"}}">  					 
    <span class="input-group-text">{{$title ?? ""}}</span> 					
  <textarea class="form-control input-sm" id="{{$id ?? ""}}" name="{{$name ?? ""}}" placeholder="{{$title ?? ""}}" 
     rows="{{$rows ?? "3"}}"  cols="{{$cols ?? "48"}}" {{$required ?? "required"}}></textarea>
</div>	