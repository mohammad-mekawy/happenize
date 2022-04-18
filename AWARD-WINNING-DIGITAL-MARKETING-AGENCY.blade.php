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
            <a href="#">AWARD WINNING DIGITAL MARKETING AGENCY</a>
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
        <h1 class="The-Rise-of-The-Chat">AWARD WINNING DIGITAL MARKETING AGENCY</h1>
        <div class="under-title d-flex justify-content-between">
          <div class="meta">
            <span class="purple Category-name">Guides</span>
            <span class="Time-reading"> 8 minutes reading </span>
            <span class="Time-reading-Copy ParagraphGrayLeft">
            8<sup>th</sup> March 2022
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
          As part of our efforts on being the official media partners of the
              20th Annual Regional Audit Conference, organized by the U.A.E
              Internal Auditors Association, we got featured in the press!
          </p>
          <p class="content">
          Dubai, United Arab Emirates: The 20th Annual Regional Audit
              Conference (ARAC), the largest smart conference for internal
              auditors, organized by the UAE Internal Auditors Association (UAE
              IAA) concluded successfully with overwhelming participation from
              global experts, the who-is-who of internal audit, government
              officials and a large number of internal audit professionals from
              across the world.
          </p>
          <p class="content">
          “It was beyond our expectation that the internal audit
              professionals could be engaged with experts and professionals at a
              time when internal audit is subject to revolution and
              transformation with the advent of technology such as Artificial
              Intelligence, Robotics, Blockchain and data analytics,” said
              Abdulqader Obaid Ali, Chairman of the Board, UAE IAA. “This year’s
              conference is marked by the widespread participation as evidenced
              by the fastest recovery to business as usual powered by the
              resilience of the UAE economy, guided by our leadership. This
              encourages us to embark on new projects and initiatives to attract
              young Emiratis to the profession by expanding our Hassaad Program
              aiming to graduate 500 Emiratis to internal audit career.” “The
              success is mainly due to the wholehearted and unstinted support
              and cooperation of our sponsors,” Abdulqader said.
            </p>
          </p>
        </div>
        <div class="col-md-5 pt-3">
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
        The organisers honoured the sponsors such as KPMG, Bee'ah,
              Protiviti, PricewaterhouseCoopers, ANB, Beinex, Empowered Systems,
              Asight and Arbutus. Emirates airline was the official carrier and
              Happenize was media partner. Excelledia, ZeeDimension and Diligent
              were exhibitors. Terry Cutler, CEO, Cyology Labs Canada and
              Ethical Hacker, said: "I am really thankful to UAE IAA officials
              for the opportunity to come and speak with everybody and it was
              pleasure to share my knowledge with the internal auditors who can
              now do their jobs ever better. The profession is having a tough
              time keep up with the new challenges in cyber security. This
              forces the industry to get information from IT which may not be
              complete, but they need more professional support from cyber
              security experts. The mindset of the small and medium size
              businesses is that they are too small to be hacked, but they
              should understand that it is all about monetary purpose, and the
              hackers target small businesses with ransomware and extort money
              from them, which could bankrupt them."
        </p>
      </div>
      <div class="px-5 py-3">
        <picture>
          <source
            srcset="{{asset('assets/imgs/blog/AWARD-WINNING-DIGITAL-MARKETING-AGENCY/DSC07626.webp')}}"
            type="image/webp"
          />
          <source
            srcset="{{asset('assets/imgs/blog/AWARD-WINNING-DIGITAL-MARKETING-AGENCY/DSC07626.jpg')}}"
            type="image/png"
          />
          <img
            src="{{('assets/imgs/blog/AWARD-WINNING-DIGITAL-MARKETING-AGENCY/DSC07626.webp')}}"
            alt="skyscrapers from low angle view"
          />
        </picture>
      </div>
      <div>
        <p class="content text-center">
        Cutler said CyologyLabs is planning to set up shop in the UAE and a
            strategic partner has already approached the ethical hacker. "We are
            in discussion with them and plan to extend our services to the
            businesses here once we set up a facility here in the UAE," he said.
            <br />
            The takeaway from the conference is that internal auditors could
            hear from the experts such as Jordan Belfort, American author, The
            Real Wolf of Wall Street, motivational speaker and former
            stockbroker; Henrik Stein, Former President of European
            Confederation of the Institutes of Internal Auditing (ECIIA); and
            Terry Cutler, CEO, Cyology Labs Canada and Ethical Hacker.
            <br />
            It was a great experience for the audience to learn from them global
            good practices, the latest in data analytics that is shaping the
            internal audit practice in line with technology disruption.
            <br />
            “Abdulqader’s call embrace technology to do our job more effectively
            and efficiently has been well heeded and we are now determined to
            hone our skills in tandem with the emergence of new technology as we
            know that we have to be agents of change for our organisations,”
            said a participant.
            <br />
            “In a new world where the banks are competing with global technology
            companies rather than their peers, internal audit functions should
            also transform themselves to stay relevant. But this can only happen
            via going back to the fundamentals defining why they exist, rather
            than using fancy terminology and a tech jargon” said Volkan Pekince,
            Group Chief Internal Audit, Dubai Islamic Bank.
            <br />
            Panel discussions and workshops covered topics such as: Digital,
            Cyber Security and Resilience Trends; Tech Talk: Reimagining
            Digitization of the Information Security World; Building a
            Successful Competency Framework for Auditors; “Auditing the new
            world of AI & automation… and your place in it.”
            <br />
            The other major topics discussed at the conference include: Cracking
            the Code: Emerging Risks; Re-imagining Risk Management; Building a
            modern audit function: A Take-to-enterprise Road Map; Cracking the
            Code: Digital Risk / Cyber Security; Procurement fraud; Balancing
            product sustainability against business profitability:
            Sustainability reporting practices and corporate governance;
            Regulatory compliance; Robotics Risk Monitoring; Audit
            transformation with data analytics; Audit Department’s Road Map to
            Success.
            <br />
            UAE IAA, a non-profit organization, was set up in 1995 along the
            lines of its parent body, the Institute of Internal Auditors (IIA
            Global) which has 200,000 members from more than 190 countries and
            organizations. The UAE accounts for about 45% of the total number of
            internal auditors working in the region, estimated at about 7,000
            auditors, of which 22% are Emiratis.

            <br />
            For more information, view the link to the press release -
            <a
              href="https://www.zawya.com/en/press-release/events-and-conferences/largest-smart-conference-for-internal-auditors-in-dubai-successful-with-wider-participation-and-support-tjp76kbi"
              >https://www.zawya.com/en/press-release/events-and-conferences/largest-smart-conference-for-internal-auditors-in-dubai-successful-with-wider-participation-and-support-tjp76kbi</a
            >
        </p>
      </div>
    </div>
</article>
<!-- post end -->
@endsection