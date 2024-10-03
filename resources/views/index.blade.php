@extends('layouts.app')


@section('content')
    <!-- container -->
    <div class="max-w-screen-xl mx-auto mx-auto px-4 pb-8">
        <!-- #sec1 hero -->
        <section id="about" class="flex relative flex-col items-center justify-center sm:mt-12 mt-0 pt-20   ">
            <!-- Circle with Logo -->

            <!-- desktop -->
            <div style="position: absolute; left: 217px; top: 0;z-index:-9999;"
                class="circle-desk animate__animated animate__pulse animate__infinite">
                <svg xmlns="http://www.w3.org/2000/svg" width="201" height="201" viewBox="0 0 201 201" fill="none">
                    <g filter="url(#filter0_d_44_102)">
                        <circle cx="90.5" cy="89.5" r="66.5" fill="white" fill-opacity="0.3"
                            shape-rendering="crispEdges" />
                        <circle cx="90.5" cy="89.5" r="65.5" stroke="white" stroke-width="2"
                            shape-rendering="crispEdges" />
                    </g>
                    <defs>
                        <filter id="filter0_d_44_102" x="0.299999" y="0.299999" width="200.4" height="200.4"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dx="10" dy="11" />
                            <feGaussianBlur stdDeviation="16.85" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_44_102" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_44_102" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>

            <div style="position: absolute; left: 107px; top: 150px;z-index:-9999;"
                class="circle-desk animate__animated animate__pulse animate__infinite">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="151" viewBox="0 0 201 201" fill="none">
                    <g filter="url(#filter0_d_44_102)">
                        <circle cx="90.5" cy="89.5" r="66.5" fill="white" fill-opacity="0.3"
                            shape-rendering="crispEdges" />
                        <circle cx="90.5" cy="89.5" r="65.5" stroke="white" stroke-width="2"
                            shape-rendering="crispEdges" />
                    </g>
                    <defs>
                        <filter id="filter0_d_44_102" x="0.299999" y="0.299999" width="200.4" height="200.4"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dx="10" dy="11" />
                            <feGaussianBlur stdDeviation="16.85" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_44_102" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_44_102" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>

            <div style="position: absolute; left: 230px; top: 250px;z-index:-9999;"
                class="circle-desk animate__animated animate__pulse animate__infinite">
                <svg xmlns="http://www.w3.org/2000/svg" width="171" height="172" viewBox="0 0 201 201" fill="none">
                    <g filter="url(#filter0_d_44_102)">
                        <circle cx="90.5" cy="89.5" r="66.5" fill="white" fill-opacity="0.3"
                            shape-rendering="crispEdges" />
                        <circle cx="90.5" cy="89.5" r="65.5" stroke="white" stroke-width="2"
                            shape-rendering="crispEdges" />
                    </g>
                    <defs>
                        <filter id="filter0_d_44_102" x="0.299999" y="0.299999" width="200.4" height="200.4"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dx="10" dy="11" />
                            <feGaussianBlur stdDeviation="16.85" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_44_102" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_44_102" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>

            <!-- mobile -->
            <div style="position: absolute; right: 15px; top: 0;z-index:-9999;"
                class="circle-mobile animate__animated animate__pulse animate__infinite">
                <svg xmlns="http://www.w3.org/2000/svg" width="124" height="124" viewBox="0 0 124 124"
                    fill="none">
                    <g filter="url(#filter0_d_44_376)">
                        <circle cx="52" cy="51" r="28" fill="white" fill-opacity="0.3"
                            shape-rendering="crispEdges" />
                        <circle cx="52" cy="51" r="27" stroke="white" stroke-width="2"
                            shape-rendering="crispEdges" />
                    </g>
                    <defs>
                        <filter id="filter0_d_44_376" x="0.299999" y="0.299999" width="123.4" height="123.4"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dx="10" dy="11" />
                            <feGaussianBlur stdDeviation="16.85" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_44_376" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_44_376" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>

            <div style="position: absolute; right: 0px; top: 125px;z-index:-9999;"
                class="circle-mobile animate__animated animate__pulse animate__infinite">
                <svg xmlns="http://www.w3.org/2000/svg" width="88" height="118" viewBox="0 0 78 108"
                    fill="none">
                    <g filter="url(#filter0_d_44_377)">
                        <ellipse cx="43.5" cy="43" rx="19.5" ry="20" fill="white"
                            fill-opacity="0.3" shape-rendering="crispEdges" />
                        <path
                            d="M62 43C62 53.5174 53.6936 62 43.5 62C33.3064 62 25 53.5174 25 43C25 32.4826 33.3064 24 43.5 24C53.6936 24 62 32.4826 62 43Z"
                            stroke="white" stroke-width="2" shape-rendering="crispEdges" />
                    </g>
                    <defs>
                        <filter id="filter0_d_44_377" x="0.299999" y="0.299999" width="106.4" height="107.4"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dx="10" dy="11" />
                            <feGaussianBlur stdDeviation="16.85" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_44_377" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_44_377" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>

            <div style="position: absolute; right: 15px; top: 230px;z-index:-9999;"
                class="circle-mobile animate__animated animate__pulse animate__infinite">
                <svg xmlns="http://www.w3.org/2000/svg" width="124" height="124" viewBox="0 0 124 124"
                    fill="none">
                    <g filter="url(#filter0_d_44_376)">
                        <circle cx="52" cy="51" r="28" fill="white" fill-opacity="0.3"
                            shape-rendering="crispEdges" />
                        <circle cx="52" cy="51" r="27" stroke="white" stroke-width="2"
                            shape-rendering="crispEdges" />
                    </g>
                    <defs>
                        <filter id="filter0_d_44_376" x="0.299999" y="0.299999" width="123.4" height="123.4"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dx="10" dy="11" />
                            <feGaussianBlur stdDeviation="16.85" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_44_376" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_44_376" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>

            <!-- logo -->
            <div
                class="flex items-center justify-center rounded-full bg-[#4D63EB] sm:w-[289.475px] w-[174.847px] sm:h-[289.475px] h-[174.847px] mb-8">

                <div class="div">
                    <img src="{{ asset('assets/images/logotext.svg') }}" alt="Logo"
                        class="sm:w-[196.276px] sm:h-[126.826px] w-[97px] h-[85.3px]">
                </div>
                <div class="div"></div>
            </div>

            <!-- desktop  -->
            <div style="position: absolute; right: 217px; top: 0;z-index:-9999;"
                class="circle-desk animate__animated animate__pulse animate__infinite">
                <svg xmlns="http://www.w3.org/2000/svg" width="201" height="201" viewBox="0 0 201 201"
                    fill="none">
                    <g filter="url(#filter0_d_44_102)">
                        <circle cx="90.5" cy="89.5" r="66.5" fill="white" fill-opacity="0.3"
                            shape-rendering="crispEdges" />
                        <circle cx="90.5" cy="89.5" r="65.5" stroke="white" stroke-width="2"
                            shape-rendering="crispEdges" />
                    </g>
                    <defs>
                        <filter id="filter0_d_44_102" x="0.299999" y="0.299999" width="200.4" height="200.4"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dx="10" dy="11" />
                            <feGaussianBlur stdDeviation="16.85" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_44_102" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_44_102" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div style="position: absolute; right: 107px; top: 150px;z-index:-9999;"
                class="circle-desk animate__animated animate__pulse animate__infinite">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="151" viewBox="0 0 201 201"
                    fill="none">
                    <g filter="url(#filter0_d_44_102)">
                        <circle cx="90.5" cy="89.5" r="66.5" fill="white" fill-opacity="0.3"
                            shape-rendering="crispEdges" />
                        <circle cx="90.5" cy="89.5" r="65.5" stroke="white" stroke-width="2"
                            shape-rendering="crispEdges" />
                    </g>
                    <defs>
                        <filter id="filter0_d_44_102" x="0.299999" y="0.299999" width="200.4" height="200.4"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dx="10" dy="11" />
                            <feGaussianBlur stdDeviation="16.85" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_44_102" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_44_102" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div style="position: absolute; right: 230px; top: 250px;z-index:-9999;"
                class="circle-desk animate__animated animate__pulse animate__infinite">
                <svg xmlns="http://www.w3.org/2000/svg" width="171" height="172" viewBox="0 0 201 201"
                    fill="none">
                    <g filter="url(#filter0_d_44_102)">
                        <circle cx="90.5" cy="89.5" r="66.5" fill="white" fill-opacity="0.3"
                            shape-rendering="crispEdges" />
                        <circle cx="90.5" cy="89.5" r="65.5" stroke="white" stroke-width="2"
                            shape-rendering="crispEdges" />
                    </g>
                    <defs>
                        <filter id="filter0_d_44_102" x="0.299999" y="0.299999" width="200.4" height="200.4"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dx="10" dy="11" />
                            <feGaussianBlur stdDeviation="16.85" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_44_102" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_44_102" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>


            <!-- mobile -->
            <div style="position: absolute; left: 40px; top: 0;z-index:-9999;"
                class="circle-mobile animate__animated animate__pulse animate__infinite">
                <svg xmlns="http://www.w3.org/2000/svg" width="124" height="124" viewBox="0 0 124 124"
                    fill="none">
                    <g filter="url(#filter0_d_44_376)">
                        <circle cx="52" cy="51" r="28" fill="white" fill-opacity="0.3"
                            shape-rendering="crispEdges" />
                        <circle cx="52" cy="51" r="27" stroke="white" stroke-width="2"
                            shape-rendering="crispEdges" />
                    </g>
                    <defs>
                        <filter id="filter0_d_44_376" x="0.299999" y="0.299999" width="123.4" height="123.4"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dx="10" dy="11" />
                            <feGaussianBlur stdDeviation="16.85" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_44_376" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_44_376" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div style="position: absolute; left: -4px; top: 125px;z-index:-9999;"
                class="circle-mobile animate__animated animate__pulse animate__infinite">
                <svg xmlns="http://www.w3.org/2000/svg" width="88" height="118" viewBox="0 0 78 108"
                    fill="none">
                    <g filter="url(#filter0_d_44_377)">
                        <ellipse cx="43.5" cy="43" rx="19.5" ry="20" fill="white"
                            fill-opacity="0.3" shape-rendering="crispEdges" />
                        <path
                            d="M62 43C62 53.5174 53.6936 62 43.5 62C33.3064 62 25 53.5174 25 43C25 32.4826 33.3064 24 43.5 24C53.6936 24 62 32.4826 62 43Z"
                            stroke="white" stroke-width="2" shape-rendering="crispEdges" />
                    </g>
                    <defs>
                        <filter id="filter0_d_44_377" x="0.299999" y="0.299999" width="106.4" height="107.4"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dx="10" dy="11" />
                            <feGaussianBlur stdDeviation="16.85" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_44_377" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_44_377" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div style="position: absolute; left: 40px; top: 230px;z-index:-9999;"
                class="circle-mobile animate__animated animate__pulse animate__infinite">
                <svg xmlns="http://www.w3.org/2000/svg" width="124" height="124" viewBox="0 0 124 124"
                    fill="none">
                    <g filter="url(#filter0_d_44_376)">
                        <circle cx="52" cy="51" r="28" fill="white" fill-opacity="0.3"
                            shape-rendering="crispEdges" />
                        <circle cx="52" cy="51" r="27" stroke="white" stroke-width="2"
                            shape-rendering="crispEdges" />
                    </g>
                    <defs>
                        <filter id="filter0_d_44_376" x="0.299999" y="0.299999" width="123.4" height="123.4"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dx="10" dy="11" />
                            <feGaussianBlur stdDeviation="16.85" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_44_376" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_44_376" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>

            <!-- Description Text -->
            <p
                class="md:w-full lg:w-[945px] mt-10 w-full text-[#424356] text-center sm:text-[18px] text-[14px] font-medium leading-[36.54px] tracking-wide uppercase mb-8">
                {{ __('messages.company_description') }}
            </p>


            <!-- Button -->
            <button
                class="rounded-[20px] bg-[#4D63EB] text-white text-center  sm:text-[18px]  text-[14px] font-medium leading-[36.54px] sm:w-[321px] w-[90%] sm:py-2 py-1 shadow-md hover:bg-[#424356] hover:text-white transition-all duration-400 ease-in-out">

                {{ __('messages.button') }}

            </button>
        </section>
        <!-- end #sec1 hero -->

        <!-- #sec2 partners -->
        <section id="sec2" class="flex flex-col py-10">
            <h2 class="ltr:text-left rtl:text-right text-[#424356]  text-[19px] font-light leading-normal mb-4">
                {{ __('messages.partners') }}
            </h2>
            <div
                class="grid grid-cols-2 gap-y-6 justify-between sm:grid-cols-4 flex-shrink-0 rounded-[20px] border border-white bg-white/10 backdrop-blur-[17.5px] px-6 py-4 w-full">
                <!-- Logo 1 -->
                <img src="{{ asset('assets/images/partners/logo_01.svg') }}" alt="Logo 1"
                    class="w-[150px] h-[70px] mx-auto sm:w-[176px] sm:h-[78px] logo" />

                <!-- Logo 2 -->
                <img src="{{ asset('assets/images/partners/logo_02.svg') }}" alt="Logo 2"
                    class="w-[150px] h-[70px] mx-auto sm:w-[176px] sm:h-[78px] logo" />

                <!-- Logo 3 -->
                <img src="{{ asset('assets/images/partners/logo_03.svg') }}" alt="Logo 3"
                    class="w-[150px] h-[70px] mx-auto sm:w-[176px] sm:h-[78px] logo" />

                <!-- Logo 4 -->
                <img src="{{ asset('assets/images/partners/logo_04.svg') }}" alt="Logo 4"
                    class="w-[150px] h-[70px] mx-auto sm:w-[176px] sm:h-[78px] logo" />
            </div>
        </section>
        <!-- end #sec2 partners -->

        <!-- #sec3 experience -->
        <section id="sec3" class="py-10">
            <div class="max-w-screen-lg mx-auto text-center">
                <h6 class="text-[#424356] rtl:sm:leading-[129.92px] text-[20px] sm:text-[64px]">
                    {{ __('messages.exceptional_digital_experiences') }}
                </h6>

                <!-- Descriptive Text -->
                <p class="text-[#424356] text-[14px] sm:text-[18px] font-medium leading-[36.54px] ltr:mt-6 rtl:mt-3">
                    {{ __('messages.innovative_solutions_description') }}
                </p>

            </div>
        </section>
        <!-- end #sec3 experience -->

        <!-- #sec4 portfolio -->
        <section id="projects" class="flex flex-col py-10">
            <!-- Section title -->
            <h2 class="ltr:text-left rtl:text-right text-[#424356]  text-[19px] font-light leading-normal mb-4">
                {{ __('messages.portfolio') }}
            </h2>

            <!-- Container for project cards with horizontal scrolling -->
            <div class="flex overflow-x-auto sm:space-x-6 space-x-0 no-scrollbar project-cards">
                <!-- Project -->
                <a href="{{route('project')}}"> <div
                    class="project [423px] h-[403px] flex-shrink-0 border-2 border-white/50 rounded-[20px] bg-[#424356] p-6 me-8">
                    <div class="w-full h-[235px] bg-[#424356] rounded-[10px] flex items-center justify-center">
                    </div>
                    <h3 class="text-white ltr:text-left rtl:text-right  text-[18px] mb-6 mt-5">Party Wizard</h3>
                    <div class="flex items-center gap-3 mt-4">
                        <button
                            class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px] font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                            UI/UX Design
                        </button>
                        <button
                            class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px]  font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                            Development
                        </button>
                    </div>
                </div>
                </a>
                <!-- Project -->
                <a href="{{route('project')}}"> <div
                    class="project [423px] h-[403px] flex-shrink-0 border-2 border-white/50 rounded-[20px] bg-[#424356] p-6 me-8">
                    <div class="w-full h-[235px] bg-[#424356] rounded-[10px] flex items-center justify-center">
                    </div>
                    <h3 class="text-white ltr:text-left rtl:text-right  text-[18px] mb-6 mt-5">Party Wizard</h3>
                    <div class="flex gap-3 mt-4">
                        <button
                            class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px] font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                            UI/UX Design
                        </button>
                        <button
                            class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px]  font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                            Development
                        </button>
                    </div>
                </div>
                </a>
                <!-- Project -->
                <a href="{{route('project')}}"> <div
                    class="project [423px] h-[403px] flex-shrink-0 border-2 border-white/50 rounded-[20px] bg-[#424356] p-6 me-8">
                    <div class="w-full h-[235px] bg-[#424356] rounded-[10px] flex items-center justify-center">
                    </div>
                    <h3 class="text-white ltr:text-left rtl:text-right  text-[18px] mb-6 mt-5">Party Wizard</h3>
                    <div class="flex gap-3 mt-4">
                        <button
                            class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px] font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                            UI/UX Design
                        </button>
                        <button
                            class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px]  font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                            Development
                        </button>
                    </div>
                </div>
                </a>

                <!-- Project -->
                <a href="{{route('project')}}"> <div
                    class="project [423px] h-[403px] flex-shrink-0 border-2 border-white/50 rounded-[20px] bg-[#424356] p-6 me-8">
                    <div class="w-full h-[235px] bg-[#424356] rounded-[10px] flex items-center justify-center">
                    </div>
                    <h3 class="text-white ltr:text-left rtl:text-right  text-[18px] mb-6 mt-5">Party Wizard</h3>
                    <div class="flex gap-3 mt-4">
                        <button
                            class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px] font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                            UI/UX Design
                        </button>
                        <button
                            class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px]  font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                            Development
                        </button>
                    </div>
                </div>
                </a>


            </div>
        </section>
        <!-- end #sec4 portfolio -->

        <!-- #sec5 start steps -->
        <section id="sec5" class="py-10 mt-5">
            <div class="mx-auto text-center">
                <!-- steps Heading -->
                <h6 class="text-[#424356] font-extrabold sm:text-[64px] text-[20px] rtl:leading-[200%] mb-8 text-center">
                    {{ __('messages.build_attractive_websites') }}
                </h6>

                <!-- Descriptive Text -->
                <p class="text-[#424356] sm:text-[16px] text-[14px] font-medium leading-[36.54px]">
                    {{ __('messages.moozway_approach_description') }}
                </p>

            </div>
        </section>
        <!-- end #sec5 start steps -->

        <!-- #sec6 steps -->
        <section id="steps" class="py-10 my-10 px-3">
            <div class="ltr:text-left rtl:text-right">
                <h6
                    class="text-[#424356] text-[35px] sm:text-[64px] font-extrabold sm:text-right ltr:text-left rtl:text-right">
                    {{ __('messages.implementation_steps') }}
                </h6>
            </div>

            <!-- for desktop -->
            <div class="items-fetures flex flex-col mt-28">
                <div class="flex items-center justify-between">
                    <div>
                        <p
                            class="text-[#424356] text-[36px] font-extrabold leading-[200%] mb-5  rtl:text-right ltr:text-left"">
                            {{ __('messages.ui_design') }}
                        </p>
                    </div>
                    <div class="w-[525px]">
                        <p
                            class="text-[#424356] text-[18px] font-normal leading-[200%] mb-5  rtl:text-right ltr:text-left"">
                            {{ __('messages.ui_design_description') }}
                        </p>
                    </div>
                </div>

                <div class="w-full h-[1px] bg-[#424356] my-10"></div>

                <div class="flex items-center justify-between">
                    <div class="w-[525px]">
                        <p
                            class="text-[#424356] text-[18px] font-normal leading-[200%] mb-5  rtl:text-right ltr:text-left"">
                            {{ __('messages.requirements_analysis_description') }}
                        </p>
                    </div>

                    <div>
                        <p
                            class="text-[#424356] text-[36px] font-extrabold leading-[200%] mb-5  rtl:text-right ltr:text-left"">
                            {{ __('messages.requirements_analysis') }}
                        </p>
                    </div>
                </div>
            </div>


            <!-- for mobile -->
            <div class="items-fetures-mobile flex flex-col mt-20 ps-2">
                <div class="flex flex-col gap-3 child-items-features-mobile">
                    <div>
                        <p
                            class="text-[#424356] sm:text-[25px] text-[20px] font-[900] leading-[200%] mb-5  rtl:text-right ltr:text-left"">
                            {{ __('messages.user_interface_design') }}
                        </p>
                    </div>
                    <div class="w-full h-[130px]">
                        <p
                            class="text-[#424356] sm:text-lg text-[14px] font-normal leading-[200%] mb-5  rtl:text-right ltr:text-left"">
                            {{ __('messages.seamless_functions') }}
                        </p>
                    </div>
                </div>

                <div class="flex flex-col gap-3 child-items-features-mobile">
                    <div>
                        <p
                            class="text-[#424356] sm:text-[25px] text-[20px] font-[900] leading-[200%] mb-5  rtl:text-right ltr:text-left"">
                            {{ __('messages.requirement_analysis') }}
                        </p>
                    </div>
                    <div class="w-full h-[130px]">
                        <p
                            class="text-[#424356] sm:text-lg text-[14px] font-normal leading-[200%] mb-5  rtl:text-right ltr:text-left"">
                            {{ __('messages.gather_information') }}
                        </p>
                    </div>
                </div>

                <div class="flex flex-col gap-3 child-items-features-mobile">
                    <div>
                        <p
                            class="text-[#424356] sm:text-[25px] text-[20px] font-[900] leading-[200%] mb-5  rtl:text-right ltr:text-left"">
                            {{ __('messages.quality_assurance') }}
                        </p>
                    </div>
                    <div class="w-full h-[150px]">
                        <p
                            class="text-[#424356] sm:text-lg text-[14px] font-normal leading-[200%] mb-5  rtl:text-right ltr:text-left"">
                            {{ __('messages.conduct_tests') }}
                        </p>
                    </div>
                </div>

                <div class="flex flex-col gap-3 child-items-features-mobile">
                    <div>
                        <p
                            class="text-[#424356] sm:text-[25px] text-[20px] font-[900] leading-[200%] mb-5  rtl:text-right ltr:text-left"">
                            {{ __('messages.app_development') }}
                        </p>
                    </div>
                    <div class="w-full h-[130px]">
                        <p
                            class="text-[#424356] sm:text-lg text-[14px] font-normal leading-[200%] mb-5  rtl:text-right ltr:text-left"">
                            {{ __('messages.start_building') }}
                        </p>
                    </div>
                </div>

                <div class="flex flex-col gap-7 ">
                    <div>
                        <p
                            class="text-[#424356] sm:text-[25px] text-[20px] font-[900] leading-[200%] mb-4  rtl:text-right ltr:text-left">
                            {{ __('messages.launch_and_support') }}
                        </p>
                    </div>
                    <div class="w-full ">
                        <p
                            class="text-[#424356] sm:text-lg text-[14px] font-normal leading-[200%]  rtl:text-right ltr:text-left">
                            {{ __('messages.help_publish') }}
                        </p>
                    </div>
                </div>
            </div>





        </section>
        <!-- end #sec6 steps -->

        <!-- #sec7 testimonials -->
        <section id="sec7" class="py-10 mt-5">
            <div class="text-right">
                <h6
                    class="ltr:text-[40px] rtl:text-[35px] sm:text-[64px] font-extrabold text-[#424356]  rtl:text-right ltr:text-left">
                    {{ __('messages.customers_opinion') }}
                </h6>

                <div class="w-full flex flex-col justify-start">
                    <div class="w-full box-test gap-10 mt-14 flex flex-col sm:flex-row">
                        <div class="sm:w-1/3 w-full">
                            <img id="clientImage" src="{{ asset('assets/images/person.svg') }}" alt="testimonials"
                                class="w-full h-96 rounded-lg object-cover" loading="lazy">
                        </div>

                        <div class="sm:w-2/3 w-full flex flex-col justify-between h-full gap-3 sm:gap-16">
                            <div class="relative">
                                <svg class="absolute z-[-1] -m-40 rtl:right-40 ltr:left-40"
                                    xmlns="http://www.w3.org/2000/svg" width="366" height="266"
                                    viewBox="0 0 366 266" fill="none">
                                    <path
                                        d="M168.923 36.1898V168.886C168.923 181.954 165.954 194.426 160.015 206.301C154.076 218.175 146.048 228.448 135.93 237.118C125.813 245.789 113.825 252.669 99.9682 257.758C86.1112 262.847 71.5577 265.392 56.3077 265.392H42.2308C38.4183 265.392 35.119 264.198 32.3329 261.81C29.5469 259.423 28.1538 256.596 28.1538 253.328V229.202C28.1538 225.935 29.5469 223.107 32.3329 220.72C35.119 218.332 38.4183 217.139 42.2308 217.139H56.3077C71.851 217.139 85.1214 212.426 96.119 203.002C107.117 193.578 112.615 182.205 112.615 168.886V162.854C112.615 157.828 110.563 153.555 106.457 150.037C102.351 146.518 97.3654 144.759 91.5 144.759H42.2308C30.5 144.759 20.5288 141.241 12.3173 134.204C4.10577 127.167 0 118.622 0 108.569V36.1898C0 26.1371 4.10577 17.5922 12.3173 10.5553C20.5288 3.51845 30.5 0 42.2308 0H126.692C138.423 0 148.394 3.51845 156.606 10.5553C164.817 17.5922 168.923 26.1371 168.923 36.1898ZM366 36.1898V168.886C366 181.954 363.031 194.426 357.092 206.301C351.153 218.175 343.125 228.448 333.007 237.118C322.889 245.789 310.902 252.669 297.045 257.758C283.188 262.847 268.635 265.392 253.385 265.392H239.308C235.495 265.392 232.196 264.198 229.41 261.81C226.624 259.423 225.231 256.596 225.231 253.328V229.202C225.231 225.935 226.624 223.107 229.41 220.72C232.196 218.332 235.495 217.139 239.308 217.139H253.385C268.928 217.139 282.198 212.426 293.196 203.002C304.194 193.578 309.692 182.205 309.692 168.886V162.854C309.692 157.828 307.639 153.555 303.534 150.037C299.428 146.518 294.442 144.759 288.577 144.759H239.308C227.577 144.759 217.606 141.241 209.394 134.204C201.183 127.167 197.077 118.622 197.077 108.569V36.1898C197.077 26.1371 201.183 17.5922 209.394 10.5553C217.606 3.51845 227.577 0 239.308 0H323.769C335.5 0 345.471 3.51845 353.683 10.5553C361.894 17.5922 366 26.1371 366 36.1898Z"
                                        fill="#424356" fill-opacity="0.1" />
                                </svg>
                                <p id="clientFeedback"
                                    class="text-[#424356] sm:text-[18px] text-[14px] font-normal leading-[200%] rtl:text-right ltr:text-left">
                                    {{ __('messages.cameron_feedback') }}
                                </p>
                            </div>

                            <div class="relative">
                                <div class="before-test flex flex-col items-start">
                                    <span id="clientName"
                                        class="text-[#424356] sm:text-[36px] text-[20px] font-[700] rtl:text-right ltr:text-left">Cameron
                                        Williamson</span>
                                    <span id="clientPosition"
                                        class="text-[#424356] sm:text-[18px] text-[14px] font-[500] rtl:text-right ltr:text-left">Web
                                        Engineer, Microsoft</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Images section -->
                    <div class="mt-10">
                        <div class="flex items-end overflow-x-auto no-scrollbar gap-4">
                            <!-- عميل 1 -->
                            <img src="{{ asset('assets/images/person.svg') }}" alt="Client 1"
                                class="client-image sm:w-[178px] sm:h-[192px] w-[77.939px] h-[84.069px] object-cover cursor-pointer rounded-lg transition duration-300"
                                onclick="changeClient('{{ asset('assets/images/person.svg') }}', 'Cameron Williamson', 'Web Engineer, Microsoft', '{{ __('messages.cameron_feedback') }}', this)">

                            <!-- عميل 2 -->
                            <img src="https://cdn.create.vista.com/api/media/small/120453562/stock-photo-portrait-of-happy-smiling-businessman-in-a-modern-office"
                                alt="Client 4"
                                class="client-image sm:w-[136px] sm:h-[146px] w-[77.939px] h-[84.069px] rounded-lg object-cover cursor-pointer transition duration-300 grayscale"
                                onclick="changeClient('https://cdn.create.vista.com/api/media/small/120453562/stock-photo-portrait-of-happy-smiling-businessman-in-a-modern-office', 'Emma Smith', 'Designer, Adobe', '{{ __('messages.emma_feedback') }}', this)">

                            <!-- عميل 3 -->
                            <img src="https://web-static.wrike.com/blog/content/uploads/2020/12/A-Quick-Guide-to-Client-Communication-Skills-2-1.jpg?av=af71ec8b8ab8fa5259aaf5e60d97af96"
                                alt="Client 5"
                                class="client-image sm:w-[136px] sm:h-[146px] w-[77.939px] h-[84.069px] rounded-lg object-cover cursor-pointer transition duration-300 grayscale"
                                onclick="changeClient('https://web-static.wrike.com/blog/content/uploads/2020/12/A-Quick-Guide-to-Client-Communication-Skills-2-1.jpg?av=af71ec8b8ab8fa5259aaf5e60d97af96', 'Liam Johnson', 'Marketing Head, Amazon', '{{ __('messages.liam_feedback') }}', this)">

                            <!-- عميل 4 -->
                            <img src="https://img.freepik.com/free-photo/young-handsome-business-man-with-laptop-office_1303-21060.jpg"
                                alt="Client 6"
                                class="client-image sm:w-[136px] sm:h-[146px] w-[77.939px] h-[84.069px] rounded-lg object-cover cursor-pointer transition duration-300 grayscale"
                                onclick="changeClient('https://img.freepik.com/free-photo/young-handsome-business-man-with-laptop-office_1303-21060.jpg', 'Olivia Brown', 'Content Writer, Twitter', '{{ __('messages.olivia_feedback') }}', this)">

                            <!-- عميل 5 -->
                            <img src="https://st.depositphotos.com/1594308/1922/i/450/depositphotos_19223215-stock-photo-employee.jpg"
                                alt="Client 2"
                                class="client-image sm:w-[136px] sm:h-[146px] w-[77.939px] h-[84.069px] rounded-lg object-cover cursor-pointer transition duration-300 grayscale"
                                onclick="changeClient('https://st.depositphotos.com/1594308/1922/i/450/depositphotos_19223215-stock-photo-employee.jpg', 'Jenna Davis', 'Product Manager, Google', '{{ __('messages.jenna_feedback') }}', this)">

                            <!-- عميل 6 -->
                            <img src="https://us.123rf.com/450wm/bialasiewicz/bialasiewicz1510/bialasiewicz151001712/47110306-image-of-young-businessman-greeting-with-somebody.jpg?ver=6"
                                alt="Client 3"
                                class="client-image sm:w-[136px] sm:h-[146px] w-[77.939px] h-[84.069px] rounded-lg object-cover cursor-pointer transition duration-300 grayscale"
                                onclick="changeClient('https://us.123rf.com/450wm/bialasiewicz/bialasiewicz1510/bialasiewicz151001712/47110306-image-of-young-businessman-greeting-with-somebody.jpg?ver=6', 'Michael Brown', 'CTO, Magic', '{{ __('messages.michael_feedback') }}', this)">


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end #sec7 testimonials -->

        <!-- #sec8 features -->
        <section id="sec8" class="py-10 mt-14 px-3">
            <div class="text-right">
                <!-- steps Heading -->
                <h6 class="text-[35px] sm:text-[64px] font-extrabold text-[#424356] leading-[200%] mb-5  rtl:text-right ltr:text-left" ">
                            {{ __('messages.features') }}
                        </h6>
                        <!-- Descriptive Text -->
                        <p
                            class="rtl:text-right ltr:text-left text-responsive text-[#424356] sm:text-[18px] text-[14px] font-medium leading-[36.54px] w-[672px] ">
                            {{ __('messages.seamless_functions') }}
                        </p>
                    </div>

                    <!-- for desktop -->
                    <div class="items-fetures flex flex-col mt-36">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-[#424356] text-[36px] font-extrabold leading-[200%] mb-5 rtl:text-right ltr:text-left">
                                    {{ __('messages.ui_elements') }}
                                </p>
                            </div>
                            <div class="w-[525px]">
                                <p class="text-[#424356] text-[18px] font-normal leading-[200%] mb-5 rtl:text-right ltr:text-left">
                                    {{ __('messages.custom_solutions') }}
                                </p>
                            </div>
                        </div>

                        <div class="w-full h-[1px] bg-[#424356] my-10"></div>

                        <div class="flex items-center justify-between">
                            <div class="w-[525px] ">
                                <p class="text-[#424356] text-[18px] font-normal leading-[200%] mb-5 rtl:text-right ltr:text-left">
                                    {{ __('messages.attractive_design') }}
                                </p>
                            </div>
                            <div>
                                <p class="text-[#424356] text-[36px] font-extrabold leading-[200%] mb-5 rtl:text-right ltr:text-left">
                                    {{ __('messages.custom_design') }}
                                </p>
                            </div>
                        </div>
                    </div>



                    <!-- for mobile -->
                    <div class="items-fetures-mobile flex flex-col mt-20 ps-2">
                        <div class="flex flex-col gap-3 child-items-features-mobile">
                            <div>
                                <p class="text-[#424356] sm:text-[25px] text-[20px] font-[900] leading-[200%] mb-5 rtl:text-right ltr:text-left">
                                    {{ __('messages.ui_elements') }}
                                </p>
                            </div>
                            <div class="w-full h-[130px]">
                                <p class="text-[#424356] sm:text-lg text-[14px] font-normal leading-[200%] mb-5 rtl:text-right ltr:text-left">
                                    {{ __('messages.ui_elements_description') }}
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-3 child-items-features-mobile">
                            <div>
                                <p class="text-[#424356] sm:text-[25px] text-[20px] font-[900] leading-[200%] mb-5 rtl:text-right ltr:text-left">
                                    {{ __('messages.custom_design') }}
                                </p>
                            </div>
                            <div class="w-full h-[130px]">
                                <p class="text-[#424356] sm:text-lg text-[14px] font-normal leading-[200%] mb-5 rtl:text-right ltr:text-left">
                                    {{ __('messages.custom_design_description') }}
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-3 child-items-features-mobile">
                            <div>
                                <p class="text-[#424356] sm:text-[25px] text-[20px] font-[900] leading-[200%] mb-5 rtl:text-right ltr:text-left">
                                    {{ __('messages.responsive_design') }}
                                </p>
                            </div>
                            <div class="w-full h-[150px]">
                                <p class="text-[#424356] sm:text-lg text-[14px] font-normal leading-[200%] mb-5 rtl:text-right ltr:text-left">
                                    {{ __('messages.responsive_design_description') }}
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-3 child-items-features-mobile">
                            <div>
                                <p class="text-[#424356] sm:text-[25px] text-[20px] font-[900] leading-[200%] mb-5 rtl:text-right ltr:text-left">
                                    {{ __('messages.free_updates') }}
                                </p>
                            </div>
                            <div class="w-full h-[130px]">
                                <p class="text-[#424356] sm:text-lg text-[14px] font-normal leading-[200%] mb-5 rtl:text-right ltr:text-left">
                                    {{ __('messages.free_updates_description') }}
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-7">
                            <div>
                                <p class="text-[#424356] sm:text-[25px] text-[20px] font-[900] leading-[200%] mb-4 rtl:text-right ltr:text-left">
                                    {{ __('messages.clean_code') }}
                                </p>
                            </div>
                            <div class="w-full">
                                <p class="text-[#424356] sm:text-lg text-[14px] font-normal leading-[200%] rtl:text-right ltr:text-left">
                                    {{ __('messages.clean_code_description') }}
                                </p>
                            </div>
                        </div>
                    </div>




                </section>
                <!-- end #sece testimonials -->

                <!-- #sec9 contact -->
                <section id="contact" class="py-20 mt-5">
                    <div class="mx-auto text-center">
                        <!-- Digital Experience Heading -->
                        <h6 class="text-[#424356] mb-8 text-[35px] sm:text-[64px] text-[20px]">
                            {{ __('messages.contact_us') }}
                        </h6>
                    
                        <!-- Descriptive Text -->
                        <p class="text-[#424356] sm:text-[18px] sm:w-[617px] w-[100%] text-[14px] mx-auto font-medium leading-[36.54px] mb-8">
                            {{ __('messages.contact_description') }}
                        </p>
                    
                        <!-- Contact Form -->
                        <form action="{{ route('contact.store') }}" method="POST" class="mt-8 space-y-6 sm:p-14 p-4"
                            style="max-width: 1060px; height: auto; border-radius: 8px; background: #DEE0F9; margin: 0 auto; direction: rtl; box-shadow: 10px 11px 33.7px 0px rgba(110, 111, 128, 0.12);">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <span class="block rtl:text-right ltr:text-left mb-2 text-[16px] text-[#424356]">
                                        <span class="text-red-500" >*</span>
                                        {{ __('messages.name') }}
                                    </span>
                                    <div class="flex items-center">
                                        <input type="text" name="name"
                                            class="border border-[#C3CAD9] ltr:text-left  rounded-md p-2 w-full h-[56px] flex-shrink-0 max-w-full"
                                            style="max-width: 100%;" required />
                                    </div>
                                </div>
                                <div>
                                    <span class="block rtl:text-right ltr:text-left mb-2 text-[16px] text-[#424356]">
                                        <span class="text-red-500" >*</span>
                                        {{ __('messages.email') }}</span>
                                    <div class="flex items-center">
                                        <input type="email" name="email"
                                            class="border border-[#C3CAD9] ltr:text-left  rounded-md p-2 w-full h-[56px] flex-shrink-0 max-w-full"
                                            style="max-width: 100%;" required />
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <span class="block rtl:text-right ltr:text-left mb-2 text-[16px] text-[#424356]">
                                        <span class="text-red-500">*</span>
                                        {{ __('messages.phone_number') }}</span>
                                    <div class="flex items-center">
                                        <input type="tel" name="phone_number"
                                            class="border border-[#C3CAD9] ltr:text-left  rounded-md p-2 w-full h-[56px] flex-shrink-0 max-w-full"
                                            style="max-width: 100%;" required />
                                    </div>
                                </div>
                                <div>
                                    <span class="block rtl:text-right ltr:text-left mb-2 text-[16px] text-[#424356]">{{ __('messages.company_name') }} ({{ __('messages.optional') }})</span>
                                    <div class="flex items-center">
                                        <input type="text" name="company_name"
                                            class="border border-[#C3CAD9] ltr:text-left  rounded-md p-2 w-full h-[56px] flex-shrink-0 max-w-full"
                                            style="max-width: 100%;" />
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="block rtl:text-right ltr:text-left mb-3 text-[16px] text-[#424356]">
                                    <span class="text-red-500" >*</span>
                                    {{ __('messages.message') }}</span>
                                <textarea name="message" placeholder="{{ __('messages.type_your_message') }}"
                                    class="border ltr:text-left  border-[#C3CAD9] rounded-md p-2 w-full h-[200px] flex-shrink-0 max-w-full"
                                    style="max-width: 100%;" required></textarea>
                            </div>
                    
                            <div class="flex justify-center">
                                <button
                                    class="rounded-[20px] bg-[#4D63EB] text-white text-center sm:text-[18px] text-[14px] font-medium leading-[36.54px] sm:-mb-4 mb-4 sm:w-[321px] w-[90%] sm:py-2 py-1 shadow-md hover:bg-[#424356] hover:text-white transition-all duration-400 ease-in-out">
                                    {{ __('messages.button') }}
                                </button>
                            </div>
                        </form>
                    </div>
                    
                </section>
                <!-- end #sec7 contact -->

            </div>
            <!-- end container  -->
@endsection


@section('js')
    <script src="{{ asset('assets/js/main.js') }}"></script>
            <script src="{{ asset('assets/js/index.js') }}"></script>
@endsection
