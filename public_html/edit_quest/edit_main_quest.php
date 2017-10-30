
        <div class="row" align="center">
          <h2 class="edit_quest_title">EDIT QUEST</h2>
        </div>

        <!-- Forms start -->
        <div class="col-sm-6 col-md-6 affix-content "> <!-- column 1 -->
          <div class="row">
            <form>
              <div class="form-group">
                <label>Name</label>
                <input class="form-control" placeholder="Enter name of the quest">
              </div>

              <div class="form-group">
               <label for="exampleFormControlTextarea1">Description</label>
               <textarea class="form-control" rows="5" placeholder="Enter description of the Quest"></textarea>
             </div>

             <div class="form-group">
              <label for="exampleFormControlFile1">Upload File</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>

            </form>
          </div>
        </div>

        <div class="col-sm-6 col-md-6 affix-content "> <!-- column 2: Points -->
          <br>
          <form>

            <!-- skill 1 -->
            <div class="form-group row">
              <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Writing</label>
              <div class="col-sm-8">
                <select class="form-control">
                  <option>10</option>
                  <option>15</option>
                  <option>20</option>
                  <option>25</option>
                  <option>911</option>
                </select>
              </div>
            </div>

            <!-- skill 2 -->
            <div class="form-group row">
              <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Cooking</label>
              <div class="col-sm-8">
                <select class="form-control">
                  <option>10</option>
                  <option>15</option>
                  <option>20</option>
                  <option>25</option>
                  <option>911</option>
                </select>
              </div>
            </div>

            <!-- skill 3 -->
            <div class="form-group row">
              <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Reading</label>
              <div class="col-sm-8">
                <select class="form-control">
                  <option>10</option>
                  <option>15</option>
                  <option>20</option>
                  <option>25</option>
                  <option>911</option>
                </select>
              </div>
            </div>

            <!-- skill 4 -->
            <div class="form-group row">
              <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Critical Thinking</label>
              <div class="col-sm-8">
                <select class="form-control">
                  <option>10</option>
                  <option>15</option>
                  <option>20</option>
                  <option>25</option>
                  <option>911</option>
                </select>
              </div>
            </div>

            <!-- skill 5 -->
            <div class="form-group row">
              <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Taking pills on ibiza</label>
              <div class="col-sm-8">
                <select class="form-control">
                  <option>10</option>
                  <option>15</option>
                  <option>20</option>
                  <option>25</option>
                  <option>911</option>
                </select>
              </div>
            </div>

          </form>

          <!-- Buttons row -->
          <div class="row" align="center">
            <button type="button" name="button" class="btn1 shadow" id="quest-edit-btn" onclick="quest()">Accept</button>
            <button type="button" name="button" class="btn1 shadow" id="quest-edit-btn" onclick="quest()">Cancel</button>
          </div>
        </div>
