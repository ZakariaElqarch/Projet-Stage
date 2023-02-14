$(document).on("ready", function () {

const title = $('input[name="titre"]').val();
const mail = $('input[name="mail"]').val();
const phone = $('input[name="phone"]').val();

$('#PartenaireTable').DataTable()

jQuery.validator.addMethod("checkTel", function (phone, element) {
  var regExp = new RegExp(/^05\d/);
  return this.optional(element) ||
    regExp.test(phone);

}, "Please enter a valid phone number should be start with  '05'.");

$(".commune-form").validate({
  rules: {
    titre:
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
      minlength: 10,
      maxlength: 10,
      number: true,
      checkTel:true
    }
  }
});
});