<?php
include "export.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <<meta name="File Convertor" content="Convert PDF and DOC files">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Converter</title>
    
    <link rel="stylesheet" href="https://github.com/xavian1996/file-convertor/blob/master/css/bootstrap-theme.css">
    <link rel="stylesheet" href="https://github.com/xavian1996/file-convertor/blob/master/css/buttons.css">
    <link rel="stylesheet" href="https://github.com/xavian1996/file-convertor/blob/master/css/buttons-core.css">
    <link rel="stylesheet" href="https://github.com/xavian1996/file-convertor/blob/master/css/bootstrap-theme.css">
    <link rel="stylesheet" href="https://github.com/xavian1996/file-convertor/blob/master/css/style.css"/>
</head>
<body>
<div class="container">
<br>
<br>
<center>

<div class="jumbotron">
<form method="post" action="https://github.com/xavian1996/file-convertor/blob/master/export.php" class="jambotron" enctype='multipart/form-data'>
    <h2 align="center">PHP Script To Convert Files</h2>
    <h5>Created By Xavian El'Don</h5>
    <br>
    <label>File name: <input class="form-control" type="file" name="book" required="required"></label>
    <label>Extention : 
    <select name="extention" class="form-control" required="required">
    <?php
        $list = array("pdf","doc","txt","jpg","png","svg","iso","rar","zip");
        foreach($list as $ext){
            echo "<option value='$ext'>$ext</option>";
        }

    ?>
    </select>
    </label>
    <input type="submit" name="convert" value="Convert" class="btn btn-info">
    <br><br>
    <div class="alert alert-warning" role="alert">
    WARNING : Please Before You Upload Any File Make Sure To Rename The File Is The Name Of The File Conttain More Then One Point .<br>
    Ex : <br>Bad File : python.is.good.pdf <br>
    Good File : Python_is_good.pdf

    </div>
</form>
</div>
</center>
</div>
</body>
</html>