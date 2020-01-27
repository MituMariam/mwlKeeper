<?php 
$page = 'booking';
include "header.php"; ?>
<main class="main_content">
  <!--  <h3>বুকিং রশিদ</h3>-->
 <div class="container">
   <div class="row">
          <div class="col-sm-12 text-center mb-5">
          <div class="table_header">
                <h3 class="p-3">বুকিং রশিদ</h3>
          </div>
     
   </div> 
   </div>
    <div class="row">  
    <div class="col-sm-6">
        <div class="info booking_info">
           <table>
               <tr>
                   <th>বুকিং নং:</th>
                   <td></td>
               </tr>
                <tr>
                   <th>বুকিং তারিখ:</th>
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
   <div class="row mt-3">
       <div class="col-sm-12">
          <table class="table booking_tbl" width="100%" >
                  <thead class="table-dark p-2">
                      <tr>
                          <th>বিবরণ</th>
                          <th>সংখ্যা</th>
                          <th>দর</th>
                          <th>টাকা</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                      </tr>
                      <tr>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                          <td>a</td>
                      </tr>
                  </tbody>
                  <tfoot>
                      <tr>
                        <th colspan="3">
                            <div class="float-right">
                                মোট:
                            </div>
                        </th>  
                        <th> 10000 </th>  
                    
                        
                      </tr>
                       <tr>
                       
                        
                          <th colspan="3">
                            <div class="float-right">
                               অগ্রিম:
                            </div>
                        </th>
                        <th> 5774 </th>  
                      </tr>
                       <tr> 
                        <th colspan="3">
                            <div class="float-right">
                               বকেয়া:
                            </div>
                        </th>
                        <th> 4000 </th>  
                      </tr>
                  </tfoot>
                  
          </table>  
       </div>
   </div>
   
   <div class="row">
       <div class="col-sm-6">
           <div class="user_sign">
               গ্রাহকের সাক্ষর
           </div>
           </div>
            <div class="col-sm-6">
           <div class="user_sign float-right">
               কোল্ড স্টোর এর পক্ষে
           </div>
           </div>
       </div>
  </div>
  
 

</main>
<?php include "footer.php"; ?>