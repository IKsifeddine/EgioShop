<?php
/* Smarty version 4.3.4, created on 2024-04-26 17:04:53
  from '/Applications/MAMP/htdocs/EgioShop/admin2619qx9metmlrddx9sb/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_662bc2950b6299_99604031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '890d134bf13dd21e9ca0ca47985b73149fa917a3' => 
    array (
      0 => '/Applications/MAMP/htdocs/EgioShop/admin2619qx9metmlrddx9sb/themes/default/template/content.tpl',
      1 => 1709832552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662bc2950b6299_99604031 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}