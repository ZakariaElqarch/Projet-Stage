$(document).on("ready", function () {

  $('#Budget').mask("#.##0,00 DH", { reverse: true });

  $('.table').DataTable({
    responsive: true
  });


  $("#Validity").daterangepicker({
    autoUpdateInput: false,
    locale: {
        cancelLabel: 'Clear'
    }
});

$("#Validity").on('apply.daterangepicker', function (ev, picker) {
    $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
    console.log(
        picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY')
    );
});

$("#Validity").on('cancel.daterangepicker', function (ev, picker) {
    $(this).val('');
});

  jQuery.validator.addMethod("checkName", function (titre, element) {
    var regExp = new RegExp(/^[a-zA-Z0-9]+$/);
    return this.optional(element) ||
      regExp.test(titre);
  }, "Please enter a valid title.");

  $(".Convention-form").validate({
    rules: {
      titre: {
        required: true,
        checkName: true
      },
      Validity: {
        required: true,

      },
      budget: "required",
      SelectDivision: "required",
      SelectService: "required",
      SelectPartenaire: "required",
      SelectCommunes: "required",
    },
    messages: {
      datefilter: "date is required",
      budget: "budget is required",
      SelectDivision: "Division is required",
      SelectService: "Service is required",
      SelectPartenaire: "Partenaire is required",
      SelectCommunes: "Partenaire is required",
    }
  });

});

