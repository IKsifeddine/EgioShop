<?php
/* Smarty version 4.3.4, created on 2024-04-26 17:17:29
  from '/Applications/MAMP/htdocs/EgioShop/admin2619qx9metmlrddx9sb/themes/default/template/controllers/attributes_groups/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_662bc589e6c4a6_12571599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6301404e373798c4828d6c6d5ddaad4c4e6d53d9' => 
    array (
      0 => '/Applications/MAMP/htdocs/EgioShop/admin2619qx9metmlrddx9sb/themes/default/template/controllers/attributes_groups/helpers/form/form.tpl',
      1 => 1709832552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662bc589e6c4a6_12571599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1272919882662bc589e64846_27144292', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_1272919882662bc589e64846_27144292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_1272919882662bc589e64846_27144292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'public_name') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAttributeGroupForm",'id_attribute_group'=>$_smarty_tpl->tpl_vars['form_id']->value),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}
