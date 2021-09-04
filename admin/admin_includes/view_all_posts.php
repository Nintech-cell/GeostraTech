

<table class="table table-stripped">
                            <tr>
                                <td> ID </td>
                                <td>Auteur(s)</td>
                                <td>Titre </td>
                                <td>Catégorie </td>
                                <td>Indice</td>
                                <td>Statut </td>
                                <td>Image(s) </td>
                                <td>Commentaires </td>
                                <td>Date </td>
                                <td colspan="2">Modifier</td>
                            </tr>
                            <tr>

                            <?php

                                $query = "SELECT * FROM posts";
                                $result = mysqli_query($con,$query);

                                while($row=mysqli_fetch_assoc($result))
                                {
                                        $cat_id = $row['post_cat_id'];
                            
                            ?>
                                <td><?php echo $row['post_id']; ?> </td>
                                <td><?php echo $row['post_author']; ?> </td>
                                <td><?php echo $row['post_title']; ?> </td>
                       
                                    <?php

                                        $query = "SELECT * FROM categories WHERE cat_id ='$cat_id'";
                                        $data = mysqli_query($con,$query);

                                        while($value = mysqli_fetch_assoc($data))
                                        {
                                            ?>

                                                <td><?php echo $value['cat_title']; ?> </td>

                                            <?php
                                        }
                                    
                                    ?>

                                
                                <td><?php echo $row['post_cat_id']; ?> </td>


                                <td><?php echo $row['post_status']; ?> </td>
                                <td><img width="60" height ="60"class ="img_responsive" src="../imgs/<?php echo $row['post_img']; ?>"></td>
                                <td><?php echo $row['post_comment_count']; ?> </td>
                                <td><?php echo $row['post_date']; ?> </td>
                                <td><a href="posts.php?del=<?php echo $row['post_id'];?>" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                                <td><a href="posts.php?pst=edit_post&p_id=<?php echo $row['post_id'];?>" class="btn btn-success"><span class="fa fa-edit"></span></a></td>
                                

                                </tr>
                            <?php
                                }
                            ?>

                        </table>

                        <?php

                        if(isset($_GET['del']))
                        {
                            $Del_ID = $_GET['del'];
                            $sql = "DELETE FROM posts WHERE post_id='$Del_ID'";
                            $result = mysqli_query($con,$sql);

                            if($result){
                                unlink("../imgs/$ima");
                                header("location: posts.php");
                            }

                            

                        }


                        ?>