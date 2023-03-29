 @extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Project Details</title>
</head>
<body>
    @foreach ($data as $da)
<center>
    <br><br>
    <section class=" container sproject mt-5 pt-5" >
        <div class="row mt-5">
         <div class="col-lg-5 col-md-12 col-12">
         <video width="900" height="400" controls>
       <source src=" {{ asset('images/' . $da->video) }}" type="video/mp4">

     </video>


    </div>
    <div class="col-lg-5 col-md-12 col-12">
           <h1><b> {{$da->project_name}}</b> </h1>
            <div class = "item-detail">

            <h4> {{$da->tn}} </h4>
            <h4>{{$da->position}}  </h4>


             <div class="reviews">
                @foreach ($data4 as $da4)
                @for ($i =0; $i <= $da4->a/$da4->b; $i++)

                <i class="fas fa-star"></i>

              @endfor



                @endforeach

               {{-- <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i> --}}
             </div>
             <p> {{$da->cname}} </p>

             <p> {{$da->tri}} </p>
             <a href="{{$da->project_link}}"><B>Project link </B></a>
             <p> {{$da->project_dis}} </p>
             <p>Faculty Name: {{$da->fid}} </p>

             <div class="container1">
                <table id="table_data" style="background:rgb(217, 224, 227); width:100%; height:80%;">
                    <thead><center><h3>Project Member List</h3></center></thead>
                    <tr style="background:rgb(193, 203, 230);">
                        <th>Member Name</th>
                        <th>Member ID</th>

                    </tr>
                    @foreach ($data1 as $da1)
                    <tr>
                        <td>{{$da1->partnerName}}</td>
                        <td>{{$da1->partnerID}}</td>

                    </tr>



                    @endforeach



                </table>
                </div>






             <h1><b> <p> Project Image : </p></b></h1>
             @foreach ($data2 as $da2)
             <a href='{{ asset('images/' . $da2->image) }}'width="300" height="300"> <img
                src="{{ asset('images/' . $da2->image) }}" width="300" height="300"></a>


             @endforeach
             <br>
             <br>


            <button onclick="location.href='/p_rating/{{$da->project_id}}'" class = "button" style="font-size:24px"><i class="fa fa-pencil"></i>Write Review</button>

            </div>




             </div>

         </div>
      </section>
    @endforeach





     <section id="testimonials">
       <div class="testimonials-heading">
        <div class="container2">
         <span><h1>Reviews & Ratings For This Project</h1></span>
        </div>

       </div>

       <div class="testimonials-box-container">
        @foreach ($data3 as $da3)
         <div class="testimonials-box">
           <div class="box-top">

             <div class="profile">


               <div class="name-user">
                <a href="/showstudentprofile/{{$da3->sid}}"><strong>{{$da3->sname}}</strong></a>
                 <span>{{$da3->sid}}</span>
               </div>
             </div>
             <div class="reviews">
             @for ($i =1; $i <= $da3->star; $i++)

                <i class="fas fa-star"></i>

              @endfor
            </div>

             {{-- @foreach ($da3->star as $da4)
             <div class="reviews">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
             </div>
             @endforeach --}}
           </div>
         <div class="comment">
           <p>{{$da3->comment}}</p>

         </div>

         </div>
         @endforeach

         <br>
         <br>
         <br>
         <br>
         <br>
         <br>


       </div>

     </section>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>

      <script>

const itemList = document.querySelector('.item-list');
const gridViewBtn = document.getElementById('grid-active-btn');
const detailsViewBtn = document.getElementById('details-active-btn');

gridViewBtn.classList.add('details-active');
detailsViewBtn.addEventListener('click', () => {
    detailsViewBtn.classList.add('active-btn');
    gridViewBtn.classList.remove("active-btn");
    itemList.classList.add("details-active");
});

gridViewBtn.addEventListener('click', () => {
    gridViewBtn.classList.add('active-btn');
    detailsViewBtn.classList.remove('active-btn');
    itemList.classList.remove('details-active');
});



      </script>


<style>
       .container1 {
        max-width: 1000px;
        width: 100%;
        background-color: #fcfcfcf0;
        padding: 25px 30px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    }
    .container2 {
        max-width: 800px;
        width: 100%;
        background-color: #fcfcfcf0;
        padding: 25px 30px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    }


</style>



</body>
































<style>
    body{
        background-color: #d1efd8
    }
    .small-img-group{
     display:flex;
     justify-content: space-between;
    }
    .small-img-col{
     flex-basis: 90%;
     cursor: pointer;
    }
 .button{

    background-color: #008CBA;
    color: white;

   border: 2px solid #008CBA;
 }

 .button:hover {
  background-color: white;
   color: black;
 }
 .button1{

    background-color: #148F77;
    color: white;

   border: 2px solid #148F77;
 }

 .button1:hover {
  background-color: white;
   color: black;
 }
 .testimonials{
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
   width: 100%;
 }
 .testimonials-heading{
   letter-spacing: 1px;
   margin: 30px 0px;
   padding: 10px 20px;
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
 }
 .testimonials-box-container{
   display: flex;
   justify-content: center;
   align-items: center;
   flex-wrap: wrap;
   width: 100%;


 }
 .testimonials-box{
  width: 500px;
  box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
  background-color: white;
  padding: 20px;
  margin: 15px;
  cursor: pointer;
 }
 .profile-img{
   width: 50px;
   height: 50px;
   border-radius: 50%;
   overflow: hidden;
   margin-right: 10px;

 }
 .profile-img img{
   width: 100%;
   height: 100%;
   object-fit: cover;
   object-position: center;
 }
 .profile{
   display: flex;
   align-items: center;
 }
 .name-user{
   display: flex;
   flex-direction: column;
 }
 .name-user strong{
   color: #3d3d3d;
   font-size: 1.1rem;
   letter-spacing: 0.5px;
 }
 .name-user span{
   color: #979797;
   font-size: 0.8rem;

 }
 .reviews{
   color: #f9d71c;

 }
 .box-top{
   display: flex;
   justify-content: space-between;
   align-items: center;
   margin-bottom: 20px;
 }
 .comment{
   font-size: 0.9rem;
   color: #4b4b4b;

 }
 .testimonial-box:hover{
   transform: translate(-10px);
   transition: all ease 0.3s;

 }
 @media(max-width:1060px){
   .testimonial-box{
     width: 45%;
     padding: 10px;
   }
 }
 @media(max-width:790px){
   .testimonial-box{
     width: 100%;
   }
   .testimonial-heading h1{
     font-size: 1.4rem;
   }
 }
 @media(max-width:340px){
   .box-top{
     flex-wrap: wrap;
     margin-bottom: 10px;
   }
   .reviews{
     margin-top: 10px;
   }
 }
 ::selection{
   color: #ffffff;
   background-color: #252525;
 }







 </style>






<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
  </body>

</html>
