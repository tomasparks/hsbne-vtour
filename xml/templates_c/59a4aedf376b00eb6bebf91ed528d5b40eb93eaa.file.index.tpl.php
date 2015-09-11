<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 14:39:51
         compiled from "./templates/krpano/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12312257135551f440a7cfb4-42708197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59a4aedf376b00eb6bebf91ed528d5b40eb93eaa' => 
    array (
      0 => './templates/krpano/index.tpl',
      1 => 1431434388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12312257135551f440a7cfb4-42708197',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5551f441373777_72657215',
  'variables' => 
  array (
    'nodelist' => 0,
    'v' => 0,
    'dataurl' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5551f441373777_72657215')) {function content_5551f441373777_72657215($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>



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

		<view hlookat="" vlookat="" fovtype="MFOV" fov="120" maxpixelzoom="2.0" fovmin="70" fovmax="140" limitview="auto" />

		<preview url="<?php echo $_smarty_tpl->tpl_vars['dataurl']->value;?>
/panos/<?php echo $_smarty_tpl->tpl_vars['v']->value["url"];?>
/preview.jpg" />

		<image type="CUBE" multires="true" tilesize="512">
			<level tiledimagewidth="2048" tiledimageheight="2048">
				<cube url="<?php echo $_smarty_tpl->tpl_vars['dataurl']->value;?>
/panos/<?php echo $_smarty_tpl->tpl_vars['v']->value["url"];?>
/%s/l3/%v/l3_%s_%v_%h.jpg" />
			</level>
			<level tiledimagewidth="1024" tiledimageheight="1024">
				<cube url="<?php echo $_smarty_tpl->tpl_vars['dataurl']->value;?>
/panos/<?php echo $_smarty_tpl->tpl_vars['v']->value["url"];?>
/%s/l2/%v/l2_%s_%v_%h.jpg" />
			</level>
			<level tiledimagewidth="512" tiledimageheight="512">
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
	<hotspot name="<?php echo $_smarty_tpl->tpl_vars['vv']->value["name"];?>
" style="<?php echo $_smarty_tpl->tpl_vars['vv']->value["style"];?>
" ath="<?php echo $_smarty_tpl->tpl_vars['vv']->value["ath"];?>
" atv="<?php echo $_smarty_tpl->tpl_vars['vv']->value["atv"];?>
" linkedscene="<?php echo $_smarty_tpl->tpl_vars['vv']->value["linkedscene"];?>
" 

onclick="if(linkedscene, skin_hidetooltips(); tween(scale,0.25,0.5); tween(oy,-20,0.5); tween(alpha,0,0.5); looktohotspot(); loadscene(get(linkedscene),null,get(skin_settings.loadscene_flags),get(skin_settings.loadscene_blend)); if(hlookat !== null, lookat(get(hlookat),get(vlookat)); ); skin_updatescroll();"  /> 

<!-- onclick="if(linkedscene, skin_hidetooltips(); tween(scale,0.25,0.5); tween(oy,-20,0.5); tween(alpha,0,0.5); looktohotspot(); loadscene(get(linkedscene),null,get(skin_settings.loadscene_flags),get(skin_settings.loadscene_blend)); if(hlookat !== null, lookat(get(hlookat),get(vlookat)); ); skin_updatescroll();"  /> -->

<!-- onclick="if(linkedscene, tween(scale,0.25,0.5); tween(oy,-20,0.5); tween(alpha,0,0.5); looktohotspot(); loadscene(get(linkedscene),null,MERGE,BLEND(1)); if(hlookat !== null, lookat(get(hlookat),get(vlookat)); ); skin_updatescroll(); );" -->
<?php } ?>

	</scene>


<?php } ?>


<?php echo $_smarty_tpl->getSubTemplate ("./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
