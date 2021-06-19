PHP Constants
----------------
Constants are like variables except that once they are defined they cannot be changed or undefined.

A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

<strong>Note:</strong> Unlike variables, constants are automatically global across the entire script.

Create a PHP Constant
--------------------------
To create a constant, use the define() function.

<h4>Syntax</h4>


<b>define(name, value, case-insensitive)</b>

Parameters:
1. name: Specifies the name of the constant
2. value: Specifies the value of the constant
3. case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false

<h3>Create a constant with a case-sensitive name:</h3>

// <?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?> //