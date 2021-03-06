PHP Functions
-------------------
The real power of PHP comes from its functions.

PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.

<h4>PHP Built-in Functions</h4>
PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.

<h4>PHP User Defined Functions</h4>
Besides the built-in PHP functions, it is possible to create your own functions.

1. A function is a block of statements that can be used repeatedly in a program.
2. A function will not execute automatically when a page loads.
3. A function will be executed by a call to the function.

<h4>Create a User Defined Function in PHP</h4>
A user-defined function declaration starts with the word function:

<h3>Syntax</h3>
<pre>
    function functionName() {
    code to be executed;
    }
</pre>

<strong>Note:</strong> A function name must start with a letter or an underscore. Function names are NOT case-sensitive.

PHP Function Arguments
--------------------------
Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.

The following example has a function with one argument ($firstName). When the friendsName() function is called, we also pass along a name (e.g. Sujon), and the name is used inside the function, which outputs several different first names, but an equal last name:

