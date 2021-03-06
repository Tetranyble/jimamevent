<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playground</title>

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/frontend.css') }}" />
    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<header class="header">
    <nav class="nav container">
        <div class="logo">
            <a href="#" class="nav__logo">Jimam</a>
        </div>
        <div class="nav__menu" id="nav-menu">
            <div class="nav__close" id="nav-close">
                <i class="bx bx-x"></i>
            </div>
            <ul class="nav__list">
                <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                <li class="nav__item"><a href="#featured" class="nav__link">Explore</a></li>
                <li class="nav__item"><a href="#women" class="nav__link">Packages</a></li>
                <li class="nav__item"><a href="#new" class="nav__link">Shop</a></li>
                <li class="nav__item"><a href="#new" class="nav__link">About Us</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Contact Us</a></li>
            </ul>
        </div>
        <div class="navigation__action">
            <div class="nav__shop">
                <i class="bx bx-shopping-bag"></i>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
    </nav>
    </div>
</header>
<main>
    <section class="home home-height ptb-112">
        <div class="container relative">
            <div class="row">
                <div class="hero-content ">
                    <div class="col-lg-6 col-md-6 z-index-2">
                        <div class="mb-5 ss">
                            <h1 class=" mb-3 hero-title">we create your <br>unique story</h1>
                            <p class="hero-text">we strongly believe that your wedding day
                                must be all about you, and we go above and
                                beyond to make your day more than
                                you could have ever image</p>
                        </div>
                        <a href="#" class="btn btn-primary-fill uppercase">Customize</a>
                        <a href="#" class="btn btn-primary-outline uppercase">See Packages</a>
                    </div>

                </div>
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="961.5" height="1156.37" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 961.5 1156.37" preserveAspectRatio=>
                    <defs>
                        <linearGradient id="linear-gradient" x1="0.5" x2="0.76" y2="1" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#dedede"/>
                            <stop offset="1" stop-color="#f0ecee"/>
                        </linearGradient>
                        <clipPath id="clip-path">
                            <path id="Path_200" data-name="Path 200" d="M1678.989-1126.747c-35.935,19.788-42.232,36.462-216.886,204.188s-200.856,216.184-209.92,361.019,57.574,403.457,386.56,526.435,428.624-50.95,428.981-103.292.205-791.407,0-841.7-54.222-109.986-151.405-146.648S1714.925-1146.535,1678.989-1126.747Z" transform="translate(-1251.405 1148.37)" fill="url(#linear-gradient)"/>
                        </clipPath>
                        <linearGradient id="linear-gradient-2" x1="0.156" y1="0.051" x2="0.915" y2="0.955" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#ece9e6"/>
                            <stop offset="1" stop-color="#fff"/>
                        </linearGradient>
                    </defs>
                    <g id="Group_70" data-name="Group 70" transform="translate(-568 14.37)">
                        <g id="Mask_Group_1" data-name="Mask Group 1" transform="translate(712.968 -14.37)" clip-path="url(#clip-path)">
                            <image id="pexels-misha-earle-1777843" width="824" height="1235" transform="translate(0.032 -6.63)" xlink:href="{{ asset('assets/image/wedding1.jpg') }}"/>
                        </g>
                        <path id="Path_201" data-name="Path 201" d="M973.085-984.521c-29.65,13.5-41.682,16.143-69.714,56.759s-32.9,158.084,69.714,241.738,122.49,74.933,188.734,77.5,91.787-35.676,94.053-38.137,7.331-14.829,0-39.367-29.98-51.061-54.392-88.575c-16.063-24.684-15.66-23.978-24.412-50.393-4.145-12.519-6.3-33.253-24.314-67.708C1100.072-993.445,1002.735-998.017,973.085-984.521Z" transform="matrix(0.978, 0.208, -0.208, 0.978, -425.165, 1323.697)" fill="url(#linear-gradient-2)"/>
                    </g>
                </svg>

            </div>
        </div>
    </section>
    <!-- Service section-->
    <section class="service relative ptb-112">
        <!-- <svg class="service-svg" width="100%" xmlns="http://www.w3.org/2000/svg"   viewBox="0 0 1139.019 129.778">
          <path id="Path_256" data-name="Path 256" d="M1476.109-817.045h391.123v-60.7s-35.811-68.748-151.37-69.081S1517.761-834.057,1405-835.073s-121.909-110.734-256.437-106.654S937.68-838.121,847.2-834.073s-118.988-35.541-118.988-35.541v52.569Z" transform="translate(-728.212 946.823)" fill="#dd5e89"/>
        </svg> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 513.557 505.38">
                        <g id="Group_71" data-name="Group 71" transform="translate(-31.516 -855.778)">
                            <path id="Path_206" data-name="Path 206"
                                  d="M2633.027-1067.791c10.557-9.957,72.319-74.937,166.282-45.067s188.452,125.244,192.675,134.677,36.423,40.351,19,122.624-118.772,190.748-148.333,206.993c-29.033,14.149-95.018,53.976-153.612,16.769s-158.364-82.273-183.174-125.768-33.257-79.129-2.639-151.97S2622.469-1057.834,2633.027-1067.791Z"
                                  transform="translate(-2471.558 1977)" fill="none" stroke="#fff" stroke-width="1" />
                            <g id="Ellipse_53" data-name="Ellipse 53" transform="translate(46.965 1211.437)" fill="#fff" stroke="#fff"
                               stroke-width="1">
                                <circle cx="8.906" cy="8.906" r="8.906" stroke="none" />
                                <circle cx="8.906" cy="8.906" r="8.406" fill="none" />
                            </g>
                            <path id="Path_207" data-name="Path 207"
                                  d="M2753.635-1103.695c8.483,0,69.351-22.026,125.456,33.039s85.744,193.51,80.451,247.526-23.289,81.285-58.751,112.75-114.884,48.771-147.156,54.015-99.492,16.781-150.833-34.612-76.746-142.642-75.158-195.608.529-107.506,54.517-155.752C2593.275-1054.924,2745.152-1103.695,2753.635-1103.695Z"
                                  transform="translate(-2453.355 1986.55)" fill="none" stroke="#fff" stroke-width="1" />
                            <path id="Path_208" data-name="Path 208"
                                  d="M2677-1083.592s58.771-38.3,112.247-6.82,127.073,124.329,153.017,187.805-5.824,112.788-11.648,118.559-77.3,89.706-130.25,105.444-106.423,25.181-181.078-15.738-91.068-158.428-91.068-174.69-2.648-90.23,46.593-135.87S2677-1083.592,2677-1083.592Z"
                                  transform="translate(-2452.887 1990.505)" fill="none" stroke="#fff" stroke-width="1" />
                            <g id="Ellipse_54" data-name="Ellipse 54" transform="translate(405.37 962.487)" fill="#fff" stroke="#fff"
                               stroke-width="1">
                                <ellipse cx="8.906" cy="8.35" rx="8.906" ry="8.35" stroke="none" />
                                <ellipse cx="8.906" cy="8.35" rx="8.406" ry="7.85" fill="none" />
                            </g>
                        </g>
                    </svg>
                    <div class="circle circle-1">
                        <div class="circle-content">
                            <div class="circle-header">
                                <h1>Planning</h1>
                            </div>
                            <div class="circle-body">
                                <ul class="circle-list">
                                    <li class="list">Background check</li>
                                    <li class="list">Ongoing coaching and skills with an one-staff register</li>
                                    <li class="list">Ongoing coaching and skills with an one-staff register</li>
                                </ul>
                                <div class="circle-action">
                                    <a href="#" class="btn btn-no-background uppercase">learn more<i
                                            class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.474 503.004">
                        <g id="Group_72" data-name="Group 72" transform="translate(-31.526 -1417.496)">
                            <path id="Path_210" data-name="Path 210"
                                  d="M3114.693-1077.2c19.623,0,75.585-9.491,152.622,48.915s66.863,138.715,62.5,170.109-7.268,128.494-88.666,165-188.233,27.743-232.566-24.093-74.13-73.008-77.765-160.618c-8.7-67.989,14.17-120.719,46.513-150.4C3030.823-1077.366,3114.693-1077.2,3114.693-1077.2Z"
                                  transform="translate(-2842.102 2543.999)" fill="none" stroke="#fff" stroke-width="1" />
                            <path id="Path_209" data-name="Path 209"
                                  d="M2905.959-869.478c-.126-7-27.017-150.7,118.343-203.956s213.68-23.344,275.458,13.13,113.38,93.373,104.659,217.385-26.165,165.592-104.659,210.09-201.324,42.31-267.463,0C3013.851-648.256,2911.647-710.153,2905.959-869.478Z"
                                  transform="translate(-2871.92 2520.27)" fill="none" stroke="#fff" stroke-width="1" />
                            <path id="Path_211" data-name="Path 211"
                                  d="M2938.079-944.475s13.082-62.041,101.749-113.864c78.492-37.225,149.717-29.2,218.034,0s91.575,63.5,101.023,127.732S3345.8-772.948,3305.1-730.614s-95.208,84.668-170.067,78.1-165.706-74.449-172.974-83.938-35.613-36.495-37.793-108.755S2938.079-944.475,2938.079-944.475Z"
                                  transform="translate(-2854.01 2537.16)" fill="none" stroke="#fff" stroke-width="1" />
                            <g id="Ellipse_56" data-name="Ellipse 56" transform="translate(523.035 1607.687)" fill="#fff"
                               stroke="#fff" stroke-width="1">
                                <circle cx="10.483" cy="10.483" r="10.483" stroke="none" />
                                <circle cx="10.483" cy="10.483" r="9.983" fill="none" />
                            </g>
                        </g>
                    </svg>
                    <div class="circle circle-2">
                        <div class="circle-content">
                            <div class="circle-header">
                                <h1>Decoration</h1>
                            </div>
                            <div class="circle-body">
                                <ul class="circle-list">
                                    <li class="list">Background check</li>
                                    <li class="list">Ongoing coaching and skills with an one-staff register</li>
                                    <li class="list">Ongoing coaching and skills with an one-staff register</li>
                                </ul>
                                <div class="circle-action">
                                    <a href="#" class="btn btn-no-background uppercase">learn more<i
                                            class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.591 465.154">
                        <g id="Group_73" data-name="Group 73" transform="translate(-31.409 -1975.359)">
                            <path id="Path_212" data-name="Path 212"
                                  d="M2790.548-816.317s73.02-100.758,199.278-67.955,178.866,91.847,178.866,91.847,64.747,50.023,47.751,155.811S3107.99-461.942,3092.613-456.2s-74.459,41-169.962,25.422-169.154-90.206-174.819-97.587-46.942-50.844-33.992-135.31S2790.548-816.317,2790.548-816.317Z"
                                  transform="translate(-2679.339 2866.839)" fill="none" stroke="#fff" stroke-width="1" />
                            <path id="Path_213" data-name="Path 213"
                                  d="M2971.812-867.434c58.273,10.686,90.647,43.568,97.121,56.721s26.709,26.306,51.8,111.8-9.712,135.638-12.14,143.859-121.1,129.822-260.552,45.088-140.079-282.026-28.015-330.716S2971.812-867.434,2971.812-867.434Z"
                                  transform="translate(-2648.376 2887.221)" fill="none" stroke="rgba(255,255,255,0.76)"
                                  stroke-width="1" />
                            <path id="Path_214" data-name="Path 214"
                                  d="M2744.931-683.3c15.112-52.06,19.752-104.747,104.422-164.182s169.34-12.646,215.41,11.381,73.464,92.947,70.973,124.561-3.114,73.978-33,138.471-90.273,85.991-90.273,85.991-83.425,18.969-160.624-15.807-94.632-68.919-98.367-79.036S2729.818-631.244,2744.931-683.3Z"
                                  transform="translate(-2648.444 2882.772)" fill="none" stroke="#fff" stroke-width="1" />
                            <g id="Ellipse_58" data-name="Ellipse 58" transform="translate(525.468 2136.074)" fill="#fff"
                               stroke="#fff" stroke-width="1">
                                <circle cx="9.266" cy="9.266" r="9.266" stroke="none" />
                                <circle cx="9.266" cy="9.266" r="8.766" fill="none" />
                            </g>
                        </g>
                    </svg>
                    <div class="circle circle-3">
                        <div class="circle-content">
                            <div class="circle-header">
                                <h1>Consulting</h1>
                            </div>
                            <div class="circle-body">
                                <ul class="circle-list">
                                    <li class="list">One hour booking minimum</li>
                                    <li class="list">No commitment</li>
                                    <li class="list">No subscription fees</li>
                                </ul>
                                <div class="circle-action">
                                    <a href="#" class="btn btn-no-background uppercase">learn more<i
                                            class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  <svg class="service-svg-bottom" width="100%" xmlns="http://www.w3.org/2000/svg" width="1137.487" height="156.474" viewBox="0 0 1137.487 156.474">
          <path id="Path_259" data-name="Path 259" d="M1866.5-171H729.013V-58.11s33.931,43.887,105.654,43.582,213.747-144.36,327.527-142.633S1265.816-24.382,1390.671-22.451s249-138.484,339.413-140.312S1866.5-97.73,1866.5-97.73Z" transform="translate(-729.013 171)" fill="#dd5e89"/>
        </svg> -->
        <div class="container">
        </div>
    </section>
    <!-- End service section-->
    <!-- Package section-->
    <section class="package ptb-112">
        <div class="container">
            <div class="section-header section-center">
                <h1 class="heads">Find your ideal package</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="packs">
                        <div class="price">
                            <span class="currency">$</span>
                            <h1 class="amount section-center">20</h1>
                        </div>
                        <div class="section-center">
                            <h1 class="Capitlize">Velvet</h1>
                        </div>
                        <div class="pack-body">
                            <div class="justify-space-between">
                                <span>Rectangle tablecloth</span>
                                <span class="badge border badge-pill">30</span>
                            </div>
                            <div class="justify-space-between">
                                <span>Rectangle tablecloth</span>
                                <span class="badge border badge-pill">30</span>
                            </div>
                            <div class="justify-space-between">
                                <span>Rectangle tablecloth</span>
                                <span class="badge border badge-pill">30</span>
                            </div>
                            <div class="section-center mt-10">
                                <a href="#" class="btn btn-primary-outline uppercase">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="packs">
                        <div class="price">
                            <span class="currency">$</span>
                            <h1 class="amount section-center">20</h1>
                        </div>
                        <div class="section-center">
                            <h1 class="Capitlize">Sequin</h1>
                        </div>
                        <div class="pack-body">
                            <div class="justify-space-between">
                                <span>Rectangle tablecloth</span>
                                <span class="badge border badge-pill">30</span>
                            </div>
                            <div class="justify-space-between">
                                <span>Rectangle tablecloth</span>
                                <span class="badge border badge-pill">30</span>
                            </div>
                            <div class="justify-space-between">
                                <span>Rectangle tablecloth</span>
                                <span class="badge border badge-pill">30</span>
                            </div>
                            <div class="section-center mt-10">
                                <a href="#" class="btn btn-primary-outline uppercase">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="packs">
                        <div class="price">
                            <span class="currency">$</span>
                            <h1 class="amount section-center">20</h1>
                        </div>
                        <div class="section-center">
                            <h1 class="Capitlize">Purple</h1>
                        </div>
                        <div class="pack-body">
                            <div class="justify-space-between">
                                <span>Rectangle tablecloth</span>
                                <span class="badge border badge-pill">30</span>
                            </div>
                            <div class="justify-space-between">
                                <span>Rectangle tablecloth</span>
                                <span class="badge border badge-pill">30</span>
                            </div>
                            <div class="justify-space-between">
                                <span>Rectangle tablecloth</span>
                                <span class="badge border badge-pill">30</span>
                            </div>
                            <div class="section-center mt-10">
                                <a href="#" class="btn btn-primary-outline uppercase">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-center">
                <a href="#" class="btn lowercase theme-primary">see all packages<i class='bx bx-right-arrow-alt'></i></a>
            </div>
        </div>
    </section>
    <div class="package ">
        <div class="container">
            <div class="section-header section-center">
                <h1 class="heads capitalize">Our Portfolio</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="potfolio-i">
                        <img src="{{ asset('assets/image/potfolio/gallery1.jpg') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="potfolio-i">
                        <img src="{{ asset('assets/image/potfolio/gallery2.jpg') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="potfolio-i">
                        <img src="{{ asset('assets/image/potfolio/gallery3.jpg') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="potfolio-i">
                        <img src="{{ asset('assets/image/potfolio/gallery4.jpg') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="potfolio-i">
                        <img src="{{ asset('assets/image/potfolio/gallery5.jpg') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="potfolio-i">
                        <img src="{{ asset('assets/image/potfolio/gallery6.jpg') }}" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="section-center">
                <a href="#" class="btn lowercase theme-primary">see all packages<i class='bx bx-right-arrow-alt'></i></a>
            </div>
        </div>
    </div>
    <div id="slider" class="testimony slider ptb-112">
        <div class="container overflow-hidden plr-2-5">
            <div class="section-header ">
                <h1 class="heads text-center">Customers Reviews</h1>
                <p class="text-center">Dimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy texen book. It has survived not only five centuries, but also the leap iining esse.
                </p>
            </div>
            <div id="slides" class="row slides">
                <div class="col-lg-4 col-md-6 slide">
                    <div class="testimony-container">
                        <div class="testimony-body">
                            <h4>29 November, 2020</h4>
                            <p>
                                @jimam scheduling of talks, allowing ample breaks, refueling & networking was
                                spot on. Diverse, smoothly run & down-to-earth. scheduling of talks, allowing
                                ample breaks, refueling & networking was spot on. Diverse, smoothly run &
                                down-to-earth. scheduling of talks, allowing ample breaks, refueling & networking
                                was spot on. Diverse, smoothly run & down-to-earth.
                            </p>
                        </div>
                        <div class="testimony-user">
                            <img class="round-user-image responsive-image" src="{{ asset('assets/image/testimony1.jpg') }}" alt="testimony user">
                            <div class="testimony-user-detail">
                                <h4 class="capitalize">Dolores Red</h4>
                                <h4 class="capitalize"> Php Developer</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 slide">
                    <div class="testimony-container">
                        <div class="testimony-body">
                            <h4>29 November, 2020</h4>
                            <p>
                                @jimam scheduling of talks, allowing ample breaks, refueling & networking was
                                spot on. Diverse, smoothly run & down-to-earth. scheduling of talks, allowing
                                ample breaks, refueling & networking was spot on. Diverse, smoothly run &
                                down-to-earth. scheduling of talks, allowing ample breaks, refueling & networking
                                was spot on. Diverse, smoothly run & down-to-earth.
                            </p>
                        </div>
                        <div class="testimony-user">
                            <img class="round-user-image responsive-image" src="{{ asset('assets/image/testimony1.jpg') }}" alt="testimony user">
                            <div class="testimony-user-detail">
                                <h4 class="capitalize">Dolores Red</h4>
                                <h4 class="capitalize"> Php Developer</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 slide">
                    <div class="testimony-container">
                        <div class="testimony-body">
                            <h4>29 November, 2020</h4>
                            <p>
                                @jimam scheduling of talks, allowing ample breaks, refueling & networking was
                                spot on. Diverse, smoothly run & down-to-earth. scheduling of talks, allowing
                                ample breaks, refueling & networking was spot on. Diverse, smoothly run &
                                down-to-earth. scheduling of talks, allowing ample breaks, refueling & networking
                                was spot on. Diverse, smoothly run & down-to-earth.
                            </p>
                        </div>
                        <div class="testimony-user">
                            <img class="round-user-image responsive-image" src="{{ asset('assets/image/testimony1.jpg') }}" alt="testimony user">
                            <div class="testimony-user-detail">
                                <h4 class="capitalize">Dolores Red</h4>
                                <h4 class="capitalize"> Php Developer</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row controllers">
              <a id="prev" href="#" class="control prev"></a>
              <a id="next" href="#" class="control next"></a>
            </div> -->
        </div>
    </div>
    <section class="contact-us">
        <div class="container ">
            <div class="row outline-border">
                <div class="col-lg-6 col-md-6 mt-24 order-2 pt-90 pb-58">
                    <form action="/conatct-us" class="contact-form" id="contact-form">
                        <div class="form-group">
                            <label class=" font" for="name">Name <i class='bx bx-x'></i></label>
                            <input type="text" id="name" name="name" class="form-control no-outline font" placeholder="Jimam Event" required>
                        </div>
                        <div class="form-group">
                            <label class=" font" for="email">Email Address <i class='bx bx-x'></i></label>
                            <input type="email" id="email" name="email" class="form-control no-outline font" placeholder="info@jimamevent.com"
                                   required>
                        </div>
                        <div class="form-group">
                            <label class=" font" for="phone">Phone Number <i class='bx bx-x'></i></label>
                            <input type="text" id="phone" name="phone" class="form-control no-outline font" placeholder="255-388-444" required>
                        </div>
                        <div class="form-group">
                            <label class=" font" for="message">Message <i class='bx bx-x'></i></label>
                            <textarea row="10" type="text" id="message" name="message" class="form-control no-outline font text-h" placeholder="Enter your query here"
                                      required></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary-fill capitalize btn-slim">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 mt-24 order-1 pt-90">
                    <div class="border-top-right">
                        <div class="section-header pt-100">
                            <h1 class="heads text-center">Let's Talk</h1>
                            <p class="text-center font-pb">Drop off a few lines and we would get back in no time
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer ">
        <section class="container">
            <!-- <div class="footer-svg">
              <img src="./image/footer-svg.svg" alt="" srcset="">
            </div> -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="company-info">
                        <div class="logo">
                            <a href="#" class="nav__logo logo-footer-nav">Jimam</a>
                        </div>
                        <div class="address">
                            <ul class="brand-info">
                                <li><i class='bx bx-map'></i> 153 Williamson Plaza, Maggieberg</li>
                                <li><a href="tel:+1 (062) 109-9222"><i class='bx bxs-phone' ></i> +1 (062) 109-9222</a></li>
                                <li><a href="mailto:hello@jimamevent.com"><i class='bx bx-mail-send' ></i> hello@jimamevent.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="company-info">
                        <div class="links-heading">
                            <h3 class="capitalize">company</h3>
                        </div>
                        <div class="address">
                            <ul class="brand-info capitalize">
                                <li><a href="#">home</a></li>
                                <li><a href="#">Our packages</a></li>
                                <li><a href="#">Explore</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">about Us</a></li>
                                <li><a href="#">contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="company-info social-container">
                        <ul class="social">
                            <li><a href="#" class="icon"><i class='bx bxl-facebook' ></i></a></li>
                            <li><a href="#" class="icon"><i class='bx bxl-twitter' ></i></a></li>
                            <li><a href="#" class="icon"><i class='bx bxl-instagram' ></i></a></li>
                            <li><a href="#" class="icon"><i class='bx bxl-linkedin' ></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <hr class="mlr-24">

                    <div class="site">
                        <p class="site capitalize ">
                            <span class="border-r m"><a href="#" class="">privacy & Policy</a> </span>
                            <span class="border-r m"><a href="#">Terms</a> </span>
                            <span class="m"><a href="#">Site Map</a> </span>
                        </p>
                        <p class="copy-right">&copy; <a href="#">Jimam Event</a> 2021. All rights reserved.</p>
                        <p class="usuage mlr-24">When you visit or interact with our sites, services or tools, we or our authorised service providers may use cookies for storing information to
                            help provide you with a better, faster and safer experience and for marketing purposes.</p>
                    </div>
                    <div class="developer">
                        <span><a href="https://www.pensuh.com">Design and Developed at Pensuh</a></span>
                    </div>
                </div>
            </div>

        </section>
    </footer>
</main>
<script src="{{ asset('assets/frontend/js/frontend.js') }}"></script>
</body>

</html>
