<?php
show_source(__FILE__);
error_reporting(0);
$cmd=$_POST['cmd'];
if(!preg_match('/t|f|l|a|g|\*|\?/i', $cmd)){
    echo shell_exec($cmd);
}else{
exit("不是哥们");}