<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            text-align: center;
        }
        input[type="text"],
        input[type="number"],
        input[type="image"],
        input[type="submit"] {
            font-weight: bold;
            width: 20%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
}
    </style>
</head>
<body>
    <div class=" container" >
        <h2> THÊM SẢN PHẨM</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <label for="name"></label>
                    <input type="text" id="name" name="name" placeholder='Product name' required><br><br>
                <label for="code"></label>
                    <input type="text" id="code" name="code"  placeholder='Product ID' required><br><br>
                
                <label for="price"></label>
                    <input type="number" id="price" name="price"placeholder='Price'  required><br><br>
                
                <label for="oldprice"></label>
                    <input type="number" id="oldprice" name="oldprice" placeholder='oldprice'><br><br>
                
                <label for="image"></label>
                    <input type="text" id="image" name="image" placeholder='Link Img'  required><br><br>
                
                <input type="submit" name="submit" value="Thêm sản phẩm">
        </form>
    </div>

</body>
</html>