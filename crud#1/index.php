<?php

$pdo = new PDO('mysql:host=localhost;dbname=product_crud', 'root', 'root');
// throw an error
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statements = $pdo->prepare('SELECT * FROM products order by date desc');
$statements->execute();
$products = $statements->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>Product CRUD</title>

  </head>
  <body>
    
    <h1>Product CRUD</h1>

    <p><a href="create.php" class="btn btn-success">Create Product</a></p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">date</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $pt): ?>
            <tr>
                <th scope="row"><?= $pt["id"] ?></th>
                <td><?= $pt["title"] ?></td>
                <td><?= $pt["price"] ?></td>
                <td><?= $pt["date"] ?></td>
                <td>
                    <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
  </body>
</html>
