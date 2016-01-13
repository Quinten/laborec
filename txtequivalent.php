<?php
			$link = mysql_connect("localhost", "user" , "pass");
			if(!$link){
					print "Connection error";
				}
				
			$db = mysql_select_db("laborec");
			if(!$db){
					print "DB selection error";
				}	
			
			
			$sql = "SELECT * FROM news ORDER BY newsId DESC";
			$result = mysql_query($sql);
				if(!$result){
					print "Query error";
					mysql_close($link);
				}else{
					$newsText = "<h3>News</h3><br><br>";
					while ($row = mysql_fetch_array($result)){
						$newsText .= "<b>" . $row["title"] . "</b>";
						$newsText .= "<br><br>";
						$newsText .= $row["body"];
						$newsText .= "<br>";
						$newsText .= "<a href=\"" . $row["link"] . "\">" . $row["link"] . "</a>";
						$newsText .= "<br><br>posted by <b>";
						$newsText .= $row["author"];
						$newsText .= "</b> on ";
						$newsText .= $row["date"];						
						$newsText .= "<br><br><br><br>";
					}
					print $newsText;
				}
					
			$sql = "SELECT * FROM tracks ORDER BY trackId DESC";
			$result = mysql_query($sql);
				if(!$result){
					print "Query error";
					mysql_close($link);
				}else{
					$tracksText = "<h3>Tracks</h3><br><br>";
					while ($row = mysql_fetch_array($result)){
						$tracksText .= "\"" . $row["title"] . "\" by " . $row["artist"] . " --- ";
						$tracksText .= "[ <a href=\"tracks/" . $row["file"] . "\" target=\"_blank\">" . "mp3" . "</a> ]<br>";
						$tracksText .= "<br>";
					}
					print $tracksText;
					print "<br><br><br>";
				}
					
			$sql = "SELECT * FROM samples ORDER BY sampleId DESC";
			$result = mysql_query($sql);
				if(!$result){
					print "Query error";
					mysql_close($link);
				}else{
					$samplesText = "<h3>Samples</h3><br><br>";
					while ($row = mysql_fetch_array($result)){
						$samplesText .= $row["title"] . " --- ";
						$samplesText .= "[ <a href=\"samples/" . $row["file"] . "\">" . "download" . "</a> ]<br>";
						$samplesText .= "<br>";
					}
					print $samplesText;
					print "<br><br><br>";
				}
					
			$sql = "SELECT * FROM links ORDER BY linkId DESC";
			$result = mysql_query($sql);
				if(!$result){
					print "Query error";
					mysql_close($link);
				}else{
					$linksText = "<h3>Links</h3><br><br>";
					while ($row = mysql_fetch_array($result)){
						$linksText .= "<a href=\"" . $row["link"] . "\">" . $row["link"] . "</a><br>";
						$linksText .= $row["comment"];
						$linksText .= "<br><br>";
					}
					print $linksText;
					print "<br><br><br>";
					
					mysql_close($link);
					}

