<?php 
	// Please only put on index page of only one PHP file per directory
	$path = './hits.txt';
	$count = file_get_contents($path, TRUE);
	$count = $count + 0;
	$hits = $count;
	$count++;
	$cmd = "echo $count > $path";
	exec($cmd);
	echo "<em class=\"weather\">HITS: $hits</em>"; 
?>