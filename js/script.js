$(document).ready(function(){
  $("#submit").click(function(){
    var name = $("#name").val();
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'name1='+ name;
    if(name=='')
      {
        alert("Please Fill All Fields");
      }
      else
        {
          // AJAX Code To Submit Form.
          $.ajax({
            type: "POST",
            url: "ajaxsubmit.php",
            data: dataString,
            cache: false,
            success: function(result){
              alert(result);
            }
          });
        }
        return false;
      });
    });
