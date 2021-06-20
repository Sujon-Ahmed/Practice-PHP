PHP Conditional Statements
------------------------------
Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

01. if statement - executes some code if one condition is true
02. if...else statement - executes some code if a condition is true and another code if that condition is false
03. if...elseif...else statement - executes different codes for more than two conditions
04. switch statement - selects one of many blocks of code to be executed

PHP - The if Statement
-----------------------
The if statement executes some code if one condition is true.

<h3>Syntax</h3>
<pre>
if (condition) {
  code to be executed if condition is true;
}
</pre>


PHP - The if...else Statement
----------------------------------
The if...else statement executes some code if a condition is true and another code if that condition is false.

<h3>Syntax</h3>
<pre>
if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
}
</pre>

PHP - The if...elseif...else Statement
----------------------------------------
The if...elseif...else statement executes different codes for more than two conditions.

<h3>Syntax</h3>
<pre>
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
}
</pre>