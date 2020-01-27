<?php 
$page = 'user_list';
include "header.php"; ?>
<main class="main_content">
  <div class="container-fluid p-4">
    <div class="row">
      <div class="col-md-5">
        <!--  <h3>ডেলিভারি রশিদ</h3>-->
        <form action="#" class="form">
          <div class="form-group">
            <label>গ্রাহকের নাম:</label>
            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="">
          </div>
          <div class="form-group">
            <label>পিতার নাম:</label>
            <input type="text" class="form-control" id="father_name" name="father_name" placeholder="">
          </div>
          <div class="form-group">
            <label>মোবাইল নাম্বার::</label>
            <input type="text" class="form-control" id="phn" name="phn" placeholder="">
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>গ্রাম:</label>
                <input type="text" class="form-control" id="vill" name="vill" placeholder="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>থানা:</label>
                <input type="text" class="form-control" id="ps" name="ps" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>ডাকঘর:</label>
                <input type="text" class="form-control" id="po" name="po" placeholder="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>জেলা:</label>
                <input type="text" class="form-control" id="zilla" name="zilla" placeholder="">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary"> তথ্য জমা করুন</button>
        </form>
      </div>
      <div class="col-md-7">
        <div class="tbl_wrapper">
          <table id="custom_table" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>ক্রমিক নং</th>
                <th>পন্যের নাম</th>
                <th>পন্যের পরিমাণ</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>


              <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>

              </tr>
              <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>

              </tr>
              <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>

              </tr>
              <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>

              </tr>
              <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>

              </tr>
              <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>

              </tr>

            </tbody>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>

              </tr>
            </tfoot>
          </table>
        </div>



      </div>
    </div>






  </div>

</main>
<?php include "footer.php"; ?>