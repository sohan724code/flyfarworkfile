<?php 

include "./../../../session.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Bootstrap DataTable CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./../../../css/style.css">
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

    <title>Fly Far International</title>
</head>

<body>
    <div class="page-container mb-5">
        <!-- Side Navbar -->
        <nav class="side-nav d-lg-block" id="side-navbar" class="w-50 ms-4 mt-4">
            <img src="./../../../images/logo.gif" alt="Fly Far Int Logo" width="230" style=" margin-top: -20px;">

            <div class="ms-4 " style="width: 80%;">
                <a href="./index.php">
                    <div class="sidenav-link">
                        Dashboard
                    </div>
                </a>

                <div class="sidenav-link navlink-with-icon" id="inquery-btn">
                    <span>Inquiry Management</span>
                    <img src="./images/dashboardimage12.svg" alt="" class="h-5 w-5 nav-arrow">
                </div>
                <div class="inner-nav" id="inner-inquery-links">

                    <a href="./InquiryManagement/air-ticket-search.php">
                        <div class="inner-nav-link">
                            Air Ticket Search
                        </div>
                    </a>

                    <a href="./InquiryManagement/visaInformation.php">
                        <div class="inner-nav-link">
                            Visa Information
                        </div>
                    </a>

                    <a href="./InquiryManagement/passportSearch.php">
                        <div class="inner-nav-link">
                            Passport Search
                        </div>
                    </a>

                    <a href="./InquiryManagement/FFLPackage.php">
                        <div class="inner-nav-link">
                            FFL Package
                        </div>
                    </a>

                    <a href="./InquiryManagement/tripsPackage.php">
                        <div class="inner-nav-link">
                            Trips Package
                        </div>
                    </a>

                    <a href="./InquiryManagement/TravelRules.php">
                        <div class="inner-nav-link">
                            Travel Rules
                        </div>
                    </a>
                </div>

                <a href="#">
                    <div class="sidenav-link">
                        Task Management
                    </div>
                </a>
 <a href="../../../bookingManagement/bookingManagement.php">
                    <div class="sidenav-link">
                        Booking Management
                    </div>
                </a>

                <a href="#">
                    <div class="sidenav-link">
                        Requirements
                    </div>
                </a>
                <div class="sidenav-link navlink-with-icon" id="quation-btn">
                    <span>Quotation</span> <img src="./images/dashboardimage11.svg" alt="" class="h-5 w-5 nav-arrow">
                </div>
                <div class="inner-nav" id="inner-quation-links">
                    <a href="./quotation/packageQuotation.php">
                        <div class="inner-nav-link">
                            Package Quotation
                        </div>
                    </a>
                    <a href="">
                        <div class="inner-nav-link">
                            Air Ticket Quotation
                        </div>
                    </a>
                    <a href="#">
                        <div class="inner-nav-link">
                            Visa Quotation
                        </div>
                    </a>
                    <a href="#">
                        <div class="inner-nav-link">
                            Hotel Quotation
                        </div>
                    </a>
                    <a href="#">
                        <div class="inner-nav-link">
                            Travel Assistance
                        </div>
                    </a>
                    <a href="#">
                        <div class="inner-nav-link">
                            Insurance Quotation
                        </div>
                    </a>
                    <a href="#">
                        <div class="inner-nav-link">
                            General Quotation
                        </div>
                    </a>
                </div>
                <div class="sidenav-link navlink-with-icon" id="invoice-btn">
                    <span>Invoice</span> <img src="./images/dashboardimage10.svg" alt="" class="h-5 w-5 nav-arrow">
                </div>
                <div class="inner-nav" id="inner-invoice-links">
                    <a href="visaInvoice.php" target="_blank">
                        <div class="inner-nav-link">
                            Visa Invoice
                        </div>
                    </a>
                    <a href="visaInvoicePDF.php">
                        <div class="inner-nav-link">
                            Visa Invoice PDF
                        </div>
                    </a>
                </div>
                <a href="#">
                    <div class="sidenav-link">
                        Money Receipt
                    </div>
                </a>
                <div class="sidenav-link navlink-with-icon" id="expense-btn">
                    <span>Expense</span> <img src="./images/dashboardimage9.svg" alt="" class="h-5 w-5 nav-arrow">
                </div>
                <div class="inner-nav" id="inner-expense-links">
                    <a href="OfficeExpense.php">
                        <div class="inner-nav-link">
                            Vendor Payment
                        </div>
                    </a>
                    <a href="OfficeExpense.php">
                        <div class="inner-nav-link">
                            Office Expenses
                        </div>
                    </a>
                    <a href="OfficeExpense.php">
                        <div class="inner-nav-link">
                            Other Expenses
                        </div>
                    </a>
                </div>
                <div class="sidenav-link navlink-with-icon" id="Setup-btn">
                    <span>Setup</span> <img src="./images/dashboardimage8.svg" alt="" class="h-5 w-5 nav-arrow">
                </div>
                <div class="inner-nav" id="inner-Setup-links">
                    <a href="">
                        <div class="inner-nav-link">
                            Account Setup
                        </div>
                    </a>
                    <a href="">
                        <div class="inner-nav-link">
                            Admin Setup
                        </div>
                    </a>
                    <a href="./setup/visa-query-setup.php">
                        <div class="inner-nav-link">
                            Visa Query Setup
                        </div>
                    </a>
                    <a href="index.php">
                        <div class="inner-nav-link">
                            Manage Website
                        </div>
                    </a>
                </div>
                <a href="#">
                    <div class="sidenav-link">
                        Chart of Account
                    </div>
                </a>
                <div class="sidenav-link navlink-with-icon" id="report-btn">
                    <span>Report</span> <img src="./images/deshboardimage7.svg" alt="" class="h-5 w-5 nav-arrow">
                </div>
                <div class="inner-nav" id="inner-report-links">
                    <a href="prepaidUnearnedReciveable.php">
                        <div class="inner-nav-link">
                            Account Report
                        </div>
                    </a>
                    <a href="#">
                        <div class="inner-nav-link">
                            Admin Report
                        </div>
                    </a>
                    <a href="#">
                        <div class="inner-nav-link">
                            Management Report
                        </div>
                    </a>
                </div>
                <a href="#">
                    <div class="sidenav-link">
                        Reconcile
                    </div>
                </a>
                <div class="sidenav-link navlink-with-icon" id="log-btn">
                    <span>Log</span> <img src="./images/dashboardimage5.svg" alt="" class="h-5 w-5 nav-arrow">
                </div>
                <div class="inner-nav" id="inner-log-links">
                    <a href="#">
                        <div class="inner-nav-link">
                            Activity Log
                        </div>
                    </a>
                    <a href="#">
                        <div class="inner-nav-link">
                            Deal History Log
                        </div>
                    </a>
                </div>
                <a href="#">
                    <div class="sidenav-link">
                        My Productivity Report
                    </div>
                </a>

            </div>
        </nav>

        <main class="container-fluid p-3">
            <div class="d-lg-none d-flex justify-content-end mb-1">
                <img src="./images/dashboardimage6.svg" alt="" class="h-5 w-5 mobile-menu" id="mobile-menu">
            </div>

            <div class="container-fluid d-flex justify-content-between align-items-center">
                <div class="position-relative d-flex">
                    <img src="./images/dashboardimage4.svg" alt="" class="search-icon">
                    <input class="form-control form-control-sm ps-4" type="text" placeholder="Enter Keywords">
                </div>
                <div class="d-flex">
                    <div class="dropdown me-3 mt-1">
                        <div class="fs-6 dropdown-toggle" role="button" id="dropdownMenu2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            EN
                        </div>
                    </div>
                    <div class="top-icons">
                        <img src="./images/dashboardimage3.svg" alt="">
                    </div>
                    <div class="top-icons">
                        <img src="./images/dashboardimage2.svg" alt="">
                    </div>

                    <button type="button" class="btn btn-sm  dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"> <img src="images/avatar.jpg" alt="" width="30" style="margin-top: -5px;">
                    </button>
                    <ul class="dropdown-menu shadow" style="width: 200px;">
                        <li class="p-0 m-0">
                            <a class="dropdown-item" href="#">
                                Fahim
                            </a>
                        </li>
                        <li class="p-0 m-0">
                            <hr class="dropdown-divider">
                        </li>

                        <li><a class="dropdown-item" href="#">My Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Chat</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>

            <!-- todo main content  starts here-->
            <div class="container admin-content">

                <div class="anp-btn-box">
                    <a href="index.php" class="option">Home</a>

                    <div class="select-option">
                        <div class="package-link">Package</div>
                        <ul>
                            <li><a href="./add-package.php">Add Package</a></li>
                            <li><a href="./package.php">All Packages</a></li>
                            <li><a href="./package-text.php">Package Text</a></li>
                        </ul>
                    </div>

                    <!-- <a href="#" class="option">Jobs</a> -->
                    <!-- <div class="select-option">
                        <div class="package-link">Jobs</div>
                        <ul>
                            <li><a href="./add-package.php">Add Jobs</a></li>
                            <li><a href="./job-package.php">All Jobs</a></li>
                            <li><a href="./job-text.php">Job Text</a></li>
                        </ul>
                    </div> -->
                    <!-- <a href="#" class="option">Gallery</a> -->
                    <!-- <div class="select-option">
                        <div class="package-link">Gallery</div>
                        <ul>
                            <li><a href="./add-package.php">Add Gallery</a></li>
                            <li><a href="./gallery-package.php">All Gallery</a></li>
                            <li><a href="./gallery-text.php">Gallery Text</a></li>
                        </ul>
                    </div> -->

                </div>
                <!-- ! ends  -->

                <!-- todo when i click package tour button this from will show -->
                <!-- !starts  -->
                <div class="apsection" id="apsection">

                    <form action="#" class="ptour" method="POST">
                        <h5 class="anp-h5">Package Text</h5>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="ptour-input">
                                        <label for="packageText" class="form-label">Main Text</label>
                                        <input type="text" class="form-control" id="packageText" name="packageText"
                                            placeholder="Best Tour Package">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="ptour-input">
                                        <label for="packageTitleText" class="form-label">Title Text</label>
                                        <input type="text" class="form-control" id="packageTitleText"
                                            name="packageTitleText"
                                            placeholder="You can find the best package from here and select it and travel around the world!">
                                    </div>
                                </div>

                                <div class="anp-input-submit">
                                    <button type="submit">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                    

                    $servername = "sg1-ts2.a2hosting.com";
                    $username = "flyfarin_flyfarladies";
                    $password = "@Kayes70455";
                    $dbname = "flyfarin_flyfarladies";

                    // Create connection
                    $connect = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($connect->connect_error) {
                    die("Connection failed: " . $connect->connect_error);
                    }




                    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

                    $packageText = $_POST["packageText"];
                    $packageTitleText = $_POST["packageTitleText"];
                    


                        $sql = "INSERT INTO `packageContent`(`main`, `title`)
                        VALUES ('$packageText','$packageTitleText')";

                        if ($connect->query($sql) === TRUE) {
                            print '<script>
																	swal({
																	title: "Success!",
																	text: "Saved Successfully!",
																	type: "success",
																	confirmButtonText: "Cool"
																	},
																	function(){
																		window.location=\'index.php\'
																		});
																	</script>';
                        } else {
                        echo "Error: " . $sql . "<br>" . $connect->error;
                        }

                        $connect->close();

                        }

                        ?>




                </div>
                <!-- !ends  -->

            </div>
            <!-- todo main content  ends here-->
        </main>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- jaqury CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- jquery datepicker theme ui  -->
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <!-- External JavaScript -->
    <script src="./../../../js/script.js"></script>
    <script src="./../../../js/flyfarladies-home.js"></script>

    <!-- DataTable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>




</body>

</html>