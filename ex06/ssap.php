#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$array = explode(" ", $str);
	$words = array_filter($array);
	return($words);
}

$n = count($argv);
if ($n > 1)
{
	$merge = array();
	for ($arg = 1; $arg < $n; $arg++)
		$merge = array_merge($merge, ft_split($argv[$arg]));
	sort($merge);
	for ($arg = 0; $arg < count($merge); $arg++)
		print "$merge[$arg]\n";
}