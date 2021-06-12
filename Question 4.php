<?php
$cantidad=array(4,5,1,3,2);
$i=0;
$menor=$cantidad[$i];
$mayor=$cantidad[$i];
while($i<=4)
{
	if($menor>$cantidad[$i])
	{
	 $menor=$cantidad[$i];
	}
	$i=$i+1;
}
echo"$menor <br />";
$cantidad=array(4,5,1,3,2);
$i=0;
$mayor=$cantidad[$i];
while($i<=4)
{
	if($mayor<$cantidad[$i])
	{
	 $mayor=$cantidad[$i];
	}
	 $i=$i+1;
}
echo"$mayor <br />";
$cantidad=array(4,5,1,3,2);
$menor=$menor;
$i=0;
while($i<4){
	if($menor>=$cantidad[$i]){
	$menor=$cantidad[$i];
	}
	echo"$menor <br />";
	}
?>