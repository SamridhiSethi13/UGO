<!doctype html>
    <html lang="en">

    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- delete -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Merriweather:wght@300&family=Pathway+Gothic+One&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
        <!-- footer -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        * {
            padding: 0;
            margin: 0;
            /* box-sizing: border-box; */
            font-family: 'Patrick Hand', cursive;
            /* color: rgb(238, 236, 236); */
        }

        .h4,
        h4 {
            text-align: center;
            font-size: calc(1.275rem + .3vw);
        }

        table,
        tr,
        td,
        th {
            border: none;
        }

        body {
            width: 100%;
            height: 100vh;
            background-image: url('https://image.shutterstock.com/image-illustration/abstract-blue-white-gray-polygon-260nw-1451847182.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-direction: column;
        }

        #table {
            text-align: center;
            border-collapse: collapse;
        }

        .table-rows {
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .items {
            padding: 15px 35px;
            font-size: 19px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.7);
        }

        .icons {
            width: 15px;
            height: 15px;
            display: inline-block;
        }

        .dec {
            fill: rgba(239, 49, 49, 0.56);
            opacity: 0;
            transition: all 0.5s ease;
        }

        .inc {
            fill: rgba(110, 227, 89, 0.56);
            opacity: 0;
            transition: all 0.5s ease;
        }

        .table-rows:nth-child(even) {
            background-color: rgba(95, 197, 208, 0.21);
        }

        .table-rows:nth-child(odd) {
            background-color: rgba(55, 131, 138, 0.17);
            /* background-color:#31757C; */
        }

        .header-row {
            background-color: linear-gradient(to right bottom, #828282, #839fb5, #5fc5d0, #73e7b8, #d6fb84) !important;
        }

        .table-rows:hover {
            background-image: linear-gradient(to right bottom, #828282, #839fb5, #5fc5d0, #73e7b8, #d6fb84);
            transform: scale(1.1);
        }

        .table-rows:hover svg {
            opacity: 1;
            transform: scale(1.2);
        }
    </style>

    <body>
    <?php
        if (1) 
        {
            ?>
        <div class="container" style="margin-top:4%">
            <div class="row">
                <div class="col-md-12">
                    <h4 style="color: black;text-transform:uppercase;font-size:40px;font-weight:900;font-family: 'Francois One', sans-serif;letter-spacing:7px"><?php 
                                                                                                                                $company="company1";
                                                                                                                                 echo $company; ?></h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <!-- <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" id="search" size="300" required value="<?php if (1) {
                                                                                                            $company="company1";
                                                                                                            echo $company;
                                                                                                        } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" name="btn" class="btn btn-primary" style="background-image: linear-gradient(to right bottom, #828282, #839fb5, #5fc5d0, #73e7b8, #d6fb84);">Search</button>
                                    </div>
                                </form> -->


                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>

                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-body">
                            <table class="table table-bordered" id="table">
                                <thead>
                                    <tr class="header-row">

                                        <th class="header-item items">Description</th>
                                        <th class="header-item items">picture</th>
                                        <th class="header-item items">address</th>
                                        <th class="header-item items">Name</th>
                                        <th class="header-item items">mobile_no</th>
                                        <th class="header-item items">accept</th>
                                        <th class="header-item items">complete</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                        $com = 1;
                                        #$mid = $_GET['sub'];
                                        $con = mysqli_connect("localhost", "root", "", "ugo");
                      
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>




<?php } ?>
    </body>

    </html>
