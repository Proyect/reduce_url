<div class="{{$class ?? "input-group mb-3 p-2 col"}}">
    <div class="input-group-prepend">
      <span class="input-group-text" >{{$title ?? ""}}</span>
    </div>
    <input type="{{$type ??  "text"}}" class="form-control" placeholder="{{$data_title  ?? ""}}"  
        aria-describedby="{{$title ?? ""}}" id="{{$id ?? ""}}" name="{{$name ?? ""}}" {{$required ?? "required"}}
        value="{{$value ?? ""}}" />
</div>
