@extends('tlayout')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add UA List</title>

<style>
*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins',sans-serif;
}
.container{
width: 100%;
height: 100vh;
background: #001a2b;
display: flex;
align-items: center;
justify-content: center;
}

.card{
	background: #fff;
	display: flex;
	align-items: center;
	padding: 50px;
	width: 1000px;
	height: 400px;
	border-radius: 10px;
}
.profile-img{
	width: 250px;
	border-radius: 50%;
	border: 1px solid #f4eeff;
}
.info{
	margin-left: 30px;
	color: #555;
	font-weight: 500;
}
.info h1{
	font-size: 26px;
	font-weight: 500;
	color: #333;
	margin-bottom: 10px;

}
.links{
	display: flex;
align-items: center;
margin: 20px 0;
}
.links a{
	text-decoration: none;
display: inline-flex;
align-items: center;
height: 50px;
background #8749fd;
color: #fff;
border-radius: 5px;
border: 2px solid #8749fd;
padding: 10px 30px;
margin-right: 20px;
font-size: 12px;
}
.links .add-btn{
	background: #1E8449;
	color: #FDFEFE;

}
.links .view-btn{
	background: #610A5C;
	color: #FDFEFE ;

}


</style>

</head>
<body>
    @foreach ($data as $da )
	<div class="container">



		<div class="card">

			<img src="{{asset("images/{$da->image}")}}" alt="{{$da->image}}" class="profile-img">
			<br>
			<br>
			<div class="info">
				<h1>Student Name: {{$da->sname}}</h1>
				<h1>Student Id:  {{$da->sid}}</h1>
				<h1>CGPA:  {{$da->cgpa}}</h1>


                <div class="links">
                	<a href="/showstudentprofile/{{$da->sid}}" class="view-btn">View Profile</a>
                	<a href="/uaadd/{{$da->sid}}/{{$da->sname}}/{{$da->cid}}/{{$da->cname}}/{{$da->section}}/{{$da->tid}}" class="add-btn">Add UA</a>
                </div>


			</div>
		</div>

	</div>
    @endforeach

</body>
</html>
