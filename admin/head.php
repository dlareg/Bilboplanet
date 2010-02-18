<?php
/******* BEGIN LICENSE BLOCK *****
* BilboPlanet - Un agrégateur de Flux RSS Open Source en PHP.
* BilboPlanet - An Open Source RSS feed aggregator written in PHP
* Copyright (C) 2009 By French Dev Team : Dev BilboPlanet
* Contact : dev@bilboplanet.com
* Website : www.bilboplanet.com
* Tracker : redmine.bilboplanet.com
* Blog : blog.bilboplanet.com
* 
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License as
* published by the Free Software Foundation, either version 3 of the
* License, or (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
***** END LICENSE BLOCK *****/
?>
<?php
# Inclusion des fonctions
require_once(dirname(__FILE__).'/../inc/i18n.php');
require_once(dirname(__FILE__).'/../inc/fonctions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="ROBOTS" content="noindex, nofollow, noarchive" />
	<title><?php echo T_('Administration');?> - <?php echo $planet_title ?></title>
	<link rel="shortcut icon" type="image/png" href="./meta/icons/fire.png" />
	<link rel="stylesheet" type="text/css" href="meta/css/styles.css" media="all" />
	<script type="text/javascript" src="meta/js/mootools-1.2.1-core.js"></script>
	<script type="text/javascript" src="meta/js/mootools-1.2-more.js"></script>
	<script type="text/javascript" src="meta/js/bilboplanet-core.js"></script>
	<script type="text/javascript" src="meta/js/ed.js"></script>
	<script type="text/javascript">
		window.addEvent('domready', function(){
			new BP_Administrator();
			$('BP_Logout').addEvent('click', function(event){
				event.stop();
				window.location.replace('<?php echo $planet_url; ?>');
			});
			$('BP_About').addEvent('click', function(event){
				event.stop();
				var message = '<p>'+
					'<h3><?php echo T_('Bilboplanet was developed by');?></h3>'+
					'<ul>'+
					'<li>Gregoire de Hemptinne (<a href="http://www.theclimber.be" target="_blank">http://www.theclimber.be</a>)</li>'+
					'<li>Thomas Bourcey (<a href="http://www.sckyzo.com" target="_blank">http://www.sckyzo.com</a>)</li>'+
					'</ul>'+
					'</p><br />'+
					'<h3><?php echo T_('BilboPlanet : Useful links');?></h3>'+
					'<p>'+
					'<ul>'+
					'<li><?php echo T_('Official WebSite: ');?><a href="http://www.bilboplanet.com" target="_blank">http://www.bilboplanet.com</a></li>'+
					'<li><?php echo T_('Official Forum: ');?><a href="http://www.bilboplanet.com/forum" target="_blank">http://www.bilboplanet.com/forum</a></li>'+
					'<li><?php echo T_('Official Documentation: ');?><a href="http://www.bilboplanet.com/documentation.php" target="_blank">http://www.bilboplanet.com/documentation.php</a></li>'+
					'</ul>'+
					'</p>'+
					'<br /><hr><br/>'+
					'<span><?php echo T_('BilboPlanet.com - Open Source Feed Agregator - 2009');?></span>';
				$alert(message, '<?php echo T_('About');?>');
			});
		});
	</script>
</head>
<body class="admin">
<div id="BP_head" class="toolbar bgbox bdbox"><div class="grad bdinbox">
	<p class="site_info">
	<span class="ctitle"><a class="tips" title="<?php echo $planet_title; ?>" rel="<?php echo T_('Back on the Bilboplanet');?>" href="../" target="_blank"><?=T_('Back on the Bilboplanet');?></a></span>
	</p>
	<ul id="BP_userbar">
		<li><a id="BP_Logout" href="#" class="button minbutton br3px"><?php echo T_('Logout');?></a></li>
		<li><a id="BP_About" class="button minbutton br3px"><?php echo T_('About');?></a></li>
	</ul>
	<hr class="clear" />
</div></div>

