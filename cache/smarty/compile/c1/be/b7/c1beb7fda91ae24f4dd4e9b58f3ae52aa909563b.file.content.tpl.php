<?php /* Smarty version Smarty-3.1.19, created on 2015-11-23 18:51:04
         compiled from "C:\xampp\htdocs\flowershop\admin\themes\default\template\controllers\localization\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5883565352080841c0-42903827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1beb7fda91ae24f4dd4e9b58f3ae52aa909563b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\flowershop\\admin\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1446128212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5883565352080841c0-42903827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56535208120966_04217802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56535208120966_04217802')) {function content_56535208120966_04217802($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
