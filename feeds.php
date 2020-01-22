<?php
    session_start();
    include_once 'includes/dbh.inc.php';
?>

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
        /*Styling for the Search Bar Only*/
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
        /*END - Styling for the Search Bar Only*/
        
        /*Styling for Sidebar only*/
        * {
            margin: 0px;
            padding: 0px;
            /*font-family: sans-serif;*/
        }

        #sidebar {
            top: 55px;
            position: fixed;
            width: 230px;
            height: 100%;
            background: #1c2331;
            left: -230px;
            transition: all 500ms linear;

        }

        #sidebar.active {
            left: 0px;
        }
        
        #sidebar ul li {
            color: white;
            padding: 15px 10px;
            height: 50px;
            padding-left: 20px;
            list-style: none;

        }

        #sidebar ul li:hover {
            background: black;
        }

        #sidebar .toggle-btn {
            position: absolute;
            left: 230px;
            top: -0px;
        }

        #sidebar .toggle-btn button {
            margin-top: 15px;
            display: block;
            padding-right: 20px;
            padding-left: 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            background: #1c2331;
            font-family: sans-serif;
            font-weight: normal;
        }

        #sidebar .toggle-btn button:hover {
            background: white;
            font-weight: normal;
        }

        span.menu{
            padding-left: 25px;
        }
        /*------END - Styling of Sidebar Only------*/

        /*------Styling for the Post Only------*/
        .table-responsive {
            margin-top: 90px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            /*word-spacing: .5em;*/
        }

        .content-header{
            background: #1c2331;
            color: white;
        }

        /*------END - Styling for the Post Only------*/

        /*------Styling for Ask-Question Button Only------*/
        .btn-question {
            margin-top: 10px;
            padding-right: 10px;
            padding-left: 10px;
            padding-top: 3px;
            padding-bottom: 3px;
            background: #049142;
            height: 30px !important;
            line-height: 25px;
        }

        .btn-question:hover {
            background: white;
            color: #049142;
        }


        /*------END - Styling for Ask-Question Button Only------*/

        /*------Styling for Comment Button Only------*/
        .btn-comment {
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            padding-right: 15px;
            padding-left: 15px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-top: 0;
            margin-left: 0;
            background: #049142;
            font-weight: bold;
        }

        .btn-comment:hover {
            background: white;
            color: #049142;
        }

        .comment-box {
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        .comment-form-group {
            margin-bottom: 0;
        }
        /*------END - Styling for Comment Button Only------*/

        /*------Styling for Ask Question Modal------*/
        .modal-header {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .bg-question, .btn-post, .btn-drop{
            padding-right: 20px;
            padding-left: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            background: #049142;
        }

        .btn-drop {
            padding-right: 3px;
            padding-left: 3px;
            padding-top: 1px;
            padding-bottom: 0px;
            background: #049142;
        }

        .modal-title {
            font-size: 20px;
        }
        /*------END - Styling for Ask Question Modal------*/

        /*------Styling for the Scroll Bar on the right side of the web page------*/
        ::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar
        {
            width: 12px;
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-thumb
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #555;
        }
        /*------END - Styling for the Scroll Bar on the right side of the web page------*/

        /*------Styling for the Arrow-Down Icon on the post header------*/
        .clickable{
            cursor: pointer;
        }
        /*------END - Styling for the Arrow-Down Icon on the post header------*/

        /*------Styling for the spacing in the post 'th' Header ------*/
        .space {
            word-spacing: 3px;
        }
        /*------END - Styling for the spacing in the post 'th' Header ------*/

        .maincomment {
            margin-left: 30px;
        }

        .ava {
            vertical-align: middle;
            width: 28px;
            height: 30px;
            border-radius: 50%;
        }

        .drop-logout {
            max-height: 50px;
            padding-top: 0px;
        }

        .logoutform {
            border: none;
        }

        .dropdown-item:hover {
            cursor: pointer;
        }
        
    </style>

</head>
<body>

    <!--Header -->
    <header>
        <!--Navbar -->
        <nav class="mb-4 navbar navbar-expand-lg navbar-dark unique-color-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/sociallogo.png" height="30" alt="kwarapolylogo"></a>
                <form class="search">
                    <div class="search__wrapper">
                        <input type="text" name="" placeholder="Search" class="search__field">
                        <button type="submit" class="fa fa-search search__icon"></button>
                    </div>
                </form>
                    <ul class="navbar-nav ml-auto nav-flex-icons ">
                    <a href="#" class="btn btn-question float-right" data-toggle="modal" data-target="#askQuestionModal">
                        <strong>Post</strong>
                    </a>
                    <li class="nav-item avatar">
                        <a class="nav-link p-0" href="#">
                            <?php
                                $matric = $_SESSION['matric'];
                                $loc;
                                $sql = "SELECT * FROM students WHERE matric = '$matric';";
                                $query = mysqli_query($myConn, $sql);
                                $checkQuery = mysqli_num_rows($query);

                                if ($checkQuery > 0) {
                                    $row = mysqli_fetch_array($query);
                                    $loc = $row['imagename'];
                                    }
                            ?> 
                                    <li class="nav-item dropdown">
                                        
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="<?= $loc; ?>" class="rounded-circle z-depth-0" alt="avatar image" height="35" width="35">
                                        </a>
                                        <div class="dropdown-menu drop-logout" aria-labelledby="navbarDropdownMenuLink">
                                            <form action="includes/logout.students.inc.php" method="POST" class="logoutform">
                                                <button class="dropdown-item" type="submit" name="logout"><i class="fas fa-sign-out-alt"></i> Logout</button>
                                            </form>
                                        </div>
                                    </li>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--/.Navbar -->
    </header>
    <!--/.Header -->

    <!-- Feeds post on the page -->
    <div class="container">
        <div class="container">
            <div class="table-responsive">
                    
                    <?php
                        if (isset($_GET['post_successful'])) {
                            $message = '<div class="alert alert-success alert-dismissible" data-auto-dismiss role="alert">Post Successfully Add<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>';
                            echo $message;
                        } elseif (isset($_GET['question_field_empty'])) {
                            $message = '<div class="alert alert-danger alert-dismissible" data-auto-dismiss role="alert">Question Field Empty<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>';
                            echo $message;
                        }
                    ?>

                    <?php

                        $sql = "SELECT id, title, comment, author, date, time FROM allposts ORDER BY id DESC;";
                        $query = mysqli_query($myConn, $sql);
                        $checkQuery = mysqli_num_rows($query);

                        if ($checkQuery > 0) {
                            while ($row = mysqli_fetch_array($query)) {

                                $id_post = $row['id'];
                                $author =  $row['author'];
                                $title =  $row['title'];
                                $post_comment = $row['comment'];
                                $date = $row['date'];
                                $time = $row['time'];

                                $picturpost = "SELECT * FROM students WHERE matric = '$author'";
                                $mysqlipost = mysqli_query($myConn, $picturpost);
                                $rowspost = mysqli_fetch_array($mysqlipost);
                                $locationpost = $rowspost['imagename'];

                                $picadmin = "SELECT * FROM admin WHERE username = '$author'";
                                $mysqliadmin = mysqli_query($myConn, $picadmin);
                                $rowadmin = mysqli_fetch_array($mysqliadmin);
                                $locationadmin = $rowadmin['imagename'];

                                echo '<table class="table table-striped table-bordered table-center">
                                        <thead class="content-header">
                                            <tr class="posthead">
                                                <th scope="col" style="font-family: Georgia; font-size: 13px;">';
                                {
                                    if ($author == "Admin") {
                                        echo '<img src="'.$locationadmin.'" alt="Avatar" class="ava" /> '.$author.'
                                                    <span class="space"> | </span>'.$time.'
                                                    <span class="space"> On </span>'.$date.'';
                                    } else {
                                            echo '<img src="'.$locationpost.'" alt="Avatar" class="ava" /> '.$author.'
                                                    <span class="space"> | </span>'.$time.'
                                                    <span class="space"> On </span>'.$date.'';
                                    }
                                
                                }

                                echo '</th></tr></thead>'.'';
                                        
                                echo '<tbody><tr><td>
                                            <h5 class="h5" style="font-weight: bold;">'.$title.'
                                                <button class="btn btn-drop float-right" type="button" data-toggle="collapse" data-target="#collapseComment'.$id_post.'" aria-expanded="false" aria-controls="collapseComment">
                                                    <i class="fas fa-arrow-down"></i>
                                                </button>
                                            </h5>';

                                    echo'<div class="collapse" id="collapseComment'.$id_post.'" style="font-weight:bold;">'.$post_comment.'<hr/>';
                                      { 
                                        $fetchComment = "SELECT * FROM commenttable WHERE 
                                        postid = '".$id_post."' ORDER BY id ASC ";
                                        $queryData = mysqli_query($myConn, $fetchComment);
                                        $rows = mysqli_num_rows($queryData);

                                        if($rows > 0){
                                            while ($fetchData = mysqli_fetch_array($queryData)) {
                                                $comment = $fetchData['comment'];
                                                $comment_author = $fetchData['author'];
                                                
                                                $picturequery = "SELECT * FROM students WHERE matric = '$comment_author'";
                                                $mysqlquery = mysqli_query($myConn, $picturequery);
                                                $rows2 = mysqli_fetch_array($mysqlquery);
                                                $location = $rows2['imagename'];

                                                echo '<p class="wholecomment"><img src="'.$location.'" alt="Avatar" class="ava" /> '.$comment_author.'<br/>';
                                                echo '<p class="maincomment">'.$comment.'<br/><hr/></p></p>';
                                            }
                                        }
                                      } 
                                    echo "</div>";
                                    echo'<form action="includes/comments.students.inc.php" method="POST">
                                            <div class="form-group comment-form-group">
                                                <div class="input-group comment-input-group">
                                                    <input type="text" name="addcomment" class="form-control comment-box" placeholder="Write your comment here..." />
                                                    <input type="hidden" name="postId" class="form-control id-box" value="'.$id_post.'" />
                                                        <button class="btn btn-comment" name="submit" type="submit">Comment</button>
                                                </div>
                                            </div>
                                        </form>
                                        </td></tr>
                                        </tbody>
                                    </table>';
                            }
                        }
                    ?>
            </div>
        </div>
    </div>
    <!-- END - Feeds post on the page -->

    <div id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">
            <button class="btn"><strong>FEEDS</strong></button>
        </div>
        <ul>
            <a href="feeds.php">
                <li class="item-menu">
                    <i class="fas fa-clipboard-list"></i> 
                    <span class="menu"><strong><u>FEEDS</u></strong></span>
                </li>
            </a>
            <a href="feeds.php">
                <li class="item-menu">
                    <i class="fas fa-laptop-code"></i>
                    <span class="menu">Computer Science</span>
                </li>
            </a>
        </ul>
    </div>

    <!-- Ask Question Modal -->
        <div class="modal fade" id="askQuestionModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-question text-white">
                        <h3 class="modal-title h3">POST</h3>
                        <button class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="includes/post.students.inc.php">
                            <div class="form-group">
                                <label for="title">Your Post</label>
                                <input type="text" name="question" class="form-control" placeholder="" autofocus><br>
                                <!-- <label for="note" style="text-align:justify">
                                    <strong>NOTE: If you got an accurate answer for your question, comment it on the question, after posting it.</strong>
                                </label> -->
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-post" name="post" type="submit"><strong>Post</strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- END - Ask Question Modal -->

    <!-- JavaScript for sidebar collapsing -->
    <script>
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle('active');
        }
    </script>
    <!-- END - JavaScript for side collapsing -->

    <!-- START - This script below is to make invalid login to auto close-->
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(1000, function(){
                $(this).remove(); 
            });
        }, 2000);
    </script>
    <!-- END - of invalid login to auto close-->

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