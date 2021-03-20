<!DOCTYPE html>
<html lang="en">
<head>
    <title>CSE0409 First Quiz</title>
</head>
<body>
    
    <h1>HTML Forms</h1>

    <form method="post">
    <?php $oldvalue = $_POST['form1'];?>
        <p>
            <label for="form1">first input</label>
            <input type="text" name="form1" id="forms" value="<?php echo htmlentities($oldvalue)?>">
            
        </p>
        <input type="button" value="send">
    </form>
    
<pre>
<?php POST:
    print_r($_POST);
?>
</pre>

</body>
</html>