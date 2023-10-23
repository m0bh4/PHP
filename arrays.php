<form action="arrays.php" method="post">
    <input type="text" name="name">
    <input type="submit">
    
</form>
<?php
$xname =$_GET["xname"];
//$family = array("father","mather","brother");
//$family[2] ="love";
//$family[3] ="sister";
//echo $family[2];
//echo $family[3];

//echo count($family);

/*$family = ["designer" => 
"father",
"programmer"=>"mather",
"gamer" => "brother"];
echo$family[$xname];
*/
$score = ["nour"=> [
    "score"=>"90","grade"=>"A"
],
"majed"=> [
    "score"=>"80","grade"=>"B"
],
"anax"=> [
    "score"=>"70","grade"=>"C"
    ]];
echo "score " . $score[$xname] ["score"];
echo "<br>";
echo "grade " . $score[$xname] ["grade"];
?>