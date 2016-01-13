<?php
			$link = mysql_connect("localhost", "user" , "pass");
			if(!$link){
					print "&newsbody=" . "Connection error";
				}

			$db = mysql_select_db("laborec");
			if(!$db){
					print "&newsbody=" . "DB selection error";
				}


			$sql = "SELECT * FROM news ORDER BY newsId DESC";
			$result = mysql_query($sql);
				if(!$result){
					print "&newsbody=" . "Query error";
					mysql_close($link);
				}else{
					$newsText = "";
					while ($row = mysql_fetch_array($result)){
						$newsText .= "<b>" . $row["title"] . "</b>";
						$newsText .= "<br><br>";
						$newsText .= $row["body"];
						$newsText .= "<br>";
						$newsText .= "<u><a href=\"" . $row["link"] . "\">" . $row["link"] . "</a></u>";
						$newsText .= "<br><br>posted by <b>";
						$newsText .= $row["author"];
						$newsText .= "</b> on ";
						$newsText .= $row["date"];
						$newsText .= "<br><br><br><br>";
					}
					print "&newsbody=" . $newsText;
					mysql_close($link);
				}




