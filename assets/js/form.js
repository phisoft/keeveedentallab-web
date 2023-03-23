
function sendEmail(){
    var name = $("#name");
    var email = $("#email");
    var clinic = $("#clinic");
    var phone = $("#phone");
    var message = $("#message");
    
    if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(clinic) && isNotEmpty(phone) && isNotEmpty(message)){
      $.ajax({
          url:'sendEmail.php',
          method: 'POST',
          dataType: 'json',
          data:{
              name: name.val(),
              email: email.val(),
              clinic: clinic.val(),
              phone: phone.val(),
              message: message.val()
          }, 
          success: function(response){
              $('#myForm')[0].reset();
              $('.sent-notification').text("Message Sent Succesfully.");
          }
      });
    }
  }
  
  
  function isNotEmpty(caller){
      if(caller.val()==""){
          caller.css('border','1px solid red');
          return false;
      }
      else
      {
          caller.css('border', '');
          return true;
      }
  }
  
  