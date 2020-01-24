
<?php require_once "header.php";
?> 
    <div class="body" style="background-color:black;">
        <div class="row">
            <div class="col-6 col-md-1"></div>
            <div class="col-6 col-md-6" style = "background-color:black;color:white; margin:60px;height:500px;">
                    <!-- form work -->
                <div class="form" style="margin-left:30px;">
                    <form action="insert.php" method="post">
                        <h1 class="text" style ="color:black;margin-top:20px;text-align:center;color:white;"><i><span style="color:blue;">CREATE</span><span style="color:smoke;"> ACCOUNT<span></i></h1><hr>
                        <label style="font-size:18px;color:blue;"><b>First Name</b></label>
                        <label style="margin-left:210px;font-size:18px;color:blue;"><b>Last Name</b></label>
                        <div>
                            <input style="padding-right:60px;" type = "text" name = "fname" placeholder = "Your firstName">
                            <input style="margin-left:20px;padding-right:80px;" type = "text" name = "lname" placeholder = "Your lastName">
                        </div><br>
                            <label style="font-size:18px;color:blue;"><b>E-mail</b></label>
                            <label style="margin-left:245px;font-size:18px;color:blue;"><b>phonenumber</b></label>
                        <div>
                            <input style="padding-right:60px;" type = "email" name = "email" id = "exampleInputEmail1" aria-describedby = "emailHelp" placeholder="Enter E-mail">
                            <input style="margin-left:20px;padding-right:80px;" type = "number" name = "phone" placeholder = "Your phonenumber">
                        </div><br>
                            <label style="font-size:18px;color:blue;"><b>ID number</b></label>
                            <label style="margin-left:210px;font-size:18px;color:blue;"><b>password</b></label>
                        <div>
                            <input style="padding-right:60px;" type = "id" name = "idnumber"  placeholder="id number">
                            <input style="margin-left:20px;padding-right:80px;" type = "password" name = "password" placeholder = "create password">
                        </div><br>
                        <label style="font-size:18px;color:blue;"><b>Country</b></label>
                        <label style="margin-left:230px;font-size:18px;color:blue;"><b>retype password</b></label>
                        <div>
                            <select style="margin-left:2px;padding-right:170px;font-size:18px;height:30px;"name="country">
                                <option>----</option>
                                <option>Kenya</option>
                                <option>Rwanda</option>
                                <option>Uganda</option>
                                <option>Tanzania</option>
                            </select>
                            <input style="margin-left:20px;padding-right:80px;" type = "password" name = "password2" placeholder = "retype password">
                        </div><br>
                        <button  type = "submit" name = "submit" class = "btn btn-light" style = "width: 570px;margin-left:2px;font-size:16px;color:black;"><b>sign up</b></button>
                    </form>
                </div>
            </div>
            <div class="col col-md-3">
                <address style="margin-left:50px;">
                    <h1 style="margin-top:170px;color:blue;"><i>ADDRESS</h1>
                    <h3 style="color:white;">HEAD OFFICE</h3>
                    <h4 style="margin-left:-30px;color:white;font-size:20px;">305, Afya Center Business,</h4>
                    <h5 style="margin-left:25px;color:white;font-size:20px;">P.O.Box 24078,</h5>
                    <h5 style="margin-left:45px;color:white;font-size:20px;">Nairobi,</i></h5>


                </address>
            </div>
        </div>
    </div>
 
<?php require_once "footer.php"?>