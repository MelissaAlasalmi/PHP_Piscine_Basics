<?PHP
function ft_is_sort($content)
{
	$copy = $content;
	sort($copy);
	return($copy == $content);
}
?>