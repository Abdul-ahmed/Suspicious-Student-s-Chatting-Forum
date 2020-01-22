<?php
    session_start();
    include_once '../includes/dbh.inc.php';
    include_once 'header.php';
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
                                                echo $row["COUNT(id)"];
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
                <h1><strong>Dashboard</strong></h1>
                <hr>
                <h5><strong>Quick Access</strong></h5>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
                        <div class="card text-center bg-primary shadow-md">
                            <div class="card-body">
                                <h3>Students</h3>
                                <h4 class="Display-4">
                                    <i class="fas fa-users"></i>
                                    <?php
                                        $sql = "SELECT COUNT(id) FROM students;";
                                        $query = mysqli_query($myConn, $sql);
                                        $resultCheck = mysqli_num_rows($query);

                                        if ($resultCheck > 0) {
                                            while ($row = mysqli_fetch_assoc($query)) {
                                                echo $row["COUNT(id)"];
                                            }
                                        }
                                    ?>

                                </h4>
                                <!-- <a href="" class="btn btn-outline-light btn-md">View</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
                        <div class="card text-center bg-success shadow-md">
                            <div class="card-body">
                                <h3>Posts</h3>
                                <h4 class="Display-4">
                                    <i class="fas fa-pencil-alt"></i> <?php
                                    $sql = "SELECT COUNT(id) FROM allposts;";
                                    $query = mysqli_query($myConn, $sql);
                                    $resultCheck = mysqli_num_rows($query);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($query)) {
                                            echo $row["COUNT(id)"];
                                        }
                                    }
                                ?>
                                </h4>
                                <!-- <a href="" class="btn btn-outline-light btn-md">View</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
                        <div class="card text-center bg-warning shadow-md">
                            <div class="card-body">
                                <h3>Comments</h3>
                                <h4 class="Display-4">
                                    <i class="fas fa-comments"></i>
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
                                </h4>
                                <!-- <a href="" class="btn btn-outline-light btn-md">View</a> -->
                            </div>
                        </div>          
                    </div>
                </div>
                <br>
                <br>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h5><strong>Recent Posts</strong></h5>
                        <hr>
                        <div class="table-responsive">
                            <table id="mytable" class="table table-bordered table-striped text-center">
                                <thead class="thead-dark">
                                    <th>
                                        <input type="checkbox" id="checkall" />
                                    </th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Department</th>
                                    <th>Level</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Edit</th>
                                </thead>

                                <?php
                                    $sql = "SELECT id, title, author, category, year, date, time FROM allposts ORDER BY id DESC;";
                                    $query = mysqli_query($myConn, $sql);
                                    $resultCheck = mysqli_num_rows($query);

                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($query)) {
                                            echo "<tbody><tr><td>".'<input type="checkbox" class="checkthis" />'."</td><td>".$row["title"]."</td><td>".$row["author"]."</td><td>".$row["category"]."</td><td>".$row["year"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td><td>".'<p class="edit-button" data-placement="top" data-toggle="tooltip" title="Edit">
                                                <a href="#"><button class="btn btn-primary btn-sm" data-title="Edit" data-toggle="modal" data-target="#edit">
                                                    <i class="fas fa-edit"></i>
                                                </button></a>
                                            </p>'."</td></tr></tbody>";
                                        }
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>   
            </div>
        </main>
    <!-- page-content" -->
    </div>



<?php
    include_once 'footer.php';
?>