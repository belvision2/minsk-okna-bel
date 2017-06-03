<?php
$logo = ($_SERVER['SERVER_NAME']);
$ips = $_SERVER['REMOTE_ADDR'];
$ipl = "http://ipgeobase.ru/?address=";


$referer5 = $_SERVER['HTTP_REFERER'];

$referer2 = urldecode($referer5); 
$referer2 = substr($referer2, 7, 21);


$f = htmlspecialchars($_POST['f']);
$v_name = $_POST['name'];
$v_tel = $_POST['tel'];





$user_phone = htmlspecialchars($_POST['tel']);
$mail = htmlspecialchars($_POST['mail']);
$week = htmlspecialchars($_POST['week']);
$time = htmlspecialchars($_POST['time']);
$client_message = htmlspecialchars($_POST['f7']);
$where = htmlspecialchars($_POST['where']);
$where2 = substr($where, 7, 16);

$where3 = urldecode($where);
$where3 = preg_replace('/[^а-яА-Я]/ui', '',$where3 );
$prod_name = htmlspecialchars($_POST['f3']);
$ref = $_SERVER['HTTP_REFERER'];
parse_str($ref, $output);
$slova = $output['utm_term'];  // ключевые слова
$kompania = $output['utm_campaign']; // название компании
$p = $output['utm_source']; // название поисковика
$phrase = urldecode($where); 

 $to  = '375291400655@sms.velcom.by,6959095@mail.ru,vitaminiby@ya.ru'; 
$subject = 'Гугл минск-окна '.$phone.'';
$from = "$name";
// текст письма
$message = '
<html>
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	</head>
	<body>


<p>'.$f.'</p>
<p>'.$v_name.'</p>
<p>'.$v_tel.'  </p>





<p>Страница откуда отправлено '.$referer5.'</p>
<p> '.$where3.'</p>


<p> '.$slova.'</p>
<p> '.$p.'</p>
<p> '.$ips.'</p>
<p> '.$prod_name_otz.'</p>
<p> '.$kompania.'</p>
<p> '.$phrase.'</p>
<p> '.$where3.'</p>
<p> '.$prod_name.'</p>



	</body>
 </html>

';

$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= "From:vitaminiby@ya.ru";

mail($to, $subject, $message, $headers);
echo json_encode(1);


	?>
	