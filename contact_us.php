<?php
include 'connect.php';

//define vars
//$facebook = "";
//$whatsapp = "";
//$instagram = "";
//$linkedin = "";
//$twitter = "";
//$instagram = "";
//$email = "";
//
//$query4 = "SELECT facebook , whatsapp , instagram , linkedin , twitter , email FROM `contact_us` WHERE id=1 ";
//$result4 = mysqli_query($conn,$query4);
//$row4 = mysqli_fetch_assoc($result4);
//$facebook = $row4['facebook'];
//$whatsapp = $row4['whatsapp'];
//$instagram = $row4['instagram'];
//$linkedin = $row4['linkedin'];
//$twitter = $row4['twitter'];
//$instagram = $row4['instagram'];
//$email = $row4['email'];



?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Untitled Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGHTLESS</title>
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="css/stylee2.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
  <header>
    <div class="banner">

        <div class="content" >
            <div class="navv">
                <div class="logo">
                    <h1><span>SIGHTLESS</span></h1>
                </div>
                <div class="navv-items">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="contact_us.php" class="active">CONTACT US</a></li>
                        <li id="sign"><a href="login.php">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
  </header>
  <div>

          <div class="container">

              <div class="contact-parent">

                 <div class="contact-child child1">
                    <p>
                       <i class="fas fa-map-marker-alt"></i> Address <br />
                       <span> YARMOUK
                       <br />
                       Irbid,Jordan
                       </span>
                    </p>
                    <p>
                       <i class="fas fa-phone-alt"></i> Let's Help <br />
                       <span> 0796277906</span><br>
                       <span> 0788498740</span>
                    </p>
                    <p>
                       <i class=" far fa-envelope"></i> General Support <br />
                       <span>2018902079@ses.yu.edu.jo</span><br />
                       <span>2018902163@ses.yu.edu.jo</span>
                    </p>
                 </div>
                  <form action="sessions/contact.php" method="post">
                    <div class="contact-child child2">
                      <div class="inside-contact">
                        <h2>Contact Us</h2>
                        <h3>
                            <span id="confirm">
                        </h3>
                        <p>Name *</p>
                        <input id="txt_name" type="text" name="name" Required="required">
                        <p>Email *</p>
                        <input id="txt_email" type="text" name="email" Required="required">
                        <p>Phone *</p>
                        <input id="txt_phone" type="text" name="phone_number" Required="required">
                        <p>Message *</p>
                        <textarea id="txt_message" name="message" rows="4" cols="20" Required="required" ></textarea>
                        <input type="submit" name="sent" >
                      </div>
                    </div>
                  </form>
              </div>

           </div>

         </div>
         <footer class="footer2">
         <div class="footer-wrap">
         <div class="container first_class">
             <div class="row">
               <div class="col-md-4 col-sm-6">
                 <h3>BE THE FIRST TO KNOW</h3>
                 <p>Get all the latest information on  Triedge Services, Events, Jobs
                   and Fairs. Sign up for our newsletter today.</p>
               </div>
               <div class="col-md-4 col-sm-6">
               <form class="newsletter">
                  <input type="text" placeholder="Email Address">
                  <button class="newsletter_submit_btn" type="submit"><i class="fa fa-paper-plane"></i></button>
               </form>

               </div>
               <div class="col-md-4 col-sm-6">
               <div class="col-md-12">
                 <div class="standard_social_links">
               <div>
                 <li class="round-btn btn-facebook"><a href="<?php echo$facebook;?>" target="_blank"><i class="fab fa-facebook-f"></i></a>

                 </li>
                 <li class="round-btn btn-linkedin"><a href="<?php echo $linkedin;?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>

                 </li>
                 <li class="round-btn btn-twitter"><a href="<?php echo $twitter;?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>

                 </li>
                 <li class="round-btn btn-instagram"><a href="<?php echo $instagram;?>" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>

                 </li>
                 <li class="round-btn btn-whatsapp"><a href="<?php echo $whatsapp;?>" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>

                 </li>
                 <li class="round-btn btn-envelop"><a href="mailto: <?php echo $email;?>" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>

                 </li>
               </div>
             </div>
               </div>
                 <div class="clearfix"></div>
               <div class="col-md-12"><h3 style="text-align: right;">Stay Connected</h3></div>
               </div>
             </div>
         </div>


           <div class="row">

             <div class="container-fluid">
             <div class="copyright"> Copyright 2022 | All Rights Reserved by Passionate Sightless  Assistant.</div>
             </div>

           </div>
         </div>

         </footer>

       <!--footer end-->
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

       <!-- Font Awesome 5 links-->
       <script src="https://kit.fontawesome.com/fddf5c0916.js" crossorigin="anonymous"></script>
</body>
</html>
