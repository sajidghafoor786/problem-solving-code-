<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File uploading</title>
</head>
<body>
    <!-- enctype is special attribute when we want to add files -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" 
    
    method="POST" enctype="multipart/form-data"></form>
</body>
</html>