@extends('layout')
@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Student Profile</title>
    </head>

    <body>
        <div class="container" style="text-align:left">
            <div class="main-body">

                <!-- Breadcrumb -->

                <!-- /Breadcrumb -->
                @foreach ($data20 as $da)
                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="images/{{ $da->image }}" alt="" class="rounded-circle"
                                            width="150">
                                        <div class="mt-3">
                                            <h4>{{ $da->name }}</h4>
                                            <p class="text-secondary mb-1">Student ID: {{ $da->id }}</p>
                                            <p class="text-muted font-size-sm">Dath of Both:{{ $da->dob }}</p>
                                            <p class="text-muted font-size-sm">Email:{{ $da->email }}</p>
                                            <p class="text-muted font-size-sm">Phone Number:{{ $da->number }}</p>
                                            <p class="text-muted font-size-sm">Address: {{ $da->address }}</p>
                                            <p class="text-muted font-size-sm">Cgpa:{{ $da->cgpa }}</p>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php

                            ?>
                            <div class="card mt-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h4 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-globe mr-2 icon-inline">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                                <path
                                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                </path>
                                            </svg><a href="{{ $da->website }}">Website</a></h4>
                                        <span class="text-secondary"> </a></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h4 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-github mr-2 icon-inline">
                                                <path
                                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                </path>
                                            </svg> <a href="{{ $da->github }}">Github</a></h4>
                                        <span class="text-secondary"></span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h4 class="mb-0" style="color:black">
                                            <i class="fa fa-linkedin" aria-hidden="true" style="padding-right:20px"></i><a
                                                href="{{ $da->linkedin }}"> LinkedIn</a>
                                        </h4>
                                        <span class="text-secondary">

                                        </span>
                                    </li>
                                    <li>
                                        <br>
                                        <div style="text-align: center;">
                                            <a href="studentinfoedit.php"><button type="button"
                                                    class="btn btn-primary">Edit</button></a>
                                            <?php echo " <a href=''><button type='button' class='btn btn-success'>Formet Resume</button></a>"; ?>
                                        </div>

                                    </li>




                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">

                                        <h3>{{ $da->name }}</h3>


                                        <div class="col-sm-9 text-secondary">
                                            <h4 style="color:cadetblue"> {{ $da->intro }}</h4>

                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-sm-9 text-secondary">
                                            <h6>{{ $da->about }}</h6>
                                        </div>
                                    </div>
                                    <hr>

                                    <hr>




                                </div>
                            </div>
                @endforeach
                <h1 style="text-align: center"> Education <a href="addeducation.php"><i style="height:40px;width:40px"
                            class="fa fa-plus"></i></a> </h1>
                <div>
                    @foreach ($data21 as $da21)
                        <div class="card mb-3">


                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Institution Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $da21->name }}


                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Study Program</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $da21->subject }}

                                    </div>
                                </div>
                                <hr>

                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $da21->start }}
                                        <?php
                                        echo '-';
                                        if ($da21->end == '') {
                                            echo 'Present';
                                        } else {
                                            echo $da21->end;
                                        }

                                        ?>

                                    </div>

                                </div>



                            </div>
                            <div style="text-align:center">

                                <a href=''><button type='button' class='btn btn-danger'>Delete</button></a>

                            </div>
                            <p>----------------------------------------------------------------------------
                            </p>
                    @endforeach


                    <br>


                    <h1 style="text-align: center"> All Projects <a href="addproject.php"><i
                                style="height:40px;width:40px" class="fa fa-plus"></i></a> </h1>


                    <div>
                        @foreach ($data22 as $da22)
                            <div class="card mb-3">


                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Project Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $da22->project_name }}


                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Project Discription</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $da22->project_dis }}

                                        </div>
                                    </div>
                                    <hr>

                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Project Link</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">

                                            <a href=" {{ $da22->project_link }}"> {{ $da22->project_link }}</a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Project Partner</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            @foreach ($data23 as $da23)
                                                {{ $da23->partnerName . ', ' }}
                                            @endforeach




                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Faculty Name</h6>
                                        </div>


                                        <div class="col-sm-9 text-secondary">
                                            @foreach ($data24 as $da24)
                                                <?php

                                                echo "\n";
                                                echo $da24->name . ', ';
                                                echo '      ';

                                                ?>
                                            @endforeach


                                        </div>
                                    </div>


                                    <br>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Project Image</h6>
                                        </div>


                                        <div class="col-sm-9 text-secondary">
                                            @foreach ($data25 as $da25)
                                                <a href='images/{{ $da25->image }}'> <img
                                                        src="images/{{ $da25->image }}" width="130"></a>
                                            @endforeach

                                        </div>
                                    </div>

                                    <hr>
                                    <div style="text-align: center">
                                        <a href=''><button type='button'
                                                class='btn btn-primary'>Edit</button></a>

                                        <a href=''><button type='button'
                                                class='btn btn-danger'>Delete</button></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach




























                    </div>







                    <br>
                    <h1 style="text-align: center">Experience <a href="addexperience.php"><i
                                style="height:40px;width:40px" class="fa fa-plus"></i></a> </h1>
                    <br>
                    <div>
                        @foreach ($data26 as $da26)


                            <div class="card mb-3">


                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Title</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $da26->title}}



                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Company Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $da26->companyname}}

                                        </div>
                                    </div>
                                    <hr>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"> Discription</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $da26->description}}

                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"> Warking Date</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            if ($da26->end == '') {
                                            } elseif ($da26->end == 'Present') {
                                                echo $da26->start . '  ' . 'To ' . $da26->end;
                                                $dateOfBirth = $da26->start;

                                                $today = date('Y-m-d');
                                                $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                                if ($diff->format('%y') == 0 && $diff->format('%m') == 0) {
                                                    echo '( ' . $diff->format('%d') . ' Days)';
                                                }
                                                if ($diff->format('%y') == 0 && $diff->format('%m') != 0) {
                                                    echo '( ' . $diff->format('%m') . ' Months)';
                                                }

                                                //echo '(Year : ' . $diff->format('%y').'Month: '.$diff->format('%m').'Day '.$diff->format('%d').')';
                                            } else {
                                                echo $da26->start . '  ' . 'To ' . $da26->end . '';
                                                $dateOfBirth = $da26->start;

                                                $today = $da26->end;
                                                $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                                if ($diff->format('%y') == 0 && $diff->format('%m') == 0) {
                                                    echo '( ' . $diff->format('%d') . ' Days)';
                                                }
                                                if ($diff->format('%y') == 0 && $diff->format('%m') != 0) {
                                                    echo '( ' . $diff->format('%m') . ' Months)';
                                                }
                                            }

                                            ?>

                                        </div>
                                    </div>



                                    <hr>
                                    <div style="text-align:center">
                                        <a href='studentediteexp.php?id=$idw'><button type='button' class='btn btn-primary'>Edit</button></a>
                                       <a href='studentdeleteexp.php?id=$idw'><button type='button' class='btn btn-danger'>Delete</button></a>

                                    </div>
                                </div>
                            </div>






                    </div>
                </div>

            </div>
            @endforeach


            <h1 style="text-align: center"> ACHIEVEMENTS<a href="addachievements.php"><i style="height:40px;width:40px"
                        class="fa fa-plus"></i></a> </h1>
            <div>
                @foreach ($data27 as $da27)

                <div class="card mb-3">


                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0"> Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $da27->name}}


                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Discription</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $da27->dis}}

                            </div>
                        </div>
                        <hr>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Link</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <a href="  {{ $da27->link}}">Show credential </a>



                            </div>

                        </div>



                    </div>
                    <div style="text-align:center">

                        <a href=''><button type='button' class='btn btn-danger'>Delete</button></a>"

                    </div>
                    <p>----------------------------------------------------------------------------
                    </p>
                    @endforeach


                    <br>
                </div>
            </div>
        </div>
        </div>
            </div>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
    </body>

    </html>
