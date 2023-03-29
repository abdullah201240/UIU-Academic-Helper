 {{-- @extends('layout')
@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">


     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Grader Work Confirmation Form</div>
    <div class="content">
      <form action="" id="frm">
        @csrf
        <div class="user-details">
          <div class="input-box">
            <span class="details">Grader Name</span>
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
          </div>

          <div class="input-box">

                 <span class="details">Course Name</span>
                 <select name="cid" id="cid" class="InputBox">
                    <option value disabled selected></option>
                    @foreach ($data4 as $da4 )

                    <option value='{{ $da4->cid}}'> {{$da4->cname}}</option>
                    @endforeach






                </select>
                <div class="error"></div>

          </div>


          <div class="input-box">

            <span class="details">Section</span>
            <select name="sec" id="sec" class="InputBox">
               <option value disabled selected></option>


               <option value='A'> A</option>
               <option value='B'> B</option>
               <option value='C'> C</option>
               <option value='D'> D</option>







           </select>
           <div class="error"></div>

     </div>
          <div class="input-box">
            <span class="details">Assignment1</span>
            <input type="text" name="as1" id="as1" placeholder="Enter the number of script" required>
          </div>
          <div class="input-box">
            <span class="details">Assignment2</span>
            <input type="text" name="as2" id="as2" placeholder="Enter the number of script " required>
          </div>
         <div class="input-box">
            <span class="details">Assignment3</span>
            <input type="text"name="as3" id="as3" placeholder="Enter the number of script " required>
          </div>
          <div class="input-box">
            <span class="details">Assignment4</span>
            <input type="text"name="as4" id="as" placeholder="Enter the number of script " required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">I assure that all the information is true</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Agree</span>
          </label>

          </div>
        </div>
        <div class="button">
          <input type="submit" value="Submit" id="fromSubmit">
        </div>
      </form>
    </div>
  </div>
<br>
<br>

  <section class="table__body" id="table_data">
    <table>
        <thead>
            <tr>
                <th>Name<span class="icon-arrow">&UpArrow;</span></th>

                <th>ID<span class="icon-arrow">&UpArrow;</span></th>
                <th> Course Code <span class="icon-arrow">&UpArrow;</span></th>
                <th> Section <span class="icon-arrow">&UpArrow;</span></th>
                <th> Assignment 1 <span class="icon-arrow">&UpArrow;</span></th>
                <th> Assignment 2 <span class="icon-arrow">&UpArrow;</span></th>
                <th> Assignment 3 <span class="icon-arrow">&UpArrow;</span></th>
                <th> Assignment 4 <span class="icon-arrow">&UpArrow;</span></th>

            </tr>
        </thead>
        @foreach ($data5 as $da5 )
         <tbody>

            <tr>
                <td> {{$da5->sname}}</td>
                <td> {{$da5->sid}} </td>
                <td>{{$da5->cid}}</td>
                <td>{{$da5->section}}</td>
                <td>{{$da5->as1}}</td>
                <td>{{$da5->as2}}</td>
                <td>{{$da5->as3}}</td>
                <td>{{$da5->as4}}</td>

                <td>
                    <p class="status delivered"><a href="show_projects.php">View Projects</a></p>
                </td>

            </tr>










        </tbody>
        @endforeach

    </table>
</section>




</body>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
jQuery('#frm').submit(function(e) {

e.preventDefault();
jQuery.ajax({
url:"{{url('grader_payment_form')}}",
data:jQuery('#frm').serialize(),type:'post',success:function(result){
    console.log(result);
}

});


});

</script>
<script>
    var t_data=document.getElementById("table_data");
    var req= new XMLHttpRequest();

    req.open("GET","grader_payment_form",true);
    req.send();
    req.onreadystatechange = function(){
        if(req.readyState == 4 && req.status==200){
            var obj= JSON.parse(req.responseText);

            // for(i=0;i<obj.data5.length;i++){
            //     console.log(obj.data5[i]['id']);
            //     t_data.innerHTML +="<tr><td>"+obj.data5[i]['sname']+"</td></tr>"

            // }
        }

    };


</script>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container{
  max-width: 1000px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box select{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box option{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}




main.table {
    width: 82vw;
    /*height: 90vh;*/
    background-color: #fff5;

    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;

    overflow: hidden;
}

.table__header {
    width: 100%;
    height: 10%;
    background-color: #fff4;
    padding: .8rem 1rem;

    display: flex;
    justify-content: space-between;
    align-items: center;
}

.table__header .input-group {
    width: 35%;
    height: 100%;
    background-color: #fff5;
    padding: 0 .8rem;
    border-radius: 2rem;

    display: flex;
    justify-content: center;
    align-items: center;

    transition: .2s;
}

.table__header .input-group:hover {
    width: 45%;
    background-color: #fff8;
    box-shadow: 0 .1rem .4rem #0002;
}

.table__header .input-group img {
    width: 2rem;
    height: 2rem;
}

.table__header .input-group input {
    width: 100%;
    padding: 0 .5rem 0 .3rem;
    background-color: transparent;
    border: none;
    outline: none;
}

.table__body {
    width: 95%;
    max-height: calc(89% - 1.6rem);
    background-color: #fffb;

    margin: .8rem auto;
    border-radius: .6rem;

    overflow: auto;
    overflow: overlay;
}

.table__body::-webkit-scrollbar{
    width: 0.5rem;
    height: 0.5rem;
}

.table__body::-webkit-scrollbar-thumb{
    border-radius: .5rem;
    background-color: #0004;
    visibility: hidden;
}

.table__body:hover::-webkit-scrollbar-thumb{
    visibility: visible;
}

table {
    width: 100%;
}

td img {
    width: 36px;
    height: 36px;
    margin-right: .5rem;
    border-radius: 50%;

    vertical-align: middle;
}

table, th, td {
    border-collapse: collapse;
    padding: 1rem;
    text-align: left;
}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #d5d1defe;
    cursor: pointer;
    text-transform: capitalize;
}

tbody tr:nth-child(even) {
    background-color: #0000000b;
}

tbody tr {
    --delay: .1s;
    transition: .5s ease-in-out var(--delay), background-color 0s;
}

tbody tr.hide {
    opacity: 0;
    transform: translateX(100%);
}

tbody tr:hover {
    background-color: #fff6 !important;
}

tbody tr td,
tbody tr td p,
tbody tr td img {
    transition: .2s ease-in-out;
}

tbody tr.hide td,
tbody tr.hide td p {
    padding: 0;
    font: 0 / 0 sans-serif;
    transition: .2s ease-in-out .5s;
}

tbody tr.hide td img {
    width: 0;
    height: 0;
    transition: .2s ease-in-out .5s;
}

.status {
    padding: .4rem 0;
    border-radius: 2rem;
    text-align: center;
}

.status.delivered {
    background-color: #86e49d;
    color: #006b21;
}

.status.cancelled {
    background-color: #d893a3;
    color: #b30021;
}

.status.pending {
    background-color: #ebc474;
}

.status.shipped {
    background-color: #6fcaea;
}


@media (max-width: 1000px) {
    td:not(:first-of-type) {
        min-width: 12.1rem;
    }
}

thead th span.icon-arrow {
    display: inline-block;
    width: 1.3rem;
    height: 1.3rem;
    border-radius: 50%;
    border: 1.4px solid transparent;

    text-align: center;
    font-size: 1rem;

    margin-left: .5rem;
    transition: .2s ease-in-out;
}

thead th:hover span.icon-arrow{
    border: 1.4px solid #6c00bd;
}

thead th:hover {
    color: #6c00bd;
}

thead th.active span.icon-arrow{
    background-color: #6c00bd;
    color: #fff;
}

thead th.asc span.icon-arrow{
    transform: rotate(180deg);
}

thead th.active,tbody td.active {
    color: #6c00bd;
}


</style>

</html> --}}
