<div class="form-group  mb-3 p-2  col">	
    <div class="col">
    <h4>{{$title ?? ""}} </h4>
    </div>
    <div class="input-group mb-3 p-2 col">
        @foreach ($option as $item)            
            <div class="input-group-text">
                <div class="input-group-text">
                      <input name='{{$name ?? ""}}' id='{{$id ?? ""}}' type='radio' value='{{$item}}' />
                </div>
              </div>
              {{$item}}
        @endforeach  
    </div>		
</div>