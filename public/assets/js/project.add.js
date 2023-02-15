// $(function () {
//     $("#validationDate").daterangepicker({
//         opens: 'left'
//     }, function (start, end, label) {
//         console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
//     });
// });
// import Toastify from 'assets/js/toastify-js.js'
// import Toastify from 'assets/css/toastify.css'

$(function () {
    //jquery mask
    //percent
    var projectProgress = $('#projectProgress');
    projectProgress.mask('##0,00%', { reverse: true });
    //dh
    var budget = $('.budget');
    budget.mask('#.##0,00 DH', { reverse: true });



    $("#validationDate").daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        }
    });

    $("#validationDate").on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        console.log(
            picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY')
        );
    });

    $("#validationDate").on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });

    // $('#test').on('click', function () {
    //     Toastify({
    //         text: "This is a toast",
    //         duration: 5000,
    //         newWindow: true,
    //         close: true,
    //         className: "error",
    //         gravity: "top", // `top` or `bottom`
    //         position: "center", // `left`, `center` or `right`
    //         stopOnFocus: false, // Prevents dismissing of toast on hover
    //         style: {
    //             background: "red",
    //             width: "500px"
    //         },
    //         onClick: function () { console.log("toastr") } // Callback after click
    //     }).showToast();

    // });
    $('#test2').on('click', function () {
       /* Toastify({
            text: "enregistrer avec succes",
            duration: 5000,
            close: true,
            gravity: "top", //`top` or `bottom`
            position: "center", //`left`, `center` or `right`
            stopOnFocus: false, //Prevents dismissing of toast on hover
            style: {
                background: "green",
            },

        }).showToast();*/

        console.log(jQuery.type($("#projectProgress").val))
    });

    //from validation

    $("#addProjectForm").validate({
        rules: {
            title: "required",
            validationDate: "required",
            budget: "required",
            convention: "required",
            phase: "required",
            projectProgress: "required",

        },
        messages: {
            title: "title is required",
            validationDate: "validation date is required",
            budget: "budget is required",
            convention: "convention  is required",
            phase: "phase is required",
            projectProgress: "Project Progress is required",

        }
    });

});