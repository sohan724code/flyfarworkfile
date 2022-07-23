<?php
include_once('./../../../session.php');
include_once('config.php');
$sql = "SELECT * FROM allpackages ORDER BY id DESC LIMIT 1";
                    $result = $connect->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $outputString = preg_replace('/[^0-9]/', '', $row["pkId"]);
                            $number= (int)$outputString + 1;
                            $PKG_Id = "PKG-$number";									
                        }
                    } else {
                        $PKG_Id ="PKG-1000";
                    }


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
                        <div style='color:#767676' class="fs-6 dropdown-toggle" role="button" id="dropdownMenu2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            EN
                        </div>
                    </div>

                    <div class="top-icons">
                        <img src="../../../images/dashboardimage3.svg" alt="">
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

                        <div class="package-link"><a id='package-link-a' href="package.php" class="option">Package</a>
                        </div>

                    </div>

                    <div class="select-option">
                        <div id="media-coverage" class="package-link">Blog</div>
                        <ul>
                            <li><a href="./presscoverage.php">Add Coverage</a></li>
                        </ul>
                    </div>
                    <div class="select-option">
                        <div class="package-link">Gallery</div>
                    </div>
                </div>
                <!-- ! ends  -->
                <!--todo when i click home button this form will show home section form  -->

                <div class="anp-input-submit" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    style="margin-top: 20px;">
                    <button type="submit"> Add Package + </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Package</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="action" value="add">
                                    <!-- Package Section Start -->

                                    <h5 class=" anp-h5">Package section</h5>
                                    <div class="container-fluid">

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Package Title Text
                                                        English</label>
                                                    <input require type="text" class="form-control" id="titleEN"
                                                        name="titleEN" placeholder="Package Title Text
                                                        English" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Package Title Text
                                                        Bangla</label>
                                                    <input require type="text" class="form-control" id="titleBN"
                                                        name="titleBN" placeholder="প্যাকেজ টাইটেল ইন বাংলা " required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Package Long Title
                                                        Text English</label>
                                                    <input require type="text" class="form-control" id="longTitleEN"
                                                        name="longTitleEN" placeholder="Package Long Title Text English"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Package Long Title
                                                        Text Bangla</label>
                                                    <input require type="text" class="form-control" id="longTitleBN"
                                                        name="longTitleBN" placeholder="প্যাকেজ লং টাইটেল ইন বাংলা "
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Package Location
                                                        English</label>
                                                    <input require type="text" class="form-control" id="locationEN"
                                                        name="locationEN" placeholder="Package Location
                                                        English" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Package Location
                                                        Bangla </label>
                                                    <input require type="text" class="form-control" id="locationBN"
                                                        name="locationBN" placeholder="ভ্রমণ লোকেশন ইন বাংলা " required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="shortDescriptionEN" class="form-label">Package Short
                                                        Description English</label>
                                                    <input require type="text" class="form-control"
                                                        id="shortDescriptionEN" name="shortDescriptionEN"
                                                        placeholder="Package Short Description English" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="shortDescriptionBN" class="form-label">Package Short
                                                        Description Bangla</label>
                                                    <input require type="text" class="form-control"
                                                        id="shortDescriptionBN" name="shortDescriptionBN"
                                                        placeholder="ভ্রমণ সম্পর্কিত স্বত্ব বিবরণ " required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Package journey
                                                        Start Date English</label>
                                                    <input require type="text" class="form-control" id="startDateEN"
                                                        name="startDateEN"
                                                        placeholder="Package journey Start Date English" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Package journey
                                                        Start Date Bangla</label>
                                                    <input require type="text" class="form-control" id="bannerShortText"
                                                        name="startDateBN" placeholder="ভ্রমণ শুরুর তারিখ " required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Package journey End
                                                        Date English</label>
                                                    <input require type="text" class="form-control" id="bannerShortText"
                                                        name="endDateEN" placeholder="Package journey End Date English"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="endDateBN" class="form-label">Package journey End Date
                                                        Bangla</label>
                                                    <input require type="text" class="form-control" id="endDateBN"
                                                        name="endDateBN" placeholder="ভ্রমণ শেষের তারিখ" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Package Duration
                                                        English</label>
                                                    <input require type="text" class="form-control" id="durationEN"
                                                        name="durationEN" placeholder="Package Duration
                                                        English" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Package Duration
                                                        Bangla</label>
                                                    <input require type="text" class="form-control" id="durationBN"
                                                        name="durationBN" placeholder="ভ্রমণের সময়কাল " required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="anp-input">
                                                    <label for="price" class="form-label">Package Price in
                                                        English</label>
                                                    <input type="text" class="form-control" id="price" name="price"
                                                        placeholder="Package Price in
                                                        English" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                <div class='select-parent'>
                                                    <select name="triptype" class="form-select"
                                                        aria-label="Default select example" required>
                                                        <option selected disabled>Trip Type</option>
                                                        <option value="day">Day Trip</option>
                                                        <option value="night">Night Trip</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4">
                                                <div class='select-parent'>
                                                    <select name="tripplan" class="form-select"
                                                        aria-label="Default select example" required>
                                                        <option selected disabled>Tour Plan</option>
                                                        <option Value="inbound">Domestic</option>
                                                        <option value="outbound">International</option>
                                                    </select>

                                                </div>
                                            </div>



                                            <div class="col-lg-4 col-md-4">
                                                <div class='select-parent'>
                                                    <select name="tripTheme" class="form-select"
                                                        aria-label="Default select example" required>
                                                        <option selected disabled>Trip Theme</option>
                                                        <option value="Luxurious">Luxurious</option>
                                                        <option value="Budget">Budget</option>
                                                        <option value="Trekking">Trekking</option>
                                                        <option value="Adventure">Adventure</option>
                                                        <option value="Relax">Relax</option>
                                                        <option value="Activity">Activity</option>
                                                        <option value="Others">Others</option>
                                                    </select>

                                                </div>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Place to visit in
                                                        English</label>
                                                    <textarea require type="text" class="form-control" id="placevisitEN"
                                                        name="placevisitEN" placeholder="Place to visit in
                                                        English" rows="10" required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Place to visit in
                                                        Bangla</label>
                                                    <textarea require type="text" class="form-control" id="placevisitBN"
                                                        name="placevisitBN" placeholder="ভ্রমণের জায়গা " rows="10"
                                                        required></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Schedule details in
                                                        English</label>
                                                    <input require type="text" class="form-control"
                                                        id="scheduledetailsEN" name="scheduledetailsEN"
                                                        placeholder="Schedule details in English" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Schedule details in
                                                        Bangla</label>
                                                    <input require type="text" class="form-control"
                                                        id="scheduledetailsBN" name="scheduledetailsBN"
                                                        placeholder="বিস্তারিত সময়সূচী" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Inclusion details in
                                                        English</label>
                                                    <textarea require type="text" class="form-control" id="inclusionEN"
                                                        rows="10" name="inclusionEN"
                                                        placeholder="Inclusion details in English" required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Inclusion details in
                                                        Bangla</label>
                                                    <textarea require type="text" class="form-control" id="inclusionBN"
                                                        rows="10" name="inclusionBN" placeholder="Inclusion details in
                                                        Bangla" required></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Exclusion details in
                                                        English</label>
                                                    <textarea require type="text" class="form-control" id="exclusionEN"
                                                        name="exclusionEN" placeholder="Exclusion details in English"
                                                        rows="10" required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Exclusion details in
                                                        Bangla</label>
                                                    <textarea require type="text" class="form-control" id="exclusionBN"
                                                        rows="10" name="exclusionBN" placeholder="অন্তর্ভুক্তির বিবরণ"
                                                        required></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Details description
                                                        English</label>
                                                    <textarea class="form-control" id="detailsEN" name="detailsEN"
                                                        rows="10" placeholder="Details description English"
                                                        required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="detailsBN" class="form-label">Details description
                                                        Bangla</label>
                                                    <textarea required class="form-control" id="detailsBN" rows="10"
                                                        name="detailsBN" placeholder="বিস্তারিত বিবরণ "></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Package  Section end here -->

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Additional
                                                        Information in English</label>
                                                    <textarea required class="form-control" id="additionalEN" rows="10"
                                                        name="additionalEN"
                                                        placeholder="Additional Information in English"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Additional
                                                        Information in Bangla</label>
                                                    <textarea type="text" class="form-control" id="additionalBN"
                                                        rows="10" name="additionalBN"
                                                        placeholder="অতিরিক্ত তথ্য ইন বাংলা" required></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Travel Trips in
                                                        English</label>
                                                    <textarea required class="form-control" id="traveltripsEN" rows="10"
                                                        name="traveltripsEN"
                                                        placeholder="Travel Trips in English"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Travel Trips in
                                                        Bangla</label>
                                                    <textarea type="text" class="form-control" id="traveltripsBN"
                                                        rows="10" name="traveltripsBN"
                                                        placeholder="যাতায়াতের সময় হাইওয়ে তে যেকোনো খাওয়া দাওয়ার খরচ।"
                                                        required></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <!-- Booking Policy Section start here -->

                                    <div class="container-fluid">

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Booking policy in
                                                        English</label>
                                                    <textarea class="form-control" id="bookingpolicyEN" rows="10"
                                                        name="bookingpolicyEN" placeholder="Booking policy in
                                                        English" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Booking policy in
                                                        Bangla</label>
                                                    <textarea class="form-control" id="bookingpolicyBN" rows="10"
                                                        name="bookingpolicyBN" placeholder="বুকিং পলিসি ইন বাংলা "
                                                        required></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Refund policy in
                                                        English</label>
                                                    <textarea type="text" class="form-control" id="refundpolicyEN"
                                                        rows="10" name="refundpolicyEN" placeholder="Refund policy in
                                                        English" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Refund policy in
                                                        Bangla</label>
                                                    <textarea type="text" class="form-control" id="refundpolicyBN"
                                                        rows="10" name="refundpolicyBN"
                                                        placeholder="রিফান্ড পলিসি ইন বাংলা" required></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Terms and Conditions
                                                        in English</label>
                                                    <textarea required class="form-control" id="termEN" name="termsEN"
                                                        rows="10"
                                                        placeholder="Terms and Conditions in English"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="anp-input">
                                                    <label for="bannerShortText" class="form-label">Terms and Conditions
                                                        in Bangla</label>
                                                    <textarea type="text" class="form-control" id="termBN"
                                                        name="termsBN" rows="10"
                                                        placeholder="টার্মস এন্ড কন্ডিশন ইন বাংলা " required></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Booking Policy Section end here -->


                                    <!-- package image section start here -->

                                    <h3 class=" anp-h2 custom-margin">Package Image</h3>

                                    <div class="container-fluid">

                                        <div class="row d-flex align-items-center ">

                                            <div class=" col-xl-4  col-lg-6 col-md-6 mt-0">

                                                <div class="adpack-input py-3 packageImageInput">
                                                    <label for="coverimage" class="form-label">Package Image </label>
                                                    <!-- <input type="file" class="upload__input form-control-file" name="coverimage" required> -->
                                                    <input type="file" class="form-control-file" id="img"
                                                        name="coverimage" required>
                                                </div>
                                            </div>

                                            <div class=" col-xl-4  col-lg-6 col-md-6 mt-0">

                                                <div class="adpack-input py-3 packageImageInput">
                                                    <label for="coverimage" class="form-label">Slider Image (Max 6 Image
                                                        )</label>
                                                    <input type="file" class="upload__input form-control-file"
                                                        name="files[]" multiple required>
                                                </div>


                                            </div>
                                            <div class=" col-xl-2 col-lg-3 col-md-3 mt-0">
                                                <div class='package-img mb-2 imageBox'>
                                                    <div id="selectedBanner"></div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- slider end -->
                                    </div>


                                    <!--  package image section end here -->

                                    <div class="anp-input-submit text-center  d-block" style="margin-top:20px">
                                        <button type="submit">Add Package + </button>
                                    </div>

                                </form>
                            </div>


                        </div>

                    </div>
                </div>



                <!-- !starts  -->

                <div class="ahsection" id="ahsection">

                    <!-- Tobanner Start -->

                    <h3 class=" anp-h2 custom-margin fs-5">Upload Package</h3>

                    <div class="container-fluid">
                        <div class="row">

                            <?php

                            include 'config.php';

                            $sql = "SELECT * FROM allpackages ORDER BY id DESC";
                            $result = $connect->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $id = $row['id'];
                                    $imageLink = $row["coverimage"];
                                    $pkId = $row['pkId']; 
                                    $titleEN = $row["titleEN"];
                                    $titleBN = $row["titleBN"];
                                    $longTitleEN = $row["longTitleEN"];
                                    $longTitleBN = $row["longTitleBN"];
                                    $locationEN = $row["locationEN"];
                                    $locationBN = $row["locationBN"];
                                    $shortDescriptionEN = $row["shortDescriptionEN"];
                                    $shortDescriptionBN = $row["shortDescriptionBN"];
                                    $startDateEN = $row["startDateEN"];
                                    $startDateBN = $row["startDateBN"];
                                    $endDateEN = $row["endDateEN"];
                                    $endDateBN = $row["endDateBN"];
                                    $durationEN = $row["durationEN"];
                                    $durationBN = $row["durationBN"];
                                    $price = $row["price"];
                                    $tripTheme = $row["tripTheme"];
                                    $triptype = $row["triptype"];
                                    $tripplan = $row["tripplan"];
                                    $scheduledetailsEN = $row["scheduledetailsEN"];
                                    $scheduledetailsBN = $row["scheduledetailsBN"];
                                    $inclusionEN = $row["inclusionEN"];
                                    $inclusionBN = $row["inclusionBN"];
                                    $exclusionEN = $row["exclusionEN"];
                                    $exclusionBN = $row["exclusionBN"];                                               
                                    $placevisitEN = $row["placevisitEN"];
                                    $placevisitBN = $row["placevisitBN"];
                                    $detailsEN  = $row["detailsEN"];
                                    $detailsBN  = $row["detailsBN"];
                                    $bookingpolicyEN = $row["bookingpolicyEN"];
                                    $bookingpolicyBN = $row["bookingpolicyBN"];
                                    $refundpolicyEN  = $row["refundpolicyEN"];
                                    $refundpolicyBN  = $row["refundpolicyBN"];
                                    $termsEN = $row["termsEN"];
                                    $termsBN = $row["termsBN"];
                                    $additionalEN = $row["additionalEN"];
                                    $additionalBN = $row["additionalBN"];
                                    $traveltipsEN = $row["traveltipsEN"];
                                    $traveltipsBN = $row["traveltipsEN"];

                                    echo"<div class='col-12 col-md-6 col-lg-3'>
                                <div class='card border-0 ' style='width: 18rem;'>

                                    <div class='slider-header text-center '>
                                        <h4>Package : $pkId</h4>
                                    </div>

                                    <div class='card-border'>

                                        <div class='package-img text-center'>
                                            <img class='img-thumbnail' class='mb-2' src='$imageLink'
                                                class='rounded float-start' alt='...'>
                                        </div>

                                        <div class='  card-body  '>

                                            <div class='d-flex justify-content-between card-btn py-2'>
                                                <div>
                                                    <h3>$titleEN</h3>
                                                </div>
                                                <div>
                                                    <p>BDT $price</p>
                                                </div>
                                            </div>


                                            <div class='d-flex justify-content-between card-btn py-2'>
                                                <div>
                                                    <h3> <img style='width: 15px; margin-right: 5px; '
                                                            src='../../../images/location.png' /> $locationEN
                                                    </h3>
                                                    <span>Start Date: $startDateEN</span>
                                                    <span>End Date: $endDateEN</span>
                                                </div>
                                            </div>




                                            <div class='book-btn d-flex justify-content-between align-items-center card-btn'>
                                                <div>
                                                    <h3> <img style='width: 15px; margin-right: 5px; '
                                                            src='../../../images/time-clock.png' />$durationEN
                                                    </h3>
                                                </div>                                               
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class=' card-btn  mt-3  border-0 d-flex justify-content-around  update-delete-div'>

                                        <form action='#' method='POST'>
                                            <input type='hidden' value='delete' name='action'>
                                            <input type='hidden' value='$id' name='id'>
                                            <input type='hidden' value='$pkId' name='pkId'>
                                        <div> <button type='submit'>Delete </button> </div>
                                        </form>
                                        <button type='button' data-bs-toggle='modal' data-bs-target='#exampleModal$id'>
                                            Update
                                        </button>

                                        <div class='modal fade' id='exampleModal$id' tabindex='-1' aria-labelledby='exampleModalLabel$id' aria-hidden='true'>
                                        <div class='modal-dialog modal-xl modal-dialog-scrollable'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='exampleModalLabel$id'>Update Package</h5>
                                                    <button type='button' class='btn-close' data-bs-dismiss='modal'
                                                        aria-label='Close'></button>
                                                </div>
                                                <div class='modal-body'>
                                                    <form action='#' method='POST' enctype='multipart/form-data'>
                                                        <input type='hidden' value='update' name='action'>
                                                        <div class='container-fluid'>
                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Package Title Text
                                                                            English</label>
                                                                        <input require type='text' class='form-control' id='titleEN'
                                                                            name='titleEN'value='$titleEN' placeholder='Package Title Text
                                                                            English' required>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Package Title Text
                                                                            Bangla</label>
                                                                        <input require type='text' class='form-control' id='titleBN'
                                                                            name='titleBN' value='$titleBN' placeholder='প্যাকেজ টাইটেল ইন বাংলা' required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Package Long Title
                                                                            Text
                                                                            English</label>
                                                                        <input require type='text' class='form-control' id='longTitleEN'
                                                                            name='longTitleEN' value='$longTitleEN' placeholder='Package Long Title
                                                                            Text
                                                                            English'
                                                                            required>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Package Long Title
                                                                            Text
                                                                            Bangla</label>
                                                                        <input require type='text' class='form-control' id='longTitleBN'
                                                                            name='longTitleBN' value='$longTitleBN' placeholder='প্যাকেজ লং টাইটেল ইন বাংলা '
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Package Location
                                                                            English</label>
                                                                        <input require type='text' class='form-control' id='locationEN'
                                                                            name='locationEN' value='$locationEN' placeholder='Package Location
                                                                            English'
                                                                            required>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Package Location
                                                                            Bangla </label>
                                                                        <input require type='text' class='form-control' id='locationBN'
                                                                            name='locationBN' value='$locationBN' placeholder='প্যাকেজ লোকেশন ইন বাংলা '
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='shortDescriptionEN' class='form-label'>Package Short
                                                                            Description
                                                                            English</label>
                                                                        <input require type='text' class='form-control'
                                                                            id='shortDescriptionEN' name='shortDescriptionEN' value='$shortDescriptionEN'
                                                                            placeholder='Package Short
                                                                            Description
                                                                            English' required>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='shortDescriptionBN' class='form-label'>Package Short
                                                                            Description
                                                                            Bangla</label>
                                                                        <input require type='text' class='form-control'
                                                                            id='shortDescriptionBN' name='shortDescriptionBN' value='$shortDescriptionBN'
                                                                            placeholder='প্যাকেজ শর্ট ডেসক্রিপশন ইন বাংলা ' required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Package journey
                                                                            Start Date
                                                                            English</label>
                                                                        <input type='text' class='form-control' id='startDateEN' value='$startDateEN' 
                                                                            name='startDateEN' placeholder='Package journey
                                                                            Start Date
                                                                            English' required>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Package journey
                                                                            Start Date
                                                                            Bangla</label>
                                                                        <input require type='text' class='form-control' id='bannerShortText' value='$startDateBN'
                                                                            name='startDateBN' placeholder='প্যাকেজ জার্নি স্টার্ট ডেট ইন বাংলা ' required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Package journey End
                                                                            Date
                                                                            English</label>
                                                                        <input type='text' class='form-control' id='bannerShortText' value='$endDateEN'
                                                                            name='endDateEN' placeholder='Package journey End
                                                                            Date
                                                                            English' required>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='endDateBN' class='form-label'>Package journey End Date
                                                                            Bangla</label>
                                                                        <input type='text' class='form-control' id='endDateBN' value='$endDateBN'
                                                                            name='endDateBN' placeholder='প্যাকেজ জার্নি এন্ড ডেট ইন বাংলা ' required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='row'>
                                                                <div class='col-lg-4 col-md-4'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Package Duration
                                                                            English</label>
                                                                        <input type='text' class='form-control' id='durationEN' value='$durationEN'
                                                                            name='durationEN' placeholder='Package Duration
                                                                            English' required>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-4 col-md-4'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Package Duration
                                                                            Bangla</label>
                                                                        <input type='text' class='form-control' id='durationBN' value='$durationBN'
                                                                            name='durationBN' placeholder='প্যাকেজ দুরেশন ইন বাংলা ' required>
                                                                    </div>
                                                                </div>
                                                                <div class='col-lg-4 col-md-4'>
                                                                    <div class='anp-input'>
                                                                        <label for='price' class='form-label'>Package Price in
                                                                            English</label>
                                                                        <input type='text' class='form-control' id='price' name='price'  value='$price            '
                                                                            placeholder='Package Price in
                                                                            English' required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='row'>
                                                                <div class='col-lg-4 col-md-4'>
                                                                    <div class='select-parent'>
                                                                        <select name='triptype' class='form-select'
                                                                            aria-label='Default select example' required>
                                                                            <option disabled>Trip Type</option>";
                                                                            if($triptype == 'day'){
                                                                                echo"<option selected value='$triptype'>Day Trip</option>";
                                                                                echo"<option value='night'>Night Trip</option>";
                                                                            }else{
                                                                                echo"<option selected value='$triptype'>Night Trip</option>";
                                                                                echo"<option value='night'>Day Trip</option>";
                                                                            }
                                                                            
                                                                        echo"</select>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-4 col-md-4'>
                                                                    <div class='select-parent'>
                                                                        <select name='tripplan' class='form-select'
                                                                            aria-label='Default select example' required>
                                                                            <option disabled>Tour Plan</option>";
                                                                             if($tripplan == 'inbound'){
                                                                                echo"<option selected Value='inbound'>Domestic</option>";
                                                                                echo"<option value='outbound'>International</option>";
                                                                            }else{
                                                                                echo"<option Value='inbound'>Domestic</option>";
                                                                                echo"<option selected value='outbound'>International</option>";
                                                                            }
                                                                            
                                                                        echo"                                                                          
                                                                        </select>

                                                                    </div>
                                                                </div>



                                                                <div class='col-lg-4 col-md-4'>
                                                                    <div class='select-parent'>
                                                                        <select name='tripTheme' class='form-select'
                                                                            aria-label='Default select example' required>
                                                                            <option disabled>Trip Theme</option>
                                                                            <option value='Luxurious'>Luxurious</option>
                                                                            <option value='Budget'>Budget</option>
                                                                            <option value='Trekking'>Trekking</option>
                                                                            <option value='Adventure'>Adventure</option>
                                                                            <option value='Relax'>Relax</option>
                                                                            <option value='Activity'>Activity</option>
                                                                            <option value='Others'>Others</option>
                                                                            <option value='$tripTheme'>$tripTheme</option>
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Place to visit in
                                                                            English</label>
                                                                        <textarea require type='text' class='form-control' id='placevisitEN'
                                                                            name='placevisitEN' placeholder='Place to visit in
                                                                            English' rows='10'
                                                                            required>$placevisitEN</textarea>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Place to visit in
                                                                            Bangla</label>
                                                                        <textarea require type='text' class='form-control' id='placevisitBN'
                                                                            name='placevisitBN' placeholder='প্লেস তো ভিসিট ইন বাংলা ' rows='10'
                                                                            required>$placevisitEN</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Schedule details in
                                                                            English</label>
                                                                        <input require type='text' class='form-control'
                                                                            id='scheduledetailsEN' value='$scheduledetailsEN' name='scheduledetailsEN'
                                                                            placeholder='Schedule details in
                                                                            English' required>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Schedule details in
                                                                            Bangla</label>
                                                                        <input require type='text' class='form-control'
                                                                            id='scheduledetailsBN' name='scheduledetailsBN' value='$scheduledetailsEN'
                                                                            placeholder='সময়সূচি ইন বাংলা ' required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Inclusion details in
                                                                            English</label>
                                                                        <textarea type='text' class='form-control' id='inclusionEN' 
                                                                            rows='10' name='inclusionEN' placeholder='Inclusion details in
                                                                            English'
                                                                            required>$inclusionEN</textarea>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Inclusion details in
                                                                            Bangla</label>
                                                                        <textarea type='text' class='form-control' id='inclusionBN'
                                                                            rows='10' name='inclusionBN' placeholder='অন্তর্ভুক্তির বিবরণ ইন বাংলা '
                                                                            required>$inclusionBN</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Exclusion details in
                                                                            English</label>
                                                                        <textarea type='text' class='form-control' id='exclusionEN'
                                                                            name='exclusionEN' placeholder='Exclusion details in
                                                                            English' rows='10'
                                                                            required>$exclusionEN</textarea>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Exclusion details in
                                                                            Bangla</label>
                                                                        <textarea type='text' class='form-control' id='exclusionBN'
                                                                            rows='10' name='exclusionBN' placeholder='বর্জন বিবরণ ইন বাংলা'
                                                                            required>$exclusionBN</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Details description
                                                                            English</label>
                                                                        <textarea class='form-control' id='detailsEN' name='detailsEN' value='$detailsEN'
                                                                            rows='10'
                                                                            placeholder='Details description
                                                                            English'
                                                                            required>$detailsEN</textarea>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='detailsBN' class='form-label'>Details description
                                                                            Bangla</label>
                                                                        <textarea required class='form-control' id='detailsBN' rows='10'
                                                                            name='detailsBN'
                                                                            placeholder='বিশদ বিবরণ ইন বাংলা '>$detailsBN</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Package  Section end here -->

                                                        <div class='container-fluid'>
                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Additional
                                                                            Information in
                                                                            English</label>
                                                                        <textarea required class='form-control' id='additionalEN' rows='10'
                                                                            name='additionalEN'
                                                                            placeholder='Additional
                                                                            Information in
                                                                            English'>$additionalEN</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Additional
                                                                            Information in
                                                                            Bangla</label>
                                                                        <textarea type='text' class='form-control' id='additionalBN'
                                                                            rows='10' name='additionalBN'
                                                                            placeholder='অতিরিক্ত তথ্য ইন বাংলা'
                                                                            required>$additionalBN</textarea>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class='container-fluid'>
                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Travel Trips in
                                                                            English</label>
                                                                        <textarea required class='form-control' id='traveltipsEN' rows='10'
                                                                            name='traveltripsEN'
                                                                            placeholder='Travel Trips in
                                                                            English'>$traveltipsEN</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Travel Trips in
                                                                            Bangla</label>
                                                                        <textarea type='text' class='form-control' id='traveltipsBN'
                                                                            rows='10' name='traveltripsBN'
                                                                            placeholder='ভ্রমণ তথ্য ইন বাংলা '
                                                                            required>$traveltipsBN</textarea>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                        <!-- Booking Policy Section start here -->

                                                        <div class='container-fluid'>

                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Booking policy in
                                                                            English</label>
                                                                        <textarea class='form-control' id='bookingpolicyEN' rows='10'
                                                                            name='bookingpolicyEN'
                                                                            placeholder='Booking policy in
                                                                            English'
                                                                            required>$bookingpolicyEN</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Booking policy in
                                                                            Bangla</label>
                                                                        <textarea class='form-control' id='bookingpolicyBN' rows='10'
                                                                            name='bookingpolicyBN'
                                                                            placeholder=' বুকিং পলিসি ইন বাংলা'
                                                                            required>$bookingpolicyBN</textarea>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class='container-fluid'>
                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Refund policy in
                                                                            English</label>
                                                                        <textarea type='text' class='form-control' id='refundpolicyEN'
                                                                            rows='10' name='refundpolicyEN'
                                                                            placeholder='Refund policy in
                                                                            English'
                                                                            required>$refundpolicyEN</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Refund policy in
                                                                            Bangla</label>
                                                                        <textarea type='text' class='form-control' id='refundpolicyBN'
                                                                            rows='10' name='refundpolicyBN'
                                                                            placeholder='রিফান্ড পলিসি ইন বাংলা' required>$refundpolicyBN</textarea>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class='container-fluid'>
                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Terms and Conditions
                                                                            in
                                                                            English</label>
                                                                        <textarea required class='form-control' id='termEN' name='termsEN'
                                                                            rows='10'
                                                                            placeholder='Terms and Conditions
                                                                            in
                                                                            English'>$termsEN</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='bannerShortText' class='form-label'>Terms and Conditions
                                                                            in
                                                                            Bangla</label>
                                                                        <textarea type='text' class='form-control' id='termBN'
                                                                            name='termsBN' rows='10'
                                                                            placeholder='টার্মস এন্ড কন্ডিশন ইন বাংলা '
                                                                            required>$termsEN</textarea>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <!-- Booking Policy Section end here -->


                                                        <!-- package image section start here -->

                                                        <h3 class=' anp-h2 custom-margin'>Package Image</h3>

                                                        <div class='container-fluid'>

                                                            <div class='row d-flex align-items-center '>

                                                                <div class=' col-xl-4  col-lg-6 col-md-6 mt-0'>

                                                                    <div class='adpack-input py-3 packageImageInput'>
                                                                        <label for='coverimage' class='form-label'>Package Image </label>
                                                                        <!-- <input type='file' class='upload__input form-control-file' name='coverimage' required> -->
                                                                        <input type='file' class='form-control-file' id='img'
                                                                            name='coverimage'>
                                                                    </div>
                                                                </div>

                                                                <div class=' col-xl-4  col-lg-6 col-md-6 mt-0'>

                                                                    <div class='adpack-input py-3 packageImageInput'>
                                                                        <label for='coverimage' class='form-label'>Slider Image (Max 6 Image
                                                                            )</label>
                                                                        <input type='file' class='upload__input form-control-file'
                                                                            name='files[]' multiple>
                                                                    </div>


                                                                </div>
                                                                <div class=' col-xl-2 col-lg-3 col-md-3 mt-0'>
                                                                    <div class='package-img mb-2 imageBox'>
                                                                        <div id='selectedBanner'></div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!-- slider end -->
                                                        </div>


                                                        <!--  package image section end here -->

                                                        <div class='anp-input-submit text-center  d-block' style='margin-top:20px'>
                                                            <button class='btn btn-primary' type='submit'>Update Package + </button>
                                                        </div>

                                                    </form>
                                                </div>


                                            </div>

                                        </div>
                                        </div>

                                        
                                    </div>

                                </div>
                            </div>";
                                    									
                                }
                            }

                        ?>

                            <!-- col start -->


                            <!-- col end -->





                        </div>
                    </div>

                </div>



                <!-- package upload section end here -->


            </div>
            <!-- !ends  -->

    </div>
    <!-- todo main content  ends here-->
    </main>


    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- jaqury CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- jquery datepicker theme ui  -->
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>



    <!-- DataTable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- External JavaScript -->
    <script src="./../../../js/script.js"></script>
    <script src="./../../../js/flyfarladies-home.js"></script>
    <script src="./../../../js/package_update.js"></script>



