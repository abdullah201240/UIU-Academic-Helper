{{-- @extends('layout')
@section('content') --}}
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


    <section class=" container sproject mt-5 pt-5">
        <div class="row mt-5">
         <div class="col-lg-5 col-md-12 col-12">
         <video width="500" height="340" controls>
       <source src=" {{ asset('images/' . $da->video) }}" type="video/mp4">

     </video>


         </div>
         <div class="col-lg-5 col-md-12 col-12">
           <h3> {{$da->project_name}} </h3>
            <div class = "item-detail">

            <h4> {{$da->tn}} </h4>
            <h4>{{$da->position}}  </h4>


             <div class="stars">

               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
             </div>
             <p> {{$da->cname}} </p>

             <p> {{$da->tri}} </p>
             <a href="{{$da->project_link}}"><B>Project link </B></a>
             <p> {{$da->project_dis}} </p>
             <p>Faculty Name: {{$da->fid}} </p>
             <p> Team Member : </p>
             @foreach ($data1 as $da1)
             <a href="/showstudentprofile/{{$da1->partnerID}}"><p>Name: {{$da1->partnerName}}({{$da1->partnerID}})</p></a>


             @endforeach

             <p> Project Image : </p>
             @foreach ($data2 as $da2)
             <a href='{{ asset('images/' . $da2->image) }}'> <img
                src="{{ asset('images/' . $da2->image) }}" width="130"></a>


             @endforeach
             <br>
             <br>


            <button onclick="location.href='/p_rating/{{$da->project_id}}'" class = "button" style="font-size:24px"><i class="fa fa-pencil"></i>Write Review</button>

            </div>




             </div>

         </div>
      </section>
    @endforeach

      <br><br><br>



     <section id="testimonials">
       <div class="testimonials-heading">
         <span><h3>Reviews & Ratings</h3></span>


       </div>
       <div class="testimonials-box-container">
         <div class="testimonials-box">
           <div class="box-top">
             <div class="profile">
               <div class="profile-img">
                 <img src="">
               </div>
               <div class="name-user">
                 <strong>name from database</strong>
                 <span>@name frpm database</span>
               </div>
             </div>
             <div class="reviews">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
             </div>
           </div>
         <div class="comment">
           <p>reviews from database will be fetched and visible here</p>

         </div>
         </div>
          <div class="testimonials-box">
           <div class="box-top">
             <div class="profile">
               <div class="profile-img">
                 <img src="images/sakib.jpg">
               </div>
               <div class="name-user">
                 <strong>name from database</strong>
                 <span>@name frpm database</span>
               </div>
             </div>
             <div class="reviews">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
             </div>
           </div>
         <div class="comment">
           <p>reviews from database will be fetched and visible here</p>

         </div>
         </div>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>


       </div>

     </section>

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






</body>
































<style>
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
