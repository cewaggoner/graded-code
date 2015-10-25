

       <?php

$num = $_POST['numerator'];
$denom = $_POST['denominator'];
$buttonId = $_POST['id'];
  echo $buttonId;

if(is_numeric($num) and is_numeric($denom)){
  if(strcmp($buttonId, "div") == 0) {
   echo div ($num, $denom);
  }
  if(strcmp($buttonId, "mul") == 0) {
    echo mul($num, $denom);
  }
}else {
  echo "<b>Go back and correct your input</b";
}
       function div($x, $y) {
       $z = $x / $y;
       return $z;
       }

       function add($x, $y) {
       $z = $x + $y;
       return $z;
       }

       function mul($x, $y) {
       $z = $x * $y;
       return $z;
       }

       function sub($x, $y) {
       $z = $x - $y;
       return $z;
       }
       ?>





