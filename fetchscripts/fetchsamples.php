<?php
			$link = mysql_connect("localhost", "user" , "pass");
			if(!$link){
					print "&samplesbody=" . "Connection error";
				}

			$db = mysql_select_db("laborec");
			if(!$db){
					print "&samplesbody=" . "DB selection error";
				}


			$sql = "SELECT * FROM samples ORDER BY sampleId DESC";
			$result = mysql_query($sql);
				if(!$result){
					print "&samplesbody=" . "Query error";
					mysql_close($link);
				}else{
					$samplesText = "On this page you can find zipped packages of samples. We invite you to download them so its easier to make remixes of tracks produced by Labo-artists.<br><br>";
					while ($row = mysql_fetch_array($result)){
						$samplesText .= $row["title"] . " --- ";
						$samplesText .= "[ <u><a href=\"samples/" . $row["file"] . "\">" . "download" . "</a></u> ]<br>";
						$samplesText .= "<br>";
					}
					print "&samplesbody=" . $samplesText;
					mysql_close($link);
				}




