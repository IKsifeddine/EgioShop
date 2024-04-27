<?php
/* Smarty version 4.3.4, created on 2024-04-26 17:15:22
  from '/Applications/MAMP/htdocs/EgioShop/themes/EgioTheme/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_662bc50a027d34_12771443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '330b2b95afc790530e761a8491aad6a45bbb7675' => 
    array (
      0 => '/Applications/MAMP/htdocs/EgioShop/themes/EgioTheme/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1714143294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662bc50a027d34_12771443 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
