<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Destitute | Contact Us</title>
<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style-starter.css">
<style>.w3l-header-nav .navbar-light a.navbar-brand:after{content:'';position:absolute;border:3px solid #fff;width:60px;left:-15px;top:-11px;bottom:-11px;z-index:-1;border-radius:8px}.w3l-footer-29-main{background-color:#eee;border-top:solid 1px #fff}.w3l-footer-29-main .footer-29{background-color:#02060c}.w3l-footer-29-main .footer-list-29 p{color:#ccc}.w3l-footer-29-main .footer-list-29 ul li a,.w3l-footer-29-main .footer-list-29 ul li p{font-weight:400;font-size:14px;line-height:26px;color:#ccc}.w3l-footer-29-main p.copy-footer-29{align-self:center;color:#ababab}.w3l-footer-29-main h6.footer-title-29{-webkit-font-smoothing:antialiased;font-size:18px;font-weight:700;line-height:20px;letter-spacing:-.3px;color:rgb(234 227 235)}.w3l-breadcrumb{background-color:#1672cf;padding-top:84px}.Sect{border:none;background:0 0;color:#fff;font-size:25px}.__Drc56{max-height:calc(100vh - 100px);overflow:auto;background:#f6f6f6;border-radius:10px;padding:15px 5px 6px;flex-basis:100%;flex-grow:1;max-width:400px;border:1px solid #fff;box-shadow:0 2px 5px 1px rgba(64,60,67,.16);visibility:hidden;display:none}.Drcg6{visibility:visible;display:block}button:active{border:none;outline:0}button:focus{border:none;outline:0}button:hover{border:none;outline:0}.sincty78{padding-left:1!important}.sincty78{padding-right:1!important}.Rt67{appearance:none;outline:0;font-family:Cabin,sans-serif;border-bottom:solid 1px #eee}.y78UO{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}</style>
<script src="https://www.google.com/recaptcha/api.js?render=6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('.seemonk').on('click','button.Sect',function(e){
let loc=$('.__Drc56');
let opn=('Drcg6');
e.preventDefault();
loc.hasClass(opn) ? closeDrop(loc,opn) : showDrop(loc,opn);
});
function showDrop(loc,opn) {
loc.addClass(opn);
$('.Sect').html('<sapn class="fa fa-times" aria-hidden="true"></span>');
}
function closeDrop(loc,opn) {
loc.removeClass(opn);
$('.Sect').html('<span class="fa fa-bars" aria-hidden="true"></span>');
}
$('.form-sect').on('submit','form.form-contact',function(e){
let fileStatus=0;
let userName=$("input[name=Dname]").val();
let userMobile=$("input[name=Dmob]").val();
let userEmail=$("input[name=Dmail]").val();
let userSubject=$("input[name=Dsub]").val();
let userComment=$("textarea[name=Dcomment]").val();
let response = grecaptcha.getResponse();
let validNum = mobileValidation(userMobile);
let validMail = isEmail(userEmail);
let validName= nameValid(userName);
let validSubject= subValid(userSubject);
let validComment= commentValid(userComment);
let validCaptcha=capValid(response);
if(validNum && validMail && validName && validSubject && validComment && validCaptcha)
{
return true;
}
else
{
return false;
}

});
function capValid(res)
{
if(res.length == 0){$('.g-recaptcha').addClass('Fy78p');return false;}
else {$('.g-recaptcha').removeClass('Fy78p');return true;}
}
function nameValid(name)
{
if(name == ''){$('#Dname').addClass('Sedc').parent('.form-input').find("label").html('Please enter your name');return false;}
else {$('#Dname').removeClass('Sedc').parent('.form-input').find("label").html('Name <span class="sert67">*</span>');return true;}
}
function commentValid(comment)
{
if(comment == ''){$('#Dcomment').addClass('Sedc').parent('.form-input').find("label").html('Please enter your comment');return false;}
else {$('#Dcomment').removeClass('Sedc').parent('.form-input').find("label").html('Comment <span class="sert67">*</span>');return true;}
}
function subValid(sub)
{
if(sub == ''){$('#Dsub').addClass('Sedc').parent('.form-input').find("label").html('Please enter your subject');return false;}
else {$('#Dsub').removeClass('Sedc').parent('.form-input').find("label").html('Subject <span class="sert67">*</span>');return true;}
}
function mobileValidation(mobileNum)
{
let mobNum = mobileNum;
let filter = /^\d*(?:\.\d{1,2})?$/;
if (filter.test(mobNum)) {
if(mobNum.length == 10){
$('#Dmob').removeClass('Sedc').parent('.form-input').find("label").html('Mobile <span class="sert67">*</span>');
return true;
} else {
$('#Dmob').addClass('Sedc').parent('.form-input').find("label").html('Please enter 10  digit mobile number');
return false;
}
}
else {
$('#Dmob').addClass('Sedc').parent('.form-input').find("label").html('Please enter a valid mobile number');
return false;
}
}
function isEmail(email) {
var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(!regex.test(email)) {
$('#Dmail').addClass('Sedc').parent('.form-input').find("label").html('Please enter your  a valid email');
return false;
}else{
$('#Dmail').removeClass('Sedc').parent('.form-input').find("label").html('Email <span class="sert67">*</span>');
return true;
}
}
});
</script>

