<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('khanx');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=01&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);

$name = json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$exp_nam = explode(' ',$stat[data][$i-1][from][name]);
$nama = $gender.' '.$exp_nam[0];
$tags = explode(' ',$stat[data][$i-1][from][id]);
$tagged_name = ' @['.$tags[0].':1] ';
$kata= array(
'cinta.php',
'motivasi.php',
'motto.php',
'bijak.php',
);

$jam = array(
'01',
'02',
'03',
'04',
'05',
'06',
'07',
'08',
'09',
'10',
'11',
'12',
'13',
'14',
'15',
'16',
'17',
'18',
'19',
'20',
'21',
'22',
'23',
'24',
'00',
);
 
$tas=array('👈😍👉','👈💖👉','👈😺👉','','👈💝👉','👈💛👉','👈💙👉','👈💜👉','👈💚👉','👈👀👉','👈😂👉','👈💘👉','👈💖👉','👈🍸👉','👈😔👉','👈😒👉','👈😲👉','👈😷👉','👈😼👉','👈❤👉','👈💔👉','👈💗👉','👈💓👉','👈💘👉','👈🎉👉','👈💑👉','👈👀👉','👈💃👉','👈💀👉','👈⚡👉','👈📣👉','👈💐👉','👈🍁👉','👈☔👉','👈⛄👉' ,);
$zrilta= $tas[rand(0,count($tas) - 1)];

$tas=array('👈🐺👉','👈👄👉','👈🐒👉','👈🎍👉','👈🎁👉','👈💛👉','👈👀👉','👈🐠👉','👈💙👉','👈🍁👉','👈☀👉','👈🐬👉','👈🌾👉','👈🎄👉','👈📀👉','👈🍃👉','👈💾👉','👈📺👉','👈📻👉','👈🔈👉','👈🎶👉','👈🎵👉','👈🎺👉','👈🎷👉','👈🀄👉','👈🎾👉','👈⚽👉','👈🏀👉','👈🏈👉' ,);
$hamza= $tas[rand(0,count($tas) - 1)];
$tas=array( '😍','💖','😺','😋','💝','💛','💙','💜','💚','👀','😂','💘','💖','🍸','😔','😒','😲','😷','😼','❤','💔','💗','💓','💘','🌹','☀','💐','⚡','🍁','🌙','☔','🎁','🎉','🎈','💝','📣','🎭','🎭','🎭','📺','📞','📱','💩','🌟','👮','🌾','⛄','🍎','🍉','🍓','🍺','🎶','💽','📀','🍅','🍔','🍟','🚲','🐠','🐒','🐟','🌹' ,);
$hamzaemo = $tas[rand(0,count($tas) - 1)];

$emo=array (
'🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✅','✔','☑','🇵🇰',
);
$emoticon=$emo[rand(0,count($emo)-1)];
$hari=array(1=>
"Monday",
   "Tuesday",
      "Wednesday",
        "Thursday",
      "Friday",
   "Saturday",
"Sunday"
);

$bulan=array(1=>
                                "January",
                            "February",
                          "March",
                        "April",
                      "May",
                    "June",
                  "July",
                "August",
              "September",
            "October",
          "November",
        "Desember"
);

$hr = $hari[gmdate('N',time()+60*60*7)];
$tgl = gmdate('j',time()+60*60*7);
$bln = 
$bln = $bulan[gmdate('n',time()+60*60*7)];
$thn = gmdate('Y',time()+60*60*7);
$jam = str_replace($rpc,$sapa,gmdate('H',time()+60*60*7));
$TimeZone="+05:00";
	$hour=gmdate("H", time() + ($TimeZone * 60 * 60));
	if ($hour > 20) $greetings = "gσσ∂ иιgнт :* ";
	else if ($hour > 17) $greetings = "gσσ∂ єνєиιиg :*";
	elseif ($hour > 11) $greetings = "gσσ∂ αfтєяиσσи :* ";
	elseif ($hour < 12) $greetings = "gσσ∂ мσяиιиg :* "; 
$text = array(
''.$emoticon.' ʜᴀᴍʀᴇ ᴋᴀᴘʀᴇ ᴋʏᴀ ꜱᴏᴄʜ ᴠ ʙʀᴀɴᴅᴇᴅ ʜᴀ '.$emoticon.' 

🎵... '.$zrilta.' Ｃｈａｕｄｈｒｙ ｂｏｔｔｅｒｘ '.$hamza.' ...🎵

🎶... fb-top,tk ...🎶 🎵... ᴏᴡɴᴇʀ : @[100021443844068:Akbar] ...🎵', 
'🎵... '.$emoticon.' ʜᴀᴍᴀʀᴇ sᴛᴀᴛᴜs ᴋᴏ ᴊᴀɴɴᴇ ᴋ ʟʏᴇ ʙᴇ sᴛᴀᴛᴜs ᴄʜᴀʜʏᴇ '.$emoticon.' ...🎵 

🎵... '.$zrilta.' Ｃｈａｕｄｈｒｙ ｂｏｔｔｅｒｘ '.$hamza.' ...🎵

🎶... fb-top,tk ...🎶 🎵... ᴏᴡɴᴇʀ : @[100021443844068:Moeez] ...🎵', 
);

$comments = $text[rand(0,count($text)-1)];

$site = ''.$emoticon.' CHAUDHRYS BOTTER '.$emoticon.'';

$return = ' '.$comments.' 
'.$site.' ';

$react = array(
'',
'',
'',
);
$stickers= array('893308157455556', '399315893918650', '399316793918560', '427321144292505', '427321267625826', '344395972623284', '1758297314385291', '1747081465603105', '553453204782021', '387545514704666', '872067619521749',);
$mess=$stickers[rand(0,count($stickers)-1)];
$reaction = $react[rand(0,count($react)-1)];

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($comments).'&attachment_id='.$mess.'&access_token='.$token.'&method=POST');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/reactions?type=LOVE&method=POST&access_token='.$token.'');
echo '<center><hr>Done To => '.$stat[data][$i-1][from][name].' </hr></center>';
}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>