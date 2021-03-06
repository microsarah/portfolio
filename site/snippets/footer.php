  <footer class="footer cf" role="contentinfo">
    <div class="wrap wide">

      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>
    </div>
  </footer>
  <a class="top smoothScroll" href="#top"><?= (new Asset("assets/images/arrow-top.svg"))->content() ?></a>
</body>
<script type="text/javascript">
$(window).scroll(function(){
    $("#title").css("opacity", 1 - $(window).scrollTop() / 400);

    if ( $(window).scrollTop() > 400 ) {
        $('a.top').fadeIn('slow');
    } else {
      $('a.top').fadeOut('slow');
    }
});
</script>
</html>
