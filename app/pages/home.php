<?php
if(!defined('ROOT')) exit('No direct script access allowed');

$arrCfg=$GLOBALS['arrCfg'];

$host=$_SERVER['HTTP_HOST'];
if(isset($arrCfg[$host])) {
	$arrCfg=array_merge($arrCfg['default'],$arrCfg[$host]);
} else {
	$arrCfg=$arrCfg['default'];
}

$hostName=explode(".",$host);
if(count($hostName)>1) {
	unset($hostName[count($hostName)-1]);
}
$hostName=implode(".",$hostName);


_css(array("style","unsemantic"));
_js(array("jquery","cufon-yui","Copse_400.font","Gabriola_400.font"));
?>
<style type="text/css">cufon{text-indent:0!important;}@media screen,projection{cufon{display:inline!important;display:inline-block!important;position:relative!important;vertical-align:middle!important;font-size:1px!important;line-height:1px!important;}cufon cufontext{display:-moz-inline-box!important;display:inline-block!important;width:0!important;height:0!important;overflow:hidden!important;text-indent:-10000in!important;}cufon canvas{position:relative!important;}}@media print{cufon{padding:0!important;}cufon canvas{display:none!important;}}</style>
<script type="text/javascript">
	Cufon.replace('h1', {fontFamily: 'Copse', hover:true})
	Cufon.replace('p.info', {fontFamily: 'Gabriola', hover:true})
</script>
<div id="shim"></div>
	<div id="content">

<?php if(strlen($arrCfg['logo'])>0) { ?>
<style>
div#content {
	background: url(<?=$arrCfg['logo']?>) no-repeat center top;
	<?=$arrCfg['logo_css']?>
}
</style>
	<h1 class="logo"></h1>
<?php } else { ?>
	<h1 class="logo">
		<span class="one"><cufon class="cufon cufon-canvas" alt="<?=$hostName?>" style="width: 133px; height: 36px;"><canvas width="139" height="39" style="width: 139px; height: 39px; top: -1px; left: -2px;"></canvas><cufontext><?=$hostName?></cufontext></cufon></span><cufon class="cufon cufon-canvas" alt=" " style="width: 4px; height: 16px;"><canvas width="18" height="17" style="width: 18px; height: 17px; top: 0px; left: -1px;"></canvas><cufontext> </cufontext></cufon>
		<span class="two"><cufon class="cufon cufon-canvas" alt="server" style="width: 287px; height: 72px;margin-top:40px;"><canvas width="333" height="77" style="width: 333px; height: 77px; top: -2px; left: -3px;"></canvas><cufontext>server</cufontext></cufon></span>
	</h1>
<?php } ?>
	<p class="info">
		<?php
			$msg=$arrCfg['msg_header'];
			$msg=explode(" ",$msg);
			foreach($msg as $m) {
				echo "<cufon class='cufon cufon-canvas' alt='$m ' style='width: 54px; height: 38px;'>";
				echo "<canvas width='95' height='35' style='width: 95px; height: 35px; top: 1px; left: -6px;'></canvas>";
				echo "<cufontext>$m </cufontext>";
				echo "</cufon>";
			}
			echo "<br/><span>";
			$msg=$arrCfg['msg_body'];
			$msg=explode(" ",$msg);
			foreach($msg as $m) {
				echo "<cufon class='cufon cufon-canvas' alt='$m ' style='width: 54px; height: 38px;'>";
				echo "<canvas width='95' height='35' style='width: 95px; height: 35px; top: 1px; left: -6px;'></canvas>";
				echo "<cufontext>$m </cufontext>";
				echo "</cufon>";
			}
			echo "</span>";
		?>
	</p>
	<p class="info" style='margin-bottom:0px;font-size: 20px;'>
		<span style='text-align:center;'>
			<?=$arrCfg['msg_footer']?>
		</span>
	</p>
	<?php
		if(count($arrCfg['social_links'])>0) {
			echo "<p class='links'>";
			foreach($arrCfg['social_links'] as $a=>$b) {
				if(strlen($b)<=0) continue;
				$t=explode("#",$a);
				if(isset($t[1])) $clz=$t[1];
				else $clz="";
				$t=$t[0];
				echo "<a href='$b' class='$clz'>$t</a>";
			}
			echo "</p>";
		}
	?>
</div>
