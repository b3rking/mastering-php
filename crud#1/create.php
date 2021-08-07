<?php

$pdo = new PDO('mysql:host=localhost;dbname=product_crud', 'root', 'root');
// throw an error
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


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
    
    <h1>Create New Product</h1>

    <form>
        <div class="mb-3">
            <label class="form-label">Product image</label>
            <input type="file" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Product title</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Product description</label>
            <textarea name="" id="" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Product price</label>
            <input type="number" step=".01" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </body>
</html>
