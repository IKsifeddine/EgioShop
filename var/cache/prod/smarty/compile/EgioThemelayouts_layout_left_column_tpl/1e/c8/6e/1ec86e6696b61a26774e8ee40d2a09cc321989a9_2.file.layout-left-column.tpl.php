<?php
/* Smarty version 4.3.4, created on 2024-05-10 17:50:08
  from '/Applications/MAMP/htdocs/EgioShop/themes/EgioTheme/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_663e42305066a2_29819977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ec86e6696b61a26774e8ee40d2a09cc321989a9' => 
    array (
      0 => '/Applications/MAMP/htdocs/EgioShop/themes/EgioTheme/templates/layouts/layout-left-column.tpl',
      1 => 1714143294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663e42305066a2_29819977 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_249801871663e4230503d15_87697250', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1277499118663e4230504602_44056644', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_249801871663e4230503d15_87697250 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_249801871663e4230503d15_87697250',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_276477454663e4230505422_53605852 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_1277499118663e4230504602_44056644 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_1277499118663e4230504602_44056644',
  ),
  'content' => 
  array (
    0 => 'Block_276477454663e4230505422_53605852',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="js-content-wrapper left-column col-xs-12 col-md-8 col-lg-9">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_276477454663e4230505422_53605852', 'content', $this->tplIndex);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
