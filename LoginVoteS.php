<?php 
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='LoginSuccess.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<style>

</style>

<body>
 
    <div class="bg-white pb-6 sm:pb-8 lg:pb-12">
        <header class="mb-8 border-b">
            <div class="mx-auto flex max-w-screen-2xl items-center justify-between px-4 md:px-8">

                
                <a class="text-green-400 inline-flex items-center gap-2.5 text-2xl font-bold md:text-3xl"
                    aria-label="logo">
                    <svg width="95" height="94" viewBox="0 0 95 94" class="h-auto w-6 text-black-500"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"></svg>
                    <img src="./Images/logo.jpg" width="60px" height="50px">VotingBuddy
                </a>
            

                <nav class="hidden gap-12 lg:flex 2xl:ml-16">
                    <a href="index.html"
                        class="text-lg font-semibold text-black-600 transition duration-100 hover:text-orange-500 active:text-black-700">Home</a>
                    <a href="about.html"
                        class="text-lg font-semibold text-black-600 transition duration-100 hover:text-orange-500 active:text-black-700">About
                        Us</a>
                    <a href="#view"
                        class="text-lg font-semibold text-black-600 transition duration-100 hover:text-orange-500 active:text-black-700">View</a>
                    <a href="#help"
                        class="text-lg font-semibold text-black-600 transition duration-100 hover:text-orange-500 active:text-black-700">Help</a>
                </nav>
                
                <div class="flex divide-x border-r sm:border-l">
                    <a href="LoginVoteS.php"
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

                    <button type="button"
                        class="flex h-12 w-12 flex-col items-center justify-center gap-1.5 transition duration-100 hover:bg-green-100 active:bg-gray-200 sm:h-20 sm:w-20 md:h-24 md:w-24 lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-menu-button" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A1.5 1.5 0 0 1 1.5 0h8A1.5 1.5 0 0 1 11 1.5v2A1.5 1.5 0 0 1 9.5 5h-8A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-8z" />
                            <path
                                d="m7.823 2.823-.396-.396A.25.25 0 0 1 7.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <span class="hidden text-xs font-semibold text-black-500 sm:block">Menu</span>
                    </button>
                </div>
            </div>
        </header>

        
    <center>
        <?php 
        include("Loginnav.php");
        $select = "select * from register where Email='$user'";
        $run = mysqli_query($conn, $select);
        $row_user = mysqli_fetch_array($run);
        $FullName = isset($row_user['FullName'])?$row_user['FullName']:"";
        $Voted = isset($row_user['Voted'])?$row_user['Voted']:"";
    
        if ($Voted == 'NO') {
        ?>

            <div style="margin-left: 250px;">
                <br><br>
                <h2 style="background-color: red;">Please confirm Your Vote </h2>

                
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'voting_system');
                if (isset($_GET['Party'])) {
                    $PartyVote = $_GET['Party'];

                    $select = "select * from nominee where PartyName='$PartyVote'";
                    $run = mysqli_query($conn, $select);

                    $row_user = mysqli_fetch_array($run);
                    $eFullName = $row_user['FullName'];
                    $eVotes = $row_user['Votes'];
                    $eImage = $row_user['Image'];
                }
                ?>

                <form action="" method="POST"><br>
                    <h5 style="text-transform: capitalize;">You Voted : <?php echo $PartyVote; ?></h5><br>
                    <img src="upload/<?php echo $eImage; ?>" style="width: 400px;height: 400px; border-radius: 30%;">
                    <input type="hidden" name="Votes" value="<?php echo $eVotes; ?>" required placeholder="Enter Party Name"><br>
                    <input class="btn btn-primary" type="submit" name="submit">
                    <a href="LoginSuccess.php" class="btn btn-warning">cancel</a>
                </form>

                
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'voting_system');
                if (isset($_POST['submit'])) {
                    $Votes = $_POST['Votes'];

                    $eVotes = $eVotes + 1;
                    $update = "update nominee set Votes='$eVotes' where PartyName='$PartyVote'";

                    $run_update = mysqli_query($conn, $update);
                    if ($run_update === true) {
                        echo "<script> window.open('LoginVoteSuccess.php','_self') </script>";
                        // echo "<H5 style='color:green;text-align:center;'>Voted Successfully</h5>";
                    } else {
                        echo "<center><H5 style='color:red;text-align:center;'>Samething Went Wrong</h5></center>" . mysqli_error($conn);
                    }

                    $conn = mysqli_connect('localhost', 'root', '', 'voting_system');
                    $Rupdate = "update register set Voted='YES' where FullName='$FullName'";

                    $Rrun_update = mysqli_query($conn, $Rupdate);
                    if ($Rrun_update === true) {
                        // echo "<script> window.open('LoginVoteSuccess.php','_self') </script>";
                        echo "<H5 style='color:green;text-align:center;'>Voted YES</h5>";
                    } else {
                        echo "<center><H5 style='color:red;text-align:center;'>Samething Went Wrong NNOo</h5></center>" . mysqli_error($conn);
                    }
                }

                ?>
            </div>
        <?php
        } else {
            echo "<br><br>";
            echo "<center style='margin-left: 270px;color:red;'><h3>You Already Voted.</h3></center>";
            echo "<br><br>";
            echo '<a href="Logout.php" style="margin-left: 270px;" class="btn btn-primary"><i class="fas fa-sign-out-alt"></i> LogOut</a>';
        }
        ?>
    
    </center>
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