<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
	<head>
		<style type="text/css">
			pre {
			 white-space: pre-wrap;       /* css-3 */
			 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
			 white-space: -pre-wrap;      /* Opera 4-6 */
			 white-space: -o-pre-wrap;    /* Opera 7 */
			 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 text-align: justify;
 max-width: 600px;/*1024*/
 width: expression((document.body.clientWidth > 1024)? "1024px" : "auto");*/ ) + "px");
 margin: 0 auto;
 background-color: #f0f0f0;
 filter:alpha(opacity=90);
 opacity:0.9;
 padding: 1em 2em;

			}
		</style>
	</head>
	<body>
<?php


	$config = array();
	$config['site_name'] = "TUHAIHE";
	$config['site_url'] = "http://tuhaihe.com/";
	$config['site_author'] = "tuhaihe";
	$config['site_author_email'] = "1132321739qq AT gmail dot com";

	echo("<pre>");
	echo("<span style=\"font-size:200%; font-weight:bold;\">" . $config['site_name'] . "</span>\n");
	echo("<span style=\"font-size:85%;\">Author: " . $config['site_author'] . "</span>\n");
	echo("<span style=\"font-size:85%; font-style:italic\">Connect E-mail: <strong>" . $config['site_author_email'] . "</strong></span>\n\n");
	echo("书宜杂读，业宜精钻");
	echo("\n");
	$dir = "/var/www/blog/posts";
	$posts = array();
	if($handle = opendir($dir))
	{
		while(false !== ($file = readdir($handle)))
		{
			$end_of_file = substr($file, strlen($file) - 5);
			if($end_of_file == ".post")
				array_push($posts, $file);
		}
		array_multisort($posts, SORT_DESC);
		$n = 0;
		foreach($posts as $post_file)
		{
				if($n > 0)
					echo("\n");
				echo("<hr />");
				$post = file_get_contents($dir . "/" . $post_file);
				list($post, $links) = remove_links($post);
				$post = htmlspecialchars($post);
				$post = reinsert_links($post, $links);
				echo($post);
				$n++;
		}
		echo("\n<hr />");
		
		closedir($handle);
	} 
	echo("</pre>");
	
	function remove_links($str)
	{
		$links = array();
		$n = 0;
		while(1==1)
		{
			$start_link = "[link]";
			$end_link = "[/link]";
			$pos_start = @strpos($str, $start_link);
			if($pos_start === FALSE)
				break;
			else
			{
				$n++;
				$pos_end = @strpos($str, $end_link);
				$name_url = substr($str, $pos_start+strlen($start_link), $pos_end - $pos_start - strlen($start_link));
				list($name, $url) = explode(", ", $name_url);
				array_push($links, array($n, $name, $url));
				$str = substr_replace($str, "##" . $n . "##", $pos_start, strlen($start_link) + strlen($name_url) + strlen($end_link));
			}
		}
		return array($str, $links);
	}
	
	function reinsert_links($str, $links)
	{
		$n = 1;
		foreach($links as $n_name_url)
		{
			$url = "<a href=\"" . $n_name_url[2] . "\" target=\"_blank\">" . $n_name_url[1] . "</a>";
			$str = str_replace("##".$n."##", $url, $str);
			$n++;
		}
		return $str;
	}
?>
	</body>
</html>
