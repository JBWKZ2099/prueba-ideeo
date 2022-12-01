<script>
    (function(){
        FormValidation.formValidation(document.getElementById("formValidation"), {
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
                bootstrap: new FormValidation.plugins.Bootstrap5(),
                /*Automatically validate the form when pressing its Submit button*/
                submitButton: new FormValidation.plugins.SubmitButton(),
                /*Submit the form if all fields are valid after validating*/
                /*defaultSubmit: new FormValidation.plugins.DefaultSubmit(),*/
                /*Wizard*/
                wizard: new FormValidation.plugins.Wizard({
                    stepSelector: '.tab-wizard',
                    prevButton: '#prevButton',
                    nextButton: '#nextButton',
                }),
                /*Show the feedback icons taken from FontAwesome*/
                icon: new FormValidation.plugins.Icon({
                    valid: 'fa fa-check fa-sm',
                    invalid: 'fa fa-times fa-sm',
                    validating: 'fa fa-refresh fa-sm',
                }),
            }
        })
        // Update the label of Next button
        .on('plugins.wizard.step.active', function(e) {
            /*Agregamos las clases active a las tab correspondientes*/
            $nav_tabs = $("#rootwizard > ul.nav.nav-pills > li.nav-item > a.nav-link");
            $nav_tabs = $nav_tabs.removeClass("active");
            $nav_tabs = $($nav_tabs[e.step]).addClass("active")
            document.getElementById('nextButton').innerHTML = (e.step === e.numSteps - 1) ? '{{ trans('strings.wizard.finish') }}' : '{{ trans('strings.wizard.next') }}';
        })
        .on('plugins.wizard.valid', function(e) {
            document.getElementById('formValidation').submit();
        });
    })();
</script>
