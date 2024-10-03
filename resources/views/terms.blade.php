@extends('layouts.app')


@section('content')
        <!-- container -->
        <div class="max-w-screen-xl mx-auto px-4 pb-8 mt-14">
            <div class="flex flex-col">
                <h1 class="sm:text-[64px] text-[24px] mb-10 text-center font-black leading-[203%] text-[#424356] font-[900] normal-case">
                    {{ __('messages.privacy_policy_title') }}
                </h1>
        
                <div class="mb-10 rounded-[20px] border border-white bg-[rgba(255,255,255,0.30)] backdrop-blur-[17.5px] sm:p-10 p-5">
                    <span class="sm:text-[18px] text-[12px] text-right font-[400] leading-[250%] text-[#424356]">
                        {{ __('messages.privacy_policy_content') }}
                    </span>
                </div>
            </div>
        </div>
        
        <!-- end container  -->
@endsection


@section('js')
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
