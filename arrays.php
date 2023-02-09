
<?php include 'header.php'; ?>
<form action=""  method="get">
<input type="number" placeholder="Enter your first number" name="num1" >
<input type="number" placeholder="Enter your second number" name="num2" >
<select name="operator">
<option value="add">Add</option>
<option value="sub"> subtract</option>
<option value="mul"> multiply</option>
<option value="div"> divide</option>
</select>
<input type="submit" name="cal" value="calculate">
</form>
<?php
if (isset($_GET["cal"])) {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];
    switch ($operator) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "sub":
            $result = $num1 - $num2;
            break;
        case "mul":
            $result = $num1 * $num2;
            break;
        case "div":
            $result = $num1 / $num2;
            break;

        default:
            $result = "Error: You have not selected the correct operator";
    }
}
    if (isset($result)) {
        echo "<h2> Result: $result </h2>";

    }
?>




<?php include "footer.php"?>