<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>填写页面</title>
	<link rel="stylesheet" type="text/css" href="/compus2/Public/css/index.css" />
</head>
<body>
<div>
	<div class="img">
		<img src="/compus2/Public/upload/img/zq2.jpg" alt="">
	</div>
	<div>
		<p align="center">上面是横幅样式，请按照标准样式制作，您可以选择一个或多个悬挂点。</p>
	</div>
	<div class="hengfug">横幅悬挂地点</div>
	<div>
		<div class="hengfu">A区</div>
		<div class="hengfu2">B区</div>
		<div class="hengfu3">C区</div>
		<div class="hengfu4">D区</div>
		<div class="hengfu5">E区</div>
	</div>
		<div class="penhui">F区</div>
	<!-- left start -->
	<div class="left">
	<div class="styled-select">
       <select>
       		<option value ="volvo">无</option>
  			<option value ="volvo">一运</option>
 			<option value ="saab">二运</option>
		</select>
	</div>
	<div class="styled-select">
		<select>
		    <option value ="volvo">无</option>
  			<option value ="volvo">博园宿舍区</option>
		</select>
	</div>
	<div class="styled-select">
		<select>
			<option value ="volvo">无</option>
  			<option value ="volvo">荟一——荟九主干道</option>
		</select>
	</div>
	<div class="styled-select">
		<select>
  			<option value ="volvo">无</option>
 			<option value ="saab">荟十——荟十六主干道</option>
		</select>
	</div>
	<div class="styled-select">
		<select>
  			<option value ="volvo">无</option>
 			<option value ="saab">荟园宿舍楼栋</option>
		</select>
	</div>
	</div>
	<!-- left end -->
	<!-- right start -->
	<div class="penhuig">喷绘</div>
	<div class="right">
	<div class="styled-select ">
		<select>
  			<option value ="volvo">无</option>
 			<option value ="saab">素拓基地</option>
		</select>
	</div>
	</div>
	<!-- right start -->
	<div  class="submit">
	<a href="<?php echo U('/Home/form/index');?>"><button type="button" class="button blue" >下一步</button></a>
    </div>
</div>
</body>
</html>