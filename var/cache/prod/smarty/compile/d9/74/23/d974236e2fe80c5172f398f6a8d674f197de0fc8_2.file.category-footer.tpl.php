<?php
/* Smarty version 4.3.4, created on 2024-04-26 17:14:33
  from '/Applications/MAMP/htdocs/EgioShop/themes/EgioTheme/templates/catalog/_partials/category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_662bc4d9ae2fa2_77629873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd974236e2fe80c5172f398f6a8d674f197de0fc8' => 
    array (
      0 => '/Applications/MAMP/htdocs/EgioShop/themes/EgioTheme/templates/catalog/_partials/category-footer.tpl',
      1 => 1714143294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662bc4d9ae2fa2_77629873 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
