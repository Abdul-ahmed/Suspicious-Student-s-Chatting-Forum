<?php

                        $sql = "SELECT id, title, comment, author, date, time FROM admin_post ORDER BY id DESC;";
                        $query = mysqli_query($myConn, $sql);
                        $checkQuery = mysqli_num_rows($query);

                        if ($checkQuery > 0) {
                            while ($row = mysqli_fetch_assoc($query)) {
                                // $_SESSION['id_post'] = $row ['id'];
                                $id_post = $row["id"];
                                $author =  $row['author'];
                                $title =  $row['title'];
                                $comment = $row['comment'];
                                $date = $row['date'];
                                $time = $row['time'];
                                

                                echo '<table class="table table-striped table-bordered table-center"><thead class="content-header"><tr><th scope="col" style="font-family: Georgia;">By '.$author.'<span class="space">| </span>'.$time.'<span class="space"> On </span>'.$date.'</th></tr></thead>'.'<tbody><tr><td><h4 class="h4" style="font-weight: bold;">'.$title.'<button class="btn btn-drop float-right" type="button" data-toggle="collapse" data-target="#collapseComment'.$id_post.'" aria-expanded="false" aria-controls="collapseComment"><i class="fas fa-arrow-down"></i></button></h4><div class="collapse" id="collapseComment'.$id_post.'" style="font-weight:bold;">'.$comment.'</div><form action="includes/comment.students.inc.php" method="POST"><div class="form-group comment-form-group"><div class="input-group comment-input-group"><input type="text" name="addcomment" class="form-control comment-box" placeholder="Write your comment here..." /><input type="hidden" name="postId" class="form-control id-box" value="'.$id_post.'" /><button class="btn btn-comment" name="submit" type="submit">Comment</button></div></div>
                                    </form></td></tr></tbody></table>';
                            }
                        }
                    ?>

