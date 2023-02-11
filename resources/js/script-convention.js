$(document).on("ready", function () {


  $('.budget').mask("#.##0,00 DH", { reverse: true });
  // $('.table').DataTable();
  // $('.table').DataTable(
  //   {
  //     paging:true
  //   }
  // );
  $('.table').DataTable();

$(function () {
  $('input[name="daterange"]').daterangepicker({
    opens: "center",
    format: 'DD/MM/YYYY ',
    autoApply: true,


  });
});

  



  $('.sub').on("click", function (event) {

    const titre = $('input[name="titre"]').val();
    const budget = $('input[name="budget"]').val();
    const date = $('input[name="daterange"]').val();
    const SelectDivision = $('select[name="SelectDivision"]').val();
    const SelectService = $('select[name="SelectService"]').val();
    const SelectPartenaire = $('select[name="SelectPartenaire"]').val();


    // alert(budget)


    let isValid = true;

    if (!/^[a-zA-Z0-9]+$/.test(titre)) {
      Toastify({
        text: "titre is invalid. Please enter a valid titre",
        duration: 5000,
        close: true,
        className: "error",
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: false, // Prevents dismissing of toast on hover
        style: {
          background: "red",
          width: "500px"

        },
        onClick: function () { } // Callback after click
      }).showToast();
      isValid = false;
    }

    if (budget === "") {
      Toastify({
        text: "budget is invalid. Please enter a valid budget",
        duration: 5000,
        close: true,
        // newWindow: true,
        className: "error",

        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: false, // Prevents dismissing of toast on hover
        style: {
          background: "red",
          width: "500px"

        },
        onClick: function () { } // Callback after click
      }).showToast();
      // $(".errorbudget").append("<p class='required error'> budget is invalid. Please enter a valid budget .</p>")
      isValid = false;
    }

    if (SelectDivision === "") {
      Toastify({
        text: "Devision is invalid. Please enter a valid Devision",
        duration: 5000,
        close: true,
        // newWindow: true,
        className: "error",

        gravity: "top",
        position: "center",
        stopOnFocus: true,
        style: {
          background: "red",
        }

      }).showToast();
      // $(".errorDivision").append("<p class='required error'> Devision is invalid. Please enter a valid Devision .</p>")
      isValid = false;
    }

    if (SelectService === "") {
      Toastify({
        text: "Service is invalid. Please enter a valid Service",
        duration: 5000,
        close: true,
        // newWindow: true,
        className: "error",

        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: false, // Prevents dismissing of toast on hover
        style: {
          background: "red",
          width: "500px"

        },
        onClick: function () { } // Callback after click

      }).showToast();
      // $(".errorService").append("<p class='required error'> Service is invalid. Please enter a valid Service .</p>")
      isValid = false;
    }
    if (SelectPartenaire === "") {
      Toastify({
        text: "Partenaire is invalid. Please enter a valid Partenaire",
        duration: 5000,
        close: true,
        // newWindow: true,
        className: "error",

        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: false, // Prevents dismissing of toast on hover
        style: {
          background: "red",
          width: "500px"

        },
        onClick: function () { } // Callback after click
      }).showToast();
      // $(".errorPartenaire").append("<p class='required error'> Partenaire is invalid. Please enter a valid Partenaire .</p>")  
      isValid = false;
    }

    if (isValid) {
      alert(date)
    }
  });
});



