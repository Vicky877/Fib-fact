<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div id="form-content">
<?php 

if (isset($_POST['fib']))
{
 $n1=0;
$n2=1;
$num=$_POST['number'];
echo "Fibonacci of $num \n";
echo "<br>".$n1."<br>".$n2.'<br> ';
for($i = 2; $i < $num; $i++)
{
    $n3=$n1+$n2;
    echo"<br>". $n3."<br>";
    $n1=$n2;
    $n2=$n3;
}


}
elseif(isset($_POST['fat']))
{
    $num=$_POST['number'];
    $fact=1;
    for($i=1;$i<=$num;$i++)
    {
        $fact=$fact*$i;  
    }
    echo "Factorial of $num is $fact"."<br><br>";  
}
?>
<a href="fib.html">Click to Home page</a>
</div>
</body>

</html>