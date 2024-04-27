<?php
/* Smarty version 4.3.4, created on 2024-04-26 17:15:40
  from '/Applications/MAMP/htdocs/EgioShop/admin2619qx9metmlrddx9sb/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_662bc51c487a15_56039332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd53d2243efe190b280465d04866446276bd73d72' => 
    array (
      0 => '/Applications/MAMP/htdocs/EgioShop/admin2619qx9metmlrddx9sb/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1709832552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662bc51c487a15_56039332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1533450570662bc51c486e17_31679405', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_1533450570662bc51c486e17_31679405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_1533450570662bc51c486e17_31679405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
