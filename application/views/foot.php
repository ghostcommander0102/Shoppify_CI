<footer>
      <div class="container">
          <div class="row">

              <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                  <div class="row">

                      <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                          <div class="other-lisnks-are-footer">
                              <h5> Custom Gaming Computers </h5>
                              <ul class="footer-listing-4">
                                  <li> <a href="#"> About Us </a> </li>
                                  <li> <a href="#"> Get in Touch </a> </li>
                                  <li> <a href="#"> Products </a> </li>
                                  <li> <a href="#"> Reviews </a> </li>
                                  <li> <a href="faq.php"> FAQs </a> </li>
                                  <li> <a href="#"> Careers </a> </li>
                              </ul>
                          </div>
                      </div>

                      <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                          <div class="other-lisnks-are-footer">
                              <h5> My Account </h5>
                              <ul class="footer-listing-4">
                                  <li> <a href="login.php"> Sign In </a> </li>
                                  <li> <a href="#"> Account Settings </a> </li>
                                  <li> <a href="#"> Order Status </a> </li>
                              </ul>
                          </div>
                      </div>

                      <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                          <div class="other-lisnks-are-footer">
                              <h5> Need Help? </h5>
                              <ul class="footer-listing-4">
                                  <li> <a href="#"> Sales Assistance </a> </li>
                                  <li> <a href="#"> Payment Methods </a> </li>
                                  <li> <a href="#"> Customer Service </a> </li>
                                  <li> <a href="#"> Technical Support </a> </li>
                                  <li> <a href="#"> Warranty </a> </li>
                                  <li> <a href="#"> Refunds & Exchanges </a> </li>
                              </ul>
                          </div>
                      </div>

                  </div>
              </div>

              <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <div class="map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3134.880134364366!2d-85.59648378466969!3d38.21267947968213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88690a84c94c6e1d%3A0xbf189cf7b43e8dbe!2sS%20Hurstbourne%20Pkwy%2C%20St%20Regis%20Park%2C%20KY%2040220%2C%20USA!5e0!3m2!1sen!2sin!4v1596853197464!5m2!1sen!2sin" id="map54" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                      <p> © 2009 S Hurstbourne Pkwy,Louisville, Jefferson County 40220,USA</p>
                  </div>
              </div>

          </div>
      </div>
  </footer>    <div id="mySidenav-Menu" class="sidenav-menu">

      <a href="javascript:void(0)" class="closebtn-menu" onclick="closeNavMenu()">&times;</a>

      <div class="menulist-mobile54">
          <img src="<?php echo base_url()?>../assets/img/logo.png" class="mobile-logo1" alt="1">
          <ul class="mobile-ul-listing-section">
              <li> <a href="product.php"> Products </a> </li>
              <li> <a href="limited_edition.php"> Limited Edition </a> </li>
              <li> <a href="finance.php"> Financing </a> </li>
              <li> <a href="#"> Support </a> </li>
              <li><a href='login.php' ><img src='<?php echo base_url()?>../assets/img/profile-icon.png' class='mernulist1-profile' alt='CGC'></a></li>				
              <li> <a href="#">  <span> Language </span> </a> </li>
          </ul>
      </div>
    
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- slider js -->
<script src="<?php echo base_url()?>../assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
<script>
  function openNavMenu() {
    document.getElementById("mySidenav-Menu").style.width = "100%";
  }
  
  function closeNavMenu() {
    document.getElementById("mySidenav-Menu").style.width = "0";
  }
</script>

<script>
    $('.regular').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  </script>

</body>
</html>