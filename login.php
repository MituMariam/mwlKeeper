<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <title>ACCKEEP</title>
    <!--=== Bootstrap Css ===-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <!--=== Data Table Plugin Css ===-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!--=== Custom Css ===-->
    <link rel="stylesheet" href="style.css" />

</head>

<body class="form_bg">

<!-- Login Form-->

    <div class="form_box">

        <form id="" class="login-form" method="post">
            <div class="row">
                <div id="msg" class="col-xs-12 col-sm-12 col-md-12">

                </div>
            </div>
            <div class="form_logo text-center mb-4">
               <img src="img/logo.png" alt=""> 
            </div>
            <div class="form-group">
                <label class="control-label">ব্যবহারকারীর নাম</label>
                <input class="form-control" type="text" placeholder="Username" name="nmae" id="name" required>
            </div>
            <div class="form-group">
                <label>ব্যবহারকারীর ধরণ:</label>
                <select class="form-control" id="user_cat">
                    <option>User 1</option>
                    <option>User 2</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label">পাসওয়ারড</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        পাসওয়ারড মনে রাখুন
                    </label> <span class="float-right"> <a href="">পাসওয়ারড ভুলে গিয়েছেন? </a></span>
                </div>
            </div>
            <button class="btn btn-primary">প্রবেশ করুন</button>
        </form>
    </div>


    <!--=== Main Jquery ===-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!--=== Datatable Plugin js ===-->

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <!--=== Bootstrap plugin js ===-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <script src="js/custom_script.js"></script>

</body>

</html>