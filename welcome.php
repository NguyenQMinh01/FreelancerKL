<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="bot.css" rel="stylesheet">

  <title>My Website</title>
</head>

<body>
  <!-- Header -->

  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <img style="width: 100px;" alt="Freelancer logo" class="LogoImg" src="https://www.f-cdn.com/assets/main/en/assets/freelancer-logo-old.svg" data-size="small">
            <div class="bx bx-menu" id="menu-icon"></div>
          </a>

        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Trang chủ</a></li>
            <!-- <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li> -->
            <li><a href="/login.php" data-after="About">Tìm việc làm</a></li>
            <li><a href="/login.php" data-after="Contact">Thuê Freelancer</a></li>
            <li><a class="btn-login" href="http://localhost:3000/login.php" onclick="login()">Đăng nhập</a></li>
            <li><a href="/login.php"><button type="button" class="btn btn-primary">Đăng dự án</button></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->

  <section id="hero">
    <div class="hero container">
      <div></div>

      <h1>Xin Chào, <span></span></h1>
      <h1> Website <span></span></h1>
      <h1>Freelancer <span></span></h1>
      <a href="#projects" type="button" class="cta">Thuê Freelancer</a>
    </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title"><span>D</span>ịch Vụ <span>N</span>ổi Bật</h1>
        <h2 style="font-size:15px;">Thuê những người làm việc tự do tốt nhất cho bất kỳ công việc nào, trực tuyến.</h2>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Web Design</h2>
          <p>những công việc design web phổ biến, nổi bật</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Lập trình di động</h2>
          <p>Những công việc lập trình mobile hấp dẫn</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Mạng máy tính</h2>
          <p>Những công việc về mạng máy tính nổi bật</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>AI </h2>
          <p>Trí tuệ nhân tạo mở rộng, dễ làm dễ nghiên cứu</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Giới thiệu <span>Trang Web</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Đăng dự án,
              Tiếp cận ngay các freelancer nổi bật </h1>
            <h2>Freelancer Việt Nam</h2>
            <p>Bạn sẽ nhanh chóng nhận được chào giá từ cộng đồng +100.000 Freelancer/</p>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Tiết kiệm thời gian tìm freelancer</h1>
            <h2>Freelancer Việt Nam</h2>
            <p>Freelancer sẽ kết nối bạn với Freelancer/Cộng tác viên trên lãnh thổ Việt Nam và quốc tế. Công việc của bạn sẽ nhanh chóng được giải quyết với chất lượng cao.</p>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Nhiều dịch vụ nổi bật</h1>
            <h2>Freelancer Việt Nam</h2>
            <p>Có nhiều dịch vụ về IT đặc sắc</p>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Đa dạng lĩnh vực công việc</h1>
            <h2>Freelancer Việt Nam</h2>
            <p>Freelancer tạo nhiều lĩnh vực IT nổi bậ</p>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Bảo mật thông tin cá nhân an toàn, khách hàng hài lòng</h1>
            <h2>Freelancer Việt Name</h2>
            <p>Khách hàng có thể đánh giá Freelancer sau khi hoàn thành việc. Điều này có ảnh hưởng đến sự uy tín của Freelancer. Thông tin cá nhân và công việc của bạn luôn được bảo mật theo chính sách bảo mật</p>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- Portfolios-->

  <section id="portfolio">
    <div class="main-text">

      <div class="projects-header">
        <h1 class="section-title"><span>L</span>ĩnh Vực <span>N</span>ổi Bật</h1>
      </div>

    </div>

    <div class="portfolio-content">
      <div class="row">
        <img src="./img/">
        <div class="main-row">
          <div class="row-text center">
            <h6 class="portfolio_title">Development</h6>
          </div>
          <div class="row-icon">
            <i class='bx bx-heart'></i>
          </div>
        </div>
        <h3 class="portfolio_description">Code Website & Services</h3>
      </div>

      <div class="row">
        <img src="./img/">
        <div class="main-row">
          <div class="row-text center">
            <h6 class="portfolio_title">Development</h6>
          </div>
          <div class="row-icon">
            <i class='bx bx-heart'></i>
          </div>
        </div>
        <h3 class="portfolio_description">Website design </h3>
      </div>

      <div class="row">
        <img src="./img/">
        <div class="main-row">
          <div class="row-text center">
            <h6 class="portfolio_title">Development</h6>
          </div>
          <div class="row-icon">
            <i class='bx bx-heart'></i>
          </div>
        </div>
        <h3 class="portfolio_description">Ruby On Rails</h3>
      </div>

      <div class="row">
        <img src="./img/">
        <div class="main-row">
          <div class="row-text center">
            <h6 class="portfolio_title">Development</h6>
          </div>
          <div class="row-icon">
            <i class='bx bx-heart'></i>
          </div>
        </div>
        <h3 class="portfolio_description">Mobile app landing design & Services</h3>
      </div>


      <div class="row">
        <img src="./img/">
        <div class="main-row">
          <div class="row-text">
            <h6 class="portfolio_title">Development</h6>
          </div>
          <div class="row-icon">
            <i class='bx bx-heart'></i>
          </div>
        </div>
        <h3 class="portfolio_description">Mobile app landing design & Services</h3>
      </div>

      <div class="row">
        <img src="./img/">
        <div class="main-row">
          <div class="row-text">
            <h6 class="portfolio_title">Development</h6>
          </div>
          <div class="row-icon">
            <i class='bx bx-heart'></i>
          </div>
        </div>
        <h3 class="portfolio_description">Mobile app landing design & Services</h3>
      </div>

    </div>
  </section>

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/img-1.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">Về <span>Trang Web Freelancer</span></h1>
        <h2>Freelancer Việt Nam</h2>
        <p> được biết là website freelance lớn nhất tại thị trường việc làm Freelance Việt Nam. Trang Websites quy tụ hơn 400,000 freelancer tài năng với nhiều lĩnh vực khác nhau.Freelancer dựa trên các thông tin mà bạn cung cấp, trang web sẽ giúp tìm việc làm Freelance phù hợp cho bạn. Nhờ đó, các bạn có thể chủ động chào giá khách hàng nhanh hơn. Như vậy cả khách hàng và Freelancer đều sẽ được bảo đảm quyền lợi cho cả hai phía.</p>
        <a href="/login.php" class="cta">Đăng nhập trang web</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Liên lạc <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+1 234 123 1234</h2>
            <h2>+1 234 123 1234</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>freelancer@gmail.com</h2>
            <h2>freelancer1@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Việt Nam</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>F</span>reelan<span>c</span>er</h1>
      </div>
      <h2>Your Complete Web Solution</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter-circled.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      </div>
      <p>Copyright © 2020 Arfan. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
  <script>



  </script>
</body>

</html>