<?php /* Smarty version Smarty-3.1.19, created on 2015-11-23 18:50:59
         compiled from "C:\xampp\htdocs\flowershop\themes\default-bootstrap\modules\blockcurrencies\blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165475653520308f1b1-77122979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '238417a7651500cd65d9670be20e4b104bed9825' => 
    array (
      0 => 'C:\\xampp\\htdocs\\flowershop\\themes\\default-bootstrap\\modules\\blockcurrencies\\blockcurrencies.tpl',
      1 => 1446128214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165475653520308f1b1-77122979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'request_uri' => 0,
    'cookie' => 0,
    'f_currency' => 0,
    'currency_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56535203264882_13771392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56535203264882_13771392')) {function content_56535203264882_13771392($_smarty_tpl) {?>
<!-- Block currencies module -->
<?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
	<div id="currencies-block-top">
		<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
			<div class="current">
				<input type="hidden" name="id_currency" id="id_currency" value=""/>
				<input type="hidden" name="SubmitCurrency" value="" />
				<span class="cur-label"><?php echo smartyTranslate(array('s'=>'Currency','mod'=>'blockcurrencies'),$_smarty_tpl);?>
 :</span>
				<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?><strong><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['iso_code'];?>
</strong><?php }?>
				<?php } ?>
			</div>
			<ul id="first-currencies" class="currencies_ul toogle_content">
				<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
					<?php if (strpos($_smarty_tpl->tpl_vars['f_currency']->value['name'],('(').($_smarty_tpl->tpl_vars['f_currency']->value['iso_code']).(')'))===false) {?>
						<?php ob_start();?><?php echo smartyTranslate(array('s'=>'%s (%s)','sprintf'=>array($_smarty_tpl->tpl_vars['f_currency']->value['name'],$_smarty_tpl->tpl_vars['f_currency']->value['iso_code'])),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["currency_name"] = new Smarty_variable($_tmp13, null, 0);?>
					<?php } else { ?>
						<?php $_smarty_tpl->tpl_vars["currency_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['f_currency']->value['name'], null, 0);?>
					<?php }?>
					<li <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>class="selected"<?php }?>>
						<a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['currency_name']->value;?>
">
							<?php echo $_smarty_tpl->tpl_vars['currency_name']->value;?>

						</a>
					</li>
				<?php } ?>
			</ul>
		</form>
	</div>
<?php }?>
<!-- /Block currencies module -->
<?php }} ?>
