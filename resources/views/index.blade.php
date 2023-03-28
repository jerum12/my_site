@extends("layouts.master")

@section("title")
Home - Jerum Galang
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
        <div class="row p-60-0 p-lg-30-0 p-md-15-0">
          <!-- col -->
          <div class="col-lg-12">
            <!-- banner -->
            <div class="art-a art-banner" style="background-image: url(img/bg.jpg)">
              <!-- banner back -->
              <div class="art-banner-back"></div>
              <!-- banner dec -->
              <div class="art-banner-dec"></div>
              <!-- banner overlay -->
              <div class="art-banner-overlay">
                <!-- main title -->
                <div class="art-banner-title">
                  <!-- title -->
                  <h1 class="mb-15">Discover my Amazing Life!</h1>
                  <!-- suptitle -->
                  <div class="art-lg-text art-code mb-25">
                    &lt;<i>code</i>&gt; I build
                    <span
                      class="txt-rotate"
                      data-period="2000"
                      data-rotate='[ "websites & web applications.", "mobile & desktop applications.", "any software solutions." ]'
                    ></span
                    >&lt;/<i>code</i>&gt;
                  </div>
                  <div class="art-buttons-frame">
                    <!-- button -->
                    <a href="projects.php" class="art-btn art-btn-md"
                      ><span>Explore now</span></a
                    >
                  </div>
                </div>
                <!-- main title end -->
                <!-- photo -->
                <!-- <img src="img/a2.png" class="art-banner-photo" alt="Your Name" /> -->
              </div>
              <!-- banner overlay end -->
            </div>
            <!-- banner end -->
          </div>
          <!-- col end -->
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->

      <!-- container -->
      <div class="container-fluid">
        <!-- row -->
        <div class="row p-30-0">
          <!-- col -->
          <div class="col-md-4 col-6">
            <!-- couner frame -->
            <div class="art-counter-frame">
              <!-- counter -->
              <div class="art-counter-box">
                <!-- counter number -->

                <span class="art-counter">10</span><span class="art-counter-plus">+</span>
              </div>
              <!-- counter end -->
              <!-- title -->
              <h6>Years Experience</h6>
            </div>
            <!-- couner frame end -->
          </div>
          <!-- col end -->

          <!-- col -->
          <div class="col-md-4 col-6">
            <!-- couner frame -->
            <div class="art-counter-frame">
              <!-- counter -->
              <div class="art-counter-box">
                <!-- counter number -->
                <span class="art-counter">20</span><span class="art-counter-plus">+</span>
              </div>
              <!-- counter end -->
              <!-- title -->
              <h6>Satisfied Clientss</h6>
            </div>
            <!-- couner frame end -->
          </div>
          <!-- col end -->

          <!-- col -->
          <div class="col-md-4 col-6">
            <!-- couner frame -->
            <div class="art-counter-frame">
              <!-- counter -->
              <div class="art-counter-box">
                <!-- counter number -->
                <span class="art-counter">10</span><span class="art-counter-plus">+</span>
              </div>
              <!-- counter end -->
              <!-- title -->
              <h6>Completed Freelance Projects</h6>
            </div>
            <!-- couner frame end -->
          </div>
          <!-- col end -->
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->

      <!-- container -->
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-lg-12">
            <!-- section title -->
            <div class="art-section-title">
              <!-- title frame -->
              <div class="art-title-frame">
                <!-- title -->
                <h3>My Services</h3>
              </div>
              <!-- title frame end -->
            </div>
            <!-- section title end -->
          </div>
          <!-- col end -->

          <!-- col -->
          <div class="col-lg-4 col-md-6">
            <!-- service -->
            <div class="art-a art-service-icon-box" style="height: 530px">
              <img
                src="img/icons/043-analytics.png"
                alt=""
                style="max-width: 80px; height: 80px"
              />
              <!-- service content -->
              <div class="art-service-ib-content">
                <!-- title -->
                <h5 class="mb-15">Website & Web Applications</h5>
                <!-- text -->
                <div class="mb-15 service-list">
                  <ol class="gradient-list">
                    <li>Websites</li>
                    <li>Inventory & Sales Management System</li>
                    <li>E-commerce System</li>
                    <li>HRIS & Payrol</li>
                    <li>Any Web Application Solutions</li>
                  </ol>
                </div>
                <!-- button -->
                <div class="art-buttons-frame">
                  <a href="contact.php" class="art-link art-color-link art-w-chevron"
                    >Contact now</a
                  >
                </div>
              </div>
              <!-- service content end -->
            </div>
            <!-- service end -->
          </div>
          <!-- col end -->

          <!-- col -->
          <div class="col-lg-4 col-md-6">
            <!-- service -->
            <div class="art-a art-service-icon-box" style="height: 530px">
              <img
                src="img/icons/mobile.png"
                alt=""
                style="max-width: 80px; height: 80px"
              />
              <!-- service content -->
              <div class="art-service-ib-content">
                <!-- title -->
                <h5 class="mb-15">Mobile Applications</h5>
                <!-- text -->
                <div class="mb-15 service-list">
                  <ol class="gradient-list">
                    <li>E-commerce Mobile App</li>
                    <li>Education Mobile App</li>
                    <li>Booking Mobile App</li>
                    <li>News Mobile App</li>
                    <li>Any Mobile Application Solutions</li>
                  </ol>
                </div>
                <!-- button -->
                <div class="art-buttons-frame">
                  <a href="contact.php" class="art-link art-color-link art-w-chevron"
                    >Contact now</a
                  >
                </div>
              </div>
              <!-- service content end -->
            </div>
            <!-- service end -->
          </div>
          <!-- col end -->

          <!-- col -->
          <div class="col-lg-4 col-md-6">
            <!-- service -->
            <div class="art-a art-service-icon-box" style="height: 530px">
              <img
                src="img/icons/desktop.png"
                alt=""
                style="max-width: 80px; height: 80px"
              />
              <!-- service content -->
              <div class="art-service-ib-content">
                <!-- title -->
                <h5 class="mb-15">Desktop Application</h5>
                <!-- text -->
                <div class="mb-15 service-list">
                  <ol class="gradient-list">
                    <li>Accounting Software</li>
                    <li>Biometric Security Software</li>
                    <li>Point of Sale (POS) System</li>
                    <li>Time & Attendance System</li>
                    <li>Any Desktop Application Solutions</li>
                  </ol>
                </div>
                <!-- button -->
                <div class="art-buttons-frame">
                  <a href="contact.php" class="art-link art-color-link art-w-chevron"
                    >Contact now</a
                  >
                </div>
              </div>
              <!-- service content end -->
            </div>
            <!-- service end -->
          </div>
          <!-- col end -->

          <!-- col -->
          <div class="col-lg-4 col-md-6">
            <!-- service -->
            <div class="art-a art-service-icon-box" style="height: 530px">
              <img
                src="img/icons/062-code-1.png"
                alt=""
                style="max-width: 80px; height: 80px"
              />
              <!-- service content -->
              <div class="art-service-ib-content">
                <!-- title -->
                <h5 class="mb-15">Database Development & Management</h5>
                <!-- text -->
                <div class="mb-15 service-list">
                  <ol class="gradient-list">
                    <li>Database Design & Development</li>
                    <li>Database Migration & Conversion</li>
                    <li>Cloud Database</li>
                    <li>Data modeling & Scripting</li>
                    <li>Any Database Related Solutions</li>
                  </ol>
                </div>
                <!-- button -->
                <div class="art-buttons-frame">
                  <a href="contact.php" class="art-link art-color-link art-w-chevron"
                    >Contact now</a
                  >
                </div>
              </div>
              <!-- service content end -->
            </div>
            <!-- service end -->
          </div>
          <!-- col end -->

          <!-- col -->
          <div class="col-lg-4 col-md-6">
            <!-- service -->
            <div class="art-a art-service-icon-box" style="height: 530px">
              <img
                src="img/icons/training2.png"
                alt=""
                style="max-width: 80px; height: 80px"
              />
              <!-- service content -->
              <div class="art-service-ib-content">
                <!-- title -->
                <h5 class="mb-15">Web Development Instructor / Training</h5>
                <!-- text -->
                <div class="mb-15 service-list">
                  <ol class="gradient-list">
                    <li>Intro to Web Development</li>
                    <li>Front-End Development</li>
                    <li>Back-End Development</li>
                    <li>Full-Stack Web Development</li>
                    <li>Any Web Development Topics</li>
                  </ol>
                </div>
                <!-- button -->
                <div class="art-buttons-frame">
                  <a href="contact.php" class="art-link art-color-link art-w-chevron"
                    >Contact now</a
                  >
                </div>
              </div>
              <!-- service content end -->
            </div>
            <!-- service end -->
          </div>
          <!-- col end -->

          <!-- col -->
          <div class="col-lg-4 col-md-6">
            <!-- service -->
            <div class="art-a art-service-icon-box" style="height: 530px">
              <img src="img/icons/api.png" alt="" style="max-width: 80px; height: 80px" />
              <!-- service content -->
              <div class="art-service-ib-content">
                <!-- title -->
                <h5 class="mb-15">APIs</h5>
                <!-- text -->
                <div class="mb-15 service-list">
                  <ol class="gradient-list">
                    <li>Payment & Social Media APIs</li>
                    <li>News, Weather & Mapping APIs</li>
                    <li>Customer Relationship Management APIs</li>
                    <li>Authentication and Authorization APIs</li>
                    <li>Any APIs you need</li>
                  </ol>
                </div>
                <!-- button -->
                <div class="art-buttons-frame">
                  <a href="contact.php" class="art-link art-color-link art-w-chevron"
                    >Contact now</a
                  >
                </div>
              </div>
              <!-- service content end -->
            </div>
            <!-- service end -->
          </div>
          <!-- col end -->
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->

      <!-- container -->
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-lg-12">
            <!-- section title -->
            <div class="art-section-title">
              <!-- title frame -->
              <div class="art-title-frame">
                <!-- title -->
                <h3>Recommendations</h3>
              </div>
              <!-- title frame end -->
            </div>
            <!-- section title end -->
          </div>
          <!-- col end -->

          <!-- col -->
          <div class="col-lg-12">
            <!-- slider container -->
            <div
              class="swiper-container art-testimonial-slider"
              style="overflow: visible"
            >
              <!-- slider wrapper -->
              <div class="swiper-wrapper">
                <!-- slide -->
                <div class="swiper-slide">
                  <!-- testimonial -->
                  <div class="art-a art-testimonial">
                    <!-- testimonial body -->
                    <div class="testimonial-body">
                      <!-- photo -->
                      <img
                        class="art-testimonial-face"
                        src="img/testimonials/avatar2.png"
                        alt="face"
                      />
                      <!-- name -->
                      <h5>Dr. Bryan Soberon</h5>
                      <div class="art-el-suptitle mb-15">CEO - Central Neuro System</div>
                      <!-- text -->
                      <div class="mb-15 art-el-message">
                        Working with Jerum has been a pleasure. Better yet - I alerted
                        them of a minor issue before going to sleep. The issue was fixed
                        the next morning. I couldn't ask for better support. Thank you
                        Jerum! This is easily a 5 star freelancer.
                      </div>
                    </div>
                    <!-- testimonial body end -->
                    <!-- testimonial footer -->
                    <div class="art-testimonial-footer">
                      <div class="art-left-side">
                        <!-- star rate -->
                        <ul class="art-star-rate">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                        </ul>
                        <!-- star rate end -->
                      </div>
                      <div class="art-right-side"></div>
                    </div>
                    <!-- testimonial footer end -->
                  </div>
                  <!-- testimonial end -->
                </div>
                <!-- slide end -->

                <!-- slide -->
                <div class="swiper-slide">
                  <!-- testimonial -->
                  <div class="art-a art-testimonial">
                    <!-- testimonial body -->
                    <div class="testimonial-body">
                      <!-- photo -->
                      <img
                        class="art-testimonial-face"
                        src="img/testimonials/avatar1.png"
                        alt="face"
                      />
                      <!-- name -->
                      <h5>Ms. Patricia Mariz Antigua</h5>
                      <div class="art-el-suptitle mb-15">
                        CEO - Antigua's Bake & Cuisine
                      </div>
                      <!-- text -->
                      <div class="mb-15 art-el-message">
                        Working with Jerum has been a pleasure. Better yet - I alerted
                        them of a minor issue before going to sleep. The issue was fixed
                        the next morning. I couldn't ask for better support. Thank you
                        Jerum! This is easily a 5 star freelancer.
                      </div>
                    </div>
                    <!-- testimonial body end -->
                    <!-- testimonial footer -->
                    <div class="art-testimonial-footer">
                      <div class="art-left-side">
                        <!-- star rate -->
                        <ul class="art-star-rate">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <!-- <li class="art-empty-item"><i class="fas fa-star"></i></li> -->
                        </ul>
                        <!-- star rate end -->
                      </div>
                      <div class="art-right-side"></div>
                    </div>
                    <!-- testimonial footer end -->
                  </div>
                  <!-- testimonial end -->
                </div>
                <!-- slide end -->

                <!-- slide -->
                <div class="swiper-slide">
                  <!-- testimonial -->
                  <div class="art-a art-testimonial">
                    <!-- testimonial body -->
                    <div class="testimonial-body">
                      <!-- photo -->
                      <img
                        class="art-testimonial-face"
                        src="img/testimonials/avatar2.png"
                        alt="face"
                      />
                      <!-- name -->
                      <h5>Mr. Anthony</h5>
                      <div class="art-el-suptitle mb-15">
                        CEO - Birksdale Shoes Manufacturing
                      </div>
                      <!-- text -->
                      <div class="mb-15 art-el-message">
                        Working with Jerum has been a pleasure. Better yet - I alerted
                        them of a minor issue before going to sleep. The issue was fixed
                        the next morning. I couldn't ask for better support. Thank you
                        Jerum! This is easily a 5 star freelancer.
                      </div>
                    </div>
                    <!-- testimonial body end -->
                    <!-- testimonial footer -->
                    <div class="art-testimonial-footer">
                      <div class="art-left-side">
                        <!-- star rate -->
                        <ul class="art-star-rate">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                        </ul>
                        <!-- star rate end -->
                      </div>
                      <div class="art-right-side"></div>
                    </div>
                    <!-- testimonial footer end -->
                  </div>
                  <!-- testimonial end -->
                </div>
                <!-- slide end -->

                <!-- slide -->
                <div class="swiper-slide">
                  <!-- testimonial -->
                  <div class="art-a art-testimonial">
                    <!-- testimonial body -->
                    <div class="testimonial-body">
                      <!-- photo -->
                      <img
                        class="art-testimonial-face"
                        src="img/testimonials/avatar2.png"
                        alt="face"
                      />
                      <!-- name -->
                      <h5>Mr. Enrico Ponce</h5>
                      <div class="art-el-suptitle mb-15">
                        Sales Head - Fairy Skin Beauty Products
                      </div>
                      <!-- text -->
                      <div class="mb-15 art-el-message">
                        Working with Jerum has been a pleasure. Better yet - I alerted
                        them of a minor issue before going to sleep. The issue was fixed
                        the next morning. I couldn't ask for better support. Thank you
                        Jerum! This is easily a 5 star freelancer.
                      </div>
                    </div>
                    <!-- testimonial body end -->
                    <!-- testimonial footer -->
                    <div class="art-testimonial-footer">
                      <div class="art-left-side">
                        <!-- star rate -->
                        <ul class="art-star-rate">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                        </ul>
                        <!-- star rate end -->
                      </div>
                      <div class="art-right-side"></div>
                    </div>
                    <!-- testimonial footer end -->
                  </div>
                  <!-- testimonial end -->
                </div>
                <!-- slide end -->
              </div>
              <!-- slider wrapper end -->
            </div>
            <!-- slider container end -->
          </div>
          <!-- col end -->

          <!-- col -->
          <div class="col-lg-12">
            <!-- slider navigation -->
            <div class="art-slider-navigation">
              <!-- left side -->
              <div class="art-sn-left">
                <!-- slider pagination -->
                <div class="swiper-pagination"></div>
              </div>
              <!-- left side end -->

              <!-- right side -->
              <div class="art-sn-right">
                <!-- slider navigation -->
                <div class="art-slider-nav-frame">
                  <!-- prev -->
                  <div class="art-slider-nav art-testi-swiper-prev">
                    <i class="fas fa-chevron-left"></i>
                  </div>
                  <!-- next -->
                  <div class="art-slider-nav art-testi-swiper-next">
                    <i class="fas fa-chevron-right"></i>
                  </div>
                </div>
                <!-- slider navigation -->
              </div>
              <!-- right side end -->
            </div>
            <!-- slider navigation end -->
          </div>
          <!-- col end -->
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->

      <!-- container -->
      @include('partials.footer')
      <!-- container end -->
    </div>
    <!-- scroll frame end -->
  </div>
  <!-- swup container end -->
</div>
@endsection