<!DOCTYPE html> 
<html lang ="ja"> 
<head>
<title>top</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="/test/css/ethna.css" type="text/css" />
</head>
    <body>
        <h1 class="color:red;">テスト１行掲示板</h1>
		<p>
			{form ethna_action="bbs"}
			<input type="text" name="tag" value="tag" />
			<input type="text" name="description" value="ひとこと" />
			<input type="submit" value="投稿" />
			{/form} 
		</p>
		<h2></h2>
    </body>
</html>

