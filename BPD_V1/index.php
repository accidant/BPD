<?php
/*
##########################################################################
#                                                                        #
#           Version 4       /                        /   /               #
#          -----------__---/__---__------__----__---/---/-               #
#           | /| /  /___) /   ) (_ `   /   ) /___) /   /                 #
#          _|/_|/__(___ _(___/_(__)___/___/_(___ _/___/___               #
#                       Free Content / Management System                 #
#                                   /                                    #
#                                                                        #
#                                                                        #
#   Copyright 2005-2010 by webspell.org                                  #
#                                                                        #
#   visit webSPELL.org, webspell.info to get webSPELL for free           #
#   - Script runs under the GNU GENERAL PUBLIC LICENSE                   #
#   - It's NOT allowed to remove this copyright-tag                      #
#   -- http://www.fsf.org/licensing/licenses/gpl.html                    #
#                                                                        #
#   Code based on WebSPELL Clanpackage (Michael Gruber - webspell.at),   #
#   Far Development by Development Team - webspell.org                   #
#                                                                        #
#   visit webspell.org                                                   #
#                                                                        #
##########################################################################
*/

// important data include
include("_mysql.php");
include("_settings.php");
include("_functions.php");

$_language->read_module('index');
$index_language = $_language->module;
// end important data include
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Clanpage using webSPELL 4 CMS" />
<meta name="author" content="webspell.org" />
<meta name="keywords" content="webspell, webspell4, clan, cms" />
<meta name="copyright" content="Copyright &copy; 2005 - 2009 by webspell.org" />
<meta name="generator" content="webSPELL" />

<title><?php echo PAGETITLE; ?></title>
<link href="_stylesheet.css" rel="stylesheet" type="text/css" />
<link href="css/ecko.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link href="tmp/rss.xml" rel="alternate" type="application/rss+xml" title="<?php echo getinput($myclanname); ?> - RSS Feed" />
<script src="js/bbcode.js" language="jscript" type="text/javascript"></script>
<script type="text/javascript" src="js/2one_navi.js"></script>
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>

<body>
<div class="main_container">
  <div class="login_area">
  	<div style="float: left;"><?php echo $myclanname ?> <span class="login_text">- http://www.2one-Designs.de</span></div>
  	<div style="float: right; width: 63%;">LOGIN <?php include ("login.php") ?></div>
  </div>
  <div class="header">
  	<!--div class="head_advert"><?php include("sc_bannerrotation.php"); ?></div-->
  </div>
  <div class="navi_area">
  	<div id="navi">
  <ul>
		<li class="nav_button"><a href="#" onclick="show_visibility('subnav1');hide_visibility('subnav2','subnav3','subnav4','subnav5')">Newscenter</a></li>
		<li class="nav_button"><a href="#" onclick="show_visibility('subnav2');hide_visibility('subnav1','subnav3','subnav4','subnav5')">Teamsheet</a></li>
		<li class="nav_button"><a href="#" onclick="show_visibility('subnav3');hide_visibility('subnav2','subnav1','subnav4','subnav5')">Community</a></li>
        <li class="nav_button"><a href="#" onclick="show_visibility('subnav4');hide_visibility('subnav2','subnav3','subnav1','subnav5')">Mediapool</a></li>
		<li class="nav_button"><a href="#" onclick="show_visibility('subnav5');hide_visibility('subnav2','subnav3','subnav4','subnav1')">Misc</a></li>
	  </ul>
  </div>
  	<div class="search_box"><?php include("quicksearch.php"); ?></div>
  </div>
  <div class="subnavi">
  		<div id="subnav1"><?php include ("subnavis/subnav_1.php") ?></div>
        <div id="subnav2" style="display: none;"><?php include ("subnavis/subnav_2.php") ?></div>
        <div id="subnav3" style="display: none;"><?php include ("subnavis/subnav_3.php") ?></div>
        <div id="subnav4" style="display: none;"><?php include ("subnavis/subnav_4.php") ?></div>
        <div id="subnav5" style="display: none;"><?php include ("subnavis/subnav_5.php") ?></div>
        <hr class="hr_sub"/>
  	</div>
    <!-- MAIN CONTENT -->
  <div class="content">
  	<div class="content_main">
	<?php include("slider.php"); ?><br /><br /><br />
    <!-- LAST ARTICLES -->
    <div style="float: left;">
    <div class="katg_bg" style="width: 257px;">Last Articles</div>
    <?php include ("sc_articles.php") ?>
