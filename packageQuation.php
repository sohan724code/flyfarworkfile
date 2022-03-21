<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>package quation</title>
    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/84e2e81068.js" crossorigin="anonymous"></script>
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

            <div class="select-place-container shadow-sm ">
                <form action="" method="POST">
                    <div>
                        <input list="place-list" name="place-from" id="place-from" class="select-input" value="Doc">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" width="20px" fill="none" viewBox="0 0 24 24" stroke="#3751FF">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <input list="place-list" name="place-to" id="place-to" class="select-input" value="Jhk">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" width="20px" fill="none" viewBox="0 0 24 24" stroke="#3751FF">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-3 ms-4">
                        <div class="dropdown">
                            <a class=" dropdown-toggle select-input p-3 px-4" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Purpose
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Work Visa</a>
                                <a class="dropdown-item" href="#">Visit Visa</a>
                            </ul>
                        </div>
                    </div>

                    <datalist id="place-list">
                        <option value="Dhaka (Dac)"></option>
                        <option value="Jhk(jasshore)"></option>
                        <!-- <option value="Dhaka"> -->
                        <option value="Chottogram (CTG)">
                        <option value="Sylhet">
                        <option value="Rajshahi">
                        <option value="Bandarban">
                    </datalist>

                    <button class="swap-btn" id="swap-btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                        </svg></button>
                </form>
                <button class="search-btn"><svg xmlns="http://www.w3.org/2000/svg" class="shadow-sm" width="18px" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg> Search</button>
            </div>




            <div class="mt-5 py-3">

                <div class="d-flex w-50 justify-content-between ">
                    <div>
                        <div class="d-flex align-items-center ">
                            <h5>Visa</h5>

                        </div>

                        <div class="form-check mt-3">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Dubai Visa 03 Month
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Dubai Visa 01 Month
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Transit Flight
                            </label>
                        </div>


                    </div>
                    <div>
                        <div class="d-flex align-items-center ">
                            <h5> Inshurance </h5>

                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Inshurance Visa 03 Month
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Inshurance Visa 01 Month
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Document Assitancy
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Travel Assitancy
                            </label>
                        </div>


                    </div>
                </div>

            </div>

            <div class="mt-4">

                <div class="d-flex  justify-content-between " style="width: 53%;">
                    <div>
                        <div class="d-flex align-items-center ">
                            <h5>Air Ticket</h5>

                        </div>

                        <div class="form-check mt-3">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Transit Flight
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Direct Flight
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Group Ticket
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Genuiene Return
                            </label>
                        </div>


                    </div>
                    <div class="">
                        <div class="d-flex align-items-center  ">
                            <h5> Hotel </h5>

                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Hotel Booking ( Unconfirmed )
                            </label>
                        </div>
                        <div class="form-check mt-2 ">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Hotel Booking ( confirmed )
                            </label>
                        </div>



                    </div>
                </div>

            </div>


            <div class="mt-4">

                <div class="d-flex  justify-content-between " style="width: 60%;">
                    <div>
                        <div class="d-flex align-items-center ">
                            <h5>Covid Test</h5>

                        </div>

                        <div class="form-check mt-3">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Only Depurture Test
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Only Arival Test
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Only Arival And Depurture Test
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                All Covid Test
                            </label>
                        </div>


                    </div>
                    <div class="ms-5">
                        <div class="d-flex align-items-center  ">
                            <h5> Transport </h5>

                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Only Pick Destination Country
                            </label>
                        </div>
                        <div class="form-check mt-2 ">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Only Drop Destination Country
                            </label>
                        </div>

                        <div class="form-check mt-2 ">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Only Pick And Drop Destination Country
                            </label>
                        </div>

                        <div class="form-check mt-2 ">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                All Pick And Drop
                            </label>
                        </div>



                    </div>
                </div>

            </div>


            <div class="mt-4">

                <div class="d-flex  justify-content-between " style="width: 60%;">
                    <div>
                        <div class="d-flex align-items-center ">
                            <h5>Other Service</h5>

                        </div>

                        <div class="form-check mt-3">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Entry Registration
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Document Assistancy
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Travel Assistancy
                            </label>
                        </div>

                    </div>
                    <div class="ms-5">
                        <div class="d-flex align-items-center  ">
                            <h5> BMET SERVICE </h5>

                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Offiood Passport & Visit Visa
                            </label>
                        </div>
                        <div class="form-check mt-2 ">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                New Visit Visa
                            </label>
                        </div>

                        <div class="form-check mt-2 ">
                            <input class="form-check-input rounded-0 border border-2 border-primary" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-1" for="flexCheckDefault">
                                Enployment Visa
                            </label>
                        </div>

                    </div>
                </div>

            </div>


            <div class="mt-5 d-flex">

                <div>
                    <div class=" w-75  ">
                        <span>Client Name</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>
                </div>
                <div>
                    <div class=" w-75 ms-5 ">
                        <span>Pax Name</span> <br />
                        <input class="form-control mt-2  input-border" list="datalistOptions" id="exampleDataList">
                    </div>
                </div>

                <div>
                    <div class=" w-75 ms-5 ">
                        <span>QT By</span> <br />
                        <input class="form-control mt-2  input-border" list="datalistOptions" id="exampleDataList">
                    </div>
                </div>
            </div>

            <div class="mt-3 d-flex">

                <div>
                    <div class=" w-75  ">
                        <span>QUE By</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>
                </div>
                <div>
                    <div class=" ms-5 w-75 ">
                        <span>Deal BY</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>
                </div>

                <div>
                    <div class=" ms-5 w-75 ">
                        <span>deal price</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>
                </div>

            </div>

            <div class="mt-3 d-flex">

                <div>
                    <div class=" w-100  ">
                        <span>Dead Line</span> <br />
                        <input style="width: 110%;" type="date" class="form-control mt-2 input-border  " list="datalistOptions" id="exampleDataList">
                    </div>
                </div>
                <div class="">
                    <div class=" ms-5 w-75 ">
                        <span class="ms-4">Approximate Cost</span> <br />
                        <input class="form-control mt-2 input-border ms-3" list="datalistOptions" id="exampleDataList">
                    </div>
                </div>

                <div class="ms-4">
                    <div class=" ms-5 w-75 ">
                        <span>Deal price</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>
                </div>

            </div>


            <div class="mt-4 d-flex">

                <div>
                    <div class=" w-100  ">
                        <span>Flight Dead Line</span> <br />
                        <input type="date" class="form-control mt-2 input-border  " list="datalistOptions" id="exampleDataList">
                    </div>
                </div>
                <div>
                    <div class=" ms-5 w-100 ">
                        <span>Operational Dead Line</span> <br />
                        <input type="date" class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>
                </div>

            </div>



            <div class="mt-4">
                <div class=" w-100 ">
                    <span>Note Of Deal Person</span> <br />
                    <textarea class="input-border mt-2" name="" id="" cols="70" rows="3"></textarea>
                </div>
            </div>

            <div class="mt-3">
                <div class=" w-100 ">
                    <span>Note Of Operation</span> <br />
                    <textarea class="input-border mt-2" name="" id="" cols="70" rows="3"></textarea>
                </div>
            </div>
            <div class="mt-3">
                <div class=" w-100 ">
                    <span>Note For Client</span> <br />
                    <textarea class="input-border mt-2" name="" id="" cols="70" rows="3"></textarea>
                </div>
            </div>

            <div class="mt-4">
                <span class="fw-bold">Terms and Conditions</span>

                <ul class="mt-2">
                    <li>The Given Soles Quatioin is valid for 15 min to Accept.After that the price change anytime</li>
                    <li> No Discount Applicable after accepting this quation </li>


                </ul>
            </div>

            <div class="mt-3 text-end" style="margin-right: 180px;">
                <button class="btn btn-outline-primary text-dark text-light px-3 py-2 rounded-pill">Draft</button>
                <a href="package-quation-create.html"> <button class=" btn bg-primary text-light px-3 py-2 rounded-pill ms-3">Pass for
                        approval</button></a>

            </div>






        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="packageQuation.js"></script>
    <script src="script.js"></script>
</body>

</html>