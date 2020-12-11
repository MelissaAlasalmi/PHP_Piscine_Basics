<?PHP
function ft_split($str)
{
	$array = explode(" ", $str);
	$words = array_filter($array);
	sort($words);
	return($words);
}
?>