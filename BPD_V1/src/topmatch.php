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
#   Copyright 2005-2006 by webspell.org                                  #
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
$zeit = time();

// Check if upcoming match is in the past
$abfrage = "SELECT * FROM ".PREFIX."upcoming WHERE date<=$zeit AND type='c' AND inclanwar='0'";
$ergebnis = mysql_query($abfrage);
while($row = mysql_fetch_array($ergebnis))
{
	$upID = $row['upID'];
	$sql="UPDATE ".PREFIX."upcoming SET inclanwar='1' WHERE upID='$upID'";
	$res=mysql_query ($sql);

	$date = $row['date'];
	$squad = $row['squad'];
	$opponent = $row['opponent'];
	$opptag = $row['opptag'];
	$opphp = $row['opphp'];
	$oppcountry = $row['oppcountry'];
	$server = $row['server'];
	$league = $row['league'];
	$leaguehp = $row['leaguehp'];
	$report = $row['warinfo'];
	$game = $row['game'];
	$hltv = $row['hltv'];
	$linkpage = $row['linkpage'];
	$maps = $row['maps'];
	$comments = 2;

	$sql2 = ("INSERT INTO ".PREFIX."clanwars ( date, squad, game, league, leaguehp, opponent, opptag, oppcountry, opphp, maps, hometeam, oppteam, server, hltv, report, comments, linkpage)
                 VALUES( '".$date."', '".$squad."', '".$game."', '".$league."', '".$leaguehp."', '".$opponent."', '".$opptag."', '".$oppcountry."', '".$opphp."', '".$maps."', '', '', '".$server."', '".$hltv."', '".$report."', '$comments', '".$linkpage."' ) ");
	$res1=mysql_query ($sql2);
	
}
?>