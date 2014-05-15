<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>get</title>
</head>
<body>
    <h1>$_GET的用法：</h1>
    <form action="">
        姓名：<input type="text" name="name" id="">
        年龄：<input type="text" name="age" id="">
        <input type="submit" value="提交">
    </form>

    <p><?php echo $_GET['name']."的年龄是".$_GET['age']; ?></p>
</body>
</html>