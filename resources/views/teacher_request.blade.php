{{--
@extends('tlayout')
@section('content')



<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Request List</title>

</head>

<body>
    <main class="table">
        <section class="table__header">
            <h1>All Grader And U.A Request</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/search.png" alt="">
            </div>


        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>Student Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Student Id<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Course Name<span class="icon-arrow">&UpArrow;</span></th>
                        <th>Course ID<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Section <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Status<span class="icon-arrow">&UpArrow;</span></th>

                        <th> Options <span class="icon-arrow">&UpArrow;</span></th>

                        <th> Action <span class="icon-arrow">&UpArrow;</span></th>

                    </tr>
                </thead>
                 <tbody>
                    @foreach ($data as $da)
                    <tr>


                        <td><a href="showstudentprofile/{{$da->sid}}">{{$da->sname}} </a> </td>
                        <td>{{$da->sid}} </td>
                        <td>{{$da->cname}} </td>
                        <td>{{$da->cid}} </td>
                        <td>{{$da->section}} </td>
                        <td>{{$da->status}} </td>

                        <td><a href='uaasp/{{$da->id}}'><button type="button" class="btn btn-success">Accpects</button></a></td>
<td>                        <a href='uarej/{{$da->id}}'><button type="button" class="btn btn-danger">Reject</button></a> </td>




                    </tr>
                   @endforeach




                </tbody>


            </table>

        </section>





        <div class="content">

            <div class="container">
              <h2 class="mb-5">Grader Payment Request</h2>

              <div class="table-responsive">

                <table class="table table-striped custom-table">
                  <thead>
                    <tr>

                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Course id</th>
                      <th scope="col"> Section</th>

                      <th scope="col">Assignment 1</th>
                      <th scope="col">Assignment 2</th>
                      <th scope="col">Assignment 3</th>
                      <th scope="col">Assignment 4</th>
                      <th scope="col">Status</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data2 as $da2)


                    <tr scope="row">

                      <td>
                        {{$da2->sid}}

                      </td>

                      <td>
                        {{$da2->sname}}

                      </td>
                      <td>{{$da2->cid}}</td>
                      <td>{{$da2->section}}</td>
                      <td>  {{$da2->as1}}</td>
                      <td>  {{$da2->as2}}</td>
                      <td>{{$da2->as3}}</td>
                      <td>{{$da2->as4}}</td>
                      <td>{{$da2->status}}</td>

                    </tr>
                    @endforeach


                  </tbody>
                </table>
              </div>


            </div>

          </div>


        </main>



    <style>
        * {
     margin: 0;
     padding: 0;

     box-sizing: border-box;
     font-family: sans-serif;
 }

 body {
     min-height: 100vh;
     background: url(images/cover_1.jpg) center / cover;

     display: flex;
     justify-content: center;
     align-items: center;
 }

 main.table {
     width: 100%;
     /*height: 90vh;*/
     background-color: #fff5;
     text-align: center;
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
     width: 4rem;
     height: 4rem;
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
     color: #b80f0fca;
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

</body>

<script>
    const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
search.addEventListener('input', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase(),
            search_data = search.value.toLowerCase();

        row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
        row.style.setProperty('--delay', i / 25 + 's');
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}

// 2. Sorting | Ordering data of HTML table

table_headings.forEach((head, i) => {
    let sort_asc = true;
    head.onclick = () => {
        table_headings.forEach(head => head.classList.remove('active'));
        head.classList.add('active');

        document.querySelectorAll('td').forEach(td => td.classList.remove('active'));
        table_rows.forEach(row => {
            row.querySelectorAll('td')[i].classList.add('active');
        })

        head.classList.toggle('asc', sort_asc);
        sort_asc = head.classList.contains('asc') ? false : true;

        sortTable(i, sort_asc);
    }
})


function sortTable(column, sort_asc) {
    [...table_rows].sort((a, b) => {
        let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
            second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

        return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
    })
        .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
}


</script>

</html>


 --}}


