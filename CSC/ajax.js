  $(document).ready(function  () {
      $("#country").change(function  () {
          var cid = (this).value;

          $.ajax({
              url : "state.php",
              method : "POST",
              data : {cid : cid},
              success : function  (res) {
                  $('#state').html(res);
              }
          })
      })
      
      $("#state").change(function  () {
        var sid = (this).value;

        $.ajax({
            url : "city.php",
            method : "POST",
            data : {sid : sid},
            success : function  (res) {
                $('#city').html(res);
            }
        })
    })
  });

  