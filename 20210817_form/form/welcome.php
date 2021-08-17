<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- index.html?name=한성용&email=hanyong5@naver.com -->
    <?
    echo $_GET["name"];
    echo $_GET["email"];
    ?>
    <h2>안녕하세요. <? echo $_GET["name"]; ?> 님 만나서 반갑습니다.</h2>
</body>
</html>