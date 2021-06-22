What is an Array?
--------------------
An array is a special variable, which can hold more than one value at a time.

If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:

<pre>
$cars1 = "Volvo";
$cars2 = "BMW";
$cars3 = "Toyota";
</pre>

However, what if you want to loop through the cars and find a specific one? And what if you had not 3 cars, but 300?

The solution is to create an array!

An array can hold many values under a single name, and you can access the values by referring to an index number.

Create an Array in PHP
--------------------------
In PHP, the array() function is used to create an array:
<pre>
array();
</pre>

In PHP, there are three types of arrays:

1. <strong>Indexed arrays</strong> - Arrays with a numeric index
2. <strong>Associative arrays</strong> - Arrays with named keys
3. <strong>Multidimensional arrays</strong> - Arrays containing one or more arrays