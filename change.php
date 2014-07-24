<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>用户行为</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/table.css" rel="stylesheet">
</head>
<body>
	<div class="container" style="width:500px">
		<div class="panel panel-success">
			<div class="panel-heading">用户行为</div>

				<table class="table table-hover table-bordered">
				<tr class="success">
				<td style="width:160px">时间</td>
				<td>操作记录</td>
				</tr>
					<?php
					$text = file_get_contents('show_user_action.php.htm');
					$text1 = str_replace("<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"></head><body><table style=\"border:1px solid #CCC\"><tbody><tr><td>  &nbsp;</td><td></td></tr>", "",$text);
					$text2 = str_replace("</tbody></table></body></html>", "", $text1);
					$text3 = str_replace("&nbsp;", "", $text2);
					$text4 = str_replace("remote", "打开", $text3);
					$text5 = str_replace("home", "首页", $text4);
					$text6 = str_replace("search", "搜索页", $text5);

					echo $text6;
					?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>