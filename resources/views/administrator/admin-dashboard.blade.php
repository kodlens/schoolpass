@extends('layouts.app')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/img01.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/img01.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/img01.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>


<div style="width: 500px; margin: auto;">
    <input type="text" class="form-control">

    <select class="form-control">
        @foreach ($appointments as $item)
            <option value="{{ $item->appointment_type_id }}">{{ $item->appointment }}</option>
        @endforeach
    </select>
</div>
    



@endsection
   
