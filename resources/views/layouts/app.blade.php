<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Moozway - ابتكار التطبيقات المتنقلة لتجربة مستخدم فريدة</title>
    <!-- SEO meta tags -->
    <meta name="description"
        content="Moozway تقدم حلول برمجية متكاملة لتطوير تطبيقات الهواتف المحمولة، ملتزمون بتقديم تجربة مستخدم استثنائية من خلال الابتكار والجودة العالية. نحن نسعى لتحويل الأفكار إلى تطبيقات ناجحة بدعم مستمر.">
    <meta name="keywords"
        content="تطوير تطبيقات, Moozway, تطبيقات الهواتف المحمولة, حلول برمجية, تجربة مستخدم, ابتكار, تصميم تطبيقات, دعم مستمر">
    <meta name="author" content="Moozway">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#ffffff">
    <!-- Open Graph for social media -->
    <meta property="og:title" content="Moozway - ابتكار التطبيقات المتنقلة لتجربة مستخدم فريدة">
    <meta property="og:description"
        content="استمتع بتجربة مستخدم فريدة مع Moozway، حيث نقدم حلول برمجية مبتكرة لتطبيقات الهواتف المحمولة.">
    <meta property="og:image" content="{{ asset('assets/images/favicon.png') }}">
    <meta property="og:url" content="https://www.moozway.com">
    <meta property="og:type" content="website">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Moozway - ابتكار التطبيقات المتنقلة لتجربة مستخدم فريدة">
    <meta name="twitter:description"
        content="استمتع بتجربة مستخدم فريدة مع Moozway، حيث نقدم حلول برمجية مبتكرة لتطبيقات الهواتف المحمولة.">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- flow bite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <!-- header -->
    <header>
        <nav id="main-nav" class="px-4 relative sm:px-6 sm:py-5 py-4 mt-10 max-w-screen-xl mx-auto">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-md sm:mt-0 mt-1">
                <div class="hidden lg:flex gap-[100px]">
                    <a href="{{ route('home') }}/#about" class="nav-li"
                        id="link-about">{{ __('messages.about_us') }}</a>
                    <a href="{{ route('home') }}/#projects" class="nav-li"
                        id="link-projects">{{ __('messages.our_projects') }}</a>
                </div>

                <a href="{{ route('home') }}" class="flex items-center lg:mx-auto">
                    <img src="{{ asset('assets/images/logo.svg') }}"
                        class="ml-3 w-[29.274px] h-[24.632px] sm:w-[59.727px] sm:h-[49.177px]" alt="Logo" />
                </a>

                <div class="hidden lg:flex gap-[100px]">
                    <a href="{{ route('home') }}/#steps" class="nav-li"
                        id="link-steps">{{ __('messages.our_steps') }}</a>
                    <a href="{{ route('home') }}/#contact" class="nav-li"
                        id="link-contact">{{ __('messages.contact_us') }}</a>
                </div>


                <!-- Language Icon with Dropdown -->
                <div dir="ltr" class="absolute  left-5 mt-1 lg:ml-4 ml-14 changedis ">
                    <button id="language-toggle" type="button" class="flex items-center">
                        <img src="{{ asset('assets/images/lang.svg') }}" alt="Language"
                            class="w-6 h-6 cursor-pointer" />
                    </button>
                </div>

                <div id="language-dropdown" dir="rtl"
                    class="absolute left-0  top-[5.9rem] z-[9999] w-[156px] h-[auto] flex flex-col items-center justify-center rounded-[20px] border border-white bg-white backdrop-blur-[17.5px] hidden ">
                    <div class="py-4 w-full px-7" role="menu" aria-orientation="vertical"
                        aria-labelledby="language-toggle">

                        <!-- Arabic Option -->
                        <label for="ar-radio"
                            class="flex items-center justify-between w-full cursor-pointer text-center font-alexandria text-[14px] font-light leading-normal uppercase">
                            <span class="ml-2 text-center mr-3">العربية</span>
                            <input id="ar-radio" name="language" type="radio" value="ar"
                                class="w-4 h-4 text-[#4D63EB] bg-gray-100 border-gray-300 rounded-full focus:ring-[#4D63EB] cursor-pointer hidden"
                                {{ app()->getLocale() == 'ar' ? 'checked' : '' }}
                                onchange="changeLanguage(this.value)">
                            <span
                                class="checkmark w-4 h-4 rounded-full border-2 border-gray-300 {{ app()->getLocale() == 'ar' ? 'bg-[#4D63EB] border-[#4D63EB]' : '' }}"></span>
                        </label>

                        <!-- English Option -->
                        <label for="en-radio"
                            class="flex items-center justify-between w-full mt-4 cursor-pointer font-alexandria text-[14px] font-light leading-normal uppercase">
                            <span class="ml-2">English</span>
                            <input id="en-radio" name="language" type="radio" value="en"
                                class="w-4 h-4 text-[#4D63EB] bg-gray-100 border-gray-300 rounded-full focus:ring-[#4D63EB] cursor-pointer hidden"
                                {{ app()->getLocale() == 'en' ? 'checked' : '' }}
                                onchange="changeLanguage(this.value)">
                            <span
                                class="checkmark w-4 h-4 rounded-full border-2 border-gray-300 {{ app()->getLocale() == 'en' ? 'bg-[#4D63EB] border-[#4D63EB]' : '' }}"></span>
                        </label>



                    </div>
                </div>


                <!-- Mobile Menu Toggle Button -->
                <button id="menu-toggle" type="button" class="inline-flex items-center ml-1.5 lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[29.274px] h-[24.632px]" viewBox="0 0 30 18"
                        fill="none">
                        <path d="M1 1H29M1 9H29M1 17H29" stroke="#424356" stroke-width="2" stroke-miterlimit="10"
                            stroke-linecap="round" />
                    </svg>
                </button>
            </div>
        </nav>

        <div id="sidebar"
            class="fixed top-0 right-0 w-full h-full bg-[#424356] text-white z-[9999] transform translate-x-full transition-transform duration-300 p-5 pt-10">
            <div class="flex justify-start items-center p-4">
                <button id="close-sidebar"
                    class="flex items-center text-white hover:text-gray-300 border-2 border-white rounded-full p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-[30px] w-[30px]" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <span class="text-white mx-3 ltr:text-[18px] text-[14px] font-[300]">
                    {{ __('messages.close') }}</span>
            </div>
            <ul class="flex flex-col mt-10 space-y-16 p-4 text-lg">
                <li>
                    <a href="{{ route('home') }}/#"
                        class="block py-2 hover:text-[#4D63EB] ltr:text-[25px] text-[30px] font-[500]">
                        {{ __('messages.about_us') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}/#"
                        class="block py-2 hover:text-[#4D63EB] ltr:text-[25px] text-[30px] font-[300]">
                        {{ __('messages.our_projects') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}/#"
                        class="block py-2 hover:text-[#4D63EB] ltr:text-[25px] text-[30px] font-[300]">
                        {{ __('messages.our_steps') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}/#"
                        class="block py-2 hover:text-[#4D63EB] ltr:text-[25px] text-[30px] font-[300]">
                        {{ __('messages.contact_us') }}
                    </a>
                </li>

                <ul>
                    <li>
                        <a href="javascript:void(0);"
                            onclick="changeLanguage('{{ app()->getLocale() == 'ar' ? 'en' : 'ar' }}')"
                            class="block py-2 hover:text-[#4D63EB] ltr:text-[25px] text-[30px] font-[300]">
                            {{ app()->getLocale() == 'ar' ? 'English' : 'العربية' }}
                        </a>
                    </li>

                </ul>

        </div>

        <div id="overlay" class="hidden fixed top-0 left-0 w-full h-full bg-black opacity-50"></div>
    </header>
    <!-- end header  -->

    <!-- main -->
    <main>
        @yield('content')
    </main>
    <!-- end main -->

    <!-- footer -->
    <footer class="w-full">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!--Grid-->

            <div class="flex flex-col md:flex-row">
                <div
                    class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 justify-center gap-3 md:gap-8 py-10  gap-y-8">
                    <div class="col-span-full  md:col-span-2 lg:mb-0">
                        <a href="{{ route('home') }}" class="flex justify-center lg:justify-start">
                            <img src="{{ asset('assets/images/logofooter.svg') }}" alt="" srcset="">
                        </a>
                        <ul class="text-sm transition-all duration-500 mt-10">
                            <li class="mb-6 flex items-center gap-4 font-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.54 5C6.6 5.89 6.75 6.76 6.99 7.59L5.79 8.79C5.38 7.59 5.12 6.32 5.03 5H6.54ZM16.4 17.02C17.25 17.26 18.12 17.41 19 17.47V18.96C17.68 18.87 16.41 18.61 15.2 18.21L16.4 17.02ZM7.5 3H4C3.45 3 3 3.45 3 4C3 13.39 10.61 21 20 21C20.55 21 21 20.55 21 20V16.51C21 15.96 20.55 15.51 20 15.51C18.76 15.51 17.55 15.31 16.43 14.94C16.33 14.9 16.22 14.89 16.12 14.89C15.86 14.89 15.61 14.99 15.41 15.18L13.21 17.38C10.38 15.93 8.06 13.62 6.62 10.79L8.82 8.59C9.1 8.31 9.18 7.92 9.07 7.57C8.7 6.45 8.5 5.25 8.5 4C8.5 3.45 8.05 3 7.5 3Z"
                                        fill="white" />
                                </svg>
                                <a href="tel:+971 504609458" class="sm:text-[16px] text-[14px]" dir="ltr"> +971
                                    504609458</a>
                            </li>
                            <li class="mb-6 flex items-center gap-4  font-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6ZM20 6L12 11L4 6H20ZM20 18H4V8L12 13L20 8V18Z"
                                        fill="white" />
                                </svg>
                                <a href="mailto:muhammad@estisharati.com" class="sm:text-[16px] text-[14px]">
                                    muhammad@estisharati.com</a>

                            </li>
                            <li style="line-height: 200%;" class="mb-6 flex items-center gap-4 font-light  ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px]" viewBox="0 0 24 24"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 2C15.87 2 19 5.13 19 9C19 14.25 12 22 12 22C12 22 5 14.25 5 9C5 5.13 8.13 2 12 2ZM7 9C7 11.85 9.92 16.21 12 18.88C14.12 16.19 17 11.88 17 9C17 6.24 14.76 4 12 4C9.24 4 7 6.24 7 9ZM12 11.5C10.6193 11.5 9.5 10.3807 9.5 9C9.5 7.61929 10.6193 6.5 12 6.5C13.3807 6.5 14.5 7.61929 14.5 9C14.5 10.3807 13.3807 11.5 12 11.5Z"
                                        fill="white" />
                                </svg>

                                <a href="https://maps.app.goo.gl/CV9fBZy9ej2ttBDT6" class="text-[14px] w-[275px]"
                                    target="_blank" rel="noopener noreferrer">

                                    {{ __('messages.location') }}
                                </a>


                            </li>
                        </ul>

                    </div>
                    <!--End Col-->
                    <div class="lg:mx-auto ul-footer h-[105%]   pt-4 flex flex-col justify-end -mt-10">
                        <ul class="text-sm transition-all duration-500 ms-2">
                            <li class="mb-7">
                                <a href="{{ route('home') }}/#about"
                                    class="text-light text-[14px] font-light footer-li">
                                    {{ __('messages.about_us') }} <!-- About Us -->
                                </a>
                            </li>
                            <li class="mb-7">
                                <a href="{{ route('home') }}/#projects"
                                    class="text-light text-[14px] font-light footer-li">
                                    {{ __('messages.our_projects') }} <!-- Our Projects -->
                                </a>
                            </li>
                            <li class="mb-7">
                                <a href="{{ route('home') }}/#steps"
                                    class="text-light text-[14px] font-light footer-li">
                                    {{ __('messages.our_steps') }} <!-- Our Steps -->
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}/#contact"
                                    class="text-light text-[14px] font-light footer-li">
                                    {{ __('messages.contact_us') }} <!-- Contact Us -->
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!--End Col-->
                    <div class="lg:mx-auto ul-footer h-[105%]   pt-4 flex flex-col justify-end -mt-10  ">
                        <ul class="text-sm transition-all duration-500">
                            <li class="mb-7">
                                <a href="{{ route('faqs') }}" class="text-light text-[14px] font-light footer-li">
                                    {{ __('messages.faqs') }} <!-- الأسئلة الشائعة -->
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('terms') }}" class="text-light text-[14px] font-light footer-li">
                                    {{ __('messages.privacy_policy') }} <!-- سياسة الخصوصية -->
                                </a>
                            </li>
                        </ul>

                    </div>

                    <div class="mx-auto flex flex-col justify-end col-span-2 md:col-span-1 sm:col-span-full	">
                        <div class="flex mt-4 space-x-4 sm:mb-5 justify-center lg:mt-0 ">
                            <a href=""
                                class="w-10 h-10 rtl:me-4 rounded-full border border-gray-500 border-2  flex justify-center items-center hover:bg-indigo-600 hover:border-0 duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none">
                                    <g id="Social Media">
                                        <path id="Vector"
                                            d="M11.3214 8.93666L16.4919 3.05566H15.2667L10.7772 8.16205L7.1914 3.05566H3.05566L8.47803 10.7774L3.05566 16.9446H4.28097L9.022 11.552L12.8088 16.9446H16.9446L11.3211 8.93666H11.3214ZM9.64322 10.8455L9.09382 10.0765L4.72246 3.95821H6.60445L10.1322 8.8959L10.6816 9.66481L15.2672 16.083H13.3852L9.64322 10.8458V10.8455Z"
                                            fill="white" />
                                    </g>
                                </svg>
                            </a>

                            <a href=""
                                class="w-10 h-10 rounded-full border border-gray-500 border-2  flex justify-center items-center hover:bg-indigo-600 hover:border-0 duration-300">
                                <svg class="w-[1.25rem] h-[0.875rem] text-white" viewBox="0 0 16 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.9346 1.13529C14.5684 1.30645 15.0665 1.80588 15.2349 2.43896C15.5413 3.58788 15.5413 5.98654 15.5413 5.98654C15.5413 5.98654 15.5413 8.3852 15.2349 9.53412C15.0642 10.1695 14.5661 10.669 13.9346 10.8378C12.7886 11.1449 8.19058 11.1449 8.19058 11.1449C8.19058 11.1449 3.59491 11.1449 2.44657 10.8378C1.81277 10.6666 1.31461 10.1672 1.14622 9.53412C0.839844 8.3852 0.839844 5.98654 0.839844 5.98654C0.839844 5.98654 0.839844 3.58788 1.14622 2.43896C1.31695 1.80353 1.81511 1.30411 2.44657 1.13529C3.59491 0.828125 8.19058 0.828125 8.19058 0.828125C8.19058 0.828125 12.7886 0.828125 13.9346 1.13529ZM10.541 5.98654L6.72178 8.19762V3.77545L10.541 5.98654Z"
                                        fill="currentColor" />
                                </svg>

                            </a>

                            <a href=""
                                class="w-10 h-10  rounded-full border border-gray-500 border-2  flex justify-center items-center hover:bg-indigo-600 hover:border-0 duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none">
                                    <g id="Social Media">
                                        <path id="Vector"
                                            d="M11.3214 8.93666L16.4919 3.05566H15.2667L10.7772 8.16205L7.1914 3.05566H3.05566L8.47803 10.7774L3.05566 16.9446H4.28097L9.022 11.552L12.8088 16.9446H16.9446L11.3211 8.93666H11.3214ZM9.64322 10.8455L9.09382 10.0765L4.72246 3.95821H6.60445L10.1322 8.8959L10.6816 9.66481L15.2672 16.083H13.3852L9.64322 10.8458V10.8455Z"
                                            fill="white" />
                                    </g>
                                </svg>
                            </a>

                            <a href=""
                                class="w-10 h-10 rounded-full border border-gray-500 border-2  flex justify-center items-center hover:bg-indigo-600 hover:border-0 duration-300">
                                <svg class="w-[1.25rem] h-[0.875rem] text-white" viewBox="0 0 16 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.9346 1.13529C14.5684 1.30645 15.0665 1.80588 15.2349 2.43896C15.5413 3.58788 15.5413 5.98654 15.5413 5.98654C15.5413 5.98654 15.5413 8.3852 15.2349 9.53412C15.0642 10.1695 14.5661 10.669 13.9346 10.8378C12.7886 11.1449 8.19058 11.1449 8.19058 11.1449C8.19058 11.1449 3.59491 11.1449 2.44657 10.8378C1.81277 10.6666 1.31461 10.1672 1.14622 9.53412C0.839844 8.3852 0.839844 5.98654 0.839844 5.98654C0.839844 5.98654 0.839844 3.58788 1.14622 2.43896C1.31695 1.80353 1.81511 1.30411 2.44657 1.13529C3.59491 0.828125 8.19058 0.828125 8.19058 0.828125C8.19058 0.828125 12.7886 0.828125 13.9346 1.13529ZM10.541 5.98654L6.72178 8.19762V3.77545L10.541 5.98654Z"
                                        fill="currentColor" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>


            </div>

            <!--Grid-->
            <div class="pb-7">
                <div class="flex items-center justify-center ">
                    <span dir="ltr" class="text-sm text-[#A2A9B0]">©<a href="{{ route('home') }}"> 2025
                            Moozway. All
                            rights reserved. </span>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- top -->
    <div class="iconmain">
        <a id="scrollToTop" class="hidden">
            <div class="icons flex items-center justify-center">
                <i class="fas fa-arrow-up icon text-xl text-white"></i>
            </div>
        </a>
    </div>
    <!-- end top -->

    <!-- loading -->
    <div class="loading-page">
        <svg id="svg" width="60" height="50" viewBox="0 0 60 50" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path class="path2"
                d="M24.7456 0.815918V10.8738L10.2152 25.4042L24.7456 39.9347V49.9925L0.15731 25.4042L24.7456 0.815918Z"
                fill="#424356" />
            <path class="path3"
                d="M35.0913 10.8738V0.815918L59.6796 25.4042L35.0913 49.9925V39.9347L49.6217 25.4042L35.0913 10.8738Z"
                fill="#424356" />
            <path class="path4" d="M41.9241 25.4044L29.9181 13.3984L17.9085 25.4044L29.9181 37.414L41.9241 25.4044Z"
                fill="#424356" />
        </svg>
    </div>
    <!-- end loading -->


    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    @yield('js')
</body>

</html>
