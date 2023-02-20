$(document).on("ready", function () {


  const title = $('input[name="titre"]').val();
  const Chef = $('input[name="Chef"]').val();
  const mail = $('input[name="mail"]').val();
  const phone = $('input[name="phone"]').val();
  


  $('.phone').mask("##.##.##.##.##", { reverse: true });
$(".Table").DataTable({
  responsive: true
})

  jQuery.validator.addMethod("checkTel", function (phone, element) {
    var regExp = new RegExp(/^05.\d/);
    return this.optional(element) ||
      regExp.test(phone);

  }, "Please enter a valid phone number should be start with  '05'.");


  $(".division-form").validate({
    rules: {
      titre:
      {
        required: true,
        checkName: true
      },
      Chef:
      {
        required: true,
        checkName: true
      },
      mail: {
        required: true,
        email: true,
        maxlength: 50
      },
      phone: {
        required: true,

        minlength: 14,
        maxlength: 14,
        checkTel: true
      }
    },
    messages: {
      titre: "titre is required",
      Chef: "Chef name is required",
      mail: "e-mail is required",
      phone: "N-tel is required",
    }
  });
});
