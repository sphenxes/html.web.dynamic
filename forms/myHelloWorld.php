<html>
<head>
	<title>HelloWorld OOP</title>
</head>

<body>
<h1>HelloWorld - OOP</h1>
<?php

class myHelloWorld{

	public $hello="hello";

	public function helloWorld(){
		$helloWorlds = $this->hello;
		return $helloWorlds;

	}

$hi = new myHelloWorld();

$test= $hi -> $helloWorld();
print $test;

}


?>

</body>
</html>
