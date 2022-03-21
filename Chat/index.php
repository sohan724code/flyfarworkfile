<?php

include_once "../session.php";

if(array_key_exists("inId",$_GET)){
        $inUser = $_GET['inId'];
        $sql1 ="SELECT * FROM `users` WHERE EMP_ID ='$inUser'";              
        $result1 = $conn->query($sql1);
        if ($result1->num_rows > 0) {
        while($row1 = $result1->fetch_assoc()) {
        $firstname = $row1['fname'];
        $lastname = $row1['lname'];

        }
    }

}

if(array_key_exists("inId",$_GET) && array_key_exists("outId",$_GET) && array_key_exists("message",$_GET)){
        $outUser = $_GET['outId'];
        $inUser = $_GET['inId'];
        $message = $_GET['message'];

        $messageSql ="INSERT INTO `messages`(`incoming_msg_id`, `outgoing_msg_id`, `msg`)
                 VALUES ('$inUser','$empId','$message')";
        if ($conn->query($messageSql) === TRUE) {
            header("location:index.php?inId=$inUser&outId=$empId");
        }

}


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
    <title> Massage</title>
</head>

<body style="overflow: hidden;">
    <div class="row  " style="height: 100vh;overflow: hidden;">
        <div class="col col-md-3 py-4 px-0  " style="background-color: #F9F9FB; height: 100vh; ">
            <div>
                <div class="container d-flex align-items-center">
                    <div>
                        <img src="../images/rightarrow.png" alt="">
                    </div>
                    <div class="ms-5">
                        <span class="fw-bold fs-5">Massage</span>
                    </div>
                    <div class="ms-3">
                        <img src="../images/count.png" alt="">
                    </div>

                    <div class="ms-5">
                        <img src="../images/search.png" alt="">
                    </div>
                </div>

                <div class="mt-4 container d-flex justify-content-between">
                    <div>
                        <span style="color: #3751FF; font-size: 14px; font-weight: 600;">All Conversation</span>
                        <div style="border-bottom:3px solid #3751FF; width: 50%;"></div>
                    </div>
                    <div>
                        <span style="color: #3751FF; font-size: 14px; font-weight: 600;">Group Converation</span>
                    </div>
                </div>
            </div>

            <div class="p-4" style="overflow: scroll;  height: 100%; ">
                <div style="font-size: 14px;" class="mt-4 text-secondary container">
                    <span>G R O U P </span> <span class="ms-3">C O N V E R S A T I O N</span>
                </div>

                <div class="mt-3   ">
                    <div class="row border-bottom border-secondary pb-2">
                        <div class="col col-md-2">
                            <div class="">
                                <img src="../images/group-image.png" alt="">
                            </div>
                        </div>
                        <div class="col col-md-10 ps-3 mt-2">
                            <div class="d-flex justify-content-between">
                                <span>Flyfar Leadies Group</span>
                                <span style="font-size: 14px;">30m ago</span>
                            </div>
                            <span style="font-size: 14px;" class="mt-2 text-secondary"> Hello Rebeka,Thanks for the
                                reset
                            </span>
                        </div>
                    </div>
                </div>

                <div class="mt-3   ">
                    <div class="row  pb-2">
                        <div class="col col-md-2">
                            <div class="">
                                <img src="../images/group-image.png" alt="">
                            </div>
                        </div>
                        <div class="col col-md-10 ps-3 mt-2">
                            <div class="d-flex justify-content-between">
                                <span>Flyfar Leadies Group</span>
                                <span style="font-size: 14px;">30m ago</span>
                            </div>
                            <span style="font-size: 14px;" class="mt-2 text-secondary"> Hello Rebeka,Thanks for the
                                reset
                            </span>
                        </div>
                    </div>
                </div>

                <div style="font-size: 14px;" class="text-end ">
                    See All
                </div>

                <div style="font-size: 14px;" class="mt-4 text-secondary container">
                    <span>P e r s o n a l </span>
                </div>

                <?php

                $sql ="SELECT * FROM `users` WHERE NOT email ='$login_session'";              
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
  				while($row = $result->fetch_assoc()) {
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $inUser = $row['EMP_ID'];
                      echo"<div class='mt-4 d-flex '>
                                <div>
                                    <img src='../images/group-image.png' alt=''>
                                </div>
                                <a href='index.php?inId=$inUser&outId=$empId'>
                                <div class='ms-3'>
                                    <span>$fname $lname</span> <br>
                                    <span style='font-size: 13px;' class='mt-2 text-secondary'> Hello Rebeka,Thanks for the reset
                                    </span>

                                </div>
                                </a>
                            </div>";

                  }
                }

                ?>              

            </div>

        </div>
        <div class="col col-md-9 py-4 px-4 d-flex flex-column" style="height: 100vh;">

            <div class="mt 3 d-flex justify-content-between align-items-center border-bottom  pb-3">
                <div class="d-flex">
                    <div>
                        <img src="../images/chat-images.png" alt="">
                    </div>
                    <div class="ms-3">
                        <span class="fw-bold"> <?php
                        if(array_key_exists("inId",$_GET)){
                            echo "$firstname $lastname";
                        }else{
                                echo " Dummy";
                            } ?></span> <br>
                        <span class="text-secondary">Active 3hours ago</span>
                    </div>
                </div>

                <div class="d-flex">
                    <div>
                        <img src="../images/call.png" alt="" width="22px">
                    </div>
                    <div class="ms-3">
                        <img src="../images/vediocall.png" alt="" width="25px">
                    </div>
                    <div>
                        <img class="ms-3" src="../images/information.png" alt="" width="25px">
                    </div>
                </div>
            </div>
            <div class="p-4" style="height: 100%; overflow-y: scroll;" id="scroll">

            <?php 

            if(array_key_exists("inId",$_GET)){
                $inUser = $_GET['inId'];
                $msgSql ="SELECT * FROM `messages` WHERE (incoming_msg_id ='$inUser' AND outgoing_msg_id='$empId') OR (incoming_msg_id ='$empId' AND outgoing_msg_id='$inUser')";              
                $result2 = $conn->query($msgSql);
                if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) {
                    $income = $row2['incoming_msg_id'];
                    $outcome = $row2['outgoing_msg_id'];
                    $msg = $row2['msg'];
                    $time = $row2['time'];

                    echo"<div class='d-flex mt-5'>";
                    if($outcome == $inUser){
                        echo"<div>
                                <img style='margin-top: 220%;' src='../images/chat-images.png' alt=''>
                            </div>
                    <div class='ms-3 text-light px-3 py-2 w-45'
                        style='background-color: #595959; border-top-left-radius: 20px;
                         border-top-right-radius: 20px; border-bottom-right-radius: 20px;'>
                         
                        <div class='mt-2 '>
                            $msg
                        </div>
                        <div class='text-end pe-3'>
                                <span style='font-size: 14px;'>$time</span>
                                <img src='images/select.png' alt=''>
                            </div>
                        </div>";

                    }else{
                        echo"<div class='mt-5 text-end '>
                                    <div class='w-75 px-3 py-3'
                                        style='background-color:rgba(182, 175, 175, 0.227); margin-left: 250px; border-top-left-radius: 20px; border-top-right-radius: 20px; border-bottom-left-radius: 20px; '>
                                        <div>$msg</div>

                                        <div class='text-end '>
                                            <span style='font-size: 14px;'>$time</span>
                                            <img src='images/select.png' alt=''>
                                        </div>
                                    </div>
                                </div>";

                    }                                     

                echo "</div>";                
                }
            }else{
                echo "No Message Found";
            }

        }?>

            <div class="mt-auto ms-2 mx-auto py-3  d-flex align-items-center">
                <div class=" ">
                    <img src="../images/imoji.png" alt="" width="35px">
                </div>

                <div class="position-relative ms-4">
                    <form>
                        <input type="hidden" name="inId" value="<?php echo $inUser ?>"/>
                        <input type="hidden" name="outId" value="<?php echo $empId ?>" />
                    <input class="rounded-pill ps-4" placeholder="Type massage" name="message" type="text"
                        style="height: 55px; width:800px; border-color:#12558A ;" required>

                    <button class="position-absolute send-button " style="top:13px; left: 800px;">
                         <img src="../images/send.png" alt="" width="25px">                     
                    </button>
            </form>
                </div>

                <div class="d-flex ms-5 ">
                    <div class="">
                        <svg width="30" height="32" viewBox="0 0 37 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M23.8905 1.74859C23.1094 1.03537 22.0949 0.640625 21.0431 0.640625H15.2823C14.2307 0.640625 13.2165 1.03517 12.4354 1.74806L11.3047 2.78004C10.5363 3.4814 9.53843 3.86957 8.50389 3.86957C3.80732 3.86957 0 7.72463 0 12.4801V23.2432C0 27.9987 3.80732 31.8538 8.50389 31.8538H27.6376C32.3342 31.8538 36.1415 27.9987 36.1415 23.2432V12.4801C36.1415 7.72463 32.3342 3.86957 27.6376 3.86957L27.3335 3.85692C26.5269 3.78968 25.761 3.45643 25.1558 2.90386L23.8905 1.74859ZM15.283 2.61034H21.0438C21.603 2.61034 22.1436 2.82069 22.562 3.20276L23.8273 4.35803C24.7524 5.2027 25.9275 5.71622 27.1705 5.81982L27.5564 5.83758C31.2407 5.83928 34.1709 8.80628 34.1709 12.4784V23.2416C34.1709 26.9138 31.2407 29.8808 27.6384 29.8808H8.50463C4.90235 29.8808 1.9721 26.9138 1.9721 23.2416V12.4784C1.9721 8.91756 4.72745 6.01975 8.17906 5.8474L8.88508 5.82742C10.2746 5.74068 11.5976 5.18079 12.6344 4.23446L13.7651 3.20247C14.1835 2.82058 14.724 2.61034 15.283 2.61034ZM18.0715 8.86526C22.608 8.86526 26.2855 12.5428 26.2855 17.0792C26.2855 21.6157 22.608 25.2932 18.0715 25.2932C13.535 25.2932 9.85752 21.6157 9.85752 17.0792C9.85752 12.5428 13.535 8.86526 18.0715 8.86526ZM11.8284 17.0752C11.8284 13.6275 14.6233 10.8326 18.0711 10.8326C21.5188 10.8326 24.3137 13.6275 24.3137 17.0752C24.3137 20.5229 21.5188 23.3178 18.0711 23.3178C14.6233 23.3178 11.8284 20.5229 11.8284 17.0752Z"
                                fill="#12558A" />
                        </svg>
                    </div>

                    <div class="ms-4">
                        <svg width="22" height="38" viewBox="0 0 27 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.8219 0C17.9047 0 21.2145 3.30977 21.2145 7.39258V18.8922C21.2145 22.975 17.9047 26.2847 13.8219 26.2847C9.73909 26.2847 6.42932 22.975 6.42932 18.8922V7.39258C6.42932 3.30977 9.73909 0 13.8219 0ZM1.91244 16.9679C2.40237 16.9679 2.80882 17.3254 2.88521 17.7937L2.89811 17.9536V18.1704C2.89811 24.3145 7.79282 29.2889 13.8227 29.2889C19.7243 29.2889 24.5385 24.5239 24.7407 18.5609L24.7473 18.1704V17.9707C24.7473 17.4263 25.1886 16.985 25.733 16.985C26.2229 16.985 26.6294 17.3425 26.7058 17.8108L26.7187 17.9707L26.7125 18.5779C26.5105 25.2816 21.3411 30.7217 14.8082 31.2226L14.8084 36.9634C14.8084 37.5078 14.3671 37.9491 13.8227 37.9491C13.3328 37.9491 12.9263 37.5917 12.8499 37.1233L12.837 36.9634L12.8378 31.2227C6.30871 30.7223 1.14147 25.2887 0.93328 18.5906L0.926758 17.9536C0.926758 17.4092 1.36806 16.9679 1.91244 16.9679ZM8.40142 7.39094C8.40142 4.39688 10.8286 1.96972 13.8226 1.96972C16.8167 1.96972 19.2439 4.39688 19.2439 7.39094V18.8905C19.2439 21.8846 16.8167 24.3117 13.8226 24.3117C10.8286 24.3117 8.40142 21.8846 8.40142 18.8905V7.39094Z"
                                fill="#12558A" />
                        </svg>
                    </div>

                    <div class="ms-4">
                       <img src="../images/icon.svg" />
                    </div>
                </div>

            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="script.js"></script>
    <script>
        function scrollDown() {
        document.getElementById('scroll').scrollTop =  document.getElementById('scroll').scrollHeight
        }
</script>
</body>

</html>