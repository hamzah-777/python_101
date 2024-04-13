<pre>++++nested functions
-- you can nest function declarations, but with limited effect
-- nested declarations do not limit the visibility of the inner-defined function which may be called from anywhere in your program.
-- the inner function does not automatically get the outer functions arguments
-- and finally, the inner function cannot be called until the outer function has been called, and also cannot be called from code parsed after the outer function</pre>


<pre>++++scope of variables
=== local variables
-when variable is declared inside a function
-its visibility is limited inside the function body only

=== global fariables
-when variable is declared outside a function
 'global' keyworkd makes it accessible inside a function

=== static variables
-whenever you want to retain the value of a variable across the function calls
-the latest value in precious function call is used as initial value in next function call</pre>