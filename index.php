<?php
function head(){
  ?>
  <p>自定义头部</p>
  <?php
}
function content(){
  ?>
  <p>自定义内容</p>
  <?php
  include "./components/comp.php";
  comp();
}
include "./base.php";