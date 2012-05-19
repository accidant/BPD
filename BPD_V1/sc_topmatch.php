<?php
/*
 ########################################################################
#                                                                        #
#           Version 4       /                        /   /               #
#          -----------__---/__---__------__----__---/---/-               #
#           | /| /  /___) /   ) (_ `   /   ) /___) /   /                 #
#          _|/_|/__(___ _(___/_(__)___/___/_(___ _/___/___               #
#                       Free Content / Management System                 #
#                                   /                                    #
#                                                                        #
#                                                                        #
#   Copyright 2005-2011 by webspell.org                                  #
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
 ########################################################################
*/

$slider = 1; // 0 = slider disable, 1 = slider activ

if (isset($site)) $_language->read_module('sc_topmatch');
$now=time();
$limit = "LIMIT 0,1";
if($slider=="1") {
	$limit = "";
	echo'<script type="text/javascript" src="js/contentslider.js">
		/***********************************************
		* Featured Content Slider- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
		* This notice MUST stay intact for legal use
		* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
		***********************************************/
		
		</script>
		<div id="slider1" class="sliderwrapper">';
}
$ergebnis=safe_query("SELECT * FROM ".PREFIX."topmatch WHERE date>= $now AND displayed='1' ORDER BY date ".$limit);
while($ds=mysql_fetch_array($ergebnis)) {
 $date=date("d.m.Y", $ds[date]);
	$time=date("H:i", $ds['date']);
	
	$matchlink=str_replace("&", "&amp;", str_replace("&amp;", "&", $ds['matchlink']));
	$league=$ds['league'];
	$maps=$ds['maps'];
	$server=$ds['server'];
	if(file_exists('images/games/'.$ds['game'].'.gif')) $game_ico = 'images/games/'.$ds['game'].'.gif';
	$game='<img src="'.$game_ico.'" width="13" height="13" border="0" alt="" />';
	
	$logo1=$ds['logo1'];
	$country1=$ds['country1'];
	$team1=$ds['team1'];
	$url1=$ds['homepage1'];

	$logo2=$ds['logo2'];
	$country2=$ds['country2'];
	$team2=$ds['team2'];
	$url2=$ds['homepage2'];
	
	if($slider=="1") echo'<div class="contentdiv">';
	
	eval ("\$sc_topmatch = \"".gettemplate("sc_topmatch")."\";");
	echo $sc_topmatch;
	
 	if($slider=="1") echo'</div>';
}
if($slider=="1") echo'</div>
		<div id="paginate-slider1" class="pagination" style="margin-left: 12px; margin-top: 5px;">
		<a href="#prev" class="prev">prev</a>&nbsp;<a href="#next" class="next">next</a>
		</div>
		<script type="text/javascript">
		featuredcontentslider.init({
			id: "slider1",  //id of main slider DIV
			contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
			toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
			nextprev: ["Previous", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.
			revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
			enablefade: [true, 0.2],  //[true/false, fadedegree]
			autorotate: [false, 3000],  //[true/false, pausetime]
			onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
				//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
				//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
			}
		})
		</script>';
?>
