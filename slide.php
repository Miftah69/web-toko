<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="assets/js/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="assets/js/slide.js" type="text/javascript"></script>
<style>
	#con{
		width:100%;
		height:auto;
		overflow:hidden;
	}
	
	#img{
		width: 400%;
		-webkit-transition: all ease 1.5s;
		-moz-transition: all ease 1.5s;
		-o-transition: all ease 1.5s;
	}
	
	#img img{
		float:left;
		width:25%;
	}
</style>

</head>

<body onload="slide()">

<div id="con">
	<div id="img">
    	<img src="assets/img/12.jpg" />
        <img src="assets/img/bener2.jpg" />
        <img src="assets/img/bener3.jpg" />
        <input id="ke" value="0" name="ke" type="hidden" />
    </div>
</div>

</body>
</html>