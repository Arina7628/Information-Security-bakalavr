<!DOCTYPE html PUBLIC "–//W3C//DTD HTML 4.01//EN">
<html><head>
<meta http–equiv="Content–Type" content="text/html; charset=Windows–1251" /><title>Тест на PHP</title>
</head><body>
<h3>Тест на PHP</h3>
<select>
<?php

$city = array('1' => "Абаза", '2' => "Абакан", '3' => "Абдулино", '4' => "Абинск", '5' => "Агидель", '6' => "Агрыз",

'7' => "Адыгейск", '8' => "Азнакаево", '9' => "Азов", '10' => "Ак-Довурак", '11' => "Аксай", '12' => "Алагир",

'13' => "Алапаевск", '14' => "Алатырь", '15' => "Алдан", '16' => "Алейск", '17' => "Александров", '18' => "Александровск",

'19' => "Александровск-Сахалинский", '20' => "Алексеевка", '21' => "Алексин", '22' => "Алзамай", '23' => "Алупка",

'24' => "Алушта", '25' => "Альметьевск", '26' => "Амурск", '27' => "Анадырь", '28' => "Анапа", '29' => "Ангарск",

'30' => "Андреаполь", '31' => "Анжеро-Судженск", '32' => "Анива", '33' => "Апатиты", '34' => "Апрелевка",

'35' => "Апшеронск", '36' => "Арамиль", '37' => "Аргун", '38' => "Ардатов", '39' => "Ардон", '40' => "Арзамас",

'41' => "Аркадак", '42' => "Армавир", '43' => "Армянск", '44' => "Арсеньев", '45' => "Арск", '46' => "Артём",

'47' => "Артёмовск", '48' => "Артёмовский", '49' => "Архангельск", '50' => "Асбест");

for ($i = 0; $i < count($city); $i++)

{

echo "<option>$city[$i]</option>";

}



?>
</select>
</body></html>