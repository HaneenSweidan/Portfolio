<?php
include './app.php';

loadHead("About Me");

LoadNavigation();
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="vendor/jquery/jquery.slim.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

        <meta charset="UTF-8">
        <title></title>

    </head>
    <body>
        <br>
        <h2 style="font-family: Perpetua" align="Center">My Portfolio</h2>
        <br><br>
        <h3 style="font-family: Perpetua" align="center">A Little About Me</h3>

        <br> 

        <div class="Container">
            <div class="row">
                <div class="col-lg-4 text-center" style="padding: 10px;  margin: 80px;">
                    <div class="card" style="border:none">
                        <div class="card-body">
                            <p class="card-text"  style="font-family: Perpetua ; font-size: 20px">
                                Organized and a detail-oriented individual with strong oral and written communication skills. Collaborative team 
                                player with outstanding analytical skills, a fast learner and extremely passionate about programming. Fluent in 
                                both, English and Arabic.</p>
                            <p style="font-family: Perpetua; font-size:20px"> 
                                I have graduated last July as a Software Engineer with an Excellent GPA.  
                            </p>
                            <p style="font-family: Perpetua; font-size:20px">
                                After graduation, I worked as technical support advisor for 6 months. 
                                <br>
                                Before that, I trained as a Pyhton and GIS Trainee for 3 months, and earlier as a Business Analyst while accomplishing PHP tasks. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <br><br>
                    <img src="Images/PersonalPhoto.jpg" width="125%">
                </div>
            </div>
        </div>

        <br>

        <div class="row">      
            <div class="col-lg-12 text-center">
                <div class="card" style="border:none">
                    <h4 class="card-title" style="font-family: Perpetua">My Hobbies</h4>
                    <br>
                    <div class="card-body">
                        <p class="card-text" style="font-family: Perpetua ; font-size: 18px">
                            I enjoy going to coffee houses, photography, listening to music and watching Netflix. 
                            <br>
                            Below is some of my humble work.
                    </div>
                </div>
            </div>
        </div>
            <div class="row p-1">
                <div class="col-lg-4" style="text-align:center">
                    <div class="row">
                        <div class="col-5"></div>
                        <img class="col-7"  src="Images/4.jpeg" width="300px" height="300px">
                    </div>
                </div>
                <div class="col-lg-4" style="text-align:center"> <img  src="Images/8.jpg" width="300px" height="500px"></div>
               <div class="col-lg-4" style="text-align:center">
                    <div class="row">
                        <img class="col-7"  src="Images/3.jpeg" width="250px" height="250px">
                    </div>
                </div>
            </div> 
        <br> <br>
        <div class="row">      
            <div class="col-lg text-center" style="padding: 10px;  margin-top: 50px;">
                <div class="card" style="border:none">
                    <h4 class="card-title" style="font-family: Perpetua">My Work</h4>
                    <br>
                    <div class="card-body">
                        <p class="card-text" style="font-family: Perpetua ; font-size: 18px">
                        Since I am fond of coding, I have worked on multiple projects. 
                        Below is some of my recent work. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">      
            <div class="col-lg text-center" style="padding: 10px; ">
                <div class="card" style="border:none">
                    <h5 class="card-title" style="font-family: Perpetua">Quarantine Partner</h5>
                    <div class="card-body">
                        <p class="card-text" style="font-family: Perpetua ; font-size: 18px">
                        My graduation project under the name "Quarantine Partner". This project was 
                        designed to reduce the load and pressure on the Jordanian hospitals during the outbreak of COVID-19.  
                        </p>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
             <div class="col-lg-12" style="text-align: center">
                   <img src="Images/GraduationProject1.jpeg" width="65%">
                   <br>
                   <img src="Images/GraduationProject2.jpeg" width="65%">
                   <br>
                   <img src="Images/GraduationProject3.jpeg" width="65%">
                </div> 
            </div> 
         <div class="row">      
            <div class="col-lg-10 text-center" style="padding: 10px;  margin: 80px;">
                <div class="card" style="border:none">
                    <h5 class="card-title" style="font-family: Perpetua">Software Solutions</h5>
                    <div class="card-body">
                        <p class="card-text" style="font-family: Perpetua ; font-size: 18px">
                        This project was designed as part of my graduation prerequisite.  
                        </p>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
             <div class="col-lg-12" style="text-align: center">
                   <img src="Images/SoftwareSolutions1.jpeg" width="65%">
                    <br>
                   <img src="Images/SoftwareSolutions2.jpeg" width="65%">
                   <br>
                </div>
            </div> 
        <br><br>
        <footer class="bg-light text-center text-lg-start" style="margin-top:80px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h5 class="text-uppercase mb-0">Social Media</h5>
                        <br><br>
                        <a
                            class="btn btn-link btn-floating btn-lg text-dark m-1"
                            href="https://www.facebook.com/haneen.sweidan/"
                            role="button"
                            data-mdb-ripple-color="dark"
                            ><i class="fab fa-facebook-f"></i
                            ></a>
                        <a
                            class="btn btn-link btn-floating btn-lg text-dark m-1"
                            href="https://www.linkedin.com/in/haneensweidan"
                            role="button"
                            data-mdb-ripple-color="dark"
                            ><i class="fab fa-linkedin"></i>
                        </a>
                        <a
                            class="btn btn-link btn-floating btn-lg text-dark m-1"
                            href="https://github.com/HaneenSweidan"
                            role="button"
                            data-mdb-ripple-color="dark"
                            ><i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright:
                <a class="text-dark" href="https://instagram.com/haneenn.sweidan?utm_medium=copy_link">Haneen Sweidan</a>
            </div>
        </footer>
    </body>
</html>
