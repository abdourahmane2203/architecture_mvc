<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h1>Ajouter une ferme</h1>
<h2> <?php if(isset($data['result'])) {
        echo $data['result'];
    } ?> </h2>

<form action="addF" method="post">
    <input type="text" name="nom">
    <input type="submit" name="add">
</form>
</body>
</html>