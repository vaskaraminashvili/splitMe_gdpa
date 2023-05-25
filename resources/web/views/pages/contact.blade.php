<x-web::layouts.secondary>
  <div class="contact">
    <!-- Contact Area section -->
    <section class="contact-area-02">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 contact-info">
            <div class="col-sm-12 contact-title">
              <h2>Contact Info</h2>
              <p class="content-sub_p">Welcome to our Website. We are glad to have you around.</p>
            </div>
            <div class="col-sm-12 contact-box">
              <div class="row">
                <div class="col-sm-12 col-md-6 single-address-box">
                  <div class="single-address">
                    <i class="fa fa-phone"></i>
                    <h4>Phone</h4>
                    <p>+7 (800) 123 45 69</p>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6  single-address-box">
                  <div class="single-address">
                    <i class="fa fa-envelope"></i>
                    <h4>Email</h4>
                    <p>hello@education.com</p>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 single-address-box">
                  <div class="single-address">
                    <i class="fa fa-map-marker"></i>
                    <h4>Location:</h4>
                    <p>3481 Melrose Place, Beverly Hills CA 90210, US</p>
                  </div>
                </div>
                <div class="col-sm-12 single-address-box">
                  <ul class="list-unstyled">
                    <li><a href=""><i class="fa fa-facebook teacher-icon"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter teacher-icon"></i></a></li>
                    <li><a href=""><i class="fa fa-google-plus teacher-icon"></i></a></li>
                    <li><a href=""><i class="fa fa-linkedin teacher-icon"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram teacher-icon"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6  col-sm-offset-1 contact-form">
            <div class="row">
              <div class="col-sm-12 contact-title-btm">
                <h2>Send A Message</h2>
                <p class="content-sub_p">Welcome to our Website. We are glad to have you around.</p>
              </div>
            </div>
            <div class="input-contact-form">


              <div>
                <form method="post" action="{{ route('sendEmail') }}" name="contactform">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject" name="subject">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <textarea class="form-control" rows="6" placeholder="Message" name="comments"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="full-width">
                        <button type="submit">Submit</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>


            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ./ End Contact Area section -->

  </div>
</x-web::layouts.secondary>
