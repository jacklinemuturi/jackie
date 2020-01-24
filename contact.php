<?php
    require_once "header.php";
    require_once "fetch.php";
?>  
<div style="background-color: #4d4d4d;"> 
    <h1 style="margin-left:160px;margin-top:30px;color:white;"><b>GET IN <span style="color:blue;">TOUCH</b></span></h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 col-md-6">        
                <form  action="inser.php" method="POST">

                <!--Grid row-->
                    <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input style="color:white;" type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                        
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input style="color:white;" type="text" id="email" name="email" class="form-control" placeholder="Your Email">
                        
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input style="color:white;" type="text" id="subject" name="subject" class="form-control" placeholder="Your Subject">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea style="color:white;" type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your Message"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <button  type = "submit" name = "submit" class = "btn btn-light" style = "width: 570px;margin-left:2px;font-size:16px;color:black;"><b>submit</b></button>
            </form>
        </div>
            <div class="colum" style="font-size:48px;margin-left:100px;text-align:center;color:white;"><b>SMALL <br>ENOUGH TO CARE, 
                <span style="color:blue;">BIG <br style="">ENOUGH TO PERFORM</span></b></div>
            
            </div>
</div>
    
    <div class="row" style="color:white;">
        <div class="col-sm-4 col-md-4" style="margin-left:45px;"> 
            <h1 style="margin-left:56px;color:black;font-size:40px;"><b>CONTACT</b></h1>
            <h5 style="color:blue;" ><b>Address:</b></h5>
                <address style="margin-left:30px;" >       
                    <p>Head Office</p>
                    <p>305, Afya Center Business,</p>
                    <p>P.O.Box 24078,</p>
                    <p>+25471 433 969</p>
                    <a href="logistics@gmail.com">logistics@gmail.com</a>
                </address>    
        </div>
            <div class="col-sm-4 col-md-4" style="margin:40px;"> 
                <h5 style="margin-left:35px;color:blue;"><b>Address:</b></h5>
                <address style="margin-left:60px;" >       
                    <p>Head Office</p>
                    <p>305, Afya Center Business,</p>
                    <p>P.O.Box 24078,</p>
                    <p>+25471 433 969</p>
                    <a href="logistics@gmail.com">logistics@gmail.com</a>
                </address>
            </div>
    </div>
</div><hr>
     <div class="column">
     <div class="mapouter"><div class="gmap_canvas"><iframe width="1200" height="453" 
     id="gmap_canvas" src="https://maps.google.com/maps?q=afya%20center&t=&z=19&ie=UTF8&iwloc
     =&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
     <a href="https://www.bitgeeks.net">bitgeeks</a></div><style>.mapouter{position:relative;
     text-align:right;height:453px;width:1200px;}.gmap_canvas {overflow:hidden;background:none
     !important;height:453px;width:1220px;}</style></div><hr>

<?php require_once "footer.php"?>
















