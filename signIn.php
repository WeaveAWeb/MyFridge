<?php
    include "session.php";
    include "dbConnect_login.php";

    $memberId = $_POST['memberId'];
    $memberPw = $_POST['memberPw'];

    $sql = "SELECT * FROM login WHERE id = '{$memberId}' AND pw = '{$memberPw}'";
    $res = $dbConnect->query($sql);

    $row = $res->fetch_array(MYSQLI_ASSOC);

    if ($row != null) {
        $_SESSION['ses_userid'] = $row['id'];
        echo '<script> alert("Welcome, '.$_SESSION['ses_userid'].'");location.href=\'04MyFridge.php\';
       location.replace(link);
       window.open(link);</script>';
    }

    if($row == null){
      echo '<script> alert("Login failed. Check your id and password!");location.href=\'02Login.html\';
     location.replace(link);
     window.open(link);</script>';
    }
?>
