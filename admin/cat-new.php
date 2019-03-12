<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
            padding: 20px 0px 20px 0px;
        }
        form label {
            display: block;
            padding: 20px;
        }
        div {
            border: 1px solid #000;
            text-align: center;
            margin: 0px 500px 0px 500px;
            padding-bottom: 15px;
            background: grey;
        }
    </style>
</head>
<body>
    <h1>New Category</h1>
    <div class="wrap">
        <form action="cat-add.php" method="post">
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" required="required"><br>
            <label for="remark">Remark</label>
            <textarea name="remark" id="remark" cols="30" rows="10" required="required"></textarea>
            <br><br>
            <input type="submit" value="Add Category">
        </form>
    </div>
</body>
</html>