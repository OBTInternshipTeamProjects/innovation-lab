<?php require VIEW_ROOT . '/templates/header.php'; ?>

<div id="info">
  <div class="stuff">
    <div id="categories">
    <h1 id="first" class="line" onclick="">Adults</h1>
    <h1 id="second" class="line" onclick="">Youth</h1>
    <h1 id="third" class="line" onclick="">Immigrants</h1>
    <h1 id="fourth" class="line" onclick="">Businesses</h1>
    </div>
    <div class="text">
      <div id="adults">
        <h2 class="line">Resume Assistance</h2> 
          <p>For all those on the job search, stop in and have your resume spruced up!</p> 
        <h2 class="line">Workshops &amp; Events</h2>
          <p>Regularly scheduled workshops include Interviewing Basics, LinkedIn Basics, and Upgrade Your Workplace Skills</p>
        <h2 class="line">Job Placement</h2>
          <p>Bring in your resume and discuss opportunities</p>
        <h2 class="line">Career Workshops &amp; Events</h2> 
          <p>Regularly scheduled workshops include Interviewing Basics, LinkedIn Basics, and Upgrade Your Workplace Skills</p>
      </div>
      <div id="youth">
        <h2 class="line">Web &amp; Coding Fundamentals</h2>
          <p>Youth Participants will learn various programming languages such as HTML, CSS, GIT, introduction to JavaScript, JQuery, Mobile response, PHP and MYSQL.</p>
      </div>
      <div id="immigrants">
        <h2 class="line">Citizenship</h2>
          <p>U.S Citizenship Exam Preparation Classes</p>
        <h2 class="line">ESOL</h2> 
          <p>For non-native speakers to improve listening, speaking, reading and writing.</p>
      </div>
      <div id="businesses">
        <h2 class="line">Plan For Growth</h2>
          <p>Small business development workshop</p>
      </div>
    </div>
  </div>
</div>
<hr>
<script>
    $("#first").click(function(){
        $("#adults").show();
        $("#youth").hide();
        $("#immigrants").hide();
        $("#businesses").hide();
    });
    $("#second").click(function(){
        $("#adults").hide();
        $("#youth").show();
        $("#immigrants").hide();
        $("#businesses").hide();
    });
    $("#third").click(function(){
        $("#adults").hide();
        $("#youth").hide();
        $("#immigrants").show();
        $("#businesses").hide();
    });
    $("#fourth").click(function(){
        $("#adults").hide();
        $("#youth").hide();
        $("#immigrants").hide();
        $("#businesses").show();
    });

</script>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>