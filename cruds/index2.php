<?php
    include_once "database.php";
    $stmt = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="app.css" rel="stylesheet"/>
    <title>Products Page</title>
</head>
    <body>
    <a href="../home/about_project.php" type="button" class="button-crud"><span>Back To Projects</span></button></a>
        <h1>Item List</h1>
        <p>
            <a href="create.php" type="button" class="btn btn btn-success">Add Item</a>
        </p>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Date Created</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $i => $product): ?>
        <tr>
            <th scope="row"><?php echo $i + 1 ?></th>
            <td>
                <?php if ($product['image']): ?>
                <img src="<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>" class="product-img">
                <?php endif; ?>
            </td>
            <td><?php echo $product['title'] ?></td>
            <td><?php echo $product['price'] ?></td>
            <td class="product-info"><?php echo $product['description'] ?></td>
            <td><?php echo $product['create_date'] ?></td>

            <td>
                <a href="update.php?id=<?php echo $product['id'] ?>" class="btn btn-info">Edit</a>
                <form method="post" action="delete.php" style="display: inline-block">
                    <input type="hidden" name="id" value="<?php echo $product['id'] ?>"/>
                    <button type="submit" class="btn btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </body>
</html>

