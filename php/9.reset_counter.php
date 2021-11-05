<?php
    session_start();
    unset($_SESSION["counter"]);
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>";
        #重設計數器並且印出  counter重置成功
?>        