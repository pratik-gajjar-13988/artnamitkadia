$(function() {

  $("#registrationForm input").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    filter: function() {
      return $(this).is(":visible");
    },
  });


});

/*When clicking on Full hide fail/success boxes */

