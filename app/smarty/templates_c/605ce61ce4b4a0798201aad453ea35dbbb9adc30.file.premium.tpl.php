<?php /* Smarty version Smarty-3.1.11, created on 2013-05-06 14:52:20
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/premium.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18647484445187eff90189a1-36660303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '605ce61ce4b4a0798201aad453ea35dbbb9adc30' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3.1/smarty/templates/biz/premium.tpl',
      1 => 1367865384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18647484445187eff90189a1-36660303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5187eff90f6519_05058065',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'channelPackages' => 0,
    'service' => 0,
    'channelPackage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5187eff90f6519_05058065')) {function content_5187eff90f6519_05058065($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
" class="biz">

    <div class="container shadow-top">
        <div class="row">
            <div class="span12">
            </div>
        </div>
    </div>

    <div class="mid-section">
        <div class="container">
            <div class="row-fluid">
                <?php echo $_smarty_tpl->getSubTemplate ("left-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div class="span9">
                    <div class="row-fluid main-content">
                        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                <div class="head2" style="margin-bottom: -10px;"><span class="tv-heading blue"><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</span></div>
                                <?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['service']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value->services; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value){
$_smarty_tpl->tpl_vars['service']->_loop = true;
?>
                                    <?php  $_smarty_tpl->tpl_vars['channelPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channelPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channelPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channelPackage']->key => $_smarty_tpl->tpl_vars['channelPackage']->value){
$_smarty_tpl->tpl_vars['channelPackage']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['service']->value==$_smarty_tpl->tpl_vars['channelPackage']->value->packageName){?>
                                            <div class="tv-package-block clearfix">
                                                <div class="tv-package-border clearfix">
                                                    <div class="tv-price">
                                                        <div class="biggest gray big-fitText">
                                                            <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->priceText;?>

                                                        </div>
                                                        <div class="sub-heading italic gray sm-fitText">
                                                            per month
                                                        </div>
                                                    </div>
                                                    <div class="tv-channels">
                                                        <div class="biggest orange big-fitText">
                                                            <?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->count;?>

                                                        </div>
                                                        <div class="sub-heading italic orange sm-fitText">
                                                            channels
                                                        </div>
                                                    </div>
                                                    <div class="tv-info">
                                                        <div class="ltblue head2"><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->title;?>
</div>
                                                        <p><?php echo $_smarty_tpl->tpl_vars['channelPackage']->value->description;?>
</p>
                                                        <a href="business/television/channel-lineup" class="bold">See channel lineup</a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                    <?php } ?>
                                <?php } ?>
                            <?php }?>
                        <?php } ?>
                    </div>
                    <div class="shadow-bottom">
                        <div class="row-fluid">
                            <div class="span12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container shadow-bottom">
        <div class="row-fluid">
            <div class="span12">
            </div>
        </div>
    </div>
    
</div><?php }} ?>