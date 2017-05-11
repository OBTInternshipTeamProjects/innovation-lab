 <?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];
    $company = $_POST['company'];
    $referred = $_POST['referrer'];
    $message = $_POST['message'];
    
    $unique = $db->prepare('SELECT * FROM contact WHERE email = :email ');
    $unique->bindParam(":email" , $email);
    $unique->execute();
    $result = $unique->fetch(PDO::FETCH_ASSOC);
    
    if( !$result){
      $insertContact = $db->prepare("
        INSERT INTO contact(name,email,company,phone,referrer,message)
        VALUES (:name,:email,:company,:phone,:referred,:message)
      ");
      $insertContact->bindParam(":name",$name);
      $insertContact->bindParam(":email",$email);
      $insertContact->bindParam(":company",$company);
      $insertContact->bindParam(":phone",$phone);
      $insertContact->bindParam(":referred",$referred);
      $insertContact->bindParam(":message",$message);
      
      $insertContact->execute();
    }
    else{
      echo "Email already exist!";
    }
  }
?>
   <div class="content-container four">
    <div id="contact">
      <h1>Contact Us</h1>
      <div id="contact">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="contact-input" method="post">
          <section class="section-left section">
            <div class="input-name sl">
              <label for="name">Name:</label> <input type="text" name="name">
            </div>
            <br>
            <div class="input-email sl">
              <label for="email">E-mail:</label> <input type="email" name="email">
            </div>
          </section>
          <section class="section-mid section">
             Company: <input type="text" name="company">
              <br>
              <label for="#phone-input">Phone number</label> <input id="phone-input" name="phone_number" type="tel" value="" aria-label="Please enter your phone number" placeholder="ex. 1(111)-111-1111">
              <br>
              How did you hear about us?
              <br>
              <div class="input-radio">
                <input type="radio" name="referrer" value="Online"> Online<br>
                <input type="radio" name="referrer" value="TV"> TV<br>
                <input type="radio" name="referrer" value="Magazine"> Magazine<br>
                <input type="radio" name="referrer" value="Other">Other
              </div>
          </section>
          <section class="section-right section">
            <h2>An opportunity awaits!</h2>
            Message: <textarea name="message"></textarea>
            <br>
            <input id="button" name="submit" type="submit" value="SEND"/>
          </section>
        </form>
      </div>
    </div>
  </div>

 <footer>&copy; Innovation Lab 2017 | Designed by Veronica C. <br><br> Developed by Internship Team 6A</footer>
</div>

<script>
$("#center h1, #center p").hide(0).fadeIn(4500)
</script>
<script>
  $(document).ready(function(){
    $("#fade-right").animate({left:450, opacity:"show"}, 1500);
});
</script>
<script>
  function phoneMask() { 
    var num = $(this).val().replace(/\D/g,''); 
    $(this).val(num.substring(0,1) + '(' + num.substring(1,4) + ')' + num.substring(4,7) + '-' + num.substring(7,11)); 
}
$('[type="tel"]').keyup(phoneMask);
</script>
<script>
function myMap() {
  var myCenter = new google.maps.LatLng(40.656479, -74.006279);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTxMmNamDvVTKJAbuoJud2il8gtIyFq14&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<script src="<?php echo BASE_URL; ?>/assets/js/navedit.js"></script>
</body>
</html>