


@extends('layout')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Teacher Profile</title>
  </head>
  <body>
    <div class="container mt-4">

        <div class="row d-flex justify-content-center">

            <div class="col-md-8">

                <div class="card p-3 py-4">

                    <div class="text-center">
                        @foreach($data as $da)

                    </div>

                    <div class="text-center mt-3">


                        <h5 class="mt-2 mb-0">{{$da->name}}</h5>
                        <span>{{$da->profession}}</span>


                        <div class="px-4 mt-1">

                            <b>
                                <h4>Room No:{{$da->room}}</h4>

                                <p>Email:{{$da->email}}</p>
                                @endforeach
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th>Courses Name</th>
                                            <th>Start time</th>
                                            <th>End time</th>
                                            <th>Section</th>
                                            <th>Room No</th>

                                        </tr>
                                    </thead>


                                    @foreach($data1 as $da1)
                                        <tbody>
                                            <tr>

                                                <td>{{$da1->cname}}</td>
                                                <td>{{$da1->ctimestart}}</td>
                                                <td>{{$da1->ctimeend}}</td>
                                                <td>{{$da1->section}}</td>
                                                <td>{{$da1->Room}}</td>

                                            </tr>


                                        </tbody>
                                        @endforeach
                                </table>

                        </div>
                        <h4>Counselling Day</h4>
                        <div  style="text-align:center">
                        <table class="table table-sm" style="text-align:center">
                        <thead>
                          <th class="bg-primary" style="color:black">Day</th>
                          <th class="bg-success" style="color:black">Start Time</th>
                          <th class="bg-info" style="color:black">End Time</th>
                        </thead>

                        @foreach($data2 as $da2)
                         <tbody>
                          <td   style="color:black"><b>{{$da2->day}}</b></td>
                            <td style="color:black"><b>{{$da2->start}} </b></td>
                            <td style="color:black"><b> {{$da2->end}}</b></td>

                         </tbody>
                         @endforeach
                                </table>
                        </div>
                        <h4>All Booking COUNSELLING</h4>
                        <div  style="text-align:center">
                        <table class="table table-sm  table table-hover" style="text-align:center">
                        <thead>
                        <th class="table-info" style="color:black">Date</th>
                          <th class="bg-primary" style="color:black">Day</th>
                          <th class="bg-success" style="color:black">Start Time</th>
                          <th class="bg-info" style="color:black">End Time</th>
                        </thead>

                        <?php
                        $ti = date("Y-m-d");

                         ?>
                         @foreach($data3 as $da3)


                    <?php
                              if($ti<$da->date){
                                echo "<tbody>

                          <td   style='color:black'><b>$da3->date   </b></td>
                           <td   style='color:black'><b> $da3->day  </b></td>
                             <td style='color:black'><b> $da3->start  </b></td>
                             <td style='color:black'><b>  $da3->end  </b></td>

                          </tbody>";

                         }

?>
                         @endforeach
                                </table>
                        </div>


                        <form action="" method="POST">
                            <label for="birthday"><b>Add Counselling:</b></label>
                            <input type="date" id="birthday" name="birthday">
                            <div class="buttons">

                                <?php
                                echo " <button type='submit' name='submit' class='btn btn-outline-primary px-4'> Booking Counselling</button>" ?>

                            </div>
                        </form>





                    </div>




                </div>

            </div>

        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
