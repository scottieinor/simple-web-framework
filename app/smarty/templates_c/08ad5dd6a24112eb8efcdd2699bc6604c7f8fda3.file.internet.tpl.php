<?php /* Smarty version Smarty-3.1.11, created on 2013-03-07 11:43:50
         compiled from "/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/internet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19742064215134cabfd26f83-95153465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08ad5dd6a24112eb8efcdd2699bc6604c7f8fda3' => 
    array (
      0 => '/var/www/html/marketing.canbytel.com/canbytel.v.0.3/smarty/templates/internet.tpl',
      1 => 1362685430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19742064215134cabfd26f83-95153465',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5134cabfdfc3a6_91027096',
  'variables' => 
  array (
    'subSubMenu' => 0,
    'pages' => 0,
    'page' => 0,
    'curPage' => 0,
    'internetUses' => 0,
    'internetUse' => 0,
    'speedPackages' => 0,
    'speedPackage' => 0,
    'featureSet' => 0,
    'feature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5134cabfdfc3a6_91027096')) {function content_5134cabfdfc3a6_91027096($_smarty_tpl) {?><div id="content" data-page="<?php echo $_smarty_tpl->tpl_vars['subSubMenu']->value;?>
">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 top-section internet-top">
                <div class="row-fluid">
                    <div class="span6">
                        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value->pageName==$_smarty_tpl->tpl_vars['curPage']->value){?>
                                <div class="top-content">
                                    <h1 style="position: relative; z-index: 1;"><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</h1>
                                    
                                    <p style="position: relative; z-index: 1;">
                                        <?php echo $_smarty_tpl->tpl_vars['page']->value->mainContent;?>
<br><br>
                                        <?php echo $_smarty_tpl->tpl_vars['page']->value->subContent;?>

                                    </p>
                                </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                    <div class="span6">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container shadow-top">
        <div class="row">
            <div class="span12">
            </div>
        </div>
    </div>

    <div class="mid-section">
        <div class="container">
            <div class="row-fluid internet-content">
                <?php echo $_smarty_tpl->getSubTemplate ("left-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div class="span9">
                    <div class="speed-choser">
                        <div class="row-fluid">
                            <div class="span3 internet-uses">
                                <span class="head3">I use my Internet to:</span>
                                <?php  $_smarty_tpl->tpl_vars['internetUse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['internetUse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['internetUses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['internetUse']->key => $_smarty_tpl->tpl_vars['internetUse']->value){
$_smarty_tpl->tpl_vars['internetUse']->_loop = true;
?>
                                    <label class="checkbox internet-use-label"><input class="use-checkbox internet-use-checkbox-<?php echo $_smarty_tpl->tpl_vars['internetUse']->value->class;?>
" type="checkbox" name="internet-use" value=<?php echo $_smarty_tpl->tpl_vars['internetUse']->value->class;?>
> <?php echo $_smarty_tpl->tpl_vars['internetUse']->value->title;?>
</label>
                                <?php } ?>
                            </div>
                            <div class="span9 speed-packages clearfix">
                                <div class="packages-heading">INTERNET PACKAGES FOR YOU:</div>
                                <div class="row-fluid">
                                    <div id="speeds-list" class="span12 packages-list clearfix left">
                                        <table class="table left clearfix">
                                            <?php  $_smarty_tpl->tpl_vars['speedPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['speedPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['speedPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['speedPackage']->key => $_smarty_tpl->tpl_vars['speedPackage']->value){
$_smarty_tpl->tpl_vars['speedPackage']->_loop = true;
?>
                                                <tr class="muted <?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->class;?>
-package"><td><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->title;?>
</td><td class="blue"><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->priceText;?>
</td>
                                                    <td>
                                                    <div class="arrow-button">
                                                        <a class="internet-learn-link button-right button-orange" href="#interent/<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->packageName;?>
" data-speedlink="<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->serviceName;?>
">Learn More</a><span class="arrow-button-right arrow-button-orange"></span>
                                                    </div>
                                                    
                                            <?php } ?>
                                        </table>
                                    </div>
                                    <?php  $_smarty_tpl->tpl_vars['speedPackage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['speedPackage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['speedPackages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['speedPackage']->key => $_smarty_tpl->tpl_vars['speedPackage']->value){
$_smarty_tpl->tpl_vars['speedPackage']->_loop = true;
?>
                                        <div id="<?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->serviceName;?>
" class="speed-package span12 left clearfix" style="padding: 25px 50px 25px 20px; color: #455560;">
                                            <h3><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->title;?>
</h3>
                                            <h5><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->subtitle;?>
</h5>
                                            <h4 class="blue"><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->priceText;?>
</h4>
                                            <p><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->description;?>
</p>
                                            <p><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->description2;?>
</p>
                                            <?php if ($_smarty_tpl->tpl_vars['speedPackage']->value->FeatureSets){?>
                                                <?php  $_smarty_tpl->tpl_vars['featureSet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['featureSet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['speedPackage']->value->FeatureSets; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['featureSet']->key => $_smarty_tpl->tpl_vars['featureSet']->value){
$_smarty_tpl->tpl_vars['featureSet']->_loop = true;
?>
                                                <h4><?php echo $_smarty_tpl->tpl_vars['featureSet']->value->title;?>
</h4>
                                                <ul>
                                                <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featureSet']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                                                    <li><?php echo $_smarty_tpl->tpl_vars['feature']->value['featureTitle'];?>
</li>
                                                <?php } ?>
                                                </ul>
                                                <?php } ?>
                                            <?php }?>
                                            <p class="disclaimer"><?php echo $_smarty_tpl->tpl_vars['speedPackage']->value->disclaimer;?>
</p>
                                            
                                            <div class="arrow-button right">
                                                <span class="arrow-button-left arrow-button-blue gradient"></span><a class="speed-package-back button-left button-blue gradient" href="#">Back</a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shadow-bottom">
                        <div class="row">
                            <div class="span12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container shadow-bottom">
        <div class="row">
            <div class="span12">
            </div>
        </div>
    </div>
    
</div><?php }} ?>