<script>
	(function(){
		fv = FormValidation.formValidation(document.getElementById("formValidation"), {
		  locale: '{{ \App::getLocale() == 'es' ? 'es_ES' : 'en_US' }}',
		  localization: FormValidation.locales.{{ \App::getLocale() == 'es' ? 'es_ES' : 'en_US' }},
		  fields: {
		    name: {
		      validators: {
		        notEmpty:{},
		        stringLength: {
		          min: 6,
		          max: 255
		        }
		      }
		    },
		    email: {
		      validators: {
		        notEmpty: {},
		        emailAddress: {},
		        regexp: {
		          regexp: /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/,
		          message: "Ejemplo: correo@ejemplo.com"
		        }
		      }
		    },
		    message: {
		      validators: {
		        notEmpty: {},
		        stringLength: {
		          min: 3,
		          max: 1000
		        }
		      }
		    }
		  },
		  plugins: {
		    /*Indicate the events which the validation will be executed when these events are triggered*/
		    trigger: new FormValidation.plugins.Trigger(),
		    /*Support the form made in Bootstrap*/
		    bootstrap: new FormValidation.plugins.Bootstrap(),
		    /*Automatically validate the form when pressing its Submit button*/
		    submitButton: new FormValidation.plugins.SubmitButton(),
		    /*Submit the form if all fields are valid after validating*/
		    defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
		    /*Show the feedback icons taken from FontAwesome*/
		    icon: new FormValidation.plugins.Icon({
		      valid: 'fa fa-check fa-sm',
		      invalid: 'fa fa-times fa-sm',
		      validating: 'fa fa-refresh fa-sm',
		    }),
		  }
		});


		{{-- Para ejecutar recaptcha --}}
		$(`#formValidation textarea[name="message"]`).focus(function(){
		  grecaptcha.ready(function() {
		    // do request for recaptcha token
		    // response is promise with passed token
		    grecaptcha.execute('{{ env("GRECAPTCHA_PUBLIC") }}', {action: 'get_in_touch'}).then(function(token) {
		      $(document).find("form#formValidation .grecaptcha").remove();
		      // add token to form
		      $("form#formValidation").prepend(`<input class="grecaptcha" type="hidden" name="g-recaptcha-response" value="${token}">`);
		      $("form#formValidation").prepend(`<input class="grecaptcha" type="hidden" name="action" value="get_in_touch">`);
		    });
		  });
		});
	})();
</script>
