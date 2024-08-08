<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="/test/test.css">
	</head>
	<body style="background-image: url('../img/mini-button-the8woodcutter.png'); background-repeat: repeat; background-attachment: fixed;">
		<center>
			<div class="inside">
				<?php
					$text = file_get_contents('gifs.txt');
					echo $text;
				?>
			</div>
		</center>
<!-- 		<div class="toppartdiv">
			<font class="code">
				┏┓┏┓╋╋╋╋╋╋╋╋╋╋┏┓╋╋╋┏┓┏┓<br/>
				┃┗┫┗┳━┳┳┳┳━┳━┳┛┣━┳┳┫┗┫┗┳━┳┳┓<br/>
				┃┏┫┃┃┻┫┃┃┃╋┃╋┃╋┃━┫┃┃┏┫┏┫┻┫┏┛<br/>
				┗━┻┻┻━┻━━┻━┻━┻━┻━┻━┻━┻━┻━┻┛<br/>
			</font>
		</div> -->
	</body>
</html>