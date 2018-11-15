<?php
if ($_SERVER['SERVER_NAME'] == 'www.csaj-khmer.org') {
    $servername = "localhost";
    $serverusername = "khmer_virak";
    $serverpassword = "vongvirak123";
    $serverdbname = "khmer_virak";
} else {
    $servername = "localhost";
    $serverusername = "root";
    $serverpassword = "";
    $serverdbname = "csaj";
}

// Create connection    
$conn = mysqli_connect($servername, $serverusername, $serverpassword, $serverdbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn, "set names 'utf8'");
date_default_timezone_set("Asia/Tokyo");
session_start();

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['csaj_lang_session'] = $lang;
} else if (isset($_SESSION['csaj_lang_session'])){
    $lang = $_SESSION['csaj_lang_session']; 
} else {
    $lang = 'en';    
}

include 'detect_mobile.php';


function la($en,$jp,$kh){
    global $lang;
    if ($lang == 'en') return $en;
    else if ($lang == 'kh') return $kh;
    else return $jp;
}

function setOption($opt, $str){
    $str = urlencode($str);
    $link = $_SERVER['REQUEST_URI'];
    if (empty($_GET)) {
        $link .= '?'.$opt.'=' . $str;
    } else {
        if (empty($_GET[$opt])) {
            $link .= '&'.$opt.'=' . $str;
        } else {
            $link = str_replace($opt.'='.urlencode($_GET[$opt]),$opt.'='.$str,$link);   
        }
    }
    return $link;
}

function getGallery($id){
    global $conn;    
    return mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM gallery WHERE id = '$id' LIMIT 1"));    
}

function getBlog($id){
    global $conn;    
    return mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM blogs WHERE id = '$id' LIMIT 1"));    
}
$p = explode("/", $_SERVER['REQUEST_URI']);
$page = $p[1];

$NAME = 'name_'.$lang;
$BODY = 'body_'.$lang;




function getBody($array){
    global $lang;
    global $mobile;
    if ($lang == 'kh') $limit = ($mobile?200:300); 
    else $limit = ($mobile?100:200);
    
    if ($array['body_'.$lang] != '') {
        return substr($array['body_'.$lang], 0, $limit);
    } else if ($array['body_en'] != ''){
        return substr($array['body_en'], 0, ($mobile?100:200));
    } else if ($array['body_kh'] != ''){
        return substr($array['body_kh'], 0, ($mobile?200:300));
    } else if ($array['body_jp'] != ''){
        return substr($array['body_jp'], 0, ($mobile?100:200));
    } else {
        return '';
    }
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CSAJ-Cambodian Student Association in Japan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="CSAJ-Cambodian Student Association in Japan" />
	<meta name="keywords" content="CSAJ-Cambodian Student Association in Japan" />
	<meta name="author" content="Vong Virak" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/logo.jpg">

	<!-- <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/fa/css/fontawesome-all.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
        
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css?v=<?=time()?>">
    
    <link rel="stylesheet" href="css/custom.css?v=<?=time()?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
        
    <link href="https://fonts.googleapis.com/css?family=Khmer" rel="stylesheet">
        
    <?php if ($mobile){?>
    <link rel="stylesheet" href="css/mobile.css?v=<?=time()?>">
    <?php }?>
        

	<!-- Modernizr JS -->
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
        
        
        <header role="banner" id="fh5co-header">
		<div class="fluid-container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                    <img src="images/logo.jpg" onclick="window.location.href='/'" style="cursor:pointer;float:left;width:60px">
					<a class="navbar-brand" href="/" style="padding-left:10px">CSAJ</a> 
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
                        <?php if (strpos($page, 'php') === false){?>
						<li class="active"><a href="#" data-nav-section="home"><span><?=la('Home', 'ホーム', 'ទំព័រដើម')?></span></a></li>
                        <li><a href="#" data-nav-section="sponsor"><span><?=la('Sponsor', 'スポンサー','អ្នកឧបត្ថម្ភ')?></span></a></li>
						<li><a href="#" data-nav-section="event"><span><?=la('Event','イベント', 'ព្រឹត្តិការណ៍')?></span></a></li>
						<li><a href="#" data-nav-section="activity"><span><?=la('Activity', '活動','សកម្មភាព')?></span></a></li>
						<li><a href="#" data-nav-section="gallery"><span><?=la('Gallery', 'ギャラリー','រូបថត')?></span></a></li>
						<li><a href="#" data-nav-section="commitee"><span><?=la('Commitee', '協会員','សមាជិក')?></span></a></li>
						<li><a href="#" data-nav-section="archive"><span><?=la('Archive', 'アーカイブ','ឯកសារ')?></span></a></li>
                        <?php }?>
                        <?php $l = array('en'=>'English','jp'=>'日本語','kh'=>'ភាសាខ្មែរ');?>
                        <?php if (!$mobile){?>
                        <li class="lang" data-toggle="modal"><a onclick="$('#lang').toggle(); return false;" href="#"><img height="20" src="images/<?=$lang?>.png"><span><?=$l[$lang]?> <i class="fa fa-caret-down"></i></span></a>
                            <ul id="lang" style="display:none">
                                <?php unset($l[$lang]);
                                foreach($l as $key=>$val){?>
                                <li onclick="window.location.href='<?=setOption('lang', $key)?>'" class="a"><a onclick="window.location.href='<?=setOption('lang', $key)?>'"><img height="20" src="images/<?=$key?>.png"><span><?=$val?></span></a></li>
                                <?php }?>
                            </ul>
                        </li>
                        <?php } else {?>
                        
                        <button type="button" class="btn btn-lang lang" data-toggle="modal" data-target="#exampleModal">
                            <img height="20" style="margin-bottom:5px" src="images/<?=$lang?>.png"><span><?=$l[$lang]?> <i class="fa fa-caret-down"></i></span>
                        </button>
                        <?php }?>
					</ul>
				</div>
			</nav>
	  </div>
	</header>
        
    <?php if ($mobile){?>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"><?=la('Select language', '言語を選択', 'ជ្រើសរើសភាសា')?></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php foreach($l as $key=>$val){?>
                    <button type="button" class="btn btn-lg btn-lang lang" onclick="window.location.href='<?=setOption('lang', $key)?>'">
                        <img height="20" style="margin-bottom:5px" src="images/<?=$key?>.png"><span><?=$val?></span>
                    </button>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <?php }?>