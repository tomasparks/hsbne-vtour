<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-08 17:55:15
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1352984662554c5a0c58ab05-37084929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0296da91d8bd142a36bb6ffcbbada660d96fba32' => 
    array (
      0 => './templates/header.tpl',
      1 => 1431100497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1352984662554c5a0c58ab05-37084929',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554c5a0c62bdc1_84150777',
  'variables' => 
  array (
    'json_file' => 0,
    'json_error' => 0,
    'xml_title' => 0,
    'dataurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c5a0c62bdc1_84150777')) {function content_554c5a0c62bdc1_84150777($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>

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
