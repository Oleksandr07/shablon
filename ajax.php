<?
	session_start();
	if (isset($_GET['action']) && $_GET['action']=='send_form'){
		foreach ($_GET as $key => $val) {
			${$key} = $val;
		}
		
		$to  = "sera.serduk@gmail.com" ;	
		//$to  = "info@diamonddrill.moscow";
		if(isset($email) and $email!=''){
			$from  = $email ;		
		}else{
			$from='Заказ с сайта '.$_SESSION['sitename'];
		}		
		

		$utm ='';
		if($_SESSION[utm_source]!='')$utm .= '<b>Рекламная система (utm_source): </b> '.$_SESSION[utm_source].' <br>';
		if($_SESSION[utm_medium]!='')$utm .= '<b>Тип трафика (utm_medium): </b> '.$_SESSION[utm_medium].' <br>';
		if($_SESSION[utm_campaign]!='')$utm .= '<b>Кампания (utm_campaign): </b> '.$_SESSION[utm_campaign].' <br>';
		if($_SESSION[utm_term]!='')$utm .= '<b>Ключевая фраза (utm_term): </b> '.$_SESSION[utm_term].' <br>';
		if($_SESSION[utm_content]!='')$utm .= '<b>Содержание объявления (utm_content): </b> '.$_SESSION[utm_content].' <br>';
							
		if($form_name!=''){
			$subject = $form_name." (".$_SESSION['sitename'].") \r\n"; 	
		}else{
			$subject=$from;
		}
		
		
		if($action_type=='form_message'){
		
			$emessage = "
			<html>
				ФИО:".$name."<br/>Телефон:".$phone."<br/>E-mail:".$email."<br/><br/>".$_SESSION[seo_path]." <br/>UTM:<br/>".$utm."
			</html>";
		}					
			$headers  = "Content-type: text/html; charset=utf-8 \r\n";
			$headers .= "From: ".$from."\r\n";
								
			mail($to, $subject, $emessage, $headers);
			
			echo 'sended';
	}
?>