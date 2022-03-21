<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visa-invoice</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5  mx-auto">
        <div class="row">
            <div class="col col-md-4 col-lg-4">
                <div class=" p-3  rounded-3 input-border w-75 ">
                    <span class='fw-bold visa-heading'>Inv-v-1001</span> <br />
                    <span>Deal By: Mr Shah Alam</span><br />
                    <span>Operation By: Mr Shah Alam</span> <br>
                    <span>Date : 02 Feb 2022 03:15</span> <br>
                </div>
            </div>
            <div class="col col-md-4 col-lg-4">
                <div class=" text-center p-3 fw-bold">
                    <span class='fw-bold fs-3 visa-heading'>VISA INVOICE</span> <br />

                    <div class='d-flex mt-2 justify-content-center'>
                        <Button class=' buttons-design' variant="light">Modify</Button>
                        <Button class='ms-3 buttons-design2' variant="primary">Create</Button>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 col-lg-4">
                <div class=" text-center fw-bold ms-auto me-2 " style="width: 95%;">
                    <input class="form-control input-border" list="datalistOptions" id="exampleDataList"
                        placeholder="Vendor Invoice Amount :">

                    <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList"
                        placeholder="Client Invoice Amount :">

                    <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList"
                        placeholder="Profit/Loss Amount :">

                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 mx-auto">
        <div class="row  ">
            <div class="col col-lg-4 col-md-4">
                <div class=' from-box py-3 px-3'>
                    <div class=" ">
                        <span>Vendor Name</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>

                    <div class="mt-2">
                        <span class="">Embassy Fee</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>

                    <div class="mt-2">
                        <span>Embassy Agent Fee</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>


                    <div class=" mt-2 ">
                        <span> Vendor Service Charge</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>

                    <div class=" mt-2  ">
                        <span> Vendor Delivery Charge</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>

                    <div class="mt-2 ">
                        <span> Vendor Note</span> <br />
                        <textarea class="input-border rounded-3" name="" id="" cols="47" rows="3"></textarea>
                    </div>
                </div>

            </div>
            <div class="col col-lg-4 col-md-4">
                <div class='from-box mx-auto  py-3 px-3'>
                    <div class="  ">
                        <span>Client Name</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>

                    <div class=" mt-2 ">
                        <span>Pax Fee</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>

                    <div class=" mt-2 ">
                        <span>Pax Phone Number</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>

                    <div class=" mt-2 ">
                        <span> Client Service Charge</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>

                    <div class=" mt-2 ">
                        <span> Client Delivery Date</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>

                    <div class=" mt-2 ">
                        <span> Client Note</span> <br />
                        <textarea class="input-border rounded-3" name="" id="" cols="47" rows="3"></textarea>

                    </div>
                </div>

            </div>
            <div class="col col-lg-4 col-md-4">
                <div class='from-box mx-auto py-3 px-3'>
                    <div class="  ">
                        <span>Country Name</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>

                    <div class=" mt-2 ">
                        <span> Visa Catagory</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>

                    <div class=" mt-2 ">
                        <span>Visa Type</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>

                    <div class=" mt-2 ">
                        <span> Visa duration</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>

                    <div class=" mt-2 ">
                        <span> Entry Type</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>
                    <div class=" mt-2 ">
                        <span> Passport Number</span> <br />
                        <input class="form-control mt-2 input-border" list="datalistOptions" id="exampleDataList">
                    </div>

                    <div class=" mt-2 ">
                        <span> Oparational Notes</span> <br />
                        <textarea class="input-border rounded-3" name="" id="" cols="47" rows="2"></textarea>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-3 mb-3">
        <div class="row">
            <div class=" col col-md-6">
                <div class="text-center px-1 text-danger">
                    <span class='border-bottom border-danger'> Cancel By Vendor </span>
                </div>
            </div>
            <div class=" col col-md-6">
                <div class="text-center px-1 text-success">
                    <span class='border-bottom border-success'> Cancel By Client </span>
                </div>

            </div>
        </div>
    </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>