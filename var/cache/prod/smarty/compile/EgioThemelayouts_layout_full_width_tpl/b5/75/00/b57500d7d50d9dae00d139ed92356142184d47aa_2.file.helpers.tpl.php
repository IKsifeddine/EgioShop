<?php
/* Smarty version 4.3.4, created on 2024-04-26 17:00:19
  from '/Applications/MAMP/htdocs/EgioShop/themes/EgioTheme/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_662bc183641206_25561801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b57500d7d50d9dae00d139ed92356142184d47aa' => 
    array (
      0 => '/Applications/MAMP/htdocs/EgioShop/themes/EgioTheme/templates/_partials/helpers.tpl',
      1 => 1714143294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662bc183641206_25561801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Applications/MAMP/htdocs/EgioShop/var/cache/prod/smarty/compile/EgioThemelayouts_layout_full_width_tpl/b5/75/00/b57500d7d50d9dae00d139ed92356142184d47aa_2.file.helpers.tpl.php',
    'uid' => 'b57500d7d50d9dae00d139ed92356142184d47aa',
    'call_name' => 'smarty_template_function_renderLogo_4591685662bc18363a386_44844331',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_4591685662bc18363a386_44844331 */
if (!function_exists('smarty_template_function_renderLogo_4591685662bc18363a386_44844331')) {
function smarty_template_function_renderLogo_4591685662bc18363a386_44844331(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_4591685662bc18363a386_44844331 */
}
