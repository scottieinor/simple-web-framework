<?php /* Smarty version Smarty-3.1.11, created on 2013-05-22 15:24:36
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/DOM_start.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2080381044519d4486bf0d33-57055431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d9ca6f1df8fc88f7dbd241d15179cb3c5e8ae6a' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.2/smarty/templates/DOM_start.tpl',
      1 => 1369261474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2080381044519d4486bf0d33-57055431',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_519d4486c721d4_20422295',
  'variables' => 
  array (
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519d4486c721d4_20422295')) {function content_519d4486c721d4_20422295($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if lt IE 9]>      <html class="lt-ie9"> <![endif]-->
<!--[if lte IE 9]>     <html class="lte-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
            <title><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
 | Canby Telcom</title>
        <?php }?>
    <?php } ?>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Base Reference-->
    <base href="http://marketing.canbytel.com/canbytel.v.0.3.2/index.php">
    
    <script src="js/css_browser_selector.js" type="text/javascript"></script>
    
    <!-- Megafolio -->
    <link rel="stylesheet" type="text/css" href="plugins/megafolio/css/style-full.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="plugins/megafolio/megafolio/css/settings-full.css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="plugins/megafolio/megafolio/css/lightbox-full.css" media="screen" /> 

    <!-- Orbit template styles -->
    <link rel="stylesheet" href="css/orbit.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    
    <!-- Canby Styles -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/support.css">
    <link rel="stylesheet" href="css/tutorials.css">
    
    <!-- Open Sans Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,700italic,400,700,800,600' rel='stylesheet' type='text/css'>

</head>
<body>
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    
        <div id="wrapper"><?php }} ?>