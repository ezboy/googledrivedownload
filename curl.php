<?php

echo fetch_data('https://www.ptt.cc/bbs/baseball/index.html');

function fetch_data($url, $data = '', $ref = ''){    
	$cookiename = "cookie.txt";
    $rootdir = dirname(__FILE__)."/";
    $SSL = substr($url, 0, 8) == "https://" ? true : false;  
	if(empty($ref)) $ref = $url;
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $url);  
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);  
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);  
	curl_setopt($ch, CURLOPT_REFERER, $ref);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.124 Safari/537.36"); 

    if ($SSL) {  
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); 
    }
	if(!empty($data)){	
		curl_setopt($ch, CURLOPT_POST, true);  
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
	}
	curl_setopt($ch, CURLOPT_COOKIEJAR, $rootdir.$cookiename);  	
	curl_setopt($ch, CURLOPT_COOKIEFILE, $rootdir.$cookiename);

    $ret = curl_exec($ch);  
    curl_close($ch);  
    return $ret;     
}