<!--
Mapa do Brasil mapeado em CSS ( https://github.com/insign/mapa_Brasil_CSS )
- Arquivos fontes em alta resolução e mapa em SVG via https://commons.wikimedia.org/wiki/File:Brazil_Blank_Map_light.svg
- Arquivos finais em 16 cores e extremamente leve
- Sprite em 16 cores e criado via http://css.spritegen.com
- Ao mudar o tamanho, infelizmente as regras de "margin" das tags ul e li deverão ser reescritas manualmente

Changelog:

	* 23/07/2012 - Arquivos em alta resolução e sprite por Hélio Oliveira <insign@gmail.com>

    * Criado por @rafaelpvale http://www.upalele.com

    * Técnica desenvolvida por Roman Cortes
    http://www.romancortes.com/blog/xhtmlcss-mapmapa/

-->
<?php echo "<!-- Mapa -->"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.2.2' type='text/css' media='all' />

		<title>Mapa do Brasil</title>
		<style type="text/css">
			.active { display:inherit; }
			ul#map {display: block; margin: 0; padding: 0; width: 570px; height: 585px; background-image: url('img/map.png');}
			ul#map li {display: block; padding: 0; position: absolute;}
			li#crs {margin-top: 485px; margin-left: 237px; }
			li#csc {margin-top: 467px; margin-left: 292px;}
			li#cpr {margin-top: 416px; margin-left: 281px;}
			li#csp {margin-top: 375px; margin-left: 303px; z-index:9999; }
			li#cms {margin-top: 336px; margin-left: 229px;}
			li#crj {margin-top: 390px; margin-left: 422px; z-index:9999; }
			li#ces {margin-top: 347px; margin-left: 467px; z-index:9999; }
			li#cmg {margin-top: 292px; margin-left: 333px; z-index:9998; }
			li#cgo {margin-top: 264px; margin-left: 301px; z-index:9999; }
			li#cdf {margin-top: 311px; margin-left: 373px; z-index:9999; }
			li#cba {margin-top: 207px; margin-left: 397px;}
			li#cmt {margin-top: 189px; margin-left: 180px;}
			li#cro {margin-top: 199px; margin-left: 104px; z-index:9998; }
			li#cac {margin-top: 185px; margin-left: 0px;}
			li#cam {margin-top: 46px; margin-left: 3px;}
			li#crr {margin-top: 0; margin-left: 133px;}
			li#cpa {margin-top: 40px; margin-left: 219px;}
			li#cap {margin-top: 13px; margin-left: 278px;}
			li#cma {margin-top: 94px; margin-left: 366px; z-index:9999;}
			li#cto {margin-top: 156px; margin-left: 338px;}

			li#cse {margin-top: 221px; margin-left: 519px; z-index:9998;}
			li#cal {margin-top: 211px; margin-left: 518px; z-index:9999;}
			li#cpe {margin-top: 188px; margin-left: 473px;}
			li#cpb {margin-top: 169px; margin-left: 511px; z-index:9999;}
			li#crn {margin-top: 151px; margin-left: 514px;}
			li#cce {margin-top: 121px; margin-left: 473px;}
			li#cpi {margin-top: 120px; margin-left: 406px; z-index:9997;}

			ul#map li a {display: block; text-decoration: none; position: absolute;}
			a#rs {width: 116px; height: 101px; }
			a#sc {width: 81px; height: 53px; }
			a#pr {width: 97px; height: 64px; }
			a#sp {width: 131px; height: 84px; }
			a#ms {width: 106px; height: 104px; }
			a#rj {width: 58px; height: 40px; }
			a#es {width: 33px; height: 51px; }
			a#mg {width: 163px; height: 131px; }
			a#go {width: 108px; height: 108px; }
			a#df {width: 16px; height: 9px; }
			a#ba {width: 136px; height: 148px; }
			a#mt {width: 166px; height: 161px; }
			a#ro {width: 104px; height: 87px; }
			a#ac {width: 108px; height: 62px; }
			a#am {width: 258px; height: 181px;}
			a#rr {width: 87px; height: 103px; }
			a#pa {width: 188px; height: 187px; }
			a#ap {width: 73px; height: 85px; }
			a#ma {width: 102px; height: 139px; }
			a#to {width: 74px; height: 125px; }
			a#se {width: 28px; height: 32px; }
			a#al {width: 46px; height: 27px; }
			a#pe {width: 97px; height: 34px; }
			a#pb {width: 59px; height: 35px; }
			a#rn {width: 53px; height: 33px; }
			a#ce {width: 61px; height: 76px; }
			a#pi {width: 83px; height: 124px; }

			/* Código pronto via http://css.spritegen.com (com alterações nos seletores) */

			a#pa:hover, a#pa:active, a#am:hover, a#am:active, a#mt:hover, a#mt:active, a#ba:hover, a#ba:active, a#ma:hover, a#ma:active,
			a#mg:hover, a#mg:active, a#to:hover, a#to:active, a#pi:hover, a#pi:active, a#go:hover, a#go:active, a#ms:hover, a#ms:active,
			a#rr:hover, a#rr:active, a#rs:hover, a#rs:active, a#ro:hover, a#ro:active, a#ap:hover, a#ap:active, a#sp:hover, a#sp:active,
			a#ce:hover, a#ce:active, a#pr:hover, a#pr:active, a#ac:hover, a#ac:active, a#sc:hover, a#sc:active, a#es:hover, a#es:active,
			a#rj:hover, a#rj:active, a#pb:hover, a#pb:active, a#pe:hover, a#pe:active, a#rn:hover, a#rn:active, a#se:hover, a#se:active,
			a#al:hover, a#al:active, a#df:hover, a#df:active
			{ display: block; background: url('img/sprite.png') no-repeat; }

			a#pa:hover, a#pa:active { background-position: -10px -0px; width: 188px; height: 187px; }
			a#am:hover, a#am:active { background-position: -10px -197px; width: 258px; height: 181px; }
			a#mt:hover, a#mt:active { background-position: -10px -388px; width: 166px; height: 161px; }
			a#ba:hover, a#ba:active { background-position: -10px -559px; width: 136px; height: 148px; }
			a#ma:hover, a#ma:active { background-position: -156px -559px; width: 102px; height: 139px; }
			a#mg:hover, a#mg:active { background-position: -10px -717px; width: 163px; height: 131px; }
			a#to:hover, a#to:active { background-position: -183px -717px; width: 74px; height: 125px; }
			a#pi:hover, a#pi:active { background-position: -10px -858px; width: 83px; height: 124px; }
			a#go:hover, a#go:active { background-position: -103px -858px; width: 108px; height: 108px; }
			a#ms:hover, a#ms:active { background-position: -103px -976px; width: 106px; height: 104px; }
			a#rr:hover, a#rr:active { background-position: -10px -992px; width: 87px; height: 103px; }
			a#rs:hover, a#rs:active { background-position: -107px -1090px; width: 116px; height: 101px; }
			a#ro:hover, a#ro:active { background-position: -10px -1201px; width: 104px; height: 87px; }
			a#ap:hover, a#ap:active { background-position: -10px -1105px; width: 73px; height: 85px; }
			a#sp:hover, a#sp:active { background-position: -124px -1201px; width: 131px; height: 84px; }
			a#ce:hover, a#ce:active { background-position: -186px -388px; width: 61px; height: 76px; }
			a#pr:hover, a#pr:active { background-position: -124px -1295px; width: 97px; height: 64px; }
			a#ac:hover, a#ac:active { background-position: -10px -1298px; width: 108px; height: 62px; }
			a#sc:hover, a#sc:active { background-position: -128px -1369px; width: 81px; height: 53px; }
			a#es:hover, a#es:active { background-position: -208px -0px; width: 33px; height: 51px; }
			a#rj:hover, a#rj:active { background-position: -186px -474px; width: 58px; height: 40px; }
			a#pb:hover, a#pb:active { background-position: -10px -1370px; width: 59px; height: 35px; }
			a#pe:hover, a#pe:active { background-position: -10px -1415px; width: 97px; height: 34px; }
			a#rn:hover, a#rn:active { background-position: -186px -524px; width: 53px; height: 33px; }
			a#se:hover, a#se:active { background-position: -208px -61px; width: 28px; height: 32px; }
			a#al:hover, a#al:active { background-position: -208px -103px; width: 46px; height: 27px; }
			a#df:hover, a#df:active { background-position: -208px -140px; width: 16px; height: 9px; }

			/* Fim sprite */

			ul#map li a img {border: 0; width: inherit; height: inherit;}

			.titulomap {
			  padding: 0;
			  margin: 0;
			  color: #31353d;
			  text-transform: uppercase;
			  overflow: visible;
			  font: 300 24px/1.2em 'Open Sans', sans-serif;
			  position: relative;
			  width: 100%;
			  -webkit-box-sizing: border-box;
			  -moz-box-sizing: border-box;
			  box-sizing: border-box;
			}
		</style>


		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">


		<script type="text/javascript">
		function MostraEstado(estado) {
			alert(estado);
		}
		</script>
	</head>

	<body>
		<div style="float: left; width: 580px; margin-left: 30px;">
			<ul id="map">
				<li id="crs" estado="rs"><a onclick="MostraEstado('rs');" id="rs" title="RS"><img src="img/null.gif" alt="RS" /></a></li>
				<li id="csc" estado="sc"><a onclick="MostraEstado('sc');" id="sc" title="SC"><img src="img/null.gif" alt="SC" /></a></li>
				<li id="cpr" estado="pr"><a onclick="MostraEstado('pr');" id="pr" title="PR"><img src="img/null.gif" alt="PR" /></a></li>
				<li id="csp" estado="sp"><a onclick="MostraEstado('sp');" id="sp" title="SP"><img src="img/null.gif" alt="SP" /></a></li>
				<li id="cms" estado="ms"><a onclick="MostraEstado('ms');" id="ms" title="MS"><img src="img/null.gif" alt="MS" /></a></li>
				<li id="crj" estado="rj"><a onclick="MostraEstado('rj');" id="rj" title="RJ"><img src="img/null.gif" alt="RJ" /></a></li>
				<li id="ces" estado="es"><a onclick="MostraEstado('es');" id="es" title="ES"><img src="img/null.gif" alt="ES" /></a></li>
				<li id="cmg" estado="mg"><a onclick="MostraEstado('mg');" id="mg" title="MG"><img src="img/null.gif" alt="MG" /></a></li>
				<li id="cgo" estado="go"><a onclick="MostraEstado('go');" id="go" title="GO"><img src="img/null.gif" alt="GO" /></a></li>
				<li id="cdf" estado="df"><a onclick="MostraEstado('df');" id="df" title="DF"><img src="img/null.gif" alt="DF" /></a></li>
				<li id="cba" estado="ba"><a onclick="MostraEstado('ba');" id="ba" title="BA"><img src="img/null.gif" alt="BA" /></a></li>
				<li id="cmt" estado="mt"><a onclick="MostraEstado('mt');" id="mt" title="MT"><img src="img/null.gif" alt="MT" /></a></li>
				<li id="cro" estado="ro"><a onclick="MostraEstado('ro');" id="ro" title="RO"><img src="img/null.gif" alt="RO" /></a></li>
				<li id="cac" estado="ac"><a onclick="MostraEstado('ac');" id="ac" title="AC"><img src="img/null.gif" alt="AC" /></a></li>
				<li id="cam" estado="am"><a onclick="MostraEstado('am');" id="am" title="AM"><img src="img/null.gif" alt="AM" /></a></li>
				<li id="crr" estado="rr"><a onclick="MostraEstado('rr');" id="rr" title="RR"><img src="img/null.gif" alt="RR" /></a></li>
				<li id="cpa" estado="pa"><a onclick="MostraEstado('pa');" id="pa" title="PA"><img src="img/null.gif" alt="PA" /></a></li>
				<li id="cap" estado="ap"><a onclick="MostraEstado('ap');" id="ap" title="AP"><img src="img/null.gif" alt="AP" /></a></li>
				<li id="cma" estado="ma"><a onclick="MostraEstado('ma');" id="ma" title="MA"><img src="img/null.gif" alt="MA" /></a></li>
				<li id="cto" estado="to"><a onclick="MostraEstado('to');" id="to" title="TO"><img src="img/null.gif" alt="TO" /></a></li>
				<li id="cse" estado="se"><a onclick="MostraEstado('se');" id="se" title="SE"><img src="img/null.gif" alt="SE" /></a></li>
				<li id="cal" estado="al"><a onclick="MostraEstado('al');" id="al" title="AL"><img src="img/null.gif" alt="AL" /></a></li>
				<li id="cpe" estado="pe"><a onclick="MostraEstado('pe');" id="pe" title="PE"><img src="img/null.gif" alt="PE" /></a></li>
				<li id="cpb" estado="pb"><a onclick="MostraEstado('pb');" id="pb" title="PB"><img src="img/null.gif" alt="PB" /></a></li>
				<li id="crn" estado="rn"><a onclick="MostraEstado('rn');" id="rn" title="RN"><img src="img/null.gif" alt="RN" /></a></li>
				<li id="cce" estado="ce"><a onclick="MostraEstado('ce');" id="ce" title="CE"><img src="img/null.gif" alt="CE" /></a></li>
				<li id="cpi" estado="pi"><a onclick="MostraEstado('pi');" id="pi" title="PI"><img src="img/null.gif" alt="PI" /></a></li>
			</ul>
		</div>

		<div style="float: left; width: 540px; overflow:scroll; background-color: #f4f5f5; margin-left: 30px;">
			<?php 
				include '../../../../wp-config.php';
				// Create connection
				$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
				// Check connection
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
			    }
			?>


			<!-- São Paulo -->
			<div id="estado-sp" class="" style="padding: 30px; overflow: scroll; height: 600px;">
				<h1 class="titulomap" style="width: 100%; margin-bottom: 20px;">São Paulo</h1>

				<!-- BANNER loop -->
				<?php
					$sql = 'SELECT p.id, p.post_title as titulo, pmestado.meta_value as estado, pmlogo.`meta_value` as logo, pmtelefone.`meta_value` as telefone, pmurl.`meta_value` as url, pmendereco.`meta_value` as endereco FROM wp_posts p 
							INNER JOIN wp_postmeta pmestado
							ON p.id = pmestado.`post_id`

							INNER JOIN wp_postmeta pmlogo
							ON p.id = pmlogo.`post_id`

							INNER JOIN wp_postmeta pmtelefone
							ON p.id = pmtelefone.`post_id`

							INNER JOIN wp_postmeta pmurl
							ON p.id = pmurl.`post_id`

							INNER JOIN wp_postmeta pmendereco
							ON p.id = pmendereco.`post_id`


							WHERE p.post_type = \'mapa\' AND p.post_status = \'publish\' 

							AND pmestado.`meta_key` = \'estado\'
							AND pmlogo.`meta_key` = \'logo\'
							AND pmtelefone.`meta_key` = \'telefone\'
							AND pmurl.`meta_key` = \'url\'
							AND pmendereco.`meta_key` = \'endereco\'


							AND pmestado.`meta_value` = \'sp\'
							';
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) { ?>
					    	<div style="padding-top: 15px; margin-bottom: 30px; height: 145px; border-bottom: #AAA dotted 1px;">
								<div style="float: left; width: 100px; height: 100px; background-image: url('/wp-content/themes/theme53386/images/<?php echo $row["logo"]; ?>'); background-size: 100%;">&nbsp;</div>
								<div style="float: left; margin: 0px 10px 10px 10px; width: 350px; font: 14px 'Open Sans', sans-serif; color: #333;"><?php echo $row["titulo"]; ?></div>
								<div style="float: left; margin: 0px 10px 10px 10px; width: 350px; font: 12px 'Open Sans', sans-serif; color: #333;"><?php echo $row["endereco"]; ?></div>
								<div style="float: left; margin: 0px 10px 10px 10px; width: 350px; font: 12px 'Open Sans', sans-serif; color: #333;"><?php echo $row["telefone"]; ?></div>
								<div style="float: left; margin: 0px 10px 10px 10px; width: 350px; font: 12px 'Open Sans', sans-serif; color: #333;"><?php echo $row["url"]; ?></div>
							</div>
					    <?php }
					} else {
					    echo '<div style="font: 14px \'Open Sans\', sans-serif; color: #333;">Nenhum resultado encontrado para este estado!';
					}
				?>
				<!-- FIM - loop -->

			</div>
			<!-- FIM São Paulo -->


			<?php $conn->close(); ?>
		</div>
	</body>
</html>