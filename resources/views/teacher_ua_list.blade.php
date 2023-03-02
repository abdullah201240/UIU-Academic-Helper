@extends('tlayout')
@section('content')
<!DOCTYPE html>

<html>

<head>


	<title>UA TABLE</title>
<style>
	  @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap');

	*{

	margin: 0;

	padding: 0;

	font-family: 'Roboto', sans-serif;

	box-sizing: border-box;

}

body{

	height: 100vh;

	display: grid;

	place-items: center;

	background: white;

	background-size: 100% 100%;

	background-repeat: no-repeat;


}
.element1, .element2 {
    margin: 0;
    padding: 0;
  }

.table1{

	width: 100%;


	box-shadow: -1px 12px 12px -6px rgba(0,0,0,0.5);

}

.table1 td, th{

	padding: 20px;

	border: 1px solid #2C3E50;

	border-collapse: collapse;

	text-align: center;

	cursor: pointer;

}

.table1 td{

	font-size: 18px;

}

.table1 th{

	background-color: #2C3E50;

	color: white;

}
.table1 tr:nth-child(odd){

	background-color: #A2D9CE;
}

.table1 tr:nth-child(odd):hover{

	background-color: #45B39D;

	color: black;

	transform: scale(1.1);


	transition: transform 300ms ease-in;

}

.table1 tr:nth-child(even){

	background-color: #FBFCFC;

}

.table1 tr:nth-child(even):hover{

	background-color: lightgray;

	transform: scale(1.1);

	transition: transform 300ms ease-in;


}

	.button {
  background-color: #f44336;
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button{
	background-color: #f44336;
}

</style>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap');


.table_responsive{
width: 1000px;
border: 1px solid #00bcd4;
background-color: #efefef33;
padding: 15px;
overflow: auto;
margin: auto;
border-radius: 4px;
}
.table{
	width: 100%;
	height: 60px;
	font-size: 13px;
	color: #444;
	white-space: nowrap;
	border-collapse: collapse;
}
.table>.head{
	background-color: #00bcd4;
	color: #fff;
}
.table>.head th{
	padding: 15px;
}

.table th,
.table td{
	border: 1px solid #00000017;
	padding: 10px 15px;
}

.action-btn1{
   display: flex;
   justify-content: center;
   gap: 10px;
}

.action-btn1>a{
	text-decoration: none;
	color: #fff;
	background: #4CAF50;
	border: 1px solid #4CAF50;
	display:inline-block;
	padding: 7px 20px;
	font-weight: bold;
	border-radius: 3px;
	transition: 0.3s ease-in-out ;


}



.action-btn1>a:hover{
	box-shadow: 0 3px 8px #0003;

}


body>.tbody>tr{
	background-color: #fff;
	transition: 0.3s ease-in-out;
}
body>.tbody>tr:nth-child(even){
	background-color: rgb(238,238,238);
}
body>.tbody>tr:hover{
	filter: drop-shadow(0px 2px 6px #0002);
}
</style>





</head>

<body>


<!--2nd table-->
<div class="element2">

<div class="table_responsive">

<table class="table">

           <div style="text-align: center;"><h1>Information About Courses</h1></div><br>

	<thead class="head">

       <tr>

		  <th>Teacher Name</th>
		  <th>Course Name</th>
		  <th>Section</th>
		  <th>Start Time</th>
		  <th>End Time</th>
    	  <th>Action</th>

	   </tr>
    </thead>
@foreach ($data as $da )



    <tbody class="tbody">
    	<tr>
    		<td>{{ $da->cid}}</td>
    		<td>{{ $da->cname}}</td>
    		<td>{{ $da->section}}</td>
    		<td>{{ $da->ctimestart}}</td>
    		<td>{{ $da->ctimeend}}</td>

    		<td>
    			<span class="action-btn1">
    				<a href="teacherua/{{$da->section}}/{{$da->cid}}">View</a>
    			</span>
    		</td>


    	</tr>


    </tbody>
    @endforeach
</table>
</div>

</div>

<!--table-->
<div class="element1">

<table class="table1">
	<thead>
        <tr>
            <th colspan="7"><h1>All Undergraduate Assistant List</h1></th>
        </tr>
    </thead>

	<tr>
		<th>Student Name</th>
		<th>Student Id</th>

		<th>Course Name</th>

		<th>Course Code</th>

		<th>Section</th>

		<th>Satus</th>

		<th>Action</th>


	</tr>

    @foreach ($data100 as $da1 )


	<tr>
		<td>{{$da1->sname}}</td>
		<td>{{$da1->sid}}</td>

		<td>{{$da1->cname}}</td>

		<td>{{$da1->cid}}</td>

		<td>{{$da1->section}}</td>

		<td>{{$da1->status}}</td>
        <td><a href="/deleteua/{{$da1->id}}"><button class="button button">Delete</button></a></td>





	</tr>



    @endforeach







</table>
</div>
<br>
<br>
<br>
<div style="color: green">
    <a href="publicua"><button type="button" >Public</button></a>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<button>fhrtj</button>
<br>
</body>






</html>
