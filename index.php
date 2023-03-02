<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="./images/ICT-log.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <style>
        <?php include "./css/style.css"; ?>
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <header class="header_container">
        <img class="mulogo_header" src="./images/MU_Logo.png" alt="MU logo">
        <img class="ictlogo_header" src="./images/ICT_logo_text.png" alt="MU logo">
    </header>
    <div class="menu_mobile"><button class="menu_icon"><i class="fas fa-bars"></i></button></div>

    <div class="main_container">
        <div>
            <div class="container">
                <h1 class="title">Faculty Accreditation</h1>
            </div>
            <div class="lab_container">
                <a href="./research_paper/rp_output.php">
                    <div class="labitem">
                        <div class="lanimg">
                            <img src="" alt="Research paper">
                        </div>
                        <h2>Research Paper</h2>
                        <p>All the details about research paper.</p>
                    </div>
                </a>
                <a href="./fulladder_quiz.php">
                    <div class="labitem">
                        <div class="lanimg">
                            <img src="" alt="Training">
                        </div>
                        <h2>Training</h2>
                        <p>All the details about training.</p>
                    </div>
                </a>
                <a href="./halfsubtractor.php">
                    <div class="labitem">
                        <div class="lanimg">
                            <img src="" alt="Certification">
                        </div>
                        <h2>Certifications</h2>
                        <p>All the details about certifications.</p>
                    </div>
                </a>
                <!-- <a href="./fullsubtractor.php">
                    <div class="labitem">
                        <div class="lanimg">
                            <img src="" alt="">
                        </div>
                        <h2>Full Subtractor</h2>
                        <p>Full Subtractor Simulator</p>
                    </div>
                </a>
                <a href="./1bitcomparator.php">
                    <div class="labitem">
                        <div class="lanimg">
                            <img src="" alt="">
                        </div>
                        <h2>1 Bit Comparator</h2>
                        <p>1 Bit Comparator Simulator</p>
                    </div>
                </a> -->
            </div>
        </div>
    </div>
    
</body>

</html>