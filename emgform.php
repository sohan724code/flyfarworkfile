<?php
include "session.php";

// variables with empty values
$code = $name = $nameErr = $codeErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST["name"];
    }

    if (empty($_POST["code"])) {
        $codeErr = "code is required";
    } else {
        $code = $_POST["code"];
    }

    if ($nameErr != "" && $codeErr != "") {
        $sql = "INSERT INTO `airlines`( `airline_code`, `airline_name`) 
                VALUES (" . $_POST["code"] . ", " . $_POST["name"] . ")";

        echo $sql;

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container w-50 mt-3">
        <h1>Insert Airline Data</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <label for="airline code" class="form-label">Airline Code</label>
                <input type="text" class="form-control" name="code">
            </div>

            <div class="mb-3">
                <label for="airline name" class="form-label">Airline Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>