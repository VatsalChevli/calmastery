
<footer id="footer" class="footer-bg">
  <div class="top-footer">
    <div class="container">
      <div class="newsletter">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
            <p class="newsletter-title mb-0">Subscribe to Our NewsLetter</p>
          </div>
          <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 mt-md-0 mt-3">
            <div class="news-input p-2">
              <form class="row w-100 m-0 align-items-center">
                <div class="form-group col-lg-8 col-md-7 my-2 p-0">
                  <input type="email" class="form-control" name="email" id="mail" placeholder="Enter email">
                </div>
                <div class="form-group col-lg-4 col-md-5 my-2 p-0 text-center">
                  <button type="submit" class="btn btn-primary">Subscribe Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="row mt-5 align-items-center">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="d-flex flex-wrap justify-content-sm-between justify-content-center">
            <a class="quick-links" href="index.php">Home</a>
            <a class="quick-links" href="">Book Session</a>
            <a class="quick-links" href="">Blogs </a>
            <a class="quick-links" href="">About Us</a>
            <a class="quick-links" href="">Contact Us</a>
          </div>
        </div>
      
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="d-flex flex-wrap justify-content-md-end justify-content-center">
            <a class="social-links" href="index.php"><i class="fa fa-instagram"></i></a>
            <a class="social-links" href=""><i class="fa fa-facebook"></i></a>
            <a class="social-links" href=""><i class="fa fa-youtube"></i></a>
            <a class="social-links" href=""><i class="fa fa-twitter"></i></a>
            <a class="social-links" href="https://wa.me/919512533363?text=Hello Calmastery!!" target="_blank"><i class="fa fa-whatsapp"></i></a>
          </div>
        </div>
      </div>

      <hr>

      <div class="row align-items-center">
        <div class="col-lg-2 col-md-2 col-sm-4 mt-3 text-center footer-logo-mob ">
          <img class="footer-logo" src="images/calmastery-logo.png" width="100%">
        </div>
        <div class="col-lg-5 col-md-5 col-sm-4 mt-3 text-md-left text-center">
          <p class="m-0 copyright">© <?php echo date("Y")?> Calmastery - All rights reserved.</p>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 mt-3 text-center footer-logo-web ">
          <img class="footer-logo" src="images/calmastery-logo.png" width="100%">
        </div>
        <div class="col-lg-5 col-md-5 col-sm-4 mt-3">
          <div class="d-flex flex-wrap justify-content-md-end justify-content-between">
            <a class="quick-links" href="index.php">Terms of Service</a>
            <a class="quick-links" href="">Privacy Policy</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p class="m-0">Designed by - <a href="https://www.linkedin.com/in/jayesh-chudasma-1b344b19a/">Jayesh</a> & <a href="https://www.linkedin.com/in/vatsal-chevli-670078211/">Vatsal</a></p>
  </div>
</footer> <!-- end footer -->


    <!-- end Footer Area
    ========================================== -->
    
<!-- Scroll to top Button -->
<button type="button" class="btn btn-info" id="btn-back-to-top">
  <i class="fa fa-arrow-up"></i>
</button>
    
    <!-- 
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script  src="plugins/google-map/gmap.js"></script>

    <!-- Form Validation -->
    <script src="plugins/form-validation/jquery.form.js"></script> 
    <script src="plugins/form-validation/jquery.validate.min.js"></script>
    
    <!-- Bootstrap4 -->
    <!-- <script src="plugins/bootstrap/js/bootstrap.min.js"></script> -->
    <script type="text/javascript">
      $(".question-wrapper").click( function () {
        var container = $(this).parents(".accordion");
        var answer = container.find(".answer-wrapper");
        var trigger = container.find(".material-icons.drop");
        var state = container.find(".question-wrapper");
        
        answer.animate({height: "toggle"}, 100);
        
        if (trigger.hasClass("icon-expend")) {
          trigger.removeClass("icon-expend");
          // state.removeClass("active");
        }
        else {
          trigger.addClass("icon-expend");
          // state.addClass("active");
        }
        
        if (container.hasClass("expanded")) {
          container.removeClass("expanded");
        }
        else {
          container.addClass("expanded");
        }
      });
    </script>
    <!-- Parallax -->
    <script src="plugins/parallax/jquery.parallax-1.1.3.js"></script>
    <!-- lightbox -->
    <script src="plugins/lightbox2/dist/js/lightbox.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="plugins/smooth-scroll/smooth-scroll.min.js"></script>
    
    <!-- Custom js -->
    <script src="js/script.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
$(document).ready(function(){

    $("#testi1").click(function(){
        $(".client-img").attr("src", "https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-02-306x306.png");
        $("#testi1").addClass("active");  
        $("#testi2").removeClass("active");  
        $("#testi3").removeClass("active"); 
    });

    $("#testi2").click(function(){
        $(".client-img").attr("src", "https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-01-179x179.png");
        $("#testi2").addClass("active");  
        $("#testi1").removeClass("active");  
        $("#testi3").removeClass("active"); 
    });

    $("#testi3").click(function(){
        $(".client-img").attr("src", "https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-03-179x179.png");
        $("#testi3").addClass("active");  
        $("#testi1").removeClass("active");  
        $("#testi2").removeClass("active"); 
    });

    
    var i = $(".carousel-item").index();
    var length = $(".carousel-item").length

    if(i>=3){
        i=0
    }
    $('.right').click(function(){
        i=i+1
        console.log(i)
        if(i==1){
            $(".client-img").attr("src", "https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-01-179x179.png");  
            $("#testi1").removeClass("active");  
            $("#testi2").addClass("active");  
        }
            
        if(i==2){
            $(".client-img").attr("src", "https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-03-179x179.png");
            $("#testi2").removeClass("active");  
            $("#testi3").addClass("active"); 
        }

        if(i>=3){
            i=0
            $(".client-img").attr("src", "https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-02-306x306.png");
            $("#testi3").removeClass("active");  
            $("#testi1").addClass("active"); 
            
        }

        // if($(".carousel-item").hasClass("active")){
        //     $(`#testi${i+1}`).attr("class", "active");
        //     console.log(`#testi${i+1}`) 
        // }
    })

    $('.left').click(function(){
        if(i<=0){
            i=3
        }
        i=i-1
        // alert(i);
        console.log(i)
        if(i==1){
            $(".client-img").attr("src", "https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-01-179x179.png"); 
            $("#testi2").addClass("active");  
            $("#testi1").removeClass("active");  
            $("#testi3").removeClass("active");    
        }
            
        if(i==2){
            $(".client-img").attr("src", "https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-03-179x179.png");  
            $("#testi3").addClass("active");  
            $("#testi1").removeClass("active");  
            $("#testi2").removeClass("active");  
        }

        if(i<=0){
            $(".client-img").attr("src", "https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-02-306x306.png");   
            $("#testi1").addClass("active");  
            $("#testi2").removeClass("active");  
            $("#testi3").removeClass("active"); 
        }
        
    })
});

$(document).ready(function(){
    $(".slider .swiper-pagination span").each(function(i){
        $(this).text(i+1).prepend("0");
    });
});
</script>

  </body>
  </html>