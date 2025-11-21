<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label>Name:</label><input type="text" name="uname" placeholder="Enter user name!"></br>
        <label>Adderss:</label><input type="text" name="uaddress" placeholder="Enter user address!"></br>
        <label>Number:</label><input type="number" name="unumber"></br>
        <label>Email:</label><input type="email" name="uemail" placeholder="Email"></br>
        <label>Gender:</label></br>
        <input type="radio" name="gender" value="umale">Male</br>
        <input type="radio" name="gender" value="ufemale">Female</br>
        <input type="radio" name="gender" value="uothe">other</br>
        <label>Hobbies:</label></br>
        <select name="hobbies[]" multiple size="4" required>
            <option value="playing">Playing</option>
            <option value="reading">Reading</option>
            <option value="running">Running</option>
            <option value="singing">singing</option>

        </select>
    </form>

    <?php
    include "databaseConnection.php";

    $sql = "create table introduction (
                                      id INT PRIMARY KEY AUTO_INCREMENT,
                                      name VARCHAR(20),
                                      address  VARCHAR(30),
                                      number INT,
                                      email VARCHAR(40),
                                      gender VARCHAR(20),
                                      hobbies VARCHAR(40)
                                    )";
    if ($sql) {
        echo "data inserted successfully!";
    }

    //     $insert= "insert into introduction (name,address,number,email,gender,hobbies) values
    //                                         ()"
    ?>

</body>

</html>