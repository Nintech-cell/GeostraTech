
<H1 class="" style="text-align:center"><i class="fa fa-fw fa-wrench"></i>Commentaires des internautes </h1>
<br>
<!--------Voir tous les commentaires (Dashboard) ---------->
<table class="table table-stripped">
                            <tr>
                                <td> ID </td>
                                <td>Auteur</td>
                                <td>Commentaire</td>
                                <td>Email</td>
                                <td>Statut </td>
                                <td>Article lié </td>
                                <td>Approuver </td>     
                                <td>Désapprouver</td>
                                <td>Date</td>
                                <td>Suppression</td>
                            </tr>
                            <tr>

                            <!--------Modération des commentaires (Dashboard) ---------->

                            <?php

                                $sql = "SELECT * FROM comments";
                                $comments = mysqli_query($con,$sql);

                                while($row=mysqli_fetch_assoc($comments))
                                {
                                    $comment_id = $row['comment_id'];
                                    $comment_post_id = $row['comment_post_id'];
                                        
                            ?>

                                <td><?php echo $comment_id; ?> </td>
                                <td><?php echo $row['comment_author']; ?> </td>
                                <td><?php echo $row['comment_content']; ?> </td>
                                <td><?php echo $row['comment_email']; ?> </td>
                                <td><?php echo $row['comment_status']; ?> </td>
                            
                                <?php

                                    $query = "SELECT * FROM posts WHERE post_id = '$comment_post_id'";
                                    $result = mysqli_query($con,$query);

                                    while($value = mysqli_fetch_assoc($result))
                                    {
                                        $post_id =  $value['post_id'];
                                        $post_title =  $value['post_title'];

                                ?>

                                    <td><a href="../post.php?p_id=<?php echo $post_id ?>"><?php echo $post_title ?></a></td>
                                    <td><a href="comments.php?approve=<?php echo $comment_id ?>"> Approuver le commentaire</a></td>
                                    <td><a href="comments.php?unapprove=<?php echo $comment_id ?>"> Désapprouver le commentaire</a></td>
                                
                                <?php

                                }

                                ?>

                                <td><?php echo $row['comment_date']; ?> </td>
                                <td><a href="comments.php?del=<?php echo $comment_post_id ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                                
                                </tr>
                                <?php
                                    }
                                    /* Modération des commentaires*/
                                    /* Enlever un commentaire*/
                                        
                                        if(isset($_GET['del']))
                                        {
                                            
                                            $sql_comment = "DELETE FROM comments WHERE comment_id = '$comment_id'";
                                            $comment_query = mysqli_query($con,$sql_comment);

                                            if($comment_query)
                                            {
                                                header("location: comments.php");
                                            }
                                    }

                                    /* Approuver un commentaire*/
                                        
                                    if(isset($_GET['approve'])){

                                        $cmt_id = $_GET['approve'];
                                        $sql_comment = "UPDATE comments SET comment_status = 'approve' WHERE comment_id='$cmt_id'";
                                        $sql_result = mysqli_query($con,$sql_comment);

                                        if($sql_result){
                                            header('location: comments.php');
                                        }
                                    }

                                    /* Désapprouver un commentaire*/
                                        
                                    if(isset($_GET['unapprove'])){
                                        $cmt_id = $_GET['unapprove'];
                                        $sql_comment = "UPDATE comments SET comment_status = 'unapprove' WHERE comment_id='$cmt_id'";
                                        $sql_result = mysqli_query($con,$sql_comment);

                                        if($sql_result){
                                            header('location: comments.php');
                                        }
                                    }
                                ?>

                        </table>



                       
                        