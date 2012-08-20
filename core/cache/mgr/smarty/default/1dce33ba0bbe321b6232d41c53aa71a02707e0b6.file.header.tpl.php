<?php /* Smarty version Smarty-3.0.4, created on 2012-08-20 23:34:28
         compiled from "/var/www/sqlite-2.2/manager/templates/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14819385305032ad6441b622-00963872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dce33ba0bbe321b6232d41c53aa71a02707e0b6' => 
    array (
      0 => '/var/www/sqlite-2.2/manager/templates/default/header.tpl',
      1 => 1345493728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14819385305032ad6441b622-00963872',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ((isset($_smarty_tpl->getVariable('_config')->value['manager_html5_cache']) ? $_smarty_tpl->getVariable('_config')->value['manager_html5_cache'] : null)==1){?><!DOCTYPE HTML><?php }else{ ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><?php }?>

<html xmlns="http://www.w3.org/1999/xhtml" <?php if ((isset($_smarty_tpl->getVariable('_config')->value['manager_direction']) ? $_smarty_tpl->getVariable('_config')->value['manager_direction'] : null)=='rtl'){?>dir="rtl"<?php }?> lang="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_lang_attribute']) ? $_smarty_tpl->getVariable('_config')->value['manager_lang_attribute'] : null);?>
" xml:lang="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_lang_attribute']) ? $_smarty_tpl->getVariable('_config')->value['manager_lang_attribute'] : null);?>
"<?php if ((isset($_smarty_tpl->getVariable('_config')->value['manager_html5_cache']) ? $_smarty_tpl->getVariable('_config')->value['manager_html5_cache'] : null)==1){?> manifest="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
cache.manifest.php"<?php }?>>
<head>
<title><?php if ($_smarty_tpl->getVariable('_pagetitle')->value){?><?php echo $_smarty_tpl->getVariable('_pagetitle')->value;?>
 | <?php }?><?php echo (isset($_smarty_tpl->getVariable('_config')->value['site_name']) ? $_smarty_tpl->getVariable('_config')->value['site_name'] : null);?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo (isset($_smarty_tpl->getVariable('_config')->value['modx_charset']) ? $_smarty_tpl->getVariable('_config')->value['modx_charset'] : null);?>
" />

<?php if ((isset($_smarty_tpl->getVariable('_config')->value['manager_favicon_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_favicon_url'] : null)){?><link rel="shortcut icon" type="image/x-icon" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_favicon_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_favicon_url'] : null);?>
" /><?php }?>

<?php if ((isset($_smarty_tpl->getVariable('_config')->value['compress_css']) ? $_smarty_tpl->getVariable('_config')->value['compress_css'] : null)){?>
<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
assets/ext3/resources/css/ext-all-notheme-min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
min/index.php?f=<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
templates/default/css/xtheme-modx.css,<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
templates/default/css/index.css" />
<?php }else{ ?>
<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
assets/ext3/resources/css/ext-all-notheme-min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
templates/default/css/xtheme-modx.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
templates/default/css/index.css" />
<?php }?>

<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
assets/ext3/adapter/ext/ext-base.js" type="text/javascript"></script>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
assets/ext3/ext-all.js" type="text/javascript"></script>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
assets/modext/core/modx.js" type="text/javascript"></script>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['connectors_url']) ? $_smarty_tpl->getVariable('_config')->value['connectors_url'] : null);?>
lang.js.php?ctx=mgr&topic=topmenu,file,resource,<?php echo $_smarty_tpl->getVariable('_lang_topics')->value;?>
&action=<?php echo preg_replace('!<[^>]*?>!', ' ', (isset($_GET['a'])? $_GET['a'] : null));?>
" type="text/javascript"></script>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['connectors_url']) ? $_smarty_tpl->getVariable('_config')->value['connectors_url'] : null);?>
layout/modx.config.js.php?action=<?php echo preg_replace('!<[^>]*?>!', ' ', (isset($_GET['a'])? $_GET['a'] : null));?>
<?php if ($_smarty_tpl->getVariable('_ctx')->value){?>&wctx=<?php echo $_smarty_tpl->getVariable('_ctx')->value;?>
<?php }?>" type="text/javascript"></script>

<?php if ((isset($_smarty_tpl->getVariable('_config')->value['compress_js']) ? $_smarty_tpl->getVariable('_config')->value['compress_js'] : null)&&(isset($_smarty_tpl->getVariable('_config')->value['compress_js_groups']) ? $_smarty_tpl->getVariable('_config')->value['compress_js_groups'] : null)){?>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
min/index.php?g=coreJs1" type="text/javascript"></script>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
min/index.php?g=coreJs2" type="text/javascript"></script>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
min/index.php?g=coreJs3" type="text/javascript"></script>
<?php }?>

<?php echo $_smarty_tpl->getVariable('maincssjs')->value;?>

<?php  $_smarty_tpl->tpl_vars['scr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cssjs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['scr']->key => $_smarty_tpl->tpl_vars['scr']->value){
?>
<?php echo (isset($_smarty_tpl->tpl_vars['scr']->value) ? $_smarty_tpl->tpl_vars['scr']->value : null);?>

<?php }} ?>

<!--[if IE]>
<style type="text/css">body { behavior: url("<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
templates/default/css/csshover3.htc"); }</style>
<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
templates/default/css/ie.css" />
<![endif]-->
</head>
<body id="modx-body-tag">

<div id="modx-browser"></div>
<div id="modx-container">
    <div id="modx-mainpanel">
        <div id="modx-header">
            <div id="modx-topbar">
                <div id="modx-logo"><a href="http://modx.com" onclick="window.open(this.href); return false;"><img src="templates/default/images/style/modx-logo-header.png" alt="" /></a></div>


                <div class="rightlogin">
                    <?php if ($_smarty_tpl->getVariable('canChangeProfile')->value){?><a class="modx-user-profile" href="?a=<?php echo $_smarty_tpl->getVariable('profileAction')->value;?>
"><?php echo $_smarty_tpl->getVariable('username')->value;?>
</a><?php }else{ ?><span class="modx-user-profile"><?php echo $_smarty_tpl->getVariable('username')->value;?>
</span><?php }?>
                    <?php if ($_smarty_tpl->getVariable('canLogout')->value){?><a class="modx-logout" href="javascript:;" onclick="MODx.logout();"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['logout']) ? $_smarty_tpl->getVariable('_lang')->value['logout'] : null);?>
</a><?php }?>
                </div>
                <div id="modx-site-name">
                    <?php echo (isset($_smarty_tpl->getVariable('_config')->value['site_name']) ? $_smarty_tpl->getVariable('_config')->value['site_name'] : null);?>

                    <span class="modx-version">MODX Revolution <?php echo (isset($_smarty_tpl->getVariable('_config')->value['settings_version']) ? $_smarty_tpl->getVariable('_config')->value['settings_version'] : null);?>
 (<?php echo (isset($_smarty_tpl->getVariable('_config')->value['settings_distro']) ? $_smarty_tpl->getVariable('_config')->value['settings_distro'] : null);?>
)</span>
                </div>
            </div>
            <div id="modx-navbar">
                <div id="modx-topnav-div">
                    <ul id="modx-topnav">
                        <?php echo $_smarty_tpl->getVariable('navb')->value;?>

                        <li class="cls"></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div id="modAB"></div>
        <div id="modx-leftbar"></div>
        <div id="modx-content">
            <div id="modx-panel-holder"></div>
