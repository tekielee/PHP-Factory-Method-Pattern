<?php
class Rectangle {
	function __construct() {}
	
	public function draw(): void {
		echo 'Inside Rectangle::draw() method.<br/>';
	}
}

class Square {
	function __construct() {}
	
	public function draw(): void {
		echo 'Inside Square::draw() method.<br/>';
	}
}

class Circle {
	function __construct() {}
	
	public function draw(): void {
		echo 'Inside Circle::draw() method.<br/>';
	}
}

class ShapeFactory {
	function __construct() {}
	
	public function getShape(string $shapeType): ?object {
		if($shapeType == null) {
			return null;
		}
		
		if($shapeType == 'CIRCLE') {
			return new Circle();
		} else if ($shapeType == 'RECTANGLE') {
			return new Rectangle();
		} else if ($shapeType == 'SQUARE') {
			return new Square();
		}
		
		return null;
	}
}

$shapeFactory = new ShapeFactory();
$shape1 = $shapeFactory->getShape('CIRCLE');
$shape1->draw();
$shape2 = $shapeFactory->getShape('RECTANGLE');
$shape2->draw();
$shape3 = $shapeFactory->getShape('SQUARE');
$shape3->draw();
?>