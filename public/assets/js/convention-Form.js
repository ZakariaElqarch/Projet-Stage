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
      title: {
        required: true,
        checkName: true
      },
      validity: {
        required: true,

      },
      budget: {
        required: true,

      },
      SelectDivision: {
        required: true,

      },
      SelectService: {
        required: true,

      },
      SelectPartenaire: {
        required: true,

      },
      SelectCommunes: {
        required: true,

      },
    }
    
  });

});

