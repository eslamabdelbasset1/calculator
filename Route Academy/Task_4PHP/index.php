<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="handle_calculate.php" method="POST" class="form shadow p-5">
        <div class="mb-3 row">
            <label for="inputNumber1" class="col-sm-2 col-form-label">First Number<span>*</span></label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="number1" placeholder="Enter First Number">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputOperator" class="col-sm-2 col-form-label">Operator<span>*</span></label>
            <div class="col-sm-10">
                <select name="operation" class="form-control">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputNumber2" class="col-sm-2 col-form-label">Second Number<span>*</span></label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="number2" id="staticEmail" placeholder="Enter second number">
            </div>
        </div>
        <div class="mb-3 row">
            <button type="submit" class="btn btn-success w-100" name="submit" value="calculate">=</button>
        </div>
        <div class="mb-3 row justify-content-center text-center mt-5">
            <?php
            if(isset($_GET['result']))
                print('Result : <span class="badge badge-danger">' . $_GET['result'] . '</span>');
            ?>
        </div>
    </form>
</div>
<footer> Created By Islam  </footer>
</body>
</html>



