<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <meta name="description" content="Based in Mesa, Arizona and available for travel, Alyssa Campbell Photography introduces
the novelty of having fun in front of a camera to even camera-shy people." />
  <meta name="keywords" content="Alyssa Campbell, Photography, Phoenix, Tempe, Mesa, Gilbert, natural light, portrait, dynamic" />
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?>">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <div id="page" class="clear-block">
    <div id="header-wrap" >
      <div id="header" class="container-12 clear-block">
        <div id="site-header" class="clear-block">
          <div id="branding" class="grid-6">
          <?php if ($linked_logo_img): ?>
            <span id="logo"><?php print $linked_logo_img; ?></span>
          <?php endif; ?>
          <?php if ($linked_site_name): ?>
            <h1 id="site-name"><?php print $linked_site_name; ?></h1>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
          </div>
          <div class="grid-6">
            <div id="user-links" class="clear-block"><?php if ($user_links) print theme('links', $user_links) ?></div>
            <?php if ($search_box): ?>
              <div id="search-box"><?php print $search_box; ?></div>
            <?php endif; ?>
          </div>

          <div id="site-menu" class="grid-12 alpha omega">
            <?php if ($primary_links || $superfish_menu): ?>
      <!-- PRIMARY -->
             <div id="<?php print $primary_links ? 'nav' : 'superfish' ; ?>">
               <?php
			      if ($primary_links) {
		            print theme('links', $primary_links);
				  }
				  elseif (!empty($superfish_menu)) {
				    print $superfish_menu;
				  }
               ?>
             </div>
            <?php endif; ?>
		  </div>
        </div>
      </div>
    </div>
    <!-- end of header -->

    <div id="slider-wrap" class="slider-content <?php if(!$slider) print 'empty' ?>">
      <?php if ($slider): ?>
           <div id="slider" class="container-12 clear-block">
             <div class="grid-12 region">
               <?php print $slider; ?>
             </div>
           </div>
      <?php endif; ?>
    </div>

    <div id="content-wrap-background">
    <?php if ($preface_one || $preface_two || $preface_three): ?>
      <div id="preface" class="container-12 clear-block">
         <?php if ($preface_one): ?>
        <div class="<?php print'grid-'.  12/$preface; ?>">
          <?php print $preface_one; ?>
        </div>
        <?php endif; ?>
        <?php if ($preface_two): ?>
        <div class="<?php print'grid-'.  12/$preface; ?>">
          <?php print $preface_two; ?>
        </div>
        <?php endif; ?>
        <?php if ($preface_three): ?>
        <div class="<?php print'grid-'. 12/$preface; ?>">
          <?php print $preface_three; ?>
        </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <div id="content-wrap" class="<?php print ns('container-12', $two_sidebars, -4); ?> clear-block">
      <div id="main" class="column <?php print ns('grid-12', $two_sidebars, -4, $left, 4, $right, 4) . ' ' . ns('push-0', $left, -4); ?>">
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php if ($tabs): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>
      <?php print $messages; ?>
      <?php print $help; ?>

      <div id="main-content" class="region clear-block">
        <?php print $content; ?>
      </div>
      <?php print $feed_icons; ?>
      </div>

    <?php if ($left): ?>
      <div id="sidebar-left" class="column sidebar region grid-4 pull-8">
        <div class="border">
        <?php print $left; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($right): ?>
      <div id="sidebar-right" class="column sidebar region grid-4">
        <div class="border">
        <?php print $right; ?>
        </div>
      </div>
    <?php endif; ?>

    </div>
    </div>



  <div id="footer-wrap" class="container-12 clear-block">
    <?php if ($bottom_one || $bottom_two || $bottom_three || $bottom_four): ?>
    <div id="bottom" class="container-12 clear-block">
      <?php if ($bottom_one): ?>
        <div class="region <?php print'grid-'.  12/$bottom; ?>">
          <?php print $bottom_one; ?>
        </div>
      <?php endif; ?>
      <?php if ($bottom_two): ?>
        <div class="region <?php print'grid-'.  12/$bottom; ?>">
          <?php print $bottom_two; ?>
        </div>
      <?php endif; ?>
      <?php if ($bottom_three): ?>
        <div class="region <?php print'grid-'. 12/$bottom; ?>">
          <?php print $bottom_three; ?>
        </div>
      <?php endif; ?>
      <?php if ($bottom_four): ?>
        <div class="region <?php print'grid-'. 12/$bottom; ?>">
          <?php print $bottom_four; ?>
        </div>
      <?php endif; ?>
    </div>
    <?php endif; ?>


    <div id="footer" class="region grid-12">
      <div id="footer-logo"></div>
      <div id="footer-text">&copy; Alyssa Campbell Photography. Do not use without written permission.<br /> Website powered by <?php print l('G Technologies', 'http://www.gtech-online.net/'); ?>.</div>
    </div>
  </div>


  </div>
  <?php print $closure; ?>
</body>
</html>
