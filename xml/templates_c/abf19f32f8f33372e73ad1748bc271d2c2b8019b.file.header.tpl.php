<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-07 11:54:39
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:500440454554b1ca7b02e11-08405123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abf19f32f8f33372e73ad1748bc271d2c2b8019b' => 
    array (
      0 => './templates/header.tpl',
      1 => 1430992476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '500440454554b1ca7b02e11-08405123',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554b1ca7b38824_87493584',
  'variables' => 
  array (
    'json_file' => 0,
    'json_error' => 0,
    'xml_title' => 0,
    'dataurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554b1ca7b38824_87493584')) {function content_554b1ca7b38824_87493584($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>

<!-- loading json file <?php echo $_smarty_tpl->tpl_vars['json_file']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['json_error']->value;?>
 -->
<krpano version="1.18" title="<?php echo $_smarty_tpl->tpl_vars['xml_title']->value;?>
" onstart="startup();">


	<include url="<?php echo $_smarty_tpl->tpl_vars['dataurl']->value;?>
/skin/vtourskin.xml" />




	<action name="startup">
		if(startscene === null, copy(startscene,scene[0].name));
		loadscene(get(startscene), null, MERGE);
	</action>

<events onloadcomplete="js ( DisHtml(get(xml.scene)); ) ; " />

<?php }} ?>
