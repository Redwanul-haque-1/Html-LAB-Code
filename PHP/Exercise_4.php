<?php
$a = 100;
$b = 20;
$c = 5;
if($a>$b && $a>$c)
{
    echo "The number a:$a is largest";
}
else if ($b>$a && $b>$c)
{
    echo "The number b:$b is largest";
}
else 
{
    echo "The number c:$c is largest";
}
?>