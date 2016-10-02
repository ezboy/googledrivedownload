<?php
header("Content-Type:text/html; charset=utf-8");
$id = $_GET['gid'];
$url = 'https://docs.google.com/uc?export=download&id='.$id;
$confirm = '';

$gdata = fetch_data($url);
preg_match('/Set-Cookie: download_warning_.*?=(.*?)\;/is',$gdata,$rs);
$confirm = $rs[1];
$file_path = $url.'&confirm='.$confirm;
$gdata2 = fetch_data($file_path);
preg_match('/<A HREF="(.*?)"/is',$gdata2,$rs2);
$realpath = $rs2[1];
header('location:'.$realpath);
die;
function fetch_data($url){    
  	$rootdir = dirname(__FILE__);
    $SSL = substr($url, 0, 8) == "https://" ? true : false;  
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $url);  
	  curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 0);  
	  curl_setopt($ch, CURLOPT_HEADER, 1);
	  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36"); 
    if ($SSL) {  
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   
        @curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1); 
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
	  curl_setopt($ch, CURLOPT_COOKIEJAR, $rootdir.'gcookie.txt'); 	
	  curl_setopt($ch, CURLOPT_COOKIEFILE, $rootdir.'gcookie.txt'); 
    $ret = curl_exec($ch);  
  
    curl_close($ch);  
    return $ret;     
}
?>
