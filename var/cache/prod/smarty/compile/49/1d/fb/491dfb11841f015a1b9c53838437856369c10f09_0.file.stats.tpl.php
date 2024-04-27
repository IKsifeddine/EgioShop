<?php
/* Smarty version 4.3.4, created on 2024-04-26 17:04:53
  from '/Applications/MAMP/htdocs/EgioShop/admin2619qx9metmlrddx9sb/themes/default/template/controllers/stats/stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_662bc2950b11b9_49913526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '491dfb11841f015a1b9c53838437856369c10f09' => 
    array (
      0 => '/Applications/MAMP/htdocs/EgioShop/admin2619qx9metmlrddx9sb/themes/default/template/controllers/stats/stats.tpl',
      1 => 1709832552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662bc2950b11b9_49913526 (Smarty_Internal_Template $_smarty_tpl) {
?>
		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value && $_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module not found','d'=>'Admin.Stats.Notification'),$_smarty_tpl ) );?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select a module from the left column.','d'=>'Admin.Stats.Notification'),$_smarty_tpl ) );?>
</h3>
			<?php }?>
		</div>
	</div>
</div>
<?php }
}
