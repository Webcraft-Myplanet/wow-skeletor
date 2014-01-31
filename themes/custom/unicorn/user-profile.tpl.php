<?php dsm($variables); ?>

<section id="wrapper">

<!-- static top nav found throughout the site -->
  <header class="site_nav common_title row">
    <div class="unicorn_logo col-md-2">
      <img src="http://placekitten.com/80/80" alt="">
    </div>
    <div class="site_title col-md-4">
      <h1>Unicorn Factory</h1>
    </div>
    <div class="teams_button col-md-2">Teams</div>
    <div class="projects_button col-md-2">Projects</div>
    <div class="logout_button col-md-2">Logout</div>
  </header>

<!-- personal info div containing avatar, name and current team status -->
  <section id="personal_info">
    <div class="row">
    <div class="personal_avatar col-md-4">
      <img src="http://placekitten.com/300/200" alt="">
    </div>
    <div class="name_status col-md-4">
      <h2>Margaret Reffell</h2>
      <p>Current Team</p>
      <p>Current Project</p>
    </div>
    <div class="personal_social col-md-4">
      <ul class="the-icons">
        <li><span class="glyphicon glyphicon-thumbs-up"></span></li>
        <li><img src="" alt=""><a href=""></a></li>
        <li><img src="" alt=""><a href=""></a></li>
        <li><img src="" alt=""><a href=""></a></li>
      </ul>
    </div>
    </div>
  </section>

<!-- dynamic skills section with accordion fold -->
  <section id="skills">

  <!-- static header -->
  <div class="row common_title">
    <div id="skills_header" class="row">
      <h2 class="col-md-4">Skills</h2>
      <ul class="col-md-8">
        <li>My best skill is ... </li>
        <li>My most desiteable skill is ... </li>
      </ul>
    </div>
    </div>
<!-- accordion content -->
    <div id="skills_content">
      <div class="skill_graph">
        <h3>HTML</h3>
        <h3>CSS</h3>
        <h3>JavaScript</h3>
        <h3>Drupal</h3>
        <h3>Rails</h3>
        <div class="skill_rating_input">
          
        </div>
      </div>
    </div>
  </section>

<!-- static project section with dynamic project inputs -->
  <section id="projects">
    <div class="project_header common_title">
      <h2>Projects</h2>
    </div>
    <div class="project_content">
      <div class="project1 col-md-3">
        <h3>Project 1</h3>
      </div>
      <div class="project2 col-md-3">
        <h3>Project 2</h3>
      </div>
      <div class="project3 col-md-3">
        <h3>Project 3</h3>
      </div>
    </div>
  </section>

<!-- wishlist -->
<div class="row">
  <section class="wishlist col-md-6">
    <div class="wishlist_title common_title">
      <h2>Wishlist</h2>
    </div>
    <ul class="border">
      <li><input type="checkbox" name="color" value="">
Wish 1<br></li>
      <li><input type="checkbox" name="color" value="">
Wish 2<br></li>
      <li><input type="checkbox" name="color" value="">
Wish 3<br></li>
      <li><input type="checkbox" name="color" value="">
Wish 4<br></li>
      <li><input type="checkbox" name="color" value="">
Wish 5<br></li>
      <li><input type="checkbox" name="color" value="">
Wish 5<br></li>
      <li><input type="checkbox" name="color" value="">
Wish 6<br></li>
      <li><input type="checkbox" name="color" value="">
Wish 7<br></li>
      <li><input type="checkbox" name="color" value="">
Wish 8<br></li>
      <li><input type="checkbox" name="color" value="">
Wish 9<br></li>
    </ul>
  </section>

<!-- live activity feed -->
  <section class="activity_feed col-md-6">
    <div class="activity_title common_title">
      <h2>Activity Feed</h2>
    </div>
    <div class="live_feed">
      
    </div>
  </section>

</div>
  <div class="scroll_button">
   <a href="#wrapper"><img src="/<?php print $directory ?>/images/arrow_up.png" alt=""></a>
  </div>
  
  <!-- sitewide common footer -->
  <footer class="common_title row">
    <div class="col-md-12">
    <h3>My Planet Digital</h3>
    <address>
      <h3>Company Address</h3>
      <a href="mailto:you@youraddress.com">Email My Planet Digital</a>
    </address>
    <div class="phone">555-555-5555</div>
    </div>
  </footer>



<!-- end of wrapper -->
</section>