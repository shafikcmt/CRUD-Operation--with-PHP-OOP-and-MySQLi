<?php 
    include 'header.php';
    $db = new Database();
    $uid = $_GET['id'];
    // echo $id;
    $query = "SELECT * FROM tbl_users WHERE id = $uid";
    $data = $db->select($query)->fetch_assoc();

    if(isset($_POST['update'])){
      $name = $_POST['name'];
      $roll = $_POST['roll'];
      $course = $_POST['course'];

      if($name == ""||$roll==""||$course==""){
        $error = "<div class='alert alert-danger'>Feild must not be Empty!</div>";
      }else{
        $query = "UPDATE tbl_users
        SET
        name = '$name',
        roll = '$roll',
        course = '$course'
        WHERE id = $uid ";
        $update = $db->update($query);
      }
    }

 ?> 
 <div class="card-body">
 <form action="" method='POST'>
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" value="<?php echo $data['name']; ?>" class="form-control" id="name" placeholder="Enter Name" name="name">
  </div>
  <div class="mb-3">
    <label for="roll" class="form-label">Roll:</label>
    <input type="text" value="<?php echo $data['roll']; ?>" class="form-control" id="roll" placeholder="Enter Roll" name="roll">
  </div>

  <div class="mb-3">
    <label for="pwd" class="form-label">Course:</label>
    <input type="text" value="<?php echo $data['course']; ?>" class="form-control" id="course" placeholder="Enter Course" name="course">
  </div>
  
  <button type="submit" name="update" class="btn btn-primary">Update</button>
  <button type="submit" class="btn btn-primary">Delete</button>
  <a class="btn btn-primary" href="index.php">Go Back</a>
</form>
 </div>
  <?php 
    include 'footer.php';
 ?> 