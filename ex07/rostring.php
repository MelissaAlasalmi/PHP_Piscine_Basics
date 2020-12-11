#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$array = explode(" ", $str);
	$words = array_filter($array);
	return($words);
}

if ($argc > 1)
{ 
	$first = 0;
	$array = ft_split($argv[1]);
	for ($n = 1; $n < count($array); $n++)
		print "$array[$n] ";
	print "$array[$first]\n";
}
?>