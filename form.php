<?php

$num1 = $_GET["num"];
$num2 = $_GET["num"];
$op = $_GET["op"];
if(!empty($num1)&&($num2)&&($op)){
    if ($op === "+") {
        $result = $_GET["num"] + $_GET["num2"];
    } elseif ($op === "-") {
        $result = $_GET["num"] - $_GET["num2"];
    } elseif ($op === "*") {
        $result = $_GET["num"] * $_GET["num2"];
    } elseif ($op === "/") {
        $result = $_GET["num"] / $_GET["num2"];
    }
}
if (empty($num1)) {
    $result = "num1 empty";
} elseif (empty($num2)) {
    $result = "num2 empty";
}elseif(empty($op)){
    $result = "please enter عملية";

}
if ($op === "+") {
    $result = $_GET["num"] + $_GET["num2"];
} elseif ($op === "-") {
    $result = $_GET["num"] - $_GET["num2"];
} elseif ($op === "*") {
    $result = $_GET["num"] * $_GET["num2"];
} elseif ($op === "/") {
    $result = $_GET["num"] / $_GET["num2"];
}


?>



<head>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="calc.php" method="get" class="form">
            <div>
                <label>ENTER num</label>
                <input type="number" id="num1" name="number1" class="form-container">
            </div>
            <div>
                <label>ENTER num2</label>
                <input type="number" id="num2" name="number2" class="form-container">
            </div>
            <br>
            <div class="alret alret-success">
                <label> العملية</label>
                <input type="text" name="op" class="form-control">
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</body>