<style>
  .form-contact label{
    font-size: 18px;
    color: #000;
    font-weight: 500;
  }
  a {
    color:#1672cf;
  }
  .sert67
  {
    color:rgb(234, 78, 78)
  }
  .btn-primary,.btn-primary:hover, .btn-primary:active,.btn-primary:focus {
    color: #fff;
    background-color: #1672cf;
    border-color: #1672cf !important;
    border: none !important;
}
@media (max-width: 768px)
{
.SecFonh {
    width: 90% !important;
}}
.SecFonh
{
  display: flex;justify-content: center;align-items: center;width: 70%;  
}

.Cang67 {
  display: flex;justify-content: center;align-items: center;width: 100%;padding-bottom: 1rem;
}
:root {
    --primary-color: #1672cf;
}
.Sedc{
  border:solid 1px rgb(234, 78, 78) !important;
}
.Fy78p{
 
  border:solid 1px rgb(234, 78, 78) !important;
}
.w3l-contact-2 .contact-grids input, .w3l-contact-2 .contact-grids textarea {
    width: 100%;
    color: var(--para-color);
    background: #fff;
    font-size: 16px;
    line-height: 20px;
    font-weight: normal;
    font-style: normal;
    border: none;
    font-family: inherit;
    padding: 10px;
    border: none;
    border: 1px solid #ddd;
    outline: none;
    border-radius: 0px;
    margin-bottom: 10px;
    border-radius: 4px;
}.w3l-contact-2 .contact-grids textarea {
    height: 50px;
    margin: 0 0 20px 0;
}
  </style>
</head>
  <body>



<header class="w3l-header-nav" style="z-index: 1;position: fixed;width: 100%;background: #fff;background: #fff;border: 1px solid transparent;box-shadow: 0 2px 5px 1px rgba(64,60,67,.16);">
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
		<div class="container">
			<a class="navbar-brand" href="index.html"><span style="color: #1672cf;font-weight: 600;font-size: 38px;">Destitute</span></a>
		</div>
	</nav>
</header>




<header class="w3l-header-nav" style="padding-top: 6rem; background: #1672cf;border: 1px solid transparent;box-shadow: 0 2px 5px 1px rgba(64,60,67,.16);">
	<!--/nav-->
	<nav class="navbar  navbar-light fill sincty78 py-0 px-3 seemonk">
		<div class="" style="display:flex;width:100%;justify-content: end;color:#fff">
	     <button class="Sect"><span class="fa fa-bars"></span></button>
    </div>
    <!------->
    <div style="width: 100%;display: flex;align-items: end;justify-content: end;">
    <div class="__Drc56">
 <ul class="y78UO">
  <li class="Rt67"><a class="nav-link" href="index.html">Home</a></li>
  <li class="Rt67"><a class="nav-link" href="index.html">About Us</a></li>
  <li class="Rt67"><a class="nav-link" href="index.html">Destitutes</a></li>
  <li class="Rt67"><a class="nav-link" href="index.html">Notifications</a></li>
  <li class="Rt67"><a class="nav-link" href="index.html">Bulletin</a></li>
  <li class="Rt67"><a class="nav-link" href="index.html">Recent Updates</a></li>
  <li class="Rt67"><a class="nav-link" href="index.html">Sponsor Ship</a></li>
  <li class="Rt67"><a class="nav-link" href="index.html">Achievements</a></li>
  <li class="Rt67"><a class="nav-link" href="index.html">Testimonials</a></li>
  <li class="Rt67"><a class="nav-link" href="index.html">Contact Us</a></li>
 </ul>
    
    </div>
  </div>
    <!------->
	</nav>
	<!--//nav-->
</header>
<!-- //w3l-header -->


