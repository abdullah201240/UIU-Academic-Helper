@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



</head>
<body>
<section>
<div class="container">

   <h1 class="heading">My project</h1><!--Course name change hobe-->

   <div class="box-container">

    @foreach($data4 as $da2)
      <div class="box">
         <div class="image">
            <!-- image from database -->
            <img src="images/p.jpg" alt="">
         </div>
         <div class="content">
            <h3>{{$da2->project_name}}</h3>
            <a href="{{$da2->project_link}}"><p style="color:Blue">Link</p></a>
            <a href = '' > <button class= "linkInButton"> Edit </button> </a>
            <p>{{$da2->project_dis}}</p>

            <div class="icons">

               <span> <i class="fas fa-user"></i> {{$da2->tn}} </span>
            </div>
         </div>
      </div>
      @endforeach



   <div id="load-more"><i class='fas fa-angle-double-down'></i> More</div>

</div>
</section>

<script>

let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.container .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   }
   currentItem += 3;

   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}

</script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap');

 *{
    font-family: 'Montserrat', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
 }

 body{
  background-color: #D4E6F1;
 }

 .container{
   max-width: 1200px;
   margin: 0 auto;
   text-align: center;
   padding:25px 20px;
 }

 .container .heading{
   font-size: 40px;
   margin-bottom: 20px;
   color:#334;
 }

 .container .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
   gap:20px;
 }

 .container .box-container .box{
   background-color: #fff;
   padding:20px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.2);
   display: none;
 }

 .container .box-container .box:nth-child(1),
 .container .box-container .box:nth-child(2),
 .container .box-container .box:nth-child(3){
   display: inline-block;
 }

 .container .box-container .box .image{
   margin-bottom: 20px;
   overflow: hidden;
   height: 250px;
   border-radius: 5px;
 }

 .container .box-container .box .image img{
   height: 100%;
   width: 100%;
   object-fit: cover;
 }

 .container .box-container .box:hover .image img{
   transform: scale(1.1);
 }

 .container .box-container .box .content h3{
   font-size: 20px;
   color:#334;
 }

 .container .box-container .box .content p{
   font-size: 15px;
   color:#777;
   line-height: 2;
   padding:15px 0;
 }

 .container .box-container .box .content .btn{
   display: inline-block;
   padding:10px 30px;
   border:1px solid #334;
    background-color: crimson;
   border-color: crimson;
   color:#fff;
   font-size: 16px;
 }

 .container .box-container .box .content .btn:hover{
   background-color: #229954 ;
   border-color: #229954 ;
   color:#fff;
 }

 .container .box-container .box .content .icons{
   display: flex;
   align-items: center;
   justify-content: space-between;
   margin-top: 20px;
   padding-top: 15px;
   border-top:1px solid #334;
 }
 .container  button {
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

 .container .box-container .box .content .icons span{
   font-size: 14px;
   color:#777;
 }

 .container .box-container .box .content .icons span i{
   color: #1B4F72 ;
   padding-right: 5px;
 }

 #load-more{
   margin-top: 20px;
   display: inline-block;
   padding:13px 30px;
   border:1px solid #fff;
   color:#fff;
   font-size: 16px;
   background-color: #229954 ;
   cursor: pointer;
 }

 #load-more:hover{
   background-color: #fff ;
   border-color: #17202A ;
   color:#17202A;
 }

 @media (max-width:450px){

   .container .heading{
     font-size: 25px;
   }

   .container .box-container{
     grid-template-columns: 1fr;
   }

   .container .box-container .box .image{
     height: 200px;
   }

   .container .box-container .box .content p{
     font-size: 12px;
   }

   .container .box-container .box .content .icons span{
     font-size: 12px;
   }

 }
 </style>

</body>
</html>
