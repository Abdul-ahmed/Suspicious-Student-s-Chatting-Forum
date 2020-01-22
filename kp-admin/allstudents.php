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

                <?php
                    if (isset($_GET['successful'])) {
                        $message = '<div class="alert alert-success alert-dismissible" data-auto-dismiss role="alert">Successfully Deleted<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>';
                        echo $message;
                    }
                ?>

                <h1><strong>Students</strong></h1>
                <hr>
                <h5><strong>All Students</strong></h5>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="table-responsive">
                            <table id="mytable" class="table table-bordered table-striped text-center">
                                <thead class="thead-dark">
                                    <th>
                                        <input type="checkbox" id="checkall" />
                                    </th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Other Name</th>
                                    <th>Matric No</th>
                                    <th>Disable</th>
                                </thead>

                                <?php
                                    $sql = "SELECT id, firstname, lastname, othername, matric FROM students ORDER BY id asc;";
                                    $query = mysqli_query($myConn, $sql);
                                    $resultCheck = mysqli_num_rows($query);
                                    
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($query)) {

                                            echo "<tbody><tr><td><input type='checkbox' class='checkthis' /></td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['othername']."</td><td>".$row['matric']."</td><td><p class='edit-button' data-placement='top' data-toggle='tooltip' title='Disable'>
                                                <a href='../includes/disablestudent.inc.php?disa=".$row['id']."'>
                                                <button class='btn btn-danger btn-sm' data-title='Edit' data-toggle='modal' data-target='' id='btn-confirm'>
                                                    <i class='fas fa-toggle-off'></i>
                                                </button></a>
                                            </p></td></tr></tbody>";
                                        }
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
    </div>
    

<?php
    include_once 'footer.php';
?>