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

                    $sql = "SELECT * FROM packages ORDER BY id DESC LIMIT 1";
                    $result = $connect->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $outputString = preg_replace('/[^0-9]/', '', $row["pkid"]);
                            $number= (int)$outputString + 1;
                            $PKG_Id = "PKG-$number";									
                    }
                    } else {
                        $PKG_Id ="PKG-1000";
                    }


                    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

                        $titleEN = $_POST["titleEN"];
                        $titleEN = $_POST["titleBN"];
                        $longTitleEN = $_POST["longTitleEN"];
                        $longTitleBN = $_POST["longTitleBN"];
                        $locationEN = $_POST["locationEN"];
                        $locationEN = $_POST["locationBN"];
                        $shortDescriptionEN = $_POST["shortDescriptionEN"];
                        $shortDescriptionBN = $_POST["shortDescriptionBN"];
                        $startDateEN = $_POST["startDateEN"];
                        $startDateBN = $_POST["startDateBN"];
                        $endDateEN = $_POST["endDateEN"];
                        $endDateBN = $_POST["endDateBN"];
                        $price = $_POST["price"];
                        $tripTheme = $_POST["tripTheme"];
                        $triptype = $_POST["triptype"];
                        $tripplan = $_POST["tripplan"];
                        $scheduledetailsEN = $_POST["scheduledetailsEN"];
                        $scheduledetailsBN = $_POST["scheduledetailsBN"];
                        $placevisitEN = $_POST["placevisitEN"];
                        $placevisitBN = $_POST["placevisitBN"];
                        $detailsEN  = $_POST["detailsEN"];
                        $detailsBN  = $_POST["detailsBN"];
                        $bookingpolicyEN = $_POST["bookingpolicyEN"];
                        $bookingpolicyBN = $_POST["bookingpolicyBN"];
                        $refundpolicyEN  = $_POST["refundpolicyEN"];
                        $refundpolicyBN  = $_POST["refundpolicyBN"];
                        $termsEN = $_POST["termsEN"];
                        $termsBN = $_POST["termsBN"];                       


                        $upload_dir = '../../../../CDN/images/'."$PKG_Id/".DIRECTORY_SEPARATOR;         
                        mkdir($upload_dir, 0777, true);
                            $fileName = $_FILES["coverimage"]["name"];
                            $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
                            $targetFilePath = $upload_dir."coverimage.$fileType";
                            
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
                        
                        $allowed_types = array('jpg', 'png', 'jpeg', 'gif','webp');
                        $maxsize = 1024 * 1024;

                        if(!empty(array_filter($_FILES['files']['name']))) {
                            if(count(array_filter($_FILES['files']['name'])) <= 6){
                                foreach ($_FILES['files']['tmp_name'] as $key => $value) {
                                    $file_tmpname = $_FILES['files']['tmp_name'][$key];
                                    $file_name =  $_FILES['files']['name'][$key];
                                    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                                    $rename = "sightImage$key".".$file_ext";
                                    
                                    $file_size = $_FILES['files']['size'][$key];

                                    // Set upload file path
                                    $filepath = $upload_dir.$rename;

                                    // Check file type is allowed or not
                                    if(in_array(strtolower($file_ext), $allowed_types)) {

                                        if ($file_size > $maxsize)		
                                            echo "Error: File size is larger than the allowed limit.";

                                        if(file_exists($filepath)) {
                                            $filepath = $upload_dir.time().$rename;
                                            
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

                        $Cover  = "coverimage.$fileType";
                        

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
                    `termsBN`)
                    VALUES($titleEN, $titleEN,$Cover, $longTitleEN, $longTitleBN,$locationEN,$shortDescriptionEN, $shortDescriptionBN,
                           $startDateEN, $startDateBN, $durationEN, $durationBN,$price,$tripTheme,$triptype,$tripplan,$scheduledetailsEN, 
                           $scheduledetailsBN,$placevisitEN,$placevisitBN, $detailsEN, $detailsBN, $bookingpolicyEN, $bookingpolicyBN,
                           $refundpolicyEN, $refundpolicyBN,$termEN, $termsBN)";

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
                        echo "Error: " . $sql . "<br>" . $connect->error;
                    }

                    $connect->close();

                    }

                    ?>