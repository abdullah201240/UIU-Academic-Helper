@extends('layout')
@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Project Information</title>
</head>
<body>

    <div class="container">
        <form id="form" action="" method="post" enctype="multipart/form-data">
            @csrf
            <h1>Project Proposal Form</h1>
            <div class="input-control">
                <label for="pt">Project Title: </label>
                <input type="text" id="pt" name="pt" placeholder="Enter project title" type="text" required>
                <div class="error"></div>
            </div>

            <div class="input-control">
                <label for="tn">Team Name: </label>
                <input type="text" id="tn" name="tn" placeholder="Enter Team Name" type="text" required>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="tri">Trimester: </label>
                <select name="tri" id="Trimester" class="InputBox">
                    <option value disabled selected></option>
                    <option>Spring 2023

                    </option>
                    <option>Summer 2023</option>
                    <option>Fall 2023</option>

                </select>


                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="cn">Course Name: </label>
                <select name="cn" id="course-list" class="InputBox">
                    <option value disabled selected></option>
                    <option value='Advanced Object Oriented Programming Lab'>Advanced Object Oriented Programming Lab</option>
                    <option value='Electronics Laboratory'>Electronics Laboratory</option>
                    <option value='Database Management Systems Laboratory'>Database Management Systems Laboratory</option>
                    <option value='System Analysis and Design Laboratory'>System Analysis and Design Laboratory</option>
                    <option value='Software Engineering Laboratory'>Software Engineering Laboratory</option>
                    <option value='Microprocessors and Microcontrollers Laboratory'>Microprocessors and Microcontrollers Laboratory</option>




                </select>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="cn">Course ID: </label>

                <select name="ci" id="course id" class="InputBox">
                    <option value disabled selected></option>
                    <option value='CSE 2118'>CSE 2118</option>
                    <option value='EEE 2124'>EEE 2124</option>
                    <option value='CSE 3522'>CSE 3522</option>
                    <option value='CSE 3412'>CSE 3412</option>
                    <option value='CSE 3422'>CSE 3422</option>
                    <option value='CSE 4326'>CSE 4326</option>
                </select>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="sec">Section: </label>
                <select name="sec" id="section-list" class="InputBox">
                     <option value disabled selected></option>
                     <option value='A'>A</option>
                     <option value='B'>B</option>
                     <option value='C'>C</option>
                </select>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="faculty">Faculty: </label>
                <select name="faculty" id="section-list" class="InputBox">
                     <option value disabled selected></option>
                     @foreach($data as $da)
                     <option value="{{$da->id}}">{{$da->name}}</option>

                     @endforeach


                </select>
                <div class="error"></div>
            </div>



            <div class="input-control">
                <label for="de">Details: </label>
                <textarea type="text" id="de" name="de"  type="text" style="height: 80px"></textarea>

                <div class="error"></div>
            </div>
            <div>
             <button type="submit">Submit</button>
             </div>
        </form>







<br>
<br>







<div class="table_responsive">

<table class="table">

           <div style="text-align: center;"><h1>My Projects</h1></div><br>

  <thead class="head">

       <tr>
          <th>Project Name</th>
          <th>Team Name</th>
      <th>Trimester</th>
      <th>Course Id</th>
      <th>Course Name</th>

      <th>Details</th>
      <th>Accept</th>
      <th>Cancel</th>
     </tr>
    </thead>


    <tbody class="tbody">
        @foreach($data2 as $da2)

      <tr>
        <td>{{$da2->project_name}}</td>
        <td>{{$da2->tn}}</td>
        <td>{{$da2->tri}}</td>
        <td>{{$da2->cid}}</td>
        <td>{{$da2->cname}}</td>
         <td>{{$da2->project_dis}}</td>


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
      @endforeach

    </tbody>
</table>
</div>
</div>











            </div>


       </main>






<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>








</body>


</html>












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
  height: 100%;
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

<style>

  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body{
         background: white;
         font-family: 'Poppins', sans-serif;
         display: flex;
          height: 100%;
          justify-content: center;
          align-items: center;
          padding: 10px;
         }
         #container{
            max-width: 700px;
            width: 100%;
            padding: 25px 30px;
            background-color: #00000017;
            border-radius: 5px;
            margin: 20px;

         }



        #form{
            width: 600px;

           margin: 5vh auto 0 auto;
           padding: 50px;
           background-color: #808080;
          border-radius: 5px;
          font-size: 12px;

        }
        #form h1{
            color: #0f2027;
            text-align: center;
        }
        #form button {
          padding: 10px;
          margin-top: 10px;
          color: black;
          background-color: #9999ff;
          display: flex;
          display: grid;
          margin: auto;
          font-size: 16px;
          font-weight: 500;
          border-radius: 4px;

         }


   .input-control{
            display: flex;
            flex-direction: column;
        }
      .input-control label{
        color: black;
      }

     .input-control input{
            border: -5px solid #000000;
            display: block;
            font-size: 10px;
            padding: 5px;
        }
      .input-control select{
            border: -5px solid #000000;
            display: block;
            font-size: 10px;
            padding: 5px;
        }
        .input-control .blank_row
        {
         height: 100px !important; /* overwrites any other rules */
         background-color: #FFFFFF;
        }
        .input-control input:focus {
           outline: 0;
         }

     .input-control.success input {
         border-color: #09c372;
       }
      .input-control.error input {
    border-color: #ff3860;
     }

    .input-control .error {
    color: #ff3860;
    font-size: -5px;
      height: 5px;
   }
   .input-control details{
    color: #ff3860;
    font-size: 15px;
    height: 25px;
}

.wrapper .search-input{
    width: 100%;
    border-radius: 5px;
    outline: none;
    border: none;
    padding: 5 0px 0 -5px;
}
.search-input input{
    height: 50px;
    width: 50%;
    outline: none;
    border: none;
    border-radius: 5px;
    padding: 4 0px 0 -4px;
    font-size: 18px;
    box-shadow: 0px 1px 5px rgb(0, 0, 0.1);
}
.search-input .active input{
    border-radius: 5px 5px 0 0;
}
.search-input .autocom-box{
  padding: 0;
  opacity: 0;
  pointer-events: none;
  max-height: 280px;
  overflow-y: auto;
}

.search-input.active .autocom-box{
  padding: 10px 8px;
  opacity: 1;
  pointer-events: auto;
}

.autocom-box li{
  list-style: none;
  padding: 8px 12px;
  display: none;
  width: 100%;
  cursor: default;
  border-radius: 3px;
}

.search-input.active .autocom-box li{
  display: block;
}
.autocom-box li:hover{
  background: #efefef;
}

.search-input .icon{
  position: absolute;
  right: 0px;
  top: 0px;
  height: 50px;
  width: 55px;
  text-align: center;
  line-height: 55px;
  font-size: 20px;
  color: #644bff;
  cursor: pointer;
}


</style>
