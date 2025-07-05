<?php

/**
 * AUTOLOAD is defined outside of the class, not inside like construct, destruct, or clone methods (Defined as a non-class function).
 * - Called whenever PHP encounters a class it doesn't know about before it throws and gives up an error.
 * - Gives opportunity to include or require appropriate file for that class
 */

//  function __autoload($class_name) {
//     echo "Definition for {$class_name} is missing!";
//  }

//  $dog = new Pet();

/**
 * WARNING
 * The __autoload() function is deprecated as of PHP 7.2.0 and removed in PHP 8.0.0. It is no longer recommended for use.
 * Use spl_autoload_register() instead, which is the modern and flexible way to implement autoloading in PHP.
 */


 /**
  * It is less common to use autoload to locate appropriate files for the class.
  * It is more common to load in libraries of code that other developers created.
  * There code could be using autoload as well.
  * This is a root level function and PHP does not allow you to redefine root level functions.
  * The solution is to write a functon to call for autoloading and then register that with PHP.
  * Creates a queue of different autoloads by your code and other developer codes.
  */

function my_autoload($class_name) {
    if (preg_match('/\A\w+\Z/', $class_name)) { // [Security check for word letters] Checking that the class name contains legal characters
        include 'classes/' . $class_name . '.class.php';
    }
}

spl_autoload_register('my_autoload');
$dog = new Pet();

/**
 * 2 ways to use autoload
 * - Safety net
 * - Use to conserve memory (only use classes as needed)
 */


?>