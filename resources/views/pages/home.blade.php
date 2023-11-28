@extends('template')
@section('content')
    <section id="main">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-3 py-5 d-flex justify-content-between flex-row flex-sm-column align-items-start align-items-sm-stretch">
                    <nav class="d-flex flex-row justify-content-center align-items-center align-items-sm-center align-items-xl-center">
                        <button class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10" fill="none">
                                <path d="M1.40002 9H7.80002M1.40002 5H12.6M6.20002 1H12.6" stroke="#1A1A1A" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <ul class="nav_items d-flex flex-column flex-xl-row justify-content-center p-0 m-0 d-none d-sm-block">
                            <li class="active"><a class="" href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Products</a></li>
                        </ul>
                        <p class="p14 m-0 d-block d-sm-none">dya.ai</p>
                    </nav>

                    <div class="contact_btn_div d-block d-sm-none">
                        <a class="w-100" href="#">Contact us</a>
                    </div>

                    <div class="text-center d-none d-sm-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="73" height="84" viewBox="0 0 73 84" fill="none">
                            <path d="M55.7347 18.4686L58.4803 20.0581L61.2418 18.4686L63.9874 16.8791L61.2418 15.2896L58.4803 13.7001L55.7347 15.2896L52.9892 16.8791L55.7347 18.4686Z" fill="#010101" stroke="#010101" stroke-width="0.75" stroke-miterlimit="10"/>
                            <path d="M39.2456 31.1687V27.9897L36.484 26.4001L33.7385 27.9897V34.3317V37.5107V43.8688L36.484 45.4583L39.2456 43.8527V40.6897V37.5107V34.3477V31.1687Z" fill="#010101" stroke="#010101" stroke-width="0.75" stroke-miterlimit="10"/>
                            <path d="M72.24 24.8106V21.6476L69.4784 20.0581L66.7329 21.6476L63.9874 23.2211L61.2258 24.8106L58.4803 26.4001L55.7347 27.9896V47.0317V50.2107V53.3898L52.9892 54.9793L50.2437 56.5688L47.4821 58.1423L44.7366 59.7318L41.9911 61.3213L39.2455 62.9108L36.484 64.5003L33.7384 62.9108L30.9929 61.3213L28.2474 59.7318L25.4858 58.1423L22.7563 56.5688L19.9947 54.9793L17.2492 53.3898V31.1687V27.9896V24.8267V24.8106V21.6476V18.4686L19.9947 16.8791L22.7403 15.2896L25.5019 13.7001L28.2474 12.1266L30.9929 10.5371L33.7384 8.94757L36.484 7.35806L39.2455 8.94757L41.9911 10.5371L39.2455 12.1105L36.484 13.7001L33.7384 15.2896L30.9929 16.8791L28.2474 18.4686L25.4858 20.0581L22.7403 21.6476V50.2107L25.5019 51.8003L28.2474 53.3898L30.9929 54.9793L33.7384 56.5688L36.484 58.1423L39.2455 56.5688L41.9911 54.9793L44.7366 53.3898L47.4821 51.8003L50.2437 50.2107V24.8106L52.9892 23.2211L50.2437 21.6476L47.4821 20.0581L44.7366 21.6476V24.8106V27.9896V40.6897V43.8527V43.8687V47.0317L41.9911 48.6212L39.2455 50.2107L36.484 51.8003L33.7384 50.2107L30.9929 48.6212L28.2474 47.0317V24.8106L30.9929 23.2372L33.7384 21.6476L36.484 20.0581L39.2455 18.4686L41.9911 16.8791L44.7366 15.2896L47.4821 13.7001L50.2437 12.1105L52.9892 10.5371L50.2437 8.94757L47.4821 7.35806L44.7366 5.76854L41.9911 4.17903L39.2455 2.58951L36.484 1L33.7384 2.58951L30.9929 4.17903L28.2474 5.76854L25.5019 7.35806L22.7403 8.93152L19.9947 10.5371L17.2492 12.1266L14.4876 13.7001L11.7421 15.2896V21.6476L11.7582 24.8106V27.9896H11.7421V53.3898L11.7582 56.5688L14.4876 58.1423L17.2492 59.7318L19.9947 61.3213L22.7403 62.9108L25.5019 64.5003L28.2313 66.0738L30.9929 67.6793L33.7384 69.2528L36.484 70.8423L39.2455 69.2528L41.9911 67.6793L44.7366 66.0738L47.4821 64.5003L50.2437 62.9108L52.9892 61.3213L55.7347 59.7318L58.4803 58.1423L61.2258 56.5688V31.1687L63.9874 29.5792L66.7329 27.9896V31.1687V53.3898V56.5688V59.7318L63.9874 61.3213L61.2258 62.9108L58.4803 64.5003L55.7347 66.0738L52.9892 67.6793L50.2437 69.2528L47.4821 70.8423L44.7366 72.4318L41.9911 74.0213L39.2455 75.6109L36.484 77.2004L33.7384 75.6109L30.9929 74.0213L28.2474 72.4318L25.5019 70.8423L22.7403 69.2689L19.9947 67.6793L17.2492 66.0898L14.4876 64.5003L11.7421 62.9108L8.99659 61.3213L6.25106 59.7318V53.3898V50.2107V43.8527V40.6897V18.4686L3.50554 20.0581L0.76001 21.6476V62.9108L3.50554 64.5003L6.25106 66.0738L8.99659 67.6793L11.7421 69.2528L14.4876 70.8423L17.2492 72.4318L19.9947 74.0213L22.7403 75.6109L25.5019 77.2004L28.2474 78.7738L30.9929 80.3633L33.7384 81.9529L36.484 83.5424L39.2455 81.9529L41.9911 80.3633L44.7366 78.7738L47.4821 77.2004L50.2276 75.6109L52.9892 74.0213L55.7347 72.4318L58.4803 70.8423L61.2258 69.2689L63.9874 67.6793L66.7329 66.0898L69.4784 64.5003L72.2239 62.9108V59.7318L72.24 56.5527V43.8527L72.2239 40.6897L72.24 37.5107V34.3316L72.2239 31.1526V27.9896L72.24 24.8106Z" fill="#010101" stroke="#010101" stroke-width="0.75" stroke-miterlimit="10"/>
                        </svg>
                        <p class="p14">
                            Transform your business with cutting-edge artificial intelligence solutions. Experience efficiency, accuracy, and growth like never before.
                        </p>
                    </div>

                    <div class="social_links  d-none d-sm-flex justify-content-center flex-column gap-3">
                        <a href="#">LinkedIn</a>
                        <a href="#">Twitter</a>
                        <a href="#">Facebook</a>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="bg_black d-flex dark_section flex-column justify-content-center justify-content-sm-between position-relative">
                        <div class="logo_div d-none d-sm-block">
                            <img class="logo" src="{{asset('assets/images/logo.png')}}" width="122px" alt="DYA LOGO">
                            <p class="mt-2">dya.ai</p>
                        </div>

                        <h1>Discover AI with dya</h1>
                        <p class="p14 d-block d-sm-none">
                            Lorem ipsum dolor sit amet consectetur. Ipsum imperdiet eget vel orci. Eget auctor velit orci quisque justo elementum.
                        </p>
                        <div class="down_btn">
                            <a href="#" class="btn rounded-circle bg_purple">
                                <i class="fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-5 d-none d-sm-flex justify-content-between flex-column">

                    <div class="contact_btn_div">
                        <a class="w-100" href="#">Contact us</a>
                    </div>
                    <p class="p14">
                        Lorem ipsum dolor sit amet consectetur. Ipsum imperdiet eget vel orci. Eget auctor velit orci quisque justo elementum.
                    </p>
                    <div></div>
                </div>
            </div>
        </div>
    </section>


    <section id="products" class="bg_gray pb-sm-3 pb-xl-5">
        <div class="container-xxl">
            <h2 class="products_heading">Our products</h2>
        </div>
{{--        <img src="{{asset('assets/images/products.png')}}" class="w-100" alt="">--}}
    </section>

    <section id="products_section" class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product_card">
                        <div>
                            <span class="btn btn_inprogress">In progress</span>
                            <h2 class="mt-3"><span class="text_purple">Prompt</span> Optimizer</h2>
                            <p class="p16">
                                A tool that takes input from user and provides the most efficient prompt to interact with ChatGpt for better data extraction.
                            </p>
                            <div class="row components_row mt-3">
                                <div class="col-12 mb-2">
                                    <h4 class="p16 text_purple">AI Components</h4>
                                </div>
                                <div class="col-4 col-xl-3">
                                    <p class="p16">OpenAI API</p>
                                </div>
                                <div class="col-4 col-xl-3">
                                    <p class="p16">GPT 3.5 Turbo</p>
                                </div>
                                <div class="col-4 col-xl-3">
                                    <p class="p16">LangChain</p>
                                </div>
                            </div>
                            <div class="row components_row mt-3">
                                <div class="col-12 mb-2">
                                    <h4 class="p16 text_purple">Development</h4>
                                </div>
                                <div class="col-4 col-xl-3">
                                    <p class="p16">Frontend</p>
                                    <p class="p16 fw-normal">NestJS</p>
                                </div>
                                <div class="col-4 col-xl-3">
                                    <p class="p16">Backend</p>
                                    <p class="p16 fw-normal">NestJS</p>
                                </div>
                                <div class="col-4 col-xl-3">
                                    <p class="p16">Database</p>
                                    <p class="p16 fw-normal">NestJS</p>
                                </div>
                            </div>
                        </div>

                        <div class="boxes">
                            <div class="box_purple bg_purple">
                                <p class="p23">Suggest me some food.</p>
                            </div>
                            <div class="box_white bg-white flex-column justify-content-between align-items-start">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <path d="M27.142 10.6053C27.3605 9.58122 27.358 8.52226 27.1346 7.49921C26.9112 6.47615 26.472 5.51255 25.8464 4.67278C23.9376 2.06488 20.5628 0.988656 17.4965 2.01002C16.5197 1.13907 15.3308 0.540478 14.0494 0.274376C12.768 0.00827449 11.4391 0.0840272 10.1962 0.494027C8.9533 0.904027 7.84018 1.63384 6.96861 2.61017C6.09703 3.5865 5.49769 4.77497 5.23078 6.05623C4.23414 6.37839 3.31774 6.90956 2.54283 7.61426C1.76792 8.31895 1.15235 9.18093 0.737254 10.1426C-0.572018 13.1027 0.184026 16.5697 2.60672 18.7161C2.38694 19.7399 2.38831 20.7988 2.61075 21.822C2.83318 22.8452 3.27156 23.8091 3.89654 24.6492C5.80752 27.2579 9.18437 28.3338 12.2522 27.3113C13.0294 28.0128 13.9472 28.5403 14.9445 28.8588C15.9418 29.1773 16.9956 29.2794 18.0355 29.1583C21.2551 28.8043 23.8769 26.4099 24.5205 23.2354C25.5169 22.9129 26.4332 22.3816 27.208 21.677C27.9829 20.9723 28.5985 20.1105 29.0139 19.1491C30.3042 16.1961 29.5488 12.7483 27.142 10.6053ZM17.8227 27.2384C16.5379 27.3829 15.2432 27.0705 14.1657 26.3559L14.3283 26.2384L19.7951 22.2198C19.931 22.1184 20.0382 21.9834 20.1062 21.8281C20.1742 21.6728 20.2006 21.5025 20.1829 21.3338L19.2701 13.0994L21.8977 14.2539C21.9237 14.2638 21.9435 14.2855 21.9509 14.3125L22.7073 21.1359C23.0369 24.168 20.8533 26.8961 17.8227 27.2384ZM5.45559 23.5048C4.68782 22.4635 4.31185 21.1848 4.39384 19.8936L4.57877 19.9785L10.7988 22.7018C10.9528 22.7707 11.1225 22.7972 11.2902 22.7786C11.4579 22.76 11.6176 22.697 11.7529 22.5961L18.4381 17.6872L18.7541 20.538C18.7551 20.5529 18.7527 20.5677 18.7471 20.5815C18.7415 20.5953 18.7329 20.6077 18.7219 20.6177L13.1845 24.6852C10.7236 26.491 7.26518 25.9627 5.45559 23.5048ZM2.50718 10.9533C3.03196 9.76147 3.96152 8.79375 5.13129 8.22148L5.90044 15.1606C5.91683 15.3285 5.97797 15.4889 6.0775 15.6251C6.17703 15.7614 6.3113 15.8684 6.46628 15.935L14.0276 19.2472L11.7167 20.9492C11.7041 20.9577 11.6897 20.9631 11.6745 20.9648C11.6594 20.9664 11.6441 20.9644 11.63 20.9588L5.34841 18.2074C2.55623 16.9775 1.2845 13.7212 2.50398 10.9245L2.50718 10.9533ZM23.3152 13.4177L15.7261 10.0676L18.032 8.37204C18.0446 8.36346 18.0591 8.3581 18.0742 8.35642C18.0894 8.35475 18.1047 8.3568 18.1188 8.36242L24.4011 11.1198C25.3616 11.5406 26.1825 12.226 26.7681 13.0959C27.3536 13.9657 27.6796 14.9843 27.7081 16.0325C27.7365 17.0807 27.4661 18.1154 26.9285 19.0157C26.391 19.9161 25.6084 20.6449 24.6721 21.1171L23.9029 14.1779C23.8793 14.0111 23.8127 13.8534 23.7096 13.7201C23.6066 13.5868 23.4707 13.4826 23.3152 13.4177ZM25.3632 9.45026L25.1782 9.36527L18.9666 6.61184C18.8116 6.54258 18.641 6.51593 18.4722 6.53463C18.3035 6.55333 18.1428 6.61672 18.0067 6.71824L11.3272 11.6266L11.0112 8.77574C11.0081 8.76142 11.0089 8.74652 11.0135 8.73261C11.0182 8.7187 11.0265 8.70631 11.0376 8.69673L16.5641 4.63627C17.4112 4.01469 18.4178 3.64715 19.4661 3.57664C20.5144 3.50613 21.5611 3.73556 22.4838 4.23809C23.4065 4.74063 24.1671 5.49549 24.6765 6.41441C25.1859 7.33332 25.4232 8.37829 25.3605 9.4271L25.3631 9.45027L25.3632 9.45026ZM10.4722 16.2169L7.84532 15.068C7.83215 15.0619 7.82048 15.053 7.81114 15.0419C7.8018 15.0308 7.79502 15.0178 7.79128 15.0038L7.03687 8.19768C6.92251 7.15343 7.10779 6.09819 7.57105 5.15536C8.03431 4.21252 8.7564 3.42105 9.6529 2.87347C10.5494 2.3259 11.5833 2.04486 12.6336 2.0632C13.6839 2.08155 14.7073 2.39852 15.5842 2.97707L15.4216 3.09464L9.95481 7.11323C9.81891 7.2146 9.71172 7.34957 9.64376 7.50489C9.5758 7.66021 9.5494 7.83054 9.56717 7.99915L10.4722 16.217L10.4722 16.2169ZM11.4932 13.1768L14.4706 10.9912L17.8599 12.4712L18.2663 16.1373L15.2948 18.3224L11.9055 16.8424L11.4932 13.1768Z" fill="#7E3DFB"/>
                                    </svg>
                                    Suggested Prompt
                                </h3>
                                <p>Write a copy for a Movie Tracking App|</p>
                            </div>
                        </div>
                        <a href="#" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                <path d="M4.34324 1.01467H18.4854M18.4854 1.01467V15.1568M18.4854 1.01467L1.51481 17.9852" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="product_card">
                        <img src="{{asset('assets/images/waves.png')}}" class="w-100 d-none d-lg-block" alt="">
                        <div>
                            <span class="btn btn_inprogress">In progress</span>
                            <h2 class="mt-3"><span class="text_purple">Audio</span> Sense</h2>
                            <p class="p16">
                                An Audio Analytics Tool that uses state of the art machine learning algorithms to detect noise, silence,
                                echo, disturbance and other parameters along with speech to text keyword capabilities
                            </p>
                        </div>
                        <div>
                            <div class="row components_row mt-3">
                                <div class="col-12 mb-2">
                                    <h4 class="p16 text_purple">AI Components</h4>
                                </div>
                                <div class="col">
                                    <p class="p16">Pydub</p>
                                </div>
                                <div class="col">
                                    <p class="p16">Matplotlib</p>
                                </div>
                                <div class="col">
                                    <p class="p16">Numpy</p>
                                </div>
                                <div class="col">
                                    <p class="p16">Libosa</p>
                                </div>
                                <div class="col">
                                    <p class="p16">Soundfile</p>
                                </div>
                            </div>
                            <div class="row components_row mt-2">
                                <div class="col-6">
                                    <p class="p16">Speech Recognition</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                <path d="M4.34324 1.01467H18.4854M18.4854 1.01467V15.1568M18.4854 1.01467L1.51481 17.9852" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="product_card product_card_full">
                        <div class="row">
                            <div class="col-lg-5 d-flex flex-column justify-content-center">
                                <div>
                                    <span class="btn btn_inprogress">In progress</span>
                                    <h2 class="mt-3"><span class="text_purple">SC</span>AI</h2>
                                    <p class="p16">
                                        An AI powered support chatbot leveraging the power of OpenAI ChatGPT 4 Turbo API to provide seamless support
                                        for e-commerce store users, engaging them in human-like conversations to provide the relationship brands deserve.
                                    </p>
                                </div>
                                <a href="#" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                        <path d="M4.34324 1.01467H18.4854M18.4854 1.01467V15.1568M18.4854 1.01467L1.51481 17.9852" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-lg-7 d-none d-lg-block">
                                <img src="{{asset('assets/images/scai_image.png')}}" class="w-100 h-100" alt="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="product_card product_card_full">
                        <div class="row">
                            <div class="col-lg-7 d-none d-lg-block">
                                <img src="{{asset('assets/images/searchx.png')}}" class="w-100 h-100" alt="">
                            </div>
                            <div class="col-lg-5 d-flex flex-column justify-content-center pt-md-3 pt-xxl-0">
                                <div>
                                    <span class="btn btn_inprogress">In progress</span>
                                    <h2 class="mt-3"><span class="text_purple">Search</span>x</h2>
                                    <p class="p16">
                                        An LLM Foundational Model based AI tool that is deployed on-prem server system of organizations and enables
                                        them to merge AI with proprietary data and create efficiency in work.
                                    </p>
                                </div>
                                <a href="#" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                        <path d="M4.34324 1.01467H18.4854M18.4854 1.01467V15.1568M18.4854 1.01467L1.51481 17.9852" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="product_card product_card_full">
                        <div class="row">
                            <div class="col-lg-6">
                                <span class="btn btn_inprogress">In progress</span>
                                <h2 class="mt-3"><span class="text_purple">Companion</span>x</h2>
                                <p class="p16">

                                    A friendly bot using STS and latest foundational models and trained on proprietary data to interact with people and answer their queries.                            </p>
                            </div>
                            <div class="col-lg-6 d-flex flex-column justify-content-end">
                                <div class="row components_row mt-3">
                                    <div class="col-12 mb-2">
                                        <h4 class="p16 text_purple">Development</h4>
                                    </div>
                                    <div class="col">
                                        <p class="p16">Falcon 7B Model</p>
                                    </div>
                                    <div class="col">
                                        <p class="p16">Whisper Model</p>
                                    </div>
                                    <div class="col-5">
                                        <p class="p16">Roberta Base Go Emotions</p>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="row">
                                            <div class="col">
                                                <p class="p16">Natural Language Understanding</p>
                                            </div>
                                            <div class="col">
                                                <p class="p16">Natural Language Processing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4 position-relative d-none d-lg-block">
                                <img src="{{asset('assets/images/companionx.png')}}" class="w-100" alt="">
                                <a href="#" class="btn position-absolute end-0 bottom-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                        <path d="M4.34324 1.01467H18.4854M18.4854 1.01467V15.1568M18.4854 1.01467L1.51481 17.9852" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="technologies" class="my-5 py-md-5">
        <div class="container">
            <h2 class="heading60 text-center">
                <span class="text_purple">Technologies</span> We Use
            </h2>

            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="tech_card">
                            <div class="d-flex flex-row justify-content-between w-100">
                                <span class="p14">01</span>

                                <img src="{{asset('assets/images/icons/software.png')}}" class="" width="190px" alt="">
                            </div>
                            <div class=" w-100">
                                <h3 class="heading34">Software Development <span>With AI</span></h3>
                                <p class="p16 mb-5">Advanced AI integration for smarter, more efficient software solutions.</p>
                                <a href="#" class="float-end p14">
                                    Details
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" class="ms-4" height="22" viewBox="0 0 26 22" fill="none">
                                        <path d="M15 1L25 11M25 11L15 21M25 11L0.999999 11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="tech_card">
                        <div class="d-flex flex-row justify-content-between w-100">
                            <span class="p14">02</span>

                            <img src="{{asset('assets/images/icons/promt.png')}}" class="" width="190px" alt="">
                        </div>
                        <div class=" w-100">
                            <h3 class="heading34">Prompt <br>Engineering</h3>
                            <p class="p16 mb-5">Crafting precise prompts for optimal AI model responses.</p>
                            <a href="#" class="float-end p14">
                                Details
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" class="ms-4" height="22" viewBox="0 0 26 22" fill="none">
                                    <path d="M15 1L25 11M25 11L15 21M25 11L0.999999 11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="tech_card">
                        <div class="d-flex flex-row justify-content-between w-100">
                            <span class="p14">03</span>

                            <img src="{{asset('assets/images/icons/computer.png')}}" class="" width="190px" alt="">
                        </div>
                        <div class=" w-100">
                            <h3 class="heading34">Computer <span>Vision</span></h3>
                            <p class="p16 mb-5">Turning visual data into actionable insights with cutting-edge technology.</p>
                            <a href="#" class="float-end p14">
                                Details
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" class="ms-4" height="22" viewBox="0 0 26 22" fill="none">
                                    <path d="M15 1L25 11M25 11L15 21M25 11L0.999999 11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="tech_card">
                        <div class="d-flex flex-row justify-content-between w-100">
                            <span class="p14">04</span>

                            <img src="{{asset('assets/images/icons/nlp.png')}}" class="" width="190px" alt="">
                        </div>
                        <div class=" w-100">
                            <h3 class="heading34">Natural Language <span>Processing</span></h3>
                            <p class="p16 mb-5">Enhancing applications with advanced natural language understanding and generation.</p>
                            <a href="#" class="float-end p14">
                                Details
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" class="ms-4" height="22" viewBox="0 0 26 22" fill="none">
                                    <path d="M15 1L25 11M25 11L15 21M25 11L0.999999 11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="tech_card">
                        <div class="d-flex flex-row justify-content-between w-100">
                            <span class="p14">05</span>

                            <img src="{{asset('assets/images/icons/nlm.png')}}" class="" width="190px" alt="">
                        </div>
                        <div class=" w-100">
                            <h3 class="heading34">Large Language <span>Model</span></h3>
                            <p class="p16 mb-5">Setting new AI communication standards with Large Language Models.</p>
                            <a href="#" class="float-end p14">
                                Details
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" class="ms-4" height="22" viewBox="0 0 26 22" fill="none">
                                    <path d="M15 1L25 11M25 11L15 21M25 11L0.999999 11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="tech_card">
                        <div class="d-flex flex-row justify-content-between w-100">
                            <span class="p14">06</span>

                            <img src="{{asset('assets/images/icons/twining.png')}}" class="" width="190px" alt="">
                        </div>
                        <div class=" w-100">
                            <h3 class="heading34">Digital <span>Twinning</span></h3>
                            <p class="p16 mb-5">Bridging physical and digital for improved analysis and innovation.</p>
                            <a href="#" class="float-end p14">
                                Details
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" class="ms-4" height="22" viewBox="0 0 26 22" fill="none">
                                    <path d="M15 1L25 11M25 11L15 21M25 11L0.999999 11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="edge">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="heading60"><span class="text_purple">Our AI Edge:</span> Behind <br>the Scenes</h3>
                </div>
                <div class="col-lg-4 d-flex justify-content-end align-content-end flex-column">
                    <p class="p16">Lorem ipsum dolor sit amet consectetur. Aliquet tempor quis magna augue tincidunt vulputate. Id natoque ultrices suspendisse convallis platea.</p>
                </div>

                <div class="col-md-12 d-flex flex-row justify-content-start gap-4">

                    <div class="edge_boxes">
                        <img src="{{asset('assets/images/icons/uncompromised.png')}}" class="" width="120px" alt="">
                        <div>
                            <h3>
                                Harnessing <span>Advanced AI</span>
                            </h3>
                            <p class="p16">
                                Discover cutting-edge AI with our deep learning and reinforcement learning algorithms.
                                Our solutions adapt and evolve, offering you a competitive edge in efficiency and insights.
                            </p>
                        </div>
                    </div>

                    <div class="edge_boxes">
                        <img src="{{asset('assets/images/icons/uncompromised.png')}}" class="" width="120px" alt="">
                        <div>
                            <h3>
                                Uncompromised <span>Security & Privacy</span>
                            </h3>
                            <p class="p16">
                                Discover cutting-edge AI with our deep learning and reinforcement learning algorithms.
                                Our solutions adapt and evolve, offering you a competitive edge in efficiency and insights.
                            </p>
                        </div>
                    </div>

                    <div class="edge_boxes">
                        <img src="{{asset('assets/images/icons/uncompromised.png')}}" class="" width="120px" alt="">
                        <div>
                            <h3>
                                Uncompromised <span>Security & Privacy</span>
                            </h3>
                            <p class="p16">
                                Discover cutting-edge AI with our deep learning and reinforcement learning algorithms.
                                Our solutions adapt and evolve, offering you a competitive edge in efficiency and insights.
                            </p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>

    <section id="contact" class="my-5 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <h2 class="heading60 text_purple">Contact Us </h2>
                    <h2 class="heading60 text-center">If You Have an IDEA</h2>
                </div>
                <div class="col-lg-6">
                    <h4 class="heading20">What can we do for you?</h4>
                    <div class="form pe-5">
                        <div class="row">
                            <div class="col-6 mt-3">
                                <div class="input position-relative">
                                    <input type="text" name="name" class="input-field" placeholder="i.e. John Deo" required/>
                                    <label class="input-label">Name</label>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="input position-relative">
                                    <input type="email" name="email" class="input-field" placeholder="i.e. user@email.com" required/>
                                    <label class="input-label">Email</label>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="mb-3 position-relative">
                                    <label for="details" class="form-label">Project</label>
                                    <textarea class="form-text form-control" cols="20" rows="5" name="details" placeholder="Type Here"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn_black">Submit Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-end">
                    <p class="p16">
                        Lorem ipsum dolor sit amet consectetur. Viverra augue tortor velit venenatis. S
                        it quis eu at nunc sem sit ipsum.
                    </p>
                    <div class="contact_social border-bottom mb-3 pb-2">
                        <div class="row">
                            <div class="col-4 col-xxl-3">
                                <a href="#"><i class="fab fa-facebook"></i>&nbsp; facebook/dya.ai</a>
                            </div>
                            <div class="col-4 col-xxl-3">
                                <a href="#"><i class="fab fa-linkedin"></i>&nbsp; linkedin/dya.ai</a>
                            </div>
                            <div class="col-4 col-xxl-3">
                                <a href="#"><i class="fab fa-twitter"></i>&nbsp; twitter/dya.ai</a>
                            </div>
                        </div>
                    </div>
                    <img src="{{asset('assets/images/contact.png')}}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 text-center">
                    <img src="{{asset('assets/images/footer_logo.png')}}" class="" width="122px" alt="">
                </div>
                <div class="col-lg-8">
                    <div class="footer_menu">
                        <a href="#">Home</a>
                        <a href="#">About Us</a>
                        <a href="#">Why Us</a>
                        <a href="#">Our Projects</a>
                        <a href="#">Contact Us</a>
                    </div>
                    <p class="p16 text-center text-white fw-light">
                        Lorem ipsum dolor sit amet consectetur. Bibendum dolor quam viverra sit nibh egestas dignissim lorem.
                        Tortor risus consectetur egestas tincidunt urna lectus id sociis.
                    </p>
                    <p class="rights_para text-center text-white fw-light mt-5">
                        © 2023 Dya.ai | Powered by xFlow.
                    </p>
                </div>
            </div>
        </div>
    </footer>


@endsection
@section('footer_scripts')
@endsection
