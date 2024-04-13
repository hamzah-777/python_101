<a href="./"><h2>GO back to LPU FOLDER</h2></a>

<h1>String Functions</h1>

<h3>Trim func - these are used to remove white spaces from a string </h3>
<ul>
<li>trim()
<li>ltrim()
<li>rtrim()
</li></li></li>
</ul>

<xmp>
<?
$var1 = "    Hello   Yoo!   ";
echo "orig:",$var1;
echo "\n";
echo "trim:",trim($var1);
echo "\n";
echo "ltrim:",ltrim($var1);
echo "\n";
echo "rtrim:",rtrim($var1);
?>
</xmp>

<h3>Change case</h3>
<ul>
	<li>strtolower($string1); - all lowercase
	<li>strtoupper($string1); - all uppercase
	<li>ucfirst($string2); - very first chat capital
	<li>ucwords($string2); - first letter of every word capital
	</li></li></li></li>
</ul>

<?
$var1 = "heLLo wOrlD yOo. wElcome!";
echo "<br>ori: ", $var1;
echo "<br>strtolower: ", strtolower($var1);
echo "<br>strtoupper: ", strtoupper($var1);
echo "<br>ucfirst: ", ucfirst($var1);
echo "<br>ucwords: ", ucwords($var1);
?>

<h3>Comparing Strings</h3>
<ul>
<li>Exact Comparison: == and === operators
<li>strcmp(string_1, string_2); - compare string & return -1,0,1
<li>strcasecmp(string_1, string_2); - compare while ignore case
<li>strncmp(string_1, string_2, len); - compare first n number of char
<li>strncasecmp(string_1, string_2, len); - compare first n number of char WHILE ignore case
<li>---------------
<li>strcmp("A","B") = -1 = <?= strcmp("A","B") ?>
<li>strcmp("A","A") = 0 = <?= strcmp("A","A") ?>
<li>strcmp("B","A") = 1 = <?= strcmp("B","A") ?>
<li>strcmp("A","a") = -1 = <?= strcmp("A","a") ?>
<li>---------------
<li>compare only the first few characters of the string
<li>strncmp(string_1, string_2, len);  
<li>length=3 = <?= strncmp("AAB","AAC",3) ?>	 
<li>length=2 = <?= strncmp("AAB","AAC",2) ?>	
<li>strncasecmp(string_1, string_2, len);
<li>length=3 with case = <?= strncmp("AABd","AAbd",3) ?>	 
<li>length=3 ignor case= <?= strncasecmp("AABd","AAbd",3) ?>	
<li>aaa


</li></li></li></li></li></li></li></li></li>
</li></li></li></li></li></li></li>
</ul>

<?
$var1 = "Hello there";
$soundex_code = soundex($var1);
echo $soundex_code ;
?>
<span>
soundex($string) - Returns the soundex key as a string, or FALSE on failure.
metaphone_code() - Similar to soundex() metaphone creates the same key for similar sounding words. It's more accurate than soundex()

levenshtein() - Calculate Levenshtein distance between two strings
metaphone() - Calculate the metaphone key of a string
similar_text() - Calculate the similarity between two strings
</span>


<h3>String Search</h3>
<li>$mystring = 'abc';
<li>$findme	= 'a';
<li>$pos = strpos($mystring, $findme); - find first occorence
<li>$pos = strrpos($mystring, $findme); - find LAST occorence
	</li></li></li></li>

	<li>strstr(string,search) - find needele and return part before or after needle (like split & return)
		<li>strcspn(string,char,start,length), returns the number of characters present in a string before any part of the specified characters to be searched are found. This function is case-sensitive..
</li></li>

<pre>
stristr() - Case-insensitive strstr
strrchr() - Find the last occurrence of a character in a string
strpos() - Find the position of the first occurrence of a substring in a string
strpbrk() - Search a string for any of a set of characters
preg_match() - Perform a regular expression match
</pre>


<h3>explode() func [do split] in to array</h3>
<li>$array = explode(separator, string [, limit])
	</li>
<h3>implode() func [do join] concat array to string</h3>
<li>$array = explode(separator, string [, limit])
	</li>$string = implode(separator, array);
</li></li>


<pre>
str_replace("world","Peter","Hello world!");
replace world with peter in strihg ^^
</pre>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>