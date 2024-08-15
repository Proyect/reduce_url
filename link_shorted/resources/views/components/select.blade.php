<div class="form-group col">    				
    <div class="input-group mb-3 p-2 col">
      <div class="input-group-prepend">
        <span class="{{$class ?? "input-group-text"}}" id="{{$id ?? ""}}" > {{$title ?? ""}} </span>
      </div>
      <select class="form-control" id="{{$id ?? ""}}" name= "{{$name ?? ""}}">
        @foreach ($option as $item)
            <option>{{$item}}</option> 
        @endforeach          
      </select>
    </div>
</div>	