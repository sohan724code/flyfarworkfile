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

    <!-- font awesome toolkit  -->
    <script src="https://kit.fontawesome.com/334d847a1e.js" crossorigin="anonymous"></script>

    <!-- ckeditor cdn  -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>



    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./../../../css/style.css">

    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

    <title>Fly Far International</title>
</head>



<body>
    <div class="page-container mb-5">
        <!-- Side Navbar -->
        <nav class="side-nav  d-lg-block" id="side-navbar" class="w-50 ms-4 mt-4">
            <img src="./../../../images/logo.gif" alt="Fly Far Int Logo" width="230px" style=" margin-top: -20px;">

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
                    <span>Quotation</span> <img src="./../../images/dashboardimage11.svg" alt=""
                        class="h-5 w-5 nav-arrow">
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
                    <a href="./setup/manage-website/fly-far-ladies/index.php">
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

        <main class="p-3">
            <div class="d-lg-none d-flex justify-content-end">
                <img src="./images/dashboardimage6.svg" alt="" class="h-5 w-5 mobile-menu">
            </div>

            <div class="mt-3 d-flex justify-content-between align-items-center">
                <div class="position-relative d-flex">
                    <img src="./images/dashboardimage4.svg" alt="" class="search-icon">
                    <input class="form-control form-control-sm ps-4" type="text" placeholder="Enter Keywords">
                </div>
                <div class="d-flex">
                    <div class="dropdown me-3 mt-1">
                        <div class="fs-6 dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
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
                        aria-expanded="false"> <img src="images/avatar.jpg" alt="" width="30px"
                            style="margin-top: -5px;">
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

            <!-- todo main content  starts here-->
            <div class="container">
                <form class="addpackage" id="addpackage" method="post" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <a class="back-btn" href="index.php">
                                    <i class="fa-solid fa-angle-left"></i>
                                    Back
                                </a>
                            </div>
                            <div class="add-package-box">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="packageid" class="form-label">Pess Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Pess Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="packageid" class="form-label">Press Message</label>
                                                <input type="text" class="form-control" name="message"
                                                    placeholder="Press Message" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="packageid" class="form-label">Press Link</label>
                                                <input type="text" class="form-control" name="link"
                                                    placeholder="Press Link" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="adpack-input">
                                                <label for="coverimage" class="form-label">Thumbnail Image (864 X
                                                    486)</label>
                                                <input type="file" class="form-control-file" name="coverimage" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 d-flex justify-content-end my-3">
                                            <button type="submit" class="save-changes">Add Media Press</button>
                                        </div>
                                    </div>
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

                        $name = $_POST["name"];
                        $message = $_POST["message"];
                        $link = $_POST["link"];
                        

                        $upload_dir = '../../../../cdn.flyfarladies.com/Press/'.DIRECTORY_SEPARATOR;         
                            $fileName = $_FILES["coverimage"]["name"];
                            $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
                            $targetFilePath = $upload_dir.$fileName;
                            
                            $allowTypes = array('jpg','png','jpeg','gif','webp','PNG','JPEG','jpeg');
                        
                            if(in_array($fileType, $allowTypes)){
                                // Upload file to server
                                if(move_uploaded_file($_FILES["coverimage"]["tmp_name"], $targetFilePath)){
                                    echo "File Uploaded";
                                    
                                }else{
                                    $statusMsg = "Sorry, there was an error uploading your file.";
                                }
                            }else{
                                $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                            }
                                               

                    $sql = "INSERT INTO `media_coverage`(`source`,`name`, `message`, `link`) 
                                        VALUES ('$fileName','$name', '$message', '$link')";

                    if ($connect->query($sql) === TRUE) {
                        print '<script>
                                                            swal({
                                                            title: "Success!",
                                                            text: "Press Added Successfully!",
                                                            type: "success",
                                                            confirmButtonText: "Cool"
                                                            },
                                                            function(){
                                                                window.location=\'presscoverage.php\'
                                                                });
                                                        </script>';
                    } else {
                        echo "Error: " . $sql . "<br>" . $connect->error;
                    }

                    $connect->close();

                    }

                    ?>



            </div>
            <!-- todo main content  ends here-->
        </main>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- External JavaScript -->
    <script src="../../../js/script.js"></script>

    <!-- DataTable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor1'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor2'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor3'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor4'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor5'))
        .catch(error => {
            console.error(error);
        });
    </script>





</body>

</html>