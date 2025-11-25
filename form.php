<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>


    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
            placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
            placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
        <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <?php
    // if($_SERVER['REQUEST_METHOD]=="POST"]'){
//     $name= $_POST['name'];
//     $email= $_POST['email'];
//     $comment= $_POST['comment'];
    








    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "user_info";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("database is not connected!" . mysqli_connect_error());
    } else {
        echo "connection successfully!";
    }

    // display the data on the screen from database
    




    ?>
</body>

</html>