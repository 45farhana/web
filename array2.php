<?php
$c=array("Tokyo","Mexico","Newyork","Mumbai","Lagos","Seoul","Shanghai","Lagos","Buenos","Aires","Cairo","London");
foreach($c as $cities)
{
	echo "$cities,";
}
echo"<br>";
echo "<br>";
sort($c);
echo "<h3>In sorted order :</h3>";
for($i=0;$i<count($c);$i++)
{
	 echo $c[$i];
	echo "  ";
}
echo "<br>";
echo "<ul>";
foreach($c as $cities )
{
	echo "<li>$cities</li>\n";
}
echo "<h3>After adding new cities then in sorted order</h3>\n";
echo "</ul>";
array_push($c,"LosAngeles","Calcata","Osaka","Beijing");
sort($c);
echo"<ul>";
foreach($c as $cities)
{
	echo"<li>$cities</li>\n";
}
echo"</ul>";
?>