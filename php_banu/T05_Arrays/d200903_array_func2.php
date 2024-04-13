<a href="./"><h2>GO back to LPU FOLDER</h2></a>

<h2>Array sort functions</h2>

<?
$indx_arr = ["a","d","D","c","A"];
$asso_arr = array("A"=>"B", "F"=>"X", "B"=>"X", "C"=>"E");
?>

<h4>Initial arrays</h4>

<table>
	<tr><th>Indexed array</th><th>Associative array</th></tr>
	<tr><th>Initial </th><th>Initial </th></tr>
	<tr>
		<td><pre><? var_dump($indx_arr); ?></pre></td>
		<td><pre><? var_dump($asso_arr); ?></pre></td>
	</tr>


	<?
		//make duplicate & apply sort()
		$indx_arr1 = $indx_arr;
		$asso_arr1 = $asso_arr;
		sort($indx_arr1);
		sort($asso_arr1);
	?>

	<tr><th>applied sort() ___________</th><th>Sorts an indexed array in ascending order. <br>convert associative to indexed</th></tr>
	<tr>
		<td><pre><? var_dump($indx_arr1); ?></pre></td>
		<td><pre><? var_dump($asso_arr1); ?></pre></td>
	</tr>


	<?
		//make duplicate & apply rsort()
		$indx_arr1 = $indx_arr;
		$asso_arr1 = $asso_arr;
		rsort($indx_arr1);
		rsort($asso_arr1);
	?>

	<tr><th>applied rsort() </th><th>Sorts an indexed array in descending order. <br>convert associative to indexed</th></tr>
	<tr>
		<td><pre><? var_dump($indx_arr1); ?></pre></td>
		<td><pre><? var_dump($asso_arr1); ?></pre></td>
	</tr>


	<?
		$indx_arr1 = $indx_arr;
		$asso_arr1 = $asso_arr;
		asort($indx_arr1);
		asort($asso_arr1);
	?>

	<tr><th>applied asort()</th><th>Sorts an associative array in ascending order, according to the value</th></tr>
	<tr>
		<td><pre><? var_dump($indx_arr1); ?></pre></td>
		<td><pre><? var_dump($asso_arr1); ?></pre></td>
	</tr>

	<?
		$indx_arr1 = $indx_arr;
		$asso_arr1 = $asso_arr;
		arsort($indx_arr1);
		arsort($asso_arr1);
	?>

	<tr><th>applied arsort()</th><th>Sorts an associative array in descending order, according to the value</th></tr>
	<tr>
		<td><pre><? var_dump($indx_arr1); ?></pre></td>
		<td><pre><? var_dump($asso_arr1); ?></pre></td>
	</tr>


	<?
		$indx_arr1 = $indx_arr;
		$asso_arr1 = $asso_arr;
		ksort($indx_arr1);
		ksort($asso_arr1);
	?>

	<tr><th>applied ksort()</th><th>Sorts an associative array in ascending order, according to the key</th></tr>
	<tr>
		<td><pre><? var_dump($indx_arr1); ?></pre></td>
		<td><pre><? var_dump($asso_arr1); ?></pre></td>
	</tr>

	<?
		$indx_arr1 = $indx_arr;
		$asso_arr1 = $asso_arr;
		krsort($indx_arr1);
		krsort($asso_arr1);
	?>

	<tr><th>applied krsort()</th><th>Sorts an associative array in descending order, according to the key</th></tr>
	<tr>
		<td><pre><? var_dump($indx_arr1); ?></pre></td>
		<td><pre><? var_dump($asso_arr1); ?></pre></td>
	</tr>



</table>

<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>