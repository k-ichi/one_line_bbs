<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="{$config.url}css/ethna.css" type="text/css" />
</head>
<body>

<div id="header">
    <h1>Test</h1>
</div>

<div id="main">
    <h2>Index Page</h2>
    <p>hello, world!</p>
</div>

<div id="footer">
    Powered By <a href="http://ethna.jp">Ethna</a>-{$smarty.const.ETHNA_VERSION}.
</div>

<p>
 {form ethna_action="index_test"}
  <input type="text" name="example2" size="30" maxlength="30" value="サンプル">
 {/form}
</p>

</body>
</html>
