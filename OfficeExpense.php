<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/84e2e81068.js" crossorigin="anonymous"></script>
    <title>Office Expense</title>
</head>

<body>
    <div class="page-container mb-5">
        <?php include 'side_navbar.php' ?>

        <main class="pe-3">
            <div class="d-lg-none d-flex justify-content-end">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mobile-menu" viewBox="0 0 20 20" fill="currentColor" id="mobile-menu">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="mt-4 me-2 d-flex justify-content-between align-items-center">
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
                    <button type="button" class="btn btn-sm  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <img src="images/avatar.jpg" alt="" width="30px">
                    </button>
                    <ul class="dropdown-menu shadow" style="width: 300px;">
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



            <div class=" mt-4 w-100 ">

                <div class="row mx-auto">
                    <div class="col col-md-6 " style="margin-left:-11px ;">
                        <button class="btn  border border-1 rounded-3">
                            <div class="d-flex align-items-center">
                                <div>
                                    Filter
                                </div>
                                <i class=" fas fa-angle-down fs-6 mt-1 ms-2 "></i>

                            </div>
                        </button>
                    </div>

                    <div class="col col-md-6 ms-auto w-25 ">
                        <div class="p-1  text-center" style="border: 1px solid #3751FF">
                            <span> Total Payable = 94387457 BDT
                            </span>
                        </div>

                    </div>
                </div>

            </div>

            <nav class="nav nav-pills nav-fill mt-4 me-2">
                <a id="vendor-payable-btn" class="nav-link text-dark fw-bold active-btn " aria-current="page" href="#">Vendor
                    Payable</a>
                <a id="office-expense-btn" class="nav-link text-dark  fw-bold " href="#">Office Expense</a>
                <a id="other-expense-btn" class="nav-link text-dark fw-bold " href="#">Other Expense</a>

            </nav>

            <!-- vendor payable -->
            <div id="vendor-payable">
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable fw-bold">
                        <div class="">Payable To</div>
                        <div class="">Description</div>
                        <div class="">Outstanding</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3 me-2">
                    <div class="fw-bold">Total Payment = </div>
                    <div class="fw-bold">5,000,00 TK </div>
                </div>


            </div>


            <!-- office expense -->
            <div id="office-expense" class="d-none">
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable fw-bold">
                        <div class="">Payable To office</div>
                        <div class="">Description</div>
                        <div class="">Outstanding</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3 me-2">
                    <div class="fw-bold">Total Payment = </div>
                    <div class="fw-bold">5,000,00 TK </div>
                </div>


            </div>

            <!-- other expense -->
            <div id="other-expense" class="d-none">
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable fw-bold">
                        <div class="">Payable To other</div>
                        <div class="">Description</div>
                        <div class="">Outstanding</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>
                <div class="mt-4 me-2">
                    <div class="d-flex justify-content-between  vendor-payable2 ">
                        <div class="">Travel Zoo</div>
                        <div class="">Air Ticket Payment</div>
                        <div class="">5,00,000 TK</div>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3 me-2">
                    <div class="fw-bold">Total Payment = </div>
                    <div class="fw-bold">5,000,00 TK </div>
                </div>


            </div>


        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>

</html>