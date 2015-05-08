<?xml version="1.0" encoding="UTF-8"?>
<!-- loading json file {$json_file}: {$json_error} -->
<krpano version="1.18" title="{$xml_title}" onstart="startup();">


	<include url="{$dataurl}/skin/vtourskin.xml" />




	<action name="startup">
		if(startscene === null, copy(startscene,scene[0].name));
		loadscene(get(startscene), null, MERGE);
	</action>

<events onloadcomplete="js ( DisHtml(get(xml.scene)); ) ; " />

