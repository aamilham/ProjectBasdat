<?php
    
    include "./db.php";

    if(isset($_POST["hidden"])){
      $title = $_POST["edittitle"];
      $note = $_POST["editnote"];
      $id = $_POST["hidden"];
      $sql="UPDATE `notes` SET `sno`='$id' , `title`='$title' , `note`='$note' WHERE `sno`='$id'";
      $result=mysqli_query($conn,$sql);
  }

    
    echo '
    

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Your Notes</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form class="form" method="POST">
            <input type="hidden" name="hidden" id="hidden">
          <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="edittitle" placeholder="Put Title Here..." name="edittitle">
          </div>
          <div class="mb-3">
              <label for="note" class="form-label">Notes</label>
              <textarea class="form-control" id="editnote" rows="3" placeholder="Enter Your Notes Here..." name="editnote"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Update Notes</button>
      </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>';


?>