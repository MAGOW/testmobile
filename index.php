<?php $nw = empty($_GET['n']) ? "" : $_GET['n']; ?>
<?php
$tablet_browser = 0;
$mobile_browser = 0;
  
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
  $tablet_browser++;
}
  
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
  $mobile_browser++;
}
  
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
  $mobile_browser++;
}
  
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
'newt','noki','palm','pana','pant','phil','play','port','prox',
'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
'wapr','webc','winw','winw','xda ','xda-');
  
if (in_array($mobile_ua,$mobile_agents)) {
  $mobile_browser++;
}
  
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
  $mobile_browser++;
  //Check for tablets on opera mini alternative headers
  $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
  if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
    $tablet_browser++;
  }
}
  
if ($tablet_browser > 0) {
  // do something for tablet devices
  
} else if ($mobile_browser > 0) {
  // do something for mobile devices
} else {
  // do something for everything else
}
?><!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="//player.ooyala.com/static/v4/stable/4.24.9/skin-plugin/html5-skin.min.css" />
        <script src="//player.ooyala.com/static/v4/stable/4.24.9/core.min.js"></script>
        <script src="//player.ooyala.com/static/v4/stable/4.24.9/video-plugin/main_html5.min.js"></script>
        <script src="//player.ooyala.com/static/v4/stable/4.24.9/skin-plugin/html5-skin.min.js"></script>
        <style>
        #play-me{position: absolute; z-index: 9; top: 3em; left: 9em; cursor: pointer;}
		#play-me img{position: realtive;  z-index: 20; cursor: pointer; width:103px}
		#LimelightEmbeddedPlayerFlash{position: relative; z-index: 0; cursor: pointer; width: 100%;}
		#videoNext{padding: 10px 0;}
		.oo-player-container{width:100%; min-width: 0 !important;}
		.oo-player-container .oo-start-screen .oo-start-screen-linear-gradient{background: transparent !important;}
		.oo-player-container .oo-icon-play-slick{display: none;}
		.video-views {font-size: 15px; line-height: 23px; font-weight: 600; color: #bbb; font-family: "quicksand"}
        .video-div{position:relative; margin-top:15px;}
        .oo-state-screen-info { display: none; }
        </style>
        
        <title>Beverly Hills MD</title>
    </head>
    <body>
<!--   Header and logo section     -->
        <header>
            <img src="images/bhmd_r-2@3x.png" class="header_logo">
            <div class="header_asseen">
                <img src="images/logos@3x.png" class="header_asseen_img">
            </div>
        </header>
<!--   End Header-->
<!--    Main  -->
        <div class="main">
            <h1 class="main_care text_center">CARE FOR YOUR SKIN FROM WITHIN</h1>
                 <!-- start OOYALA ADD -->
               <div class="video-div relative">
	<div id="play-me">
		<img src="images/video-icon@3x.png" alt="">
	</div>
	    <div id="LimelightEmbeddedPlayerFlash"></div>
          <!-- start OOYALA ADD -->
          <!-- Nucific_BioX4_Animation_190301A -->
          <style type="text/css">
          .oo-animate-pause { opacity: 1 !important}
          .oo-spinner-wrapper { width: 20px;}
          .oo-icon-system-replay {font-size: 20px;}
          .oo-logo, .oo-share, .oo-icon-system-menu{display: none !important;}
        </style>
        <script>
         var playerParam = {
          pcode: 'AzY2kyOoR4h6urJ83C-Otm97ooqx',
          autoplay: false ,
          debug:false,
          playerBrandingId: '3416780e84604fe9a32a8e6b582ff5b1',
          skin: {
           config: 'ooyala.json'
         }
       };
       OO.ready(function() {
								// change the second parameter (embed code) to change the video 
								window.pp = OO.Player.create('LimelightEmbeddedPlayerFlash', 'NsbnVxZTE6nhmPwNK0pcMm2iWkCJQ2iv', playerParam);});
              </script>
            </div>
            <!--    End OOYALA  -->
            <p class="text_load text_center">May take 10 seconds to load. Make sure your speakers are on.</p>        
            <!--  Next button      -->
            <a href="#" class="next_step text_center">NEXT STEP &#9654;</a>
            <!-- End Next button-->
            <!--   Out Brain  -->
            <div>
                <h2 class="main_ob_header text_center">IN THIS VIDEO</h2>
                <div class="main_ob_list">
                    <ul>
                        <li>How to Reduce the Appearance of Wrinkles and Saggy Skin Without Seeing a Doctor</li>
                        <li>Answer to "What Is Causing My Skin To Age Quickly?"</li>
                        <li>Breakthrough Study on Exceptional Skin Agers</li>
                        <li>How To Become an Exceptional Skin Ager</li>
                    </ul>
                </div>
            </div>
            <!--   End Out Brain  -->
            <div class="main_renewal margin_auto">
                <h2 class="text_center main_renewal_header">Beverly Hills MD Advanced Dermal Renewal</h2>
            </div>
            <div class="margin_auto gotham main_renewal_body">
                <p class="bottom_margin"><strong><i>Natural Skin Formula</i></strong></p>
                <p class="bottom_margin">This revolutionary formula combines six skin nourishing elements to rejuvenate skin from the inside out.</p>
                <div class="skin_elements float_l">
                    <img src="images/img%201@3x.png" class="element_image margin_auto">
                    <p class="text_center">Targets internal problems that cause visible aging</p> 
                </div>
                <div class="skin_elements float_r">
                    <img src="images/img%202@3x.png" class="element_image margin_auto">
                    <p class="text_center">Reduces the appearance of sagging or drooping</p> 
                </div>
                <div class="skin_elements float_l">
                    <img src="images/img%203@3x.png" class="element_image margin_auto">
                    <p class="text_center">Diminishes the appearance of wrinkles and dullness</p> 
                </div>
                <div class="skin_elements float_r">
                    <img src="images/img%204@3x.png" class="element_image margin_auto">
                    <p class="text_center">Protects and enhances skin elasticity</p> 
                </div>
            </div>
        </div>
        <!--   End Main    -->
        <!--   Footer  -->
        <div class="footer gotham text_center">
            <p class="contact_top"><img src="images/phone@3x.png" class="contact_img"> 1-877-828-5528</p>
            <p class="contact_bottom"><a href="#" class=footer_link><img src="images/envelop@3x.png" class="contact_img"> Click Here to Email Us</a></p>
            <p>Beverly Hills MD</p>
            <p>8383 Wilshire Blvd #800</p>
            <p class="footer_address">Beverly Hills, CA 90211 </p>
            <p class=>The information presented on this website is not intended as specific medical advice and is not a substitute for professional treatment or diagnosis. These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.</p>
            <p class="footer_copy">&copy; Beverly Hills MD <?php echo date("Y"); ?>. "Beverly Hills MD" is a registered trademark of Beverly Hills MD, LLC. All Rights Reserved. | <a href="https://beverlyhillsmd.com/privacy-policy/" class="footer_link">PRIVACY POLICY</a> | <a href="https://beverlyhillsmd.com/terms-and-condition" class="footer_link">TERMS</a></p>
        </div>
        <!--   End Footer   -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        	<script>
		$(document).ready(function() {
		// play/pause and make button disapear code
        function VidOff() {
            window.pp.pause();
        }

        function VidOn() {
            $('#play-me').css('display', 'none');
            window.pp.play();
        }

        $('#ooyalaplayer, #play-me, #vid-button').click(function() { 
        	 return (this.tog = !this.tog) ? VidOn() : VidOff();
        })

		// next step cookie code
        //Button Time 32:07
//			if(!$.cookie('middle-back-div')){
//				setTimeout(function(){
//					$.cookie('middle-back-div', '1', {expires:7, path:'/'});
//				}, 10000);
//				delay = 60000 * <?php if(isset($_GET['del'])) echo $_GET['del']; else echo '32.117'; ?>;
//				setTimeout(function(){
//					$("#middle-back-div").fadeIn("slow");
//				}, delay);
//			}
//			else{
//				$("#middle-back-div").fadeIn("slow");
//			}
		});
	</script>
        
    </body>