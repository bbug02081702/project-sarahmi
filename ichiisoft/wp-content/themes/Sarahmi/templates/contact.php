<?php
/*
Template Name: CONTACT
*/
get_header(); 
?>
<section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9 justify-content-between">
          <div class="col-md-5 contact-info ftco-animate bg-light p-4">
            <div class="row">
              <div class="col-md-12 mb-3">
                <div
                  style="
                    width: 25%;
                    height: 100%;
                    background-color: #3c3c3c;
                    border-radius: 50%;
                  "
                >
                  <img
                    src="<?php echo get_template_directory_uri() ; ?>/assets/images/SarahmiLogo.png"
                    alt="SarahmiLogo"
                    style="width: 100%; height: 100%; border-radius: 50%"
                  />
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <p
                  style="
                    font-weight: bold;
                    font-style: italic;
                    font-family: 'Prata', serif;
                  "
                >
                  Học viên Sarahmi – Chuyên nghiệp trong từng thao tác, hoàn hảo
                  trong từng trải nghiệm
                </p>
              </div>
              <div class="col-md-12 mb-2">
                <p>
                  <span>Địa chỉ:</span> 40b Cao Bá Nhạ, phường Nguyễn Cư Trinh,
                  Quận 1, Thành phố Hồ Chí Minh, Việt Nam 71013
                </p>
              </div>
              <div class="col-md-12 mb-2">
                <p>
                  <span>Điện thoại:</span>
                  <a href="tel://1234567920">0906000821</a>
                </p>
              </div>
              <div class="col-md-12 mb-2">
                <p>
                  <span>Email:</span>
                  <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                </p>
              </div>
              <div class="col-md-12 mb-2">
                <p><span>Website:</span> <a href="home.html">sarahmi.vn</a></p>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-1"></div> -->
          <div class="col-md-5 ftco-animate p-4">
            <!-- <div class="row">
              <div class="col-md-12 mb-4">
                <h2 class="h4">Contact Information</h2>
              </div>
              <div class="col-md-12 mb-3">
                <p>
                  <span>Address:</span> 198 West 21th Street, Suite 721 New York
                  NY 10016
                </p>
              </div>
              <div class="col-md-12 mb-3">
                <p>
                  <span>Phone:</span>
                  <a href="tel://1234567920">+ 1235 2355 98</a>
                </p>
              </div>
              <div class="col-md-12 mb-3">
                <p>
                  <span>Email:</span>
                  <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                </p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Website:</span> <a href="#">yoursite.com</a></p>
              </div>
            </div> -->
            <form action="#" class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Họ và Tên (Enter your name)"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Số điện thoại( Phone Number)"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Email(Enter your Email Address)"
                    />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <select class="form-control form-select">
                  <option selected hidden>Chủ đề tư vấn (Topic Need Advice)</option>
                  <option value="service">Dịch vụ</option>
                  <option value="courses">Khóa học</option>
                  <option value="other">Khác</option>
                </select>
              </div>
              <div class="form-group">
                <textarea
                  name=""
                  id=""
                  cols="30"
                  rows="7"
                  class="form-control"
                  placeholder="Nội dung cần tư vấn (Content Need Advice)"
                ></textarea>
              </div>
              <div class="form-group">
                <input
                  type="submit"
                  value="Gửi"
                  class="btn btn-primary py-3 px-5"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15678.543014716157!2d106.689753!3d10.76253!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752c20574db643%3A0xc8024c25be74dc3!2zSOG7jWMgVmnhu4duIE7hu5FpIE1pIFNBUkFIIE1J!5e0!3m2!1sen!2s!4v1723535085204!5m2!1sen!2s"
        width="100%"
        height="500px"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>

      <?php
get_footer(); 
?>