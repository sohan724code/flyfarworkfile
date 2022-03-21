<?php

include_once "../session.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <title>Passport Search</title>
</head>

<body>
    <div class="page-container mb-5">
        <!-- Side Navbar -->
        <nav class="side-nav  d-lg-block" id="side-navbar" class="w-50 ms-4 mt-4">
            <img src="../images/logo.gif" alt="Fly Far Int Logo" width="230px" style=" margin-top: -20px;">

            <div class="ms-4 " style="width: 80%;">
                <a href="index.html">
                    <div class="sidenav-link">
                        Dashboard
                    </div>
                </a>

                <div class="sidenav-link navlink-with-icon" id="inquery-btn">
                    <span>Inquery Management</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 nav-arrow"
                        id="inquery-arrow" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="inner-nav" id="inner-inquery-links">
                    <a href="Air-ticket-search.html">
                        <div class="inner-nav-link">
                            Air Ticket Search
                        </div>
                    </a>
                    <a href="visaInformation.html">
                        <div class="inner-nav-link">
                            Visa Information
                        </div>
                    </a>
                    <a href="passport-search.html">
                        <div class="inner-nav-link">
                            Passport Search
                        </div>
                    </a>
                    <a href="FFL.html">
                        <div class="inner-nav-link">
                            FFL Package
                        </div>
                    </a>
                    <a href="#">
                        <div class="inner-nav-link">
                            Trips Package
                        </div>
                    </a>
                    <a href="#">
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

                <a href="#">
                    <div class="sidenav-link">
                        Requirements
                    </div>
                </a>
                <div class="sidenav-link navlink-with-icon" id="quation-btn">
                    <span>Quation</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 nav-arrow"
                        id="quation-arrow" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="inner-nav" id="inner-quation-links">
                    <a href="packageQuation.html">
                        <div class="inner-nav-link">
                            Package Quation
                        </div>
                    </a>
                    <a href="#">
                        <div class="inner-nav-link">
                            Air Ticket Quation
                        </div>
                    </a>
                    <a href="#">
                        <div class="inner-nav-link">
                            Visa Quation
                        </div>
                    </a>
                    <a href="#">
                        <div class="inner-nav-link">
                            Hotel Quation
                        </div>
                    </a>
                    <a href="#">
                        <div class="inner-nav-link">
                            Travel Assitancy Quation
                        </div>
                    </a>
                    <a href="#">
                        <div class="inner-nav-link">
                            Inshurance Quation
                        </div>
                    </a>
                    <a href="#">
                        <div class="inner-nav-link">
                            General Quation
                        </div>
                    </a>
                </div>
                <div class="sidenav-link navlink-with-icon" id="invoice-btn">
                    <span>Invoice</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 nav-arrow arrow-rotate"
                        viewBox="0 0 20 20" fill="currentColor" id="invoice-arrow">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="inner-nav" id="inner-invoice-links">
                    <a href="visaInvoice.html">
                        <div class="inner-nav-link">
                            Visa Invoice
                        </div>
                    </a>
                    <a href="visaInvoicePDF.html">
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
                    <span>Expense</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 nav-arrow arrow-rotate"
                        viewBox="0 0 20 20" fill="currentColor" id="expense-arrow">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="inner-nav" id="inner-expense-links">
                    <a href="OfficeExpense.html">
                        <div class="inner-nav-link">
                            Vendor Payment
                        </div>
                    </a>
                    <a href="OfficeExpense.html">
                        <div class="inner-nav-link">
                            Office Expenses
                        </div>
                    </a>
                    <a href="OfficeExpense.html">
                        <div class="inner-nav-link">
                            Other Expenses
                        </div>
                    </a>
                </div>
                <a href="#">
                    <div class="sidenav-link">
                        Account Setup
                    </div>
                </a>
                <a href="#">
                    <div class="sidenav-link">
                        Chart of Account
                    </div>
                </a>
                <div class="sidenav-link navlink-with-icon" id="report-btn">
                    <span>Report</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 nav-arrow"
                        viewBox="0 0 20 20" fill="currentColor" id="report-arrow">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="inner-nav" id="inner-report-links">
                    <a href="prepaidUnearnedReciveable.html">
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
                    <span>Log</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 nav-arrow"
                        viewBox="0 0 20 20" fill="currentColor" id="log-arrow">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mobile-menu" viewBox="0 0 20 20"
                    fill="currentColor" id="mobile-menu">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd" />
                </svg>
            </div>

            <div class="mt-3 d-flex justify-content-between align-items-center">
                <div class="position-relative">
                    <input class="form-control form-control-sm ps-4" type="text" placeholder="Enter Keywords">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 search-icon" fill="none" viewBox="0 0 24 24"
                        stroke="gray">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <div class="d-flex">
                    <div class="dropdown me-3 mt-1">
                        <div class="fs-6 dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            EN
                        </div>
                    </div>
                    <div class="top-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div class="top-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24" stroke="gray">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </div>

                    <button type="button" class="btn btn-sm  dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"> <img src="images/avatar.jpg" alt="" width="30px"
                            style="margin-top: -5px;">
                    </button>
                    <ul class="dropdown-menu shadow" style="width: 200px;">
                        <div class="p-0 m-0">
                            <a class="dropdown-item" href="#">
                                <?php echo $userName; ?>
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


            <div class="mt-5 w-25">
                <h5><span class="p-2 border-bottom border-dark">Search Passport</span> </h5>
            </div>

            <div class="mt-4">
                <div class="d-flex w-50">
                    <input style="width: 250px;" placeholder="Enter Any Data"
                        class="form-control mt-2  border-dark input-border " list="datalistOptions"
                        id="exampleDataList">
                    <button class=" ms-4 btn mt-2 text-light"
                        style="border: 1px solid #3751FF ; border-radius: 25px; background-color: #3751FF;">Serach</button>
                </div>
            </div>


            <div class="mt-3">
                <div class="d-flex">
                    <div>
                        <!-- Button trigger modal -->

                        <div class="mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <button class="btn py-3 px-3 text-light"
                                style="border: 1px solid #3751FF ; border-radius: 30px; background-color: #3751FF;">Passport
                                In</button>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class=" mb-5 ">
                                        <form action="#" action="POST">
                                        <div class="d-flex mt-3 px-4 justify-content-between ">
                                            <div>
                                                <span>Passport Number</span> <br />
                                                <input class="form-control mt-2 border-dark" name="passNum" list="datalistOptions"
                                                    id="exampleDataList">
                                            </div>
                                            <div>
                                                <span>Name</span> <br />
                                                <input class="form-control mt-2 border-dark" name="name" list="datalistOptions"
                                                    id="exampleDataList">
                                            </div>
                                            <div class="ms-3">
                                                <span>Mobile Number</span> <br />
                                                <input class="form-control mt-2 border-dark" name="mobile" list="datalistOptions"
                                                    id="exampleDataList">
                                            </div>
                                            <div class="ms-3">
                                                <span>Pax Number</span> <br />
                                                <input class="form-control mt-2 border-dark" name="pax" list="datalistOptions"
                                                    id="exampleDataList">
                                            </div>
                                        </div>

                                        <div class="d-flex mt-3 px-4 justify-content-between ">
                                            <div>
                                                <span>Birth Place</span> <br />
                                                <input class="form-control mt-2 border-dark w-75 "
                                                    list="datalistOptions" name="birthPlace" id="exampleDataList">
                                            </div>
                                            <div class=" " style="margin-left: -200px;width: 250px;">
                                                <span>QT Number</span> <br />
                                                <input class="form-control mt-2 border-dark" name="QT" list="datalistOptions"
                                                    id="exampleDataList">
                                            </div>
                                            <div class=" " style="margin-left: -200px;width: 250px;">
                                                <span>Pigeon Number</span> <br />
                                                <input class="form-control mt-2 border-dark" name="box" list="datalistOptions"
                                                    id="exampleDataList">
                                            </div>
                                            <div class=" mt-4 bg-danger">
                                                <button class=" btn mt-2 text-light"
                                                    style="border: 1px solid #3751FF ; border-radius: 25px; background-color: #3751FF; margin-left:-150px">Submit</button>
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
                            <button class="btn py-3 px-3 text-light"
                                style="border: 1px solid #3751FF ; border-radius: 30px; background-color: #3751FF;">Passport
                                Out</button>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class=" mx-auto mb-5 mt-3">
                                        <h6 class="text-start">Passport Number</h6>
                                        <div class="d-flex mt-3 ">
                                            <div class="">
                                                <p style="padding-right: 100px; padding-left: 120px;"
                                                    class="border rounded-3 py-4 border-dark "></p>
                                            </div>
                                            <div class=" ms-3 mt-1">
                                                <button class="btn py-2 px-4 text-light"
                                                    style="border: 1px solid #3751FF ; border-radius: 25px; background-color: #3751FF;">Submit</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>






        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="../script.js"></script>
</body>

</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $passNum = $_POST["passNum"];
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $Pax = $_POST["Pax"];
    $birthPlace = $_POST["birthPlace"];
    $QT = $_POST["QT"];
    $boxNo = $_POST["box"];

    $sqlquery = "INSERT INTO `passport`(
    `passNum`,
    `name`,
    `mobile`,
    `Pax`,
    `birthPlace`,
    `QT`,
    `addedBy`,
    `boxNo`
)
VALUES(
    '[value-1]',
    '[value-2]',
    '[value-3]',
    '[value-4]',
    '[value-5]',
    '[value-6]',
    '[value-7]'
)";

    if ($conn->query($sqlquery) === true) {

            print '<script>

            swal({
					title: "Success!",
					text: "Passport Added Successfully!",
					type: "success",
					confirmButtonText: "Cool"
					},
					function(){
					window.location=\'Passport.php\'
					});
					</script>';
																	
        
    }
}
?>
