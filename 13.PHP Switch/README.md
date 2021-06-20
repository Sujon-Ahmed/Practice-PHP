The PHP switch Statement
--------------------------
Use the switch statement to <strong>select one of many blocks of code to be executed</strong>.

<h3>Syntax:</h3>
<pre>
switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
}
</pre>

This is how it works: First we have a single expression n (most often a variable), that is evaluated once. The value of the expression is then compared with the values for each case in the structure. If there is a match, the block of code associated with that case is executed. Use <strong>break</strong> to prevent the code from running into the next case automatically. The <strong>default</strong> statement is used if no match is found.