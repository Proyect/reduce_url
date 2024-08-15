<div id="{{$id  ?? "carousel"}}" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach ($list as $item)
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{$item ?? ""}}" class="d-block w-100" alt="image">
      </div>
      @endforeach     
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>