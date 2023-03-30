@extends("layouts.master")

@section("title")
Projects - Jerum Galang
@endsection


@section("content")
<div class="jerum-content">
  <!-- curtain -->
  <div class="jerum-curtain"></div>

  <!-- top background -->
  <div class="jerum-top-bg" style="background-image: url(img/bg.jpg)">
    <!-- overlay -->
    <div class="jerum-top-bg-overlay"></div>
    <!-- overlay end -->
  </div>
  <!-- top background end -->

  <!-- swup container -->
  <div class="transition-fade" id="swup">
    <!-- scroll frame -->
    <div id="scrollbar" class="jerum-scroll-frame">
      <!-- container -->
      <div class="container-fluid">
        <!-- row -->
        <div class="row p-30-0">
          <div class="col-lg-12">
            <!-- section title -->
            <div class="jerum-section-title">
              <!-- title frame -->
              <div class="jerum-title-frame">
                <!-- title -->
                <h3>Projects</h3>
              </div>
              <!-- title frame end -->
            </div>
            <!-- section title end -->
          </div>
          <!-- col end -->
          <!-- col -->
          <div class="col-lg-12">
            <!-- filter -->
            <div class="jerum-filter mb-30">
              <!-- filter link -->
              <a
                href="#"
                data-filter="*"
                class="jerum-link jerum-current"
                style="position: relative"
                >All Categories</a
              >
              <!-- filter link -->
              <a
                href="#"
                data-filter=".website"
                class="jerum-link"
                style="position: relative"
                >Websites</a
              >
              <!-- filter link -->
              <a
                href="#"
                data-filter=".webApp"
                class="jerum-link"
                style="position: relative"
                >Web App</a
              >
              <!-- filter link -->
              <a
                href="#"
                data-filter=".mobile"
                class="jerum-link"
                style="position: relative"
                >Mobile</a
              >
              <!-- filter link -->
              <a
                href="#"
                data-filter=".desktop"
                class="jerum-link"
                style="position: relative"
                >Desktop</a
              >
            </div>
            <!-- filter end -->
          </div>
          <!-- col end -->

          <div class="jerum-grid jerum-grid-3-col jerum-gallery">
            <!-- grid item -->
            <div class="jerum-grid-item webApp">
              <!-- grid item frame -->
              <a
                data-fancybox="gallery"
                data-no-swup
                href="img/projects/fs.png"
                class="jerum-a jerum-portfolio-item-frame jerum-horizontal"
              >
                <!-- img -->
                <img src="img/projects/fs.png" alt="item" />
                <!-- zoom icon -->
                <span class="jerum-item-hover"><i class="fas fa-expand"></i></span>
              </a>
              <!-- grid item frame end -->
              <!-- description -->
              <div class="jerum-item-description">
                <!-- title -->
                <h5 class="mb-15">Inventory & Sales Management</h5>
                <!-- button -->
                <!-- <a
                  href="portfolio-single.html"
                  class="jerum-link jerum-color-link jerum-w-chevron"
                  >See more</a
                > -->
              </div>
              <!-- description end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="jerum-grid-item website">
              <!-- grid item frame -->
              <a
                data-fancybox="gallery"
                data-no-swup
                href="img/projects/ABC.png"
                class="jerum-a jerum-portfolio-item-frame jerum-vertical"
              >
                <!-- img -->
                <img src="img/projects/ABC.png" alt="item" />
                <!-- zoom icon -->
                <span class="jerum-item-hover"><i class="fas fa-expand"></i></span>
              </a>
              <!-- grid item frame end -->
              <!-- description -->
              <div class="jerum-item-description">
                <!-- title -->
                <h5 class="mb-15">Website</h5>
                <!-- <div class="mb-15">
                  Sit amet, consectetur adipisicing elit. Quas, architecto.
                </div> -->
                <!-- button -->
                <!-- <a
                  href="portfolio-single.html"
                  class="jerum-link jerum-color-link jerum-w-chevron"
                  >See more</a
                > -->
              </div>
              <!-- description end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="jerum-grid-item desktop">
              <!-- grid item frame -->
              <a
                data-fancybox="gallery"
                data-no-swup
                href="img/projects/rlb.png"
                class="jerum-a jerum-portfolio-item-frame jerum-square"
              >
                <!-- img -->
                <img src="img/projects/rlb.png" alt="item" />
                <!-- zoom icon -->
                <span class="jerum-item-hover"><i class="fas fa-expand"></i></span>
              </a>
              <!-- grid item frame end -->
              <!-- description -->
              <div class="jerum-item-description">
                <!-- title -->
                <h5 class="mb-15">Biometrics</h5>
                <!-- <div class="mb-15">
                  Sit amet, consectetur adipisicing elit. Quas, architecto.
                </div> -->
                <!-- button -->
                <!-- <a
                  href="portfolio-single.html"
                  class="jerum-link jerum-color-link jerum-w-chevron"
                  >See more</a
                > -->
              </div>
              <!-- description end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="jerum-grid-item website">
              <!-- grid item frame -->
              <a
                data-fancybox="gallery"
                data-no-swup
                href="img/projects/A1.png"
                class="jerum-a jerum-portfolio-item-frame jerum-vertical"
              >
                <!-- img -->
                <img src="img/projects/A1.png" alt="item" />
                <!-- zoom icon -->
                <span class="jerum-item-hover"><i class="fas fa-expand"></i></span>
              </a>
              <!-- grid item frame end -->
              <!-- description -->
              <div class="jerum-item-description">
                <!-- title -->
                <h5 class="mb-15">Website</h5>
                <!-- <div class="mb-15">
                  Sit amet, consectetur adipisicing elit. Quas, architecto.
                </div> -->
                <!-- button -->
                <!-- <a
                  href="portfolio-single.html"
                  class="jerum-link jerum-color-link jerum-w-chevron"
                  >See more</a
                > -->
              </div>
              <!-- description end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="jerum-grid-item webApp">
              <!-- grid item frame -->
              <a
                data-fancybox="gallery"
                data-no-swup
                href="img/projects/BDAccounting.png"
                class="jerum-a jerum-portfolio-item-frame jerum-square"
              >
                <!-- img -->
                <img src="img/projects/BDAccounting.png" alt="item" />
                <!-- zoom icon -->
                <span class="jerum-item-hover"><i class="fas fa-expand"></i></span>
              </a>
              <!-- grid item frame end -->
              <!-- description -->
              <div class="jerum-item-description">
                <!-- title -->
                <h5 class="mb-15">Account & Invoicing System</h5>
                <!-- <div class="mb-15">
                  Sit amet, consectetur adipisicing elit. Quas, architecto.
                </div> -->
                <!-- button -->
                <!-- <a
                  href="portfolio-single.html"
                  class="jerum-link jerum-color-link jerum-w-chevron"
                  >See more</a
                > -->
              </div>
              <!-- description end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="jerum-grid-item website">
              <!-- grid item frame -->
              <a
                data-fancybox="gallery"
                data-no-swup
                href="img/projects/CNS.png"
                class="jerum-a jerum-portfolio-item-frame jerum-vertical"
              >
                <!-- img -->
                <img src="img/projects/CNS.png" alt="item" />
                <!-- zoom icon -->
                <span class="jerum-item-hover"><i class="fas fa-expand"></i></span>
              </a>
              <!-- grid item frame end -->
              <!-- description -->
              <div class="jerum-item-description">
                <!-- title -->
                <h5 class="mb-15">Website</h5>
                <!-- <div class="mb-15">
                  Sit amet, consectetur adipisicing elit. Quas, architecto.
                </div> -->
                <!-- button -->
                <!-- <a
                  href="portfolio-single.html"
                  class="jerum-link jerum-color-link jerum-w-chevron"
                  >See more</a
                > -->
              </div>
              <!-- description end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="jerum-grid-item webApp">
              <!-- grid item frame -->
              <a
                data-fancybox="gallery"
                data-no-swup
                href="img/projects/A1Admin.png"
                class="jerum-a jerum-portfolio-item-frame jerum-square"
              >
                <!-- img -->
                <img src="img/projects/A1Admin.png" alt="item" />
                <!-- zoom icon -->
                <span class="jerum-item-hover"><i class="fas fa-expand"></i></span>
              </a>
              <!-- grid item frame end -->
              <!-- description -->
              <div class="jerum-item-description">
                <!-- title -->
                <h5 class="mb-15">Booking App Admin</h5>
                <!-- <div class="mb-15">
                  Sit amet, consectetur adipisicing elit. Quas, architecto.
                </div> -->
                <!-- button -->
                <!-- <a
                  href="portfolio-single.html"
                  class="jerum-link jerum-color-link jerum-w-chevron"
                  >See more</a
                > -->
              </div>
              <!-- description end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="jerum-grid-item webApp">
              <!-- grid item frame -->
              <a
                data-fancybox="gallery"
                data-no-swup
                href="img/projects/Birksdale.png"
                class="jerum-a jerum-portfolio-item-frame jerum-horizontal"
              >
                <!-- img -->
                <img src="img/projects/Birksdale.png" alt="item" />
                <!-- zoom icon -->
                <span class="jerum-item-hover"><i class="fas fa-expand"></i></span>
              </a>
              <!-- grid item frame end -->
              <!-- description -->
              <div class="jerum-item-description">
                <!-- title -->
                <h5 class="mb-15">Inventory System</h5>
                <!-- button -->
                <!-- <a
                  href="portfolio-single.html"
                  class="jerum-link jerum-color-link jerum-w-chevron"
                  >See more</a
                > -->
              </div>
              <!-- description end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="jerum-grid-item mobile">
              <!-- grid item frame -->
              <a
                data-fancybox="gallery"
                data-no-swup
                href="img/projects/OR.png"
                class="jerum-a jerum-portfolio-item-frame jerum-horizontal"
              >
                <!-- img -->
                <img src="img/projects/OR.png" alt="item" />
                <!-- zoom icon -->
                <span class="jerum-item-hover"><i class="fas fa-expand"></i></span>
              </a>
              <!-- grid item frame end -->
              <!-- description -->
              <div class="jerum-item-description">
                <!-- title -->
                <h5 class="mb-15">Mobile App</h5>
                <!-- button -->
                <!-- <a
                  href="portfolio-single.html"
                  class="jerum-link jerum-color-link jerum-w-chevron"
                  >See more</a
                > -->
              </div>
              <!-- description end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="jerum-grid-item webApp">
              <!-- grid item frame -->
              <a
                data-fancybox="gallery"
                data-no-swup
                href="img/projects/Mariz.png"
                class="jerum-a jerum-portfolio-item-frame jerum-horizontal"
              >
                <!-- img -->
                <img src="img/projects/Mariz.png" alt="item" />
                <!-- zoom icon -->
                <span class="jerum-item-hover"><i class="fas fa-expand"></i></span>
              </a>
              <!-- grid item frame end -->
              <!-- description -->
              <div class="jerum-item-description">
                <!-- title -->
                <h5 class="mb-15">Inventory System</h5>
                <!-- button -->
                <!-- <a
                  href="portfolio-single.html"
                  class="jerum-link jerum-color-link jerum-w-chevron"
                  >See more</a
                > -->
              </div>
              <!-- description end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="jerum-grid-item webApp">
              <!-- grid item frame -->
              <a
                data-fancybox="gallery"
                data-no-swup
                href="img/projects/RLBAttendance.png"
                class="jerum-a jerum-portfolio-item-frame jerum-horizontal"
              >
                <!-- img -->
                <img src="img/projects/RLBAttendance.png" alt="item" />
                <!-- zoom icon -->
                <span class="jerum-item-hover"><i class="fas fa-expand"></i></span>
              </a>
              <!-- grid item frame end -->
              <!-- description -->
              <div class="jerum-item-description">
                <!-- title -->
                <h5 class="mb-15">Attendance System</h5>
                <!-- button -->
                <!-- <a
                  href="portfolio-single.html"
                  class="jerum-link jerum-color-link jerum-w-chevron"
                  >See more</a
                > -->
              </div>
              <!-- description end -->
            </div>
            <!-- grid item end -->
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->

      <!-- container -->
      <div class="container-fluid">
        <!-- footer -->
        <footer>
          <!-- copyright -->
          <div class="jerum-copy">© 2023 Jerum Galang</div>
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


