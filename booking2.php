<?php 
$page = 'booking';
include "header.php"; ?>
<main class="main_content">
  <!--  <h3>বুকিং রশিদ</h3>-->
  <div class="container-fluid p-4">
    <div class="row">
      <div class="col-md-5">
       
         <form action="#" class="form">
          <div class="form-group">
            <label>পন্যের নাম:</label>
            <input type="text" class="form-control" placeholder="">
          </div>
          <div class="form-group">
            <label>পন্যের বিবরণ </label>
            <input type="text" class="form-control" placeholder="">
          </div>
          <div class="form-group">
            <label>পন্যের ধরণ </label>
            <select class="form-control" id="sel1">
              <option>1</option>
              <option>2</option>
            </select>
          </div>
          <div class="form-group">
            <label>বস্তার পরিমাণঃ</label>
            <input type="text" class="form-control" placeholder="">
          </div>
          <div class="form-group">
            <label>বস্তা প্রতি ভাড়াঃ</label>
            <input type="text" class="form-control" placeholder="">
          </div>
          <div class="form-group">
            <label> অগ্রীম টাকার পরিমাণঃ </label>
            <input type="text" class="form-control" placeholder="">
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
  
  
 <div class="container-fluid p-4">
    <div class="row">
    <div class="col-sm-6">
        <div class="info booking_info">
           <table>
               <tr>
                   <th>বুকিং নং:</th>
                   <td></td>
               </tr>
                <tr>
                   <th>বুকিং তারিখ::</th>
                   <td></td>
               </tr>
               <tr>
                   <th>পণ্যের নাম:</th>
                   <td></td>
               </tr>
           </table>
            
        </div>
    </div>
    
     <div class="col-sm-6">
        <div class="info booking_info">
           <table>
               <tr>
                   <th>গ্রাহকের নাম:</th>
                   <td></td>
               </tr>
                <tr>
                   <th>পিতার নাম:</th>
                   <td></td>
               </tr>
               <tr>
                   <th>ঠিকানা:</th>
                   <td></td>
               </tr>
           </table>
            
        </div>
    </div>
   </div>
  </div>

</main>
<?php include "footer.php"; ?>