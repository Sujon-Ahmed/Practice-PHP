PHP Constants
----------------
Constants are like variables except that once they are defined they cannot be changed or undefined.

A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

<strong>Note:</strong> Unlike variables, constants are automatically global across the entire script.

Create a PHP Constant
--------------------------
To create a constant, use the define() function.

<h3>Syntax</h3>


<b>define(name, value, case-insensitive)</b>

Parameters:
1. name: Specifies the name of the constant
2. value: Specifies the value of the constant
3. case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false

<h3>Create a constant with a case-sensitive name:</h3>

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

<h3>Create a constant with a case-insensitive name:</h3>
define("GREETING", "Welcome to W3Schools.com!",true);
echo GREETING;

PHP Constant Arrays
--------------------
In PHP7, you can create an Array constant using the define() function.

define("GREETING",['HI','Hello','Hola']);
echo GREETING[1];

Constants are Global
-------------------------
Constants are automatically global and can be used across the entire script.

define("GREETING","Hi There!");
function myFun(){
    echo GREETING;
}
myFun();