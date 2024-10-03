@extends('layouts.app')


@section('content')
        <!-- container -->
        <div class="max-w-screen-xl mx-auto px-4 pb-8 mt-14">
            <div class="flex flex-col mb-16">
                <h1 class="sm:text-[64px] text-[24px] mb-10 text-center font-black leading-[203%] text-[#424356] font-[900] normal-case">
                    {{ __('messages.faqs_title') }}
                </h1>
        
                <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-unset text-gray-900" data-inactive-classes="text-[#424356]">
                    <!-- Accordion Item 1 -->
                    <h2 class="p-3" id="accordion-flush-heading-1" style="border-radius: 20px; border: 1px solid #FFF; background: rgba(255, 255, 255, 0.10); backdrop-filter: blur(17.5px);">
                        <button type="button" class="flex items-center justify-between w-full rtl:text-right ltr:text-left text-[#424356] sm:text-[17px] text-[15px] mr-3 font-[400] py-3 gap-3"
                            data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                            <span>{{ __('messages.faqs_1_question') }}</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 ml-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                        <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                            <div class="py-5">
                                <p class="mb-2 text-[#424356] rtl:text-right ltr:text-left font-alexandria sm:text-[16px] text-[14px] font-normal leading-[203%] lowercase">
                                    {{ __('messages.faqs_1_answer') }}
                                </p>
                            </div>
                        </div>
                    </h2>
        
                    <!-- Space Between Accordions -->
                    <div class="my-7"></div>
        
                    <!-- Accordion Item 2 -->
                    <h2 class="p-3" id="accordion-flush-heading-2" style="border-radius: 20px; border: 1px solid #FFF; background: rgba(255, 255, 255, 0.10); backdrop-filter: blur(17.5px);">
                        <button type="button" class="flex items-center justify-between w-full rtl:text-right ltr:text-left text-[#424356] sm:text-[17px] text-[15px] mr-3 font-[400] py-3 gap-3"
                            data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                            <span>{{ __('messages.faqs_2_question') }}</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 ml-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                        <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                            <div class="py-5">
                                <p class="mb-2 text-[#424356] rtl:text-right ltr:text-left font-alexandria sm:text-[16px] text-[14px] font-normal leading-[203%] lowercase">
                                    {{ __('messages.faqs_2_answer') }}
                                </p>
                            </div>
                        </div>
                    </h2>
        
                    <!-- Space Between Accordions -->
                    <div class="my-7"></div>
        
                    <!-- Accordion Item 3 -->
                    <h2 class="p-3" id="accordion-flush-heading-3" style="border-radius: 20px; border: 1px solid #FFF; background: rgba(255, 255, 255, 0.10); backdrop-filter: blur(17.5px);">
                        <button type="button" class="flex items-center justify-between w-full rtl:text-right ltr:text-left text-[#424356] sm:text-[17px] text-[15px] mr-3 font-[400] py-3 gap-3"
                            data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                            <span>{{ __('messages.faqs_3_question') }}</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 ml-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                        <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                            <div class="py-5">
                                <p class="mb-2 text-[#424356] rtl:text-right ltr:text-left font-alexandria sm:text-[16px] text-[14px] font-normal leading-[203%] lowercase">
                                    {{ __('messages.faqs_3_answer') }}
                                </p>
                            </div>
                        </div>
                    </h2>
        
                    <!-- Space Between Accordions -->
                    <div class="my-7"></div>
        
                    <!-- Accordion Item 4 -->
                    <h2 class="p-3" id="accordion-flush-heading-4" style="border-radius: 20px; border: 1px solid #FFF; background: rgba(255, 255, 255, 0.10); backdrop-filter: blur(17.5px);">
                        <button type="button" class="flex items-center justify-between w-full rtl:text-right ltr:text-left text-[#424356] sm:text-[17px] text-[15px] mr-3 font-[400] py-3 gap-3"
                            data-accordion-target="#accordion-flush-body-4" aria-expanded="false" aria-controls="accordion-flush-body-4">
                            <span>{{ __('messages.faqs_4_question') }}</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 ml-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                        <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                            <div class="py-5">
                                <p class="mb-2 text-[#424356] rtl:text-right ltr:text-left font-alexandria sm:text-[16px] text-[14px] font-normal leading-[203%] lowercase">
                                    {{ __('messages.faqs_4_answer') }}
                                </p>
                            </div>
                        </div>
                    </h2>
        
                    <!-- Space Between Accordions -->
                    <div class="my-7"></div>
        
                    <!-- Accordion Item 5 -->
                    <h2 class="p-3" id="accordion-flush-heading-5" style="border-radius: 20px; border: 1px solid #FFF; background: rgba(255, 255, 255, 0.10); backdrop-filter: blur(17.5px);">
                        <button type="button" class="flex items-center justify-between w-full rtl:text-right ltr:text-left text-[#424356] sm:text-[17px] text-[15px] mr-3 font-[400] py-3 gap-3"
                            data-accordion-target="#accordion-flush-body-5" aria-expanded="false" aria-controls="accordion-flush-body-5">
                            <span>{{ __('messages.faqs_5_question') }}</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 ml-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                        <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
                            <div class="py-5">
                                <p class="mb-2 text-[#424356] rtl:text-right ltr:text-left font-alexandria sm:text-[16px] text-[14px] font-normal leading-[203%] lowercase">
                                    {{ __('messages.faqs_5_answer') }}
                                </p>
                            </div>
                        </div>
                    </h2>
                </div>
            </div>
        </div>
        
        <!-- end container  -->
@endsection


@section('js')
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
