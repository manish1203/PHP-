<?php

require __DIR__.'/dbconnect.php';
$sql = "SELECT * FROM department";

$result_set = mysqli_query($conn,$sql);

?>

<html>
    <head></head>
    <body>
        <form>
            select Department:
            <select name="department">
            <option value="">select</option>
            <?php if(mysqli_num_rows($result_set)>0): ?>
                <?php while($department = mysqli_fetch_assoc($result_set)) ?>
                </select>     
        </form>
    </body>
</html>