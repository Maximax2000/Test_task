<?php
  header("Content-Type: application/json");
  $data = json_decode(file_get_contents('php://input'));

  $name = $data -> name;
  $second_name = $data -> second_name;

    $employs = array(
    "Иван Попов директор",
    "Алиса Чехова директор",
    "Арсен Хуснутдинов разработчик",
    "Анастасия Григорьева разработчик",
    "Ксения Хорошева дизайнер",
    "Илья Ильин дизайнер"
  );

  for($i = 0; $i < count($employs); $i++){
    $elements = (explode(' ', $employs[$i], 3));
    if($elements[0] == $name && $elements[1] == $second_name){
      echo "Должность: " . $elements[2];
    }
  }
?>