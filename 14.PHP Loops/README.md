PHP Loops
-----------------
Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.

Loops are used to execute the same block of code again and again, as long as a certain condition is true.

In PHP, we have the following loop types:

    1. while - loops through a block of code as long as the specified condition is true
    2. do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
    3. for - loops through a block of code a specified number of times
    4. foreach - loops through a block of code for each element in an array

The PHP While Loop
-------------------
The while loop executes a block of code as long as the specified condition is true.

<h3>Syntax</h3>
<pre>
    while (condition is true) {
    code to be executed;
    }
</pre>

The PHP do...while Loop
---------------------------
The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.

<h3>Syntax</h3>
<pre>
    do {
    code to be executed;
    } while (condition is true);
</pre>

The PHP for Loop
---------------------
The for loop is used when you know in advance how many times the script should run.

<h3>Syntax</h3>
<pre>
    for (init counter; test counter; increment counter) {
    code to be executed for each iteration;
    }
</pre>

Parameters:

    1. init counter: Initialize the loop counter value
    2. test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
    3. increment counter: Increases the loop counter value