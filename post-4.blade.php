@extends('layouts.app')
@section('content')
<div class="colored-line d-flex col-12">
    <img src="{{asset('assets/imgs/colored-line.jpg')}}" alt="line" width="100%" />
</div>
<!-- Header Start -->
<header class="position-relative">
  @include('includes.navbar')
  <div class="h-100 d-flex justify-content-center">
    <div class="header-text text-center">
      <h2>Blog</h2>
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item" aria-current="page">
            <a href="#">Blog</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            <a href="#">Technology Event, IDC Announces its Theme for 15th Edition of
      Middle East CIO Summit 2022</a>
          </li>
        </ol>
      </nav>
    </div>
  </div>
  @include('includes.social-icons')
</header>
<!-- Header End -->
<!-- post start-->
<article>
    <div class="container post">
      <div class="title d-inline-block">
        <h1 class="The-Rise-of-The-Chat">Technology Event, IDC Announces its Theme for 15th Edition of
      Middle East CIO Summit 2022</h1>
        <div class="under-title d-flex justify-content-between">
          <div class="meta">
            <span class="purple Category-name">Guides</span>
            <span class="Time-reading"> 8 minutes reading </span>
            <span class="Time-reading-Copy ParagraphGrayLeft">
              25.01.2021
            </span>
          </div>
          <div class="social-share">
            <!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_linkedin"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_facebook"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <p class="excerpt mb-4 mt-4">
          As Happenize decides to take a step forward in the digital
              acceleration of industries in 2022, we are thrilled to support the
              upcoming technological events for the year. One such event that
              we’re working on is the 15th Edition of the Middle East CIO Summit
              2022, themed ‘Region’s Organizations Accelerate Their Digital
              Roadmaps.’
          </p>
          <p class="content">
          According to IDC research, 63% of CIOs in the Middle East have
              brought their digital roadmaps forward by at least one year as a
              result of the global COVID-19 pandemic. With digital acceleration
              in full swing, and many organizations now on their way to
              recovery, the IDC Middle East CIO Summit 2022 will explore the
              ongoing shift in priorities as it hosts some of the biggest names
              in ICT.
          </p>
          <p class="content">
          Taking place in a hybrid format, the 15th edition of this highly
              anticipated event will run under the theme ‘Accelerating Your
              Journey to a Digital-First World’, with a physical event taking
              place in Dubai on February 22, to be followed by a two-day digital
              installment for the wider GCC region on February 23 and 24. The
              IDC Middle East CIO Summit 2022 will feature a series of
              presentations, panel discussions, real-life use cases, and
              individual technology tracks. With Days 2 and 3 hosted on IDC’s
              fully immersive virtual platform, delegates will be able to
              explore a broad range of themes central to their ongoing digital
              journeys and take an exclusive look at the very latest
              developments in technological innovation.
          </p>
        </div>
        <div class="col-md-5">
          <form class="mt-3">
            <div class="mb-4">
              <label for="FirstName" class="form-label"> First Name </label>
              <input type="text" class="form-control" id="FirstName" />
            </div>
            <div class="mb-4">
              <label for="LastName" class="form-label"> Last Name </label>
              <input type="text" class="form-control" id="LastName" />
            </div>
            <div class="mb-4">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
              />
            </div>
            <div class="mb-4">
              <label for="Mobile" class="form-label">Mobile Number</label>
              <input type="text" class="form-control" id="Mobile" />
            </div>
            <div class="mb-4">
              <label for="Select" class="form-label">Select</label>
              <select class="form-select" id="Select">
                <option selected>select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <button type="submit" class="btn btn-purpel">Submit</button>
          </form>
        </div>
      </div>
      <div>
        <p class="content text-center">
        “As the uncertainty wrought by the pandemic continues, and many
            organizations strive to recover, they are taking a digital-first
            approach to building resilience into their operations,” says Jyoti
            Lalchandani, IDC’s group vice president and regional managing
            director for the Middle East, Turkey, and Africa. “This means that
            the journey to becoming a ‘Future Enterprise’ has accelerated,
            spurred by significant investments in new customer experiences, new
            digital ecosystem business models, digital supply chains, and
            ‘Future of Work’ models. “This all needs to be supported by
            resilient, cloud-enabled digital infrastructure and applications,
            rapid app development, digital platforms, data-driven and AI-enabled
            intelligence, comprehensive security, and unwavering trust.
            Effective leadership, an appetite for innovation, a broad range of
            skills, and a sound strategy for addressing regulations will be key
            to driving the digital agenda. Technology suppliers must also adapt
            as they position their solutions and work with customers to help
            address these new priorities and buying requirements.
        </p>
      </div>
      <div class="px-5 py-3">
        <a href="https://www.idc.com/mea/events/69074-idc-middle-east-cio-summit-2022"
            target="_blank">
            
        <picture>
          <source
            srcset="{{asset('assets/imgs/blog/Technology-Event/poster.webp')}}"
            type="image/webp"
          />
          <source
            srcset="{{asset('assets/imgs/blog/Technology-Event/poster.jpg')}}"
            type="image/png"
          />
          <img
            src="{{('assets/imgs/blog/Technology-Event/poster.webp')}}"
            alt="skyscrapers from low angle view"
          />
        </picture>
          </a>
      </div>
      <div class="mt-4">
        <p class="content text-center">
        “With all this in mind, the annual IDC Middle East CIO Summit is the
            place to come for thought-provoking, in-depth discussions about
            cutting-edge tech solutions, emerging use cases, and proven
            strategies for driving success. For 15 straight years, it has served
            as the ICT world’s premium source of learning about the industry’s
            latest developments.”
        </p>
      </div>
      <div>
        <p class="content text-center">
        Senior business leaders, influential IT heads, and respected
            industry analysts will converge on the IDC Middle East CIO Summit
            2022 to share their collective expertise on how best to meet the
            unique challenges of these unprecedented times. Following the
            immense success of last year’s event, the 2022 edition will see the
            return of the CIO Masterclass Arena that attendees can access
            throughout the course of the event. This section of the virtual
            platform will showcase a series of exclusive CXO best-practice
            presentations, fireside chats, and panel discussions with more than
            50 international and regional industry pioneers. To register for the
            IDC MEA, visit
            <a
              href="https://www.idc.com/mea/events/69074-idc-middle-east-cio-summit-2022"
              target="_blank"
              >idc.com/mea/events/69074-idc-middle-east-cio-summit-2022</a
            >
            .
        </p>
      </div>
    </div>
</article>
<!-- post end -->
@endsection