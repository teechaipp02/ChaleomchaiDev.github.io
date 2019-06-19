<?php
// PHP code to get the factorial of a number 
// function to get factorial in iterative way 
function Factorial($number){ 
    $factorial = 1; 
    for ($i = 1; $i <= $number; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 

function mb_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}

function AlphabetSoup($str) {  



$sparts = str_split($str);
sort($sparts);
$imp = implode('', $sparts); //aachtt 
return $imp;  // will be a string


}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$number = '0';
if (isset($_POST["numbers"])) {
	$number = $_POST["numbers"];
}
$fact = factorial($number); 

$texttest = '';
if (isset($_POST["texts"])) {
	$texttest = $_POST["texts"];
}
$FirstReverse = mb_strrev($texttest); 

$text_sorting = '';
if (isset($_POST["texts_sorting"])) {
	$text_sorting = $_POST["texts_sorting"];
}
$AlphabetSoup = AlphabetSoup($text_sorting); 

?>
	<form name="frmFactorial" method="_POST" action="<?=$_SERVER['SCRIPT_NAME'];?>">
		 Math Fundamentals : <input type="number" name="numbers" maxlength="2">
		<label><?php echo "Factorial = $fact"; ?></label>
		<br>
		
		<br>
		

		String Manipulation : <input type="text" name="texts" maxlength="">
		<label><?php echo "FirstReverse = $FirstReverse"; ?></label>
		<br>
		
		<br>
		
		String Maniulation, Sorting : <input type="text" name="texts_sorting" maxlength="">
		<label><?php echo "AlphabetSoup = $AlphabetSoup"; ?></label>
		<br>
		<input type="submit" value="Submit"><br>
		<br>
</form>
</body>
</html>