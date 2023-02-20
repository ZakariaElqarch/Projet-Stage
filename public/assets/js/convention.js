$(document).ready(function() {
    $('#SelectDivision').change(function() {
      var id = $(this).val();
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
              $('#SelectService').append('<option value="' + ServiceData.id + '">' + ServiceData.title + '</option>');
            });
          }
        });
      }
    });
  });