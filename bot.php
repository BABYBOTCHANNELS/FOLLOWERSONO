<?php
error_reporting(0);
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
$HITAM="\033[40m";
$MERAH="\033[41m";
$HIJAU="\033[42m";
$KUNING="\033[43m";
$BIRU="\033[44m";
$UNGU="\033[45m";
$CYAN="\033[46m";
$PUTIH="\033[47m";
$Off="\033[0m";
system ("clear");

function vpn(){
error_reporting(0);
  $vpn = array(
    "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
    "Accept-Language: en-US,en;q=0.9",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Host: google.com",
    "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36"
  );

$url = curl_init();
curl_setopt($url, CURLOPT_URL, "https://google.com");
curl_setopt($url, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($url, CURLOPT_HTTPHEADER, $vpn);
curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($url, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($url, CURLOPT_SSL_VERIFYHOST, 1);
$result = curl_exec($url);

$json = json_decode($result, true);

$vp = array(
"user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36",
);

if($result ==true){

}else{
global $red;

echo $red."connection error!\n";
die();
}

}

function fetch_value($str,$find_start) {
        $start = @strpos($str,$find_start);
        if ($start === false) {
                return "";
        }
        $length = strlen($find_start);
        $end = strpos(substr($str,$start +$length));
        return trim(substr($str,$start +$length));
}

function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 7.1.2; Neffos Y5s) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

error_reporting(0);


include "cfg.php";

//banner


function timer($tmr)
    {
        $timr = time() + $tmr;
        while (true):
            echo "\r                       \r";
            $res = $timr - time();
            if ($res < 1)
            {
                break;
           }                                                                                        echo $putih2."├─[".$yellow2."!".$putih2."]".$green2." Wait \033[1;37m" . date('H:i:s', $res);
            sleep(1);
        endwhile;
    }

function eco($str){
foreach(str_split($str) as $ne){
echo $ne;
usleep(20000);
}
echo "\n";
}


function ex($awal,$akhir,$inti,$res){
$a=explode($awal,$res);
$b=explode($akhir,$a[$inti]);

return $b[0];
}


$ua = array(
"Host: fastfollowers.online",
"content-type: application/x-www-form-urlencoded; charset=utf-8",
"apikey: ".$apikey,
);
$data2 = "i_id=".$i_id."&dID=".$dID;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://fastfollowers.online/easyf/new_get_user_1900.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r= curl_exec($ch);
$r = json_decode($r);
$lol = $r->user->username;
$wow = $r->user->credit;
echo"
███╗   ██╗██╗   ██╗██████╗ ██╗  ██╗ █████╗ ██████╗ ██╗
████╗  ██║██║   ██║██╔══██╗██║  ██║██╔══██╗██╔══██╗██║
██╔██╗ ██║██║   ██║██████╔╝███████║███████║██║  ██║██║
██║╚██╗██║██║   ██║██╔══██╗██╔══██║██╔══██║██║  ██║██║
██║ ╚████║╚██████╔╝██║  ██║██║  ██║██║  ██║██████╔╝██║
╚═╝  ╚═══╝ ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝╚═════╝ ╚═╝\n";                                                     
sleep(1);
echo($putih2."╭─[".$yellow2."•".$putih2."]──────────────────────────────────────────\n");
echo($putih2."├─[".$yellow2."!".$putih2."] ".$green."Pilih Salah Satu\n");
echo($putih2."├─[".$yellow2."!".$putih2."] ".$yellow2."1 ".$red."[".$green."Run Script".$red."]\n");
echo($putih2."├─[".$yellow2."!".$putih2."] ".$yellow2."2 ".$red."[".$green."Keluar".$red."]\n");
echo($putih2."├─[".$yellow2."•".$putih2."]──────────────────────────────────────────\n");
echo($putih2."├─[".$yellow2."!".$putih2."] ".$green."••> ".$yellow2."");
$menu=trim(fgets(STDIN));
if($menu=="1"){

system("clear");

//banner
echo"
███╗   ██╗██╗   ██╗██████╗ ██╗  ██╗ █████╗ ██████╗ ██╗
████╗  ██║██║   ██║██╔══██╗██║  ██║██╔══██╗██╔══██╗██║
██╔██╗ ██║██║   ██║██████╔╝███████║███████║██║  ██║██║
██║╚██╗██║██║   ██║██╔══██╗██╔══██║██╔══██║██║  ██║██║
██║ ╚████║╚██████╔╝██║  ██║██║  ██║██║  ██║██████╔╝██║
╚═╝  ╚═══╝ ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝╚═════╝ ╚═╝\n";        

eco($putih2."╭─[".$yellow2."•".$putih2."]──────────────────────────────────────────");
eco($putih2."├─[".$yellow2."!".$putih2."] ".$green."Username: ".$putih.$lol);
eco($putih2."├─[".$yellow2."!".$putih2."] ".$green."Balance : ".$putih.$wow);
eco($putih2."├─[".$yellow2."•".$putih2."]──────────────────────────────────────────");

while(true){
$data2 = "i_id=".$i_id."&dID=".$dID;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://fastfollowers.online/easyf/new_get_like_campaigns_1900.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r= curl_exec($ch);
$r = json_decode($r);

$post_id = $r->campaign[0]->postId;
$campaign_id = $r->campaign[0]->campaignId;

$data = "i_id=".$i_id."&campaignId=".$campaign_id."&postId=".$post_id."&dID=".$dID;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://fastfollowers.online/easyf/new_update_like_credit_1900.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);

$ua = array(
"Host: fastfollowers.online",
"content-type: application/x-www-form-urlencoded; charset=utf-8",
"apikey: ".$apikey,
);
$data2 = "i_id=".$i_id."&dID=".$dID;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://fastfollowers.online/easyf/new_get_user_1900.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r= curl_exec($ch);
$r = json_decode($r);
$lol = $r->user->username;
$wow = $r->user->credit;

echo $putih2."├─[".$red2."✓".$putih2."] ".$green."Sukses mendapatkan ".$putih."30 ".$green."Poin\n";
echo $putih2."├─[".$yellow2."!".$putih2."] ".$green."Update Balance: ".$putih.$wow."\n";
echo $putih2."├─[".$yellow2."•".$putih2."]────────────";
echo $putih2."──────────────";
echo $putih2."────────────────\n";


for ($time=180; $time>0; $time--){
echo "\r                                \r";
echo $putih2."├─[".$yellow2."•".$putih2."]".$green." Wait ".$putih."$time".$green." sec";
sleep(1);
}
echo "\r                                \r";
$data4 = "i_id=".$i_id."&dID=".$dID;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://fastfollowers.online/easyf/new_get_random_follow_campaign_1900.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data4);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r= curl_exec($ch);
$r = json_decode($r);

$post_id = $r->campaign[0]->postId;
$campaign_id = $r->campaign[0]->campaignId;

$data5 = "i_id=".$i_id."&campaignId=".$campaign_id."&postId=".$post_id."&dID=".$dID;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://fastfollowers.online/easyf/new_update_follow_credit_1900.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data5);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);

$ua = array(
"Host: fastfollowers.online",
"content-type: application/x-www-form-urlencoded; charset=utf-8",
"apikey: ".$apikey,
);
$data2 = "i_id=".$i_id."&dID=".$dID;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://fastfollowers.online/easyf/new_get_user_1900.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r= curl_exec($ch);
$r = json_decode($r);
$lol = $r->user->username;
$wow = $r->user->credit;

echo $putih2."├─[".$red2."✓".$putih2."] ".$green."Sukses mendapatkan ".$putih."50 ".$green."Poin\n";
echo $putih2."├─[".$yellow2."!".$putih2."] ".$green."Update Balance: ".$putih.$wow."\n";
echo $putih2."├─[".$yellow2."•".$putih2."]────────────";
echo $putih2."──────────────";
echo $putih2."────────────────\n";


for ($time=181; $time>0; $time--){
echo "\r                                \r";
echo $putih2."├─[".$yellow2."•".$putih2."]".$green." Wait ".$putih."$time".$green." sec";
sleep(1);
}
echo "\r                                \r";
}
}else{
}
?>