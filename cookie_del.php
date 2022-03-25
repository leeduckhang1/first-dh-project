<?php
$cookieName = 'city';
$cookieValue = 'Seoul';

setcookie($cookieName, $cookieValue, time()-60, '/');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쿠키 삭제</title>
</head>
<body>
    <?php
    echo $cookieName.'의 쿠키가 삭제되었습니다.';
    echo '생성된 값은'. $_COOKIE[$cookieName].'입니다.';
    
    ?>
</body>
</html>