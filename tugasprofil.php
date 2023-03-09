<?php
  // Define variable untuk biodata
  $name = "Avi Oktaviani";
  $dateOfBirth = "October 14, 2002";
  $city = "Kediri";
  $address = "KH. Ahmad Dahlan 48A, Mojoroto, Kediri";
  $npm = "21081010227";
  $email = "21081010227@student.upnjatim.ac.id";
  $batch = "2021";
  $major = "Informatics";
  $phoneNumber = "+628800888180";

  //Mengitung umur dengan diff
  $birthday = "2002-10-14";
  $age = date_diff(date_create($birthday), date_create('today'))->y; // menghitung selisih tahun antara tanggal lahir dan hari ini
		
  // Define variable untuk social media
  $instagram = "https://instagram.com/avioktaa?igshid=NTE5MzUyOTU=";
  $whatsapp = "https://wa.me/082244670526";
  $linkedin = "https://www.linkedin.com/in/avi-oktaviani-235343218/";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Biografi</title>
	<style>
		body {
			background-color: #f1e9d8;
			color: #ffffff;
			transition: background-color 5s ease-in-out;
		}
		.orange {
			background-color: #d6d7bb;
        }
		.nude {
			background-color: #b6b464;
		}
		.coffee {
			background-color: #a6ae5d;
		}
	</style>
    <link rel="stylesheet" href="tugasprofil.css"></link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onscroll="scrollFunction()">
	
	<?php
		
	?>	

    <h1 class="helo">HELLO THERE!!</h1>    
    <p class="im">I'M AVI</p>    
    <div><img src="foto\WhatsApp Image 2022-11-20 at 21.00.53.jpeg" alt="foto profil" class="foto" class="center"></div>
    <br><br>
    <p style="font-size: 65px; color: rgb(106, 99, 84); text-align: center ;"><strong>About me</strong> </p>
    <p style="font-size: 45px; color: rgb(141, 131, 108); text-align: center;">Hey there, I’m Avi Oktaviani from Kediri. I'm a student from UPN Veteran Jawa Timur faculty of Computer Science and majoring in informatics. </p>
    <p>
        <br></br>
    </p>
	

	<div class="container">
        <table>
        <tr style="text-align: center">
            <td>
            <h1 style="font-size: 50px;">PROFILE</h1>
            <div style="font-size: 30px">
                <p>Name           : <?php echo $name ?></p>
                <p>Age			  : <?php echo $age ?></p>
				<p>Birtday		  :	<?php echo $birthday?></p>
                <p>City           : <?php echo $city ?></p>
                <p>Address        : <?php echo $address ?></p>
                <p>NPM            : <?php echo $npm ?></p>
                <p>Email          : <?php echo $email ?></p>
                <p>Student Bacth  : <?php echo $batch ?></p>
                <p>Major          : <?php echo $major ?></p>
                <p>Phone Number   : <?php echo $phoneNumber ?></p>
            </div>
            </td>
        </tr>
        </table>
    </div>

    <p><br></p>
    <div class="container">
        <table>
        <tr style="text-align: center;">
            <td>
            <h1 style="font-size: 50px;">SOCIAL MEDIA</h1>
            <div style="font-size: 30px">
                <p><a href="<?php echo $instagram; ?>"><i class="fa fa-instagram"> Instagram</i></p>
                <p><a href="<?php echo $whatsapp; ?>"><i class="fa fa-whatsapp"> Whatsapp</i></a></p>
                <p><a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"> LinkedIn</i></a></p>
            </div>
            </td>
        </tr>
    </table>
    </div>
</body>
<script>
	function scrollFunction() {
		var scrollPosition = window.pageYOffset;
		var body = document.querySelector("body");

		if (scrollPosition < 500) {
			body.classList.remove("orange", "nude", "coffee");
		} else if (scrollPosition >= 500 && scrollPosition < 1000) {
			body.classList.add("orange");
			body.classList.remove("nude", "coffee");
		} else if (scrollPosition >= 1000 && scrollPosition < 1500) {
			body.classList.add("nude");
			body.classList.remove("orange", "coffee");
		} else {
			body.classList.add("coffee");
			body.classList.remove("orange", "nude");
		}
	}
</script>
</html>
