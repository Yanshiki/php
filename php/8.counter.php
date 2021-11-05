<?php
    session_start();
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;
    #每次重新整理或執行8.counter這個程式，計數器+1
    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=reset_counter.php>重置counter</a>";
    #印出重置counter 按下次超連結會開啟 reset counter php
?>    