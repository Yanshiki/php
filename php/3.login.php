<?php 
    if (($_POST[id] == "john") && ($_POST[pwd]=="john1234"))
        echo "Welcome";
    else
        echo "fail login";        #如果輸入的帳號是john而且密碼為john12341，印出 welcome。否則印出 fall login
?>
