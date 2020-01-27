<?php 
$page = 'daily_calc';
include "header.php"; ?>
<main class="main_content">
  <div class="container-fluid p-4">
    <div class="row">
      <div class="col-md-7">
        <!--  <h3> দৈনিক হিসাব</h3>-->
        <form action="#" class="form">
          <div class="form-group">
            <label> নাম:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="">
          </div>
          <div class="form-group">
            <label> টাকার পরিমাণ:</label>
            <input type="text" class="form-control" id="money_quantity" name="money_quantity" placeholder="">
          </div>
          <div class="form-group">
            <label>বিবরণ</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary"> তথ্য জমা করুন</button>
        </form>
      </div>

    </div>
  </div>

</main>
<?php include "footer.php"; ?>