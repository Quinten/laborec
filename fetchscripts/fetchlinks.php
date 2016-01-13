<?php
			$link = mysql_connect("localhost", "user" , "pass");
			if(!$link){
					print "&linksbody=" . "Connection error";
				}

			$db = mysql_select_db("laborec");
			if(!$db){
					print "&linksbody=" . "DB selection error";
				}


			$sql = "SELECT * FROM links ORDER BY linkId DESC";
			$result = mysql_query($sql);
				if(!$result){
					print "&linksbody=" . "Query error";
					mysql_close($link);
				}else{
					$linksText = "";
					while ($row = mysql_fetch_array($result)){
						$linksText .= "<u><a href=\"" . $row["link"] . "\">" . $row["link"] . "</a></u><br>";
						$linksText .= $row["comment"];
						$linksText .= "<br><br>";
					}
					print "&linksbody=" . $linksText;
					mysql_close($link);
				}




