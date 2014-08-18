<?php
	function getUrl(){
		$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
		return ($url);
	}
	function sqlReplace($str){
	   $strResult = $str;
	   if(!get_magic_quotes_gpc()){
		 $strResult = addslashes($strResult);
	   }
	   return $strResult;
	}
	function mbStrreplace($content,$to_encoding="UTF-8",$from_encoding="UTF-8") {  
		$content=mb_convert_encoding($content,$to_encoding,$from_encoding);  
		$str=mb_convert_encoding("　",$to_encoding,$from_encoding);  
		$content=mb_eregi_replace($str," ",$content);  
		$content=mb_convert_encoding($content,$from_encoding,$to_encoding);  
		$content=trim($content);  
		return $content;  
		} 
	function HTMLEncode($str){
		if (!empty($str)){
			$str=str_replace("&","&amp;",$str);
			$str=str_replace(">","&gt;",$str);
			$str=str_replace("<","&lt;",$str);
			$str=str_replace(CHR(32),"&nbsp;",$str);
			$str=str_replace(CHR(9),"&nbsp;&nbsp;&nbsp;&nbsp;",$str);
			$str=str_replace(CHR(9),"&#160;&#160;&#160;&#160;",$str);
			$str=str_replace(CHR(34),"&quot;",$str);
			$str=str_replace(CHR(39),"&#39;",$str);
			$str=str_replace(CHR(13),"",$str);
			$str=str_replace(CHR(10),"<br/>",$str);
		}
		return $str;
	}
	function HTMLDecode($str){
		if (!empty($str)){
			$str=str_replace("&amp;","&",$str);
			$str=str_replace("&gt;",">",$str);
			$str=str_replace("&lt;","<",$str);
			$str=str_replace("&nbsp;",CHR(32),$str);
			$str=str_replace("&nbsp;&nbsp;&nbsp;&nbsp;",CHR(9),$str);
			$str=str_replace("&#160;&#160;&#160;&#160;",CHR(9),$str);
			$str=str_replace("&quot;",CHR(34),$str);
			$str=str_replace("&#39;",CHR(39),$str);
			$str=str_replace("",CHR(13),$str);
			$str=str_replace("<br/>",CHR(10),$str);
			$str=str_replace("<br>",CHR(10),$str);
		}
		return $str;
	}
	function DateDiff($part, $begin, $end){
		$diff = strtotime($end) - strtotime($begin);
		switch($part){
			case "y": $retval = bcdiv($diff, (60 * 60 * 24 * 365)); break;
			case "m": $retval = bcdiv($diff, (60 * 60 * 24 * 30)); break;
			case "w": $retval = bcdiv($diff, (60 * 60 * 24 * 7)); break;
			case "d": $retval = bcdiv($diff, (60 * 60 * 24)); break;
			case "h": $retval = bcdiv($diff, (60 * 60)); break;
			case "n": $retval = bcdiv($diff, 60); break;
			case "s": $retval = $diff; break;
		}
		return $retval;
	}
	?>
