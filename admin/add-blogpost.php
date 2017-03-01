<?php 

	require "../scripts/connector.php";

	function convertToMegabytes($input){
		$num = floatval($input);
		if($num > 0){
			return $num * 1024 * 1024;
		}
	}

	$attempts = 5;
	$errors = 0;
	$file_names = array();

	if(isset($_POST["add"])){

		//check files
		foreach($_FILES as $file){
			
			$filesize = $file["size"];
	
			if($filesize > 0){
						
				$fileerror = $file["error"];
				$filename = $file["name"];
				$filetype = strtolower(end(explode(".", $filename)));
				$filetmp = $file["tmp_name"];

				$allowed_file_types = array("jpeg", "jpg", "png");

				if(in_array($filetype, $allowed_file_types)){
					if($fileerror === 0){

						$maximum_megabytes = 5;
					    $uploaddir = "../images/blog/";
					    $dbdir = substr($uploaddir, 3);

						$maximum_file_size = convertToMegabytes($maximum_megabytes);
						if($filesize <= $maximum_file_size){

							//file has passed checks
							$filenamenew = uniqid("", true) . "." . $filetype;
							$destination = $uploaddir . $filenamenew;

							if(move_uploaded_file($filetmp, $destination)){

								//success
				            	$file_names[] = $dbdir . $filenamenew;

							} else {
								//upload failed
								$errors++;
							}
						} else {
						    //file too big
						    $errors++;
						}
					} else {
					   	//unknown file error
					    $errors++;
					}
				} else {
					//forbidden file extension
					$errors++;
				}
			} else {
				//empty file input
				$errors++;
			}
		}

		if($errors > 0){

			//one or more of the files has an error
			header("location: add-blogpost-form.php?error=file");
			exit();

		} else {

			//text fields
			$blogtitle = $_POST["blogtitle"];
			$summary = $_POST["summary"];
			$description = $_POST["description"];
            $datetime=date('y.m.d h:i:s');







			//validate text fields here







			//database input
			$sql = "INSERT INTO blog (title, image, summary, description, datetime) VALUES ('$blogtitle', '$file_names[0]', '$summary', '$description', '$datetime')";
			$result = mysqli_query($dbconnect, $sql);

			if(!$result){
				die("Error when adding blog post.<br>" . mysqli_error($dbconnect));
			}
		}
	} else {
		//form not posted
		header("location: add-blogpost-form.php");
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/admin.css" />
    <title>Admin Area | Create new work</title>
</head>
<body>
    <div class="admin-container">
    	<p>
    		<h2>Blog post successfully added!</h2><br>
    		Visitors can now view it on the <a href="../blog.php" title="blog">blog</a> page.
    	</p>
		<a href="admin-blog.php">
			<p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</p>
		</a>
	</div>
</body>
</html>
<?php
	mysqli_close($dbconnect);
?>