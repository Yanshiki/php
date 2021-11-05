<?php
    session_start();
    unset($_SESSION["id"]); #清除session
    echo "登出成功....";    #印出登出成功
    echo "<meta http-equiv=REFRESH content='3; url=login.html'>";   #跳轉到login.html

?>