<?php 
    include 'header.php';
 ?> 
 <div class="card-body">
 <form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" value="Shafiqul" class="form-control" id="name" placeholder="Enter Name" name="name">
  </div>
  <div class="mb-3">
    <label for="roll" class="form-label">Roll:</label>
    <input type="text" value="1234567" class="form-control" id="roll" placeholder="Enter Roll" name="roll">
  </div>

  <div class="mb-3">
    <label for="pwd" class="form-label">Course:</label>
    <input type="text" value="BTECH" class="form-control" id="course" placeholder="Enter Course" name="course">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
  <button type="submit" class="btn btn-primary">Delete</button>
  <a class="btn btn-primary" href="index.php">Go Back</a>
</form>
 </div>
  <?php 
    include 'footer.php';
 ?> 