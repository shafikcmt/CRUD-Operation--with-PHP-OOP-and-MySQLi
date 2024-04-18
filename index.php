 <?php 
    include 'header.php';
 ?> 
 <?php
    $db = new Database();
    $sql = "SELECT * FROM tbl_users";
    $read = $db->select($sql);
 ?>                  
                    <div class="card-body">
                        <?php
                            if(isset($_GET['msg'])){
                               echo "<div class='alert alert-success'><strong>Success: </strong>".$_GET['msg']."</div>";
                            }
                        ?>
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>Serial</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            if($read){
                                while($row = $read->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['roll']; ?></td>
                                <td><?php echo $row['course']; ?></td>
                                <td>
                                    <a class="btn btn-primary" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                                    <a class="btn btn-primary" href="?id=<?php echo $row['id']; ?>">Delete</a>

                                </td>
                               
                            </tr>
                           <?php } }else{ ?>
                            <p>Data not Found!</p>
                            <?php } ?>
                        </table>
                        <a class="btn btn-success" href="create.php">Create</a>
                    </div>

<?php 
    include 'footer.php';
 ?> 
                   