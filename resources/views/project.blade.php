@extends('layouts.app')


@section('content')
    <!-- container -->
    <div class="max-w-screen-xl mx-auto mx-auto px-4 pb-8 mt-14">

        <!-- first -->
        <div class="box-main-first-details">
            <div class="right-content flex flex-col items-start sm:gap-3 lg:w-[765px] md:w-full w-full sm:p-0 p-1">
                <!-- Back to projects button -->
                <a href="{{ route('home') }}/#projects"
                    class="text-[14px] flex items-center justify-center gap-3 font-[400] text-[#424356] cursor-pointer hover:text-[#4D63EB] duration-500">
                    <svg class="back-svg" xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16"
                        fill="none">
                        <path
                            d="M9.3777 0.260707C9.034 -0.0829962 8.46511 -0.0829962 8.12141 0.260707C7.7777 0.604411 7.7777 1.1733 8.12141 1.517L13.7155 7.11108H1.63844C1.18807 7.11108 0.820667 7.44293 0.761408 7.88145V7.99997C0.761408 8.48589 1.15252 8.88886 1.63844 8.88886H13.7155L8.12141 14.4829C7.80141 14.8029 7.7777 15.2889 8.03844 15.6444L8.12141 15.7392C8.46511 16.0829 9.034 16.0829 9.3777 15.7392L16.4888 8.62811L16.5599 8.54515L16.5836 8.49774L16.6192 8.45034V8.42663V8.39108L16.6547 8.35552V8.33182L16.6666 8.31997V8.29626L16.6903 8.24886V8.2133L16.7021 8.20145V8.17774V8.14219V8.10663V8.08293V8.05923V8.02367V7.98811V7.96441V7.94071V7.90515V7.85774V7.83404V7.81034L16.6903 7.77478V7.72737L16.6666 7.70367V7.66811L16.6429 7.63256V7.597L16.6192 7.58515L16.5836 7.52589L16.5599 7.49034C16.5599 7.49034 16.5007 7.41923 16.477 7.39552L9.3777 0.260707Z"
                            fill="#424356" />
                    </svg>
                    {{ __('messages.project_back') }}
                </a>

                <!-- Project title -->
                <h1
                    class="text-[#424356] rtl:text-right ltr:text-left md:text-[64px] text-[40px] font-black font-[900] [font-variant:all-small-caps]">
                    {{ __('messages.project_title') }}
                </h1>

                <!-- Project description -->
                <p class="text-[#424356] rtl:text-right ltr:text-left sm:text-[20px] text-[16px] leading-[36.54px] font-[500] sm:py-0 py-3 ">
                    {{ __('messages.project_description') }}
                </p>

                <!-- buttons -->
                <div class="flex items-center gap-3 mt-4">
                    <button
                        class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px] font-light flex-shrink-0 border rounded-[10px] border-[#424356] bg-white/5 backdrop-blur-[20px] text-[#424356]">
                        {{ __('messages.design_button') }}
                    </button>
                    <button
                        class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px]  font-light flex-shrink-0 border rounded-[10px] border-[#424356] bg-white/5 backdrop-blur-[20px] text-[#424356]">
                        {{ __('messages.development_button') }}
                    </button>
                </div>
            </div>
            <!-- img -->
            <div class="left-img lg:w-[423px] md:w-full w-full h-[403px]">
                <div
                    class="w-full h-full rounded-[20px] border-2 border-white/50 bg-[#424356] flex items-center justify-center">
                    <button style="box-shadow: 0px 4px 9.2px 0px rgba(77, 99, 235, 0.37);"
                        class="hover:bg-gray-900 transition-all duration-500 rounded-[25px] bg-[#4D63EB] text-white text-center gap-2 flex items-center py-3.5 justify-center text-[14px] font-medium sm:w-[229px] w-3/4">
                        {{ __('messages.browse_design') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17"
                            fill="none">
                            <path
                                d="M8 0.5C8.42323 0.5 8.77419 0.850968 8.77419 1.27419C8.77419 1.69742 8.42323 2.04839 8 2.04839H3.17935C2.28129 2.04839 1.54839 2.78129 1.54839 3.67935V13.3103C1.54839 14.2084 2.28129 14.9413 3.17935 14.9413H12.8103C13.7084 14.9413 14.4413 14.2084 14.4413 13.3103V8.48968C14.4413 8.06645 14.7923 7.71548 15.2155 7.71548C15.6387 7.71548 15.9897 8.06645 15.9897 8.48968V13.3103C15.9897 15.0652 14.5652 16.4897 12.8103 16.4897H3.17935C1.42452 16.4897 0 15.0652 0 13.3103V3.67935C0 1.92452 1.42452 0.5 3.17935 0.5H8Z"
                                fill="white" />
                            <path
                                d="M15.9996 0.5V4.92839C15.9996 5.35161 15.6486 5.70258 15.2254 5.70258C14.8022 5.70258 14.4512 5.35161 14.4512 4.92839V2.04839H11.6125C11.2202 2.04839 10.9002 1.75935 10.8486 1.37742V1.27419C10.8486 0.850968 11.1893 0.5 11.6125 0.5H15.9996Z"
                                fill="white" />
                            <path
                                d="M14.6787 0.727202C14.9781 0.427847 15.4736 0.427847 15.7729 0.727202C16.0723 1.02656 16.0723 1.52204 15.7729 1.8214L6.14195 11.4524C5.8426 11.7518 5.3471 11.7518 5.0477 11.4524C4.74835 11.153 4.74835 10.6575 5.0477 10.3581L14.6787 0.727202Z"
                                fill="white" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- about app -->
        <div class="about-app">
            <h2 class="text-[#424356] rtl:text-right ltr:text-left font-black font-[900] text-2xl mt-8">
                {{ __('messages.about_app') }}
            </h2>
            <p
                class="text-[#424356] rtl:text-right ltr:text-left mt-5 sm:text-[18px] text-[12px] font-medium leading-[36.54px] font-normal [font-variant:all-small-caps]">

                {!! __('messages.app_info') !!}

            </p>
        </div>

    </div>
    <!-- end container  -->
@endsection


@section('js')
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
