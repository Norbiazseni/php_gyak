<?php

namespace App\Traits;

trait GreetingTrait {
    public function sayHello($name = "Guest") {
        echo "Hello, $name!";
    }
}
?>