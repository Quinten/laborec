<?php
			$link = mysql_connect("localhost", "user" , "pass");
			if(!$link){
					print "&tracksbody=" . "Connection error";
				}

			$db = mysql_select_db("laborec");
			if(!$db){
					print "&tracksbody=" . "DB selection error";
				}


			$sql = "SELECT * FROM tracks ORDER BY trackId DESC";
			$result = mysql_query($sql);
				if(!$result){
					print "&tracksbody=" . "Query error";
					mysql_close($link);
				}else{
					$tracksText = "Here you find finished tracks by various Labo-colaborators<br><br>";
					while ($row = mysql_fetch_array($result)){
						$tracksText .= "\"" . $row["title"] . "\" by " . $row["artist"] . " --- ";
						$tracksText .= "[ <u><a href=\"tracks/" . $row["file"] . "\" target=\"_blank\">" . "mp3" . "</a></u> ]<br>";
						$tracksText .= "<br>";
					}
					print "&tracksbody=" . $tracksText;
					mysql_close($link);
				}




