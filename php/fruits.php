<?php
echo "FRUITS"."<br>";
echo "<br>";
$fruits=["apple","banana","orange","grape"];
foreach($fruits as $fruit)
{
echo $fruit."<br>";
}
echo "<br>";
echo "FLOWER"."<br>";
echo "<br>";
$flower=array("rose","jasmin","lotus","sunflower");
echo " flower in array is"."<br>";
print_r($flower)."<br>";
echo "<br>";
echo "<br>";

echo " ascending order of sort"."<br>";
asort($flower);
print_r($flower)."<br>";
echo "<br>";
echo "<br>";

echo " descending order of sort"."<br>";
arsort($flower);
print_r($flower);

?>
