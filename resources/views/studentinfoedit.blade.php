
@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>

        Student Information





    </title>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS Files -->









</head>


<body class="g-sidenav-show  bg-gray-100">









        <div class="container mt-5">

            <div class="row d-flex justify-content-center">

                <div class="col-md-7">

                    <div class="card p-3 py-4">

                        <div class="text-center">
                            @foreach ($data as $da)
                            <img src="{{asset('images/'.$da->image)}}" width="100" class="rounded-circle">
                        </div>

                        <div class="text-center mt-3">

                            <h2 class="mt-2 mb-0">{{$da->name}}</h2>
                            <form action="" method="post" enctype="multipart/form-data">

                                <input type="file" name="file">
                                <br>

                                <input type="submit" name="submit" value="Upload">

                            </form>
                            <span>{{$da->id}}</span>
                            <form autocomplete="off" action="" method="post">
                                <div class="px-4 mt-1">
                                    <label for="lname">
                                        <h3>CGPA</h3>
                                    </label>
                                    <br>
                                    <input style="width:300px;height:50px; border:3px solid #FFA500;" type="text"
                                        id="cgpa" name="cgpa" value="{{$da->cgpa}}">
                                    <br>
                                    <label for="lname">
                                        <h3>Phone Number</h3>
                                    </label>
                                    <br>
                                    <input style="width:300px;height:50px; border:3px solid #FFA500;" type="text"
                                        id="phone" name="phone" value="{{$da->number}}">

                                    <br>

                                    <label for="lname">
                                        <h3>Address</h3>
                                    </label>
                                    <br>
                                    <input style="width:300px;height:50px; border:3px solid #FFA500;" type="text"
                                        id="phone" name="address" value="{{$da->address}}">

                                    <br>

                                    <label for="lname">
                                        <h3>Intro</h3>
                                    </label>
                                    <br>
                                    <input style="width:300px;height:50px; border:3px solid #FFA500;" type="text"
                                        id="phone" name="intro" value="{{$da->intro}}">

                                    <br>
                                    <label for="lname">
                                        <h3>About</h3>
                                    </label>
                                    <br>
                                    <textarea style="width:300px;height:200px; border:3px solid #FFA500;" type="text" id="phone" name="about"
                                        value="{{$da->about}}">{{$da->about}} </textarea>

                                    <br>

                                    <label for="lname">
                                        <h3>Website</h3>
                                    </label>
                                    <br>
                                    <input style="width:300px;height:50px; border:3px solid #FFA500;" type="text"
                                        id="website" name="website" value="{{$da->website}}">
                                    <br>


                                    <label for="lname">
                                        <h3>Github</h3>
                                    </label>
                                    <br>
                                    <input style="width:300px;height:50px;border:3px solid #FFA500;" type="text"
                                        id="github" name="github" value="{{$da->github}}">
                                    <br>
                                    <label for="lname">
                                        <h3>LinkedIn</h3>
                                    </label>
                                    <br>
                                    <input style="width:300px;height:50px;border:3px solid #FFA500;" type="text"
                                        id="linkedin" name="linkedin" value="{{$da->linkedin}}">
                                    <br>



                                </div>
                                <div class="buttons">

                                    <button type="submit" name="submit"
                                        class="btn btn-outline-primary px-4">Save</button>

                                </div>
                                @endforeach
                            </form>

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



</body>

</html>
