<!DOCTYPE html>
<html lang="en">
<head>
    <title>CSE0409 First Quiz</title>
</head>
<body>
    
    <h1>HTML Forms</h1>

    <form method="POST">
        <p>
            <label for="label1">POST input</label>
            <input type="text" name="label1" id="forms">
        </p>
        <input type="button" value="send">
    </form>
    <form method="GET">
        <p>
            <label for="label1">GET input</label>
            <input type="text" name="label1" id="forms">
        </p>
        <input type="button" value="send">
    </form>

<pre>
<?php POST: print_r($_POST); ?>
<?php GET: print_r($_GET); ?>
</pre>


</body>
</html>