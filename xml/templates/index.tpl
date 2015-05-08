{include file="header.tpl" title=foo}


{foreach from=$nodelist key=k item=v}
	<scene name="{$v["id"]}" title="{$v["title"]}" onstart="" thumburl="{$dataurl}/panos/{$v["url"]}/{$v["thumb"]}" lat="{$v["lat"]}" lng="{$v["lng"]}" heading="{$v["heading"]}" >

		<view hlookat="0" vlookat="0" fovtype="MFOV" fov="120" maxpixelzoom="2.0" fovmin="70" fovmax="140" limitview="auto" />

		<preview url="{$dataurl}/panos/{$v["url"]}/preview.jpg" />

		<image>
			<cube url="{$dataurl}/panos/{$v["url"]}/pano_%s.jpg" />
			<mobile>
				<cube url="{$dataurl}/panos/{$v["url"]}/mobile_%s.jpg" />
			</mobile>
		</image>

		<!-- place your scene hotspots here -->
{foreach from=$v["hotspots"] item=vv}
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
{/foreach}
	</scene>


{/foreach}


{include file="footer.tpl"}
