</body>
  <section class="instagram-section">
    <!--<iframe class="mobile-hidden" src="//lightwidget.com/widgets/cd2eb8ab24aa5364bb3e1b5493094825.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
    <iframe class="desktop-hidden" src="//lightwidget.com/widgets/a7f885fa7628561c8de4be2683e5471d.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>-->
    <div class="instafeed" id="instafeed"></div>
  </section>
  <section class="footer-section">
    <div class="footer-wrapper">

      <div class="sitemap">
        <a href="http://amandaleaphotography.com">Home</a>
        <a href="http://amandaleaphotography.com/clp/weddings.php">Gallery</a>
        <a href="http://amandaleaphotography.com/clp/about.php">About</a>
        <!--<a href="http://amandaleaphotaography.com/clp/contact.php">Contact</a>-->
        <a href="http://amandaleaphotography.com/clp/investments.php">Investment</a>
        <a href="http://amandaleaphotography.com/clp/misc.php">Extra</a>
      </div>
      <div class="copyright">
        Amanda Lea Photography
      </div>
    </div>
  </section>

<!--<div class="loading-box">
  <div class="loader">

  </div>
  <div class="loader-2">

  </div>
  <div class="loader-3">

  </div>
</div>-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>

  <!-- LightWidget WIDGET -->
  <!--<script src="//lightwidget.com/widgets/lightwidget.js"></script>-->

  <script>

  var userFeed = new Instafeed({
      get: 'user',
      userId: '1643058565',
      accessToken: '1643058565.1677ed0.6ce0cc99975c49878b336dfe5d60054e',
      template: '<a target="_blank" href="{{link}}"><img src="{{image}}" /></a>',
      limit: 10,
      resolution: 'standard_resolution'
  });
  userFeed.run();

  </script>

  <script>
  	$('.modal-dialog .modal-gallery-image').click(function(){
  		$(this).toggleClass('modal-gallery-image-expand');
  		$('.modal-gallery-image-expand').not(this).removeClass('modal-gallery-image-expand');
    });
    $('.image-click-box').click(function(){
      $('.modal-gallery-image').removeClass('modal-gallery-image-expand');
    });
  </script>
