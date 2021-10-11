<?php

ob_start();
define('API_KEY','1149860197:AAGwH819bmwx_UYeoB0dkG3bB2-yTM99rXk');

$admin = "998849396";

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

function put($fayl,$nima){  
file_put_contents("$fayl","$nima");  
}  
function get($fayl){  
$get = file_get_contents("$fayl");  
return $get;  
}  

          $replyc= json_encode([
           'resize_keyboard'=>false,
                'force_reply' => true,
                'selective' => true
            ]);

$update = json_decode(file_get_contents('php://input'));
$efede = json_decode(file_get_contents('php://input'), true);
$message = $update->message;
//Kanal
$channel = $update->channel_post;
$channel_text = $channel->text;
$channel_mid = $channel->message_id;
$channel_id = $channel->chat->id;
$channel_user = $channel->chat->username;
$chanel_doc = $channel->document;
$a = $export->result;
//tepada kanal
 $usern = $update->callback_query->from->first_name;   $usern = str_replace("[","",$usern); $usern = str_replace("]","",$usern); $usid = $update->callback_query->from->id;

$chanel_mus = $channel->audio;
$chanel_rasm = $channel->photo;
$chanel_st = $channel->sticker;
$chanel_vo = $channel->voice;
$chanel_vid = $channel->video;
$ch_for_id = $update->message->forward_from_chat->id;
$ch_for_user = $update->message->forward_from_chat->username;
$token = uniqid("true");
$ch_for_name = $update->message->forward_from_chat->title;
$forid = $update->message->forward_from->message_id;

//Message
$text = $message->text;
$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;
$file_id=$chanel_doc->file_id;
$mus_id=$chanel_mus->file_id;
$vid_id=$chanel_vid->file_id; $vidi_id=$document->file_id;
$rasm_id=$chanel_rasm->file_id;
$gif_id=$gif->file_id;

//group
$ctitle = $update->message->chat->title;
$cuname = $update->message->chat->username;
$chat_id = $update->message->chat->id;
$cid = $update->message->chat->id;
$turi = $update->message->chat->type;

//call_back
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$calltext = $update->callback_query->message->text;
$callfrid = $update->callback_query->from->id;
$gid = $update->callback_query->message->chat->id;
$callcid = $update->callback_query->message->chat->id;
$calltitle = $update->callback_query->message->chat->title;
$callmid = $update->callback_query->message->message_id;
$calluser = $update->callback_query->message->chat->username;

//user
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$ulogin = $update->message->from->username;
$user_id = $update->message->from->id;
$uid = $update->message->from->id; if($document and $cid == "998849396"){ bot('sendvideo', [ 'chat_id'=>$cid, 'video'=>$vidi_id ]); }

//reply

$id = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repulogin = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;

$chanels=get("chanel/$channel_id.dat");
$any=get("user/$uid.dat");
$inf=get("user/$uid.php");
$toc=get("user/$uid.tok");
$stat=get("yordamchi.php");
$coment=get("come/$any.dat");
$chan3=get("chanels.php");
mkdir("like");

$good = $json->ok;

$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;

  $ex=explode("+",$inf);
  $chann="$ex[0]";
  $channid="$ex[1]";
$kun3 = date('N',strtotime('2 hour'));
      $yil =date('Y', strtotime('2 hour'));
      $kun =date('d-M', strtotime('2 hour'));
      $soat=date('H:i:s', strtotime('2 hour'));
      $hafta="01Dushanba01 02Seshanba02 03Chorshanba03 04Payshanba04 05Juma05 06Shanba06 07Yakshanba07";
      $ex=explode("0$kun3",$hafta);
      $hafta1="$ex[1]";
$vaqt="*$yil-yil $kun $hafta1 $soat*"; $stat = json_encode([
      'inline_keyboard'=>[
        [['text'=>'♻️ Yangilash','callback_data'=>'stat']],
      ]
    ]);
      


