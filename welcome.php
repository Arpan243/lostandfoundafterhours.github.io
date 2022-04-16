<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost And Found</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="lostandfound.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>



<body>
    <div class="main">
        <header>
            <img src="logo.png" class="logo">
            <!-- <button  class="box1"> <a href="google.com">Home</a></button> -->
            <div class="buttontop">
                <button onclick="window.location.href ='https://www.google.com/'" class="box1">SIGN IN</button>
                <!-- <a  class="box1" href="google.com">Home</a> -->
                <button onclick="window.location.href = 'https://www.google.com/'" class="box2">LOG IN</button>

            </div>


        </header>

        <div class="top">
            <div class="greet">
                <span class="college">
                    IIITDM JABALPUR<br>
                </span>
            </div>

            <div class="greet1">
                <span class="lostandfound">
                    Lost And Found
                </span>
            </div>

        </div>

        <div class="enroll">
            <button onclick="window.location.href ='https://www.google.com/'" class="enroll1">Enroll Here</button>
        </div>

    </div>

    <div class="down">
        <div class="buttondown">
            <button onclick="window.location.href ='https://www.google.com/'" class="box3">Lost</button>
            <!-- <a  class="box1" href="google.com">Home</a> -->
            <button onclick="window.location.href = 'https://www.google.com/'" class="box4">Found</button>
    
        </div>
    
        <div class="card">
            <div class="list">
                <!-- <li class="addbox">
                    <div ><img class="addicon" src="plus.png" alt=""></div>
                    <div>Add Item</div>
                </li> -->
                <div class="sample">
                    <div class="content">
                        <h2 class="title">Title</h2>
                        <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia dolorum maxime pariatur quos doloribus ipsum, aliquam alias debitis accusamus? Iusto ex dignissimos cumque amet sequi est quibusdam, eaque inventore sit.</span>
                    </div>
            
                    <div class="popup">
                        <span>april 3, 2022</span>
                        <div class="space"></div>
                        <div class="option">
                            <img src="dot.png" alt="" class="option">
                        </div>
                    </div>
                </div>
                <div class="sample">
                    <div class="content">
                        <h2 class="title">Title</h2>
                        <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia dolorum maxime pariatur quos doloribus ipsum, aliquam alias debitis accusamus? Iusto ex dignissimos cumque amet sequi est quibusdam, eaque inventore sit.</span>
                    </div>
            
                    <div class="popup">
                        <span>april 3, 2022</span>
                        <div class="space"></div>
                        <div class="option">
                            <img src="dot.png" alt="" class="option">
                        </div>
                    </div>
                </div>
                
            </div>
        
            <div class="list1">
                <div class="sample">
                    <div class="content">
                        <h2 class="title">Title</h2>
                        <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia dolorum maxime pariatur quos doloribus ipsum, aliquam alias debitis accusamus? Iusto ex dignissimos cumque amet sequi est quibusdam, eaque inventore sit.</span>
                    </div>
            
                    <div class="popup">
                        <span>april 3, 2022</span>
                        <div class="space"></div>
                        <div class="option">
                            <img src="dot.png" alt="" class="option">
                        </div>
                    </div>
                </div>
                <div class="sample">
                    <div class="content">
                        <h2 class="title">Title</h2>
                        <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia dolorum maxime pariatur quos doloribus ipsum, aliquam alias debitis accusamus? Iusto ex dignissimos cumque amet sequi est quibusdam, eaque inventore sit.</span>
                    </div>
            
                    <div class="popup">
                        <span>april 3, 2022</span>
                        <div class="space"></div>
                        <div class="option">
                            <img src="dot.png" alt="" class="option">
                        </div>
                    </div>
                </div>
                <li class="addbox">
                    <!-- <div ><img class="addicon" src="plus.png" alt=""></div> -->
                    <!-- <div>Add Item</div> -->
                </li>
            </div>
        </div>
    </div>

    
    

    <!-- <div class="back"></div> -->
</body>

</html>