<?php
if(isset($_POST['submit']))
{
    $string_calc = ($_POST['number1']?:'0') .( $_POST['operation']?:'+' ). ($_POST['number2'] ?:'0');

    eval("\$result =($string_calc);");

    header("Location:index.php?result=".$result);

}else
{
    header("Location:index.php" );
}
?>