if(mb_stripos($data,"orglike")!==false){
$ex=explode("orglike",$data);
$calltok="$ex[1]";
$mylike=get("like/$calltok.dat");
if(mb_stripos($mylike,"$callfrid")!==false){
    $st = str_replace("$callfrid=👍\n","",$mylike);
    $st = str_replace("$callfrid=👎\n","",$st);
    $st = str_replace("[$usern](tg://user?id=$callfrid)\n","",$st);
    put("like/$calltok.dat","$st");
   $value=get("like/$calltok.dat");
$lik=substr_count($value,"👍");
$des=substr_count($value,"👎");
     bot('editMessageReplyMarkup',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'inline_query_id'=>$update->inline_query->id,
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"👍Yoqdi $lik", 'callback_data'=>"orglike$calltok"],['text'=>"👎 Yoqmadi $des",'callback_data'=>"deslike$calltok"]],[['text'=>"Ovoz berganlar",'url'=>"https://telegram.me/Aralashtv2020_Bot?start=$calltok"]],[['text'=>"👫Dostlarga yuborish↗", "url"=>"https://t.me/share/url?url=https://telegram.me/$calluser/$callmid"]],
       ]
     ])
    ]);
    
}else{
$ex = explode("\n-----\n",$mylike); 

$txt3="$callfrid=👎";
$txt="$callfrid=👍";
put("like/$calltok.dat","$ex[0]\n$txt\n-----\n$ex[1]\n-----\n$ex[2]\n[$usern](tg://user?id=$callfrid)\n-----\n$ex[3]");
$value=get("like/$calltok.dat");
$lik=substr_count($value,"👍");
$des=substr_count($value,"👎");
     bot('editMessageReplyMarkup',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'inline_query_id'=>$update->inline_query->id,
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"👍Yoqdi $lik", 'callback_data'=>"orglike$calltok"],['text'=>"👎 Yoqmadi $des",'callback_data'=>"deslike$calltok"]],[['text'=>"Ovoz berganlar",'url'=>"https://telegram.me/Aralashtv2020_Bot?start=$calltok"]],[['text'=>"👫Dostlarga yuborish↗", "url"=>"https://t.me/share/url?url=https://telegram.me/$calluser/$callmid"]],
       ]
     ])
    ]);
}
}
if($channel){
$baza = get("channel.dat");
    
  if(mb_stripos($baza, $channel_user) !== false){ 
  }else{
$baza=get("channel.dat");
put("channel.dat","$baza\n@$channel_user");
  } 
}  if($data == "stat"){ $baza = get("azo.dat");  $obsh = substr_count($baza,"\n");   $gruppa = substr_count($baza,"-"); $kanal1 = get("channel.dat"); $kanals = substr_count($kanal1,"\n");   $lichka = $obsh - $gruppa; $obsh = $obsh + $kanals;  bot('editMessageText',[ 'chat_id'=>$callcid, 'message_id'=>$callmid, 'text'=>"*📊Statistika* \n👤Azolar: $lichka \n👥Guruhlar: $gruppa 


\n🔔Kanallar: $kanals \n🔹Hammasi bolib: $obsh\n\n".date("Y-m-d H:i:s", strtotime('2 hour'))."\n\n©2020-".date("Y"), 'parse_mode'=>"markdown", 'reply_markup'=>$stat ]); }

if(mb_stripos($data,"deslike")!==false){
$ex=explode("deslike",$data);
$calltok="$ex[1]";
$mylike=get("like/$calltok.dat");
if(mb_stripos($mylike,"$callfrid")!==false){
    
    
    
 $st = str_replace("$callfrid=👎\n","",$mylike);
  $st = str_replace("$callfrid=👍\n","",$st);
    $st = str_replace("[$usern](tg://user?id=$callfrid)","",$st);
    put("like/$calltok.dat","$st");
   $value=get("like/$calltok.dat");
$lik=substr_count($value,"👍");
$des=substr_count($value,"👎");
     bot('editMessageReplyMarkup',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'inline_query_id'=>$update->inline_query->id,
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"👍Yoqdi $lik", 'callback_data'=>"orglike$calltok"],['text'=>"👎 Yoqmadi $des",'callback_data'=>"deslike$calltok"]],[['text'=>"Ovoz berganlar",'url'=>"https://telegram.me/Aralashtv2020_Bot?start=$calltok"]],[['text'=>"👫Dostlarga yuborish↗", "url"=>"https://t.me/share/url?url=https://telegram.me/$calluser/$callmid"]],
       ]
     ])
    ]);
    
    
    
    
}else{
$txt="$callfrid=👍";
$txt3="$callfrid=👎";
$ex = explode("\n-----\n",$mylike);
put("like/$calltok.dat","$ex[0]\n-----\n$ex[1]\n$txt3\n-----\n$ex[2]\n-----\n$ex[3]\n[$usern](tg://user?id=$callfrid)");
$value=get("like/$calltok.dat");
$lik=substr_count($value,"👍");
$des=substr_count($value,"👎");
     bot('editMessageReplyMarkup',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'inline_query_id'=>$update->inline_query->id,
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"👍Yoqdi $lik", 'callback_data'=>"orglike$calltok"],['text'=>"👎 Yoqmadi $des",'callback_data'=>"deslike$calltok"]],[['text'=>"Ovoz berganlar",'url'=>"https://telegram.me/Aralashtv2020_Bot?start=$calltok"]],[['text'=>"👫Dostlarga yuborish↗", "url"=>"https://t.me/share/url?url=https://telegram.me/$calluser/$callmid"]],
       ]
     ])
    ]);
}   
}




 
if(mb_stripos($text,"/start")!==false and $text !== "/start"){
   $ex=explode("/start ",$text);
   $token="$ex[1]";
$tok = get("like/$token.dat");
$exi = explode("\n-----\n",$tok);
$ovoz = "Yoqdi tugmasini bosganlar: $exi[2]\n\nYoqmadi tugmasini bosganlar rasmiy kanal @Nurullayev_Nurbek:\n$exi[3]";
    bot('sendmessage',[
        'chat_id'=>$chat_id,
'text'=>$ovoz,
        'parse_mode'=>'markdown',
    ]);
}
if($message){

$baza = get("azo.dat");
    
  if(mb_stripos($baza, $cid) !== false){ 
  }else{
$baza=get("azo.dat");
    put("azo.dat","$baza\n$cid");
  }
}
if($text == "/stat"){
    $baza = get("azo.dat");
$obsh = substr_count($baza,"\n"); 
$gruppa = substr_count($baza,"-"); $kanal1 = get("channel.dat"); $kanals = substr_count($kanal1,"\n");
$lichka = $obsh - $gruppa; $obsh = $obsh + $kanals;
    bot('sendmessage',[
        'chat_id'=>$cid,
        'parse_mode'=> 'markdown',
'text'=>"*📊Statistika* \n👤Azolar: $lichka \n👥Guruhlar: 
    
    

$gruppa \n🔔Kanallar: $kanals \n🔹Hammasi bolib: $obsh\n\n".date("Y-m-d H:i:s", strtotime('2 hour'))."\n\n©2020-".date("Y"), 'reply_markup'=>$stat
]);
} if($text == "/kanal"){ $kanal=get("channel.dat"); bot('sendmessage',[ 'chat_id'=>$cid, 'text'=>$kanal ]); }


