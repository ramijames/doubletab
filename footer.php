

<div id="services" class="row padding100">
  <section class="">
    <h2 class="white">Doubletab is a <span class="development">development</span>, <span class="design">product design</span>, and <span class="consultation">consultation</span> studio that excels in helping businesses better connect with their audience.</h2>
  </section>
  <section class="one-third column">
    <div class="row">
      <h4 class="white bg-development">Development</h4>
    </div>
    <div class="row">
      <div class="ex-box">
        <ul>
          <li><i class="fa fa-check-circle-o"></i> Laravel</li>
          <li><i class="fa fa-check-circle-o"></i> Web Applications</li>
          <li><i class="fa fa-check-circle-o"></i> Wordpress</li>
          <li><i class="fa fa-check-circle-o"></i> Payment Integration</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="one-third column">
    <div class="row">
      <h4 class="white bg-design">Design</h4>
    </div>
    <div class="row">
      <div class="ex-box">
        <ul>
          <li><i class="fa fa-check-circle-o"></i> Responsive Design</li>
          <li><i class="fa fa-check-circle-o"></i> User Experience</li>
          <li><i class="fa fa-check-circle-o"></i> Interface Design</li>
          <li><i class="fa fa-check-circle-o"></i> Brand Identity</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="one-third column">
    <div class="row">
      <h4 class="white bg-consultation">Analysis</h4>
    </div>
    <div class="row">
      <div class="ex-box">
        <ul>
          <li><i class="fa fa-check-circle-o"></i> Server Administration</li>
          <li><i class="fa fa-check-circle-o"></i> SEO/SEM</li>
          <li><i class="fa fa-check-circle-o"></i> Email Campaigns</li>
          <li><i class="fa fa-check-circle-o"></i> Social Integration</li>
        </ul>
      </div>
    </div>
  </section>
</div>

<div class="row extras padding60">
  <section class="six columns offset-by-one newsletter">
    <h5>Insider Access to Doubletab</h5>
    <p>Receive monthly briefings on what we have been researching, designing, building and thinking.</p>
    <hr>
    <!-- Begin MailChimp Signup Form -->
    <div id="mc_embed_signup">
    <form action="//doubletab.us5.list-manage.com/subscribe/post?u=0cd4c231af47d2b7d40a5eac6&amp;id=41e8ef3aa3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
          <div class="mc-field-group six columns">
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
          </div>
          <div id="mce-responses" class="two columns">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>
          <div style="position: absolute; left: -5000px;"><input type="text" name="b_0cd4c231af47d2b7d40a5eac6_41e8ef3aa3" tabindex="-1" value=""></div>
          <div class="two columns"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="subscribe-button"></div>
        </div>
    </form>
    </div>
    <!--End mc_embed_signup-->
  </section>
</div>

<div class="row">
  <!-- FOOTER -->
  <footer class="padding60">
    <p id="social">
      <a href="http://www.twitter.com/dbltab"><i class="fa fa-twitter fa-2x"></i></a>
      <a href="https://github.com/Doubletab"><i class="fa fa-github fa-2x"></i></a>
    </p>

    <p>
      <span>&copy; 2015 <?php bloginfo('name'); ?></span>
      &middot;
      <span><a href="mailto:rami@doubletab.com">Contact Dev</a></span>
      &middot;
      <span><a href="mailto:zlatko@doubletab.com">Contact Biz</a></span>
    </p>
    
  </footer>
</div>

<div id="start-project-overlay" class="overlay contact">
  <div class="close"><i class="fa fa-close"></i></div>
  <section class="three columns padding60">
    <h4>Doubletab is always excited to create groundbreaking new technologies with you, our valued clients.</h4>
    <hr>
    <ul>
      <li><h5>Development</h5></li>
      <li>Tel Aviv, Israel</li>
      <li><a href="mailto:dev@doubletab.com">dev@doubletab.com</a></li>
      <li>972 58 4192939</li>
    </ul>
    <hr>
    <ul>
      <li><h5>Business</h5></li>
      <li>Los Angeles, USA</li>
      <li><a href="mailto:biz@doubletab.com">biz@doubletab.com</a></li>
      <li>1 949 870 9885</li>
    </ul>
  </section>
  <section class="five columns padding60">
    <?php 
      if ( function_exists( 'ccf_output_form' ) ) {
        ccf_output_form( 51 );
      }
    ?>
  </section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/classie.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/app.js" type="text/javascript" charset="utf-8"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60798135-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>
</body>
</html>
