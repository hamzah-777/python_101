<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h1>PHP Regular Expressions - notes from w3 school</h1>
<pre>A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, 
	you can use this search pattern to describe what you are searching for.
A regular expression can be a single character, or a more complicated pattern.
Regular expressions can be used to perform all types of text search and text replace operations.</pre>

<h2>Syntax</h2>
<b>In PHP, regular expressions are strings composed of delimiters, a pattern and optional modifiers.</b>
<pre>
$exp = "/w3schools/i";
here.. / is the "delimiter". w3schools is "pattern" . i is a "modifier" that makes search case-insensitive.
delimiter can be any character that is NOT [letter, number, backslash or space]
prefred: / , # , ~ (which ever we use must not be part of search pattern)
</pre>

<h2>Regular expression functions</h2>
<b>preg_match(), preg_match_all() and preg_replace()</b>
<pre>preg_match()	Returns 1 if the pattern was found in the string and 0 if not
preg_match_all()	Returns the number of times the pattern was found in the string, which may also be 0
preg_replace()	Returns a new string where matched patterns have been replaced with another string</pre>

<h2>Regular Expression Modifiers</h2>
<b>Modifiers can change how a search is performed.</b>
<pre>i	Performs a case-insensitive search
m	Performs a multiline search (patterns that search for the beginning or end of a string will match 
	the beginning or end of each line)
u	Enables correct matching of UTF-8 encoded patterns</pre>

<h2>Regular Expression Patterns</h2>
<b>Brackets are used to find a range of characters:</b>
<pre>[abc]	Find one character from the options between the brackets
[^abc]	Find any character NOT between the brackets
[0-9]	Find one character from the range 0 to 9
[a-z]
[A-Z]</pre>

<h2>Metacharacters</h2>
<b>Metacharacters are characters with a special meaning:</b>
<pre>|	Find a match for any one of the patterns separated by | as in: cat|dog|fish
.	Find just one instance of any character
^	Finds a match as the beginning of a string as in: ^Hello
$	Finds a match at the end of the string as in: World$
\d	Find a digit
\s	Find a whitespace character
\b	Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b
\uxxxx	Find the Unicode character specified by the hexadecimal number xxxx</pre>

<h2>Quantifiers(Quantifiers define quantities:)</h2>
<pre>n+	Matches any string that contains at least one n
n*	Matches any string that contains zero or more occurrences of n
n?	Matches any string that contains zero or one occurrences of n
n{x}	Matches any string that contains a sequence of X n's
n{x,y}	Matches any string that contains a sequence of X to Y n's
n{x,}	Matches any string that contains a sequence of at least X n's</pre>

<pre>Note: If your expression needs to search for one of the special characters you can use a backslash ( \ ) to escape them. 
For example, to search for one or more question marks you can use the following expression: $pattern = '/\?+/';</pre>

<h2>Grouping</h2>
<b>You can use parentheses ( ) to apply quantifiers to entire patterns. 
They also can be used to select parts of the pattern to be used as a match.</b>
<pre>$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str); // Outputs 1</pre>



<br><br><br><br><hr>