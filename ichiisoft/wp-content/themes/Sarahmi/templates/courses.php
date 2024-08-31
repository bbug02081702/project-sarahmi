<?php
/*
Template Name: COURSES
*/
get_header(); 
?>
<section
      class="hero-wrap hero-wrap-2"
      style="background-image: url('<?php echo get_template_directory_uri() ; ?>/assets/images/SarahmiBg.jpg')"
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <div
          class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
        >
          <div
            class="col-md-9 ftco-animate text-center breadcrumb-banner"
            style="margin-top: 4rem"
          >
            <h1 class="mb-3 bread">Khóa học</h1>
            <p class="breadcrumbs">
              <span class="mr-2"><a href="home.html">Trang chủ</a></span>
              <span>Khóa học</span>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="ftco-section ftco-intro" style="background-color: #191925">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img
              src="<?php echo get_template_directory_uri() ; ?>/assets/images/master2.JPG"
              style="max-width: 600px; max-height: 1000px"
            />
          </div>
          <div class="col-md-6">
            <div class="heading-section ftco-animate">
              <h2 style="color: #d9bf77; font-family: 'Prata', serif">
                Master Trúc Phạm
              </h2>
              <h5
                class="mb-4"
                style="
                  font-weight: bold;
                  font-style: italic;
                  font-family: 'Prata', serif;
                  color: #fcf8e3;
                "
              >
                Với 10 năm kinh nghiệm trong ngành Mi
              </h5>
            </div>
            <p class="ftco-animate" style="color: #fcf8e3">
              Với hơn một thập kỷ kinh nghiệm trong ngành mi, Master Trúc Phạm
              không chỉ là một chuyên gia xuất sắc mà còn là một người thầy với
              tâm huyết và tầm nhìn xa. Sự nghiệp của cô không chỉ dừng lại ở
              việc thực hiện những tác phẩm nghệ thuật mi hoàn hảo mà còn ở việc
              chia sẻ tri thức và kỹ năng cho thế hệ sau. Hơn 1.000 học viên đã
              được cô đào tạo, mỗi người đều được truyền cảm hứng từ sự tận tâm
              và đam mê của cô.
            </p>
            <p class="ftco-animate" style="color: #fcf8e3">
              Master Trúc Phạm không chỉ chú trọng đến việc truyền đạt kỹ thuật
              mà còn giúp học viên hiểu rõ giá trị của nghề, từ đó họ không chỉ
              trở thành những kỹ thuật viên giỏi mà còn là những người làm đẹp
              có trách nhiệm và tâm huyết với nghề.
            </p>
            <ul class="mt-5 do-list">
              <li class="ftco-animate">
                <a href="#"
                  ><span class="ion-ios-checkmark-circle mr-3"></span>Giải
                  thưởng 1</a
                >
              </li>
              <li class="ftco-animate">
                <a href="#"
                  ><span class="ion-ios-checkmark-circle mr-3"></span>Giải
                  thưởng 2</a
                >
              </li>
              <li class="ftco-animate">
                <a href="#"
                  ><span class="ion-ios-checkmark-circle mr-3"></span>Giải
                  thưởng 3</a
                >
              </li>
              <li class="ftco-animate">
                <a href="#"
                  ><span class="ion-ios-checkmark-circle mr-3"></span>Giải
                  thưởng 4</a
                >
              </li>
              <li class="ftco-animate">
                <a href="#"
                  ><span class="ion-ios-checkmark-circle mr-3"></span>Giải
                  thưởng 5</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
      <div
        id="header-carousel"
        class="carousel slide carousel-fade"
        data-ride="carousel"
      >
        <!-- <ol class="carousel-indicators">
			<li
			  data-target="#header-carousel"
			  data-slide-to="0"
			  class="active"
			></li>
			<li data-target="#header-carousel" data-slide-to="1"></li>
			<li data-target="#header-carousel" data-slide-to="2"></li>
		  </ol> -->
        <div class="carousel-inner">
          <div
            class="carousel-item position-relative active"
            style="min-height: 75vh"
          >
            <section
              class="ftco-section ftco-intro"
              style="background-color: #191925"
            >
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <img
                      src="<?php echo get_template_directory_uri() ; ?>/assets/images/master2.JPG"
                      id="master-img"
                      style="max-width: 600px; max-height: 1000px"
                    />
                  </div>
                  <div class="col-md-6">
                    <div class="heading-section ftco-animate">
                      <h2 style="color: #d9bf77; font-family: 'Prata', serif">
                        Master Trúc Phạm
                      </h2>
                      <h5
                        class="mb-4"
                        style="
                          font-weight: bold;
                          font-style: italic;
                          font-family: 'Prata', serif;
                          color: #fcf8e3;
                        "
                      >
                        Với 10 năm kinh nghiệm trong ngành Mi
                      </h5>
                    </div>
                    <p class="ftco-animate" style="color: #fcf8e3">
                      Với hơn một thập kỷ kinh nghiệm trong ngành mi, Master
                      Trúc Phạm không chỉ là một chuyên gia xuất sắc mà còn là
                      một người thầy với tâm huyết và tầm nhìn xa. Sự nghiệp của
                      cô không chỉ dừng lại ở việc thực hiện những tác phẩm nghệ
                      thuật mi hoàn hảo mà còn ở việc chia sẻ tri thức và kỹ
                      năng cho thế hệ sau. Hơn 1.000 học viên đã được cô đào
                      tạo, mỗi người đều được truyền cảm hứng từ sự tận tâm và
                      đam mê của cô.
                    </p>
                    <p class="ftco-animate" style="color: #fcf8e3">
                      Master Trúc Phạm không chỉ chú trọng đến việc truyền đạt
                      kỹ thuật mà còn giúp học viên hiểu rõ giá trị của nghề, từ
                      đó họ không chỉ trở thành những kỹ thuật viên giỏi mà còn
                      là những người làm đẹp có trách nhiệm và tâm huyết với
                      nghề.
                    </p>
                    <ul class="mt-5 do-list">
                      <li class="ftco-animate">
                        <a href="#"
                          ><span class="ion-ios-checkmark-circle mr-3"></span
                          >Lash World Cup</a
                        >
                      </li>
                      <li class="ftco-animate">
                        <a href="#"
                          ><span class="ion-ios-checkmark-circle mr-3"></span
                          >Japan Eyelash Extensions Competition (JEEC)</a
                        >
                      </li>
                      <li class="ftco-animate">
                        <a href="#"
                          ><span class="ion-ios-checkmark-circle mr-3"></span
                          >Japan Lash Association (JLA) Certification</a
                        >
                      </li>
                      <li class="ftco-animate">
                        <a href="#"
                          ><span class="ion-ios-checkmark-circle mr-3"></span
                          >Giải thưởng 4</a
                        >
                      </li>
                      <!-- <li class="ftco-animate">
                        <a href="#"
                          ><span class="ion-ios-checkmark-circle mr-3"></span>Giải
                          thưởng 5</a
                        >
                      </li> -->
                    </ul>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div
            class="carousel-item course-carousel position-relative"
            style="min-height: 150vh"
          >
            <img
              class="position-absolute w-100 h-100"
              src="<?php echo get_template_directory_uri() ; ?>/assets/images/course-carousel1.jpg"
              style="object-fit: cover"
            />
            <!-- <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h6
                  class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                  style="letter-spacing: 3px"
                >
                  Spa & Beauty Center
                </h6>
                <h3 class="display-3 text-capitalize text-white mb-3">
                  Facial Treatment
                </h3>
                <p class="mx-md-5 px-5">Description</p>
                <a
                  class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                  href="#"
                  >Make Appointment</a
                >
              </div>
            </div> -->
          </div>
          <div
            class="carousel-item course-carousel position-relative"
            style="min-height: 150vh"
          >
            <img
              class="position-absolute w-100 h-100"
              src="<?php echo get_template_directory_uri() ; ?>/assets/images/course-carousel2.jpg"
              style="object-fit: cover"
            />
            <!-- <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h6
                  class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                  style="letter-spacing: 3px"
                >
                  Spa & Beauty Center
                </h6>
                <h3 class="display-3 text-capitalize text-white mb-3">
                  Cellulite Treatment
                </h3>
                <p class="mx-md-5 px-5">Description</p>
                <a
                  class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                  href="#"
                  >Make Appointment</a
                >
              </div>
            </div> -->
          </div>
          <div
            class="carousel-item course-carousel position-relative"
            style="min-height: 150vh"
          >
            <img
              class="position-absolute w-100 h-100"
              src="<?php echo get_template_directory_uri() ; ?>/assets/images/course-carousel3.jpg"
              style="object-fit: cover"
            />
            <!-- <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h6
                  class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                  style="letter-spacing: 3px"
                >
                  Spa & Beauty Center
                </h6>
                <h3 class="display-3 text-capitalize text-white mb-3">
                  Cellulite Treatment
                </h3>
                <p class="mx-md-5 px-5">Description</p>
                <a
                  class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                  href="#"
                  >Make Appointment</a
                >
              </div>
            </div> -->
          </div>
          <div
            class="carousel-item course-carousel position-relative"
            style="min-height: 150vh"
          >
            <img
              class="position-absolute w-100 h-100"
              src="<?php echo get_template_directory_uri() ; ?>/assets/images/course-carousel4.jpg"
              style="object-fit: cover"
            />
            <!-- <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h6
                  class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                  style="letter-spacing: 3px"
                >
                  Spa & Beauty Center
                </h6>
                <h3 class="display-3 text-capitalize text-white mb-3">
                  Cellulite Treatment
                </h3>
                <p class="mx-md-5 px-5">Description</p>
                <a
                  class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                  href="#"
                  >Make Appointment</a
                >
              </div>
            </div> -->
          </div>
          <div
            class="carousel-item course-carousel position-relative"
            style="min-height: 150vh"
          >
            <img
              class="position-absolute w-100 h-100"
              src="<?php echo get_template_directory_uri() ; ?>/assets/images/course-carousel5.jpg"
              style="object-fit: cover"
            />
            <!-- <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h6
                  class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                  style="letter-spacing: 3px"
                >
                  Spa & Beauty Center
                </h6>
                <h3 class="display-3 text-capitalize text-white mb-3">
                  Cellulite Treatment
                </h3>
                <p class="mx-md-5 px-5">Description</p>
                <a
                  class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                  href="#"
                  >Make Appointment</a
                >
              </div>
            </div> -->
          </div>
          <div
            class="carousel-item course-carousel position-relative"
            style="min-height: 150vh"
          >
            <img
              class="position-absolute w-100 h-100"
              src="<?php echo get_template_directory_uri() ; ?>/assets/images/course-carousel6.jpg"
              style="object-fit: cover"
            />
            <!-- <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h6
                  class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                  style="letter-spacing: 3px"
                >
                  Spa & Beauty Center
                </h6>
                <h3 class="display-3 text-capitalize text-white mb-3">
                  Cellulite Treatment
                </h3>
                <p class="mx-md-5 px-5">Description</p>
                <a
                  class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                  href="#"
                  >Make Appointment</a
                >
              </div>
            </div> -->
          </div>
          <div
            class="carousel-item course-carousel position-relative"
            style="min-height: 150vh"
          >
            <img
              class="position-absolute w-100 h-100"
              src="<?php echo get_template_directory_uri() ; ?>/assets/images/course-carousel7.jpg"
              style="object-fit: cover"
            />
            <!-- <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h6
                  class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                  style="letter-spacing: 3px"
                >
                  Spa & Beauty Center
                </h6>
                <h3 class="display-3 text-capitalize text-white mb-3">
                  Cellulite Treatment
                </h3>
                <p class="mx-md-5 px-5">Description</p>
                <a
                  class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                  href="#"
                  >Make Appointment</a
                >
              </div>
            </div> -->
          </div>
          <div
            class="carousel-item course-carousel position-relative"
            style="min-height: 150vh"
          >
            <img
              class="position-absolute w-100 h-100"
              src="<?php echo get_template_directory_uri() ; ?>/assets/images/course-carousel8.jpg"
              style="object-fit: cover"
            />
            <!-- <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h6
                  class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                  style="letter-spacing: 3px"
                >
                  Spa & Beauty Center
                </h6>
                <h3 class="display-3 text-capitalize text-white mb-3">
                  Cellulite Treatment
                </h3>
                <p class="mx-md-5 px-5">Description</p>
                <a
                  class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                  href="#"
                  >Make Appointment</a
                >
              </div>
            </div> -->
          </div>
          <div
            class="carousel-item course-carousel position-relative"
            style="min-height: 150vh"
          >
            <img
              class="position-absolute w-100 h-100"
              src="<?php echo get_template_directory_uri() ; ?>/assets/images/course-carousel9.jpg"
              style="object-fit: cover"
            />
            <!-- <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h6
                  class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                  style="letter-spacing: 3px"
                >
                  Spa & Beauty Center
                </h6>
                <h3 class="display-3 text-capitalize text-white mb-3">
                  Cellulite Treatment
                </h3>
                <p class="mx-md-5 px-5">Description</p>
                <a
                  class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                  href="#"
                  >Make Appointment</a
                >
              </div>
            </div> -->
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#header-carousel"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#header-carousel"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- Carousel End -->

    <section class="ftco-section ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center mb-4 pb-3">
          <div class="col-md-10 heading-section ftco-animate text-center">
            <h3 class="subheading">Khóa học</h3>
            <h2 class="mb-1">Các khóa học tại Sarahmi</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="offer-deal text-center px-2 px-lg-5">
              <!-- <div
                class="img"
                style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/curlLash.png)"
              ></div> -->
              <div class="img">
                <img
                  src="<?php echo get_template_directory_uri() ; ?>/assets/images/curlLashServ.jpg"
                  style="
                    transform: scale(0.8);
                    width:100% ;
                    height: 100%;
                    border-radius: 5%;
                  "
                />
              </div>
              <div class="text mt-4">
                <h3 class="mb-4">Uốn mi</h3>
                <p class="mb-5">
          khóa học Uốn Mi Tại Sarahmi Spa
                </p>
                <p>
                  <a
                    href="#"
                    class="btn btn-white px-4 py-3 register-btn"
                    data-toggle="modal"
                    data-target="#exampleModal"
                    data-service="Khóa học 1"
                    data-image="<?php echo get_template_directory_uri() ; ?>/assets/images/curlLashServ.jpg"
                  >
                    Đăng ký
                    <span class="ion-ios-arrow-round-forward"></span
                  ></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="offer-deal active text-center px-2 px-lg-5">
              <div class="img">
                <img
                  src="<?php echo get_template_directory_uri() ; ?>/assets/images/volumnLashServ.jpg"
                  style="
                    transform: scale(0.8);
                    width: 100%;
                    height: 100%;
                    border-radius: 5%;
                  "
                />
              </div>
              <div class="text mt-4">
                <h3 class="mb-4">Nối mi volume</h3>
                <p class="mb-5">
                  khóa học nối Mi Volume Tại Sarahmi Spa 
                </p>
                <p>
                  <a
                    href="#"
                    class="btn btn-white px-4 py-3 register-btn"
                    data-toggle="modal"
                    data-target="#exampleModal"
                    data-service="Khóa học 2"
                    data-image="<?php echo get_template_directory_uri() ; ?>/assets/images/offer-deal-2.jpg"
                  >
                    Đăng ký
                    <span class="ion-ios-arrow-round-forward"></span
                  ></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="offer-deal text-center px-2 px-lg-5">
              <div class="img">
                <img
                  src="<?php echo get_template_directory_uri() ; ?>/assets/images/nailServ.jpg"
                  style="
                    transform: scale(0.8);
                    width: 100%;
                    height: 100%;
                    border-radius: 5%;
                  "
                />
              </div>
              <div class="text mt-4">
                <h3 class="mb-4">Dịch vụ Nail</h3>
                <p class="mb-5">
                  khóa học Nail Tại Sarahmi Spa 
                </p>
                <p>
                  <a
                    href="#"
                    class="btn btn-white px-4 py-3 register-btn"
                    data-toggle="modal"
                    data-target="#exampleModal"
                    data-service="Khóa học 3"
                    data-image="<?php echo get_template_directory_uri() ; ?>/assets/images/offer-deal-3.jpg"
                  >
                    Đăng ký
                    <span class="ion-ios-arrow-round-forward"></span
                  ></a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="offer-deal active text-center px-2 px-lg-5">
              <div class="img icon d-flex justify-content-center">
                <img
                  src="<?php echo get_template_directory_uri() ; ?>/assets/images/shampooServ.jpg"
                  style="
                    transform: scale(0.8);
                    width: 100%;
                    height: 100%;
                    border-radius: 5%;
                  "
                />
                <!-- <span
                  class="flaticon-massage"
                  style="transform: scale(1.5); padding-top: 10px"
                ></span> -->
              </div>
              <div class="text mt-4">
                <h3 class="mb-4">Gội đầu tinh dầu bưởi</h3>
                <p class="mb-5">
                   Phương Pháp Chăm Sóc
                  Tóc Và Da Đầu Hiệu Quả
                </p>
                <p>
                  <a
                    href="#"
                    class="btn btn-white px-4 py-3 register-btn"
                    data-toggle="modal"
                    data-target="#exampleModal"
                    data-service="Khóa học 4"
                    data-image="<?php echo get_template_directory_uri() ; ?>/assets/images/offer-deal-1.jpg"
                  >
                    Đăng ký
                    <span class="ion-ios-arrow-round-forward"></span
                  ></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="offer-deal text-center px-2 px-lg-5">
              <div class="img">
                <img
                  src="<?php echo get_template_directory_uri() ; ?>/assets/images/naturalLashServ.jpg"
                  style="
                    transform: scale(0.8);
                    width: 100%;
                    height: 100%;
                    border-radius: 5%;
                  "
                />
              </div>
              <div class="text mt-4">
                <h3 class="mb-4">Nối mi tự nhiên</h3>
                <p class="mb-5">
                  khóa học Nối Mi Tự Nhiên Tại
                  Sarahmi Spa
                </p>
                <p>
                  <a
                    href="#"
                    class="btn btn-white px-4 py-3 register-btn"
                    data-toggle="modal"
                    data-target="#exampleModal"
                    data-service="Khóa học 5"
                    data-image="<?php echo get_template_directory_uri() ; ?>/assets/images/offer-deal-2.jpg"
                  >
                    Đăng ký
                    <span class="ion-ios-arrow-round-forward"></span
                  ></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="offer-deal active text-center px-2 px-lg-5">
              <div class="img">
                <img
                  src="<?php echo get_template_directory_uri() ; ?>/assets/images/designLashServ.jpg"
                  style="
                    transform: scale(0.8);
                    width: 100%;
                    height: 100%;
                    border-radius: 5%;
                  "
                />
              </div>
              <div class="text mt-4">
                <h3 class="mb-4">Nối mi thiết kế</h3>
                <p class="mb-5">
                 khóa học nối mi thiết kế Tại Sarahmi Spa
                </p>
                <p>
                  <a
                    href="#"
                    class="btn btn-white px-4 py-3 register-btn"
                    data-toggle="modal"
                    data-target="#exampleModal"
                    data-service="Khóa học 6"
                    data-image="<?php echo get_template_directory_uri() ; ?>/assets/images/offer-deal-3.jpg"
                  >
                    Đăng ký
                    <span class="ion-ios-arrow-round-forward"></span
                  ></a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row no-gutters">
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="offer-deal text-center px-2 px-lg-5">
              <div
                class="img"
                style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/offer-deal-1.jpg)"
              ></div>
              <div class="text mt-4">
                <h3 class="mb-4">Khóa học 7</h3>
                <p class="mb-5">
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                </p>
                <p>
                  <a
                    href="#"
                    class="btn btn-white px-4 py-3 register-btn"
                    data-toggle="modal"
                    data-target="#exampleModal"
                    data-service="Khóa học 7"
                    data-image="<?php echo get_template_directory_uri() ; ?>/assets/images/offer-deal-1.jpg"
                  >
                    Đăng ký
                    <span class="ion-ios-arrow-round-forward"></span
                  ></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="offer-deal active text-center px-2 px-lg-5">
              <div
                class="img"
                style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/offer-deal-2.jpg)"
              ></div>
              <div class="text mt-4">
                <h3 class="mb-4">Khóa học 8</h3>
                <p class="mb-5">
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                </p>
                <p>
                  <a
                    href="#"
                    class="btn btn-white px-4 py-3 register-btn"
                    data-toggle="modal"
                    data-target="#exampleModal"
                    data-service="Khóa học 8"
                    data-image="<?php echo get_template_directory_uri() ; ?>/assets/images/offer-deal-2.jpg"
                  >
                    Đăng ký
                    <span class="ion-ios-arrow-round-forward"></span
                  ></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="offer-deal text-center px-2 px-lg-5">
              <div
                class="img"
                style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/offer-deal-3.jpg)"
              ></div>
              <div class="text mt-4">
                <h3 class="mb-4">Khóa học 9</h3>
                <p class="mb-5">
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                </p>
                <p>
                  <a
                    href="#"
                    class="btn btn-white px-4 py-3 register-btn"
                    data-toggle="modal"
                    data-target="#exampleModal"
                    data-service="Khóa học 9"
                    data-image="<?php echo get_template_directory_uri() ; ?>/assets/images/offer-deal-3.jpg"
                  >
                    Đăng ký
                    <span class="ion-ios-arrow-round-forward"></span
                  ></a>
                </p>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </section>

    <!-- <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Pricing Tables</h3>
            <h2 class="mb-1">Pricing Treatments</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="block-7">
              <div class="text-center">
                <h2 class="heading">Year Card</h2>
                <span class="price"
                  ><sup>$</sup> <span class="number">449</span></span
                >
                <span class="excerpt d-block">For 1 Year</span>

                <h3 class="heading-2 my-4">Enjoy All The Features</h3>

                <ul class="pricing-text mb-5">
                  <li>Face Treatments</li>
                  <li>Nail Treatments</li>
                  <li>Medical Treatments</li>
                  <li>Hair Removal</li>
                </ul>

                <a href="#" class="btn btn-primary d-block px-2 py-4"
                  >Get Started</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="block-7">
              <div class="text-center">
                <h2 class="heading">Monthly Card</h2>
                <span class="price"
                  ><sup>$</sup> <span class="number">200</span></span
                >
                <span class="excerpt d-block">For 1 Month</span>

                <h3 class="heading-2 my-4">Enjoy All The Features</h3>

                <ul class="pricing-text mb-5">
                  <li>Face Treatments</li>
                  <li>Nail Treatments</li>
                  <li>Medical Treatments</li>
                  <li>Hair Removal</li>
                </ul>

                <a href="#" class="btn btn-primary d-block px-2 py-4"
                  >Get Started</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="block-7">
              <div class="text-center">
                <h2 class="heading">Weekly Card</h2>
                <span class="price"
                  ><sup>$</sup> <span class="number">85</span></span
                >
                <span class="excerpt d-block">For 1 Week</span>

                <h3 class="heading-2 my-4">Enjoy All The Features</h3>

                <ul class="pricing-text mb-5">
                  <li>Face Treatments</li>
                  <li>Nail Treatments</li>
                  <li>Medical Treatments</li>
                  <li>Hair Removal</li>
                </ul>

                <a href="#" class="btn btn-primary d-block px-2 py-4"
                  >Get Started</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-4 pb-3">
          <div class="col-md-10 heading-section ftco-animate text-center">
            <h3 class="subheading">Feedback</h3>
            <h2 class="mb-1">Phản hồi từ học viên</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <div class="line pl-5">
                      <p class="mb-4 pb-1">
                        Far far away, behind the word mountains, far from the
                        countries Vokalia and Consonantia, there live the blind
                        texts.
                      </p>
                      <span
                        class="quote d-flex align-items-center justify-content-center"
                      >
                        <i class="icon-quote-left"></i>
                      </span>
                    </div>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/person_1.jpg)"
                      ></div>
                      <div class="ml-4">
                        <p class="name">Gabby Smith</p>
                        <span class="position">Customer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <div class="line pl-5">
                      <p class="mb-4 pb-1">
                        Far far away, behind the word mountains, far from the
                        countries Vokalia and Consonantia, there live the blind
                        texts.
                      </p>
                      <span
                        class="quote d-flex align-items-center justify-content-center"
                      >
                        <i class="icon-quote-left"></i>
                      </span>
                    </div>

                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/person_2.jpg)"
                      ></div>
                      <div class="ml-4">
                        <p class="name">Floyd Weather</p>
                        <span class="position">Customer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <div class="line pl-5">
                      <p class="mb-4 pb-1">
                        Far far away, behind the word mountains, far from the
                        countries Vokalia and Consonantia, there live the blind
                        texts.
                      </p>
                      <span
                        class="quote d-flex align-items-center justify-content-center"
                      >
                        <i class="icon-quote-left"></i>
                      </span>
                    </div>

                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/person_3.jpg)"
                      ></div>
                      <div class="ml-4">
                        <p class="name">James Dee</p>
                        <span class="position">Customer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <div class="line pl-5">
                      <p class="mb-4 pb-1">
                        Far far away, behind the word mountains, far from the
                        countries Vokalia and Consonantia, there live the blind
                        texts.
                      </p>
                      <span
                        class="quote d-flex align-items-center justify-content-center"
                      >
                        <i class="icon-quote-left"></i>
                      </span>
                    </div>

                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/person_4.jpg)"
                      ></div>
                      <div class="ml-4">
                        <p class="name">Lance Roger</p>
                        <span class="position">Customer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <div class="line pl-5">
                      <p class="mb-4 pb-1">
                        Far far away, behind the word mountains, far from the
                        countries Vokalia and Consonantia, there live the blind
                        texts.
                      </p>
                      <span
                        class="quote d-flex align-items-center justify-content-center"
                      >
                        <i class="icon-quote-left"></i>
                      </span>
                    </div>

                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/person_2.jpg)"
                      ></div>
                      <div class="ml-4">
                        <p class="name">Kenny Bufer</p>
                        <span class="position">Customer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
get_footer(); 
?>