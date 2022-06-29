<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PostgreSQL</title>
</head>

<body>
    <?php
    $db = \Config\Database::connect();
    $query = $db->table('users')->get();
    $users = $query->getResult();
    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</body>

</html>