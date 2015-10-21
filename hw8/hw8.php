<!--Задача  1.-->
<!--Сделайте класс User. Создайте в классе публичное свойство firstname и два-->
<!--публичных метода: setFirstName и getFirstName. Создайте экземпляр класса.-->
<!--значение. С помощью экземпляра и метода getName получите текствое значение,-->
<!--сохраненное в свойстве name.-->

<!--Задача 2.-->
<!--В тот же класс User добавьте несколько свойств: lastname, email, phone. Создайте-->
<!--по два публичных метода set и get на каждое свойство по аналогии с предыдущим заданием.-->

<!--Задача 3.-->
<!--Добавьте в класс User конструктор, который принимает в качестве параметров-->
<!--firstname, lastname, email, phone. Каждое свойство сохраните с помощью-->
<!--своей функции set...-->

<!--Задача 4.-->
<!--Добавьте в класс User метод getUserInfo. В методе должен формироваться-->
<!--массив. В качестве ключей должны быть свойства класса: firstname, lastname,-->
<!--email, phone. В качестве значений должны быть значения этих свойств. Значения-->
<!--свойств должны быть получены с помощью функций get... (getFirstName, getLastName и т.д.).-->

<?php

class Junior
{
    public $firstname;

    public $lastname;

    public $email;

    public $phone;

    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->emeil;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function __construct($firstname, $lastname, $email, $phone)
    {
        $this->setFirstName($firstname);
        $this->setLastname($lastname);
        $this->setEmail($email);
        $this->setPhone($phone);
    }

    public function getJuniorInfo()
    {
        $info = array();
        foreach($this as $key=>$value){
            $info[$key] = $value;
        }
        return $info;
    }
}

$junior = new Junior('John', 'Smit', 'johnsmit@mail.ru', '00000000000');
print_r($junior->getJuniorInfo());
?>



<!--Задача 5.-->
<!--Сделайте класс Power, который возводит число в нужную степень (не используя-->
<!--стандартную функцию pow). Класс должен иметь следующие методы: 2, 3, 4, 5 степени.-->

<?php

class Power
{
    public function myPow2($a)
    {
        $result =  $a * $a;
        return $result;
    }

    public function myPow3($a)
    {
        $result = $a * $a * $a;
        return $result;
    }

    public function myPow4($a)
    {
        $result =  $a * $a * $a * $a;
        return $result;
    }

    public function myPow5($a)
    {
        $result = $a * $a * $a * $a * $a;
        return$result;
    }
}

?>

<!--Задача 6.-->
<!--Сделайте класс-калькулятор. Класс должен иметь следующие методы: сложение,-->
<!--вычитание, умножение, деление. Каждый метод должен принимать параметром два числа. -->

<?php

class Calculator
{
    public function myAddition($a, $b)
    {
        $result = $a + $b;
        return $result;
    }


    public function mySubstraction($a, $b)
    {
        $result = $a - $b;
        return $result;
    }

    public function myMultiplication($a, $b)
    {
        $result = $a * $b;
        return $result;
    }

    public function myDivision($a, $b)
    {
        $result = $a / $b;
        return$result;
    }
}
?>

<!--Задача 7.-->
<!--Сделайте класс Sqrt, который извлекает из числа корень нужной степени-->
<!--(используя pow: pow(4, 0.5) – это квадратный корень). Класс должен иметь-->
<!--следующие методы: корни 2, 3, 4, 5 степени.-->

<?php

class Sqrt
{
    public function mySqrt2($x)
    {
        $result = pow($x, 0.5);
        return $result;
    }

    public function mySqrt3($x)
    {
        $result = pow($x, 0.3333);
        return $result;
    }

    public function mySqrt4($x)
    {
        $result = pow($x, 0.25);
        return $result;
    }

    public function mySqrt5($x)
    {
        $result = pow($x, 0.2);
        return $result;
    }

}

?>

<!--Задача 8.-->
<!--Сделайте класс-оболочку над $_SERVER. Класс должен иметь следующие-->
<!--свойства: request_uri, ip, document_root, http_host, http_user_agent, query_string.-->

<?php

class Server
{
    public $request_uri;
    public $ip;
    public $document_root;
    public $http_host;
    public $http_user_agent;
    public $query_string;

    public function serverInfo()
    {
        echo $this->request_uri = $_SERVER['REQUEST_URI'] . "<br>";
        echo $this->ip = $_SERVER['SERVER_ADDR'] . "<br>";
        echo $this->document_root = $_SERVER['DOCUMENT_ROOT'] . "<br>";
        echo $this->http_host = $_SERVER['HTTP_HOST'] . "<br>";
        echo $this->http_user_agent = $_SERVER['HTTP_USER_AGENT'] . "<br>";
        echo $this->query_string = $_SERVER['QUERY_STRING'];
    }


}

