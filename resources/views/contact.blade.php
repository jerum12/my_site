@extends("layouts.master")

@section("title")
Contact Me - Jerum Galang
@endsection


@section("content")
<div class="art-content">
  <!-- curtain -->
  <div class="art-curtain"></div>

  <!-- top background -->
  <div class="art-top-bg" style="background-image: url(img/bg.jpg)">
    <!-- overlay -->
    <div class="art-top-bg-overlay"></div>
    <!-- overlay end -->
  </div>
  <!-- top background end -->

  <!-- swup container -->
  <div class="transition-fade" id="swup">
    <!-- scroll frame -->
    <div id="scrollbar" class="art-scroll-frame">
      <!-- container -->
      <div class="container-fluid">
        <!-- row -->
        <div class="row p-30-0">
          <!-- col -->
          <div class="col-lg-12">
            <!-- section title -->
            <div class="art-section-title">
              <!-- title frame -->
              <div class="art-title-frame">
                <!-- title -->
                <h3>Contact Info</h3>
              </div>
              <!-- title frame end -->
            </div>
            <!-- section title end -->
          </div>
          <!-- col end -->
          <!-- col -->
          <div class="col-12 col-xl-6">
            <!-- contact card -->
            <div class="art-a art-card">
              <div class="art-table p-15-15">
                <ul>
                  <li>
                    <h6>#:</h6>
                    <span>14-C</span>
                  </li>

                  <li>
                    <h6>Street:</h6>
                    <span>Nazarene Street</span>
                  </li>

                  <li>
                    <h6>Barangay:</h6>
                    <span>Nangka</span>
                  </li>

                  <li>
                    <h6>City:</h6>
                    <span>Marikina</span>
                  </li>

                  <li>
                    <h6>Country:</h6>
                    <span>Philippines</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- contact card end -->
          </div>
          <!-- col end -->
          <!-- col -->
          <div class="col-12 col-xl-6">
            <!-- contact card -->
            <div class="art-a art-card">
              <div class="art-table p-15-15">
                <ul>
                  <li>
                    <h6>Email:</h6>
                    <span><a data-no-swup href="mailto:jerumpgalang@gmail.com" target="_blank">jerumpgalang@gmail.com</a></span>
                  </li>
                  <li>
                    <h6>Facebook:</h6>
                    <span><a data-no-swup href="https://www.facebook.com/jerumpgalang12/" target="_blank">@jerum12</a></span>
                  </li>
                  <li>
                    <h6>Github:</h6>
                    <span><a data-no-swup href="https://github.com/jerum12" target="_blank">@jerum12</i></a></span>
                  </li>
                  <li>
                    <h6>LinkedIn:</h6>
                    <span><a data-no-swup href="https://www.linkedin.com/in/jerum-p-galang" target="_blank">jerum-p-galang</a></span>
                  </li>
                  <li>
                    <h6>Mobile #:</h6>
                    <span><a data-no-swup href="tel:+639154953603">+63 915 495 3603</a></span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- contact card end -->
          </div>
          <!-- col end -->

          <div class="col-lg-12">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.7553999781608!2d121.11375501486211!3d14.669817879309473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b9865d377679%3A0x9710baa03fac8c19!2s14-c%20Nazarene%20St%2C%20Nangka%2C%20Marikina%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1679555263925!5m2!1sen!2sph"
              width="100%"
              height="450"
              style="border: 0; filter: invert(100%) contrast(90%)"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>

          <!-- col -->
          <div class="col-lg-12">
            <!-- section title -->
            <div class="art-section-title">
              <!-- title frame -->
              <div class="art-title-frame">
                <!-- title -->
                <h3>Get in touch</h3>
              </div>
              <!-- title frame end -->
            </div>
            <!-- section title end -->

            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif

            <!-- contact form frame -->
            <div class="art-a art-card">

              <form method="POST" action="{{ route('contact.store') }}" id="contactUSForm"  class="art-contact-form">
                {{ csrf_field() }}
                  
                <div class="row">
                    <div class="col-md-12">
                      <div class="art-form-field">
                        <!-- name input -->
                        <input
                          id="name"
                          name="name"
                          class="art-input"
                          type="text"
                          placeholder="Name"
                          required
                          value="{{ old('name') }}"
                        />
                        <!-- label -->
                        <label for="name"><i class="fas fa-user"></i></label>
                        @if ($errors->has('name'))
                          <span class="text-danger">{{ $errors->first('name') }}</span>
                      @endif
                      </div>

                    </div>
                    <div class="col-md-12">

                      <div class="art-form-field">
                        <!-- email input -->
                        <input
                          id="email"
                          name="email"
                          class="art-input"
                          type="email"
                          placeholder="Email"
                          required
                          value="{{ old('email') }}"
                        />
                        <!-- label -->
                        <label for="email"><i class="fas fa-at"></i></label>
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                      </div>

             
                    </div>
                    <div class="col-md-12">
                      <div class="art-form-field">
                        <!-- message textarea -->
                        <textarea
                          id="message"
                          name="message"
                          class="art-input"
                          placeholder="Message"
                          required
                        >{{ old('message') }}</textarea>
                        <!-- label -->
                        <label for="message"><i class="far fa-envelope"></i></label>
                        @if ($errors->has('message'))
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    @endif
                      </div>
                      
                    </div>
                </div>
                <div class="art-submit-frame">
                  <button class="art-btn art-btn-md art-submit" type="submit">
                    <span>Send message</span>
                  </button>
                  <!-- success -->
                  <div class="art-success">Success <i class="fas fa-check"></i></div>
                </div>

      
            </form>

            
            </div>
            <!-- contact form frame end -->
          </div>
          <!-- col end -->
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->

      <!-- container -->
      <div class="container-fluid">
        <!-- footer -->
        <footer>
          <!-- copyright -->
          <div class="art-copy">© 2023 Jerum Galang</div>
          <!-- author ( Please! Do not delete it. You are awesome! :) -->
          <!-- <div>
            Template author:&#160;
            <a
              href="https://themeforest.net/user/millerdigitaldesign"
              target="_blank"
              data-no-swup
              >Nazar Miller</a
            >
          </div> -->
        </footer>
        <!-- footer end -->
      </div>
      <!-- container end -->
    </div>
    <!-- scroll frame end -->
  </div>
  <!-- swup container end -->
</div>
@endsection


