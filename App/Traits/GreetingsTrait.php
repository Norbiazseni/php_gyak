<?php

    namespace App\Traits


    trait GreetingTrait{
        public function greet($name="Guest")
        {
            return "hello {$name}";
        }
    }

?>