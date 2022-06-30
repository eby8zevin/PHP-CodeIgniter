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
    echo $this->db->query("SELECT VERSION()")->row('version');
    ?>
</body>

</html>