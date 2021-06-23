<?php
    include "../vendor/autoload.php";
    use \Hongmeng\Hongmeng;
    if (!function_exists('blockhtml')) {
      function blockhtml($fun,$newfun) {
          if(function_exists($fun)){
              $fun();
          }else{
              $newfun();
          }
      }
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <?php
    blockhtml("head",function(){
        ?>
        <p>默认头部</p>
        <?php
    })
     ?>
  <?php
    blockhtml("content",function(){
        ?>
        <p>默认内容</p>
        <?php
    })
     ?>
  <?php
    blockhtml("footer",function(){
        ?>
        <p>默认底部</p>
        <?php
    })
     ?>
</body>
</html>
<?php
Hongmeng::showScripts();