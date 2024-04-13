<a href="./"><h2>GO back to LPU FOLDER</h1></a>
	
PHP provides three functions able to be used in function to retrieve parameters passed to it.<br><br>

func_get_args() - returns an array of all param provided to the function<br>
func_num_args() - return number of param provided to function<br>
func_get_arg() - return a specific argument from the parameters<br>

<?php

function box($h,$w=8,$l=10){
  echo "<br><br>$h * $w * $l";
  echo "<br>volume: ". $h*$w*$l;

  echo "<br>func_get_args(): ";
  //print_r ( func_get_args() );
  var_dump ( func_get_args() );

  echo "<br>func_num_args(): ". func_num_args() ;
  echo "<br>func_get_arg(1): ". func_get_arg(1) ;

}

box(10,5,2);

box(20,6);

box(4);


 ?>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>