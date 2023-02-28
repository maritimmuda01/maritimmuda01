        <!-- javascript libraries -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/skrollr.min.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/smooth-scroll.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/bootsnav.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/classie.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/jquery.fitvids.js"></script>
        <!-- equalize -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/equalize.min.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/skill.bars.jquery.js"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/jquery.easypiechart.min.js"></script>
        <!-- instagram -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/instafeed.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>js/retina.min.js"></script>
        <!-- revolution -->
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="<?php echo site_url('assets/') ?>revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/') ?>revolution/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- Global site tag (gtag.js) - Google Analytics -->

        <script type="text/javascript" src="<?php echo site_url('assets/') ?>slick/slick.min.js"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131795421-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131795421-1');
</script>

<script type="text/javascript">
  // $('.multiple-items').slick({
  //   infinite: true,
  //   slidesToShow: 5,
  //   slidesToScroll: 1,
  //   autoplay: true,
  //   autoplaySpeed: 2000,
  // });


  $('.multiple-items').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>