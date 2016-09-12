<? 
session_start(); 
$_SESSION['sitename']='Название сайта';
if(isset($_REQUEST['utm_source']))$_SESSION['utm_source']=$_REQUEST['utm_source']; 
if(isset($_REQUEST['utm_medium']) )$_SESSION['utm_medium']=$_REQUEST['utm_medium']; 
if(isset($_REQUEST['utm_campaign']) )$_SESSION['utm_campaign']=$_REQUEST['utm_campaign']; 
if(isset($_REQUEST['utm_term']) )$_SESSION['utm_term']=$_REQUEST['utm_term'];
if(isset($_REQUEST['utm_content']) )$_SESSION['utm_content']=$_REQUEST['utm_content'];
if(isset($_SERVER['HTTP_REFERER']))$referer=$_SERVER['HTTP_REFERER']; 

if (isset($crawler)) { 
    $phrase=urldecode($referer); 
    eregi($search. '([^&]*)', $phrase. '&', $phrase2);
    $phrase=$phrase2[1];
 }else{
    $crawler='нет';
 } 
if(!isset($phrase) || $phrase=='' ){
    $phrase='нет' ;
}
$_SESSION['seo_path']='Сайт-источник:' . $crawler. ' <br/>Ключевая фраза:'.$phrase; 
?>
<!DOCTYPE html>
<html>
   <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width">
		<title>title</title>
		<!-- CSS -->
			<link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.5" media="screen" >
			<link href="css/style.css" rel="stylesheet" media="screen">
		<!-- END OF CSS -->
		<!--SCRIPT -->
			<script src="js/jquery-1.11.1.min.js"></script>
			<script src="js/jquery.placeholder.js"></script>
			<script src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
			<link rel="stylesheet" type="text/css" href="js/tooltipster-master/css/tooltipster.css" />
			<link rel="stylesheet" type="text/css" href="js/tooltipster-master/css/themes/tooltipster-shadow.css" />
			<script type="text/javascript" src="js/tooltipster-master/js/jquery.tooltipster.js"></script>
			<script src="js/common.js"></script>
			<!--[if IE]>  
				<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>  
			<![endif]--> 
		<!-- END OF SCRIPT -->
	</head>
<body>
	<header></header>

	<!--div class="top_menu">
		<div class="inner">
			<ul>
				<li><a href="#top" class="subNavBtn">Главная</a></li>
				<li><a href="#menu1" class="subNavBtn">Меню1</a></li>
				<li><a href="#menu2" class="subNavBtn">Меню2</a></li>
				<li><a href="#menu3" class="subNavBtn">Меню3</a></li>
				<li class="helper"></li>
			</ul>
		</div>
	</div-->

	<footer></footer>

	<div id="modal_window">
		<div class="form_box">
			<form id="form1" onsubmit='return false' autocomplete="off">
				<div class="form_title">Заголовок формы</div>
				<div class="form_body">
					<input type="text" placeholder="Ваше имя" name="name" class="validate" title='Укажите ваше имя'>
					<input type="tel" placeholder="Ваш телефон" name="phone" class="validate" title='Укажите ваш телефон'>
					<input type="email" placeholder="Ваш E-mail" name="email" class="validate" title='Укажите ваш E-mail'>
					<a class="a_button send_button" data-rel='form1'>Отправить</a>
				</div>
				<input class="form_name" type="hidden" name="form_name" value="Отправить"/>
				<input type="hidden" name="action" value='send_form'/>
				<input type="hidden" name="action_type" value='form_message'/>
			</form>
		</div>
	</div>
	<div id="modal_success">
		<div class="form_box">
			<div class="form_title">Спасибо за заявку!</div>
			<p>Мы свяжемся с вами в ближайшее время.</p>
		</div>
	</div>
</body>
</html>