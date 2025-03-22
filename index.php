<?php 
    include('connect.php');

    $select = "SELECT * FROM taba";
    $sqlSelect = mysqli_query($connect, $select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Project</title>
    <style>
        
        body {
            background: #2c2c2c;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
        }

      
        a {
            font-size: 30px;
            background: #4f4f4f;
            color: #fff;
            text-decoration: none;
            display: inline-block;
            padding: 10px 25px;
            margin: 20px auto;
            border-radius: 8px;
            border: 1px solid #666;
            transition: 0.3s;
        }
        a:hover {
            background: #5f5f5f;
        }

     
        table {
            border: 2px solid #444;
            width: 80%;
            margin: 50px auto;
            text-align: center;
            background: #3a3a3a;
            border-radius: 8px;
        }

        th, td {
            border: 1px solid #555;
            font-size: 20px;
            padding: 12px;
        }

       
        .btn {
            font-size: 18px;
            cursor: pointer;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .edit {
            background: #2980b9;
            color: white;
        }
        .edit:hover {
            background: #3498db;
        }

        .delete {
            background: #c0392b;
            color: white;
        }
        .delete:hover {
            background: #e74c3c;
        }
    </style>
</head>
<body>
    <a type="button" id="add" href="add.php">Add+</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th colspan="2">Action</th>
        </tr>

        <?php foreach($sqlSelect as $result => $value) {  ?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['age'] ?></td>
                <td><?php echo $value['address'] ?></td>
                <td>
                    <form action="update.php" method="post">
                        <input class="btn edit" type="submit" value="Edit" name="edit">
                        <input type="hidden" name="edId" value="<?= $value['id'] ?>">
                        <input type="hidden" name="edName" value="<?= $value['name'] ?>">
                        <input type="hidden" name="edAge" value="<?= $value['age'] ?>">
                        <input type="hidden" name="edAddress" value="<?= $value['address'] ?>">
                    </form>
                </td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="delID" value="<?= $value['id'] ?>">
                        <input class="btn delete" type="submit" value="Delete" name="delete">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>