@extends('tlayout')
@section('content')



    <!DOCTYPE html>
    <html lang="en" title="Coding design">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Request List</title>

    </head>

    <body>
        <main class="table">
            <section class="table__header">
                <h1>All Grader And U.A Request</h1>
                <div class="input-group">
                    <input type="search" placeholder="Search Data...">
                    <img src="images/search.png" alt="">
                </div>


            </section>

            <br>
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th>Student Name <span class="icon-arrow">&UpArrow;</span></th>
                            <th>Student Id<span class="icon-arrow">&UpArrow;</span></th>
                            <th> Course Name<span class="icon-arrow">&UpArrow;</span></th>
                            <th>Course ID<span class="icon-arrow">&UpArrow;</span></th>
                            <th> Section <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Status<span class="icon-arrow">&UpArrow;</span></th>

                            <th> Action <span class="icon-arrow">&UpArrow;</span></th>

                            <th> Action <span class="icon-arrow">&UpArrow;</span></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $da)
                            <tr>


                                <td><a href="showstudentprofile/{{ $da->sid }}">{{ $da->sname }} </a> </td>
                                <td>{{ $da->sid }} </td>
                                <td>{{ $da->cname }} </td>
                                <td>{{ $da->cid }} </td>
                                <td>{{ $da->section }} </td>
                                <td>{{ $da->status }} </td>

                                <td><a href='uaasp/{{ $da->id }}'><button type="button"
                                            class="btn btn-success">Accpect</button></a></td>
                                <td> <a href='uarej/{{ $da->id }}'><button type="button"
                                            class="btn btn-danger">Reject</button></a> </td>




                            </tr>
                        @endforeach




                    </tbody>


                </table>

            </section>




            <section class="table__header">
                <h1>Grader Payment Request</h1>
                <div class="input-group">
                    <input type="search" placeholder="Search Data...">
                    <img src="images/search.png" alt="">
                </div>


            </section>
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th>ID<span class="icon-arrow">&UpArrow;</span></th>
                            <th>Name<span class="icon-arrow">&UpArrow;</span></th>

                            <th>Course ID<span class="icon-arrow">&UpArrow;</span></th>
                            <th> Section <span class="icon-arrow">&UpArrow;</span></th>
                            <th>Assignment1<span class="icon-arrow">&UpArrow;</span></th>
                            <th>Assignment2<span class="icon-arrow">&UpArrow;</span></th>
                            <th>Assignment3<span class="icon-arrow">&UpArrow;</span></th>
                            <th>Assignment4<span class="icon-arrow">&UpArrow;</span></th>
                            <th> Status<span class="icon-arrow">&UpArrow;</span></th>

                            <th> Action <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Action <span class="icon-arrow">&UpArrow;</span></th>

                            <th> Action <span class="icon-arrow">&UpArrow;</span></th>

                        </tr>





                    </thead>
                    <tbody>
                        @foreach ($data2 as $da2)
                            <tr scope="row">

                                <td>
                                    {{ $da2->sid }}

                                </td>

                                <td>
                                    {{ $da2->sname }}

                                </td>
                                <td>{{ $da2->cid }}</td>
                                <td>{{ $da2->section }}</td>
                                <td> {{ $da2->as1 }}</td>
                                <td> {{ $da2->as2 }}</td>
                                <td>{{ $da2->as3 }}</td>
                                <td>{{ $da2->as4 }}</td>
                                <td>{{ $da2->status }}</td>
                                <td><a href='uaasp/{{ $da2->id }}'><button type="button"
                                            class="btn btn-success">Accpect</button></a></td>
                                <td><a href='uarej/{{ $da2->id }}'><button type="button"
                                            class="btn btn-danger">Reject</button></a> </td>
                                <td><a href='uarej/{{ $da2->id }}'><button type="button"
                                            class="btn btn-info">Edit</button></a> </td>

                            </tr>
                        @endforeach











                    </tbody>


                </table>

            </section>



        </main>



        <style>
            * {
                margin: 0;
                padding: 0;

                box-sizing: border-box;
                font-family: sans-serif;
            }

            body {
                min-height: 100vh;
                background: url(images/cover_1.jpg) center / cover;

                display: flex;
                justify-content: center;
                align-items: center;
            }

            main.table {
                width: 80%;
                /*height: 90vh;*/
                background-color: #fff5;
                text-align: center;
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
                width: 4rem;
                height: 4rem;
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

            .table__body::-webkit-scrollbar {
                width: 0.5rem;
                height: 0.5rem;
            }

            .table__body::-webkit-scrollbar-thumb {
                border-radius: .5rem;
                background-color: #0004;
                visibility: hidden;
            }

            .table__body:hover::-webkit-scrollbar-thumb {
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

            table,
            th,
            td {
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
                color: #b80f0fca;
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

            thead th:hover span.icon-arrow {
                border: 1.4px solid #6c00bd;
            }

            thead th:hover {
                color: #6c00bd;
            }

            thead th.active span.icon-arrow {
                background-color: #6c00bd;
                color: #fff;
            }

            thead th.asc span.icon-arrow {
                transform: rotate(180deg);
            }

            thead th.active,
            tbody td.active {
                color: #6c00bd;
            }
        </style>

    </body>

    <script>
        const search = document.querySelector('.input-group input'),
            table_rows = document.querySelectorAll('tbody tr'),
            table_headings = document.querySelectorAll('thead th');

        // 1. Searching for specific data of HTML table
        search.addEventListener('input', searchTable);

        function searchTable() {
            table_rows.forEach((row, i) => {
                let table_data = row.textContent.toLowerCase(),
                    search_data = search.value.toLowerCase();

                row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
                row.style.setProperty('--delay', i / 25 + 's');
            })

            document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
                visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
            });
        }

        // 2. Sorting | Ordering data of HTML table

        table_headings.forEach((head, i) => {
            let sort_asc = true;
            head.onclick = () => {
                table_headings.forEach(head => head.classList.remove('active'));
                head.classList.add('active');

                document.querySelectorAll('td').forEach(td => td.classList.remove('active'));
                table_rows.forEach(row => {
                    row.querySelectorAll('td')[i].classList.add('active');
                })

                head.classList.toggle('asc', sort_asc);
                sort_asc = head.classList.contains('asc') ? false : true;

                sortTable(i, sort_asc);
            }
        })


        function sortTable(column, sort_asc) {
            [...table_rows].sort((a, b) => {
                    let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
                        second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

                    return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
                })
                .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
        }
    </script>

    </html>