?>

<!--Задача 9.-->
<!--Напишите класс-оболочку над cookie. Оболочка должна представлять собой набор-->
<!--функций: сохранение куки, удаление куки, редактирование куки, считывание куки.-->
<!--По умолчанию кука должна устанавливаться на 1 год. -->

<?php

class Cookie
{
//пока размышляю над этой задачей
}

?>

<!--Задача 10.-->
<!--Сделайте класс-валидатор $_REQUEST, $_GET, $_POST. Класс должен иметь-->
<!--private методы обрезание пробелов del_gaps и удаление тегов del_tags (оболочку-->
<!--над стандартными) и public метод protect, который получает массив, обрабатывает-->
<!--его del_gaps и del_tags и возвращает обработанный массив. Класс должен иметь-->
<!--public свойства request, post, get, в которых хранятся соответствующие-->
<!--обработанные массивы. Обработка должна происходить при инициализации-->
<!--класса (то есть в __construct). -->

<?php

class Validator
{
    public $request;

    public $post;

    public $get;

    private function del_tags($a)
    {
        $deltags = strip_tags($a);
        return $deltags;
    }

    private function del_gaps($a)
    {
        $delgaps = trim($a);
        return $delgaps;
    }

    public function protect($a)
    {
        if($a == $_POST && !empty($_POST)){
            $this->post = $this->del_gaps($this->del_tags($_POST));
        }
        if($a == $_GET && !empty($_GET)){
            $this->get = $this->del_gaps($this->del_tags($_GET));
        }
    }

    public function __construct($a)
    {
        $this->protect($a);
    }
}

?>

<!--Задача 11.-->
<!--Напишите оболочку над сессиями. Оболочка должна представлять собой набор-->
<!--функций: сохранение в сессию, считывание из сессии, удаление всех переменных-->
<!--сессии. Сессия должна стартовать в функции __construct.-->

<?php
class Session
{
    public $name;
    public $value;

    public function __construct()
    {
        session_start();
    }

    public function deleteSession()
    {
        session_destroy();
    }

    public function saveSession($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
        $_SESSION[$this->name] = $this->value;
    }

    public function readSession($name)
    {
        print_r($_SESSION[$name]);
    }

}
?>

<!--Задача 12.-->
<!--Напишите класс-сумматор. Класс должен иметь следующие методы: сумма двух-->
<!--чисел, сумма квадратов двух чисел, сумма кубов двух чисел и так далее до 5-той-->
<!--степени. Класс должен наследовать методы возведения в степень от класса Power-->
<!--и иметь public методы суммирования.-->

<?php

class Summator extends Power
{
    public function myAddition1($a, $b)
    {
        $result = $a + $b;
        return $result;
    }

    public function myAddition2($a, $b)
    {
        $result = parent::myPow2($a) + parent::myPow2($b);
        return $result;
    }

    public function myAddition3($a, $b)
    {
        $result = patern::myPow3($a) + parent::myPow3($b);
        return $result;
    }

    public function myAddition4($a, $b)
    {
        $result = parent::myPow4($a) + parent::myPow4($b);
        return $result;
    }

    public function myAddition5($a, $b)
    {
        $result = parent::myPow5($a) + parent::myPow5($b);
        return $result;
    }
}

?>

<!--Задача 13.-->
<!--Сделайте класс-оболочку над БД. Методы класса: получение из базы данных,-->
<!--вставка в базу данных, подсчет количества записей.-->

<?php

class DataBase
{
    function db_connect($hostname = 'localhost', $username = 'root',
                        $password = 'root', $dbname = 'oop_primer', $port = 3306) {
        $connect = mysqli_connect(
            $hostname, $username, $password, $dbname, $port
        );

        return $connect;
    }

    public function addDataBase($tablename, $a, $b, $c, $val1, $val2, $val3)
    {
        $insert = "INSERT INTO $tablename($a, $b, $c) VALUES('$val1', '$val2', '$val3')";

        $query = mysqli_query($insert);
        return $query;
    }

    public function getDataBase($case, $tablename, $a, $val1, $b = '', $val2 = '')
    {
        $select = "SELECT $case FROM $tablename WHERE $a= '$val1' AND $b = '$val2'";

        $query = mysqli_query($select);

        return mysqli_fetch_all($query);
    }

    public function countDataBase($tablename, $count ='*')
    {
        $count = mysqli_query("SELECT COUNT($count) FROM $tablename");
        $result = mysqli_fetch_row($count);
        return $result;
    }
}

?>

<!--Задача 14.-->
<!--Сделайте класс, который подключает внешние файлы к html странице, такие как-->
<!--CSS и JS. Класс должен иметь методы getCss и getJs.-->

<?php

