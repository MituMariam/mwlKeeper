<?php 
$page = 'delivery';
include "header.php"; ?>
<main class="main_content">
  <div class="container-fluid p-4">
    <div class="row">
      <div class="col-md-5">
        <!--  <h3>ডেলিভারি রশিদ</h3>-->
        <form action="#" class="form">
          <div class="form-group">
            <label>রশিদ নং:</label>
            <input type="text" class="form-control" id="paper_id" name="paper_id" placeholder="">
          </div>
          <div class="form-group">
            <label> পন্যের ধরণ:</label>
            <input type="text" class="form-control" id="product_cat" name="product_cat" placeholder="">
          </div>
          <div class="form-group">
            <label> বস্তার সংখ্যা :</label>
            <input type="text" class="form-control" id="bag_quantity" name="bag_quantity" placeholder="">
          </div>
          <div class="form-group">
            <label> টাকা জমার পরিমাণ:</label>
            <input type="text" class="form-control" id="money_quantity" name="money_quantity" placeholder="">
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




            </tbody>
            <tfoot>
              <tr>
                <th>ক্রমিক নং</th>
                <th>পন্যের নাম</th>
                <th>পন্যের পরিমাণ</th>

              </tr>
            </tfoot>
          </table>
        </div>


      </div>
    </div>
  </div>
</main>
<?php include "footer.php"; ?>