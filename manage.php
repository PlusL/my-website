<?php
header('Content-Type:text/html; charset=utf-8');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--下面这meta意思是告知浏览器的宽度是设备的宽度，缩放值为1.0-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>管理——某次活动报名表</title>
<link rel="stylesheet" href="style/index.css"></link>
<link rel="stylesheet" href="style/msg.css"></link>
<link rel="stylesheet" href="style/manage.css"></link>
<link rel="stylesheet" href="style/responsive.css"></link>
<!--下面这个样式是提示框的一个样式-->
<link rel="stylesheet" href="style/test.css" />
<!--下面这个js文件是为了兼容IE的媒体查询而准备的-->
<script src="js/css3-mediaqueries.js"></script>
<script type="text/javascript" src="js/jQuery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/showtips.js"></script>
<script type="text/javascript" src="test for Liang/test.js"></script>
<script type="text/javascript" src="js/msg.js"></script>
<script type="text/javascript" src="js/elo.js"></script>
 <script type="text/javascript">
        $(document).ready(function () {
//          TODO the testing table is tediously long that could not be format elegantly
//          TODO Change the width and height to fit it.
            FixTable("manage_table", 1, 500, 600);
        });
    </script>
<!--    <style type="text/css">
		table {
			border-collapse:collapse;
		}
    	table td,th {
				 border:solid 1px #000;
				 border-collapse:collapse;
				 overflow:hidden;
				 }
    
    </style>
 -->
</head>
<body>
<div id="header">
	<ul>
		<li><a href='index.php' title="访问首页，看看新鲜事物">YunFORM</a></li>
		<li><a href='create.php'>创建</a></li>
		<?php if(!(isset($_COOKIE['srtp-username'])&&isset($_COOKIE['srtp-password']))) 
		echo "<li><a href='#' id=\"register-msg\">注册</a>/<a href='#' id=\"login-msg\">登录</a></li>";
		else
		echo "<li><a href='#' id=\"register-msg\">欢迎你苏州</a>/<a href='logout.php'>退出</a></li>";?>
		<li><a href='personal.php'>我的</a></li>
		<li class="search">
	       	<div class='search'>
                <form id="search" action="#">
                    <input class="search-text" type="text"  placeholder="search" name="q"></input>
                </form>
			</div>
		</li>
		<li  class='justify-helper'></li>
	</ul>
    <div class='search-mobile search'>
        <form id="search" action="#">
            <input class="search-text" type="text"  placeholder="输入你要找的组织或活动名" name="q"></input>
        </form>
    </div>
</div>

<div id='manage-table' class="section">
	<div class="section-header">
        <h2>实时数据</h2>
        <div class="h2-line">
        </div>
    </div>
    <div class="section-body">
    	<div id="table-container">
            
        </div>
    	<div id='tool-container'>
            <div class="tool" id="tool-xls">
                <a href="#" title="下载已填写的数据的表格">
                    导出XLS
                </a>
            </div>
            <div class="tool" id="tool-rar">
                <a href="#" title="下载打包的Word文档">
                    导出RAR
                </a>
            </div>
            <div class="tool" id="tool-txt">
                <a href="#" title="向联系人群发短信">
                    发送短信
                </a>
            </div>
            <div class="tool" id="tool-zongsu">
                <a href="#" title="发送申请综素表格">
                    申请综素
                </a>
            </div>
            <div class="tool" id="tool-erke">
                <a href="#" title="发送申请二课表格">
                    申请二课
                </a>
            </div>
            <div class="tool" id="tool-add">
                <a href="#" title="发送申请二课表格" id="manage-add-msg">
                    +
                </a>
            </div>
    
                <!-- 这里是用来使元素左端对齐的 -->
            <div class='tool left-fix'>&nbsp;</div>
            <div class='tool left-fix'>&nbsp;</div>
            <div class='tool left-fix'>&nbsp;</div>
            <div class='tool left-fix'>&nbsp;</div>
		</div>
	</div>
</div>

<table id="manage_table">
<tr id="th">
    <th>&nbsp;</th>
    <th>填写时间</th>
    <th>Q1:姓名</th>
    <th>Q2:学号</th>
    <th>Q3:班级</th>
    <th>Q4:请问你的梦想是什么呢？你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</th>
    <th>Q5:请问你的梦想是什么呢？你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</th>
    <th>Q6:请问你的梦想是什么呢？你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</th>
</tr>
<tr>
    <td>24</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
</tr>
<tr>
    <td>23</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
</tr>
<tr>
    <td>22</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
</tr>
<tr>
    <td>21</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
</tr>
<tr>
    <td>20</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
</tr>
<tr>
    <td>15</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
</tr>
<tr>
    <td>19</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
</tr>
<tr>
    <td>18</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
</tr>
<tr>
    <td>17</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
</tr>
<tr>
    <td>16</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
    <td>你是怎么走到这个舞台上的？能和我们说说吗？我培养过一个冠军。欢迎你加入阿妹family！</td>
</tr>
<tr>
    <td>15</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
</tr>
<tr>
    <td>14</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
</tr>
<tr>
    <td>13</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
</tr>
<tr>
    <td>12</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
</tr>
<tr>
    <td>11</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
</tr>
<tr>
    <td>10</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
</tr>
<tr>
    <td>9</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
</tr>
<tr>
    <td>8</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
</tr>
<tr>
    <td>7</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
</tr>
<tr>
    <td>6</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
</tr>
<tr>
    <td>5</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
</tr>
<tr>
    <td>4</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
</tr>
<tr>
    <td>3</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
</tr>
<tr>
    <td>2</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
</tr>
<tr>
    <td>1</td>
    <td>5.28/09:00</td>
    <td>卢智雄</td>
    <td>3120103599</td>
    <td>科创1201</td>
</tr>

</table>

<div class='msg'>
    <div class='msg-border'>
        <div class='msg-content'>
        <!--内容是动态获得的-->			
        </div>
    </div>
</div>

<div id='footer'>
	<div id='footer-logo'>
		YunFORM
	</div>
	<div id='footer-info'>
		<p>版权所有 YunFORM小组 2014-2014</p>
		<p>浙ICP备05074421号 Copyright © 2014-2014</p>
		<p>设计制作:Lu | Liang | Su</p>
		<p>技术指导:Li | Yu</p>
		<p>友情链接：CC98 | 飘渺水云间 | 缘网 | NexusHD | 浙大学习网</p>
	</div>
	<div id='footer-contact'>
		<ul>
			<li>建议反馈</li>
			<li>关于本站</li>
			<li><a id="contact-msg">联系方式</a></li>
			<li><a id="work-msg">任务流程</li>
			<li>合作服务</li>
		</ul>
	</div>
	<div class='justify-helper'></div>
</div>

</body>
</html>