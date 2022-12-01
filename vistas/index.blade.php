@extends('layout.principal')

@section('title')
	Inicio
@endsection

@section('styles')
@endsection

@section('content')
  <section class="container-custom py-3 py-md-5">
  	<div class="row align-items-center">
  		<div class="col-md-6 mb-3 mb-md-0">
        <p class="h1 mb-3 atop-1">
          Invertir en la identidad de tu marca no es caro, no hacerlo sí lo es.
        </p>

        <p class="abottom-1">
          En mybrand planeamos, diseñamos y ejecutamos estrategias bajo una metodología comprobada para encontrar la personalidad apropiada de tu marca.
        </p>
      </div>

      <div class="col-md-6 aright-1">
        <div class="row justify-content-center">
          <div class="col-4 col-md-6 col-lg-7">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/b_banner.svg") }}" alt="b_banner">
          </div>
        </div>
      </div>
  	</div>
  </section>

  <section class="container-fluid bg-yellow py-3 py-md-5">
    <div class="row">
      <div class="container-custom">
        <div class="row justify-content-center">
          <div class="col-lg-7 text-center">
            <p class="text-uppercase fw-bold h3 mb-3 mb-md-4 atop-2">¿Qué hacemos?</p>

            <p class="mb-3 mb-md-4 atop-2">
              Te ayudamos a crear la personalidad de tu empresa. Con nuestra asesoría 360 podrás tener identidad visual, tono de comunicación y lenguaje sin importar el tipo de negocio que tengas, te asesoramos en:
            </p>

            <div class="row justify-content-center">
              <div class="col-4 aleft-2">
                <img class="img-fluid d-block m-auto home-what-we-do" src="{{ URL::asset("assets/images/naming.svg") }}" alt="naming">
              </div>
              <div class="col-4 abottom-2">
                <img class="img-fluid d-block m-auto home-what-we-do" src="{{ URL::asset("assets/images/identidad_de_marca.svg") }}" alt="identidad_de_marca">
              </div>
              <div class="col-4 aright-2">
                <img class="img-fluid d-block m-auto home-what-we-do" src="{{ URL::asset("assets/images/look_and_feel_digital.svg") }}" alt="look_and_feel_digital">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-custom py-3 py-md-5">
    <div class="row justify-content-center py-md-3">
      <div class="col-md-12 text-center">
        <p class="h1 atop-3">
          <span class="d-md-block">Sabemos justo lo que tu <span class="text-uppercase">marca</span> necesita para atraer</span>
          clientes potenciales
        </p>
      </div>
    </div>
  </section>

  <section class="container-fluid p-relative py-3 py-md-5">
    <div class="row">
      <div class="container-custom">
        <div class="row justify-content-center py-md-3">
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen.png") }}" alt="imagen_b">
            <p class="hgi-caption">Simple</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-1.png") }}" alt="imagen-1_b">
            <p class="hgi-caption">Complejo</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-2.png") }}" alt="imagen-2_b">
            <p class="hgi-caption">Dulce</p>
          </div><div class="col-md-12 d-lg-none mb-4"></div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-3.png") }}" alt="imagen-3_b">
            <p class="hgi-caption">Divertido</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-4.png") }}" alt="imagen-4_b">
            <p class="hgi-caption">Furioso</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-5.png") }}" alt="imagen-5_b">
            <p class="hgi-caption">Equilibrado</p>
          </div>

          <div class="col-md-12 mb-4"></div>

          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-6.png") }}" alt="imagen-6_b">
            <p class="hgi-caption">Fantasioso</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-7.png") }}" alt="imagen-7_b">
            <p class="hgi-caption">Agresivo</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-8.png") }}" alt="imagen-8_b">
            <p class="hgi-caption">Deportista</p>
          </div><div class="col-md-12 d-lg-none mb-4"></div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-9.png") }}" alt="imagen-9_b">
            <p class="hgi-caption">Rudo</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-10.png") }}" alt="imagen-10_b">
            <p class="hgi-caption">Depresivo</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-11.png") }}" alt="imagen-11_b">
            <p class="hgi-caption">Exótico</p>
          </div>

          <div class="col-md-12 mb-4"></div>

          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-12.png") }}" alt="imagen-12_b">
            <p class="hgi-caption">Extrovertido</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-13.png") }}" alt="imagen-13_b">
            <p class="hgi-caption">Ecológico</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-14.png") }}" alt="imagen-14_b">
            <p class="hgi-caption">Pulcro</p>
          </div><div class="col-md-12 d-lg-none mb-4"></div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-15.png") }}" alt="imagen-15_b">
            <p class="hgi-caption">Imitador</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-16.png") }}" alt="imagen-16_b">
            <p class="hgi-caption">Natural</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-17.png") }}" alt="imagen-17_b">
            <p class="hgi-caption">Ilusionista</p>
          </div>

          <div class="col-md-12 mb-4"></div>

          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-18.png") }}" alt="imagen-18_b">
            <p class="hgi-caption">Tecnológico</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-19.png") }}" alt="imagen-19_b">
            <p class="hgi-caption">Analítico</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-20.png") }}" alt="imagen-20_b">
            <p class="hgi-caption">Cretivo</p>
          </div><div class="col-md-12 d-lg-none mb-4"></div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-21.png") }}" alt="imagen-21_b">
            <p class="hgi-caption">Inteligente</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-22.png") }}" alt="imagen-22_b">
            <p class="hgi-caption">Puntual</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-23.png") }}" alt="imagen-23_b">
            <p class="hgi-caption">Pacífico</p>
          </div>

          <div class="col-md-12 mb-4"></div>

          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-24.png") }}" alt="imagen-24_b">
            <p class="hgi-caption">Ligero</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-25.png") }}" alt="imagen-25_b">
            <p class="hgi-caption">Saludable</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-26.png") }}" alt="imagen-26_b">
            <p class="hgi-caption">Misterioso</p>
          </div><div class="col-md-12 d-lg-none mb-4"></div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-27.png") }}" alt="imagen-27_b">
            <p class="hgi-caption">Enérgico</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-28.png") }}" alt="imagen-28_b">
            <p class="hgi-caption">Artístico</p>
          </div>
          <div class="col-4 col-md col-lg-2 home-gallery-item p-relative aleft-4-speed">
            <img class="img-fluid d-block m-auto" src="{{ URL::asset("assets/images/imagen-29.png") }}" alt="imagen-29_b">
            <p class="hgi-caption">Empalagoso</p>
          </div>
        </div>
      </div>
    </div>

    <div class="home-gallery-filter">
      <a id="hgf-button" class="btn btn-outline-white rounded-0 text-uppercase py-md-3 px-md-5" href="#">
        <span class="h1">Compruébalo</span>
      </a>
    </div>
  </section>

  <section class="container-fluid bg-white py-3 py-md-5">
    <div class="row">
      <div class="container-custom">
        <div class="row justify-content-center py-md-3">
          <div class="col-md-10 text-center">
            <p class="h4 fw-normal abottom-3">
              En mybrand nos apasiona analizar, imaginar, crear y definir estilos de comunicación que posicionarán tu marca.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid bg-black py-3 py-md-5">
    <div class="row">
      <div class="container-custom">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-5 text-center text-md-start text-white mb-5 mb-md-0">
            <h2 class="fw-bold atop-4">Nosotros</h2>

            <p class="aleft-3">
              Nos apasiona encontrar la esencia de las marcas y transmitirla hacia su público.
            </p>
            <p class="aright-3 my-3">
              Sabemos que a través de un logo, un slogan, los mensajes que lanzamos y todo lo que se asocia con cada marca deja una huella en la mente y en el corazón del espectador, logrando que se identifique y nos haga parte de su mundo.
            </p>
            <p class="aleft-4">
              Así, nos reunimos en este laboratorio de ideas un grupo de profesionales que dedican su vida a esto: encontrar qué es lo que hace a tu marca ser única.
            </p>
          </div>

          <div class="col-md-5 offset-md-2 py-md-4 mt-4 mt-md-0">
            <div class="row justify-content-center">
              <div class="col-md-8 abottom-4">
                <img class="img-fluid d-block m-auto shadow-yellow" src="{{ URL::asset("assets/images/multiple_lightbulb_designs.png") }}" alt="multiple_lightbulb_designs">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid bg-white py-3 py-md-5">
    <div class="row">
      <div class="container-custom">
        <div class="row justify-content-center py-md-3">
          <div class="col-md-12">
            <p class="h2 fw-normal text-center mb-3 mb-md-5 atop-5">Casos de éxito</p>

            <div class="row justify-content-center">
              <div class="col-8 col-md-3">
                <a href="{{ URL::to("casos-de-exito/absolook") }}">
                  <img class="img-fluid d-block m-auto atop-6-speed" src="{{ URL::asset("assets/images/absolook.png") }}" alt="absolook">
                </a>
                <p class="h4 mt-3 mt-md-4 mb-1 atop-7">Absolook</p>
                <p class="atop-7">Beauty</p>
              </div>


              <div class="col-8 col-md-3 my-3 my-md-0">
                <a href="{{ URL::to("casos-de-exito/absolook") }}">
                  <img class="img-fluid d-block m-auto atop-6-speed" src="{{ URL::asset("assets/images/biotech.png") }}" alt="biotech">
                </a>
                <p class="h4 mt-3 mt-md-4 mb-1 atop-7">Biotechlives</p>
                <p class="atop-7">Medical</p>
              </div>


              <div class="col-8 col-md-3">
                <a href="{{ URL::to("casos-de-exito/absolook") }}">
                  <img class="img-fluid d-block m-auto atop-6-speed" src="{{ URL::asset("assets/images/multiple_lightbulb_designs.png") }}" alt="multiple_lightbulb_designs">
                </a>
                <p class="h4 mt-3 mt-md-4 mb-1 atop-7">Skin brand</p>
                <p class="atop-7">Medical</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include("sections.contact-form")
@endsection

@section('scripts')
  @include('website.formvalidation.contact')

  <script>
    $(function(){
      $(".home-gallery-item").click(function(e){
        $(".home-gallery-filter").addClass("opened");

        $("html, body").animate({
          scrollTop: $("#hgf-button").offset().top - 30
        });
      });

      $(".home-gallery-filter").click(function(e){
        $(this).removeClass("opened");
      });
    });
  </script>
@endsection
