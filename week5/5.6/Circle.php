<?php
  class Circle extends test\Shape {
    public $radius;

    public function getArea() {
      return pi() * $this->radius * $this->radius;
    }
  }
?>
