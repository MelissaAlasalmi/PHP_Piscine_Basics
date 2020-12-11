#!/usr/bin/php
<?PHP
while (true)
{
	print "Enter a number: ";
	$n = trim(fgets(STDIN));
	$value = $n;
	if (feof(STDIN))
		break ;
	if (is_numeric($n) == 0)
		print "'$value' is not a number\n";
	else
	{
		if ($n % 2 == 0)
			print "The number $value is even\n";
		else
			print "The number $value is odd\n";
	}
}
print "\n";
?>
