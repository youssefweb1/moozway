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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/imagehover.css/1.0/css/imagehover.min.css">
    <!-- Link to Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Link to Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>

<body dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <!-- header -->
    <header>
        <nav id="main-nav" class="px-4 relative sm:px-6 sm:py-5 py-4 mt-10 max-w-screen-xl mx-auto">
            <div class="flex justify-between items-center mx-auto  max-w-screen-md sm:mt-0 mt-1 ">
                <div class="hidden lg:flex gap-[100px]">
                    <a href="{{ route('home') }}/#about" class="nav-li"
                        id="link-about">{{ __('messages.about_us') }}</a>
                    <a href="{{ route('home') }}/#projects" class="nav-li"
                        id="link-projects">{{ __('messages.our_projects') }}</a>
                    <a href="{{ route('home') }}/#steps" class="nav-li"
                        id="link-steps">{{ __('messages.our_steps') }}</a>
                </div>

                <a href="{{ route('home') }}" class="flex items-center lg:mx-auto">
                    <img src="{{ asset('assets/images/logo.svg') }}"
                        class="ml-3 w-[29.274px] h-[24.632px] sm:w-[59.727px] sm:h-[49.177px]" alt="Logo" />
                </a>

                <div class="hidden lg:flex gap-[100px]">
                    <a href="{{ route('blogs') }}" class="nav-li" id="link-blogs">{{ __('messages.blogs') }}</a>
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
            <ul class="flex flex-col mt-5 space-y-10 p-4 text-lg">
                <li>
                    <a href="{{ route('home') }}/#" class="block py-2 hover:text-[#4D63EB] text-[25px] font-[500]">
                        {{ __('messages.about_us') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}/#" class="block py-2 hover:text-[#4D63EB] text-[25px] font-[300]">
                        {{ __('messages.our_projects') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}/#" class="block py-2 hover:text-[#4D63EB] text-[25px] font-[300]">
                        {{ __('messages.our_steps') }}
                    </a>
                </li>


                <li>
                    <a href="{{ route('blogs') }}/#" class="block py-2 hover:text-[#4D63EB] text-[25px] font-[300]">
                        {{ __('messages.blogs') }}
                    </a>
                </li>

                <li>
                    <a href="{{ route('home') }}/#" class="block py-2 hover:text-[#4D63EB] text-[25px] font-[300]">
                        {{ __('messages.contact_us') }}
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);"
                        onclick="changeLanguage('{{ app()->getLocale() == 'ar' ? 'en' : 'ar' }}')"
                        class="block py-2 hover:text-[#4D63EB]  text-[25px] font-[300]">
                        {{ app()->getLocale() == 'ar' ? 'English' : 'العربية' }}
                    </a>
                </li>


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

                            {{-- youtube --}}
                            {{-- <a href=""
                            class="w-[45px] h-[45px] rtl:me-4 rounded-full flex justify-center items-center bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="17" viewBox="0 0 22 17" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6156 1.40922C20.5577 1.65857 21.2996 2.38934 21.5525 3.31549C22.0218 5.00588 21.9998 8.53022 21.9998 8.53022C21.9998 8.53022 21.9965 12.0351 21.5415 13.7244C21.2853 14.6495 20.5401 15.3792 19.5991 15.6275C17.8778 16.07 10.9911 16.0625 10.9911 16.0625C10.9911 16.0625 4.12318 16.0549 2.38422 15.5908C1.44108 15.3414 0.699107 14.6107 0.446286 13.6856C-0.00439528 12.0125 0 8.48921 0 8.48921C0 8.48921 0.00439852 4.98321 0.458377 3.29283C0.713397 2.36775 1.47626 1.62079 2.3996 1.3736C4.12209 0.929952 11.0076 0.937508 11.0076 0.937508C11.0076 0.937508 17.8942 0.945064 19.6156 1.40922ZM8.81006 5.26123L8.80457 11.7378L14.5337 8.50492L8.81006 5.26123Z" fill="#F34242"/>
                                </svg>
                        </a> --}}

                            <a href="https://www.instagram.com/moozway/profilecard/?igsh=MWs0cTczZTQzYzZ5eA=="
                                target="_blank"
                                class=" rtl:me-4 w-[45px] h-[45px]  rounded-full flex justify-center items-center bg-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                    viewBox="0 0 21 21" fill="none">
                                    <path
                                        d="M15.9407 6.36766C16.6365 6.36766 17.2007 5.80354 17.2007 5.10766C17.2007 4.41178 16.6365 3.84766 15.9407 3.84766C15.2448 3.84766 14.6807 4.41178 14.6807 5.10766C14.6807 5.80354 15.2448 6.36766 15.9407 6.36766Z"
                                        fill="url(#paint0_linear_384_17)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.25 10.5C5.25 13.3954 7.60462 15.75 10.5 15.75C13.3954 15.75 15.75 13.3954 15.75 10.5C15.75 7.60462 13.3954 5.25 10.5 5.25C7.60462 5.25 5.25 7.60462 5.25 10.5ZM7.875 10.5C7.875 9.05231 9.05231 7.875 10.5 7.875C11.9477 7.875 13.125 9.05231 13.125 10.5C13.125 11.9477 11.9477 13.125 10.5 13.125C9.05231 13.125 7.875 11.9477 7.875 10.5Z"
                                        fill="url(#paint1_linear_384_17)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.25 21H15.75C18.4485 21 21 18.4485 21 15.75V5.25C21 2.5515 18.4485 0 15.75 0H5.25C2.5515 0 0 2.5515 0 5.25V15.75C0 18.4485 2.5515 21 5.25 21ZM2.625 5.25C2.625 4.02281 4.02281 2.625 5.25 2.625H15.75C16.9772 2.625 18.375 4.02281 18.375 5.25V15.75C18.375 16.9772 16.9772 18.375 15.75 18.375H5.25C3.99919 18.375 2.625 17.0008 2.625 15.75V5.25Z"
                                        fill="url(#paint2_linear_384_17)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_384_17" x1="15.3407" y1="6.24766"
                                            x2="16.1807" y2="3.60766" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FF8934" />
                                            <stop offset="0.485011" stop-color="#F136CF" />
                                            <stop offset="1" stop-color="#E20938" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_384_17" x1="8" y1="15.25"
                                            x2="11.5" y2="4.25" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FF8934" />
                                            <stop offset="0.485011" stop-color="#F136CF" />
                                            <stop offset="1" stop-color="#E20938" />
                                        </linearGradient>
                                        <linearGradient id="paint2_linear_384_17" x1="5.5" y1="20"
                                            x2="12.5" y2="-2" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FF8934" />
                                            <stop offset="0.485011" stop-color="#F136CF" />
                                            <stop offset="1" stop-color="#E20938" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </a>

                            <a href="https://www.tiktok.com/@moozway?_t=8qYeieScgiq&_r=1" target="_blank"
                                class="w-[45px] h-[45px]  rounded-full flex justify-center items-center bg-white">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_416_28)">
                                        <path
                                            d="M16.3038 8.64215C17.9089 9.74656 19.8754 10.3964 21.9991 10.3964V6.46286C21.5972 6.46301 21.1963 6.42263 20.8031 6.34237V9.43861C18.6795 9.43861 16.7133 8.78888 15.1078 7.68455V15.7118C15.1078 19.7275 11.7256 22.9826 7.5539 22.9826C5.99731 22.9826 4.55047 22.5296 3.34863 21.7528C4.72037 23.1028 6.63334 23.9402 8.74963 23.9402C12.9217 23.9402 16.304 20.6852 16.304 16.6693V8.64215H16.3038ZM17.7793 4.6737C16.959 3.81111 16.4203 2.69635 16.3038 1.46391V0.958008H15.1704C15.4557 2.52438 16.4289 3.86259 17.7793 4.6737ZM5.98726 18.6713C5.5289 18.093 5.28115 17.3854 5.28231 16.6578C5.28231 14.8212 6.82927 13.3321 8.73786 13.3321C9.09349 13.3319 9.44703 13.3844 9.78604 13.4879V9.46642C9.38987 9.4142 8.99009 9.39194 8.59048 9.40013V12.5302C8.25129 12.4267 7.89758 12.3742 7.54178 12.3745C5.63328 12.3745 4.08641 13.8635 4.08641 15.7003C4.08641 16.9991 4.85959 18.1236 5.98726 18.6713Z"
                                            fill="#FF004F" />
                                        <path
                                            d="M15.1084 7.68446C16.7139 8.78879 18.6799 9.43853 20.8036 9.43853V6.34228C19.6182 6.09922 18.5688 5.50303 17.7798 4.6737C16.4293 3.8625 15.4562 2.5243 15.1709 0.958008H12.1938V16.6692C12.187 18.5008 10.6427 19.9838 8.73825 19.9838C7.61608 19.9838 6.61903 19.469 5.98765 18.6712C4.86015 18.1236 4.08688 16.999 4.08688 15.7004C4.08688 13.8637 5.63376 12.3746 7.54226 12.3746C7.90792 12.3746 8.26035 12.4293 8.59095 12.5303V9.40022C4.49242 9.48173 1.19629 12.705 1.19629 16.6692C1.19629 18.6482 2.01708 20.4421 3.34928 21.7529C4.55112 22.5296 5.99787 22.9827 7.55455 22.9827C11.7264 22.9827 15.1085 19.7274 15.1085 15.7118L15.1084 7.68446Z"
                                            fill="black" />
                                        <path
                                            d="M20.8033 6.34179V5.50477C19.7344 5.50627 18.6865 5.21813 17.7795 4.6733C18.5824 5.51927 19.6395 6.10265 20.8033 6.34196M15.1705 0.957517C15.1434 0.807854 15.1225 0.657193 15.108 0.505903V0H10.9973V15.7113C10.9907 17.5428 9.44642 19.0258 7.54188 19.0258C7.00195 19.0266 6.46941 18.905 5.98727 18.671C6.61865 19.4686 7.6157 19.9833 8.73787 19.9833C10.6422 19.9833 12.1867 18.5004 12.1934 16.6688V0.9576L15.1705 0.957517ZM8.59083 9.39972V8.5085C8.24732 8.46333 7.90103 8.44072 7.55434 8.4408C3.38207 8.4408 0 11.696 0 15.7113C0 18.2287 1.3292 20.4473 3.34907 21.7524C2.01687 20.4416 1.19608 18.6476 1.19608 16.6687C1.19608 12.7046 4.49213 9.48124 8.59083 9.39972Z"
                                            fill="#00F2EA" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_416_28">
                                            <rect width="22" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </a>


                            {{-- X --}}
                            {{-- <a href=""
                                class="w-[45px] h-[45px] rounded-full flex justify-center items-center bg-white">

                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <mask id="mask0_384_34" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                    <path d="M0 0H18V18H0V0Z" fill="white"/>
                                    </mask>
                                    <g mask="url(#mask0_384_34)">
                                    <path d="M14.175 0.84375H16.9354L10.9054 7.75318L18 17.1569H12.4457L8.09229 11.4548L3.11657 17.1569H0.353571L6.80271 9.76404L0 0.845036H5.69571L9.62486 6.05604L14.175 0.84375ZM13.2043 15.5009H14.7343L4.86 2.41361H3.21943L13.2043 15.5009Z" fill="black"/>
                                    </g>
                                    </svg>

                            </a> --}}



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
