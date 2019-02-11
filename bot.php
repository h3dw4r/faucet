<?php
$biru="\033[1;34m";$turkis="\033[1;36m";$ijo="\033[92m";$putih="\033[1;37m";
$pink="\033[1;35m";$red="\033[1;31m";$kuning="\033[1;33m";$t="\n";
echo$t;sleep(1);
echo$kuning."        Wlcome Back Para Pencari Receh Indodax".$t;sleep(2);
echo$kuning."          Terimakasih Telah Menggunakan Bot".$t;sleep(2);
echo$turkis."                      H3dw4r".$t;sleep(2);echo$t;sleep(1);
echo$biru."[".$ijo."Bot_h3dw4rd".$biru."]".$turkis." Silahkan Tunggu".$t;sleep(2);
echo$biru."[".$ijo."Bot_h3dw4rd".$biru."]".$turkis." Bot Login  ";                                   sleep(2);echo" •";sleep(1);echo" •";sleep(1);echo" •";sleep(1);echo" •     [ √ ]".$t;sleep(2);
echo$biru."[".$ijo."Bot_h3dw4rd".$biru."]".$turkis." Auto Claim Faucethub Berhasil Dijalankan".$t;   
sleep(2);echo$t;sleep(1);sleep(2);
date_default_timezone_set("Asia/Jakarta");
error_reporting(0);
set_time_limit(0);
ini_set("memory_limit","-1");ini_set("output_buffering",0);
ini_set("request_order","GP");ini_set("variables_order","EGPCS");ini_set("max_execution_time","-1");
echo$biru."[".$ijo."Bot_h3dw4rd".$biru."]".$turkis." Masukkan Url Faucet".$t;
echo$biru."[".$ijo."Bot_h3dw4rd".$biru."]".$turkis."  Url ".$biru.": ".$turkis." ";
$link=trim(fgets(STDIN));
echo$biru."[".$ijo."Bot_h3dw4rd".$biru."]".$turkis."Masukan Nama Currency ".$t;
echo$biru."[".$ijo."Bot_h3dw4rd".$biru."]".$turkis."  Currency  ".$biru." : ".$turkis." ";
$cu=trim(fgets(STDIN));
echo$biru."[".$ijo."Bot_h3dw4rd".$biru."]".$turkis." Masukan Limit Waktu ".$t;
echo$biru."[".$ijo."Bot_h3dw4rd".$biru."]".$turkis."   Waktu  ".$biriu." : ".$turkis." ";
$time=trim(fgets(STDIN));
echo$biru."[".$ijo."Bot_h3dw4rd".$biru."]".$turkis." Masukan Jumlah Untuk Diclaim: ".$t;
echo$biru."[".$ijo."Bot_h3dw4rd".$biru."]".$turkis."  Jumlah  ".$biru." : ".$turkis." ";
$l=trim(fgets(STDIN));
function claim($link){
$ch=curl_init();
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_URL,$link);
$hasil=curl_exec($ch);
curl_close($ch);return$hasil; }
a: for($i=0;$i<$l;$i++){
try {
$get=claim($link);
$one=explode('<div class="alert alert-success">',$get);
$two="";
if (!array_key_exists(1,$one)) {
$one[1]='';
$cur_time=time();
$db_time=$rs[$k]['update_time'];
$diff = abs($cur_time - $db_time);
if($diff>=$time){goto a; }
}else{
$two=explode('</div>',$one[1]);}
echo "\n";
echo$biru."[".$ijo."Bot_h3dw4rd".$biru."] ".$ijo.substr($two[0],0,13).$turkis." Sukses "; }
catch (Exception $e) {throw new Exception("\033[1;31mPlease Wait\n"); }
sleep($time); } ?>

