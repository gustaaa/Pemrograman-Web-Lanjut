@extends('layouts.app')
@section('content')
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>

     <div class="wrapper">

      <!-- end loader --> 
      <div class="sidebar">
         <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">
                
                <li>
                    <a href="/home">Home</a>
                </li>
                <li>
                    <a href="/about">About</a>
                </li>
                <li>
                    <a href="/product">Product</a>
                </li>
                <li>
                    <a href="/blog">Blog</a>
                </li>
                <li class="active">
                    <a href="/contact">Contact Us</a>
                </li>
            </ul>

        </nav>
      </div>
     
     <div id="content">
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
           
         <div class="container-fluid">
             
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="images/logo.jpg" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="right_header_info">
                     <ul>
                        <li><a href="#"><img style="margin-right: 15px;" src="icon/1.png" alt="#" /></a></li>
                        <li class="tytyu" ><a href="#"><img style="margin-right: 15px;" src="icon/2.png" alt="#" /></a></li>
                        <li><a href="#"><img style="margin-right: 15px;" src="icon/3.png" alt="#" /></a></li>

                         <li>
                           <button type="button" id="sidebarCollapse">
                              <img src="images/menu_icon.png" alt="#" />
                           </button>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
            </div>
        
         <!-- end header inner --> 
      </header>
      <!-- end header -->
      
<div class="contactus">
   <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>Contact Us</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>




      <!-- map -->
   <div class="contact">
         <div class="container-fluid padddd">
           
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                <div class="map_section">
                     <div id="map">
                     </div>
                   </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                <form class="main_form">
                   <div class="row">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Name" type="text" name="Name">
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Email" type="text" name="Email">
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Phone" type="text" name="Phone">
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <button class="send">Send</button>
                      </div>
                   </div>
                </form>
               </div> 
            </div>
         </div>
      </div>
      <!-- end map --> 
      <!--  footer --> 
      <footer>
         <div class="footer">
            <div class="container-fluid">
               <div class="border1">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  
                    <img class="logo1" src="images/logo1.jpg"/>
                  </div>
            
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  
                    
                     <ul class="lik">
                        <li> <a href="/home">Home</a></li>
                         <li> <a href="/about">About</a></li>
                         <li> <a href="/product">Product</a></li>
                         <li> <a href="/blog">Blog</a></li>
                        <li> <a href="/contact">Contact us</a></li>
                     </ul>
                  </div>
            
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                     <ul class="sociel">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                  </div>
            </div>
            
                
                
          </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="new">
                     <h3>Newsletter</h3>
                     <form class="newtetter">
                        <input class="tetter" placeholder="Your email" type="text" name="Your email">
                        <button class="submit">Subscribe</button>
                     </form>
                  </div>
               </div>
                <div class="col-md-12">
                  <div class="newtt">
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point<br> of using Lorem I</p>
                  </div>
               </div>
            </div>

         </div>
            <div class="copyright">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
         </div>
    
      </footer>
      <!-- end footer -->
   </div>

</div>

   <div class="overlay"></div>

      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
      </script>


      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 


   <script>

      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 40.645037, lng: -73.880224},
          });

        var image = 'images/maps-and-flags.png';
        var beachMarker = new google.maps.Marker({
          position: {lat: 40.645037, lng: -73.880224},
          map: map,
          icon: image
        });
      }
    </script>
   <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->

   </body>
</html>