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
	$array = array();
	$mergealpha = array();
	$mergenumeric = array();
	$mergeother = array();
	for ($arg = 1; $arg < $argc; $arg++)
		$array = array_merge($array, ft_split($argv[$arg]));
	for ($x = 0; $x < count($array); $x++)
	{
		if (($array[$x][0] >= 'A' && $array[$x][0] <= 'Z') || ($array[$x][0] >= 'a' && $array[$x][0] <= 'z'))
			array_push($mergealpha, $array[$x]);
		else if ($array[$x][0] >= '0' && $array[$x][0] <= '9')
			array_push($mergenumeric, $array[$x]);
		else
			array_push($mergeother, $array[$x]);
	}
	natcasesort($mergealpha);
	$mergealpha = array_values($mergealpha);
	for ($x = 0; $x < count($mergealpha); $x++)
		print "$mergealpha[$x]\n";
	sort($mergenumeric, SORT_STRING);
	for ($x = 0; $x < count($mergenumeric); $x++)
		print "$mergenumeric[$x]\n";
	sort($mergeother);
	for ($x = 0; $x < count($mergeother); $x++)
		print "$mergeother[$x]\n";
}