<div align="right"><a href="index.php?site=articles" target="_self">more articles</a></div>
    </div>
    <!-- LAST ARTICLES END-->
    <!-- TOP MATCH -->
    <div style="float: left; padding-left: 8px;">
    <div class="katg_bg" style="width: 438px;">Top Match</div>
    <?php include ("sc_topmatch.php") ?>
    </div>
    <!-- TOP MATCH END -->
    <div style="clear: both;"></div>
    <hr class="hr_sub" style="margin-top: 12px;"/>
    <?php
					if(!isset($site)) $site="news";
					$invalide = array('\\','/','/\/',':','.');
					$site = str_replace($invalide,' ',$site);
					if(!file_exists($site.".php")) $site = "news";
					include($site.".php");
					?>
    <div style="clear: both;"></div>
    <hr class="hr_sub" style="margin-bottom: 8px;"/>
    <!--script type="text/javascript" src="http://www.sponsorads.de/script.php?s=167234"></script--><br /><br />
    </div>
    <!-- MAIN CONTENT END -->
    
    <!-- RIGHT CONTENT -->
    <div class="content_right">
    	<div class="katg_bg">Sponsors</div>
		<?php include ("sc_sponsors.php") ?>
        <hr class="right_line" /><br />
        <div class="katg_bg">Last Matches</div>
		<?php include ("sc_results.php") ?>
        <br />
        <div class="katg_bg">Latest Topics</div>
		<?php include ("latesttopics.php") ?>
        <br />
        <div class="katg_bg">Vote</div>
		<?php include ("poll.php") ?>
        <br />
        <center><!--script type="text/javascript" src="http://www.sponsorads.de/script.php?s=172307"></script--></center>
    </div>
    <!-- RIGHT CONTENT END -->
    <div style="clear: both;"></div>
  </div>
  <div class="footer">
  	<div style="float: left; width: 40%; color: #FFF; margin-top: 65px; padding-left: 140px;"><?php
echo 'Copyright &copy; '.date("Y").'';
?> by <? echo $myclanname ?> - <!--a href="http://www.templates4all.de" title="webSPELL Templates" target="_blank">wS!T</a--></div>
<div style="float: left; color: #FFF; font-weight: bold; margin-top: 15px;">
<div align="left">NAVIGATION</div>
  <div style="float: left;">
  <ul type="square">
    <li type="square"><a class="foot_links" href="index.php?site=news">News</a></li>
    <li><a class="foot_links" href="index.php?site=news&action=archive">Archive</a></li>
    <li><a class="foot_links" href="index.php?site=articles">Articles</a></li>
    <li><a class="foot_links" href="index.php?site=squads">Teams</a></li>
    <li><a class="foot_links" href="index.php?site=clanwars">Matches</a></li>
  </ul>
  </div>
  <div style="float: left;">
  <ul type="square">
    <li type="square"><a class="foot_links" href="index.php?site=awards">Awards</a></li>
    <li><a class="foot_links" href="index.php?site=files">Files</a></li>
    <li><a class="foot_links" href="index.php?site=partners">Partners</a></li>
    <li><a class="foot_links" href="index.php?site=sponsors">Sponsors</a></li>
    <li><a class="foot_links" href="index.php?site=contact">Contact</a></li>
  </ul>
  </div>
</div>
    <div style="float: right; width: 16%;">
    <!--a href="http://www.2one-designs.de" target="_blank"><img src="Bilder/footer_2one.png" width="153" height="128" border="0" /></a--></div>
  </div>
</div>
</body>
</html>
