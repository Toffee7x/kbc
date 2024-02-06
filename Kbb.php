<?php
$pid=$_GET['pid'];
$sub1=$_GET['sub1'];
$oi=$_GET['offer_id'];
$sub3=$_GET['sub3'];
//$pid=$_GET['pid'];


$url="https://mobavenue.media-412.com/click?pid="."1349"."&offer_id="."$oi"."&sub1="."$sub1"."&sub3="."$sub3";	

//Enter Your Captured Url 👇
 
//Enter Your Captured Data 👇
$data='';


//Enter_All_Headers_One_by_One 👇
$headers[]='Host:mobavenue.go2affise.com';

$headers[]='upgrade-insecure-requests:1';

$headers[]='user-agent:Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36';

$headers[]='accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7';

$headers[]='sec-fetch-site:cross-site';

$headers[]='sec-fetch-mode:navigate';

$headers[]='sec-fetch-dest:document';

$headers[]='sec-ch-ua:"Not_A Brand";v="8", "Chromium";v="120", "Google Chrome";v="120"';

$headers[]='sec-ch-ua-mobile:?1';

$headers[]='sec-ch-ua-platform:"Android"';

$headers[]='accept-encoding:gzip, deflate, br';

$headers[]='accept-language:hi-IN,hi;q=0.9,en-US;q=0.8,en;q=0.7';

//$headers[]='Enter_Fifth_Header';

//$headers[]='Enter_Sixth_Header';

//$headers[]='Enter_Seventh_Header';

//$headers[]='Enter_Eight_Header';

//$headers[]='Content-Length:'.strlen($data).'';

///////////////////////////////////////

//Do Not Change Anything Here 👇
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HEADER,1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output=curl_exec($ch);
$header_size = curl_getinfo($ch,CURLINFO_HEADER_SIZE);
$header = substr($output, 0,$header_size);
$body = substr($output, $header_size);
curl_close($ch);
/////////////////////////////////////
$gf='array('.$body.')';
echo "<center>BYPASSING TASK</center>";
$ac=$output;
$av = explode(" ",$ac);
$ar=$av[14];
$av = explode(";",$ar);
$av=$av[0];
$av = explode("=",$av);
$clic=$av[1];
echo $clic;
echo $abb;
echo"<meta http-equiv='refresh' content=1;url=https://firescriptsss.000.pe/Lbc.php?&email=$clic&submit=SUBMIT#>";
?>
</center>
<div id="formFooter">
        
      
