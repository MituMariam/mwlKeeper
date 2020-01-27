<?php 
$page = 'add_product';
include "header.php"; ?>
<main class="main_content">
  <div class="container-fluid p-4">
    <div class="row">
      <div class="col-md-5">
        <!--  <h3>পণ্য যোগ করুন</h3>-->
        <form action="#" class="form">
          <div class="form-group">
            <label>পন্যের ধরণ:</label>
            <input type="text" class="form-control" id="product_cat" name="product_cat" placeholder="">
          </div>
          <button type="submit" class="btn btn-primary"> তথ্য জমা করুন</button>
        </form>
      </div>

      <div class="col-md-7">
        <!--
            <table class="table table-bordered table-sm">
              <thead class="table-dark">
                <tr>
                  <th>ক্রমিক নং</th>
                  <th>পন্যের নাম</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>John</td>
                  <td>Doe</td>

                </tr>
                <tr>
                  <td>Mary</td>
                  <td>Moe</td>

                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>

                </tr>
              </tbody>
            </table>
-->

        <div class="tbl_wrapper">
          <table id="custom_table" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>ক্রমিক নং</th>
                <th>পন্যের নাম</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>


              <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>


              </tr>
              <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>


              </tr>

            </tbody>
            <tfoot>
              <tr>
                <th>ক্রমিক নং</th>
                <th>পন্যের নাম</th>

              </tr>
            </tfoot>
          </table>

        </div>


      </div>
    </div>
  </div>

</main>
<?php include "footer.php"; ?>