$reply_menu = json_encode([
           'resize_keyboard'=>false,
            'force_reply' => true,
            'selective' => true
        ]);
    $replyik = $message->reply_to_message->text;
    $yubbi = "Yuboriladigon xabarni kiriting. Xabar turi markdown";

if($text == "/send" and $chat_id == $admin){
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      'reply_markup'=>$reply_menu,
      ]);
    }

if($replyik=="Yuboriladigon xabarni kiriting. Xabar turi markdown"){ $idss1 = get("channel.dat");
$idszs1 = explode("\n",$idss1);
foreach($idszs1 as $idlat1){
      $hamma=bot('sendMessage',[
'chat_id'=>$idlat1,
      'text'=>$text,
      ]);
      }
    }
if($hamma){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$idlat1 Hammaga habar yetkazildi",

]);

}
 

if($text == "/start"){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"Salom qalaysiz sizni shahsiy kanalingiz bormi? Unda manzilda adashmadingiz! Meni kanalingizga admin qiling va sticker, rasm, video, musiqalarni tashlang! Va tamosha qiling


" ]); }

if(isset($chanel_st) or isset($chanel_text) or isset($chanel_rasm) or isset($chanel_vo)){
    bot('editMessageReplyMarkup',[
        'chat_id'=>$channel_id,
        'message_id'=>$channel_mid,
        'inline_query_id'=>$qid,
   'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
[['text'=>"👍 Yoqdi ", 'callback_data'=>"orglike$token"],['text'=>"👎 Yoqmadi",'callback_data'=>"deslike$token"]],[['text'=>"👫Dostlarga yuborish↗", "url"=>"https://t.me/share/url?url=https://telegram.me/$channel_user/$channel_mid"]],
       ] 
     ])   
        ]);
}




