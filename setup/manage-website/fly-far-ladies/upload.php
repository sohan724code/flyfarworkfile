<!DOCTYPE html>
<html>

<head>
    <title>
        Select and upload multiple
        files to the server
    </title>
</head>

<body>

    <form action="#" method="POST" enctype="multipart/form-data">

        <h2>Upload Files</h2>

        <p>
            Select files to upload:

            <!-- name of the input fields are going to
				be used in our php script-->
            <input type="file" name="files[]" multiple>

            <br><br>

            <input type="submit" name="submit" value="Upload">
        </p>

    </form>
</body>

</html>
<?php

// Check if form was submitted
if(isset($_POST['submit'])) {

	$upload_dir = '../../../../CDN/images'.DIRECTORY_SEPARATOR;
    
	$allowed_types = array('jpg', 'png', 'jpeg', 'gif');
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
}

?>