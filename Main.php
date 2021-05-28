<?php
session_start();

// ログイン状態チェック
if (!isset($_SESSION["NAME"])) {
	header("Location: Logout.php");
	exit;
}

?>

<!doctype html>
<html>
	<html lang="jp">
	<head>
		<meta charset="utf-8">
		<title>ZZU-Chat</title>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="./chat.js"></script>

		<link href="./chat.css" rel="stylesheet">
 	</head>
 
	<body>
		<!-- ユーザーIDにHTMLタグが含まれても良いようにエスケープする -->
		<p>ようこそ<u><?php echo htmlspecialchars($_SESSION["NAME"], ENT_QUOTES); ?></u>さん</p>  <!-- ユーザー名をechoで表示 --> <!-- uタグはアンダーバー -->
		<p>ZZUチャットです。PHP/Javascript[jQuery/Ajax]で動いています</p>
		<p></p>
 		<form method="post" onsubmit="writeMessage(); return false;">
			<input id="message" name="message" type="text" value="" />
			<input type="button" value="送信" onclick="writeMessage()">
		</form>
 		<div id="messageTextBox"></div>
		<ul>  <!-- ・をのついたものをひとかたまりにまとめる -->
			<li><a href="Logout.php">ログアウト</a></li>  <!-- ・をつける -->
		</ul>
	</body>
</html>
