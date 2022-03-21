<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./../css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Passport Search</title>
</head>

<body>

    <script>
        function success() {
            swal({
                title: "Success!",
                icon: "success",
                text: "Passport Added Successfully!",
                type: "success",
                confirmButtonText: "Cool"
            });
        }
    </script>
    <?php
    include "./../session.php";

    // variables with empty values

    $passport = $mobile = $pax = $birth_place = $qt = $name = "";
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["passport"]) || empty($_POST["name"]) || empty($_POST["mobile"]) || empty($_POST["pax"]) || empty($_POST["birth_place"]) || empty($_POST["qt"])) {
            $error = "fill up all the fields ";
        } else {
            $passport = $_POST["passport"];
            $name = $_POST["name"];
            $mobile = $_POST["mobile"];
            $pax = $_POST["pax"];
            $birth_place = $_POST["birth_place"];
            $qt = $_POST["qt"];
        }

        if ($error == "") {
            $sql = 'INSERT INTO `passport`( `passNum`, `name`, `mobile`, `Pax`, `birthPlace`, `QT`) 
        VALUES ("' . $_POST["passport"] . '", "' . $_POST["name"] . '", "' . $_POST["mobile"] . '", "' . $_POST["pax"] . '", "' . $_POST["birth_place"] . '", "' . $_POST["qt"] . '")';

            if ($conn->query($sql) === TRUE) {
                echo '<script>success();</script>';
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    ?>

    <div class="page-container mb-5">

        <?php include './../side_navbar.php' ?>

        <main class="p-3">
            <div class="d-lg-none d-flex justify-content-end">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mobile-menu" viewBox="0 0 20 20" fill="currentColor" id="mobile-menu">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="mt-3 d-flex justify-content-between align-items-center">
                <div class="position-relative">
                    <input class="form-control form-control-sm ps-4" type="text" placeholder="Enter Keywords">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 search-icon" fill="none" viewBox="0 0 24 24" stroke="gray">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <div class="d-flex">
                    <div class="dropdown me-3 mt-1">
                        <div class="fs-6 dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            EN
                        </div>
                    </div>
                    <div class="top-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div class="top-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24" stroke="gray">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </div>

                    <button type="button" class="btn btn-sm  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <img src="./../images/avatar.jpg" alt="" width="30px" style="margin-top: -5px;">
                    </button>
                    <ul class="dropdown-menu shadow" style="width: 200px;">
                        <div class="p-0 m-0">
                            <a class="dropdown-item" href="#">
                                Fahim
                            </a>
                        </div>
                        <div class="p-0 m-0">
                            <hr class="dropdown-divider">
                        </div>

                        <div><a class="dropdown-item" href="#">My Profile</a></div>
                        <div>
                            <hr class="dropdown-divider">
                        </div>
                        <div><a class="dropdown-item" href="#">Settings</a></div>
                        <div>
                            <hr class="dropdown-divider">
                        </div>
                        <div><a class="dropdown-item" href="#">Chat</a></div>
                        <div>
                            <hr class="dropdown-divider">
                        </div>
                        <div><a class="dropdown-item" href="#">Logout</a></div>
                    </ul>
                </div>
            </div>

            <div class="mt-3">
                <div class="d-flex">
                    <div>
                        <!-- Button trigger modal -->

                        <div class="mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <button class="btn py-2 px-3 text-light" style="font-size:18px; border: 1px solid #3751FF ; border-radius: 30px; background-color: #3751FF;">Passport
                                In</button>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class=" mb-5 ">
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                            <div class="d-flex mt-3 px-4 justify-content-between ">

                                                <div>
                                                    <span>Passport Number</span> <br />
                                                    <input class="form-control mt-2 border-dark " name="passport">
                                                </div>
                                                <div class="ms-3">
                                                    <span>Name</span> <br />
                                                    <input class="form-control mt-2 border-dark " name="name">
                                                </div>
                                                <div class="ms-3">
                                                    <span>Mobile Number</span> <br />
                                                    <input class="form-control mt-2 border-dark " name="mobile">
                                                </div>
                                                <div class="ms-3">
                                                    <span>Pax Number</span> <br />
                                                    <input class="form-control mt-2 border-dark " name="pax">
                                                </div>
                                            </div>

                                            <div class="d-flex mt-3 px-4 justify-content-between ">
                                                <div>
                                                    <span>Birth Place</span> <br />
                                                    <input class="form-control mt-2 border-dark w-75 " name="birth_place">
                                                </div>
                                                <div class=" " style="margin-left: -200px;width: 250px;">
                                                    <span>QT Number</span> <br />
                                                    <input class="form-control mt-2 border-dark  " name="qt">
                                                </div>
                                                <div class=" mt-4 bg-danger">
                                                    <button class=" btn mt-2 text-light" style="border: 1px solid #3751FF ; border-radius: 25px; background-color: #3751FF; margin-left:-150px">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="ms-4">
                        <!-- Button trigger modal -->

                        <div class="mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <button class="btn py-2 px-3 text-light" style="font-size:18px; border: 1px solid #3751FF ; border-radius: 30px; background-color: #3751FF;">Passport
                                Out</button>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class=" mx-auto mb-5 mt-3">
                                        <h6 class="text-start">Passport Number</h6>
                                        <div class="d-flex mt-3 ">
                                            <div class="">
                                                <p style="padding-right: 100px; padding-left: 120px;" class="border rounded-3 py-4 border-dark "></p>
                                            </div>
                                            <div class=" ms-3 mt-1">
                                                <button class="btn py-2 px-4 text-light" style="border: 1px solid #3751FF ; border-radius: 25px; background-color: #3751FF;">Submit</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="mt-5 w-25">
                <h5><span class="p-2 border-bottom border-dark">Search Passport</span> </h5>
            </div>

            <div class="m-4">
                <input placeholder="Enter Name/Passport Number/Mobile Number" class="form-control mt-2 border-dark input-border full" onkeyup="showResult(this.value)">
                <div id="livesearch" class="dropdown"></div>
            </div>
            <div id="passport-details" class="d-none mt-3">
                <table class="table">
                    <tr>
                        <td><b>Passport Number</b></td>
                        <td id="passport-number"></td>
                    </tr>
                    <tr>
                        <td><b>Name</b></td>
                        <td id="name"></td>
                    </tr>
                    <tr>
                        <td><b>Mobile</b></td>
                        <td id="mobile"></td>
                    </tr>
                    <tr>
                        <td><b>Pax</b></td>
                        <td id="pax"></td>
                    </tr>
                    <tr>
                        <td><b>Birth Place</b></td>
                        <td id="birth-place"></td>
                    </tr>
                    <tr>
                        <td><b>QT</b></td>
                        <td id="qt"></td>
                    </tr>

                </table>
            </div>


        </main>
    </div>


    <script>
        function showResult(str) {
            document.getElementById("passport-details").className = "d-none";

            if (str.length == 0) {
                document.getElementById("livesearch").innerHTML = "";
                document.getElementById("livesearch").style.border = "0px";
                return;
            }

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    const result = JSON.parse(this.responseText);
                    let output = "";

                    for (let i = 0; i < result.length; i++) {
                        if (i > 3) {
                            break;
                        }
                        output += `<button class="dropdown-item border-bottom p-3" type="button" onclick="showDetails(${result[i][0]})">${result[i][1]}</button>`;
                    }
                    document.getElementById("livesearch").innerHTML = output;

                }
            }

            xmlhttp.open("GET", "./../api/v0/passport-search/passport-search-api.php?q=" + str, true);
            xmlhttp.send();
        }


        function showDetails(str) {
            document.getElementById("livesearch").innerHTML = "";


            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    const result = JSON.parse(this.responseText);

                    document.getElementById("passport-details").className = "d-block";
                    document.getElementById("passport-number").innerHTML = result["passport"];
                    document.getElementById("name").innerHTML = result["name"];
                    document.getElementById("mobile").innerHTML = result["mobile"];
                    document.getElementById("pax").innerHTML = result["pax"];
                    document.getElementById("birth-place").innerHTML = result["birthPlace"];
                    document.getElementById("qt").innerHTML = result["qt"];

                }
            }

            xmlhttp.open("GET", "./../api/v0/passport-search/passport-details-api.php?q=" + str, true);
            xmlhttp.send();
        }
    </script>
    <?php include './../external-scripts.php' ?>
</body>

</html>