<!-- contact-form 2 -->
<section class="w3l-contact-2 form-sect" style="padding-top: 0;">
  <div class="contact-infubd section-gap py-lg-5 py-md-4">
      <div class="container" style="max-width: 800px;">
          <div class="contact-grids">
              <div class="contact-right">
                  <div style="margin-bottom: 1rem;">
                  <div>
                  <span>
                      <?php
                      if(isset($_SESSION['err']))
                      {
                      echo $_SESSION['err'];
                      unset($_SESSION['err']);
                      }
                      ?>
                      </span>
                  </div>
                      <h4 style="font-size: 2rem;">Contact Us</h4>
                    
                      <h6 style="margin-top: 17px; float: right; color: rgb(234, 78, 78);">* Mandatory fields</h6>
                  </div>
                 
                  <form action="http://localhost/Destitue/form.php" method="POST" enctype="multipart/form-data" class="form-contact">
                      <div class="form-input">
                          <label for="Dname">Name <span class="sert67">*</span></label>
                          <input type="text" name="Dname" id="Dname" placeholder="name" class="contact-input" value=""/>
                      </div>
                      <div class="form-input">
                          <label for="Dname">Email <span class="sert67">*</span></label>
                          <input type="email" name="Dmail" id="Dmail" placeholder="email" class="contact-input" value="r@gmail.com"/>
                      </div>
                      <div class="form-input">
                          <label for="Dmob">Mobile <span class="sert67">*</span></label>
                          <input type="text" name="Dmob" id="Dmob" placeholder="mobile" class="contact-input" value="6238771656" />
                      </div>
                      <div class="form-input">
                          <label for="Dsub">Subject <span class="sert67">*</span></label>

                          <input type="text" name="Dsub" id="Dsub" placeholder="subject" class="contact-input" value="subject" />
                      </div>
                      <div class="form-input">
                          <label for="file">Attach File Max size 2mb <span class="sert67" style="color: #ababab;">(optional)</span></label>
                          <input type="file" name="file" id="file" class="contact-input" onchange="Filevalidation()" />
                      </div>
                      <div class="form-input">
                          <label for="Dcomment">Comments <span class="sert67">*</span></label>
                          <textarea name="Dcomment" id="Dcomment" placeholder="comments" value="subject">commentsssss</textarea>
                      </div>
                      <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI" style="padding: 17px;"></div>
                      <div class="form-input" style="padding: 10px 0 10px 0;">
                          <button class="btn btn-style btn-primary submit" style="min-width: 60%;">Submit</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>


<!-- /contact-form-2 -->

<div  class="Cang67">
 <div class="map-iframe SecFonh">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8828290316483!2d76.30601957577866!3d10.026526872576135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080dafbed183bf%3A0x5951f316ba13a37e!2sLuLu%20International%20Shopping%20Mall%2C%20Kochi!5e0!3m2!1sen!2sin!4v1694761055503!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div> 
</div>

<!-- <section class="w3l-footer-29-main">
  <div class="footer-29">
    <div class="container py-lg-4">
      <div class="row footer-top-29">
        <div class="footer-list-29 col-lg-4">
          <h6 class="footer-title-29">About Destitute</h6>
          <p class="pr-lg-5">Y4D envisions fostering the development of a happy, healthy, and sustainable society in which every individual has an equal opportunity for growth and a life of dignity.</p>
          <div class="main-social-footer-29 mt-4">N
            <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
            <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
            <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
            <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-lg-0 mt-5">

          <ul>
            <h6 class="footer-title-29">Connect with us</h6>
            <li><a href="index.html">Destitute</a></li>
            <li><a href="index.html">About us</a></li>
            <li><a href="index.html">Notifications</a></li>
            <li><a href="index.html">Bullettin</a></li>
            <li><a href="index.html">Recent Updates</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-list-29 footer-3 mt-lg-0 mt-5">
          <ul>
            <h6 class="footer-title-29" style="display: block;">Get to know us</h6>
           
            <li><a href="index.html">Recent Updates</a></li>
            <li><a href="about.html">Sponser Ship</a></li>
            <li><a href="services.html">Achievements</a></li>
            <li><a href="blog.html"> Testimonials</a></li>
            <li><a href="contact.html">Contact us</a></li>
          </ul>


        </div>
        <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1 mt-lg-0 mt-5">
          <h6 class="footer-title-29">Contact Us</h6>
          <ul>
            <li>
              <p><span class="fa fa-map-marker"></span> Destitute. No 919 Artillery Road, South Minerva Extension.Trivandrum , South India,Kerala</p>
            </li>
            <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> +(91)-9999 99 9999</a></li>
            <li><a href="mailto:Livefloor@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
              Destitute@mail.com</a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</section> -->

<section class="w3l-footer-29-main w3l-copyright">
  <div class="container">
      <div class="bottom-copies">
          <p class="copy-footer-29 text-center">© 2023 Destitute.in. All rights reserved</p>
      </div>
  </div>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
      <i class="fa fa-arrow-up" aria-hidden="true"></i>
  </button>
</section>
<script>
window.onscroll = function () {
scrollFunction()
};
function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
document.getElementById("movetop").style.display = "block";
} else {
document.getElementById("movetop").style.display = "none";
}
}
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}
</script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>