class htmlHref
{
    public function getCSS($file)
    {
        echo "<link href=\"{$file}.css\" rel=\"stylesheet\">";
    }

    public function getJS($file)
    {
        echo "<script src=\"{$file}.js\"></script>";
    }
}

?>

<!--Задача 15.-->
<!--Сделайте класс, который добавляет тег мета на сайт (кодировка, description,-->
<!--keywords).-->

<?php

class MetaTeg
{
    public function getMetaTeg($char, $desc, $key, $cont)
    {
        $meta = "<meta charset=\"{$char}\" description=\"{$desc}\" keywords=\"{$key}\" content=\"{$cont}\">";
        return $meta;
    }
}

?>

<!--Задача 16.-->
<!--Сделайте класс, который создает формы. Класс должен иметь следующие-->
<!--методы: создание и возвращение инпута, создание и возвращение textarea,-->
<!--создание и возвращение селекта, создание и возвращение чекбокса (вместе со-->
<!--скрытым), создание и возвращение radio.
<!--p.s. создание и возвращение - в одномметоде.-->-->

<?php

class Forms
{

    public $input;

    public $textarea;

    public $select;

    public $checkbox;

    public $radio;

    public function setAndGetInput($type, $name, $value, $placeholder)
    {
        $this->input = "<input type=\"{$type}\" name=\"{$name}\" value=\"{$value}\" placeholder=\"{$placeholder}\">";
        return $this->input;
    }

    public function setAndGetTextarea($name, $value,$text = '', $placeholder = '')
    {
        $this->textarea = "<textarea name=\"{$name}\" value=\"{$value}\" placeholder=\"{$placeholder}\">{$text}</textarea>";
        return $this->textarea;
    }

    public function setAndGetSelect($size, $name, $num, $content, $multiple = '')
    {
        $this->select = "<select size=\"{$size}\" name=\"{$name}\" {$multiple}>";
        for($option = 1; $option <= $num; $option++){
            echo "<option>$content</option>";
        }
        echo "</select>";
    }

    public function setAndGetCheckbox($name, $value, $checked = '')
    {
        $this->checkbox = "<input type=\"checkbox\" name=\"{$name}\" value=\"{$value}\" {$checked}>";
        return $this->checkbox;
    }

    public function setAndGetRadio($name, $value, $checked = '')
    {
        $this->radio = "<input type=\"radio\" name=\"{$name}\" value=\"{$value}\" {$checked}>";
        return $this->radio;
    }
}
?>

<!--Задача 17.-->
<!--Сделайте класс, который принимает массив, а возвращает html-таблицу. Класс-->
<!--также должен принимать количество столбцов в этой таблице и сам разбивать-->
<!--массив нужным образом.-->

<?php
class Table
{
    public $arr = array('');

    public function getTable()
    {
        echo "<table border=\"1\" cols=\"10\">";
        foreach($this->arr as $key=>$value){
            for($tr = 1, $rows = count($key); $tr <= $rows; $tr++){
                echo "<tr>";
                for($td = 1, $cols = count($value); $td <= $cols; $td++){
                    echo "<td>$key</td>";
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }

        }
        echo "</table>";
    }
}
?>

<!--Задача 18.-->
<!--Создать абстрактный класс User. У класса есть свойства firstname, lastname, email,-->
<!--phone. Также есть абстрактный метод getUserInfo. Также у класса есть protected-->
<!--методы: setFirstName, setLastName, setEmail, setPhone. Также необходимо-->
<!--реализовать методы get для этих же свойств.-->
<!--Создать класс Patient, который расширяет класс User и реализует метод-->
<!--getUserInfo возвращая массив из значений свойств. Свойства необходимо-->
<!--получать через реализованные методы getFirstName, getLastName и т.д.-->
<!--Данные для свойств устанавливаются через экземпляр класса Patient.-->

<?php

abstract class User
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;

    protected function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }

    protected function getFirstName()
    {
        return $this->firstname;
    }

    protected function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    protected function getLastName()
    {
        return $this->lastname;
    }

    protected function setEmail($email)
    {
        $this->email = $email;
    }

    protected function getEmail()
    {
        return $this->email;
    }

    protected function setPhone($phone)
    {
        $this->phone = $phone;
    }

    protected function getPhone()
    {
        return $this->phone;
    }

    abstract function getUserInfo();
}

class Patient extends User
{
    public function getUserInfo()
    {
        return array(
            'firstname' => $this->getFirstName(),
            'last' => $this->getLastName(),
            'email' => $this->getEmail(),
            'phone' => $this->getPhone(),
        );
    }
}

$info = new Patient();
$info->firstname = 'Alex';
$info->lastname = 'Prim';
$info->email = 'mail@mail.ru';
$info->phone = '123456';

?>