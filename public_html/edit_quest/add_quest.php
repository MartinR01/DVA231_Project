      <form id="qadd" action="./php/addquest.php" method="post" enctype="multipart/form-data">

        <div class="row" align="center">
          <h2 class="edit_quest_title">EDIT QUEST</h2>
        </div>

        <!-- Forms start -->
        <div class="col-sm-6 col-md-6 affix-content "> <!-- column 1 -->
          <div class="row">
          
              <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="qname" placeholder="Enter name of the quest">
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Type</label>
                <select name="qtype" class="form-control">
                 <option value="none">Choose type</option>
                  <option value="main">Main Quest</option>
                  <option value="side">Side Quest</option>
                </select>
              </div>

              <div class="form-group">
               <label for="exampleFormControlTextarea1">Description</label>
               <textarea class="form-control" name="qdescription" rows="5" placeholder="Enter description of the Quest"></textarea>
             </div>

             <div class="form-group">
              <label for="exampleFormControlFile1">Upload File</label>
              <input type="file" name="file" class="" id="exampleFormControlFile1">
            </div>



          </div>
        </div>

        <div class="col-sm-6 col-md-6 affix-content "> <!-- column 2: Points -->
          <br>


            <!-- skill 1 -->
            <div class="form-group row">
              <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Writing</label>
              <div class="col-sm-8">
                  <input class="form-control" name="wquest" placeholder="Enter points">
              </div>
            </div>

            <!-- skill 2 -->
            <div class="form-group row">
              <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Presenting</label>
              <div class="col-sm-8">
                <input class="form-control" name="pquest" placeholder="Enter points">

              </div>
            </div>

            <!-- skill 3 -->
            <div class="form-group row">
              <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Thinking</label>
              <div class="col-sm-8">
                <input class="form-control" name="tquests" placeholder="Enter points">
              </div>
            </div>

            <!-- skill 4 -->
            <div class="form-group row">
              <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Programming</label>
              <div class="col-sm-8">
                <input class="form-control" name="prquests" placeholder="Enter points">
              </div>
            </div>

            <!-- skill 5 -->
            <div class="form-group row">
              <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Designing</label>
              <div class="col-sm-8">
                <input class="form-control" name="dquest"  placeholder="Enter points">
              </div>
            </div>
            <!-- skill 6 -->
            <div class="form-group row">
              <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Research</label>
              <div class="col-sm-8">
                <input class="form-control" name="rquest"   placeholder="Enter points">
              </div>
            </div>

          <!-- Buttons row -->
          <div class="row" align="center">
            <button type="button" name="button" class="btn1 shadow" id="quest-edit-btn" onclick="form_add_quest()">Accept</button>
            <button type="button" name="button" class="btn1 shadow" id="quest-edit-btn" onclick=<?php echo "quest(".$_COOKIE['journey'].")";  ?>>Cancel</button>
          </div>
        </div>
    </form>
