<?php
$files = scandir('images', SCANDIR_SORT_DESCENDING);
$newest_file = $files[0];
echo $newest_file;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TokBird</title>
</head>
<body style="margin: 0px;width:100%;background-color: #000;text-align: center">
    <img src="images/<?php echo $newest_file;?>" style="width:100%;background-color: #000;margin: 0 auto;"/>
</body>
</html>