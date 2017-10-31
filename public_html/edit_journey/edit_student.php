
        <div class="row">
          <!-- Dropdowns for sorting -->
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Sort by: Time
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="#">Name</a></li>
              <li><a href="#">Quest</a></li>
              <li><a href="#">Time</a></li>
            </ul>
          </div>

          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><i class="material-icons" style="font-size:1em;">arrow_upward</i> Ascending
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="material-icons" style="font-size:1em;">arrow_upward</i> Ascending</a></li>
              <li><a href="#"><i class="material-icons" style="font-size:1em;">arrow_downward</i> Descending</a></li>
            </ul>
          </div>
        </div>
        <hr/>
        <div class="row" align="center">
        </br>

        <h1>NO STUDENTS</h1>
        <h3>Add Students</h3>

        <!-- Button -->
        <!-- <button type="button" class="btn-add-journey shadow" onclick=""><a href="#H"><i class="material-icons">add</i></a></button> -->
        <button class="btn-add-journey shadow" type="button" data-toggle="modal" data-target="#ModalStudent" name="button"><i class="material-icons">add</i></button>

        <!-- Modal -->
        <div id="ModalStudent" class="modal fade" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">ADD STUDENT</h4>
          </div>
          <div class="modal-body">

            <form id="add_student" action="./php/addStudent.php" method="post">
              <h5>Avalable Students</h5>

                <select name="idstudent" style="height:30px; width:100%;">
                  <option value="none">Choose Student</option>
                  <?php
                  $sql= "select idstudent, name , lastname, email from Student where idstudent  not IN (select idstudent from sjourney where idjourn =$journey) ";
                    $result = mysqli_query($connection,$sql);
                    if (mysqli_num_rows($result) > 0) {
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "<option value=". $row['idstudent'] .">".$row['name']." ".$row['lastname']."</option>";
                        }
                      }
                   ?>
                   </select>

          </div>
          <div class="modal-footer">
            <button type="button" onclick="form_student() " class="btn btn-primary" >Save Changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
           </form>
        </div>


        </div><!--RowEnds-->
