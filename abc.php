<?php
//Single line comment
# This is also a single line comment
/* Multiple
Line
Comment
*/
echo "<h3><strong>PHP Learning</strong></h3><br><br><br><br>";

/*Data types in PHP
Integer, String, Double, Boolean, Array, Object, Null
*/
$a = 10;
$b = "Hello";
$c = 10.7;
$d = true;
$e = [1,2,3];
$f = null;

echo gettype($a) . " ${a}<br>";
echo gettype($b) . " ${b}<br>";
echo gettype($c) . " ${c}<br>";
echo gettype($d) . " ${d}<br>";
echo gettype($e) . " ${e}<br>";
echo gettype($f) . " ${f}<br><br><br>";

/* PHP string functions
strlen() - Return the Length of a String
str_word_count() - Count Words in a String
strrev() - Reverse a String
strpos() - Search For a Text Within a String
str_replace() - Replace Text Within a String
*/

$str = "Hello World!";
echo strlen("${str}") . "<br>";
echo str_word_count("${str}") . "<br>";
echo strrev("${str}") . "<br>";
echo strpos("${str}","World") . "<br>";
echo str_replace("World","PHP","${str}") . "<br><br><br>";

/* PHP min() and max() Functions
*/
echo max(100,80,60,40,20) . "<br>";
echo min(100,80,60,40,20) . "<br><br><br>";

/* PHP Constant
Syntax: define(name, value, case-insensitive)
Constants are automatically global and can be used across the entire script.
*/
define("FRUIT","Mango");
echo FRUIT . "<br><br>";

/* else elseif
*/

$hour = (int)date("H");
// echo gettype($hour) . " ${hour}<br>";
if($hour<12) {
    echo "Good Morning!" . "<br><br>";
}
elseif($hour>=12 && $hour<17) {
    echo "Good Afternoon!" . "<br><br>";
}
elseif($hour>=17 && $hour<=20) {
    echo "Good Evening!" . "<br><br>";
}
else {
    echo "Good Night!" . "<br><br>";
}

/* Switch Case
Syntax:
    switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    case label3:
        code to be executed if n=label3;
        break;
        ...
    default:
        code to be executed if n is different from all labels;
    }
*/

/* While Loop
*/
$i = 1;
while($i<=10) {
    echo "${i} ";
    $i++;
}
echo "<br><br>";

/* For Loop
*/
for($j=1; $j<=5; $j++) {
    echo "${j} ";
}
echo "<br><br>";

$colors = ["red","green","blue","yellow"];

/* foreach loop
    here variable is written first then the iterator is written
    foreach($variable as $iterator) {

    }
*/

foreach($colors as $color) {
    echo "Color: ${color}<br>";
}
echo "<br><br>";

/* Functions
*/

function add($num1, $num2) {
    return $num1 + $num2;
}
echo add(5,10);
echo "<br><br>";

/* Array
    push(),pop(),
*/
$fruits = ["Apple","Mango","Guava","Orange","Banana"];

array_push($fruits,"Papaya","Pear");

foreach($fruits as $fruit) {
    echo "${fruit} ";
}
echo "<br><br>";
array_pop($fruits);
array_pop($fruits);
array_pop($fruits);

foreach($fruits as $fruit) {
    echo "${fruit} ";
}

echo "<br><br>";

//Reversing an array

$arr = [5,3,7,11,2];

var_dump($arr,"<br>");

$arr = array_reverse($arr);

var_dump($arr,"<br>");
echo "<br><br>";

/*  Associative Arrays
    two ways to assign
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    or,
    $age['Peter'] = "35";
    $age['Ben'] = "37";
    $age['Joe'] = "43";
*/
    $charFrequency= array_fill(0,26,null);

    $text = "programming";

    for($i=0;$i<strlen($text);$i++) {
        $key = ord($text[$i]) - ord('a');
        $charFrequency[$key]++;
    }
    for($i=0;$i<26;$i++) {
        if($charFrequency[$i]>0) {
            $key = (ord('a') + ord($i));
            echo $key . ": " . $charFrequency[$i] . "<br>";
        }
    }
    echo "<br><br>";
/* Classes and Objects
*/
class Fruit {
    public $name,$color,$quantity;
    
    public function __construct($name) {
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }
}

$apple= new Fruit("Apple");
$banana = new Fruit("Banana");

echo $apple->get_name() . "<br>";
echo $banana->get_name() . "<br>";

