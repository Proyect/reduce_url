<div class="alert {{$alert ?? "alert-danger"}} alert-dismissible fade show" role="alert">
    <strong> {{$title ?? "Alert"}}</strong> {{$detail ?? "Problems"}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>