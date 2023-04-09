$(document).ready(function() {
    $('#SelectDivision').on('click',function() {
      var id = $(this).val();
      console.log(id)
      var url = $('#SelectService').data('url').replace(':id', id);
      if(id) {
        $.ajax({
          url: url,
          type: 'POST',
          dataType: 'json',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(data) {
            $('#SelectService').empty();
            $.each(data, function(index, ServiceData) {
              console.log(id)
              console.log(ServiceData.division_id)
           
             if(id == ServiceData.division_id){
              $('#SelectService').append('<option selected value="' + ServiceData.id + '"  >' + ServiceData.title + '</option>');
             }else{
              $('#SelectService').append('<option value="' + ServiceData.id + '">' + ServiceData.title + '</option>');
             }
              
            });
          }
        });
      }
    });
  });