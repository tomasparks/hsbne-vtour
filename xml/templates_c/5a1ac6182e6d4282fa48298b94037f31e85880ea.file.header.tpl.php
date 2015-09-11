<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 14:39:37
         compiled from "/opt/lampp/htdocs/hsbne-vtour/xml/templates/krpano/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14040577165551f4895db391-20147923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a1ac6182e6d4282fa48298b94037f31e85880ea' => 
    array (
      0 => '/opt/lampp/htdocs/hsbne-vtour/xml/templates/krpano/header.tpl',
      1 => 1431100497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14040577165551f4895db391-20147923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'json_file' => 0,
    'json_error' => 0,
    'xml_title' => 0,
    'dataurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5551f489658007_98036429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5551f489658007_98036429')) {function content_5551f489658007_98036429($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>

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
