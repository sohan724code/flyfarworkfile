<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./../css/style.css">

    <!-- font awsome -->
    <script src="https://kit.fontawesome.com/84e2e81068.js" crossorigin="anonymous"></script>
    <title>Air Ticket Search</title>
</head>

<body>
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

                    <button type="button" class="btn btn-sm  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <img src="images/avatar.jpg" alt="" width="30px" style="margin-top: -5px;">
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

            <section class="p-3">
                <form action="" method="POST" class="p-3 rounded shadow-sm ats-form position-relative pb-5">
                    <div class="d-flex flex-column flex-md-row">
                        <div class="d-flex">
                            <label class="radio-container me-3">One Way
                                <input type="radio" name="trip-type" value="one-way" checked onclick="changeTripType('oneway')">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container me-3">Round Trip
                                <input type="radio" name="trip-type" value="one-way" onclick="changeTripType('roundtrip')">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container me-3">Multi City
                                <input type="radio" name="trip-type" value="one-way" onclick="changeTripType('multicity')">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="mx-auto d-flex">
                            <div>
                                <i class="far fa-user"></i>
                                <select name="passenger-type" class="border-0">
                                    <option value="">Passenger Type</option>
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                </select>
                                <i class="fas fa-caret-down fs-5 ats-icon"></i>
                            </div>
                            <div class="ms-4">
                                Economy <i class="fas fa-caret-down fs-5 ats-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col col-12 col-md-8" id="journey-from-con">
                            <div class="p-1 h-100">
                                <div class="row position-relative h-100">
                                    <div class="col col-6">
                                        <div class="border border-2 p-2 rounded h-100 d-flex align-items-center">
                                            <div class="d-flex">
                                                <i class="fas fa-map-marker-alt text-secondary fs-4 mx-2"></i>
                                                <input type="text" value="DAC" class="ats-input" list="places-list" id="journey-from-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-6">
                                        <div class="border border-2 p-2 rounded h-100 d-flex align-items-center">
                                            <div class="d-flex">
                                                <i class="fas fa-map-marker-alt text-secondary fs-4 mx-2"></i>
                                                <input value="CTG" type="text" class="ats-input" list="places-list" id="journey-to-input">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="ats-swap-btn" onclick="changeJourneyInputs()"><i class="fas fa-exchange-alt fs-5"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-4" id="journey-to-con">
                            <div class="p-1 h-100">
                                <div class="row">
                                    <div class="col col-12 " id="journey-start-con">
                                        <div class="border border-2 p-2 rounded ats-date-input d-flex align-items-center overflow-hidden">
                                            <div>
                                                <i class="far fa-calendar-alt text-secondary fs-5"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="m-0 ">Return Date</p>
                                                <input class="w-full border-0" type="date" name="" id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-6 d-none" id="return-date-con">
                                        <div class="border border-2 p-2 rounded ats-date-input d-flex align-items-center overflow-hidden">
                                            <div>
                                                <i class="far fa-calendar-alt text-secondary fs-5"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="m-0 ">Return Date</p>
                                                <input class="w-full border-0" type="date" name="" id="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <datalist id="places-list">


                    </datalist>

                    <a href="After-search.html"><button type="button" class="border-0 ats-search-btn"><i class="fas fa-search"></i>
                            Search</button></a>
                </form>
            </section>




        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="js/airticket.js"></script>
    <script src="js/airportApi.js"></script>

</body>

</html>