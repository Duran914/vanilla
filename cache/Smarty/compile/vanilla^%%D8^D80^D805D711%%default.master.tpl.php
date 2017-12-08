<?php /* Smarty version 2.6.29, created on 2017-12-08 04:57:55
         compiled from /var/www/html/vanilla/themes/moonshine/views/default.master.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'asset', '/var/www/html/vanilla/themes/moonshine/views/default.master.tpl', 4, false),array('function', 'link', '/var/www/html/vanilla/themes/moonshine/views/default.master.tpl', 16, false),array('function', 'logo', '/var/www/html/vanilla/themes/moonshine/views/default.master.tpl', 16, false),array('function', 'home_link', '/var/www/html/vanilla/themes/moonshine/views/default.master.tpl', 21, false),array('function', 'inbox_link', '/var/www/html/vanilla/themes/moonshine/views/default.master.tpl', 22, false),array('function', 'profile_link', '/var/www/html/vanilla/themes/moonshine/views/default.master.tpl', 23, false),array('function', 'signinout_link', '/var/www/html/vanilla/themes/moonshine/views/default.master.tpl', 24, false),array('function', 'breadcrumbs', '/var/www/html/vanilla/themes/moonshine/views/default.master.tpl', 31, false),array('function', 'module', '/var/www/html/vanilla/themes/moonshine/views/default.master.tpl', 37, false),array('function', 'event', '/var/www/html/vanilla/themes/moonshine/views/default.master.tpl', 47, false),)), $this); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->_tpl_vars['CurrentLocale']['Lang']; ?>
">
<head>
    <?php echo smarty_function_asset(array('name' => 'Head'), $this);?>

  <link rel="stylesheet" type="text/css" href="custom.css">
  <link rel="shortcut icon" href="http://www.clker.com/cliparts/d/C/V/s/q/D/oktoberfest-beer-mug.svg">
  <meta name="viewport" content="width=device-width">
  <script src="https://use.fontawesome.com/c5b9554837.js"></script>
</head>
<body id="<?php echo $this->_tpl_vars['BodyID']; ?>
" class="<?php echo $this->_tpl_vars['BodyClass']; ?>
">

<div id="Frame">
    <div class="Head" id="Head">
        <div class="row">
            <img id="logo" src="http://www.clker.com/cliparts/d/C/V/s/q/D/oktoberfest-beer-mug.svg" alt="">
            <strong class="SiteTitle"><a href="<?php echo smarty_function_link(array('path' => "/"), $this);?>
"><?php echo smarty_function_logo(array(), $this);?>
</a></strong>
            <a href="javascript:void(0);" class="hamburgerMenu"
            onclick="dropdownMenu()">&#9776;</a>

            <ul class="SiteMenu" id="DropDownMenuClick">
            <hr> <li><?php echo smarty_function_home_link(array(), $this);?>
</li><hr>
                <li><?php echo smarty_function_inbox_link(array(), $this);?>
</li><hr>
                <li><?php echo smarty_function_profile_link(array(), $this);?>
</li><hr>
               <li><?php echo smarty_function_signinout_link(array(), $this);?>
</li><hr>
            </ul>
        </div>
    </div>
    <div id="Body">
        <div class="Row">
          <div class="col-12">
            <div class="BreadcrumbsWrapper"><?php echo smarty_function_breadcrumbs(array(), $this);?>
</div>
          </div>
        </div>
        <div class="Row">
          <div class="col-2">
            <div class="Column PanelColumn" id="Panel">
                <?php echo smarty_function_module(array('name' => 'MeModule'), $this);?>

                <?php echo smarty_function_asset(array('name' => 'Panel'), $this);?>

                </div>
              </div>
              <div class="col-10">
            <div class="Column ContentColumn" id="Content"><?php echo smarty_function_asset(array('name' => 'Content'), $this);?>
</div>
           </div>
         </div>
         </div>
        </div>
<?php echo smarty_function_event(array('name' => 'AfterBody'), $this);?>

<footer class="foot">
  <span class="footerText">MoonShine Systems Inc. Copyright &copy 2017. All Rights Reserved</span>
    <span class="socialMedia">
     <i class="fa fa-facebook-official" aria-hidden="true"></i>
      <i class="fa fa-instagram" aria-hidden="true"></i>
      <i class="fa fa-twitter" aria-hidden="true"></i>
     <i class="fa fa-google-plus" aria-hidden="true"></i>
    </span>
</footer>

<script type="text/javascript">

<?php echo '
  function dropdownMenu() {
    var x = document.getElementById(\'DropDownMenuClick\');
      if (x.className === "SiteMenu") {
        x.className += " Responsive";
      } else{
        x.className = "SiteMenu";
     }
  }
    '; ?>

</script>
</body>
</html>