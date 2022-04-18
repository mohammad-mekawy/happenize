@extends('layouts.app')
@section('content')
<div class="colored-line d-flex col-12">
    <img src="{{asset('assets/imgs/colored-line.jpg')}}" alt="line" width="100%" />
</div>
<!-- Header Start -->
<header class="position-relative blog-header">
  @include('includes.navbar')
  <div class="h-100 d-flex justify-content-center">
    <div class="header-text text-center">
        <h2>Blog</h2>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">Blog</a></li>
            </ol>
        </nav>
    </div>
  </div>
  @include('includes.social-icons')
</header>
<!-- Header End -->
<!-- Team Member Start -->
<section class="get-started text-center position-relative">
  <div class="container">
    <div class="title-section d-inline-block">
        <h3 class="title">Our Blog</h3>
        <div class="colored-line m-auto">
          <img src="{{asset('assets/imgs/titleLine.png')}}" alt="line" width="100%" />
        </div>
    </div>
    <p class="brief px-lg-5">We are committed to providing our customers with exceptionalService <br class="d-none d-lg-block"> while offering our employees the best training</p>
    <div class="all-blogs text-start">
      <div class="row">
        <div class="col-lg-8 mb-4 mb-lg-0">
          <div class="blog-box">
            <img src="{{asset('assets/imgs/blog/all_blogs/detail-shot-patterned-wall.jpg')}}" class="w-100" alt="">
            <div class="blog-info">
              <h3>The Rise of The Chatbots</h3>
              <p>For the past few decades, technology has been hooked onto the idea of automating all activities with minimal human interference. From a business point of view, these automation systems have drastically minimized the need for call center assistants,</p>
              <a href="https://happenize.ae/blog/the-rise-of-the-chatbots" class="k-ripple">Know More</a>
            </div>
          </div>
          <div class="blog-box">
            <img src="{{asset('assets/imgs/blog/all_blogs/businessman-holding-tablet-management-group-people-his-hand.jpg')}}" class="w-100" alt="">
            <div class="blog-info">
              <h3>Metrics that Matter - 5 Social Media Metrics You Need to be Keeping an Eye Out For</h3>
              <p>Social media has become one of the most powerful and influential tools of marketing in the past decade. With how prevalent, accelerated, and multifunctional it can be, it is no surprise that it has become the most preferred tool of digital marketers, to reach out to their audience.</p>
              <a href="https://happenize.ae/blog/post-2" class="k-ripple">Know More</a>
            </div>
          </div>
          <div class="blog-box">
            <img src="{{asset('assets/imgs/blog/all_blogs/image.jpg')}}" class="w-100" alt="">
            <div class="blog-info">
              <h3>Time is of the Essence</h3>
              <p>Have you ever wondered how while some people are able to speed through their daily tasks with so much ease, we’re sitting on our chair, barely halfway through our checklist? Fear not, you are not alone.</p>
              <a href="https://happenize.ae/blog/post-3" class="k-ripple">Know More</a>
            </div>
          </div>
          <div class="blog-box">
            <img src="{{asset('assets/imgs/blog/AWARD-WINNING-DIGITAL-MARKETING-AGENCY/DSC07626.webp')}}" class="w-100" alt="">
            <div class="blog-info">
              <h3>AWARD WINNING DIGITAL MARKETING AGENCY</h3>
              <p>As part of our efforts on being the official media partners of the
              20th Annual Regional Audit Conference, organized by the U.A.E
              Internal Auditors Association, we got featured in the press!</p>
              <a href="https://happenize.com/blogs/AWARD-WINNING-DIGITAL-MARKETING-AGENCY" class="k-ripple">Know More</a>
            </div>
          </div>
          <div class="pagination text-center hd">
            <ul class="list-unstyled w-100">
              <li>
                <a href="#" class="active">1</a>
              </li>
              <li>
                <a href="#">2</a>
              </li>
              <li>
                <a href="#">3</a>
              </li>
              <li>
                <a href="#">4</a>
              </li>
              <li>
                <a href="#">5</a>
              </li>
              <li>
                <a href="#">6</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="blogs-side">
            <div class="search-input position-relative">
              <input type="text" class="form-control">
              <i class="fas fa-search position-absolute"></i>
            </div>
            <div class="blogs-category">
              <ul class="list-unstyled w-100">
                <li>
                  <a href="#" class="active">Subtasks</a>
                </li>
                <li>
                  <a href="#">Graphical Timesheet</a>
                </li>
                <li>
                  <a href="#">Calendar Integration</a>
                </li>
                <li>
                  <a href="#">Powerful Reports</a>
                </li>
                <li>
                  <a href="#">Mobile/Desktop Apps</a>
                </li>
                <li>
                  <a href="#">Calculating Income</a>
                </li>
                <li>
                  <a href="#">Automatic Time Tracking</a>
                </li>
                <li>
                  <a href="#">One Click Time Tracking</a>
                </li>
              </ul>
            </div>
            <div class="blogs-contact-box">
              <p>You can contact us for purchase, installation and customizations.</p>
              <a href="{{url('contact')}}">Contact Us</a>
            </div>
            <div class="blogs-tags-box">
              <a href="#">Team</a>
              <a href="#">Android</a>
              <a href="#">Hotel</a>
              <a href="#">Development</a>
              <a href="#">Coding</a>
              <a href="#">Support</a>
              <a href="#">Database</a>
              <a href="#">Backup</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Team Member End -->
@endsection