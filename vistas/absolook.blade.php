@extends('layout.principal')

@section('title')
	Casos de éxito | Absolook
@endsection

@section('styles')
@endsection

@section('content')
  <section class="container-custom py-3 py-md-4">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item text-uppercase aleft-1" aria-current="page">Inicio</li>
            <li class="breadcrumb-item text-uppercase aleft-1 active" aria-current="page">Casos de éxito</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <section class="container-custom py-3 py-md-4">
    <div class="row">
      <div class="col-md-12">
        <h1 class="atop-1">Absolook</h1>
      </div>
    </div>
  </section>

  <section class="container-fluid bg-black py-3 py-md-5">
    <div class="row">
      <div class="container-custom">
        <div class="row">
          <div class="col-md-6 mb-3 mb-md-0 text-white">
            <p class="h4 text-uppercase fw-bold mb-2 atop-2">Imaginamos</p>
            <p class="mb-3 mb-md-5 aleft-2">Un logo en el que se mezclara el trabajo del estilista con la frescura que se vive al adoptar un nuevo estilo, cuando nos reinventamos a través de un corte de cabello y el impacto es absoluto.</p>

            <p class="h4 text-uppercase fw-bold mb-2 atop-3">Visualizamos</p>
            <ul class="ps-3">
              <li class="aleft-3">La suavidad con la que debe tratarse a cada cliente</li>
              <li class="aright-1">La confianza que pone en quien lo arregla</li>
              <li class="aleft-4">La mirada de quien se asombra ante nuestros cambios</li>
              <li class="aright-2">Nuestra presencia en la zona</li>
            </ul>
          </div>

          <div class="col-md-6 aright-3">
            <div class="row justify-content-center align-items-center h-100">
              <div class="col-md-10">
                <div class="carousel-loader text-white text-center">
                  <i class="fa fa-spin fa-spinner fa-5x"></i>
                </div>

                <div id="absolook-carousel" class="carousel custom-controls shadow-yellow slide" data-bs-ride="carousel" style="display:none;">
                  <div class="carousel-inner"></div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#absolook-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#absolook-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-custom py-3 py-md-5">
    <div class="row">
      <div class="col-md-12 text-center">
        <p class="h3 text-uppercase fw-bold mb-3 mb-md-4 atop-4">Presentamos</p>

        <p class="abottom-1">
          <span class="d-md-block">Suaves líneas que transmiten confianza para quien decide cambiar su imagen, con un estilo</span>
          fresco y audaz que transmita seguridad a quien transforma absolutamente su look.
        </p>
      </div>
    </div>
  </section>

  <section class="container-fluid py-3 py-md-4">
    <div class="row">
      <div class="col-12 px-0 atop-5">
        <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/absolook/ABSOLOOK-07.jpg") }}" alt="absolook_07">
      </div>

      <div class="col-6 px-0 aleft-5">
        <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/absolook/ABSOLOOK-04.jpg") }}" alt="absolook_04">
      </div>
      <div class="col-6 px-0 aright-4">
        <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/absolook/ABSOLOOK-08.jpg") }}" alt="absolook_08">
      </div>


      <div class="col-12 px-0 abottom-2">
        <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/absolook/ABSOLOOK-02.jpg") }}" alt="absolook_02">
      </div>
      <div class="col-6 px-0 aright-5">
        <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/absolook/ABSOLOOK-09.jpg") }}" alt="absolook_09">
      </div>
      <div class="col-6 px-0 aleft-6">
        <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/absolook/ABSOLOOK-06.jpg") }}" alt="absolook_06">
      </div>
    </div>
  </section>

  <section class="container-custom py-3 py-md-5">
    <div class="row">
      <div class="col-md-12 text-center">
        <p class="h3 mb-3 mb-md-4 atop-6">
          <span class="d-md-block">“El significado de un logo deriva de la calidad de aquello</span>
          que simboliza”
        </p>

        <p class="h5 abottom-3">-Paul Rand</p>
      </div>
    </div>
  </section>

  @include("sections.contact-form")
@endsection

@section('scripts')
  @include('website.formvalidation.contact')

  <script>
    $(function(){
      $.ajax({
        url: "https://picsum.photos/v2/list",
        success: function(resp) {
          let carousel_items = "";

          $.each(resp, function(i, el){
            carousel_items += `
              <div class="carousel-item${(i==0 ? " active" : "")}">
                <img class="img-fluid d-block w-100" src="${el.download_url}" class="d-block w-100" alt="foto_${el.id}">
              </div>
            `;
          });

          $("#absolook-carousel .carousel-inner").append(carousel_items);

          $(".carousel-loader").fadeOut(300, function(e){
            $("#absolook-carousel").show(300);
          });
        }
      });
    });
  </script>
@endsection
