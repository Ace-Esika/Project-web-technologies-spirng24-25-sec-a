<?php
    session_start();
    if(isset($_SESSION['statusA'])){
        require_once("../Model/foodModel.php");
        $foods = getAllFoods();
?>

        <!DOCTYPE html>
        <html>
        <head>
            <title>Food Management</title>
        </head>
        <body>

        <h1>Food Management</h1>

        <h2>All Food Items</h2>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($foods)) { ?>
            <tr>
            <form>
                <td>
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <?= $row['id'] ?>
                </td>
                <td>
                    <?php if ($row['picture']) { ?>
                        <img src="images/<?= $row['picture'] ?>" width="60" height="60"><br>
                    <?php } ?>
                    <input type="text" name="image" value="<?= $row['picture'] ?>">
                </td>
                <td><input type="text" name="name" value="<?= $row['name'] ?>"></td>
                <td><textarea name="description" rows="3" cols="25"><?= $row['description'] ?></textarea></td>
                <td><input type="number" name="price" value="<?= $row['price'] ?>" step="0.01"></td>
                <td><input type="text" name="category" value="<?= $row['category'] ?>"></td>
            </form>
            </tr>
            <?php } ?>
        </table>

        <br><br>

        </body>
        </html>
<?php
    }else{
        header("location: home.php");
    }
?>

