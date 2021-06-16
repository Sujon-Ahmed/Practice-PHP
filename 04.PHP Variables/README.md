PHP Variables
--------------
A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

Rules for PHP variables:
1. A variable starts with the $ sign, followed by the name of the variable
2. A variable name must start with a letter or the underscore character
3. A variable name cannot start with a number
4. A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
5. Variable names are case-sensitive ($age and $AGE are two different variables)

Note : Remember that PHP variable names are case-sensitive!

PHP Variables Scope
--------------------
In PHP, variables can be declared anywhere in the script.
The scope of a variable is the part of the script where the variable can be referenced/used.
PHP has three different variable scopes:

1. local
2. global
3. static

Global Scope
--------------
A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function

Local Scope
------------------
A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function