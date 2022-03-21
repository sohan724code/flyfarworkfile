<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./../css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Visa Query Setup</title>

    <style>
        /* visa query setup */
        .reset {
            all: revert;
        }

        .ff-text-color {
            color: #3751FF
        }

        .ff-border {
            border-style: solid;
            border-width: 1px;
            border-color: #3751FF;
        }
    </style>
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


            <div class=" my-3">
                <div class="row">

                    <!-- left column -->
                    <div class="container w-50 col">
                        <h1 class="fs-5 ff-text-color"><u>Inquiry Country and Visa Type</u></h1>

                        <!-- input country name  -->
                        <div class="row p-3">
                            <label class="col">Country Name</label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset f-6">Select</legend>
                                    <select name="country" class="border-0 w-100">
                                        <option value="India">India</option>
                                    </select>
                                </fieldset>
                            </div>

                        </div>

                        <!-- input visa type -->
                        <div class="row p-3">
                            <label class="col">Visa Type</label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset">Select</legend>
                                    <select name="country" class="border-0 w-100">
                                        <option value="Tourist Visa">Tourist Visa</option>
                                    </select>
                                </fieldset>
                            </div>

                        </div>

                        <!-- input entry type -->
                        <div class="row p-3">
                            <label class="col">Entry Type</label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset">Select</legend>
                                    <select name="country" class="border-0 w-100">
                                        <option value="Tourist Visa">Multiple</option>
                                    </select>
                                </fieldset>
                            </div>

                        </div>

                        <!-- input visa document type -->
                        <div class="row p-3">
                            <label class="col">Visa Document Type</label>

                            <div class="col">
                                <fieldset class="reset ff-border mx-auto w-50">
                                    <legend class="reset">Select</legend>
                                    <select name="country" class="border-0 w-100">
                                        <option value="Tourist Visa">Sticker Visa</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>

                        <!-- input visa duration type -->
                        <div class="row p-3">
                            <label class="col">Visa Duration</label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset">Select</legend>
                                    <select name="country" class="border-0 w-100">
                                        <option value="Tourist Visa">90</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>


                        <h1 class="fs-5 ff-text-color"><u>Processing Time</u></h1>

                        <!-- input Embassy Processing Time -->
                        <div class="row p-3">
                            <label class="col">Embassy Processing Time</label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset">Working Day</legend>
                                    <input class="border-0 w-100">
                                </fieldset>
                            </div>
                        </div>

                        <!-- input Embassy Processing Time -->
                        <div class="row p-3">
                            <label class="col">Our Office Processing Time</label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset">Working Day</legend>
                                    <input class="border-0 w-100">
                                </fieldset>
                            </div>
                        </div>

                        <hr>

                        <div class="row p-3">
                            <label class="col">Total Processing Time</label>

                            <div class="col">
                                <div class="reset ff-border w-75 mx-auto row p-2">
                                    <text class="reset f-6 col">Day</text>
                                    <input name="country" class="border-0 w-75 col">
                                </div>
                            </div>

                        </div>


                        <h1 class="fs-5 ff-text-color"><u>Passport</u></h1>

                        <!-- input Minimum Validity -->
                        <div class="row p-3">
                            <label class="col">Minimum Validity</label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset">month</legend>
                                    <input class="border-0 w-100">
                                </fieldset>
                            </div>
                        </div>

                        <!-- input Embassy Processing Time -->
                        <div class="row p-3">
                            <label class="col">Minimum Blank Page</label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset">month</legend>
                                    <input class="border-0 w-100">
                                </fieldset>
                            </div>
                        </div>


                    </div>

                    <!-- right column -->
                    <div class="container w-50 col">
                        <h1 class="fs-5 ff-text-color"><u>Cost Details</u></h1>

                        <!-- input Embassy Fee Fee  -->
                        <div class="row p-3">
                            <label class="col">Embassy Fee</label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset f-6">BDT</legend>
                                    <input name="country" class="border-0 w-100">
                                </fieldset>
                            </div>

                        </div>

                        <!-- input Embassy Fee Fee  -->
                        <div class="row p-3">
                            <label class="col">Embassy Agent Fee</label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset f-6">BDT</legend>
                                    <input name="country" class="border-0 w-100">
                                </fieldset>
                            </div>

                        </div>

                        <!-- input Embassy Agent Fee -->
                        <div class="row p-3">
                            <label class="col">Others Cost</label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset f-6">BDT</legend>
                                    <input name="country" class="border-0 w-100">
                                </fieldset>
                            </div>

                        </div>

                        <!-- input Others Cost -->
                        <div class="row p-3">
                            <label class="col">Our Service Charge</label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset f-6">BDT</legend>
                                    <input name="country" class="border-0 w-100">
                                </fieldset>
                            </div>

                        </div>

                        <hr>

                        <div class="row p-3">
                            <label class="col">Total Cost</label>

                            <div class="col">
                                <div class="reset ff-border w-75 mx-auto row p-2">
                                    <text class="reset f-6 col">BDT</text>
                                    <input name="country" class="border-0 w-75 col">
                                </div>
                            </div>

                        </div>

                        <h1 class="fs-5 ff-text-color"><u>Financial Document</u></h1>

                        <!-- input Embassy Fee Fee  -->
                        <div class="row p-3">
                            <label class="col">Bank Statement</label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset f-6">Month</legend>
                                    <input name="country" class="border-0 w-100">
                                </fieldset>
                            </div>

                        </div>

                        <!-- input Embassy Fee Fee  -->
                        <div class="row p-3">
                            <label class="col">Period</label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset f-6">BDT</legend>
                                    <input name="country" class="border-0 w-100">
                                </fieldset>
                            </div>

                        </div>

                        <!-- input Embassy Agent Fee -->
                        <div class="row p-3">
                            <label class="col">Minimum Balance</label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset f-6">BDT</legend>
                                    <input name="country" class="border-0 w-100">
                                </fieldset>
                            </div>

                        </div>


                        <!-- input visa duration type -->
                        <div class="row p-3">
                            <label class="col">Bank Solvency</label></label>

                            <div class="col">
                                <fieldset class="reset ff-border w-50 mx-auto">
                                    <legend class="reset">Select</legend>
                                    <select name="country" class="border-0 w-100">
                                        <option value="Tourist Visa">Yes</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </main>
    </div>



    <?php include './../external-scripts.php' ?>
</body>

</html>