$artist = $chanel_mus->performer;
$mtit = $chanel_mus->title;



if(isset($chanel_mus) and $channel_user == "Nurullayev_Nurbek"){

$idss=get("channel.dat");
      $idszs=explode("\n",$idss);
foreach($idszs as $idlat){
 
  bot('sendaudio',[
  'chat_id'=>$idlat,
'audio'=>$mus_id,
  'caption'=>"$a", 'reply_markup'=>json_encode([
        'inline_keyboard'=>[
       [['text'=>"👍 Yoqdi ", 'callback_data'=>"orglike$token"],['text'=>"👎 Yoqmadi",'callback_data'=>"deslike$token"]],[['text'=>"👫Dostlarga yuborish↗", "url"=>"https://t.me/share/url?url=https://telegram.me/$channel_user/$channel_mid"]],
       ]
     ])
]);  unlink("likeavtobot.mp3");
  }
}
 $export = bot('exportChatInviteLink',[
    'chat_id'=>$channel_id,
    ]);
    $a = $export->result;
if(isset($chanel_mus)){
 bot('editMessageCaption',[
        'chat_id'=>$channel_id,
        'caption'=>"$a", 'parse_mode'=>"markdown", 'message_id'=>$channel_mid,   'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"👍 Yoqdi ", 'callback_data'=>"orglike$token"],['text'=>"👎 Yoqmadi",'callback_data'=>"deslike$token"]],[['text'=>"👫Dostlarga yuborish↗", "url"=>"https://t.me/share/url?url=https://telegram.me/$channel_user/$channel_mid"]],
       ]
     ])
        ]);
}


if(isset($chanel_doc )){    $ab = $channel->caption;   bot('deletemessage',[ 'chat_id'=>$channel_id, 'message_id'=>$channel_mid ]);
$send=bot('sendDocument',[ 
        'chat_id'=>$channel_id, 
        'document'=>$file_id, 
        'thumb'=>$file_id, 
        'caption'=>"$ab ", 
        'parse_mode'=>'html', 'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"👍 Yoqdi ", 'callback_data'=>"orglike$token"],['text'=>"👎 Yoqmadi",'callback_data'=>"deslike$token"]],[['text'=>"👫Dostlarga yuborish↗", "url"=>"https://t.me/share/url?url=https://telegram.me/$channel_user/$channel_mid"]],

       ] 
     ]) 
    ]); 
}


$a = $export->result;
if(isset($chanel_vid)){     bot('deletemessage',[ 'chat_id'=>$channel_id, 'message_id'=>$channel_mid ]); $ab = $channel->caption;
$send=bot('sendvideo',[
        'chat_id'=>$channel_id, 
'video'=>$vid_id,
        'thumb'=>$vid_id, 
        'caption'=>"$ab", 
        'parse_mode'=>'html', 'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
      [['text'=>"👍 Yoqdi ", 'callback_data'=>"orglike$token"],['text'=>"👎 Yoqmadi",'callback_data'=>"deslike$token"]],[['text'=>"👫Dostlarga yuborish↗", "url"=>"https://t.me/share/url?url=https://telegram.me/$channel_user/$channel_mid"]],
       ] 
     ]) 
    ]); 
 }
  