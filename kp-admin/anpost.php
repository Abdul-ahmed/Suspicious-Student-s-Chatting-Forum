<?php
    session_start();
    include_once '../includes/dbh.inc.php';
    include_once 'header.php';
    // include_once '../includes/post.admin.inc.php';
?>
    
    <div class="page-wrapper chiller-theme toggled">

        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>

                <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">Dashboard</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>

                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="../img/logo1.png" alt="User picture">
                    </div>

                    <div class="user-info">
                        <span class="user-name">
                            <?php
                                echo $_SESSION['u_id'];
                            ?>
                            <strong></strong>
                        </span>
                        <span class="user-role">Kwara Poly Forum Admin</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>

                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>

                        <li>
                            <a href="dashboard.php">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                                <!-- <span class="badge badge-pill badge-primary">Beta</span> -->
                            </a>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-users"></i>
                                <span>Students</span>
                                <span class="badge badge-pill badge-primary">
                                    <?php
                                        $sql = "SELECT COUNT(id) FROM students;";
                                        $query = mysqli_query($myConn, $sql);
                                        $resultCheck = mysqli_num_rows($query);

                                        if ($resultCheck > 0) {
                                            while ($row = mysqli_fetch_assoc($query)) {
                                                $id = $row["COUNT(id)"];
                                                echo $id;
                                            }
                                        }
                                    ?>
                                </span>
                            </a>

                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="allstudents.php">All Students</a>
                                    </li>
                                    <li>
                                        <a href="disabledstudent.php">Enable Students</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-pencil-alt"></i>
                                    <span>Posts</span>
                                <span class="badge badge-pill badge-success"><?php
                                    $sql = "SELECT COUNT(id) FROM allposts;";
                                    $query = mysqli_query($myConn, $sql);
                                    $resultCheck = mysqli_num_rows($query);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($query)) {
                                            echo $row["COUNT(id)"];
                                        }
                                    }
                                ?></span>
                            </a>

                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="allpost.php">All Posts</a>
                                    </li>
                                    <li>
                                        <a href="anpost.php">Add New</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-comments"></i>
                                <span>Comments</span>
                                <span class="badge badge-pill badge-warning">
                                    <?php
                                        $sql = "SELECT COUNT(id) FROM commenttable;";
                                        $query = mysqli_query($myConn, $sql);
                                        $resultCheck = mysqli_num_rows($query);

                                        if ($resultCheck > 0) {
                                            while ($row = mysqli_fetch_assoc($query)) {
                                                echo $row["COUNT(id)"];
                                            }
                                        }
                                    ?>
                                </span>
                            </a>
                        </li>

                        <li class="header-menu">
                            <span>Others</span>
                        </li>

                        <li>
                            <!-- <a href="#"> -->
                                <form action="../includes/logout.students.inc.php" method="POST" class="logoutform">
                                    <button class="dropdown-item" type="submit" name="logout"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></button>
                                </form>
                            <!-- </a> -->
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->

            <div class="sidebar-footer">
                <a href="#">
                    <!-- <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span> -->
                </a>

                <a href="#">
                    <!-- <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span> -->
                </a>

                <a href="#">
                    <!-- <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span> -->
                </a>

                <a href="#">
                    <!-- <i class="fa fa-power-off"></i> -->
                </a>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->


        <main class="page-content">
            <div class="container-fluid">
                <?php
                    if (isset($_GET['post_successful'])) {
                        $message = '<div class="alert alert-success alert-dismissible" data-auto-dismiss role="alert">Post Successfully Add<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>';
                        echo $message;
                    } elseif (isset($_GET['title_empty'])) {
                        $message = '<div class="alert alert-danger alert-dismissible" data-auto-dismiss role="alert">Title Field Empty<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>';
                        echo $message;
                    } elseif (isset($_GET['comment_empty'])) {
                        $message = '<div class="alert alert-danger alert-dismissible" data-auto-dismiss role="alert">Comment Field Empty<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>';
                        echo $message;
                    }
                ?>
                <h1><strong>Posts</strong></h1>
                <hr>
                <h5><strong>Add New Post</strong></h5>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="modal-body">
                            <form method="POST" action="../includes/post.admin.inc.php" onSubmit="return formvalidation();">
                                <!-- <input type="hidden" name="postId" class="form-control id-box" value="<?php echo $id; ?>" /> -->

                                <div class="form-group">
                                    <label for="title"><strong>Title</strong></label>
                                    <input type="text" name="title" class="form-control" id="title" autofocus>
                                    <!-- <strong><span id="titlemessage" style="color: red; font-size: 15px"></span></strong> -->
                                </div>
                                <div class="form-group">
                                    <label for="category"><strong>Category</strong></label>
                                    <select class="form-control" name="category" id="category">
                                        <option value="">--Select--</option>
                                        <option value="all">All Dept</option>
                                        <option value="cse">CSE</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="year"><strong>Year</strong></label>
                                    <select class="form-control" name="year">
                                        <option value="">--Select--</option>
                                        <option value="all">All Year</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="comment"><strong>Comment</strong></label><br>
                                    <!-- <strong><span id="commentmessage" style="color: red; font-size: 15px"></span></strong> -->
                                    <textarea name="comment" class="form-control" id="editor"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <?php if ($editstate == false): ?>
                                        <button class="btn blue-gradient btn-sm" name="post" type="submit"><i class="fas fa-save"> Post</i></button>
                                    <?php else: ?>
                                        <button class="btn blue-gradient btn-sm" name="update" type="submit"><i class="fas fa-save"> Update</i></button>
                                    <?php endif ?>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- page-content" -->
    </div>

    <!-- JS Script to test for empty field on post page-->
        <!-- <script>
            function formvalidation() {
                var titlefield = document.getElementById("title");
                var categoryfield = document.getElementById("editor")

                if (titlefield.value == "") {
                    document.getElementById("titlemessage").innerHTML="Title Field Empty!";
                    // alert ("Title Field Empty!");
                    return false;
                } else if (categoryfield.value == "") {
                    document.getElementById("commentmessage").innerHTML="Comment Field Empty!";
                    // alert ("Comment Field Empty!");
                    return false;
                } else {
                    return true;
                }
            }
        </script> -->
    <!--END of the script -->
<?php
    include_once 'footer.php';
?>