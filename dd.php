<?php
$i=$_POST['path'];
$t=$_POST['te'];
/*$img=file_get_contents("./".$i.".jpg");
header("content-type:image/jpg");
echo $img;*/
?>
<html>
<style>
*{
	padding:0%;
	margin:0%;
}
.content-wrapper{
	width:80%;
margin:4% 10% 4% 10%;
	}
.content-wrapper img {
width:50%;
}	
.text-wrapper{
	width:50%;
	position:relative;
	margin-top:-20%;
	}
.text-wrapper p{
	text-align:center;
	color:blue;
	font-size:50px;
}	
</style>

<body>
<div class="content-wrapper">
<?php 
echo"<img src=$i.jpg>";
?>
<div class="text-wrapper">
<?php echo"<p>".$t."</p>";?>
</div>
</div>
</body>
</html>
