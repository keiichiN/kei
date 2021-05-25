<?php
echo 'Hello php!';

$name ="keiichi";
if($name = "keiichi"){
  echo "私はあなたの名前です";
}else {
  "あなたの名前ではありません。";
}

$total=0;
for ($a=0;$a<=1000;$a++){
  $total += $a;
  }
  echo $total;
  
$fruits = array("バナナ","キウイ","りんご","いちご","パイン");
foreach ($fruits as $fruit){
  echo "好きな果物は". $fruit;
}

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
  }
}