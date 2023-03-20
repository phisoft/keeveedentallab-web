<?php

<!DOCTYPE html>
<html lang="en">

<head>

  
</head>


<body>


      <form id="myForm">
      <h2>TRYING TO SEND</h2>

      <label>NAME</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required><br>
      <label>CLINIC</label>
      <input type="text" class="form-control" name="clinic" id="clinic" placeholder="Clinic" required><br>
      <label>EMAIL</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email: email@example.com" required><br>
      <label>PHONE</label>
      <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Contact Number" required><br>
      <label>MESSAGE</label>
      <textarea class="form-control" name="message" id="message" rows="8" placeholder="Message" required></textarea><br>

      <button type="submit" onclick="sendEmail()" value="Send an Email">Send Message</button></div>
      </form>

     
  <script type="text/javasctipt">
    function sendEmail() {
      var name = $("#name");
      var email = $("#email");
      var clinic = $("#clinic");
      var phone = $("#phone");
      var message = $("#message");
      
      if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(clinic) && isNotEmpty(phone) && isNotEmpty(message)){
        $.ajax({
            url:'sendEmail.php',
            method: 'POST',
            dataType: '_json_',
            data:{
                name: name.val(),
                email: email.val(),
                clinic: clinic.val(),
                phone: phone.val(),
                message: message.val()
            }, success: function(response){
                $('_myForm_')[0].reset();
                $('.sent-notification').text("Message Sent Succesfully.");
            }
        });
      }
    }

    funtion isNotEmpty(caller){
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
  </script>
  
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

?>