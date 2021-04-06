<!DOCTYPE html>
<html lang="en">

<head>
    <!-- http://localhost/coronago/ -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>

<body>
    <!-- nav_style is a class -->
    <nav class="navbar navbar-expand-lg nav_style p-3">
        <!-- padding 3 -->
        <!-- pl padding left -->
        <a class="navbar-brand pl-5" href="#">COVID-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5">
                <!--padding right 5  -->
                <!-- ml-auto leftside navbar -->
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutid">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sympid">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#preventid">Preventions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactid">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="main_header">
        <div class="row w-100 h-100">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="images/unity.png"  height="300" width="300">
                </div>

            </div>
            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1>Lets Stay Safe and Fight Together Against Cor<span class="corona_rot"><img
                                src="images/coronaviruslogo.png"  height="120" width="120"></span>na Virus</h1>
                </div>
            </div>
        </div>

    </div>
    <!-- corona letest updates -->
    <section class="corona_update">
        <div class="mb-3">
            <h3 class="text-uppercase text-center">covid-19 updates</h3>
        </div>
        <div class="d-flex justify-content-around align-items-center count_style">
            <div>
                <h1 class="count">1524266</h1>
                <p>Passengers Screened at Airport</p>
            </div>
            <div>
                <h1 class="count">512</h1>
                <p>Active Covid-19 Cases</p>
            </div>
            <div>
                <h1 class="count">40</h1>
                <p>Cured/Discharged Cases</p>
            </div>
            <div>
                <h1 class="count">9</h1>
                <p>Death Cases</p>
            </div>

        </div>
    </section>
    <!-- ---------------about section -->
    <div class="container-fluid sub_section pt-5 pb-5 " id="aboutid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>About COVID-19</h1>

        </div>
        <div class="row pt-5">
            <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
                <img src="images/aboutcorona.jpg" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2>What is COVID-19(Corona Virus)</h2><br>
                <p>COVID-19 is a infectious disease caused by the most recently discovered
                    coronavirus. this new disease and virus were unknown before the outbreak
                    began in wuhan , china in December 2019
                </p><br>
                <p>
                    The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected
                    person coughs, sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly
                    fall on floors or surfaces.You can be infected by breathing in the virus if you are within close
                    proximity of someone who has
                    COVID-19, or by touching a contaminated surface and then your eyes, nose or mouth.

                </p>

            </div>

        </div>
    </div>
    <!-- symptoms---------------------------------------------- -->
    <div class="container-fluid  pt-5 pb-5 " id="sympid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>COVID-19 Symptoms</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/cough.jpg" class="img-fluid" width="120" height="120">
                        <figcaption>Cough</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/runny.png" class="img-fluid" width="120" height="120">
                        <figcaption>Runny Nose</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/fever.jfif" class="img-fluid" width="120" height="120">
                        <figcaption>Fever</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/cold.png" class="img-fluid" width="120" height="120">
                        <figcaption>Cold</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/tired.jfif" class="img-fluid" width="120" height="120">
                        <figcaption>Tiredness</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/breath.png" class="img-fluid" width="120" height="120">
                        <figcaption>Difficulty in Breathing</figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div>
            <!-- ---prevention------------------------------------- -->
            <div class="container-fluid  pt-5 pb-5 " id="preventid">
                <div class="section_header text-center mb-5 mt-4">
                    <h1>Steps Prevention Against Coronavirus</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <figure class="text-center">
                                        <img src="images/washhand.png" class="img-fluid" width="90" height="90">
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <p>Wash you hand regularly for 20 seconds with soap or water or with alcohol based
                                        hand rub.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <figure class="text-center">
                                        <img src="images/mask.png" class="img-fluid" width="90" height="90">
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <p>cover your nose and mouth with a disposable tissue or flexed elbow when you cough
                                        or sneeze. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <figure class="text-center">
                                        <img src="images/avoid.png" class="img-fluid" width="120" height="120">
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <p>Avoid close contact (1 meter)with peoples who feel unwell.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <figure class="text-center">
                                        <img src="images/home.png" class="img-fluid" width="120" height="120">
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <p>Stay home and stay isolated from others in the household if you feel unwell .</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <figure class="text-center">
                                        <img src="images/news.png" class="img-fluid" width="120" height="120">
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <p>Stay informed by watching news and follow the recommended practices .</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <figure class="text-center">
                                        <img src="images/sick.png" class="img-fluid" width="90" height="90">
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <p>If you have fever , cough and difficulty in breathing seek a medical care early .
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!----------------------------contact  -->
                    <div class="container-fluid  pt-5 pb-5 sub_section" id="contactid">
                        <div class="section_header text-center mb-5 mt-4">
                            <h1>Contact Us ASAP</h1>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-12">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label>username</label>
                                            <input type="text" class="form-control" name="username" placeholder="name"
                                                autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="name@example.com" autocomplete="off" required>
                                        </div>

                                        <div class="form-group">
                                            <label>mobile</label>
                                            <input type="number" class="form-control" name="mobile" placeholder="mobile"
                                                autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Symptoms</label> <br>
                                            <div
                                                class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                                <input type="checkbox" class="custom-control-input" id="customcheckbox1"
                                                    name="coronasym[]" value="cold">
                                                <label class="custom-control-label" for="customcheckbox1">cold</label>
                                            </div>
                                            <div
                                                class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                                <input type="checkbox" class="custom-control-input" id="customcheckbox2"
                                                    name="coronasym[]" value="fever">
                                                <label class="custom-control-label" for="customcheckbox2">fever</label>
                                            </div>
                                            <div
                                                class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                                <input type="checkbox" class="custom-control-input" id="customcheckbox3"
                                                    name="coronasym[]" value="breath">
                                                <label class="custom-control-label" for="customcheckbox3">difficulty in
                                                    breathing</label>
                                            </div>
                                            <div
                                                class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                                <input type="checkbox" class="custom-control-input" id="customcheckbox4"
                                                    name="coronasym[]" value="tired">
                                                <label class="custom-control-label" for="customcheckbox4">feeling
                                                    week</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Example textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3" name="msg"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ------------------------------------top cursor -->
                    <div class="container scrolltop float-right pr-5">
                        <i class="fa fa-arrow-up" onclick="topfunction()" id="myBtn"></i>

                    </div>
                    <!-- -------------------------------------------------footer------------- -->

                    <footer class="mt-5">
                        <div class="footer_style text-white text-center container-fluid">
                            <p>Copyright by Siddharth Bhagvat</p>
                        </div>

                    </footer>
</body>
<script type="text/javascript">

    $('.count').counterUp({
        delay:10,
        time:5000
    })

    mybutton=document.getElementById("myBtn");
    window.onscroll=function(){scrollFunction()};
    function scrollFunction(){
        if(document.body.scrollTop >100 || document.documentElement.scrollTop > 100){
            mybutton.style.display="block";
        }
        else{
            mybutton.style.display="none";
        }
    }
    function topfunction(){
        document.body.scrollTop=0;
        document.documentElement.scrollTop=0;
    }
</script>
</html>
<?php
include 'dbcon.php';
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $symp=$_POST['coronasym'];
        $msg=$_POST['msg'];


        $chk="";
        foreach($symp as $chk1){
            $chk .=$chk1.",";
        }

        $insertquery=" insert into coronacase(username,email,mobile,symp,message) values('$username','$email','$mobile','$chk','$msg')";

        $query=mysqli_query($con,$insertquery);

        if($query){
            ?>
                <script>
                    alert("inserted successfull");
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert("No inserted");
                </script>
            <?php
        }



    }

?>