<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="img/png" href="img/fav.png">
    <title>KWARA STATE POLYTECHNIC STUDENTS' FORUM</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <style type="text/css">
        /*STYLING FOR THE SEARCH BAR ONLY*/
        .search {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        .search * {
            outline: none;
            box-sizing: border-box;
        }

        .search__wrapper {
            position: relative;
        }

        .search__field {
            width: 30px;
            height: 30px;
            color: transparent;
            font-family: Lato, sans-serif, tahoma;
            font-size: .8em;
            /*margin-left: 15px;*/
            padding: 1em 50px 1em 0;
            border: 1px solid transparent;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.5s ease-in-out;
            background-color: transparent;
        }

        .search__field:focus {
            border-bottom-color: #ccc;
            width: 30vw;
            color: white;
            cursor: default;
        }

        .search__field:focus ~ .search__icon {
          /*background-color: transparent;*/
          cursor: pointer;
          pointer-events: auto;
        }

        .search__icon {
            position: absolute;
            top: 0;
            right: 0;
            background-color: #e9f1f4;
            width: 30px;
            height: 30px;
            /*font-size: 1.35em;*/
            text-align: center;
            border-color: transparent;
            border-radius: 50%;
            pointer-events: none;
            display: inline-block;
            transition: background-color 0.2s ease-in-out;
        }

        .search__field::-webkit-input-placeholder {
            position: relative;
            top: 0;
            left: 0;
            transition-property: top, color;
            transition-duration: .1s;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            perspective: 1000;
        }

        .search__field:-moz-placeholder {
            position: relative;
            top: 0;
            left: 0;
            transition-property: top, color;
            transition-duration: .1s;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            perspective: 1000;
        }

        .search__field::-moz-placeholder {
            position: relative;
            top: 0;
            left: 0;
            transition-property: top, color;
            transition-duration: .1s;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            perspective: 1000;
        }

        .search__field:-ms-input-placeholder {
            position: relative;
            top: 0;
            left: 0;
            transition-property: top, color;
            transition-duration: .1s;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            perspective: 1000;
        }

        .search__field::-webkit-input-placeholder[style*=hidden] {
            color: #83b0c1;
            font-size: .65em;
            font-weight: normal;
            top: -20px;
            opacity: 1;
            visibility: visible !important;
        }

        .search__field:-moz-placeholder[style*=hidden] {
            color: #83b0c1;
            font-size: .65em;
            font-weight: normal;
            top: -20px;
            opacity: 1;
            visibility: visible !important;
        }

        .search__field::-moz-placeholder[style*=hidden] {
            color: #83b0c1;
            font-size: .65em;
            font-weight: normal;
            top: -20px;
            opacity: 1;
            visibility: visible !important;
        }

        .search__field:-ms-input-placeholder[style*=hidden] {
            color: #83b0c1;
            font-size: .65em;
            font-weight: normal;
            top: -20px;
            opacity: 1;
            visibility: visible !important;
        }
        /*END - STYLING FOR THE SEARCH BAR ONLY*/

        /*STYLING for the Sidebar Only*/
        .left{
            width: 70px;
            height: 100%;
            background: #1c2331;
            white-space: nowrap;
            margin-top: 55px;
            transition: width 0.7s ;
            position: fixed;
            /*z-index: 9999; */
        }
    
        .left ul{
            padding: 0;
            list-style-type: none;
            text-align: left;
        }

        .left li {
            width: auto;
            height: 60px;
            line-height: 50px;  
            padding-left: 30px;
        }

        .left li:hover {
            background: black; 
        }

        .left:hover {
            width: 250px; 
        }  

        .left .item-menu {
            height:50px;
            overflow:hidden;
            color:#fff;
        } 

        .left a{
            color: white;
            text-decoration: none;
            /*font-weight: bold;*/
        }

        span.menu{
            padding-left: 25px;
        }

        .t_search {
            color: black;
            height: 35px;
            margin-left: 15px;
            width: 190px
        }
        /*END - STYLING for the Sidebar Only*/

        .table-responsive {
            margin-top: 100px;
            /*margin-left: 45px;*/
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .content-header, th .col {
            background: #1c2331;
            color: white;
            min-width: 400px;
        }

    </style>

</head>
<body>

    <!--Header -->
    <header>
        <!--Navbar -->
        <nav class="mb-4 navbar navbar-expand-lg navbar-dark unique-color-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo2.png" height="25" alt="kwarapolylogo"></a>
                <form class="search">
                    <div class="search__wrapper">
                        <input type="text" name="" placeholder="Search" class="search__field">
                        <button type="submit" class="fa fa-search search__icon"></button>
                    </div>
                </form>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item avatar">
                        <a class="nav-link p-0" href="#">
                        <img src="https://pbs.twimg.com/profile_images/822882176966520832/UxZ52O2m.jpg" class="rounded-circle z-depth-0" alt="avatar image" height="35">
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
        <!--/.Navbar -->
    </header>
    <!--/.Header -->

    <div class="row">
        <div class="left">
            <ul>
                <a href="#">
                    <li class="item-menu">
                        <i class="fas fa-clipboard-list"></i> 
                        <span class="menu"><strong><u>FEEDS</u></strong></span>
                    </li>
                </a>
                <a href="#">
                    <li class="item-menu">
                        <i class="fas fa-laptop-code"></i>
                        <span class="menu">Computer Science</span>
                    </li>
                </a>  
                <a href="#">
                    <li class="item-menu">
                        <i class="fas fa-vial"></i>
                        <span class="menu">Science Lab Tech</span>
                    </li>
                </a>
                <a href="#">
                    <li class="item-menu">
                        <i class="fas fa-sitemap"></i>
                        <span class="menu">Architectural Tech</span>
                    </li>
                </a>    
                <a href="#">
                    <li class="item-menu">
                        <i class="fas fa-tractor"></i>
                        <span class="menu">Agricultural Tech</span>
                    </li>
                </a> 
                <a href="#">
                    <li class="item-menu">
                        <i class="fas fa-cogs"></i>
                        <span class="menu">Metallurgical Tech</span>
                    </li>
                </a>
                <a href="#">
                    <li class="item-menu">  
                        <i class="fas fa-charging-station"></i>
                        <span class="menu">Electrical Engr</span>
                    </li>
                </a>
                <a href="#">
                    <li class="item-menu">  
                        <i class="fas fa-money-bill-alt"></i>
                        <span class="menu">Accountancy</span>
                    </li>
                </a>
            </ul>
        </div> <!-- end left -->
    </div>
    
    <div class="container">
        <div  class="container">
            <div class="container">
                <div  class="container">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-center">
                            <thead class="content-header">
                                <tr>
                                    <th scope="col">ND/17/COM/FT/184</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <h3 class="h3">First Post</h3>
                                        <p class="comment"><strong>Some text, some text, some text, some text, some text, some text. Some text, some text, some text, some text, some text, some text. Some text, some text, some text, some text, some text, some text. Some text, some text, some text, some text, some text, some text. </strong></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>
</html>