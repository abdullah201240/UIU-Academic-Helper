@extends('layout')
@section('content')


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Add Education</title>
  </head>
  <body>
    <div class="container mt-5">

        <div class="row d-flex justify-content-center">

            <div class="col-md-7">

                <div class="card p-3 py-4">



                    <div class="text-center mt-3">









                        <br>


                        <form action="" method="POST">
                            @csrf
                            <div class="px-4 mt-1">
                                <label for="lname">
                                    <h3>Institution Name</h3>
                                </label>
                                <br>
                                <input style="width:300px;height:50px; border:3px solid #FFA500;" type="text" id="pname" name="pname">

                                <br>
                                <label for="lname">
                                    <h3>Study Program or Subject</h3>
                                </label>
                                <br>
                                <textarea style="width:300px;height:150px; border:3px solid #FFA500;" type="text" id="pd" name="pd"></textarea>
                                <br>


                                <label for="lname">
                                    <h3>Start Date</h3>
                                </label>
                                <br>
                                <input style="width:300px;height:50px;border:3px solid #FFA500;" type="date" id="pl" name="pl">
                                <br>
                                <label for="lname">
                                    <h3>End Date</h3>
                                </label>
                                <br>
                                <input style="width:300px;height:50px;border:3px solid #FFA500;" type="date" id="pl" name="end">
                                <br>



                            </div>
                            <div class="buttons">

                                <button type="submit" name="submit" class="btn btn-outline-primary px-4">ADD</button>

                            </div>
                        </form>






                    </div>




                </div>

            </div>

        </div>

    </div>
    <br>
    <br>

    <br>
    <br>

    <br>
    <br>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
