<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php 배열</title>
</head>
<body>
  <h1>배열</h1>
  <pre>
    $배열명 = array();
    $배열명[0] = 값
    echo $배열명[0];
  </pre>
  <?php
    $langs = array(); // 빈배열 생성
    $langs[0] = 'html';
    $langs[1] = 'css';
    $langs[2] = 'javascript';
    echo $langs[0];
    var_dump($langs[0]);
  ?>
  <hr>
  <pre>
    $배열명 = array(값,값,값);
    php 값유무 함수
    isset(대상) // 대상의 값이 있는지 .. true,false
    
    배열의 개수
    count(배열명)
  </pre>
  <?php
    $backs = array('php','asp','jsp');
    echo count($backs);

    if(isset($backs[3])){
      echo $backs[3];
    }else {
      echo '$backs라는 배열에는 인덱스 3번째 값이 없다';
    }
  ?>
  <hr>
  <pre>
    for(초기값; 조건; 증감){
      반복할일
    }
  </pre>
  <ul>
    <!-- <li>html</li>
    <li>css</li>
    <li>javascript</li> -->
    <?php
    for( $i = 0; $i < count($langs); $i++){
      echo '<li>'.$langs[$i].'</li>';
    }
    ?>
  </ul>
  <hr>
  <h2>foreach</h2>
  <pre>
    foreach(배열명 as 각원소를 대변할 변수명){
      할일
    }
  </pre>
  <?php
    foreach($langs as $lang){
      echo '<li>'.$lang.'</li>';
    }
  ?>
  <h2>연관 배열(associative array)</h2>
  <pre>
    배열명 = array(); // 빈배열 생성
    배열명['키'] = '값'
    배열명['키'] = '값'
    배열명['키'] = '값'

    foreach(배열명 as )
  </pre>
  <?php
    $fronts = array();
    $fronts['html'] = 1; 
    $fronts['css'] = 2;
    $fronts['javascript'] = 3;
    echo $fronts['html'];
    // echo $fronts[0];  // 불가
  ?>
  <hr>
  <?php
  // html은 난이도 1입니다.
    foreach($fronts as $front){
      echo '<li>'.$front.'</li>';
    }
  ?>
  <hr>
  <?php
  // html은 난이도 1입니다.
    foreach($fronts as $key => $front){
      echo '<li>'.$key.$front.'</li>';
      echo '<li>'.$key.'은 난이도' .$front.'입니다</li>';
    }
  ?>
  <hr>
  <h2>값 출력</h2>
  <?php
    echo $langs[0];
    var_dump($langs); // 원형
    print_r($langs); // 인간친화적
    print_r($fronts); // 인간친화적
  ?>
  <pre>
  <?php
    print_r($langs); // 인간친화적
    print_r($fronts); // 인간친화적
  ?>
  </pre>
</body>
</html>