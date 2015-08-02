<?php 
class Dog {
	public $name; 
	public $color;
	private $data = array();
	public function __construct($name, $color) {
		$this->name = $name;
		$this->color = $color;
	}
	public function __set($name, $value) {
		$this->data[$name] = $value;	
	}
	public function __get($key) {
		return $this->data[$key];
	}

    public function __call($name, $arguments) {
        var_dump($name);
        var_dump($arguments);
    }

    public static function __callStatic($name, $arguments) {
        var_dump($name);
        var_dump($arguments);
    }

	public function bark() {
		echo "Bark!";
	}
	public static function warning() {
		echo "Dog Bite!";
	}
}

Dog::run("Pyay", 300);

$dog = new Dog("Aung Net", "Red");
$dog->test = "Testing";
$dog->goo = "Foo";
echo $dog->test;
echo $dog->goo;



$dog->dance("Aung Net", 4);


?>