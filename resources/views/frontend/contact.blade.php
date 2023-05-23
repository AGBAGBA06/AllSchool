@include('include/header')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Contactez nous</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      
      <div class="container ml-4">
          <div class="row">
            <div class="col-lg-3 col-md-4 mt-4 ">
                <div class="info">
                  <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>A108 jou, Togo, Tosti</p>
                  </div>
                </div>
            </div>
              <div class="col-lg-3 col-md-4 mt-4">
                <div class="info">
                  <div class="col-4 email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>info@example.com</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 mt-4">
                <div class="info">
                  <div class=" col-4 phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>+2289999999999</p>
                  </div>
                </div>
              </div>
            </div>
          </div> <br><br>
          <h1>{{ $data['subject'] }}</h1>
    <p>{{ $data['body'] }}</p>
          <div class="row ml-4">
            <div class="col-lg-6 pt-4 pt-lg-0 order-1 order-lg-2 content">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
              
            </div>
            <div class="col-lg-6 order-2 order-lg-1">
              <img src="assets/img/contact.jpg" class="img-fluid" alt="">
            </div>
          </div>
  
<br><br>
        </div>
      </div>
    </section><!-- End Contact Section -->
    <div class="mapouter"><div class="gmap_canvas"><iframe width="1200" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=togo%20tosti&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href=""></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1200px;}</style></div></div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('include/footer')