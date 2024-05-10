<?php
/* Smarty version 4.3.4, created on 2024-05-10 17:50:08
  from '/Applications/MAMP/htdocs/EgioShop/themes/EgioTheme/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_663e42305f5ac9_52258734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52c0a11bc9b9e5dfa1240ec612c0d442b949a21d' => 
    array (
      0 => '/Applications/MAMP/htdocs/EgioShop/themes/EgioTheme/templates/_partials/breadcrumb.tpl',
      1 => 1714143294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663e42305f5ac9_52258734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
  <ol>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1189774586663e42305f0d31_74944635', 'breadcrumb');
?>

  </ol>
</nav>
<?php }
/* {block 'breadcrumb_item'} */
class Block_169588329663e42305f21e8_56737390 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li>
            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?>
              <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></a>
            <?php } else { ?>
              <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
          </li>
        <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_1189774586663e42305f0d31_74944635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_1189774586663e42305f0d31_74944635',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_169588329663e42305f21e8_56737390',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169588329663e42305f21e8_56737390', 'breadcrumb_item', $this->tplIndex);
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'breadcrumb'} */
}
