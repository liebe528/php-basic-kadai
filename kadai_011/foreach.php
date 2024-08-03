<?php
// 連想配列
$food_data1 = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

foreach ($food_data1 as $key => $value) {
  echo "{$key}：{$value}<br>";
}
?>