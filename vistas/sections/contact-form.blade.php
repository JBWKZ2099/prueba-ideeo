<section class="container-custom py-3 py-md-5">
  <div class="row justify-content-center py-md-3">
    <div class="col-md-11 col-lg-8">
      <div class="row">
        <div class="col-md-6 bg-yellow p-relative contact-title-container">
          <div class="pt-5 pb-5"></div>
          <h2 class="ps-5 text-contact aleft-13">Contáctanos</h2>

          <img class="img-fluid logo-contact abottom-13" src="{{ URL::asset("assets/images/logo_bmybrand_contact.svg") }}" alt="logo_bmybrand_contact">
        </div>

        <div class="col-md-6 form-container p-3 p-md-4">
          {!! Form::open(["route" => "contact", "method" => "post", "id" => "formValidation", "autocomplete"=>"off"]) !!}
            <div class="form-group mb-3 atop-13">
              {!! Form::label("name", "Nombre", []) !!}
              {!! Form::text("name", old("name"), ["class"=>"form-control fc-custom", "required"]) !!}
            </div>
            <div class="form-group mb-3 aleft-14">
              {!! Form::label("email", "Correo Electrónico", []) !!}
              {!! Form::email("email", old("email"), ["class"=>"form-control fc-custom", "required"]) !!}
            </div>
            <div class="form-group mb-3 aright-13">
              {!! Form::label("message", "Mensaje", []) !!}
              {!! Form::textarea("message", old("message"), ["class"=>"form-control fc-custom", "required"]) !!}
            </div>

            {!! Form::submit("Enviar", ["class"=>"btn btn-outline-black rounded-0 px-5 abottom-14"]) !!}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</section>