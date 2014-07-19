<?php
header('Content-Type:text/html; charset=utf-8');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--下面这meta意思是告知浏览器的宽度是设备的宽度，缩放值为1.0-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>我的</title>
<link rel="stylesheet" href="style/index.css"></link>
<link rel="stylesheet" href="style/msg.css"></link>
<link rel="stylesheet" href="style/personal.css"></link>
<link rel="stylesheet" href="style/responsive.css"></link>
<link rel="stylesheet" href="style/animate.css"></link>
<!--下面这个js文件是为了兼容IE的媒体查询而准备的-->
<script src="js/css3-mediaqueries.js"></script>
<script type="text/javascript" src="js/jquery-2.1.1.min.js""></script>
<script type="text/javascript" src="js/msg.js"></script>
<script type="text/javascript" src="js/headroom.min.js"></script>
<script type="text/javascript" src="js/headroom.js"></script>

</head>
<body>
<?php
    require 'includes/header.inc.php';
?>
<div id='my-release' class="section">
	<div class="section-header">
        <h2>我发布的</h2>
        <div class="h2-line">
        </div>
    </div>
    <div class="section-body">
        <div class="card my-release" > 
            <a href='#'>
                <div class='form-op'>
                    <a href="#"><input class='btn red' type="button" value='编辑'/></a>
                    <a href="manage.php"><input class='btn blue' type="button" value='管理'/></a>
                    <a href="#"><input class='btn green' type="button" value='查看'/></a>
                </div>
                <div class='form-status'>
                    <img src="images/form-status-on.png" alt="已下架" />
                </div>
                <div class="img-holder">
                    <div class="fader">
                        <img src="images/2.jpg" alt="" />
                    </div>
                    <div class="form-name">
                        浙大某个社团网站纳新报名表
                    </div>
                    <div class="img-counter">
                        <div class="counter">
                            <span class="time-left">还有两天</span>
                            <span class="written">14次</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="card my-release" > 
            <a href='#'>
                <div class='form-op'>
                    <a href="#"><input class='btn red' type="button" value='编辑'/></a>
                    <a href="manage.php"><input class='btn blue' type="button" value='管理'/></a>
                    <a href="#"><input class='btn green' type="button" value='查看'/></a>
                </div>
                <div class='form-status'>
                    <img src="images/form-status-off.png" alt="已下架" />
                </div>
                <div class="img-holder">
                    <div class="fader">
                        <img src="images/1.jpg" alt="" />
                    </div>
                    <div class="form-name">
                        浙大某个社团网站纳新报名表
                    </div>
                    <div class="img-counter">
                        <div class="counter">
                            <span class="time-left">还有两天</span>
                            <span class="written">14次</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="card my-release" > 
            <a href='#'>
                <div class='form-op'>
                    <a href="#"><input class='btn red' type="button" value='编辑'/></a>
                    <a href="manage.php"><input class='btn blue' type="button" value='管理'/></a>
                    <a href="#"><input class='btn green' type="button" value='查看'/></a>
                </div>
                <div class='form-status'>
                    <img src="images/form-status-wait.png" alt="已下架" />
                </div>
                <div class="img-holder">
                    <div class="fader">
                        <img src="images/1.jpg" alt="" />
                    </div>
                    <div class="form-name">
                        浙大某个社团网站纳新报名表
                    </div>
                    <div class="img-counter">
                        <div class="counter">
                            <span class="time-left">还有两天</span>
                            <span class="written">14次</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="card my-release create-new" > 
            <a href="create.php">
                <div class="img-holder">
                    <b>+</b>
                    <p>点此创建新表</p>
                </div>
            </a>	
        </div>
    <!-- 这里是用来使元素左端对齐的 -->
        <div class='card left-fix'>&nbsp;</div>
        <div class='card left-fix'>&nbsp;</div>
        <div class='card left-fix'>&nbsp;</div>
        <div class='card left-fix'>&nbsp;</div>
    </div>
</div>
<div id='my-fill' class="section">
	<div class="section-header">
        <h2>我填写的</h2>
        <div class="h2-line">
        </div>
    </div>
    <div class="section-body">
        <div class="card my-fill" > 
            <a href='#'>
                <div class="img-holder">
                    <div class="fader">
                        <img src="images/1.jpg" alt="" />
                    </div>
                    <div class="form-name">
                        浙大某个社团网站纳新报名表
                    </div>
                    <div class="img-counter">
                        <div class="counter">
                            <span class="time-left">还有两天</span>
                            <span class="written">14次</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <!-- 这里是用来使元素左端对齐的 -->
        <div class='card left-fix'>&nbsp;</div>
        <div class='card left-fix'>&nbsp;</div>
        <div class='card left-fix'>&nbsp;</div>
        <div class='card left-fix'>&nbsp;</div>
    </div>
</div>
<div id='my-browse' class="section">
	<div class="section-header">
        <h2>我浏览的</h2>
        <div class="h2-line">
        </div>
    </div>
    <div class="section-body">
        <div class="card my-browse" > 
            <a href='#'>
                <div class="img-holder">
                    <div class="fader">
                        <img src="images/1.jpg" alt="" />
                    </div>
                    <div class="form-name">
                        浙大某个社团网站纳新报名表
                    </div>
                    <div class="img-counter">
                        <div class="counter">
                            <span class="time-left">还有两天</span>
                            <span class="written">14次</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <!-- 这里是用来使元素左端对齐的 -->
        <div class='card left-fix'>&nbsp;</div>
        <div class='card left-fix'>&nbsp;</div>
        <div class='card left-fix'>&nbsp;</div>
        <div class='card left-fix'>&nbsp;</div>
    </div>
</div>


<div class='msg'>
    <div class='msg-border'>
        <div class='msg-content'>			
        </div>
    </div>
</div>

<?php
     include 'includes/footer.inc.php';
?>
<script>
(function() {
   $("header").headroom({
  "tolerance": 5,
  "offset": 205,
  "classes": {
    "initial": "animated",
    "pinned": "bounceInDown",
    "unpinned": "bounceOutUp"
  }
});

// to destroy
$("#header").headroom("destroy");
}());
</script>
</body>
</html>