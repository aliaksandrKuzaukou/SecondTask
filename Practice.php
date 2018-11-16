<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>1. При помощи цикла for выведите все нечетные числа от 1 до 50;</h2>
    <br/>
    <?php
        for($i=1;$i<50;$i++){
            if($i%2 !=0){
                echo $i;
                echo "\n";
            }
        }
    ?>
    <br>
    <h2>2. При помощи цикла while вывести список категорий. Результат Категория 1, Категория 2, и т.д.;</h2>
        <?php
        $category=1;
            while ($category<=10){
                echo "Категория ";
                echo $category;
                echo "<br/>";
                $category++;
            }
        ?>
    <br>
    <h2>3. При помощи цикла foreach вывести список категорий. Результат Категория 1, Категория 2, и т.д.;</h2>
        <?php
            $array=array("Категория 1","Категория 2","Категория 3","Категория 4","Категория 5","Категория 6","Категория 7");
            foreach ($array as $c){
                echo $c;
                echo "<br/>";
            }
        ?>
    <h2>Написать скрипт вывода формы, в котором задействовать подключение конструкци require_once;</h2>
    <?php

        require 'example.html';
        require_once 'example.html';
    ?>
        <h2>Задача. Переменная $lang может принимать два значения: 'ru' и 'en'.</h2>
        <?php

            $daysOfWeekArrayRu =array('Понедельник','Вторник', 'Среда','Четверг','Пятница','Суббота','Воскресенье');
            $daysOfWeekArrayEn=array('Monday','Tuesday','Wensday','Thursday','Friday','Saturday','Sunday');
            $lang='ru';
            if($lang=='ru'){
                foreach ($daysOfWeekArrayRu as $value){
                    echo $value."<br/>";
                }
            }
            if ($lang == 'en'){
                foreach ($daysOfWeekArrayEn as $value){
                    echo $value."<br/>";
                }
            }
            echo '<h2>USING SWITCH-CASE WITHOUT FOREACH()<h2/>'.'<br/>';

                switch ($lang){
                    case "ru":  foreach ($daysOfWeekArrayRu as $value){
                        echo $value."<br/>";
                    } ;break;


                    case "en":
                        foreach ($daysOfWeekArrayEn as $value){
                            echo $value."<br/>";
                        }break;


                    default :
                        echo 'CHOSE YOUR LANGUAGE';
                }

        ?>
</body>
</html>