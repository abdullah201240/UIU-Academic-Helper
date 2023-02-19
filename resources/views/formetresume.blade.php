

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Student</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nevbar.css">
    <link rel="stylesheet" href="cv.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .box{
position:relative;
overflow:hidden;



}
.box:before{
  content: "";
  position: absolute;
  background:linear-gradient(to right,#87CEEB,#87CEEB);
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  opacity : 0;
  transition: all 0.4s linear;

}
.box:hover:before{
  opacity: 1;
}
.box .box-content{

  color: #fff;
  width: 100%;
  transform: translateY(-50%)scale(0);
  top: 50%;
  left: 0;
  transition: all 0.4s linear;
  text-align:center ;

}
.box:hover .box-content{
  transform: translateY(-50%)scale(1);
}

        .container {
            text-align: center;



        }

        #btn {
            font-size: 25px;
        }
    </style>
    <style>
        .oval {
            height: 50px;
            width: 150px;
            /* background-color: #f98113; */
            border: solid 4px #f98113;
            border-radius: 50%;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">

                <ul class="navbar-nav mr-auto">


                    <li class="nav-item "><a href="home" class="nav-link">Home</a></li>


                    <li class="nav-item"><a href="counsilling" class="nav-link">Counselling</a></li>

                    <li class="nav-item"><a href="slogout" class="nav-link">Logout</a></li>

                    <li class="nav-item">
                    <a href="print" class="nav-link">
                        print
                    </a></li>

                </ul>
            </div>
        </div>
    </nav>
    <br>



    @foreach ($data20 as $da)
    <div class="row" style=" border-bottom: 2px solid black;">
        <div class="col-6 col-md-4" style="padding-left:50px;">
            <h2>{{ $da->name }}</h2>
            <h5 style="color:cadetblue"> {{ $da->intro }}</h5>
            <p>{{ $da->about }}</p>

        </div>
        <div class="col-6 col-md-4" style=" text-align:center;">
            <img src="{{asset('images/'.$da->image)}}" alt="{{ $da->name }}" class="rounded-circle " width="150" style="border: 5px solid #03c2fc;">


        </div>
        <div class="col-6 col-md-4" style="padding-right:50px; text-align:right; ">
            <p style="color:black"> <a style="color:black" href="mailto:{{ $da->email }}"> {{ $da->email }} <i class="fa fa-envelope"></i> </a></p>
            <p style="text-align:right;"> <a style="color:black" href="tel:{{ $da->number }}"> {{ $da->number }} <i class="fa fa-phone"></i></p>
            <p style="text-align:right;"> <a style="color:black" href="https://www.google.com/maps/place/{{ $da->address }}"> {{ $da->address }} <i class="fa fa-address-book"></i></p>
            <p style="text-align:right;"> <a style="color:black" href="{{ $da->github }}"> Github <i class="fa fa-github"></i></a></p>
            <p style="text-align:right;"> <a style="color:black" href="{{ $da->linkedin }}"> Linkedin <i class="fa fa-linkedin"></i></a></p>

            <p style="text-align:right;"> <a style="color:black" href="{{ $da->website }}"> Website <i class="fa fa-external-link"></i></a></p>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-sm-6 col-md-5 col-lg-6" style="padding-left:50px; ">

            <h1>Education</h1>
            @foreach ($data21 as $da21)


                <?php
                if ($da21->hide == 0) {
                    echo"<div class='box'>";
                    echo "<h2>$da21->name</h2>";
                    //echo"<br>";
                    echo $da21->subject. "<br>";
                    echo $da21->start. "-";
                    if ($da21->end == "") {
                        echo "Present";
                    } else {
                        echo $da21->end;
                    }
                    echo "<div class='box-content'><h3> Hide This </h3><h3 class='title'><a href='hideeducation/$da21->id'><li class='fa fa-eye-slash'></li></a></h3> </div> ";
                echo"</div>";
                }




                   ?>
                   @endforeach



            <h1>Projects</h1>
 @foreach ($data22 as $da22)
            <?php

                if ($da22->hide == 0) {
                    echo"<div class='box'>";

                    echo "<h2>$da22->project_name</h2>";
                    //echo"<br>";
                    echo$da22->project_dis  . "<br>";
                    echo " <a href='$da22->project_link'>Show Project </a>";

                    echo "<br> <b>Associate : </b>";
                    foreach ($data23 as $da23){


                        echo " <a href='showstudentprofile/$da23->partnerID'>$da23->partnerName</a>" . " ";

                    }



                    echo "<div class='box-content'>
                <h3> Hide This </h3>


                       <h3 class='title'><a href='hideproject/$da22->project_id'><li class='fa fa-eye-slash'></li></a></h3>



                   </div> </div>";
                }




                   ?>
@endforeach


        </div>
        <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
            <h1>Experience</h1>
            @foreach ($data26 as $da26)
            <?php

                if ($da26->hide == 0) {
                    echo"<div class='box'>";
                    echo " <b style='text-align:center;'>$da26->companyname ($da26->start - $da26->end)</b> <br>";
                    echo $da26->title;
                    echo "<div class='box-content'>
                <h3> Hide This </h3>


                       <h3 class='title'><a href='hideexprience/$da26->id'><li class='fa fa-eye-slash'></li></a></h3>



                   </div> </div>";
                }





                   ?>
                   @endforeach




































            <h1> Ceertificate</h1>

            @foreach ($data27 as $da27)
                <?php


                    if ($da27->hide == 0) {
                        echo"<div class='box'>";
                        echo "<b style='text-align:center;'>$da27->name </b> <br>";
                        echo $da27->dis;
                        echo "<br> <a href='$da27->link'>Show credential</a>";
                        echo "<div class='box-content'>
                        <h3> Hide This </h3>
                        <br>

                               <h3 class='title'><a href='hidecertificated/$da27->id'><li class='fa fa-eye-slash'></li></a></h3>



                           </div>";
                    }






                ?>

@endforeach
            </div>
        </div>
    </div>


</body>

</html>
