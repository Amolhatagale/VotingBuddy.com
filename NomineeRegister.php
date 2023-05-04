<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Candidate Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='Register.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- navbar - start -->
    <div class="bg-white">
        <header class="border-b">
            <div class="mx-auto flex max-w-screen-2xl items-center justify-between px-4 md:px-8">
                <!-- logo - start -->
                <a class="text-black-900 inline-flex items-center gap-2.5 text-2xl font-bold md:text-3xl"
                    aria-label="logo">
                    <svg width="95" height="94" viewBox="0 0 95 94" class="h-auto w-6 text-black-500"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"></svg>
                    <img src="./Images/logo.jpg" width="60px" height="50px">VotingBuddy
                </a>
                <!-- logo - end -->

                <!-- nav - start -->
                <nav class="hidden gap-12 lg:flex 2xl:ml-16">
                    <a href="index.html"
                        class="text-lg font-semibold text-black-600 transition duration-100 hover:text-orange-500 active:text-black-700">Home</a>
                    <a href=".\about.php"
                        class="text-lg font-semibold text-black-600 transition duration-100 hover:text-orange-500 active:text-black-700">About
                        Us</a>
                    <a href="#view"
                        class="text-lg font-semibold text-black-600 transition duration-100 hover:text-orange-500 active:text-black-700">View</a>
                    <a href="#help"
                        class="text-lg font-semibold text-black-600 transition duration-100 hover:text-orange-500 active:text-black-700">Help</a>
                </nav>
                <!-- nav - end -->

                <!-- buttons - start -->
                <div class="flex divide-x border-r sm:border-l">
                    <a href="Login.php"
                        class="hidden h-12 w-12 flex-col items-center justify-center gap-1.5 transition duration-100 hover:bg-green-100 active:bg-gray-200 sm:flex sm:h-20 sm:w-20 md:h-24 md:w-24">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path
                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                        </svg>
                        <span class="hidden text-xs font-semibold text-black-500 sm:block">Voters</span>
                    </a>

                    <a href="NomineeRegister.php"
                        class="flex h-12 w-12 flex-col items-center justify-center gap-1.5 transition duration-100 hover:bg-green-100 active:bg-gray-200 sm:h-20 sm:w-20 md:h-24 md:w-24">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg>
                        <span class="hidden text-xs font-semibold text-black-500 sm:block">Candidate</span>
                    </a>

                    <a href="admin.php"
                        class="flex h-12 w-12 flex-col items-center justify-center gap-1.5 transition duration-100 hover:bg-green-100 active:bg-gray-200 sm:h-20 sm:w-20 md:h-24 md:w-24">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-person-fill-lock" viewBox="0 0 16 16">
                            <path
                                d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5v-1a1.9 1.9 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                        </svg>
                        <span class="hidden text-xs font-semibold text-black-500 sm:block">Administrator</span>
                    </a>
                </div>
                <!-- buttons - end -->
            </div>
        </header>
    </div>
    <!-- Navbar - end -->
    <div class="registerform">
        <h1>Registration Form</h1>
        <form action="" method="POST" >
            <input type="text" name="FullName" required placeholder="Full Name">
            <input type="partyname" name="PartyName" required placeholder="Party Name"><br>
            <input type="email" name="Email" required placeholder="Email">
            <input type="date" name="DOB" required placeholder="Date Of Birth"><br>
            <input type="tel"  name="MobileNo" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required placeholder="Mobile NO">
            <input type="tel"  name="AadharNo" pattern="[1-9]{4}[0-9]{4}[0-9]{4}" maxlength="12" required placeholder="Aadhar No"><br>
            <input type="file"  id="file" name="Image" accept="/Image*/"><br>
            <button type="submit" name="submit" >Submit</button>
        </form>
    </div>

    <button class="open-button" onclick="back()">Back</button>

<script>
    function back(){
        window.location="index.html";
    }
</script>    

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting_system";

    $conn = mysqli_connect("localhost", "root", "", "voting_system");
    if (isset($_POST['submit'])) {
      $FullName = $_POST['FullName'];
      $PartyName = $_POST['PartyName'];
      $Email = $_POST['Email'];
      $DOB = $_POST['DOB'];
      $MobileNo = $_POST['MobileNo'];
      $AadharNo = $_POST['AadharNo'];
      $Image = $_FILES['Image']['name'];
      $tmp_name = $_FILES['Image']['tmp_name'];
     
      
      $insert = "insert into nominee(FullName,PartyName,Email,DOB,MobileNo,AadharNo,Image,Votes,Status)values('$FullName','$PartyName','$Email','$DOB','$MobileNo','$AadharNo','$Image',0,'OFF')";
      $run = mysqli_query($conn, $insert);
      if ($run === true) {
        echo "<H5 style='color:green;text-align:center;'>Successfully Inseted</h5>";
        move_uploaded_file($tmp_name, "upload/$Image");
      } else {
        echo "<H5 style='color:red;text-align:center;'>Not Inseted Alredy Added</h5>"; //.mysqli_error($conn)
      }
    }
    ?>
</body>
</html>