</body>

</html>

<?php


                    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

                        if ($_POST['action'] == 'add'){
                            
                        $titleEN = str_replace("'", "''",$_POST["titleEN"]);
                        $titleBN = str_replace("'", "''",$_POST["titleBN"]);
                        $longTitleEN = str_replace("'", "''",$_POST["longTitleEN"]);
                        $longTitleBN = str_replace("'", "''",$_POST["longTitleBN"]);
                        $locationEN = str_replace("'", "''",$_POST["locationEN"]);
                        $locationBN = str_replace("'", "''",$_POST["locationBN"]);
                        $shortDescriptionEN = str_replace("'", "''",$_POST["shortDescriptionEN"]);
                        $shortDescriptionBN = str_replace("'", "''",$_POST["shortDescriptionBN"]);
                        $startDateEN = str_replace("'", "''",$_POST["startDateEN"]);
                        $startDateBN = str_replace("'", "''",$_POST["startDateBN"]);
                        $endDateEN = str_replace("'", "''",$_POST["endDateEN"]);
                        $endDateBN = str_replace("'", "''",$_POST["endDateBN"]);
                        $durationEN = str_replace("'", "''",$_POST["durationEN"]);
                        $durationBN = str_replace("'", "''",$_POST["durationBN"]);
                        $price = str_replace("'", "''",$_POST["price"]);
                        $tripTheme = str_replace("'", "''",$_POST["tripTheme"]);
                        $triptype = str_replace("'", "''",$_POST["triptype"]);
                        $tripplan = str_replace("'", "''",$_POST["tripplan"]);
                        $scheduledetailsEN = str_replace("'", "''",$_POST["scheduledetailsEN"]);
                        $scheduledetailsBN = str_replace("'", "''",$_POST["scheduledetailsBN"]);
                        $inclusionEN = str_replace("'", "''",$_POST["inclusionEN"]);
                        $inclusionBN = str_replace("'", "''",$_POST["inclusionBN"]);
                        $exclusionEN = str_replace("'", "''",$_POST["exclusionEN"]);
                        $exclusionBN = str_replace("'", "''",$_POST["exclusionBN"]);                                               
                        $placevisitEN = str_replace("'", "''",$_POST["placevisitEN"]);
                        $placevisitBN = str_replace("'", "''",$_POST["placevisitBN"]);
                        $detailsEN  = str_replace("'", "''",$_POST["detailsEN"]);
                        $detailsBN  = str_replace("'", "''",$_POST["detailsBN"]);
                        $bookingpolicyEN = str_replace("'", "''",$_POST["bookingpolicyEN"]);
                        $bookingpolicyBN = str_replace("'", "''",$_POST["bookingpolicyBN"]);
                        $refundpolicyEN  = str_replace("'", "''",$_POST["refundpolicyEN"]);
                        $refundpolicyBN  = str_replace("'", "''",$_POST["refundpolicyBN"]);
                        $termsEN = str_replace("'", "''",$_POST["termsEN"]);
                        $termsBN = str_replace("'", "''",$_POST["termsBN"]);
                        $additionalEN = str_replace("'", "''",$_POST["additionalEN"]);
                        $additionalBN = str_replace("'", "''",$_POST["additionalBN"]);
                        $traveltipsEN = str_replace("'", "''",$_POST["traveltripsEN"]);
                        $traveltipsBN = str_replace("'", "''",$_POST["traveltripsEN"]);

                        $link = preg_replace('/\s+/', '-', $longTitleEN);

                        
                        
                        
                        $upload_dir = '../../../../cdn.flyfarladies.com/Package/'."$PKG_Id/".DIRECTORY_SEPARATOR;  
                        if(is_dir($upload_dir)) {
                           // echo "The Directory {$new_path} exists";
                            }else{
                                mkdir($upload_dir, 0777, true);
                            }       
                            $fileName = $_FILES["coverimage"]["name"];
                            $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
                            $targetFilePath = $upload_dir."coverimage.$fileType";
                            
                            $allowTypes = array('jpg','png','jpeg','gif','webp','PNG','JPEG','JPG','GIF');
                        
                            if(in_array($fileType, $allowTypes)){
                                if(file_exists("coverimage".$fileType)){
                                    unlink("coverimage".$fileType);
                                }
                                if(move_uploaded_file($_FILES["coverimage"]["tmp_name"], $targetFilePath)){
                                    
                                    
                                }else{
                                    //$statusMsg = "Sorry, there was an error uploading your file.";
                                }
                            }else{
                                //$statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                            }
                        
                        $allowed_types = array('jpg', 'png', 'jpeg', 'gif','webp','JPG', 'PNG', 'JPEG', 'GIF','WEBP');
                        $maxsize = 1024 * 1024;

                        if(!empty(array_filter($_FILES['files']['name']))) {
                            if(count(array_filter($_FILES['files']['name'])) <= 6){
                                foreach ($_FILES['files']['tmp_name'] as $key => $value) {
                                    $file_tmpname = $_FILES['files']['tmp_name'][$key];
                                    $file_name =  $_FILES['files']['name'][$key];
                                    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                                    $rename = "slider$key".".$file_ext";

                                    if(file_exists($rename)){
                                        unlink($rename);
                                    }
                                    
                                    $file_size = $_FILES['files']['size'][$key];

                                    // Set upload file path
                                    $filepath = $upload_dir.$rename;

                                    // Check file type is allowed or not
                                    if(in_array(strtolower($file_ext), $allowed_types)) {

                                        if ($file_size > $maxsize)		
                                            echo "Error: File size is larger than the allowed limit.";

                                        if(file_exists($filepath)) {
                                            if(file_exists($rename)){
                                                unlink($rename);
                                            }
                                            
                                            if( move_uploaded_file($file_tmpname, $filepath)) {
                                                echo "{$rename} successfully uploaded <br />";
                                            }
                                            else {					
                                                echo "Error uploading {$rename} <br />";
                                            }
                                        }
                                        else {
                                        
                                            if( move_uploaded_file($file_tmpname, $filepath)) {
                                                echo "{$rename} successfully uploaded <br />";
                                            }
                                            else {					
                                                echo "Error uploading {$rename} <br />";
                                            }
                                        }
                                    }
                                    else {				
                                        // If file extension not valid
                                        echo "Error uploading {$rename}";
                                        echo "({$file_ext} file type is not allowed)<br / >";
                                    }
                                }
                                
                            }else{
                                echo "Cannot Upload More than 6 File";
                            }
                            
                        }
                        else {
                            
                            // If no files selected
                            echo "No files selected.";
                        }

                        $Cover  = "https://cdn.flyfarladies.com/Package/$PKG_Id/coverimage.$fileType";
                        $Slider = "https://cdn.flyfarladies.com/Package/$PKG_Id";
                        

                    $sql = "INSERT INTO
                    `allpackages`(
                    `pkId`,
                    `titleEN`,
                    `titleBN`,
                    `coverimage`,
                    `longTitleEN`,
                    `longTitleBN`,
                    `locationEN`,
                    `locationBN`,
                    `shortDescriptionEN`,
                    `shortDescriptionBN`,
                    `inclusionEN`,
                    `inclusionBN`,
                    `exclusionEN`,
                    `exclusionBN`,
                    `startDateEN`,
                    `startDateBN`,
                    `endDateEN`,
                    `endDateBN`,
                    `durationEN`,
                    `durationBN`,
                    `price`,
                    `tripTheme`,
                    `triptype`,
                    `tripplan`,
                    `scheduledetailsEN`,
                    `scheduledetailsBN`,
                    `placevisitEN`,
                    `placevisitBN`,
                    `detailsEN`,
                    `detailsBN`,
                    `bookingpolicyEN`,
                    `bookingpolicyBN`,
                    `refundpolicyEN`,
                    `refundpolicyBN`,
                    `termsEN`,
                    `termsBN`,
                    `additionalEN`,
                    `additionalBN`,
                    `traveltipsEN`,
                    `traveltipsBN`,
                    `slider1`,
                    `slider2`,
                    `slider3`,
                    `slider4`,
                    `slider5`,
                    `slider6`,
                    `link`)
                    VALUES('$PKG_Id','$titleEN','$titleBN','$Cover','$longTitleEN','$longTitleBN','$locationEN','$locationBN','$shortDescriptionEN','$shortDescriptionBN',
                           '$inclusionEN','$inclusionBN','$exclusionEN','$exclusionBN','$startDateEN','$startDateBN','$endDateEN','$endDateBN','$durationEN','$durationBN','$price','$tripTheme',
                           '$triptype','$tripplan','$scheduledetailsEN','$scheduledetailsBN','$placevisitEN','$placevisitBN','$detailsEN','$detailsBN',
                           '$bookingpolicyEN','$bookingpolicyBN','$refundpolicyEN','$refundpolicyBN','$termsEN','$termsBN','$additionalEN','$additionalBN','$traveltipsEN','$traveltipsBN',
                           '$Slider/slider0.webp','$Slider/slider1.webp','$Slider/slider2.webp','$Slider/slider3.webp','$Slider/slider4.webp','$Slider/slider5.webp','$link')";

                    if ($connect->query($sql) === TRUE) {
                        print '<script>
                                    swal({
                                    title: "Success!",
                                    text: "Package Added Successfully!",
                                    type: "success",
                                    confirmButtonText: "Cool"
                                    },
                                    function(){
                                        window.location=\'package.php\'
                                        });
                                </script>';
                    } else {
                        print '<script>
                                    swal({
                                    title: "Error!",
                                    text: "Error",
                                    type: "error",
                                    confirmButtonText: "Ahahaha"
                                    },
                                    function(){
                                        window.location=\'package.php\'
                                        });
                                </script>';
                    }
                    
                }

                //Update Option

                if($_POST['action'] == 'update'){
                        
                        $titleEN = str_replace("'", "''",$_POST["titleEN"]);
                        $titleBN = str_replace("'", "''",$_POST["titleBN"]);
                        $longTitleEN = str_replace("'", "''",$_POST["longTitleEN"]);
                        $longTitleBN = str_replace("'", "''",$_POST["longTitleBN"]);
                        $locationEN = str_replace("'", "''",$_POST["locationEN"]);
                        $locationBN = str_replace("'", "''",$_POST["locationBN"]);
                        $shortDescriptionEN = str_replace("'", "''",$_POST["shortDescriptionEN"]);
                        $shortDescriptionBN = str_replace("'", "''",$_POST["shortDescriptionBN"]);
                        $startDateEN = str_replace("'", "''",$_POST["startDateEN"]);
                        $startDateBN = str_replace("'", "''",$_POST["startDateBN"]);
                        $endDateEN = str_replace("'", "''",$_POST["endDateEN"]);
                        $endDateBN = str_replace("'", "''",$_POST["endDateBN"]);
                        $durationEN = str_replace("'", "''",$_POST["durationEN"]);
                        $durationBN = str_replace("'", "''",$_POST["durationBN"]);
                        $price = str_replace("'", "''",$_POST["price"]);
                        $tripTheme = str_replace("'", "''",$_POST["tripTheme"]);
                        $triptype = str_replace("'", "''",$_POST["triptype"]);
                        $tripplan = str_replace("'", "''",$_POST["tripplan"]);
                        $scheduledetailsEN = str_replace("'", "''",$_POST["scheduledetailsEN"]);
                        $scheduledetailsBN = str_replace("'", "''",$_POST["scheduledetailsBN"]);
                        $inclusionEN = str_replace("'", "''",$_POST["inclusionEN"]);
                        $inclusionBN = str_replace("'", "''",$_POST["inclusionBN"]);
                        $exclusionEN = str_replace("'", "''",$_POST["exclusionEN"]);
                        $exclusionBN = str_replace("'", "''",$_POST["exclusionBN"]);                                               
                        $placevisitEN = str_replace("'", "''",$_POST["placevisitEN"]);
                        $placevisitBN = str_replace("'", "''",$_POST["placevisitBN"]);
                        $detailsEN  = str_replace("'", "''",$_POST["detailsEN"]);
                        $detailsBN  = str_replace("'", "''",$_POST["detailsBN"]);
                        $bookingpolicyEN = str_replace("'", "''",$_POST["bookingpolicyEN"]);
                        $bookingpolicyBN = str_replace("'", "''",$_POST["bookingpolicyBN"]);
                        $refundpolicyEN  = str_replace("'", "''",$_POST["refundpolicyEN"]);
                        $refundpolicyBN  = str_replace("'", "''",$_POST["refundpolicyBN"]);
                        $termsEN = str_replace("'", "''",$_POST["termsEN"]);
                        $termsBN = str_replace("'", "''",$_POST["termsBN"]);
                        $additionalEN = str_replace("'", "''",$_POST["additionalEN"]);
                        $additionalBN = str_replace("'", "''",$_POST["additionalBN"]);
                        $traveltipsEN = str_replace("'", "''",$_POST["traveltripsEN"]);
                        $traveltipsBN = str_replace("'", "''",$_POST["traveltripsEN"]);

                        $link = preg_replace('/\s+/', '-', $longTitleEN);
                        
                        


                        $upload_dir = '../../../../cdn.flyfarladies.com/Package/'."$PKG_Id/".DIRECTORY_SEPARATOR;  
                        if(is_dir($upload_dir)) {
                           // echo "The Directory {$new_path} exists";
                            }else{
                                mkdir($upload_dir, 0777, true);
                            }       
                            $fileName = $_FILES["coverimage"]["name"];
                            $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
                            $targetFilePath = $upload_dir."coverimage.$fileType";
                            
                            $allowTypes = array('jpg','png','jpeg','gif','webp','PNG','JPEG','JPG','GIF');
                        
                            if(in_array($fileType, $allowTypes)){
                                if(file_exists("coverimage".$fileType)){
                                    unlink("coverimage".$fileType);
                                }
                                if(move_uploaded_file($_FILES["coverimage"]["tmp_name"], $targetFilePath)){
                                    
                                    
                                }else{
                                    //$statusMsg = "Sorry, there was an error uploading your file.";
                                }
                            }else{
                                //$statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                            }
                        
                        $allowed_types = array('jpg', 'png', 'jpeg', 'gif','webp','JPG', 'PNG', 'JPEG', 'GIF','WEBP');
                        $maxsize = 1024 * 1024;

                        if(!empty(array_filter($_FILES['files']['name']))) {
                            if(count(array_filter($_FILES['files']['name'])) <= 6){
                                foreach ($_FILES['files']['tmp_name'] as $key => $value) {
                                    $file_tmpname = $_FILES['files']['tmp_name'][$key];
                                    $file_name =  $_FILES['files']['name'][$key];
                                    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                                    $rename = "slider$key".".$file_ext";

                                    if(file_exists($rename)){
                                        unlink($rename);
                                    }
                                    
                                    $file_size = $_FILES['files']['size'][$key];

                                    // Set upload file path
                                    $filepath = $upload_dir.$rename;

                                    // Check file type is allowed or not
                                    if(in_array(strtolower($file_ext), $allowed_types)) {

                                        if ($file_size > $maxsize)		
                                            echo "Error: File size is larger than the allowed limit.";

                                        if(file_exists($filepath)) {
                                            if(file_exists($rename)){
                                                unlink($rename);
                                            }
                                            
                                            if( move_uploaded_file($file_tmpname, $filepath)) {
                                                echo "{$rename} successfully uploaded <br />";
                                            }
                                            else {					
                                                echo "Error uploading {$rename} <br />";
                                            }
                                        }
                                        else {
                                        
                                            if( move_uploaded_file($file_tmpname, $filepath)) {
                                                echo "{$rename} successfully uploaded <br />";
                                            }
                                            else {					
                                                echo "Error uploading {$rename} <br />";
                                            }
                                        }
                                    }
                                    else {				
                                        // If file extension not valid
                                        echo "Error uploading {$rename}";
                                        echo "({$file_ext} file type is not allowed)<br / >";
                                    }
                                }
                                
                            }else{
                                echo "Cannot Upload More than 6 File";
                            }
                            
                        }
                        else {
                            
                            // If no files selected
                            echo "No files selected.";
                        }

                        $Cover  = "https://cdn.flyfarladies.com/Package/$PKG_Id/coverimage.$fileType";
                        $Slider = "https://cdn.flyfarladies.com/Package/$PKG_Id";


                    $sql ="UPDATE `allpackages` SET `titleEN`='$titleEN',`titleBN`='$titleBN',`longTitleEN`='$longTitleEN',`longTitleBN`='$locationBN',
                        `locationEN`='$locationEN',`locationBN`='$locationBN',`shortDescriptionEN`='$shortDescriptionEN',`shortDescriptionBN`='$shortDescriptionBN',
                        `startDateEN`='$startDateEN',`startDateBN`='$startDateBN',`endDateEN`='$startDateEN',`endDateBN`='$endDateBN',`durationEN`='$durationEN',
                        `durationBN`='$durationBN',`price`='$price',`tripTheme`='$tripTheme',`triptype`='$triptype',`tripplan`='$tripplan',
                        `scheduledetailsEN`='$scheduledetailsEN',`scheduledetailsBN`='$scheduledetailsBN',`inclusionEN`='$inclusionEN',`inclusionBN`='$inclusionBN',`exclusionEN`='$exclusionEN',
                        `exclusionBN`='$exclusionBN',`placevisitEN`='$placevisitEN',`placevisitBN`='$placevisitBN',`detailsEN`='$detailsEN',`detailsBN`='$detailsBN',
                        `bookingpolicyEN`='$bookingpolicyEN',`bookingpolicyBN`='$bookingpolicyBN',`refundpolicyEN`='$refundpolicyEN',`refundpolicyBN`='$refundpolicyBN',
                        `termsEN`='$termsEN',`termsBN`='$termsBN',`additionalEN`='$additionalEN',`additionalBN`='$additionalBN',`traveltipsEN`='$traveltipsEN',
                        `traveltipsBN`='$traveltipsBN',`link`='$link' WHERE id='$id' ";
                        
                   
                    if ($connect->query($sql) === TRUE) {
                        print '<script>
                                    swal({
                                    title: "Success!",
                                    text: "Package Updated Successfully!",
                                    type: "success",
                                    confirmButtonText: "Cool"
                                    },
                                    function(){
                                        window.location=\'package.php\'
                                        });
                                </script>';
                    } else {
                        echo "Error: " . $sql . "<br>" . $connect->error;
                    }


                    }

                        if($_POST['action'] == 'delete'){
                            $id=$_POST['id'];
                            $pkId =$_POST['pkId'];
                            $sql = "DELETE FROM `allpackages` WHERE id=$id";
                            if (mysqli_query($connect, $sql)) {
                               print '<script>
                                    swal({
                                    title: "Success!",
                                    text: "Package Deleted Successfully!",
                                    type: "success",
                                    confirmButtonText: "Cool"
                                    },
                                    function(){
                                        window.location=\'package.php\'
                                        });
                                </script>';
                            } 
                            else {
                                 print '<script>
                                    swal({
                                    title: "Cannot Be Deleted!",
                                    text: "Error!",
                                    type: "error",
                                    confirmButtonText: "Ups"
                                    },
                                    function(){
                                        window.location=\'package.php\'
                                        });
                                </script>';
                            }

                            
                            

                        }
                    }



                    ?>