<?php
    require_once "functions.php";
    require_once "database.php";
    $errors = [];
    $title = '';
    $description = '';
    $price = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $image = $_FILES['image'] ?? null;
        $imagePath = '';

        if (!is_dir('images')) {
            mkdir('images');
        }

        if ($image && $image['tmp_name']) {
            $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
            mkdir(dirname($imagePath));
            move_uploaded_file($image['tmp_name'], $imagePath);
        }

        if (!$title) {
            $errors[] = 'Product price is required!';
        }

        if (empty($errors)) {
            $stmt = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                        VALUES (:title, :image, :description, :price, :date)");
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':image', $imagePath);
            $stmt->bindValue(':description', $description);
            $stmt->bindValue(':price', $price);
            $stmt->bindValue(':date', date('Y-m-d H:i:s'));

            $stmt->execute();
            header('Location: index.php');
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="app.css" rel="stylesheet"/>
    <title>Products CRUD</title>
</head>
    <body>
    <h1>Add new Product</h1>
        <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
                <div> <?php echo $error ?></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Product Image</label><br>
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <label>Product Title</label>
            <label>
                <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
            </label>
        </div>
        <div class="form-group">
            <label>Product Description:</label>
            <label>
                <textarea class="form-control" name="description"><?php echo $description ?></textarea>
            </label>
        </div>
        <div class="form-group">
            <label>Product Price:</label>
            <label>
                <input type="number" step="0.01" name="price" class="form-control" value="<?php echo $price ?>">
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </body>
</html>
