<?php require "../scripts/connector.php"; ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/admin.css" />
        <title>Admin Area | Create new work</title>
    </head>

    <body>
        <div class="admin-container">
            <?php

function convertToMegabytes($num){
	if($num > 0){
		return $num * 1024 * 1024;
	}
}

if(isset($_POST["add"])){
	
	if(
		count($_FILES > 0)
	){

		$errors = array();
		$attempts = count($_FILES);
		$successes = array();
		$emptyfields = 0;
        $temporary_file_names = array();

   
        
		foreach($_FILES as $file){

			//get file data
			$filename = $file["name"];
			$filetmp = $file["tmp_name"];
			$filesize = $file["size"];
			$fileerror = $file["error"];

			//work out the file extension
			$filetype = strtolower(end(explode(".", $filename)));

			//information for the uploading process
			$allowed_file_types = array("jpeg", "jpg", "png");
			$maximum_megabytes = 5;
	        $targetdir = "../images/portfolio/";

	        //check if the input is not blank
	        if($filesize > 0){

		        //check if the file is one of the allowed formats
		        if(in_array($filetype, $allowed_file_types)){
		        	//check if the file has no errors attached
		        	if($fileerror === 0){

		        		//check the file is not too big
		        		$maximum_file_size = convertToMegabytes($maximum_megabytes);
		        		if($filesize <= $maximum_file_size){

		        			//file has passed checks, time to upload
		        			//generate new file name using timestamp
							$filenamenew = uniqid("", true) . "." . $filetype;

							//upload destination
							$destination = $targetdir . $filenamenew;

							//upload file to $destination
							if(move_uploaded_file($filetmp, $destination)){
								
								//success
								$successes[$filename] = $destination;
                                $temporary_file_names[] = $filename;
							}

		        		} else {
		        			//file too big
		        			$errors[$filename] = "filesize";
		        		}
		        	} else {
		        		//something wrong with the file
		        		$errors[$filename] = "error";
		        	}
		        } else {
		        	//file type not allowed
		        	$errors[$filename] = "filetype";
		        }
		    } else {
		    	$emptyfields++;
		    	//if all fields are empty
		    	if($emptyfields >= $attempts){
		    		header("location: add-work-form.php");
		    		exit();
		    	}
		    }
		}
        
        //show failed uploads and why they failed
		if(count($errors) > 0 || $emptyfields > 0){
            header("location: add-work-form.php?error=file");
		    exit();
        } else {
	

		//show successful uploads
		echo count($successes) .  " files successfully uploaded.<br>";
		foreach($successes as $key => $value){
			echo "<a href='" . $value . "' title='View Full Image' target='_blank' style='display: inline-block; width: 100px; height: 100px; background-image: url(" . $value . "); background-size: cover; margin: 14px;'></a>";


		}
        }
		

	} else {
		//too many files uploaded, or none at all
		header("location: add-work-form.php");
		exit();
	}
} else {
	//form was not submitted
	header("location: add-work-form.php");
	exit();
}

    
		//insert form values into database
		$sql = "INSERT INTO portfoliolist (coverImage, logo, portfolioTitle, aboutIntro, image2, aboutClient, image3, image4, aboutDesign, finalImage, workType) VALUES ('$successes[$temporary_file_names[0]]', '$successes[$temporary_file_names[1]]', '$portfolioTitle', '$aboutIntro', '$successes[$temporary_file_names[2]]', '$aboutClient', '$successes[$temporary_file_names[3]]', '$successes[$temporary_file_names[4]]', '$aboutDesign', '$successes[$temporary_file_names[5]]', '$workType')";
		$result = mysqli_query($dbconnect, $sql);

		//if successful
		if($result){
			echo "Added Successfuly";
		} else {
			//if not
			echo "Error when adding work.";
			die(mysqli_error($dbconnect));
		}

	} 

?>
                <a href="admin-work.php">
                    <p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</p>
                </a>
        </div>
    </body>

    </html>
    <?php

	//close connection
	mysqli_close($dbconnect);

?>