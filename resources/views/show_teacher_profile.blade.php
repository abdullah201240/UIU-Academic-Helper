@extends('layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile Page </title>

        <meta name="author" content="Codeconvey" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
        <script type="text/javascript" src="jquery-3.3.1.js"></script>



    </head>

    <body>




        <br>

        <section>
            <div class="rt-container">
                <div class="col-rt-12">
                    <div class="Scriptcontent">

                        <!--  Profile -->
                        @foreach ($data as $da)
                            <div class="student-profile py-4">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card shadow-sm">
                                                <div class="card-header bg-transparent text-center">
                                                    <img class="profile_img" src="{{ asset('images/' . $da->image) }}"
                                                        alt="Teacher dp">

                                                    <h3>{{ $da->name }}</h3>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0"><strong class="pr-1">{{ $da->profession }} Of
                                                            depertment of {{ $da->department }}</strong></p>
                                                    <p class="mb-0"><strong class="pr-1">Email
                                                            ID:</strong>{{ $da->email }}</p>
                                                    <p class="mb-0"><strong class="pr-1">Room
                                                            No:</strong>{{ $da->room }}</p>
                                                    <br>
                                                    <center>





                        <form action="" method="post">
                            @csrf


                            <label for="birthday">
                                <p class="mb-0"><strong class="pr-1">Add Counselling:</strong></p>
                            </label><br>
                            <input type="date" id="birthday" name="birthday"><br><br>
                            <input type="hidden" id="custId" name="custId" value="{{ $da->id }}">

                            <button type="submit" name="submit" class="btn btn-outline-primary">Add Counselling</button>
                        </form>
                        </center>
                    </div>




                    @endforeach


                </div>
            </div>
            <br>
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Class Routine </h3>
                    </div>
                    <div>
                        <center>
                            <table class="table1">




                                <tr>

                                    <th>Course Name</th>

                                    <th>Start Time</th>
                                    <th>End Time</th>

                                    <th>Section</th>

                                    <th>Room Number</th>
                                </tr>
                                @foreach ($data1 as $da1)
                                    <tr>

                                        <td>{{ $da1->cname }}</td>

                                        <td>{{ $da1->ctimestart }}</td>
                                        <td>{{ $da1->ctimeend }}</td>

                                        <td>{{ $da1->section }}</td>


                                        <td>{{ $da1->Room }}</td>



                                    </tr>
                                @endforeach




                            </table>
                        </center>
                        <br>
                    </div>

                </div>
                <div style="height: 26px"></div>
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Counselling Day</h3>
                    </div>
                    <div>
                        <center>
                            <table class="table2">


                                <tr>

                                    <th>Day</th>

                                    <th>Start Time</th>
                                    <th>End Time</th>

                                </tr>
                                @foreach ($data2 as $da2)
                                    <tr>

                                        <td>{{ $da2->day }}</td>

                                        <td>{{ $da2->start }}</td>
                                        <td>{{ $da2->end }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </center>
                        <br>
                    </div>

                </div>


                <div style="height: 26px"></div>
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Counselling Date & Time</h3>
                    </div>
                    <div>
                        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>





                        <center>
                            <table class="table2" id="mytable">


                                <tr>



                                    <th>Day</th>
                                    <th>Date</th>


                                    <th>Start Time</th>
                                    <th>End Time</th>

                                </tr>
                                @foreach ( $data6 as $da6 )
                                <tr>

                                    <td>{{$da6->day }}</td>
                                    <td>{{$data7 }}</td>
                                    <td> {{$da6->start }} </td>
                                    <td> {{$da6->end }}</td>


                                     <td><a href='/addcounselling/{{$da6->tname}}/{{$da6->tid}}/{{$da6->day}}/{{$da6->id }}/{{$data7 }}'><button type="button" class="btn btn-success">Add</button></a></td>

                                </tr>

                                @endforeach




                            </table>
                            <br><br><br>
                            <br><br><br>
                            <br><br><br>
                        </center>
                        <br>
                    </div>
                </div>
                <!-- partial -->

            </div>
            </div>
            </div>
        </section>
        <br>
        <br>
        <br>



        {{-- <script>
            document.getElementById("vedformid").addEventListener("submit", function(e) {
                e.preventDefault();
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "showteacherprofile", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {

                        $("#vedformid")[0].reset();
                        document.getElementById("mark").innerHTML = this.responseText;
                        //$("#mytable").load(location.href + " #mytable");




                    }
                };
                xhr.send("birthday=" + encodeURIComponent(document.getElementsByName("birthday")[0].value) +
                    "&custId=" +
                    encodeURIComponent(document.getElementsByName("custId")[0].value));
            });
        </script> --}}


        <!-- Analytics -->
        <style>
            body {
                background: #67B26F;
                background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);
                background: linear-gradient(to right, #4ca2cd, #67B26F);
                padding: 0;
                margin: 0;
                font-family: 'Lato', sans-serif;
                color: #000;
            }

            .student-profile .card {
                border-radius: 10px;
            }

            .student-profile .card .card-header .profile_img {
                width: 200px;
                height: 200px;
                object-fit: cover;
                margin: 10px auto;
                border: 10px solid #ccc;
                border-radius: 50%;
            }

            .student-profile .card h3 {
                font-size: 20px;
                font-weight: 700;
            }

            .student-profile .card p {
                font-size: 16px;
                color: #000;
            }

            .student-profile .table th,
            .student-profile .table td {
                font-size: 14px;
                padding: 5px 10px;
                color: #000;
            }
        </style>
        <style>
            .table1 {

                width: 90%;


                box-shadow: -1px 12px 12px -6px rgba(0, 0, 0, 0.5);

            }

            .table1 td,
            th {

                padding: 5px;

                border: 1px solid lightgray;

                border-collapse: collapse;

                text-align: center;

                cursor: pointer;

            }

            .table1 td {

                font-size: 18px;

            }

            .table1 th {

                background-color: #485976;

                color: white;

            }

            .table1 tr:nth-child(odd) {

                background-color: #A2D9CE;
            }

            .table1 tr:nth-child(odd):hover {

                background-color: #45B39D;

                color: black;

                transform: scale(1.1);

                transition: transform 300ms ease-in;

            }

            .table1 tr:nth-child(even) {

                background-color: #FBFCFC;

            }

            .table1 tr:nth-child(even):hover {

                background-color: lightgray;

                transform: scale(1.1);

                transition: transform 300ms ease-in;


            }
        </style>
        <style>
            .table2 {

                width: 90%;


                box-shadow: -1px 12px 12px -6px rgba(0, 0, 0, 0.5);

            }

            .table2 td,
            th {

                padding: 5px;

                border: 1px solid lightgray;

                border-collapse: collapse;

                text-align: center;

                cursor: pointer;

            }

            .table2 td {

                font-size: 18px;

            }

            .table2 th {

                background-color: #485976;

                color: white;

            }

            .table2 tr:nth-child(odd) {

                background-color: #A2D9CE;
            }

            .table2 tr:nth-child(odd):hover {

                background-color: #45B39D;

                color: black;

                transform: scale(1.1);

                transition: transform 300ms ease-in;

            }

            .table2 tr:nth-child(even) {

                background-color: #FBFCFC;

            }

            .table2 tr:nth-child(even):hover {

                background-color: lightgray;

                transform: scale(1.1);

                transition: transform 300ms ease-in;


            }
        </style>
    </body>

    </html>
