<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>8 level</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="apple-mobile-web-app-status-bar-style" content="black"> 
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="format-detection" content="telephone=no">
  <meta HTTP-EQUIV="pragma" CONTENT="no-cache"> 
  <meta HTTP-EQUIV="Cache-Control" CONTENT="no-store, must-revalidate"> 
  <meta HTTP-EQUIV="expires" CONTENT="0">
</head>
<body>
<form method="get" action="">
    <input type='text' name='name' placeholder="这个页面的编写语言"/>
    <input type='hidden' name='key' value="key:5oiW6K645piv56ys5Zub5Liqa2V5"/>
    <input type = 'submit' value="提交"/>
</form>
<script>
window.onload = ()=>{
  document.querySelector('input[type="text"]').focus();
}
</script>
<?php
  if($_GET["name"]=='php'){
    echo '<div>恭喜你通关了,记得仰望一下</div>';
  }
  else{
    if(!empty($_GET["name"]))
      echo '<div>大哥们儿，再想想吧</div>';
  }
?>
</body>
</html>