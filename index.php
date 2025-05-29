<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="post.php" method="post" enctype="multipart/form-data">
        <label for="file">Image</label>
        <input  type="file" name="files[]" id="file" multiple>
        <button type="submit">submit</button>
    </form>
</body>

</html>