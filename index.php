
<?php
echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Document</title>
</head>
<body>";
    
$i = 1;

while ($i<100) {
    if ($i % 3 == 0) {
        echo "$i ";
    }
    $i++;
}

echo "<br>";
    
$i = 0;

do{
    echo "$i - ";
    if ($i % 2 == 0) {
        if ($i == 0) {
            echo "ноль <br>";
        } else {
            echo "четное число <br>";
        }
    } else {
        echo "нечетное число <br>";
    }
    $i++;
} while ($i <= 10);


$arr = [ 
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Республика Коми' => ['Сыктывкар', 'Ухта', 'Емва']
];

var_dump ($arr);
echo "<br>";
$tr = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'j',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',
    'ц' => 'ts',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shch',
    'ъ' => '',
    'ы' => 'y',
    'ь' => '',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya'
];

$str = "мама мыла раму";
echo $str;
$strArr = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
$trans = "";
echo "<br>";
echo var_dump ($strArr);
echo "<br>";
foreach ($strArr as $key => $value) {
    if ($value == ' ') {
        $trans = $trans . ' ';
    } else {
        $trans = $trans . $tr[$value];
    }
}

echo $trans;
echo "<br>";

$podch = "";
foreach ($strArr as $key => $value) {
    if ($value == ' ') {
        $podch = $podch . '_';
    } else {
        $podch = $podch . $value;
    }
}

echo $podch;
echo "<br>";

$menu2 = [
	[
		'title' => 'Главная',
		'link' => '/'
	],
	[
		'title' => 'Контакты',
		'link' => '/contancts'
	]
];

echo "<ul>";
foreach ($menu2 as $key => $value) {
    echo "<li><a href=" . $value['link']."></a>" . $value['title'] . "</li>";
}
echo "</ul>";

for ($i = 0; $i < 10; print $i++){};

echo "</body>
</html>";