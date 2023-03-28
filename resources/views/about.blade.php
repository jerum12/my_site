@extends("layouts.master")

@section("title")
About Me - Jerum Galang
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
          <div class="col-lg-6">
            <!-- section title -->
            <div class="art-section-title">
              <!-- title frame -->
              <div class="art-title-frame">
                <!-- title -->
                <h3>Work History</h3>
              </div>
              <!-- title frame end -->
            </div>
            <!-- section title end -->

            <!-- timeline -->
            <div class="art-timeline">
              <div class="art-timeline-item">
                <div class="art-timeline-mark-light"></div>
                <div class="art-timeline-mark"></div>

                <div class="art-a art-timeline-content">
                  <div class="art-card-header">
                    <div class="art-left-side">
                      <h5>TeraSystem Incorporated</h5>
                      <div class="art-el-suptitle mb-15">System Engineer</div>
                    </div>
                    <div class="art-right-side">
                      <span class="art-date">2013 - Present</span>
                    </div>
                  </div>
                  <div>
                    <ul class="art-knowledge-list p-15-0">
                      <li>
                        Responsible for developing
                        <span class="art-counter" style="color: #9bff88">6</span>+
                        projects, including front-end as well as back-end transactions.
                      </li>
                      <li>Performed unit testing and implementation.</li>
                      <li>
                        Bugs in existing applications were fixed, and enhancements were
                        implemented
                      </li>
                      <li>
                        Enhanced the quality of code and improved application performance.
                      </li>
                    </ul>

                    <h5>Projects</h5>
                    <div style="margin-top: 10px">
                      <ol type="1" class="art-knowledge-list p-15-0">
                        <li>Vocalink Reconciliation</li>
                        <li>TG-Shared Encryption Key Web Application</li>
                        <li>Account Management System</li>
                        <li>VISA Reconciliation</li>
                        <li>Financial Reporting Package</li>
                        <li>Capital Adequate Ratio Consolidator</li>
                        <li>Mobile Banking Back Office Application</li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>

              <div class="art-timeline-item">
                <div class="art-timeline-mark-light"></div>
                <div class="art-timeline-mark"></div>

                <div class="art-a art-timeline-content">
                  <div class="art-card-header">
                    <div class="art-left-side">
                      <h5>Kodego Philippines</h5>
                      <div class="art-el-suptitle mb-15">
                        Part Time Web Development Instructor
                      </div>
                    </div>
                    <div class="art-right-side">
                      <span class="art-date">2022 - 2023</span>
                    </div>
                  </div>
                  <p>
                    Responsible for creating and delivering course content on various web
                    development topics such as
                    <br />
                    <span style="color: #9bff88; font-weight: bold"
                      >HTML, CSS, JavaScript, ReactJS, NodeJS, PHP, Laravel, MySQL and
                      Cloud Hosting.</span
                    >
                  </p>
                  <!-- <a
                    data-fancybox="recommendation"
                    data-no-swup
                    href="#art-recomendation-popup-1"
                    class="art-link art-color-link art-w-chevron"
                    >Recommendation</a
                  > -->
                </div>
              </div>

              <div class="art-timeline-item">
                <div class="art-timeline-mark-light"></div>
                <div class="art-timeline-mark"></div>

                <div class="art-a art-timeline-content">
                  <div class="art-card-header">
                    <div class="art-left-side">
                      <h5>Ramcap PH</h5>
                      <div class="art-el-suptitle mb-15">
                        Freelance Front End Developer
                      </div>
                    </div>
                    <div class="art-right-side">
                      <span class="art-date">2022 - 2022</span>
                    </div>
                  </div>
                  <p>
                    In charge of creating and implementing the user interface for their
                    website and booking application.
                  </p>
                  <!-- <a
                    data-fancybox="recommendation"
                    data-no-swup
                    href="#art-recomendation-popup-2"
                    class="art-link art-color-link art-w-chevron"
                    >Recommendation</a
                  > -->
                </div>
              </div>

              <div class="art-timeline-item">
                <div class="art-timeline-mark-light"></div>
                <div class="art-timeline-mark"></div>

                <div class="art-a art-timeline-content">
                  <div class="art-card-header">
                    <div class="art-left-side">
                      <h5>Freelance Projects</h5>
                      <div class="art-el-suptitle mb-15">Developer</div>
                    </div>
                    <div class="art-right-side">
                      <span class="art-date">2020 - Present</span>
                    </div>
                  </div>
                  <div>
                    <ul class="art-knowledge-list p-15-0">
                      <li>Billing & Invoicing System</li>
                      <li>Inventory & Sales Management</li>
                      <li>Websites</li>
                      <li>Android App for Operation Research</li>
                      <li>Booking System Admin Panel</li>
                      <li>Biometrics</li>
                    </ul>
                  </div>
                  <!-- <a
                    data-fancybox="recommendation"
                    data-no-swup
                    href="#art-recomendation-popup-3"
                    class="art-link art-color-link art-w-chevron"
                    >Recommendation</a
                  > -->
                </div>
              </div>
            </div>
            <!-- timeline end -->
          </div>
          <div class="col-lg-6">
            <!-- section title -->
            <div class="art-section-title">
              <!-- title frame -->
              <div class="art-title-frame">
                <!-- title -->
                <h3>Education</h3>
              </div>
              <!-- title frame end -->
            </div>
            <!-- section title end -->

            <!-- timeline -->
            <div class="art-timeline art-gallery">
              <div class="art-timeline-item">
                <div class="art-timeline-mark-light"></div>
                <div class="art-timeline-mark"></div>

                <div class="art-a art-timeline-content">
                  <div class="art-card-header">
                    <div class="art-left-side">
                      <h5>Polytechnic University of the Philippines</h5>
                      <div class="art-el-suptitle mb-15">BS Computer Engineering</div>
                    </div>
                    <div class="art-right-side">
                      <span class="art-date">2008 - 2013</span>
                    </div>
                  </div>

                  <p>
                    The Bachelor of Science in Computer Engineering program at Polytechnic
                    University of the Philippines is designed to provide students with a
                    strong foundation in the principles and practices of computer
                    engineering. Graduates of this program possess the knowledge and
                    skills needed to design and develop computer hardware and software
                    systems, as well as to integrate them into larger systems and
                    networks.
                  </p>
                  <!-- <a
                    data-fancybox="diplome"
                    data-no-swup
                    href="files/certificate.jpg"
                    class="art-link art-color-link art-w-chevron"
                    >Diplome</a
                  > -->
                </div>
              </div>

              <div class="art-timeline-item">
                <div class="art-timeline-mark-light"></div>
                <div class="art-timeline-mark"></div>

                <div class="art-a art-timeline-content">
                  <div class="art-card-header">
                    <div class="art-left-side">
                      <h5>Sauyo High School</h5>
                      <div class="art-el-suptitle mb-15">Student</div>
                    </div>
                    <div class="art-right-side">
                      <span class="art-date">2004 - 2008</span>
                    </div>
                  </div>
                  <p>
                    Sauyo High School is a secondary educational institution in the
                    Philippines that provides students with a well-rounded education in
                    various academic subjects and practical skills.
                  </p>
                </div>
              </div>

              <div class="art-timeline-item">
                <div class="art-timeline-mark-light"></div>
                <div class="art-timeline-mark"></div>

                <div class="art-a art-timeline-content">
                  <div class="art-card-header">
                    <div class="art-left-side">
                      <h5>Sauyo Elementary School</h5>
                      <div class="art-el-suptitle mb-15">Student</div>
                    </div>
                    <div class="art-right-side">
                      <span class="art-date">1998 - 2004</span>
                    </div>
                  </div>
                  <p>
                    Sauyo Elementary School is an educational institution in the
                    Philippines that provides primary education to children.
                  </p>
                  <!-- <a
                    data-fancybox="diplome"
                    data-no-swup
                    href="files/certificate.jpg"
                    class="art-link art-color-link art-w-chevron"
                    >Licence</a
                  > -->
                </div>
              </div>
            </div>

            <!-- timeline end -->
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

