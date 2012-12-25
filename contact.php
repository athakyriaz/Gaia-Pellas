<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Γαία Πέλλας</title>
<link href="css/template.css" rel="stylesheet" type="text/css" />
<link href="css/extra.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

</script>

<script type="text/javascript">
ddsmoothmenu.init({mainmenuid: "template_menu",orientation: 'h',classname: 'ddsmoothmenu', contentsource: "markup"})
</script>
</head>
<body>
<div id="template_wrapper">
	<div id="template_header">
<!-- 	<div id="flags">
			<form action="" method="get"><input type="image" src="greece.ico" width="20px"><input type="hidden" name="language" value="greek"><input type="hidden" name="page" value="index.html"></form>
			<form action="" method="get"><input type="image" src="united_kingdom.ico" width="20px"><input type="hidden" name="language" value="english"><input type="hidden" name="page" value="index.html"></form>
			<form action="" method="get"><input type="image" src="germany.ico" width="20px"><input type="hidden" name="language" value="german"><input type="hidden" name="page" value="index.html"></form>
		</div> -->
		<div style="float:center;margin-right:65px;"><center><img src='images/welcome_gaia.png' height='85px'/></center></div>
        <div class="cleaner"></div>
    </div> <!-- end of header -->
    
    <div id="template_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.html">Αρχική</a></li>
            <li><a href="">Εταιρία</a>
				 <ul>
                    <li><a href="company.html">Ιστορικό</a></li>
                    <li><a href="quality.html">Ποιότητα</a></li>
                	<span></span>
                </ul>
			</li>
            <li><a href="#">Προϊόντα</a>
                <ul>
                    <li><a href="blastari.html">Βλαστάρι</a></li>
                    <li><a href="lazaridi.html">Λαζαρίδη</a></li>
                	<span></span>
                </ul>
          	</li>
			<li><a href="sales.html">Που θα μας Βρείτε</a></li>
			<li><a href="#">Media</a>
                <ul>
                    <li><a href="#">Video</a></li>
                    <li><a href="gallery.html">Φωτογραφίες</a></li>
                	<span></span>
                </ul>
          	</li>
          	<li><a href="contact.php" class="selected">Επικοινωνία</a></li>
        </ul>
        <br style="clear: left" />
    </div>
    
    <div id="template_slider_wrapper">
        
        <div id="slider" class="nivoSlider">
            <a href="#"><img src="images/slider/01.jpg" alt="Slider 01" title="Φασολάκια Πλατιά" /></a>
            <a href="#"><img src="images/slider/02.jpg" alt="Slider 02" title="Φασολάκι Στρογγυλό" /></a>
            <a href="#"><img src="images/slider/03.jpg" alt="Slider 03" title="Φασολάκι Πλατύ" /></a>
            <a href="#"><img src="images/slider/04.jpg" alt="Slider 04" title="Σπανάκι" /></a>
			<a href="#"><img src="images/slider/05.jpg" alt="Slider 04" title="Σέσκουλο" /></a>
        </div>       
    </div>
    <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
    $('#slider').nivoSlider();
    });
    </script>
    
    <div id="template_main">      .
	
	<div class="col_b float_c">
        	<center><h2>Επικοινωνία<a id="Form"></a></h2></center>
			<div id="contact_form" style="float:left;">
			<?php if(isset($_SESSION['mail_send']) && $_SESSION['mail_send']==false) echo'
			<form action="send_mail.php" method="post">
				<p><label>Όνομα:</label><input type="text" name="txtName" class="input_field" value='.$_SESSION['sender_name'].'></p>
				<p><label>Επώνυμο:</label><input type="text" name="txtLastname" class="input_field" value='.$_SESSION['sender_lastname'].'></p>
				<p><label>E-mail:</label><input type="text" name="txtEmail" class="input_field" value='.$_SESSION['sender_email'].'></p>
				<label>Μήνυμα:</label>
				<textarea name="txtMessage">'.$_SESSION['sender_message'].'</textarea>
				<input type="submit" value="Αποστολή" class="submit_btn">
			</form>';
			else echo'
			<form action="send_mail.php" method="post">
				<p><label>Όνομα:</label><input type="text" name="txtName" class="input_field"></p>
				<p><label>Επώνυμο:</label><input type="text" name="txtLastname" class="input_field"></p>
				<p><label>E-mail:</label><input type="text" name="txtEmail" class="input_field"></p>
				<label>Μήνυμα:</label>
				<textarea name="txtMessage"></textarea>
				<input type="submit" value="Αποστολή" class="submit_btn">
			</form>'; ?><br/>
			<?php  if(isset($_SESSION['mail_send'])) { if($_SESSION['mail_send']==false) { echo "<p style='color:red;font-size:14px;'>Η αποστολή του μηνύματος απέτυχε. Συμπληρώστε όλα τα πεδία.</p>"; unset($_SESSION['sender_name']); unset($_SESSION['sender_lastname']); unset($_SESSION['sender_email']); unset($_SESSION['sender_message']); } else echo "<p style='color:green;font-size:14px;'>Το μήνυμα σας στάλθηκε επιτυχώς.</p>"; unset($_SESSION['mail_send']); } ?>
			</div>
			<div style="width:350px;float:right;margin-top:40px">
			<p><img src="images/contact/address.png" alt="address" height="16px" align="top"> <b>Διεύθυνση:</b> 1ο ΧΙΛ. ΓΙΑΝΝΙΤΣΩΝ - ΕΔΕΣΣΗΣ, 58100</p>
			<p><img src="images/contact/phone.png" alt="phone" height="16px" align="top"> <b>Τηλέφωνο:</b> 23820-83534</p>
			<p><img src="images/contact/fax.png" alt="fax" height="16px" align="top"> <b>FAX:</b> 23820-83574</p>
			<p><img src="images/contact/mail.png" alt="e-mail" height="16px" align="top"> <b>E-mail:</b> info@gaiapellas.gr</p>
			</div>
			<div class="cleaner"></div>
        </div>	
	
    </div>  
	

<div id="footer">    
	<div id="footer_copyrights">	
    	<center>Copyright © 2012 <a href="index.html"style="color:#009900; text-decoration:none;">Γαία Πέλλας</a> | 
		<a href="" target="_parent"> </a> Powered by <span style="font-size:10px; color:;" >Kyriazopoulos-Tsalikidis</span>
		</br> </br>
		<a href="http://el-gr.facebook.com/pages/%CE%93%CE%91%CE%99%CE%91-%CE%A0%CE%95%CE%9B%CE%9B%CE%91%CE%A3/493361827357523?ref=nf"  TARGET="_blank"><img src="images/facebook.png"/></a>
		<a href="http://www.youtube.com/channel/UC4ZwVIZperLf6NLu2ochW6A"  TARGET="_blank"><img src="images/youtube.png"/></a>
		<a href="https://plus.google.com/u/0/114543400886846930067/posts"  TARGET="_blank"><img src="images/googleplus.png"/></a>
		<a href="mailto:info@gaiapellas.gr "><img src="images/email.png"/></a>
		</center>
    </div>
</div>
</div>
</body>
</html>