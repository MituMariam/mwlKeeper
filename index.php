<?php 
$page = 'index';
include "header.php"; ?>

<main class="main_content">
<!--
    <div class="text_wrapper">
       <h3>Dashboard</h3>
   
    </div>
-->
    
      <div class="container-fluid p-4">
       <div class="row">
           <div class="col-md-3">
               <div class="total_box card">
                   <h4>মোট গ্রাহক সংখ্যা</h4>
               </div>
           </div>
             <div class="col-md-3">
               <div class="total_box card">
                   <h4>দৈনিক বুকিং  </h4>
               </div>
           </div>
             <div class="col-md-3">
               <div class="total_box card">
                   <h4>দৈনিক সংরক্ষণ</h4>
               </div>
           </div>
             <div class="col-md-3">
               <div class="total_box card">
                   <h4>দৈনিক ডেলিভারি</h4>
               </div>
           </div>
       </div>
          <div class="row">
           <div class="col-md-3">
               <div class="total_box card">
                   <h4>বুকিং টাকার পরিমাণ</h4>
               </div>
           </div>
             <div class="col-md-3">
               <div class="total_box card">
                   <h4>মোট বস্তার পরিমাণ</h4>
               </div>
           </div>
           
       </div> 
    </div>
</main>   
 
<?php include "footer.php"; ?>