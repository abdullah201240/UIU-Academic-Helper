
@extends('tlayout')
@section('content')

<!DOCTYPE html>

<html>

<head>


	<title>Table</title>
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

	border: 1px solid lightgray;

	border-collapse: collapse;

	text-align: center;

	cursor: pointer;

}

.table1 td{

	font-size: 18px;

}

.table1 th{

	background-color: #485976;

	color: white;

}
.table1 tr:nth-child(odd){

	background-color: #A2D9CE;
}

.table1 tr:nth-child(odd):hover{

	background-color: #45B39D;

	color: black;

	transform: scale(1.5);

	transition: transform 300ms ease-in;

}

.table1 tr:nth-child(even){

	background-color: #FBFCFC;

}

.table1 tr:nth-child(even):hover{

	background-color: lightgray;

	transform: scale(1.5);

	transition: transform 300ms ease-in;


}
</style>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap');


.table_responsive{
max-width: 100%;
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
.action-btn{
   display: flex;
   justify-content: center;
   gap: 10px;
}
.action-btn1{
   display: flex;
   justify-content: center;
   gap: 10px;
}
.action-btn2{
   display: flex;
   justify-content: center;
   gap: 10px;
}
.action-btn>a{
	text-decoration: none;
	color: #fff;
	background: #d63384;
	border: 1px solid #d63384;
	display:inline-block;
	padding: 7px 20px;
	font-weight: bold;
	border-radius: 3px;
	transition: 0.3s ease-in-out ;


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
.action-btn2>a{
	text-decoration: none;
	color: #fff;
	background: #F44335;
	border: 1px solid #F44335;
	display:inline-block;
	padding: 7px 20px;
	font-weight: bold;
	border-radius: 3px;
	transition: 0.3s ease-in-out ;


}

.action-btn>a:hover{
	box-shadow: 0 3px 8px #0003;

}

.action-btn1>a:hover{
	box-shadow: 0 3px 8px #0003;

}

.action-btn2>a:hover{
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
	<div class="element1">

<table class="table1">
	<thead>
        <tr>
            <th colspan="7"><h1>All Courses</h1></th>
        </tr>
    </thead>

	<tr>

		<th>Course Name</th>

		<th>Course Code</th>

		<th>Section</th>

		<th>Depertment</th>

		<th>Room</th>
		<th>Class Start Time</th>
		<th>Class End Time</th>

	</tr>

	<tr>

		<td>Software Engineering Laboratory</td>

		<td>CSE 4444</td>

		<td>A</td>

		<td>CSE</td>
		<td>404</td>

		<td>08:30</td>
		<td>08:30</td>

	</tr>
	<tr>

		<td>Software Engineering Laboratory</td>

		<td>CSE 4444</td>

		<td>A</td>

		<td>CSE</td>
		<td>404</td>

		<td>08:30</td>
		<td>08:30</td>

	</tr>
	<tr>

		<td>Software Engineering Laboratory</td>

		<td>CSE 4444</td>

		<td>A</td>

		<td>CSE</td>
		<td>404</td>

		<td>08:30</td>
		<td>08:30</td>

	</tr>
	<tr>

		<td>Software Engineering Laboratory</td>

		<td>CSE 4444</td>

		<td>A</td>

		<td>CSE</td>
		<td>404</td>

		<td>08:30</td>
		<td>08:30</td>

	</tr>
	<tr>

		<td>Software Engineering Laboratory</td>

		<td>CSE 4444</td>

		<td>A</td>

		<td>CSE</td>
		<td>404</td>

		<td>08:30</td>
		<td>08:30</td>

	</tr>




</table>
</div>

<!--2nd table-->
<div class="element2">

<div class="table_responsive">

<table class="table">

           <div style="text-align: center;"><h1>All Booked Counselling Hours</h1></div><br>

	<thead class="head">

       <tr>
       	  <th>Date</th>
       	  <th>Day</th>
		  <th>Student Name</th>
		  <th>Student Id</th>
		  <th>Start Time</th>
		  <th>End Time</th>
		  <th>Status</th>
		  <th>Comment</th>
    	  <th>Write Comment</th>
		  <th>Accept</th>
		  <th>Cancel</th>
	   </tr>
    </thead>


    <tbody class="tbody">
    	<tr>
    		<td>2022-12-31</td>
    		<td>Saturday</td>
    		<td>Abdullah Al Sakib</td>
    		<td>011201240</td>
    		<td>21;13</td>
    		<td>21:16</td>
    		<td>pending</td>
    		<td>comment</td>
    		<td>
    			<span class="action-btn">
    				<a href="#">Comment</a>
    			</span>
    		</td>
    		<td>
    			<span class="action-btn1">
    				<a href="#">Accepted</a>
    			</span>
    		</td>
    		<td>

    			<span class="action-btn2">
    				<a href="#">Cancelled</a>
    			</span>
    		</td>

    	</tr>

    	<tr>
    		<td>2022-12-31</td>
    		<td>Saturday</td>
    		<td>Abdullah Al Sakib</td>
    		<td>011201240</td>
    		<td>21;13</td>
    		<td>21:16</td>
    		<td>pending</td>
    		<td>comment</td>
    		<td>
    			<span class="action-btn">
    				<a href="#">Comment</a>
    			</span>
    		</td>
    		<td>
    			<span class="action-btn1">
    				<a href="#">Accepted</a>
    			</span>
    		</td>
    		<td>

    			<span class="action-btn2">
    				<a href="#">Cancelled</a>
    			</span>
    		</td>

    	</tr>
    </tbody>
</table>
</div>

</div>

</body>


</html>
