<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Request</title>
</head>
<body>
  <h1>회원가입 완료</h1>
  <!-- 
    홍길동님 hong@abc.com 주소로 회원가입을 완료 했습니다.
   -->
  <?php
  // print_r($_POST);  $_ 초글러벌 변수 다른어떤 페이지에서도 변수를 가져올수 있음
  echo "{$_POST['username']}님 {$_POST['useremail']} 주소로 회원가입을 완료 했습니다.";
  ?>
</body>
</html>