<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE; #如果資料吻合則 login=true
     }
   } 
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "welcome!!";
    echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
   }

  else{
    echo "id/pwd wrong!!";
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
  }
  #如果login=true,印出welocome,跳轉到bulletin php，否則印出id/pwd wrong,並跳轉到 login pshp
?>