class Strawberry extends Fruit {
    function message() {
      echo "Am I a fruit or a berry? <br>";
    }
}

$strawberry = new Strawberry("Strawberry");

echo $strawberry->message();
echo $strawberry->get_name();

echo "<br><br>";

class User {
    private $password;
    public $name, $email;
    
    public function __construct($name,$email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function get_name() {
        return $this->name;
    }
}

$user1 = new User("John","john@email.com");

$user2 = new User("Jim","jim@email.com");

echo $user1->get_name() . "<br>";
echo $user2->get_name() . "<br>";

class adminUser extends User {
    public $level, $isAdmin = true;
    public function __construct($name,$email,$level,$isAdmin) {
        // echo "Contructor of adminUser running...<br>";
        $this->level = $level;
        $this->isAdmin = $isAdmin;
        if($level===0) $this->isAdmin = false;
        parent::__construct($name,$email);
    }
    public function get_details() {
        echo "Name: $this->name, Email: $this->email, Level: $this->level ";
        if($this->isAdmin) {
            echo ", User is Admin.<br>";
        }
        else {
            echo ", User is not Admin.<br>";
        }
    }
}

$user3 = new adminUser("Tim","tim@email.com",5,true);
$user3->get_details();

echo "<br><br>";

class A {
    private $num1;
    protected $num2;
    public $num3;
    function __construct($n1,$n2,$n3) {
        $this->num1 = $n1;
        $this->num2 = $n2;
        $this->num3 = $n3;
    }
    function display_values() {
        echo "num1= $this->num1, num2= $this->num2, num3= $this->num3 <br><br>";
    }
}

class B extends A {
    function __construct($n1,$n2,$n3) {
        parent::__construct($n1,$n2,$n3);
    }
    function update() {
        $this->num1*=2; // not able to access num1 as it is private
        $this->num2*=2; // protected can be accessed only in child class
        $this->num3*=2; // public can be accessed outside class
    }
}

$obj1 = new A(5,7,9);
echo "obj1:<br>";
$obj1->display_values();

$obj2 = new B(16,24,32);
echo "obj2:<br>";
$obj2->display_values();

$obj2->update();
echo "obj2:<br>";
$obj2->display_values();

// $obj2->num1*=2;
// $obj2->num2*=2;
$obj2->num3*=2; //can use num3 only outside class as it is public
echo "obj2:<br>";
$obj2->display_values();

/* Constants in class
*/
class Abc {
    const MESSAGE= "THIS IS A CONSTANT STRING";
}
echo Abc::MESSAGE . "<br><br>";

/* Abstract Class
*/
abstract class Remote {
    public $remoteName;
    public function __construct($remoteName) {
        $this->remoteName = $remoteName;
    }
    abstract public function displayRemoteType();
}

class TV_Remote extends Remote {
    public function displayRemoteType() {
        echo "This $this->remoteName is a TV remote. <br><br>";
    }
}

class AC_Remote extends Remote {
    public function displayRemoteType() {
        echo "This $this->remoteName is a AC remote. <br><br>";
    }
}

$remoteAC1 = new AC_remote("Remote 1");
$remoteTV1 = new TV_remote("Remote 2");

$remoteAC1->displayRemoteType();
$remoteTV1->displayRemoteType();

print_r("\n\n");



trait morning_greetings{

    function greetings_m() {
        echo "Good Morning<br>";
    }
}
    
trait afternoon_greetings {
    function greetings_af(){
        echo "Good Afternoon<br>";
    }
}
    
trait evening_greetings {

    function greetings_eve() {
        echo "Good Evening<br>";
    }
}
    
trait night_greetings {
    
    function greetings_n() {
        echo "Good Night<br>";
    }
}
    
        
class Greet {
    use morning_greetings; use afternoon_greetings;
    use evening_greetings; use night_greetings;
    
    public $day;
    
    function __construct($day) {
        $this->day = $day;
        
    }
    
    function show() {
        // print_r("In show function...\n");
        switch($this->day) {
        
            case "Monday":
                $this->greetings_m();
                break;
        
            case "Tuesday":
                $this->greetings_af();
                break;
            case "Wednesday":
                $this->greetings_eve();
                break;
            default: 
                echo "Ok Bye";
        }    
    }    
}
    
       
$gt1 = new Greet("Monday");
$gt2 = new Greet("Tuesday");
$gt3 = new Greet("Wednesday");
$gt1->show();
$gt2->show();
$gt3->show();
?>