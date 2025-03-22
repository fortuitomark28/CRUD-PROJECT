<?php
include('connect.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    $updateQuery = "UPDATE taba SET name='$name', age=$age, address='$address' WHERE id=$id";
    $updateSQL = mysqli_query($connect, $updateQuery);

    if ($updateSQL) {
        echo "<script>alert('Data Updated Successfully');</script>";
        echo "<script>window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($connect) . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <style>
     
        body {
            background: #2c2c2c;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

       
        a {
            color: #bbb;
            text-decoration: none;
            font-size: 18px;
            margin-bottom: 20px;
        }
        a:hover {
            color: white;
        }

        form {
            background: #3a3a3a;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
            width: 300px;
            text-align: center;
        }

        label {
            font-size: 18px;
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #555;
            border-radius: 5px;
            background: #222;
            color: white;
            font-size: 16px;
        }

        input[type="submit"] {
            background: #4CAF50;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            margin-top: 15px;
        }

        input[type="submit"]:hover {
            background: #45a049;
        }
    </style>
</head>
<body>

    <a href="index.php"><- Back</a>
    <form action="update.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="mark"><br>

        <label for="age">AGE</label>
        <input type="number" name="age" id="age" value="123"><br>
        
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="pass"><br>

        <input type="hidden" name="id" id="id" value="4">
        
        <input type="submit" name="submit" id="submit" value="Update"><br>
    </form>

</body>
</html>
