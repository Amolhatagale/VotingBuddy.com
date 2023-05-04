<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Edit Nominee</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='Register.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <div class="registerform">
        <h1>Edit Nominee Form</h1>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'voting_system');
        if (isset($_GET['nedit'])) {
            $edit_FullName = $_GET['nedit'];

            $select = "select * from nominee where FullName='$edit_FullName'";
            $run = mysqli_query($conn, $select);

            $row_user = mysqli_fetch_array($run);
            $eFullName = $row_user['FullName'];
            $ePartyName = $row_user['PartyName'];
            $eEmail=$row_user['Email'];
            $eDOB=$row_user['DOB'];
            $eMobileNo=$row_user['MobileNo'];
            $eAadharNo=$row_user['AadharNo'];
            $eImage = $row_user['Image'];
        }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" value="<?php echo $eFullName ?>" name="FullName" required placeholder="Full Name">
            <input type="partyname" value="<?php echo $ePartyName ?>" name="PartyName" required placeholder="Party Name"><br>
            <input type="email" value="<?php echo $eEmail ?>" name="Email" required placeholder="Email">
            <input type="date" value="<?php echo $eDOB ?>" name="DOB" required placeholder="Date Of Birth"><br>
            <input type="tel"  value="<?php echo $eMobileNo ?>" name="MobileNo" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required placeholder="Mobile NO">
            <input type="tel"  value="<?php echo $eAdhaarNo ?> name="AadharNo" pattern="[1-9]{4}[0-9]{4}[0-9]{4}" maxlength="12" required placeholder="Aadhar No"><br>
            <img src="upload/<?php echo $eImage; ?>" alt="Admin" class="rounded-circle" width="150"><br><br>
            <button type="submit" name="submit" >Submit</button>
        </form>
    </div>

    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'voting_system');
    if (isset($_POST['submit'])) {
        $FullName = $_POST['FullName'];
        $PartyName = $_POST['PartyName'];
        $Email=$_POST['Email']
        $DOB=$_POST['DOB'];
        $MobileNo=$_POST['MobileNo'];
        $AadharNo=$_POST['AadharNo'];
        $Image = $_FILES['Image']['name'];
        $tmp_name = $_FILES['Image']['tmp_name'];

        if (empty($Image)) {
            $Image = $eImage;
        }
        $update = "update nominee set FullName='$FullName',PartyName='$PartyName',Email='$Email',DOB='$DOB',MobileNo='$MobileNo',AadhaarNo='$AadhaarNo',Image='$Image' where FullName='$edit_FullName'";

        $run_update = mysqli_query($conn, $update);
        if ($run_update === true) {
            echo "<H5 style='color:green;text-align:center;'>Successfully Updated</h5>";
            move_uploaded_file($tmp_name, "upload/$Image");
        } else {
            echo "<center><H5 style='color:red;text-align:center;'>Not Inseted</h5></center>" . mysqli_error($conn);
        }
    }
    ?>
    <button class="open-button" onclick="back()">Back</button>

    <script>
        function back() {
            window.location = "admintable.php";
        }
    </script>
    <!-- footer - start -->
    <div class="bg-black">
        <footer class="mx-auto max-w-screen-2xl px-4 md:px-8 bg-black">
            <div class="mb-16 grid grid-cols-2 gap-12 border-t pt-10 md:grid-cols-4 lg:grid-cols-6 lg:gap-8 lg:pt-12">
                <div class="col-span-full lg:col-span-2">

                    <!-- logo - start -->
                    <a class="text-yellow-500 inline-flex items-center gap-4 text-2xl font-bold md:text-3xl"
                        aria-label="logo">
                        <img src="./Images/logo.jpg" width="60px" height="50px">Voting Buddy
                    </a>
                    <!-- logo - end -->

                    <br><br>
                    <p class="text-gray-100">Stay Connected</p>
                    <br>
                    <!-- social - start -->
                    <div class="flex gap-5">

                        <a href="https://instagram.com/votingbuddy?igshid=YmMyMTA2M2Y=" target="_blank"
                            class="text-black-400 transition duration-100 active:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor"
                                style="color: #c13584" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>

                        <a href="#" target="_blank" class="text-gray-400 transition duration-100 active:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor"
                                style="color: #1da1f2" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>

                        <a href="#" target="_blank" class="text-gray-400 transition duration-100 active:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor"
                                style="color: #1877f2" viewBox="0 0 24 24">
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                            </svg>
                        </a>

                        <a href="#" target="_blank" class="text-gray-400 transition duration-100 active:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor"
                                style="color: #0077b5" viewBox="0 0 24 24">
                                <path
                                    d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                            </svg>
                        </a>
                    </div>
                    <!-- social - end -->
                </div>

                <!-- nav - start -->
                <div>
                    <div class="mb-4 font-bold uppercase tracking-widest text-gray-100 ">MY ACCOUNT</div>

                    <nav class="flex flex-col gap-4">
                        <div>
                            <a href="#"
                                class="text-gray-100 transition duration-100 hover:text-orange-500 active:text-indigo-600">About
                                Us</a>
                        </div>

                        <div>
                            <a href="#"
                                class="text-gray-100  transition duration-100 hover:text-orange-500 active:text-indigo-600">Login</a>
                        </div>

                        <div>
                            <a href="#"
                                class="text-gray-100 transition duration-100 hover:text-orange-500 active:text-indigo-600">Support</a>
                        </div>
                    </nav>
                </div>
                <!-- nav - end -->

                <!-- nav - start -->
                <div>
                    <div class="mb-4 font-bold uppercase tracking-widest text-gray-100">Legal</div>

                    <nav class="flex flex-col gap-4">
                        <div>
                            <a href="#"
                                class="text-gray-100  transition duration-100 hover:text-orange-500 active:text-indigo-600">Terms
                                of Service</a>
                        </div>

                        <div>
                            <a href="#"
                                class="text-gray-100  transition duration-100 hover:text-orange-500 active:text-indigo-600">Privacy
                                Policy</a>
                        </div>

                        <div>
                            <a href="#"
                                class="text-gray-100 transition duration-100 hover:text-orange-500 active:text-indigo-600">Cookie
                                settings</a>
                        </div>
                    </nav>
                </div>
                <!-- nav - end -->
                <!-- nav - start -->
                <div>
                    <div class="mb-4 font-bold uppercase tracking-widest text-gray-100  font-bold">ABOUT</div>
                    <nav class="flex flex-col gap-4">
                        <div>
                            <a href="#"
                                class="text-gray-100  transition duration-100 hover:text-orange-500 active:text-indigo-600">Team</a>
                        </div>

                        <div>
                            <a href="#"
                                class="text-gray-100  transition duration-100 hover:text-orange-500 active:text-indigo-600">Contact</a>
                        </div>
                    </nav>
                </div>
                <!-- nav - end -->

            </div>
            <div class="border-t py-8 text-center text-sm text-yellow-500">© VotingBuddy. All rights reserved.</div>
        </footer>
    </div>
    <!-- footer - end -->
</body>

</html>