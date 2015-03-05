<?php /* Smarty version 2.6.25, created on 2015-01-20 11:14:06
         compiled from C:%5Cwamp%5Cwww%5Cvanilla/themes/bittersweet/views/default.master.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'asset', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 4, false),array('function', 'home_link', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 11, false),array('function', 'link', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 26, false),array('function', 'logo', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 26, false),array('function', 'searchbox', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 36, false),array('function', 'dashboard_link', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 38, false),array('function', 'discussions_link', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 39, false),array('function', 'activity_link', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 40, false),array('function', 'inbox_link', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 41, false),array('function', 'custom_menu', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 42, false),array('function', 'profile_link', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 43, false),array('function', 'signinout_link', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 44, false),array('function', 'breadcrumbs', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 50, false),array('function', 'module', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 56, false),array('function', 'vanillaurl', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 64, false),array('function', 'event', 'C:\\wamp\\www\\vanilla/themes/bittersweet/views/default.master.tpl', 69, false),)), $this); ?>
<!DOCTYPE html>
<html>
<head>
  <?php echo smarty_function_asset(array('name' => 'Head'), $this);?>

</head>
<body id="<?php echo $this->_tpl_vars['BodyID']; ?>
" class="<?php echo $this->_tpl_vars['BodyClass']; ?>
">
<div id="Frame">
  <div class="Top">
    <div class="Row">
      <div class="TopMenu">
        <!--<?php echo smarty_function_home_link(array(), $this);?>
-->
        <a href="http://www.thundermatch.com.my" target="_blank">Official Website</a>
        <a href="http://www.tmt.my" target="_blank">TMT.MY</a>
        <!--
        You can add more of your top-level navigation links like this:

        <a href="#">Store</a>
        <a href="#">Blog</a>
        <a href="#">Contact Us</a>
        -->
      </div>
   </div>
  </div>
  <div class="Banner">
    <div class="Row">
      <strong class="SiteTitle"><a href="<?php echo smarty_function_link(array('path' => "/"), $this);?>
"><?php echo smarty_function_logo(array(), $this);?>
</a></strong>
      <strong class="SiteTitle" style="top:6px;position:absolute;"><a href="<?php echo smarty_function_link(array('path' => "/"), $this);?>
"><img src="http://www.tmt.my/forum/uploads/S7PPIXQ9OEX4.jpg" width="249px" height="65px"/></a></strong>
      <!--
      We've placed this optional advertising space below. Just comment out the line and replace "Advertising Space" with your 728x90 ad banner. 
      -->
      <!-- <div class="AdSpace">Advertising Space</div> -->
    </div>
  </div>
  <div id="Head">
    <div class="Row">
      <div class="SiteSearch"><?php echo smarty_function_searchbox(array(), $this);?>
</div>
      <ul class="SiteMenu">
       <?php echo smarty_function_dashboard_link(array(), $this);?>

       <?php echo smarty_function_discussions_link(array(), $this);?>

       <?php echo smarty_function_activity_link(array(), $this);?>

       <?php echo smarty_function_inbox_link(array(), $this);?>

       <?php echo smarty_function_custom_menu(array(), $this);?>

       <?php echo smarty_function_profile_link(array(), $this);?>

       <?php echo smarty_function_signinout_link(array(), $this);?>

      </ul>
    </div>
  </div>
  <div class="BreadcrumbsWrapper">
    <div class="Row">
     <?php echo smarty_function_breadcrumbs(array(), $this);?>

    </div>
  </div>
  <div id="Body">
    <div class="Row">
      <div class="Column PanelColumn" id="Panel">
         <?php echo smarty_function_module(array('name' => 'MeModule'), $this);?>

         <?php echo smarty_function_asset(array('name' => 'Panel'), $this);?>

      </div>
      <div class="Column ContentColumn" id="Content"><?php echo smarty_function_asset(array('name' => 'Content'), $this);?>
</div>
    </div>
  </div>
  <div id="Foot">
    <div class="Row">
      <a href="<?php echo smarty_function_vanillaurl(array(), $this);?>
" class="PoweredByVanilla">Powered by Vanilla</a>
      <?php echo smarty_function_asset(array('name' => 'Foot'), $this);?>

    </div>
  </div>
</div>
<?php echo smarty_function_event(array('name' => 'AfterBody'), $this);?>

</body>
</html>