<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>FFL Package</title>
</head>

<body>
    <div class="page-container mb-5">
        <?php include 'side_navbar.php' ?>

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



            <div class="mt-5">
                <div class="mt-3">
                    <button class="me-3 ffl-btn ffl-btn-active" id="domestic-btn" onclick="changeBtn('domestic')">Domestic</button>
                    <button class="ffl-btn" id="international-btn" onclick="changeBtn('international')">International</button>
                </div>
                <form class="mt-4 d-flex">
                    <div class="ffl-form-container">
                        <input type="text" list="domestic-locations" id="location-input">
                        <div class="float-text">
                            Location
                        </div>
                        <datalist id="domestic-locations">
                        </datalist>
                        <datalist id="international-locations">
                        </datalist>

                    </div>
                    <button class="me-3 ffl-btn ffl-btn-active ms-4" type="submit">Search</button>
                </form>
            </div>




            <div class="mt-5">
                <div class="row gx-5 ">
                    <div class=" col col-md-3">
                        <div class="text-center border px-4 py-3 rounded-3 shadow-sm">
                            <img src="images/resort_1.png" alt=""> <br>
                            <span class="text-secondary">Attraction and Show</span>
                        </div>
                    </div>

                    <div class="col col-md-3">
                        <div class="text-center border px-4 py-3 rounded-3 shadow-sm">
                            <img src="images/hiking_1.png" alt=""> <br>
                            <span class="text-secondary">Activities & Experience</span>
                        </div>
                    </div>

                    <div class=" col col-md-3">
                        <div class="text-center border px-4 py-3 rounded-3 shadow-sm">
                            <img src="images/sunrise_1.png" alt=""> <br>
                            <span class="text-secondary">Day Out Package</span>
                        </div>
                    </div>

                    <div class="col col-md-3">
                        <div class="text-center border px-5 py-3 rounded-3 shadow-sm ">
                            <img src="images/adventurer_1.png" alt=""> <br>
                            <span class="text-secondary">Adventure</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <div class="row gx-5  ">
                    <div class="col col-md-9  ">
                        <div class="border shadow-sm rounded-3 px-3 py-3 ">
                            <div class="row">
                                <div class="col col-md-5 text-center ">
                                    <img src="images/Scenery1.png" alt="" width="100%" height="100%">
                                </div>
                                <div class="col col-md-6 ">
                                    <span class="fs-5 fw-bold">Haritage Resort - Maldives</span>
                                    <div class="d-flex mt-2">
                                        <svg style="width:20px" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>

                                        <div class="ms-1">
                                            <span>Male.Maldives</span> <br>
                                        </div>
                                    </div>

                                    <div class="ms-4">
                                        <span style="font-size: 14px;" class="text-secondary">
                                            Maldives officially the republic of Maldives is an Country in the indian
                                            subcontinent of asia.
                                            situated in the indian ocean.
                                        </span>
                                    </div>

                                    <div class="mt-2">
                                        <div class="d-flex">
                                            <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <div class="ms-1">
                                                <span style="font-size:15px">10 hours</span>
                                                <span class="ms-2"><img style="width: 15px;" src="images/users.png" alt=""></span>
                                                <span style="font-size:15px" class="ms-2 mt-1">From 1 to 10
                                                    person</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mt-2 d-flex">
                                        <div class="mt-1">
                                            <img style="width: 18px;" src="images/cancel.png" alt="">
                                        </div>
                                        <div class="p-1 px-2 ms-2 rounded-3" style="background-color: rgba(221, 217, 217, 0.849);">
                                            <span style="font-size: 14px;"> Free Cancellation before forty-eight(48)
                                                hours </span>
                                        </div>
                                    </div>

                                    <div class="mt-2 ms-1">
                                        <span class=" text-secondary">Starting From</span>
                                    </div>

                                    <div class="mt-2 d-flex justify-content-between ">
                                        <div class="p-1 px-2 ms-2 rounded-3 d-flex" style="background-color: rgba(221, 217, 217, 0.849);">
                                            <span style="font-size: 14px;"> <span class="fs-5" style="color: #3751FF;">BDT
                                                    35200</span></span>

                                            <div class=" ms-1 mt-1">
                                                <span>( per person )</span>
                                            </div>
                                        </div>

                                        <div>
                                            <button style="background: #3751FF;" class="btn text-light fw-bold">View
                                                More</button>
                                        </div>

                                    </div>

                                </div>
                            </div>


                        </div>

                        <div class="border shadow-sm rounded-3 px-3 py-3 mt-4 ">
                            <div class="row">
                                <div class="col col-md-5 text-center ">
                                    <img src="images/Scenery3.png" alt="" width="100%" height="100%">
                                </div>
                                <div class="col col-md-6 ">
                                    <span class="fs-5 fw-bold">Paradise Island Resort - Maldives</span>
                                    <div class="d-flex mt-2">
                                        <svg style="width:20px" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>

                                        <div class="ms-1">
                                            <span>Male.Maldives</span> <br>
                                        </div>
                                    </div>

                                    <div class="ms-4">
                                        <span style="font-size: 14px;" class="text-secondary">
                                            Maldives officially the republic of Maldives is an Country in the indian
                                            subcontinent of asia.
                                            situated in the indian ocean.
                                        </span>
                                    </div>

                                    <div class="mt-2">
                                        <div class="d-flex">
                                            <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <div class="ms-1">
                                                <span style="font-size:15px">10 hours</span>
                                                <span class="ms-2"><img style="width: 15px;" src="images/users.png" alt=""></span>
                                                <span style="font-size:15px" class="ms-2 mt-1">From 1 to 10
                                                    person</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mt-2 d-flex">
                                        <div class="mt-1">
                                            <img style="width: 18px;" src="images/cancel.png" alt="">
                                        </div>
                                        <div class="p-1 px-2 ms-2 rounded-3" style="background-color: rgba(221, 217, 217, 0.849);">
                                            <span style="font-size: 14px;"> Free Cancellation before forty-eight(48)
                                                hours </span>
                                        </div>
                                    </div>

                                    <div class="mt-2 ms-1">
                                        <span class=" text-secondary">Starting From</span>
                                    </div>

                                    <div class="mt-2 d-flex justify-content-between ">
                                        <div class="p-1 px-2 ms-2 rounded-3 d-flex" style="background-color: rgba(221, 217, 217, 0.849);">
                                            <span style="font-size: 14px;"> <span class="fs-5" style="color: #3751FF;">BDT
                                                    35200</span></span>

                                            <div class=" ms-1 mt-1">
                                                <span>( per person )</span>
                                            </div>
                                        </div>

                                        <div>
                                            <button style="background: #3751FF;" class="btn text-light fw-bold">View
                                                More</button>
                                        </div>

                                    </div>

                                </div>
                            </div>


                        </div>

                        <div class="border shadow-sm rounded-3 px-3 py-3 mt-4 ">
                            <div class="row">
                                <div class="col col-md-5 text-center ">
                                    <img src="images/Scenery2.png" alt="" width="100%" height="100%">
                                </div>
                                <div class="col col-md-6 ">
                                    <span class="fs-5 fw-bold">Istanbul-Turkey</span>
                                    <div class="d-flex mt-2">
                                        <svg style="width:20px" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>

                                        <div class="ms-1">
                                            <span>Male.Maldives</span> <br>
                                        </div>
                                    </div>

                                    <div class="ms-4">
                                        <span style="font-size: 14px;" class="text-secondary">
                                            Maldives officially the republic of Maldives is an Country in the indian
                                            subcontinent of asia.
                                            situated in the indian ocean.
                                        </span>
                                    </div>

                                    <div class="mt-2">
                                        <div class="d-flex">
                                            <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <div class="ms-1">
                                                <span style="font-size:15px">10 hours</span>
                                                <span class="ms-2"><img style="width: 15px;" src="images/users.png" alt=""></span>
                                                <span style="font-size:15px" class="ms-2 mt-1">From 1 to 10
                                                    person</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mt-2 d-flex">
                                        <div class="mt-1">
                                            <img style="width: 18px;" src="images/cancel.png" alt="">
                                        </div>
                                        <div class="p-1 px-2 ms-2 rounded-3" style="background-color: rgba(221, 217, 217, 0.849);">
                                            <span style="font-size: 14px;"> Free Cancellation before forty-eight(48)
                                                hours </span>
                                        </div>
                                    </div>

                                    <div class="mt-2 ms-1">
                                        <span class=" text-secondary">Starting From</span>
                                    </div>

                                    <div class="mt-2 d-flex justify-content-between ">
                                        <div class="p-1 px-2 ms-2 rounded-3 d-flex" style="background-color: rgba(221, 217, 217, 0.849);">
                                            <span style="font-size: 14px;"> <span class="fs-5" style="color: #3751FF;">BDT
                                                    35200</span></span>

                                            <div class=" ms-1 mt-1">
                                                <span>( per person )</span>
                                            </div>
                                        </div>

                                        <div>
                                            <button style="background: #3751FF;" class="btn text-light fw-bold">View
                                                More</button>
                                        </div>

                                    </div>

                                </div>
                            </div>


                        </div>

                        <div class="border shadow-sm rounded-3 px-3 py-3 mt-4 ">
                            <div class="row">
                                <div class="col col-md-5 text-center ">
                                    <img src="images/Scenery3.png" alt="" width="100%" height="100%">
                                </div>
                                <div class="col col-md-6 ">
                                    <span class="fs-5 fw-bold">Istanbul-Turkey</span>
                                    <div class="d-flex mt-2">
                                        <svg style="width:20px" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>

                                        <div class="ms-1">
                                            <span>Male.Maldives</span> <br>
                                        </div>
                                    </div>

                                    <div class="ms-4">
                                        <span style="font-size: 14px;" class="text-secondary">
                                            Maldives officially the republic of Maldives is an Country in the indian
                                            subcontinent of asia.
                                            situated in the indian ocean.
                                        </span>
                                    </div>

                                    <div class="mt-2">
                                        <div class="d-flex">
                                            <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <div class="ms-1">
                                                <span style="font-size:15px">10 hours</span>
                                                <span class="ms-2"><img style="width: 15px;" src="images/users.png" alt=""></span>
                                                <span style="font-size:15px" class="ms-2 mt-1">From 1 to 10
                                                    person</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mt-2 d-flex">
                                        <div class="mt-1">
                                            <img style="width: 18px;" src="images/cancel.png" alt="">
                                        </div>
                                        <div class="p-1 px-2 ms-2 rounded-3" style="background-color: rgba(221, 217, 217, 0.849);">
                                            <span style="font-size: 14px;"> Free Cancellation before forty-eight(48)
                                                hours </span>
                                        </div>
                                    </div>

                                    <div class="mt-2 ms-1">
                                        <span class=" text-secondary">Starting From</span>
                                    </div>

                                    <div class="mt-2 d-flex justify-content-between ">
                                        <div class="p-1 px-2 ms-2 rounded-3 d-flex" style="background-color: rgba(221, 217, 217, 0.849);">
                                            <span style="font-size: 14px;"> <span class="fs-5" style="color: #3751FF;">BDT
                                                    35200</span></span>

                                            <div class=" ms-1 mt-1">
                                                <span>( per person )</span>
                                            </div>
                                        </div>

                                        <div>
                                            <button style="background: #3751FF;" class="btn text-light fw-bold">View
                                                More</button>
                                        </div>

                                    </div>

                                </div>
                            </div>


                        </div>


                    </div>
                    <div class="col col-md-3 border shadow-sm  px-3 h-100 ">
                        <div class="py-3 ">
                            <div class="border-bottom py-2">
                                <span class="fw-bold ">Destination : 13 Places Found</span> <br>
                                <div style="font-size: 14px; font-weight: 500;" class=" mt-3">Filter Result</div>
                            </div>

                            <div class="mt-2">
                                <label style="font-weight: 500;" for="customRange1" class="form-label">Price
                                    range</label>
                                <input style="margin-top: -18px;" type="range" class="form-range" id="customRange1">
                                <div style="margin-top: -10px;" class="d-flex justify-content-between">
                                    <span>BDT 0</span>
                                    <span>BDT 20325</span>
                                </div>
                            </div>
                            <div class="mt-2">
                                <span style="font-weight: 500;">Select Favourite Month</span> <br>
                                <!-- <label for="cars">Month</label> <br> -->

                                <select class="w-75 mt-1" name="cars" id="cars">
                                    <option value="January">January</option>
                                    <option value="Febuary">Febuary</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="Augest">Augest</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>

                                </select>
                            </div>

                            <div class="mt-2">
                                <span style="font-weight: 500;">Trip Option</span> <br>
                                <div class="d-flex mt-2">
                                    <div>
                                        <button style="background: #3751FF;" class="btn text-light fw-bold">Day</button>
                                    </div>
                                    <div class="ms-4">
                                        <button style="background: #3751FF;" class="btn text-light fw-bold">Night</button>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <span style="font-weight: 500;">Our Five Upcomimg Trips</span> <br>
                                <ol class="mt-2">
                                    <li style="font-size: 13PX;">Jammu and Kashmir <br>
                                        <span style="font-size: 11px;" class="text-secondary">02 jun,22 to 03 jul,2022(5
                                            Day 6 Nights)</span> <br>
                                        <span style="color: #3751FF;"> Remaning Day 6</span>
                                    </li>

                                    <li class="mt-2" style="font-size: 13PX;">Jammu and Kashmir <br>
                                        <span style="font-size: 11px;" class="text-secondary">02 jun,22 to 03 jul,2022(5
                                            Day 6 Nights)</span> <br>
                                        <span style="color: #3751FF;"> Remaning Day 6</span>
                                    </li>

                                    <li class="mt-2" style="font-size: 13PX;">Jammu and Kashmir <br>
                                        <span style="font-size: 11px;" class="text-secondary">02 jun,22 to 03 jul,2022(5
                                            Day 6 Nights)</span> <br>
                                        <span style="color: #3751FF;"> Remaning Day 6</span>
                                    </li>

                                    <li class="mt-2" style="font-size: 13PX;">Jammu and Kashmir <br>
                                        <span style="font-size: 11px;" class="text-secondary">02 jun,22 to 03 jul,2022(5
                                            Day 6 Nights)</span> <br>
                                        <span style="color: #3751FF;"> Remaning Day 6</span>
                                    </li>

                                    <li class="mt-2" style="font-size: 13PX;">Jammu and Kashmir <br>
                                        <span style="font-size: 11px;" class="text-secondary">02 jun,22 to 03 jul,2022(5
                                            Day 6 Nights)</span> <br>
                                        <span style="color: #3751FF;"> Remaning Day 6</span>
                                    </li>
                                </ol>

                            </div>

                            <a style="color: #3751FF; text-decoration: underline;" class="mt-3" href="#"> Contact For
                                More Details</a>



                        </div>
                    </div>
                </div>
            </div>








        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="script.js"></script>
    <script src="js/ffl.js"></script>
    <script src="js/domesticsCities.js"></script>
    <script src="js/internationalCities.js"></script>
</body>

</html>