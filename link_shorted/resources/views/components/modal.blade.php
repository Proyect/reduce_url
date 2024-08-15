<!-- Modal -->
<div class="modal {{$class ??  "fade"}}" id="{{$id ?? "modal"}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{$title ?? ""}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">          
          @yield('detail')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">Cerrar</button>          
          {{$modalFooter ?? ""}}
        </div>
      </div>
    </div>
  </div>