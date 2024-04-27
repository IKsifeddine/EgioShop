<?php
/* Smarty version 4.3.4, created on 2024-04-26 17:00:19
  from '/Applications/MAMP/htdocs/EgioShop/themes/EgioTheme/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_662bc18360fdc4_94034560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61baf33195bcdbe007da81b5f056aba612d4a2e2' => 
    array (
      0 => '/Applications/MAMP/htdocs/EgioShop/themes/EgioTheme/templates/page.tpl',
      1 => 1714143294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662bc18360fdc4_94034560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1644786062662bc183609f74_14759235', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1574458148662bc18360adb7_68402633 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_256581997662bc18360a5b3_04491469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1574458148662bc18360adb7_68402633', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_739879388662bc18360d412_16906729 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1324571847662bc18360dc90_36985184 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_998132754662bc18360ce07_25131354 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_739879388662bc18360d412_16906729', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1324571847662bc18360dc90_36985184', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1059895291662bc18360ef57_23913482 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1101628594662bc18360e969_18993331 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1059895291662bc18360ef57_23913482', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1644786062662bc183609f74_14759235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1644786062662bc183609f74_14759235',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_256581997662bc18360a5b3_04491469',
  ),
  'page_title' => 
  array (
    0 => 'Block_1574458148662bc18360adb7_68402633',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_998132754662bc18360ce07_25131354',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_739879388662bc18360d412_16906729',
  ),
  'page_content' => 
  array (
    0 => 'Block_1324571847662bc18360dc90_36985184',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1101628594662bc18360e969_18993331',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1059895291662bc18360ef57_23913482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_256581997662bc18360a5b3_04491469', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_998132754662bc18360ce07_25131354', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1101628594662bc18360e969_18993331', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
