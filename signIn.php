<?php
    include "session.php";
    include "dbConnect.php";

    $memberId = $_POST['memberId'];
    $memberPw = $_POST['memberPw'];

    $sql = "SELECT * FROM login WHERE id = '{$memberId}' AND pw = '{$memberPw}'";
    $res = $dbConnect->query($sql);

    $row = $res->fetch_array(MYSQLI_ASSOC);

    if ($row != null) {
        $_SESSION['ses_userid'] = $row['id'];
        echo $_SESSION['ses_userid'].'님 안녕하세요';
        echo '<a href="signOut.php">로그아웃 하기</a>';
    }

    if($row == null){
        echo '로그인 실패 아이디와 비밀번호가 일치하지 않습니다.';
    }
?>
