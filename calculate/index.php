<?php
extract($_POST);
if (isset($save)) {
    switch ($ch) {
        case '+':
            $res = $fn+$sn;
            break;

        case '-':
            $res = $fn-$sn;
            break;

        case '*':
            $res = $fn*$sn;
            break;

        case '/':
            $res = $fn/$sn;
    }
}
?>
 

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="main.css">
    <script src='main.js'></script>
</head>
<body>
 
<div class="form-main">
<form action="" method="post" class="form">
        <p>Your Result</p>
        <input type="number" name="number" readonly="readonly" disabled="disabled" value="<?php echo @$res;?>">

        <p>Enter your first num</p>
        <input type="number" name="fn"  value="<?php echo @$fn;?>">

        <p>Enter your second num</p>
        <input type="number" name="sn"  value="<?php echo @$sn;?>">

        <p>Select your choice</p>
        
        <select name="ch">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>

        <input type="submit" value="Show Result" name="save" class="submit">
    </form>
</div>
</body>
</html>