
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="./../../../css/nav.css" />
    <title>Fly Far International</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- custom style link  -->

    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!--Bootstrap DataTable CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"
    />

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./../../../css/style.css" />
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css"
    />

    <!-- custom style link end  -->
  </head>




  <body>
    <!-- Vertical navbar -->
    <?php include "../../../side_navbar.php" ?>
    <!-- End vertical navbar -->


    <!-- Page content holder -->
    <div class="page-content p-3" id="content">
      <!-- navbar icon button -->
      <div class="toogle-btn">
        <button
          id="sidebarCollapse"
          type="button"
          class="bg-white border-0 p-2"
        >
          <i class="fa fa-bars mr-2"></i>
        </button>
      </div>
      <!-- navbar icon button end -->


      
      <!-- body content start here -->

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
                    <div style='color:#767676' class="fs-6 dropdown-toggle" role="button" id="dropdownMenu2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
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
                    <div class="package-link"><a id='package-link-a'  href="package.php" class="option">Package</a></div>
                    <ul>
                        <li><a href="./add-package-bn.php">Add Package BN</a></li>
                        <li><a href="./add-package-en.php">Add Package En</a></li>
                        <li><a href="./package.php">All Packages</a></li>
                        <li><a href="./package-text.php">Package Text</a></li>
                    </ul>
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

            
           
                <!-- Title section start here -->        
                <h5 class="anp-h5 mt-5">Title section</h5>
                <div class="container-fluid">
        
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="anp-input">
                                <label for="bannerShortText" class="form-label"> Main Title Text English</label>
                                <input type="text" class="form-control-file" id="bannerShortText" name="titleBN"
                                    placeholder="Welcome To Our Blog">
                            </div>
                           
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="anp-input">
                                <label for="bannerShortText" class="form-label"> Main Title Text Bangla</label>
                                <input type="text" class="form-control-file" id="bannerShortText" name="titleEN"
                                    placeholder=" আমাদের ব্লগে স্বাগতম|">
                            </div>
                        </div>

                        <div class="col d-flex justify-content-start align-items-end">
                            <div class="anp-input-submit">
                                <button type="submit">Update</button>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="anp-input">
                                <label for="bannerShortText" class="form-label">Short Text English</label>
                                <input type="text" class="form-control-file" id="bannerShortText" name="shortTextEN"
                                    placeholder="You can find the best package">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="anp-input">
                                <label for="shortTextBN" class="form-label">Short Text Bangla</label>
                                <input type="text" class="form-control-file" id="bannerShortText" name="bannerShortText"
                                    placeholder="আপনি সেরা প্যাকেজ খুঁজে পেতে পারেন|">
                            </div>
                        </div>
                        <div class="col d-flex justify-content-start align-items-end">
                            <div class="anp-input-submit">
                                <button type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Title section end here  -->


              



                <!-- Blog section start here -->                   
                <h3 class=" anp-h2 custom-margin">Blog Heading Image</h3>

                <div class="container-fluid">

                    <div class="row d-flex align-items-center ">

                        <div class=" col-xl-4  col-lg-6 col-md-4 mt-0">
                            <div class="adpack-input  py-3">
                                <label for="coverimage" class="form-label">Package Image </label>
                                <input type="file" class="form-control-file" name="packageImg" required>
                            </div>                                
                        </div>

                        <div class=" col-xl-2 col-lg-3 col-md-3 mt-0">
                            <div class='package-img'>
                                <img class="img-thumbnail" class='mb-2' src="../../../images/blog-img.png" class="rounded float-start"
                                    alt="...">
                            </div>
                        </div>
                    
                        <div class=" col-xl-4 col-lg-6 col-md-6 d-flex justify-content-start align-items-end">
                            <div class="anp-input-submit">
                                <button type="submit" class='me-3'>Save</button>
                                <button type="button">Add another</button>
                            </div>
                        </div>

                    </div>            
                 </div>
                 <!-- Blog title part start here -->


                 <h3 class=" anp-h2 custom-margin">Blog Section</h3>
                 <div class="container-fluid">                 
                     <div class="row">
                         <div class="col-lg-4 col-md-4">
                             <div class="anp-input">
                                 <label for="bannerShortText" class="form-label"> Blog Title Text English</label>
                                 <input type="text" class="form-control-file" id="bannerShortText" name="blogTitleEN"
                                     placeholder="Best Turkey Tour Packages from Bangladesh">
                             </div>
                         </div>

                         <div class="col-lg-4 col-md-4">
                             <div class="anp-input">
                                 <label for="bannerShortText" class="form-label">  Blog Title Text Bangla </label>
                                 <input type="text" class="form-control-file" id="bannerShortText" name="blogTitleBN"
                                     placeholder="বাংলাদেশ থেকে সেরা টার্কি ট্যুর প্যাকেজ|">
                             </div>
                         </div>

                         <div class="col d-flex justify-content-start align-items-end">
                             <div class="anp-input-submit">
                                 <button type="submit">Update</button>
                             </div>
                         </div>
                         
                     </div>
                     <div class="row">
                         <div class="col-lg-4 col-md-4">
                             <div class="anp-input">
                                 <label for="bannerShortText" class="form-label">Blog long Description Text English</label>
                                 <input type="text" class="form-control-file" id="bannerShortText" name="blogDesEN"
                                     placeholder="turkey luxury ladies  tour from ...">
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-4">
                             <div class="anp-input">
                                 <label for="bannerShortText" class="form-label">Short Text Bangla</label>
                                 <input type="text" class="form-control-file" id="bannerShortText" name="blogDesBN"
                                     placeholder="তুরস্ক বিলাসবহুল মহিলা সফর">
                             </div>
                         </div>
                         <div class="col d-flex justify-content-start align-items-end">
                             <div class="anp-input-submit">
                                 <button type="submit">Update</button>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-4 col-md-4">
                             <div class="anp-input">
                                 <label for="bannerShortText" class="form-label">Blog Date Time Text English</label>
                                 <input type="text" class="form-control-file" id="blogDateEN" name="bannerShortText"
                                     placeholder="2022-02-14 ">
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-4">
                             <div class="anp-input">
                                 <label for="bannerShortText" class="form-label">Blog Date Time Text Bangla</label>
                                 <input type="text" class="form-control-file" id="bannerShortText" name="blogDateBN"
                                     placeholder="2022-02-14--> ">
                             </div>
                         </div>
                         <div class="col d-flex justify-content-start align-items-end">
                             <div class="anp-input-submit">
                                 <button type="submit">Update</button>
                             </div>
                         </div>
                     </div>

                 </div>

                 <!-- Blog title part end here  -->

             <!--  Blog section end here -->


            
             <!-- Blog image start here -->


             <h3 class=" anp-h2 custom-margin">Blog  Image</h3>

             <div class="container-fluid">

                 <div class="row d-flex align-items-center ">

                     <div class=" col-xl-4  col-lg-6 col-md-4 mt-0">
                         <div class="adpack-input  py-3">
                             <label for="coverimage" class="form-label">Blog Image </label>
                             <input type="file" class="form-control-file" name="blogImage" required>
                         </div>                                
                     </div>

                     <div class=" col-xl-2 col-lg-3 col-md-3 mt-0">
                         <div class='package-img'>
                             <img class="img-thumbnail" class='mb-2' src="../../../images/sigle-blog.png" class="rounded float-start"
                                 alt="...">
                         </div>
                     </div>
                 
                     <div class=" col-xl-4 col-lg-6 col-md-6 d-flex justify-content-start align-items-end">
                         <div class="anp-input-submit">
                             <button type="submit" class='me-3'>Save</button>
                             <button type="button">Add another</button>
                         </div>
                     </div>

                 </div>            
              </div>


             <!-- Blog image end here -->






            <!-- package upload section start here -->


           
            <div class=" col-xl-4 col-lg-6 col-md-6 ">
                <div class="anp-input-submit">
                    <button type="submit" class='me-3'>Add Blog</button>
                   
                </div>
            </div>
            


            <div class="container-fluid">
                <div class="row">
    <!-- col start -->
                 <div class="col-12 col-md-6 col-lg-3">          
                            <div class=" card border-0 card-width " style="width: 16rem;">

                         <div class='slider-header text-center '>
                            <h4 >Blog:01</h4>
                        </div>
                       
                                 <div class='card-border'>

                                    <div class='package-img text-center'>
                                        <img class="img-thumbnail" class='mb-2' src="../../../images/girl.png" class="rounded float-start"
                                            alt="...">
                                    </div>

                                    <div class="  card-body  ">
                                       <div class='d-flex justify-content-between card-btn py-1'>
                                            <div>
                                            <h3>Turkey Tour </h3> 
                                            </div>
                                         
                                       </div>
                                       <div class='d-flex justify-content-between card-btn py-1'>
                                            <div>
                                               <p style="color: #000; text-align:justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis quos est nisi corporis rem nobis? Velit quae incidunt repellat fuga?</p>
                                            </div>                                               
                                       </div>

                                       <div class=' my-2  book-btn d-flex justify-content-between  card-btn'>
                                          <div>
                                                <h3> 2022-02-14 12.00 | 6 Minutes  </h3> 
                                          </div>                                            
                                       </div>
                                    </div>
                                </div>
                                <div class=" card-btn  mt-3  border-0 d-flex justify-content-around  update-delete-div">
                                       <div> <button>Update</button>  </div>
                                       <div> <button>Delete</button>  </div>
                                </div>  

                             </div>       
                  </div>

        <!-- col end -->

                </div>
            </div>

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

                       $bannerShortText = $_POST["bannerShortText"];
                       $videolink = $_POST["videolink"];
                   
                   //     $upload_dir = 'Home/'.DIRECTORY_SEPARATOR;
                   //     if(!file_exists($upload_dir)){
                   //         mkdir($upload_dir, 0777, true);
                   //     }                
                   //     $fileName = $_FILES['cover']['name'];
                   //     $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
                   //     $targetFilePath = $upload_dir."cover.$fileType";
                       
                   //     $allowTypes = array('jpg','png','jpeg','gif','webp','PNG','JPEG','jpeg');
                   
                   //     if(in_array($fileType, $allowTypes)){
                   //         // Upload file to server
                   //         if(move_uploaded_file($_FILES["cover"]["tmp_name"], $targetFilePath)){
                   //             $sql = "INSERT INTO `HomeContent`(`text`, `image`, `videolink`)
                   //              VALUES ('$bannerShortText','$fileName','$videolink')";

                   //             if ($connect->query($sql) === TRUE) {
                   //                 header("Location: index.php");
                   //             } else {
                   //                  echo "Error: " . $sql . "<br>" . $connect->error;
                   //             }
                               
                   //         }else{
                   //             $statusMsg = "Sorry, there was an error uploading your file.";
                   //         }
                   //     }else{
                   //         $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                   //     }

                   // }

                              $sql = "INSERT INTO `HomeContent`(`text`, `image`, `videolink`)
                              VALUES ('$bannerShortText','bannner.jpg','$videolink')";

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
                }
                $connect->close();


?>




        </div>
</Main>  


      <!-- body content end here -->



    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>

    <script>
      $(function () {
        $("#sidebarCollapse").on("click", function () {
          $("#sidebar, #content").toggleClass("active");
        });
      });
    </script>

    <!-- custom js link -->

    <!-- Bootstrap JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <!-- jaqury CDN -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <!-- jquery datepicker theme ui  -->
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <!-- External JavaScript -->
    <script src="./../../../js/script.js"></script>
    <script src="./../../../js/flyfarladies-home.js"></script>

    <!-- DataTable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- custom js link end-->
  </body>
</html>
