<a href="./"><h2>GO back to LPU FOLDER</h1></a>

<h1>Ways to rep String literelals</h1>

<p>Advice: use least powerful quoting machanism: SINGLE QUUOTED unless you want to include escape sequences or INTERPOLATE variables - where use DOUBLE QUOTE. <br>Multiple lines? use 'heredoc'</p>

<p>Interpolation is the process of replacing variable names in the string with the values of those variables</p>


<b><? 
$name = 'John';

//simple way
echo "Hello Mr. $name WELCOME!<br>";

//complex way
echo "Hello Mr. {$name} WELCOME!<br>";

//single quote doesn't support interpolation
echo 'Hello Mr. $name WELCOME!<br>';
?></b>


<h3>Single-Quoted Strings</h3>
<p> It doesn't support interpolation. only supported escape seqences are for single quote & backslash printing</p>
<xmp>\' to print single quote.
\\ to print single backslash</xmp>

<h3> Double-Quoted strings</h3>
<p>support interpolation & MANY PHP escape seq</p>
<xmp>\" – To escape “ within double quoted string.
\\ – To escape the backslash.
\$ – To escape $.
\n – To add line breaks between string.
\t – To add tab space.
\r – For carriage return.
\{ \} \[ \]
</xmp>

<h3>Here Documents - heredoc</h3>
<p>Used to put multiline strings in to PHP.<br>
Identifier is needed at beg & end of multiline string content.</p>
<xmp>
$str1 = <<< HDOC
Line 1 content
Line 2 contenttt
So on...
HDOC;
</xmp>

<?
$str1 = <<< HDOC
Multi line String:
Line 1 content
Line 2 contenttt
So on...
HDOC;

echo $str1;
echo '<br><br>So PHP can\'t print multiline string or newline char. have to use functionn nl2br() <br><br>';

echo nl2br($str1);
?>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>