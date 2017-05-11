<?php require VIEW_ROOT . '/templates/header.php'; ?>
	<div class="container">
  <div class="content-container first">
    <div id="about">
      <div id="center">
        <!-- <h1>Welcome to the innovation lab</h1>
        <p>We built the 7,700-square- foot Innovation Lab to supply our local community with the training and education needed to earn well-paying jobs and the potential to turn those jobs into accomplished careers. In doing so, we provide businesses with a quality workforce that has the skills and drive to outperform.</p>
        <br>
        <p>The Lab is a catalyst for employment, providing pre-screening and job placement services, technology and vocational training programs. These services spur business growth, entrepreneurship and cooperative training programs, and offer continuing education for the benefit of community residents.</p> -->
      </div>
    </div>
  </div>
  <hr>
  <div class="content-container second">
    <div class="second-container about" id="about_us">
      <div id="abt">
        <h1 id="align">About Us</h1>
        <br>
        <h4>We built the 7,700-square- foot Innovation Lab to supply our local community with the training and education needed to earn well-paying jobs and the potential to turn those jobs into accomplished careers. In doing so, we provide businesses with a quality workforce that has the skills and drive to outperform. <br><br> The Lab is a catalyst for employment, providing pre-screening and job placement services, technology and vocational training programs. These services spur business growth, entrepreneurship and cooperative training programs, and offer continuing education for the benefit of community residents. (For more information <a href="#">Click Here</a>)</h4>
        <br>
        <!-- <h4>Our Partners:</h4>
        <br>
        <h5>•<a href="http://obtjobs.org/home/" target="_blank"><u>OBT:</u></a> 
        Opportunities for A better tomorrow</h5>
        <h5>•<a href="http://www.citytech.cuny.edu/" target="_blank"><u>City Tech:</u></a>
        CUNY's City Tech (New York City College of Technology)</h5>
        <h5>•<a href="http://www.sbidc.org/" target="_blank"><u>SBIDC:</u></a> 
        SOUTHWEST BROOKLYN INDUSTRIAL DEVELOPMENT CORPORATION</h5>
        <h5>•<a href="http://bwiny.org/" target="_blank"><u>BWI:</u></a>
        Brooklyn Workforce Innovations</h5> -->
      </div>
    </div>
    <div class="second-container programs" id="programs">
      <div id="eh">
        <h1 id="align">Programs</h1>
        <h2>What we offer at the Innovation Lab:</h2>
        <div class="accordion">
          <input id="toggle1" type="radio" class="accordion-toggle" name="toggle" />
          <label for="toggle1">Adults:</label>
          <section>
            <p>
                <h3>• Resume Assistance: </h3> 
                <!-- For all those on the job search, stop in and have your resume spruced up! -->
                <h3>• Workshops and Events: </h3>
                <!-- Regularly scheduled workshops include Interviewing Basics, LinkedIn Basics, and Upgrade Your Workplace Skills -->
                <h3>• Job Placement: </h3> 
                <!-- Bring in your resume and discuss opportunities  -->
                <h3>• Career Workshops and Events: </h3>
                <!-- Regularly scheduled workshops include Interviewing Basics, LinkedIn Basics, and Upgrade Your Workplace Skills -->
            </p>
          </section>
        </div>
        <div class="accordion">
          <input id="toggle2" type="radio" class="accordion-toggle" name="toggle" />
          <label for="toggle2">Youth</label>
          <section>
            <p>
              <h3>• Web & Coding Fundamentals</h3>
              <!-- Youth Participants will learn various programming languages such as HTML, CSS, GIT, introduction to JavaScript, JQuery, Mobile response, PHP and MYSQL. -->
            </p>
          </section>
        </div>
        <div class="accordion">
          <input id="toggle3" type="radio" class="accordion-toggle" name="toggle" />
          <label for="toggle3">Immigrant</label>
          <section>
            <p>
              <h3>• Citizenship</h3>
              <!-- U.S Citizenship Exam Preparation Classes -->
              <h3>• ESOL</h3> 
              <!-- For non-native speakers to improve listening, speaking, reading and writing. -->
            </p>
          </section>
        </div>
        <div class="accordion">
          <input id="toggle4" type="radio" class="accordion-toggle" name="toggle" />
          <label for="toggle4">Businesses</label>
          <section>
            <p>
            <h3>• Plan For Growth</h3> 
            <!-- Small business development workshop --> 
            </p>
          </section>
        </div>
      </div>
    </div>
    <div style="clear:both;"></div>
  </div>
  <hr>
  <div class="content-container third">
    <div id="partners">
      <h1>Innovation lab is a partner of the following organizations</h1>
      <div id="fade-right">
        <img id="logo" src="<?php echo BASE_URL; ?>/assets/images/obt.png">
        <img id="logo" src="<?php echo BASE_URL; ?>/assets/images/sbid.png">
        <img id="logo" src="<?php echo BASE_URL; ?>/assets/images/ic.png">
        <img id="logo" src="<?php echo BASE_URL; ?>/assets/images/citytech.png">
        <img id="logo" src="<?php echo BASE_URL; ?>/assets/images/sunset.png">
      </div>
    </div>
  </div>
  <hr>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
<!-- 
	<footer>&copy; Innovation Lab 2017 | Developed by Veronica C.<br>Please choose me senpai.</footer>

	<a href="#about"><div id="totop"></div></a>
<script>
$("#center h1, #center p").hide(0).fadeIn(4500)
</script>
<script>
  $(document).ready(function(){
    $("#fade-right").animate({left:450, opacity:"show"}, 1500);
});
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
<!-- <script src="<?php // echo BASE_URL; ?>/assets/navedit.js"></script>
</body>
</html> -->