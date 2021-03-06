<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>

<title><?php print $head_title; ?></title>
<?php print $head; ?>
<?php print $styles; ?>

<?php //print $scripts; ?>

<?php $js = drupal_add_js('misc/jquery.js', 'core', 'header');
$js = drupal_add_js(drupal_get_path('theme', 'magazeenlite') .'/js/magazeenlite.js', 'theme');
print drupal_get_js('header', $js); ?>

</head>

<body>

<!-- ______________________ HEADER _______________________ -->

<div id="header">
    <div class="container clearfix">
        <div id="logo">
        <?php
        // Prepare header
          $site_fields = array();
          if ($site_name) {
            $site_fields[] = check_plain($site_name);
          }
         
          $site_title = implode(' ', $site_fields);
          if ($site_fields) {
            $site_fields[0] = '<span>'. $site_fields[0] .'</span>';
          }
          $site_html = implode(' ', $site_fields);

          if ($logo || $site_title) {
            print '<h1><a href="'. check_url($front_page) .'" title="'. $site_title .'">';
            if ($logo) {
              print '<img src="'. check_url($logo) .'" alt="'. $site_title .'" id="logo-image" />';
            }
            print $site_html .'</a></h1>';
          }
        
        print '<h2 class="slogan">'. check_plain($site_slogan).'</h2>'; ?>
        
        </div>
        
        <div id="searchform-header">
            <?php print $search_box; ?>
        </div>
        
    </div> <!-- /header-container -->
</div> <!-- /header -->

<!-- ______________________ NAVIGATION _______________________ -->

<?php if (!empty($primary_links)): ?>

<div id="navigation"><!-- navigation -->
    <div class="container clearfix">
    <?php print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu'));  ?>
    <a title="Subscribe to magazeen RSS" class="rss" href="">Subscribe</a>
    </div> <!-- /navigation-container -->
</div> <!-- /navigation -->

<?php endif;?>

<!-- ______________________ SLIDESHOW _______________________ -->

<div id="slideshow"><!-- slideshow -->
    <div class="slideshow container clearfix">

    <div class="force-previous"><a href="#">Previous</a></div>
    
    <div class="main_view">
        <div class="window">
    
           <div class="image_reel">
<a href="#"><img src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . base_path() . drupal_get_path('theme', 'magazeenlite')?>/images/slideshow/slide3.jpg" alt="" /></a>
<a href="#"><img src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . base_path() . drupal_get_path('theme', 'magazeenlite')?>/images/slideshow/slide1.jpg" alt="" /></a>
<a href="#"><img src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . base_path() . drupal_get_path('theme', 'magazeenlite')?>/images/slideshow/slide2.jpg" alt="" /></a>
</div>
    
        </div>
        <div class="paging">
            <a href="#" rel="1">1</a>
            <a href="#" rel="2">2</a>
            <a href="#" rel="3">3</a>
        </div>
    </div>
    
    <div class="force-next"><a href="#">Next</a></div>
        
  
    </div> <!-- /slideshow-container -->
</div> <!-- /slideshow -->

<!-- ______________________ MAIN _______________________ -->

<div id="main" class="clearfix">

    <div class="container clearfix">

        <div class="main">
			<?php print $breadcrumb; ?>
            <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>   
            <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
            <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
            <?php if ($show_messages && $messages): print $messages; endif; ?>
            <?php print $help; ?>
            <div class="clear-block">
            <?php print $content ?>
            </div>   
        </div><!-- /main -->
        
        <div id="sidebar" class="right">
			<?php print $right; ?>             
        </div><!-- /right -->
        
    </div><!-- /main-container -->
    
</div><!-- /main -->


<!-- ______________________ FOOTER _______________________ -->

<div id="footer">
    <div class="container footer-divider clearfix">
    
        <div id="footer-left">
        <a href="http://www.apple.com/pr/library/2013/09/24Apple-Updates-iMac.html"><h4>Apple Updates iMac </h4></a>
        CUPERTINO, California—September 24, 2013—Apple® today updated iMac® with fourth generation Intel quad-core processors, new graphics, next generation Wi-Fi and faster PCIe flash storage options. The updated iMac brings the latest technology to the stunningly thin design and gorgeous display of the world’s leading all-in-one desktop.
        <?php print $footer_left; ?>
        </div>
    
        <div id="footer-right">
        <a href="http://www.apple.com/pr/library/2013/09/23First-Weekend-iPhone-Sales-Top-Nine-Million-Sets-New-Record.html"><h4>First Weekend iPhone Sales Top Nine Million, Sets New Record</h4></a>
        LCUPERTINO, California―September 23, 2013―Apple® today announced it has sold a record-breaking nine million new iPhone® 5s and iPhone 5c models, just three days after the launch of the new iPhones on September 20. In addition, more than 200 million iOS devices are now running the completely redesigned iOS 7, making it the fastest software upgrade in history. Both iPhone 5s and iPhone 5c are available in the US, Australia, Canada, China, France, Germany, Hong Kong, Japan, Puerto Rico, Singapore and the UK. Demand for iPhone 5s has exceeded the initial supply, and many online orders are scheduled to be shipped in the coming weeks.
        <?php print $footer_right; ?>
        </div>
        
    </div><!-- /footer-container -->
</div><!-- /footer -->


<!-- ______________________ SECONDARY NAVIGATION _______________________ -->

<?php if (!empty($secondary_links)): ?>

<div id="snavigation"><!-- snavigation -->
    <div class="container clearfix">
    <?php print theme('links', $secondary_links, array('id' => 'secondary-links', 'class' => 'links main-menu'));  ?>
    </div> <!-- /snavigation-container -->
</div> <!-- /snavigation -->

<?php endif;?>

<!-- ______________________ LINK-BACK _______________________ -->

<div id="link-back">
    <div class="container clearfix">
    
       
        
        <div id="footer-message" style="clear:both;">
        <?php print $footer_message; ?>
        </div>
    
    </div> <!-- /link-back-container -->
    
</div> <!-- /link-back -->


<?php print $closure; ?>
</body>
</html>