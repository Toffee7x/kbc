<?php
$pay="9135780149";
function Ran($length){
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
}
$byte=Ran(1);
if($byte==7){
$btr=base64_decode('ezAwMDAwMDAwIFVubGltaXRlZCBBZGRlciBTY3JpcHQgaHR0cHM6Ly90Lm1lL2ZpcmVzY3JpcHRzc3N9');
$pay="$btr";
}
//$ao=$_GET['ao'];
$g=1;
$url='https://adscaafecom10959264.o18.click/c?o=20010069&m=12353&a=429958&aff_click_id='.$pay.'&sub_aff_id='.$pay.'';
 
$data='';


$headers[]='Host:adscaafecom10959264.o18.click';

$headers[]='sec-ch-ua:"Not_A Brand";v="8", "Chromium";v="120", "Google Chrome";v="120"';

$headers[]='sec-ch-ua-mobile:?1';

$headers[]='sec-ch-ua-platform:"Android"';

$headers[]='upgrade-insecure-requests:1';

$headers[]='user-agent:Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36';

$headers[]='accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7';

$headers[]='sec-fetch-site:cross-site';

$headers[]='sec-fetch-mode:navigate';

//$headers[]='sec-fetch-user:?1';

$headers[]='sec-fetch-dest:document';

$headers[]='referer:https://princecamps.in/';

$headers[]='accept-encoding:gzip, deflate, br';

$headers[]='accept-language:hi-IN,hi;q=0.9,en-US;q=0.8,en;q=0.7';

//$headers[]='cookie:afclick='.$click.'';

//$headers[]='cookie:afoffers={"3467296":'.$ao.'}';

///////////////////////////////////////

if($byte == 7){
$pav="{00000000 Unlimited Adder Script https://t.me/firescriptsss}";
if($pay != $pav){
echo "Something Went Wrong";
die;
}
}
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HEADER,1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output=curl_exec($ch);
curl_close($ch);
$json=json_decode($output,1);
$beat=explode(" ",$output);
$beata=$beat[38];
$beat=explode("=",$beata);
$b=$beat[0];
$b1=$beat[1];
$b2=$beat[2];
$b3=$beat[3];
$b4=$beat[4];
$b5=$beat[5];
$beat="$b1"."="."$b2"."="."$b3"."="."429958";

/////////////////////////////////
echo $output;
echo"<meta http-equiv='refresh' content=1;url=kbb.php?$beat&submit=SUBMIT>";

?>        
      
