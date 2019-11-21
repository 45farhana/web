<?php
$around="around";
echo"<h3>First portion</h3>";

echo 'what goes '.$around.',comes '.$around. '.';
echo "<br>";
echo"<h3>Second  portion</h3>";
$current_Month=date('F',time());
if($current_Month=='August')
{
	echo "It's August,so it's really hot.";
}
else
{
	echo"Not August,so at least not in the peak of the heat";
}

?>