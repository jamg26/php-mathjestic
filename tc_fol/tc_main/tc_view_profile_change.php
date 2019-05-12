<?php

    include('../../dbconnect/dbconn.php');
	$target = "images/profile/".basename($_FILES['image']['name']);
	$tcid=$_POST ['tcid'];
	$image = $_FILES['image']['name'];


	$sqli = "UPDATE usr_teacher SET  profile_img='$image' WHERE tc_id='$tcid'";

					$result = $conn->query($sqli);

		
		if ($result) {
			move_uploaded_file($_FILES['image']['tmp_name'], $target);
		
echo "<script>alert('Successfully profile picture updated!'); window.location='tc_view_profile.php'</script>";
		}
		else
		{
			echo "<script>alert('Failed to upload');document.location='tc_view_profile.php'</script>";
		}

?>