 <?php 
    include 'header.php';
 ?>                   
                    <div class="card-body">
                        <?php
                            if(isset($_GET['msg'])){
                               echo "<div class='alert alert-success'><strong>Success:</strong>".$_GET['msg']."</div>";
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
                            <tr>
                                <td>01</td>
                                <td>Ram Kumar</td>
                                <td>123456</td>
                                <td>B.TECH</td>
                                <td>
                                    <a class="btn btn-primary" href="update.php">Edit</a>
                                    <a class="btn btn-primary" href="#">Delete</a>

                                </td>
                               
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Ram Kumar</td>
                                <td>123456</td>
                                <td>B.TECH</td>
                                <td>
                                    <a class="btn btn-primary" href="update.php">Edit</a>
                                    <a class="btn btn-primary" href="#">Delete</a>

                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Ram Kumar</td>
                                <td>123456</td>
                                <td>B.TECH</td>
                                <td>
                                    <a class="btn btn-primary" href="update.php">Edit</a>
                                    <a class="btn btn-primary" href="#">Delete</a>

                                </td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Ram Kumar</td>
                                <td>123456</td>
                                <td>B.TECH</td>
                                <td>
                                    <a class="btn btn-primary" href="update.php">Edit</a>
                                    <a class="btn btn-primary" href="#">Delete</a>

                                </td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>Ram Kumar</td>
                                <td>123456</td>
                                <td>B.TECH</td>
                                <td>
                                    <a class="btn btn-primary" href="update.php">Edit</a>
                                    <a class="btn btn-primary" href="#">Delete</a>

                                </td>
                            </tr>
                      
                        </table>
                        <a class="btn btn-success" href="create.php">Create</a>
                    </div>

<?php 
    include 'footer.php';
 ?> 
                   