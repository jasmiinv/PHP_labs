<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if(isset($GET['succes']));
?>
<dialog>
    <p><?php echo $_GET['success'] ?></p>
</dialog>
    <form action= "insertData.php" method = "post">
        <div>
        <label for = "title">Title</label>
        <input type = "text" name="title" id="title">
        </div>
        <div>
            <label for ="description">Description></label>
            <textarea name="description" id="description">
            </textarea>
        </div>
        <div>
            <input type="submit" id="Save">
        </div>
    </form>
<section>
    <table>
        <thead>
            <tr>

            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</section>

</body>
</html>