<?php
/*
Template Name: ABOUT US main
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
            <h1 class="mb-3 bread">Giới thiệu</h1>
            <p class="breadcrumbs">
              <span class="mr-2"><a href="home.html">Trang chủ</a></span>
              <span>Giới thiệu</span>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-intro" style="background-color: #191925">
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
                  ><span class="ion-ios-checkmark-circle mr-3"></span>Lash World
                  Cup</a
                >
              </li>
              <li class="ftco-animate">
                <a href="#"
                  ><span class="ion-ios-checkmark-circle mr-3"></span>VietNam Beauty Association</a
                >
              </li>
              <li class="ftco-animate">
                <a href="#"
                  ><span class="ion-ios-checkmark-circle mr-3"></span>INternational Lash Master GOLD COAST LASH CONFERENCE</a
                >
              </li>
              <li class="ftco-animate">
                <a href="#"
                  ><span class="ion-ios-checkmark-circle mr-3"></span>Japan Lash Association (JLA) Certification</a
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

    <section class="ftco-gallery ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-4 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Master Trúc Phạm</h3>
            <h2 class="mb-1">Giải thưởng</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 ftco-animate">
            <a
              href="<?php echo get_template_directory_uri() ; ?>/assets/images/giaithuong4.png"
              class="gallery image-popup img d-flex align-items-center"
              style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/giaithuong4.png)"
            >
            </a>
            <div class="desc">Lash World Cup</div>
          </div>
          <div class="col-md-3 ftco-animate">
            <a
              href="<?php echo get_template_directory_uri() ; ?>/assets/images/giaithuong2.png"
              class="gallery image-popup img d-flex align-items-center"
              style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/giaithuong2.png)"
            >
            </a>
            <div class="desc">VietNam beauty Association</div>
          </div>
          <div class="col-md-3 ftco-animate">
            <a
              href="<?php echo get_template_directory_uri() ; ?>/assets/images/giaithuong44.jpg"
              class="gallery image-popup img d-flex align-items-center"
              style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/giaithuong44.jpg)"
            >
            </a>
            <div class="desc">INternational Lash Master GOLD COAST LASH CONFERENCE</div>
          </div>
          <div class="col-md-3 ftco-animate">
            <a
              href="<?php echo get_template_directory_uri() ; ?>/assets/images/giaithuong3.png"
              class="gallery image-popup img d-flex align-items-center"
              style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/giaithuong3.png)"
            >
            </a>
            <div class="desc">Japan Lash Association (JLA) Certification</div>
          </div>
        </div>
      </div>
    </section>

    <section
      class="ftco-section img"
      id="section-counter"
      style="
        background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/SarahmiBg.jpg);
        box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);
      "
      data-stellar-background-ratio="0.5"
    >
      <div class="container">
        <div class="row justify-content-center mb-4 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">ABOUT SARAHMI</h3>
            <h2 class="mb-1" style="color: #d9bf77">Về chúng tôi</h2>
          </div>
        </div>
        <!-- <div class="row" style="height: 750px"> -->
        <div
          class="row ftco-animate justify-content-center"
          style="margin: 0px 5px"
        >
          <div class="block-7">
            <span class="mission-title m-auto">Sứ mệnh</span>
            <p>
              Chúng tôi tận tâm tạo nên vẻ đẹp tự nhiên, tôn vinh phong cách cá
              nhân và đem lại sự tự tin cho mỗi khách hàng, Sarahmi không ngừng
              nỗ lực để trở thành người bạn đồng hành đáng tin cậy trên hành
              trình chinh phục sắc đẹp.
            </p>
          </div>
        </div>
        <div
          class="row ftco-animate justify-content-center"
          style="margin: 0px 5px"
        >
          <div class="block-7">
            <span class="mission-title m-auto">Tầm Nhìn</span>
            <p>
              Sarahmi hướng đến trở thành một thương hiệu làm đẹp hàng đầu trong
              ngành, không chỉ nổi bật với chất lượng dịch vụ mà còn là nơi sáng
              tạo, khởi nguồn những xu hướng làm đẹp mới. Chúng tôi đặt mục tiêu
              mở rộng hệ thống và xây dựng cộng đồng làm đẹp chuyên nghiệp, nơi
              mà mỗi học viên và khách hàng đều cảm nhận được giá trị, sự trân
              trọng và niềm tự hào khi lựa chọn Sarahmi.
            </p>
          </div>
        </div>
        <div
          class="row ftco-animate justify-content-center"
          style="margin: 0px 5px"
        >
          <div class="block-7 w-100">
            <span class="mission-title">Giá Trị Cốt Lõi</span>
            <!-- <p>
                Đặt chất lượng dịch vụ lên hàng đầu, chúng tôi cam kết mang đến
                những trải nghiệm làm đẹp tuyệt vời và vượt trội cho khách hàng.
                Đội ngũ kỹ thuật viên được đào tạo bài bản, luôn giữ vững thái
                độ chuyên nghiệp và tận tâm trong từng thao tác. Sarahmi chú
                trọng xây dựng một thương hiệu vững mạnh, có trách nhiệm với xã
                hội, đóng góp vào sự phát triển bền vững của ngành làm đẹp.
              </p> -->
            <ul class="pricing-text">
              <li>
                Đặt chất lượng dịch vụ lên hàng đầu, chúng tôi cam kết mang đến
                những trải nghiệm làm đẹp tuyệt vời và vượt trội cho khách hàng.
              </li>
              <li>
                Đội ngũ kỹ thuật viên được đào tạo bài bản, luôn giữ vững thái
                độ chuyên nghiệp và tận tâm trong từng thao tác.
              </li>
              <li>
                Sarahmi chú trọng xây dựng một thương hiệu vững mạnh, có trách
                nhiệm với xã hội, đóng góp vào sự phát triển bền vững của ngành
                làm đẹp.
              </li>
            </ul>
          </div>
        </div>
        <!-- <div class="col-md-4 ftco-animate">
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
          </div> -->
        <!-- </div> -->
      </div>
    </section>

    <section class="ftco-section d-flex justify-content-center">
      <div
        class="container"
        style="
          max-width: 1500px !important;
          margin-left: 0px !important;
          margin-right: 0px !important;
        "
      >
        <div class="row justify-content-center mb-4 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Khóa học</h3>
            <h2 class="mb-1">Các khóa học tại Sarahmi</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-3 d-flex align-items-stretch">
            <div class="offer-deal text-center px-2 px-lg-5">
              <div
                class="img"
                style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/curlLashServ.jpg)"
              ></div>
              <div class="text mt-4">
                <h3 class="mb-4">Uốn mi</h3>
                <!-- <p class="mb-5">
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                </p> -->
                <p>
                  <a href="courses.html" class="btn btn-white px-4 py-3">
                    Xem thêm
                    <span class="ion-ios-arrow-round-forward"></span
                  ></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-items-stretch">
            <div class="offer-deal active text-center px-2 px-lg-5">
              <div
                class="img"
                style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/naturalLashServ.jpg)"
              ></div>
              <div class="text mt-4">
                <h3 class="mb-4">Nối mi tự nhiên</h3>
                <!-- <p class="mb-5">
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                </p> -->
                <p>
                  <a href="courses.html" class="btn btn-white px-4 py-3">
                    Xem thêm
                    <span class="ion-ios-arrow-round-forward"></span
                  ></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-items-stretch">
            <div class="offer-deal text-center px-2 px-lg-5">
              <div
                class="img"
                style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/designLashServ.jpg)"
              ></div>
              <div class="text mt-4">
                <h3 class="mb-4">Nối mi thiết kế</h3>
                <!-- <p class="mb-5">
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                </p> -->
                <p>
                  <a href="courses.html" class="btn btn-white px-4 py-3">
                    Xem thêm
                    <span class="ion-ios-arrow-round-forward"></span
                  ></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-items-stretch">
            <div class="offer-deal active text-center px-2 px-lg-5">
              <div
                class="img"
                style="background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/volumnLashServ.jpg)"
              ></div>
              <div class="text mt-4">
                <h3 class="mb-4">Nối mi Volume</h3>
                <!-- <p class="mb-5">
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                </p> -->
                <p>
                  <a href="courses.html" class="btn btn-white px-4 py-3">
                    Xem thêm
                    <span class="ion-ios-arrow-round-forward"></span
                  ></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section
      class="ftco-counter img"
      id="section-counter"
      style="
        background-image: url(<?php echo get_template_directory_uri() ; ?>/assets/images/SarahmiBg.jpg);
        box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);
      "
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div
                class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="1068">0</strong>
                    <span>Happy Customers</span>
                  </div>
                </div>
              </div>
              <div
                class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="65">0</strong>
                    <span>Treatments</span>
                  </div>
                </div>
              </div>
              <div
                class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="5">0</strong>
                    <span>Years of Experience</span>
                  </div>
                </div>
              </div>
              <div
                class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="80">0</strong>
                    <span>Lesson Conducted</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      class="ftco-section"
      style="padding: 0 !important; margin: 2em 1em"
    >
      <div
        class="container-fluid px-md-4"
        style="border: 5px solid #d9bf77; border-radius: 10px; padding: 3em"
      >
        <div class="row justify-content-center mb-4 pb-3">
          <div class="col-md-12 heading-section ftco-animate text-center">
            <h3 class="subheading">Dịch vụ</h3>
            <h2 class="mb-1">Các gói dịch vụ</h2>
          </div>
        </div>
        <div class="container d-none d-md-block">
          <div class="row justify-content-center">
            <div class="treatment-card col-lg-4 d-flex">
              <div
                class="treatment w-100 text-center ftco-animate border p-3 py-4"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <img
                    class="img-fluid service-image"
                    src="<?php echo get_template_directory_uri() ; ?>/assets/images/curlLashServ.jpg"
                    style="height: 270px"
                  />
                </div>
                <!-- <div class="text mt-2">
                  <h3>Uốn mi</h3>
                </div> -->
              </div>
            </div>
            <div class="treatment-card col-lg-4 d-flex">
              <div
                class="treatment w-100 text-center ftco-animate border p-3 py-4"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <img
                    class="img-fluid service-image"
                    src="<?php echo get_template_directory_uri() ; ?>/assets/images/naturalLashServ.jpg"
                    style="height: 270px"
                  />
                </div>
                <!-- <div class="text mt-2">
                  <h3>Nối mi tự nhiên</h3>
                </div> -->
              </div>
            </div>
            <div class="treatment-card col-lg-4 d-flex mb-0">
              <div
                class="treatment w-100 text-center ftco-animate border p-3 py-4"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <img
                    class="img-fluid service-image"
                    src="<?php echo get_template_directory_uri() ; ?>/assets/images/designLashServ.jpg"
                    style="height: 270px"
                  />
                </div>
                <!-- <div class="text mt-2">
                  <h3>Nối mi thiết kế</h3>
                </div> -->
              </div>
            </div>
            <!-- <div class="col-md-6 d-flex align-items-stretch">
              <div
                class="treatment w-100 text-center ftco-animate border p-3 py-4"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="flaticon-lotus"></span>
                </div>
                <div class="text mt-2">
                  <h3>Aroma</h3>
                  <p>A small river named Duden flows.</p>
                </div>
              </div>
            </div> -->

            <!-- <div class="col-lg-4 d-flex align-items-stretch">
              <div
                id="accordion"
                class="myaccordion w-100 text-center py-5 px-1 px-md-4"
              >
                <div>
                  <h3>Prices</h3>
                  <p>
                    Far far away, behind the word mountains, far from the
                    countries Vokalia
                  </p>
                </div>
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button
                        class="d-flex align-items-center justify-content-between btn btn-link"
                        data-toggle="collapse"
                        data-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                      >
                        Spa Therapies
                        <i class="fa" aria-hidden="true"></i>
                      </button>
                    </h2>
                  </div>
                  <div
                    id="collapseOne"
                    class="collapse show"
                    aria-labelledby="headingOne"
                    data-parent="#accordion"
                  >
                    <div class="card-body text-left">
                      <ul>
                        <li class="d-flex">
                          <span>Face Treatments</span>
                          <span>40 min.</span>
                          <span>$10</span>
                        </li>
                        <li class="d-flex">
                          <span>nailServ Treatments</span>
                          <span>30 min.</span>
                          <span>$20</span>
                        </li>
                        <li class="d-flex">
                          <span>Medical Treatments</span>
                          <span>60 min.</span>
                          <span>$10</span>
                        </li>
                        <li class="d-flex">
                          <span>Hair Treatments</span>
                          <span>30 min.</span>
                          <span>$30</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
  
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button
                        class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                      >
                        Massage Therapies
                        <i class="fa" aria-hidden="true"></i>
                      </button>
                    </h2>
                  </div>
                  <div
                    id="collapseTwo"
                    class="collapse"
                    aria-labelledby="headingTwo"
                    data-parent="#accordion"
                  >
                    <div class="card-body text-left">
                      <ul>
                        <li class="d-flex">
                          <span>Face Treatments</span>
                          <span>40 min.</span>
                          <span>$10</span>
                        </li>
                        <li class="d-flex">
                          <span>Nail Treatments</span>
                          <span>30 min.</span>
                          <span>$20</span>
                        </li>
                        <li class="d-flex">
                          <span>Medical Treatments</span>
                          <span>60 min.</span>
                          <span>$10</span>
                        </li>
                        <li class="d-flex">
                          <span>Hair Treatments</span>
                          <span>30 min.</span>
                          <span>$30</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <div class="row justify-content-center mt-5">
            <div class="treatment-card col-lg-4 d-flex">
              <div
                class="treatment w-100 text-center ftco-animate border p-3 py-4"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <img
                    class="img-fluid service-image"
                    src="<?php echo get_template_directory_uri() ; ?>/assets/images/volumnLashServ.jpg"
                    style="height: 270px"
                  />
                </div>
                <!-- <div class="text mt-2">
                  <h3>Nối mi Volume</h3>
                </div> -->
              </div>
            </div>
            <div class="treatment-card col-lg-4 d-flex">
              <div
                class="treatment w-100 text-center ftco-animate border p-3 py-4"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <img
                    class="img-fluid service-image"
                    src="<?php echo get_template_directory_uri() ; ?>/assets/images/nailServ.jpg"
                    style="height: 270px"
                  />
                </div>
                <!-- <div class="text mt-2">
                  <h3>Nail</h3>
                </div> -->
              </div>
            </div>
            <div class="treatment-card col-lg-4 d-flex">
              <div
                class="treatment w-100 text-center ftco-animate border p-3 py-4"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <!-- <span
                    class="flaticon-massage"
                    style="transform: scale(1.5); padding-top: 10px"
                  ></span> -->
                  <img
                    class="img-fluid service-image"
                    src="<?php echo get_template_directory_uri() ; ?>/assets/images/shampooServ.jpg"
                    style="height: 270px"
                  />
                </div>
                <!-- <div class="text mt-2">
                  <h3>Gội đầu thuần chay tinh chất bưởi non</h3>
                </div> -->
              </div>
            </div>
            <!-- <div class="col-md-6 d-flex align-items-stretch">
              <div
                class="treatment w-100 text-center ftco-animate border p-3 py-4"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="flaticon-rose"></span>
                </div>
                <div class="text mt-2">
                  <h3>Rose</h3>
                  <p>A small river named Duden flows.</p>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <div
          id="carouselExampleIndicators"
          class="carousel slide d-block d-md-none"
          data-ride="carousel"
        >
          <ol class="carousel-indicators" style="margin-top: 5rem">
            <li
              data-target="#carouselExampleIndicators"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item service-carousel active">
              <div class="content-item">
                <div class="treatment-card d-flex">
                  <div
                    class="treatment w-100 text-center ftco-animate border p-3 py-4"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <img
                        class="img-fluid service-image"
                        src="<?php echo get_template_directory_uri() ; ?>/assets/images/curlLashServ.jpg"
                      />
                    </div>
                    <!-- <div class="text mt-2">
                    <h3>Uốn mi</h3>
                  </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item service-carousel">
              <div class="content-item">
                <div class="treatment-card d-flex">
                  <div
                    class="treatment w-100 text-center ftco-animate border p-3 py-4"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <img
                        class="img-fluid service-image"
                        src="<?php echo get_template_directory_uri() ; ?>/assets/images/naturalLashServ.jpg"
                      />
                    </div>
                    <!-- <div class="text mt-2">
                    <h3>Nối mi tự nhiên</h3>
                  </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item service-carousel">
              <div class="content-item">
                <div class="treatment-card d-flex mb-0">
                  <div
                    class="treatment w-100 text-center ftco-animate border p-3 py-4"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <img
                        class="img-fluid service-image"
                        src="<?php echo get_template_directory_uri() ; ?>/assets/images/designLashServ.jpg"
                      />
                    </div>
                    <!-- <div class="text mt-2">
                    <h3>Nối mi thiết kế</h3>
                  </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item service-carousel">
              <div class="content-item">
                <div class="treatment-card d-flex mb-0">
                  <div
                    class="treatment w-100 text-center ftco-animate border p-3 py-4"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <img
                        class="img-fluid service-image"
                        src="<?php echo get_template_directory_uri() ; ?>/assets/images/volumnLashServ.jpg"
                      />
                    </div>
                    <!-- <div class="text mt-2">
                    <h3>Nối mi thiết kế</h3>
                  </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item service-carousel">
              <div class="content-item">
                <div class="treatment-card d-flex mb-0">
                  <div
                    class="treatment w-100 text-center ftco-animate border p-3 py-4"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <img
                        class="img-fluid service-image"
                        src="<?php echo get_template_directory_uri() ; ?>/assets/images/nailServ.jpg"
                      />
                    </div>
                    <!-- <div class="text mt-2">
                    <h3>Nối mi thiết kế</h3>
                  </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item service-carousel">
              <div class="content-item">
                <div class="treatment-card d-flex mb-0">
                  <div
                    class="treatment w-100 text-center ftco-animate border p-3 py-4"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <img
                        class="img-fluid service-image"
                        src="<?php echo get_template_directory_uri() ; ?>/assets/images/shampooServ.jpg"
                      />
                    </div>
                    <!-- <div class="text mt-2">
                    <h3>Nối mi thiết kế</h3>
                  </div> -->
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