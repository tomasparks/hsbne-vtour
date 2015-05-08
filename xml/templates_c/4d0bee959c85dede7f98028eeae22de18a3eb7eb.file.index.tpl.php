<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-07 12:08:50
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1193163633554b1ca7935354-47882934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d0bee959c85dede7f98028eeae22de18a3eb7eb' => 
    array (
      0 => './templates/index.tpl',
      1 => 1430993327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1193163633554b1ca7935354-47882934',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554b1ca7af4759_76770400',
  'variables' => 
  array (
    'nodelist' => 0,
    'v' => 0,
    'dataurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554b1ca7af4759_76770400')) {function content_554b1ca7af4759_76770400($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>



<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nodelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<scene name="<?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
" onstart="" thumburl="<?php echo $_smarty_tpl->tpl_vars['dataurl']->value;?>
/panos/<?php echo $_smarty_tpl->tpl_vars['v']->value["url"];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value["thumb"];?>
" lat="<?php echo $_smarty_tpl->tpl_vars['v']->value["lat"];?>
" lng="<?php echo $_smarty_tpl->tpl_vars['v']->value["lng"];?>
" heading="<?php echo $_smarty_tpl->tpl_vars['v']->value["heading"];?>
" >

		<view hlookat="0" vlookat="0" fovtype="MFOV" fov="120" maxpixelzoom="2.0" fovmin="70" fovmax="140" limitview="auto" />

		<preview url="<?php echo $_smarty_tpl->tpl_vars['dataurl']->value;?>
/panos/<?php echo $_smarty_tpl->tpl_vars['v']->value["url"];?>
/preview.jpg" />

		<image type="CUBE" multires="true" tilesize="512">
			<level tiledimagewidth="1304" tiledimageheight="1304">
				<cube url="<?php echo $_smarty_tpl->tpl_vars['dataurl']->value;?>
/panos/<?php echo $_smarty_tpl->tpl_vars['v']->value["url"];?>
/%s/l2/%v/l2_%s_%v_%h.jpg" />
			</level>
			<level tiledimagewidth="652" tiledimageheight="652">
				<cube url="<?php echo $_smarty_tpl->tpl_vars['dataurl']->value;?>
/panos/<?php echo $_smarty_tpl->tpl_vars['v']->value["url"];?>
/%s/l1/%v/l1_%s_%v_%h.jpg" />
			</level>
			<mobile>
				<cube url="<?php echo $_smarty_tpl->tpl_vars['dataurl']->value;?>
/panos/<?php echo $_smarty_tpl->tpl_vars['v']->value["url"];?>
/mobile_%s.jpg" />
			</mobile>
		</image>

		<!-- place your scene hotspots here -->
<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value["hotspots"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
<hotspot name="..."
         type="image"
         url="..."
         alturl="..."
         keep="false"
         devices="all"
         visible="true"
         enabled="true"
         handcursor="true"
         maskchildren="false"
         zorder=""
         style=""
         ath="0.0" atv="0.0"
         edge="center"
         zoom="false"
         distorted="false" rx="0.0" ry="0.0" rz="0.0"
         width="" height=""
         scale="1.0"
         rotate="0.0"
         alpha="1.0"
         onover=""
         onhover=""
         onout=""
         ondown=""
         onup=""
         onclick=""
         onloaded=""
         />
<?php } ?>
	</scene>


<?php } ?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
