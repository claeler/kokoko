<?php
include 'config.php';
session_start();
if ($_SESSION['user'] == "") {
    header('location: index.php');
}
$off = $_GET['account'];
if (isset($off)) {
    if ($off == 'off') {
        session_destroy();
        unset($_SESSION['user']);
        session_unset();
        header('location: index.php');
    } else {
        echo '';
    }
}
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device.width" />





<!DOCTYPE html>
<html>
    <head>
        
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159654279-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159654279-2');
</script>

        <script src="https://kit.fontawesome.com/d55046ac39.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminPanel - PubgMobile Season 12</title>
            <title>Site AdminPanel</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style2.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<style>
    .myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf));
	background:-moz-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:-webkit-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:-o-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:-ms-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:linear-gradient(to bottom, #ededed 5%, #dfdfdf 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf',GradientType=0);
	background-color:#ededed;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#777777;
	font-family:Arial;
	font-size:18px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed));
	background:-moz-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:-webkit-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:-o-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:-ms-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:linear-gradient(to bottom, #dfdfdf 5%, #ededed 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed',GradientType=0);
	background-color:#dfdfdf;
}
.myButton:active {
	position:relative;
	top:1px;
}


</style>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dcbabd2869127ad"></script>
    </head>
    <body>





        <div class="wrapper">
           <center>
        <div class="Informations">
            <p class="title">WELCOME BRO :</p>
  <div class="separator" style="clear: both; text-align: center;">
<a " target="_blank"><img border="0" data-original-height="400" data-original-width="75" height="75" src="https://1.bp.blogspot.com/-_4aixTOVzCg/XPv_nzBpm2I/AAAAAAAAAa0/Np2F6Gyp7F0-0VMgLMw7d37JDAYc5NHoACLcBGAs/s200/LargeThunderousDeviltasmanian-small.gif" width="75" /></a></div>

<br>
<a href="?account=off" class="myButton">Logout</a><br>


<h4 style="text-align: center;">
<b><i><span style="font-size: large;">here is Your Result</span></i></b></h4>
		<!DOCTYPE html>
		<html>
		<head>
		    <title></title>
		    <meta charset="UTF-8" />
		    <style>
		        *{
		            padding:0;
		            margin:0;
		            box-sizing:border-box;
		            font-family: arial;
		        }
		        body{
		            background: radial-gradient(circle at 0 0, #0070ba, #1546a0);
		            min-height: 100vh;
		            height:100%;
		            width:100%;
		            padding:20px;
		            color:#fff;
		        }
		        a:visited{
		            color:red;
		        }
		        ::selection{
		            background:black;
		            color:#fff;
		        }
		        .container{
		            margin: 0 auto;
		            width:100%;
		            max-width: 900px;
		            padding: 40px;
		            border:10px solid #fff;
		            border-radius: 4px;
		            box-shadow: 0 0 10px #fff;
		        }
		        .logo{
		            text-align: center;
		            margin-bottom: 30px;
		        }
		        .logo svg{
		            height: 40px;
		        }
		        .Informations p.title{
		            font-weight: bold;
		            font-size: 30px;
		            margin: 30px 0;
		            text-shadow: 0 0 3px #fff;
		        }
		        .ssd{
		            padding:0 20px;
		            margin-bottom: 20px;
		        }
		        .ssd span{
		            font-size: 20px;
		        }
		        .tt{
		            font-weight: bold;
		            background: #fff;
		            color:#0b58ab;
		            padding: 5px 10px;
		            margin-right: 15px;
		            border-radius: 5px;
		        }

		        .u{
		            text-transform: uppercase;
		        }
		    </style>
		</head>
		</html>
		<body>
		    
		    <div class="container">
