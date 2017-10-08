<?php
header('Content-Type: text/html; charset=utf-8');
set_time_limit(0);
////////////////////////////////////////////////////////
$username = trim($_GET['u']);
$password = trim($_GET['p']);
if(empty($username) || empty($password)) die('參數錯誤');
if(is_file("ley.txt")) unlink("ley.txt");
$ley_login_url_token = 'https://www.leyifan.com/cht/login';
$ley_login_url = 'https://www.leyifan.com/login/login';
$ley_token_data = go_ley($ley_login_url_token,'','');
preg_match('/<input name\=\"\_token\" type\=\"hidden\" value\=\"(.*?)\">/is',$ley_token_data,$rs);
//print_r($rs);
$ley_login_data = "username={$username}&password={$password}&_token=".$rs[1];

    go_ley($ley_login_url,$ley_login_data,'');
    
$ley_url2 = 'http://guide.leyifan.com/cht';
$ley_token_data2 = go_ley($ley_url2,'','');
preg_match('/http\:\/\/www\.leyifan\.com\/cht\/rtzdm\/login\?returnurl\=http%3A%2F%2Fguide\.leyifan\.com%2Fcht&amp\;token\=(.*?)\"/',$ley_token_data2,$rs2);
    
    go_ley('https://www.leyifan.com/cht/rtzdm/login?returnurl=http%3A%2F%2Fguide.leyifan.com%2Fcht&token='.$rs2[1],'','');
    go_ley('http://guide.leyifan.com/user/lyf-validate?returnurl=http%3A%2F%2Fguide.leyifan.com%2Fcht&token='.$rs2[1],'','');
    $XSRF_TOKEN_DATA = go_ley($ley_url2,'','');
    preg_match('/Set\-Cookie\: XSRF\-TOKEN\=(.*?)\;/is',$XSRF_TOKEN_DATA,$rs3);
    $xsrf_token = $rs3[1];
    $xsrf_token = str_replace('%3D','=',$xsrf_token);
    //print_r($rs3);
    echo go_ley('https://guide.leyifan.com/check_in_today','','','',$xsrf_token,'y');


if(is_file("ley.txt")) unlink("ley.txt");

echo "ok";
function go_ley($url, $data = '', $ref = '',$mycookie='',$token='',$posty='n') {    
    $rootdir = dirname(__FILE__);
    $SSL = substr($url, 0, 8) == "https://" ? true : false;  
	  if(empty($ref)) $ref = $url;	
	
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $url);  

	  curl_setopt($ch, CURLOPT_TIMEOUT, 30);  
	  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);  
	  curl_setopt($ch, CURLOPT_REFERER, $ref);
	  curl_setopt($ch, CURLOPT_HEADER, 1);
	  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36"); 
	
    if ($SSL) {  
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); 
    }
    if($posty == 'y') {
        curl_setopt($ch, CURLOPT_POST, true);
	  }
    if(!empty($data)){	
		  curl_setopt($ch, CURLOPT_POST, true);  
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
	  }
  	if(empty($mycookie)){	
		curl_setopt($ch, CURLOPT_COOKIEJAR, $rootdir.'/ley.txt');   	
		curl_setopt($ch, CURLOPT_COOKIEFILE, $rootdir.'/ley.txt');
        if(!empty($token)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept:application/json, text/javascript, */* q=0.01;","X-Requested-With:XMLHttpRequest","X-XSRF-TOKEN:{$token}"));
        }
	      }else{
	      	curl_setopt($ch, CURLOPT_HTTPHEADER, array($mycookie));	
	      }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $ret = curl_exec($ch);  
    $curl_errno = curl_errno($ch);
    curl_close($ch);  
	
    return $ret;     
}

?>
