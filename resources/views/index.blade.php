@extends('layouts.app')


@section('content')
    <!-- container -->
    <!-- #sec1 hero -->

    <section id="about"
        class="flex relative flex-col items-center justify-center sm:mt-12 mt-0 pt-20 sm:max-w-screen-xl w-full mx-auto mx-auto   ">
        <!-- Circle with Logo -->

        <!-- desktop -->
        <div style="position: absolute; left: 223px; top: 0;z-index:-9999;"
            class="circle-desk animate__animated animate__pulse animate__infinite">
            <svg width="201" height="200" viewBox="0 0 201 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_334_47)">
                    <ellipse cx="90.5" cy="89" rx="66.5" ry="66" fill="white" fill-opacity="0.3"
                        shape-rendering="crispEdges" />
                    <path
                        d="M156 89C156 124.891 126.682 154 90.5 154C54.3182 154 25 124.891 25 89C25 53.1086 54.3182 24 90.5 24C126.682 24 156 53.1086 156 89Z"
                        stroke="white" stroke-width="2" shape-rendering="crispEdges" />
                </g>
                <path
                    d="M81.5 82.7419V91.1119C81.5 93.4019 83.293 95.2579 85.51 95.2579C87.725 95.2579 89.522 93.4019 89.522 91.1119V82.7419M100.5 82.7419L92.482 95.2579M92.482 82.7419L100.5 95.2579"
                    stroke="#424356" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M105.5 70.5H76.5C74.2909 70.5 72.5 72.2909 72.5 74.5V103.5C72.5 105.709 74.2909 107.5 76.5 107.5H105.5C107.709 107.5 109.5 105.709 109.5 103.5V74.5C109.5 72.2909 107.709 70.5 105.5 70.5Z"
                    stroke="#424356" stroke-linecap="round" stroke-linejoin="round" />
                <defs>
                    <filter id="filter0_d_334_47" x="0.299999" y="0.299999" width="200.4" height="199.4"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dx="10" dy="11" />
                        <feGaussianBlur stdDeviation="16.85" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix" values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_334_47" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_334_47" result="shape" />
                    </filter>
                </defs>
            </svg>

        </div>

        <div style="position: absolute; left: 107px; top: 150px;z-index:-9999;"
            class="circle-desk animate__animated animate__pulse animate__infinite">
            <svg width="160" height="161" viewBox="0 0 160 161" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_334_48)">
                    <ellipse cx="70" cy="69.5" rx="46" ry="46.5" fill="white" fill-opacity="0.3"
                        shape-rendering="crispEdges" />
                    <path
                        d="M115 69.5C115 94.6392 94.8427 115 70 115C45.1574 115 25 94.6392 25 69.5C25 44.3608 45.1574 24 70 24C94.8427 24 115 44.3608 115 69.5Z"
                        stroke="white" stroke-width="2" shape-rendering="crispEdges" />
                </g>
                <path
                    d="M61.2959 77.6021L67.6599 71.2381M75.6739 68.4081L73.7689 74.1231C73.7385 74.2147 73.6865 74.2976 73.6172 74.3648C73.5479 74.432 73.4634 74.4815 73.3709 74.5091L61.6929 77.9801C61.5877 78.0113 61.476 78.0131 61.3698 77.9853C61.2637 77.9574 61.1672 77.901 61.0909 77.8221C61.0146 77.7432 60.9614 77.6449 60.937 77.5379C60.9127 77.4308 60.9182 77.3192 60.9529 77.2151L64.7449 65.8411C64.7721 65.7594 64.8165 65.6846 64.8752 65.6216C64.9339 65.5586 65.0054 65.509 65.0849 65.4761L70.4719 63.2581C70.5815 63.2129 70.7019 63.2011 70.8181 63.2242C70.9343 63.2473 71.0411 63.3044 71.1249 63.3881L75.5289 67.7941C75.6077 67.8729 75.663 67.972 75.6887 68.0805C75.7143 68.1889 75.7092 68.3024 75.6739 68.4081Z"
                    stroke="#424356" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M75.792 68.056L78.62 65.227C78.9949 64.8519 79.2055 64.3433 79.2055 63.813C79.2055 63.2827 78.9949 62.774 78.62 62.399L76.5 60.277C76.3142 60.0912 76.0937 59.9438 75.851 59.8432C75.6083 59.7427 75.3482 59.6909 75.0855 59.6909C74.8228 59.6909 74.5626 59.7427 74.3199 59.8432C74.0772 59.9438 73.8567 60.0912 73.671 60.277L70.843 63.106M69.781 69.116C69.6416 68.9767 69.4762 68.8663 69.2942 68.7909C69.1122 68.7156 68.9171 68.6768 68.7201 68.6769C68.5231 68.6769 68.328 68.7158 68.1461 68.7912C67.9641 68.8666 67.7987 68.9772 67.6595 69.1165C67.5202 69.2558 67.4097 69.4212 67.3344 69.6032C67.259 69.7853 67.2203 69.9803 67.2203 70.1773C67.2204 70.3743 67.2592 70.5694 67.3347 70.7514C67.4101 70.9334 67.5206 71.0987 67.66 71.238C67.9414 71.5193 68.323 71.6772 68.7208 71.6771C69.1187 71.677 69.5002 71.5189 69.7815 71.2375C70.0627 70.9561 70.2207 70.5745 70.2206 70.1766C70.2205 69.7788 70.0624 69.3973 69.781 69.116Z"
                    stroke="#424356" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <defs>
                    <filter id="filter0_d_334_48" x="0.299999" y="0.299999" width="159.4" height="160.4"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dx="10" dy="11" />
                        <feGaussianBlur stdDeviation="16.85" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix" values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_334_48" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_334_48" result="shape" />
                    </filter>
                </defs>
            </svg>

        </div>

        <div style="position: absolute; left: 230px; top: 250px;z-index:-9999;"
            class="circle-desk animate__animated animate__pulse animate__infinite">
            <svg width="161" height="161" viewBox="0 0 161 161" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_334_50)">
                    <circle cx="70.5" cy="69.5" r="46.5" fill="white" fill-opacity="0.3"
                        shape-rendering="crispEdges" />
                    <circle cx="70.5" cy="69.5" r="45.5" stroke="white" stroke-width="2"
                        shape-rendering="crispEdges" />
                </g>
                <path
                    d="M78.084 65.25C78.8944 64.731 79.5148 63.9635 79.8524 63.0623C80.19 62.1612 80.2267 61.1749 79.9568 60.2512C79.687 59.3275 79.1252 58.5161 78.3555 57.9385C77.5859 57.3608 76.6498 57.048 75.6875 57.0469H67.25C66.2877 57.048 65.3516 57.3608 64.582 57.9385C63.8123 58.5161 63.2505 59.3275 62.9807 60.2512C62.7108 61.1749 62.7475 62.1612 63.0851 63.0623C63.4227 63.9635 64.0431 64.731 64.8535 65.25C64.2101 65.6619 63.6835 66.2324 63.3243 66.9066C62.9651 67.5808 62.7854 68.3361 62.8025 69.0999C62.8196 69.8636 63.0328 70.6101 63.4218 71.2676C63.8107 71.9252 64.3623 72.4715 65.0234 72.8543C64.3102 73.3211 63.7303 73.9652 63.3408 74.7235C62.9513 75.4817 62.7653 76.3282 62.8012 77.1799C62.8371 78.0316 63.0937 78.8594 63.5456 79.5821C63.9976 80.3049 64.6296 80.8979 65.3796 81.3031C66.1297 81.7082 66.9721 81.9116 67.8243 81.8933C68.6766 81.875 69.5095 81.6357 70.2415 81.1987C70.9735 80.7618 71.5794 80.1423 72 79.4007C72.4205 78.6592 72.6413 77.8212 72.6406 76.9687V72.2437C73.0912 72.6725 73.6266 73.0022 74.2124 73.2114C74.7981 73.4207 75.4212 73.5049 76.0415 73.4587C76.6618 73.4124 77.2655 73.2368 77.8137 72.943C78.362 72.6492 78.8426 72.2438 79.2246 71.753C79.6067 71.2621 79.8816 70.6967 80.0318 70.0931C80.182 69.4895 80.2041 68.8612 80.0966 68.2485C79.9892 67.6359 79.7546 67.0525 79.4079 66.5361C79.0613 66.0196 78.6103 65.5815 78.084 65.25ZM78.7344 61.5C78.7344 62.3081 78.4134 63.0831 77.842 63.6545C77.2706 64.2259 76.4956 64.5469 75.6875 64.5469H72.6406V58.4531H75.6875C76.4956 58.4531 77.2706 58.7741 77.842 59.3455C78.4134 59.9169 78.7344 60.6919 78.7344 61.5ZM64.2031 61.5C64.2031 60.6919 64.5241 59.9169 65.0955 59.3455C65.6669 58.7741 66.4419 58.4531 67.25 58.4531H71.2344V64.5469H67.25C66.4419 64.5469 65.6669 64.2259 65.0955 63.6545C64.5241 63.0831 64.2031 62.3081 64.2031 61.5ZM67.25 72.0469C66.4419 72.0469 65.6669 71.7259 65.0955 71.1545C64.5241 70.5831 64.2031 69.8081 64.2031 69C64.2031 68.1919 64.5241 67.4169 65.0955 66.8455C65.6669 66.2741 66.4419 65.9531 67.25 65.9531H71.2344V72.0469H67.25ZM71.2344 76.9687C71.2344 77.6641 71.0282 78.3438 70.6419 78.9219C70.2556 79.5001 69.7065 79.9507 69.0641 80.2168C68.4217 80.4829 67.7148 80.5525 67.0329 80.4168C66.3509 80.2812 65.7245 79.9463 65.2328 79.4547C64.7412 78.963 64.4063 78.3366 64.2707 77.6546C64.135 76.9726 64.2046 76.2658 64.4707 75.6234C64.7368 74.981 65.1874 74.4319 65.7656 74.0456C66.3437 73.6593 67.0234 73.4531 67.7187 73.4531H71.2344V76.9687ZM75.6875 72.0469C75.0849 72.0469 74.4958 71.8682 73.9947 71.5334C73.4937 71.1986 73.1032 70.7227 72.8726 70.166C72.6419 69.6092 72.5816 68.9966 72.6992 68.4056C72.8167 67.8145 73.1069 67.2716 73.533 66.8455C73.9591 66.4194 74.502 66.1292 75.0931 66.0117C75.6841 65.8941 76.2967 65.9544 76.8535 66.1851C77.4102 66.4157 77.8861 66.8062 78.2209 67.3072C78.5557 67.8083 78.7344 68.3974 78.7344 69C78.7344 69.8081 78.4134 70.5831 77.842 71.1545C77.2706 71.7259 76.4956 72.0469 75.6875 72.0469Z"
                    fill="#424356" />
                <defs>
                    <filter id="filter0_d_334_50" x="0.299999" y="0.299999" width="160.4" height="160.4"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dx="10" dy="11" />
                        <feGaussianBlur stdDeviation="16.85" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix"
                            values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_334_50" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_334_50" result="shape" />
                    </filter>
                </defs>
            </svg>

        </div>

        <!-- mobile -->
        <div style="position: absolute; right: 10px; top: 0;z-index:-9999;"
            class="circle-mobile animate__animated animate__pulse animate__infinite">

            <svg width="124" height="124" viewBox="0 0 201 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_334_47)">
                    <ellipse cx="90.5" cy="89" rx="66.5" ry="66" fill="white"
                        fill-opacity="0.3" shape-rendering="crispEdges" />
                    <path
                        d="M156 89C156 124.891 126.682 154 90.5 154C54.3182 154 25 124.891 25 89C25 53.1086 54.3182 24 90.5 24C126.682 24 156 53.1086 156 89Z"
                        stroke="white" stroke-width="2" shape-rendering="crispEdges" />
                </g>
                <path
                    d="M81.5 82.7419V91.1119C81.5 93.4019 83.293 95.2579 85.51 95.2579C87.725 95.2579 89.522 93.4019 89.522 91.1119V82.7419M100.5 82.7419L92.482 95.2579M92.482 82.7419L100.5 95.2579"
                    stroke="#424356" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M105.5 70.5H76.5C74.2909 70.5 72.5 72.2909 72.5 74.5V103.5C72.5 105.709 74.2909 107.5 76.5 107.5H105.5C107.709 107.5 109.5 105.709 109.5 103.5V74.5C109.5 72.2909 107.709 70.5 105.5 70.5Z"
                    stroke="#424356" stroke-linecap="round" stroke-linejoin="round" />
                <defs>
                    <filter id="filter0_d_334_47" x="0.299999" y="0.299999" width="200.4" height="199.4"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dx="10" dy="11" />
                        <feGaussianBlur stdDeviation="16.85" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix"
                            values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_334_47" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_334_47" result="shape" />
                    </filter>
                </defs>
            </svg>
        </div>

        <div style="position: absolute; right: -10px; top: 125px;z-index:-9999;"
            class="circle-mobile animate__animated animate__pulse animate__infinite">
            <svg width="95" height="95" viewBox="0 0 160 161" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_335_5)">
                    <ellipse cx="70" cy="69.5" rx="46" ry="46.5" fill="white"
                        fill-opacity="0.3" shape-rendering="crispEdges" />
                    <path
                        d="M115 69.5C115 94.6392 94.8427 115 70 115C45.1574 115 25 94.6392 25 69.5C25 44.3608 45.1574 24 70 24C94.8427 24 115 44.3608 115 69.5Z"
                        stroke="white" stroke-width="2" shape-rendering="crispEdges" />
                </g>
                <path d="M70 78.3467L70.0133 78.332" stroke="#424356" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M78 77.0001V81.5334C78 81.6385 77.9793 81.7425 77.9391 81.8396C77.8989 81.9366 77.84 82.0248 77.7657 82.0991C77.6914 82.1734 77.6032 82.2323 77.5061 82.2725C77.4091 82.3127 77.3051 82.3334 77.2 82.3334H62.8C62.6949 82.3334 62.5909 82.3127 62.4939 82.2725C62.3968 82.2323 62.3086 82.1734 62.2343 82.0991C62.16 82.0248 62.1011 81.9366 62.0609 81.8396C62.0207 81.7425 62 81.6385 62 81.5334V77.0001M78 61.0001V56.4667C78 56.2546 77.9157 56.0511 77.7657 55.9011C77.6157 55.751 77.4122 55.6667 77.2 55.6667H62.8C62.5878 55.6667 62.3843 55.751 62.2343 55.9011C62.0843 56.0511 62 56.2546 62 56.4667V61.0001"
                    stroke="#424356" stroke-width="1.5" stroke-linecap="round" />
                <path d="M74.6667 64.3335L79.3334 69.0002L74.6667 73.6668M65.3334 64.3335L60.6667 69.0002L65.3334 73.6668"
                    stroke="#424356" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <defs>
                    <filter id="filter0_d_335_5" x="0.299999" y="0.299999" width="159.4" height="160.4"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dx="10" dy="11" />
                        <feGaussianBlur stdDeviation="16.85" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix"
                            values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_335_5" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_335_5" result="shape" />
                    </filter>
                </defs>
            </svg>

        </div>

        <div style="position: absolute; right: 15px; top: 230px;z-index:-9999;"
            class="circle-mobile animate__animated animate__pulse animate__infinite">
            <svg width="110" height="110" viewBox="0 0 169 169" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_335_4)">
                    <circle cx="74.5" cy="73.5" r="50.5" fill="white" fill-opacity="0.3"
                        shape-rendering="crispEdges" />
                    <circle cx="74.5" cy="73.5" r="49.5" stroke="white" stroke-width="2"
                        shape-rendering="crispEdges" />
                </g>
                <path
                    d="M68.3333 67.6667H64.3333C63.9797 67.6667 63.6406 67.8072 63.3905 68.0573C63.1405 68.3073 63 68.6465 63 69.0001V71.6667C63 72.0204 63.1405 72.3595 63.3905 72.6096C63.6406 72.8596 63.9797 73.0001 64.3333 73.0001H67C67.3536 73.0001 67.6928 73.1406 67.9428 73.3906C68.1929 73.6407 68.3333 73.9798 68.3333 74.3334V77.0001C68.3333 77.3537 68.1929 77.6928 67.9428 77.9429C67.6928 78.1929 67.3536 78.3334 67 78.3334H63M77.6667 78.3334H72.3333V67.6667H77.6667M73.6667 73.0001H76.3333M81.6667 69.0001C81.6667 68.6465 81.8071 68.3073 82.0572 68.0573C82.3072 67.8072 82.6464 67.6667 83 67.6667H85.6667C86.0203 67.6667 86.3594 67.8072 86.6095 68.0573C86.8595 68.3073 87 68.6465 87 69.0001V77.0001C87 77.3537 86.8595 77.6928 86.6095 77.9429C86.3594 78.1929 86.0203 78.3334 85.6667 78.3334H83C82.6464 78.3334 82.3072 78.1929 82.0572 77.9429C81.8071 77.6928 81.6667 77.3537 81.6667 77.0001V69.0001Z"
                    stroke="#424356" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <defs>
                    <filter id="filter0_d_335_4" x="0.299999" y="0.299999" width="168.4" height="168.4"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dx="10" dy="11" />
                        <feGaussianBlur stdDeviation="16.85" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix"
                            values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_335_4" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_335_4" result="shape" />
                    </filter>
                </defs>
            </svg>
        </div>

        <!-- logo -->
        <div
            class="flex items-center justify-center rounded-full mr-[2px] sm:mt-0 mt-3 bg-[#4D63EB] sm:w-[289.475px] w-[160px] sm:h-[289.475px] h-[160px] mb-8 ">

            <div class="div">
                <img src="{{ asset('assets/images/logotext.svg') }}" alt="Logo"
                    class="sm:w-[196.276px] sm:h-[126.826px] w-[97px] h-[85.3px]">
            </div>
            <div class="div"></div>
        </div>

        <!-- desktop  -->


        <div style="position: absolute; right: 217px; top: 0;z-index:-9999;"
            class="circle-desk animate__animated animate__pulse animate__infinite">
            <svg width="201" height="201" viewBox="0 0 201 201" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_335_6)">
                    <circle cx="90.5" cy="89.5" r="66.5" fill="white" fill-opacity="0.3"
                        shape-rendering="crispEdges" />
                    <circle cx="90.5" cy="89.5" r="65.5" stroke="white" stroke-width="2"
                        shape-rendering="crispEdges" />
                </g>
                <path
                    d="M76.3333 92.7033V75.6666C76.3333 74.7825 76.6845 73.9347 77.3096 73.3096C77.9347 72.6844 78.7826 72.3333 79.6666 72.3333H102.333C103.217 72.3333 104.065 72.6844 104.69 73.3096C105.315 73.9347 105.667 74.7825 105.667 75.6666V92.7033M76.3333 92.7033H105.667M76.3333 92.7033L73.8666 101.427C73.7265 101.922 73.7032 102.444 73.7985 102.95C73.8937 103.456 74.105 103.933 74.4157 104.344C74.7264 104.755 75.128 105.088 75.5891 105.317C76.0502 105.547 76.5583 105.666 77.0733 105.667H104.927C105.442 105.666 105.95 105.547 106.411 105.317C106.872 105.088 107.274 104.755 107.584 104.344C107.895 103.933 108.106 103.456 108.201 102.95C108.297 102.444 108.273 101.922 108.133 101.427L105.667 92.7033"
                    stroke="#424356" stroke-width="1.5" />
                <path
                    d="M89.3333 100.667H92.6666M94.3333 79L97.6666 82.3333L94.3333 85.6667M87.6666 79L84.3333 82.3333L87.6666 85.6667"
                    stroke="#424356" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <defs>
                    <filter id="filter0_d_335_6" x="0.299999" y="0.299999" width="200.4" height="200.4"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dx="10" dy="11" />
                        <feGaussianBlur stdDeviation="16.85" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix"
                            values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_335_6" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_335_6" result="shape" />
                    </filter>
                </defs>
            </svg>
        </div>

        <div style="position: absolute; right: 107px; top: 150px;z-index:-9999;"
            class="circle-desk animate__animated animate__pulse animate__infinite">
            <svg width="160" height="161" viewBox="0 0 160 161" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_335_5)">
                    <ellipse cx="70" cy="69.5" rx="46" ry="46.5" fill="white"
                        fill-opacity="0.3" shape-rendering="crispEdges" />
                    <path
                        d="M115 69.5C115 94.6392 94.8427 115 70 115C45.1574 115 25 94.6392 25 69.5C25 44.3608 45.1574 24 70 24C94.8427 24 115 44.3608 115 69.5Z"
                        stroke="white" stroke-width="2" shape-rendering="crispEdges" />
                </g>
                <path d="M70 78.3467L70.0133 78.332" stroke="#424356" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M78 77.0001V81.5334C78 81.6385 77.9793 81.7425 77.9391 81.8396C77.8989 81.9366 77.84 82.0248 77.7657 82.0991C77.6914 82.1734 77.6032 82.2323 77.5061 82.2725C77.4091 82.3127 77.3051 82.3334 77.2 82.3334H62.8C62.6949 82.3334 62.5909 82.3127 62.4939 82.2725C62.3968 82.2323 62.3086 82.1734 62.2343 82.0991C62.16 82.0248 62.1011 81.9366 62.0609 81.8396C62.0207 81.7425 62 81.6385 62 81.5334V77.0001M78 61.0001V56.4667C78 56.2546 77.9157 56.0511 77.7657 55.9011C77.6157 55.751 77.4122 55.6667 77.2 55.6667H62.8C62.5878 55.6667 62.3843 55.751 62.2343 55.9011C62.0843 56.0511 62 56.2546 62 56.4667V61.0001"
                    stroke="#424356" stroke-width="1.5" stroke-linecap="round" />
                <path d="M74.6667 64.3335L79.3334 69.0002L74.6667 73.6668M65.3334 64.3335L60.6667 69.0002L65.3334 73.6668"
                    stroke="#424356" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <defs>
                    <filter id="filter0_d_335_5" x="0.299999" y="0.299999" width="159.4" height="160.4"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dx="10" dy="11" />
                        <feGaussianBlur stdDeviation="16.85" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix"
                            values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_335_5" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_335_5" result="shape" />
                    </filter>
                </defs>
            </svg>
        </div>

        <div style="position: absolute; right: 230px; top: 250px;z-index:-9999;"
            class="circle-desk animate__animated animate__pulse animate__infinite">
            <svg width="169" height="169" viewBox="0 0 169 169" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_335_4)">
                    <circle cx="74.5" cy="73.5" r="50.5" fill="white" fill-opacity="0.3"
                        shape-rendering="crispEdges" />
                    <circle cx="74.5" cy="73.5" r="49.5" stroke="white" stroke-width="2"
                        shape-rendering="crispEdges" />
                </g>
                <path
                    d="M68.3333 67.6667H64.3333C63.9797 67.6667 63.6406 67.8072 63.3905 68.0573C63.1405 68.3073 63 68.6465 63 69.0001V71.6667C63 72.0204 63.1405 72.3595 63.3905 72.6096C63.6406 72.8596 63.9797 73.0001 64.3333 73.0001H67C67.3536 73.0001 67.6928 73.1406 67.9428 73.3906C68.1929 73.6407 68.3333 73.9798 68.3333 74.3334V77.0001C68.3333 77.3537 68.1929 77.6928 67.9428 77.9429C67.6928 78.1929 67.3536 78.3334 67 78.3334H63M77.6667 78.3334H72.3333V67.6667H77.6667M73.6667 73.0001H76.3333M81.6667 69.0001C81.6667 68.6465 81.8071 68.3073 82.0572 68.0573C82.3072 67.8072 82.6464 67.6667 83 67.6667H85.6667C86.0203 67.6667 86.3594 67.8072 86.6095 68.0573C86.8595 68.3073 87 68.6465 87 69.0001V77.0001C87 77.3537 86.8595 77.6928 86.6095 77.9429C86.3594 78.1929 86.0203 78.3334 85.6667 78.3334H83C82.6464 78.3334 82.3072 78.1929 82.0572 77.9429C81.8071 77.6928 81.6667 77.3537 81.6667 77.0001V69.0001Z"
                    stroke="#424356" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <defs>
                    <filter id="filter0_d_335_4" x="0.299999" y="0.299999" width="168.4" height="168.4"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dx="10" dy="11" />
                        <feGaussianBlur stdDeviation="16.85" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix"
                            values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_335_4" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_335_4" result="shape" />
                    </filter>
                </defs>
            </svg>


        </div>









        <!-- mobile -->
        <div style="position: absolute; left: 20px; top: 0;z-index:-9999;"
            class="circle-mobile animate__animated animate__pulse animate__infinite">
            <svg width="124" height="124" viewBox="0 0 201 201" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_335_6)">
                    <circle cx="90.5" cy="89.5" r="66.5" fill="white" fill-opacity="0.3"
                        shape-rendering="crispEdges" />
                    <circle cx="90.5" cy="89.5" r="65.5" stroke="white" stroke-width="2"
                        shape-rendering="crispEdges" />
                </g>
                <path
                    d="M76.3333 92.7033V75.6666C76.3333 74.7825 76.6845 73.9347 77.3096 73.3096C77.9347 72.6844 78.7826 72.3333 79.6666 72.3333H102.333C103.217 72.3333 104.065 72.6844 104.69 73.3096C105.315 73.9347 105.667 74.7825 105.667 75.6666V92.7033M76.3333 92.7033H105.667M76.3333 92.7033L73.8666 101.427C73.7265 101.922 73.7032 102.444 73.7985 102.95C73.8937 103.456 74.105 103.933 74.4157 104.344C74.7264 104.755 75.128 105.088 75.5891 105.317C76.0502 105.547 76.5583 105.666 77.0733 105.667H104.927C105.442 105.666 105.95 105.547 106.411 105.317C106.872 105.088 107.274 104.755 107.584 104.344C107.895 103.933 108.106 103.456 108.201 102.95C108.297 102.444 108.273 101.922 108.133 101.427L105.667 92.7033"
                    stroke="#424356" stroke-width="1.5" />
                <path
                    d="M89.3333 100.667H92.6666M94.3333 79L97.6666 82.3333L94.3333 85.6667M87.6666 79L84.3333 82.3333L87.6666 85.6667"
                    stroke="#424356" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <defs>
                    <filter id="filter0_d_335_6" x="0.299999" y="0.299999" width="200.4" height="200.4"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dx="10" dy="11" />
                        <feGaussianBlur stdDeviation="16.85" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix"
                            values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_335_6" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_335_6" result="shape" />
                    </filter>
                </defs>
            </svg>

        </div>
        <div style="position: absolute; left: 10px; top: 120px;z-index:-9999;"
            class="circle-mobile animate__animated animate__pulse animate__infinite">
            <svg width="88" height="118" viewBox="0 0 160 161" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_334_48)">
                    <ellipse cx="70" cy="69.5" rx="46" ry="46.5" fill="white"
                        fill-opacity="0.3" shape-rendering="crispEdges" />
                    <path
                        d="M115 69.5C115 94.6392 94.8427 115 70 115C45.1574 115 25 94.6392 25 69.5C25 44.3608 45.1574 24 70 24C94.8427 24 115 44.3608 115 69.5Z"
                        stroke="white" stroke-width="2" shape-rendering="crispEdges" />
                </g>
                <path
                    d="M61.2959 77.6021L67.6599 71.2381M75.6739 68.4081L73.7689 74.1231C73.7385 74.2147 73.6865 74.2976 73.6172 74.3648C73.5479 74.432 73.4634 74.4815 73.3709 74.5091L61.6929 77.9801C61.5877 78.0113 61.476 78.0131 61.3698 77.9853C61.2637 77.9574 61.1672 77.901 61.0909 77.8221C61.0146 77.7432 60.9614 77.6449 60.937 77.5379C60.9127 77.4308 60.9182 77.3192 60.9529 77.2151L64.7449 65.8411C64.7721 65.7594 64.8165 65.6846 64.8752 65.6216C64.9339 65.5586 65.0054 65.509 65.0849 65.4761L70.4719 63.2581C70.5815 63.2129 70.7019 63.2011 70.8181 63.2242C70.9343 63.2473 71.0411 63.3044 71.1249 63.3881L75.5289 67.7941C75.6077 67.8729 75.663 67.972 75.6887 68.0805C75.7143 68.1889 75.7092 68.3024 75.6739 68.4081Z"
                    stroke="#424356" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M75.792 68.056L78.62 65.227C78.9949 64.8519 79.2055 64.3433 79.2055 63.813C79.2055 63.2827 78.9949 62.774 78.62 62.399L76.5 60.277C76.3142 60.0912 76.0937 59.9438 75.851 59.8432C75.6083 59.7427 75.3482 59.6909 75.0855 59.6909C74.8228 59.6909 74.5626 59.7427 74.3199 59.8432C74.0772 59.9438 73.8567 60.0912 73.671 60.277L70.843 63.106M69.781 69.116C69.6416 68.9767 69.4762 68.8663 69.2942 68.7909C69.1122 68.7156 68.9171 68.6768 68.7201 68.6769C68.5231 68.6769 68.328 68.7158 68.1461 68.7912C67.9641 68.8666 67.7987 68.9772 67.6595 69.1165C67.5202 69.2558 67.4097 69.4212 67.3344 69.6032C67.259 69.7853 67.2203 69.9803 67.2203 70.1773C67.2204 70.3743 67.2592 70.5694 67.3347 70.7514C67.4101 70.9334 67.5206 71.0987 67.66 71.238C67.9414 71.5193 68.323 71.6772 68.7208 71.6771C69.1187 71.677 69.5002 71.5189 69.7815 71.2375C70.0627 70.9561 70.2207 70.5745 70.2206 70.1766C70.2205 69.7788 70.0624 69.3973 69.781 69.116Z"
                    stroke="#424356" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <defs>
                    <filter id="filter0_d_334_48" x="0.299999" y="0.299999" width="159.4" height="160.4"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dx="10" dy="11" />
                        <feGaussianBlur stdDeviation="16.85" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix"
                            values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_334_48" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_334_48" result="shape" />
                    </filter>
                </defs>
            </svg>

        </div>
        <div style="position: absolute; left: 40px; top: 230px;z-index:-9999;"
            class="circle-mobile animate__animated animate__pulse animate__infinite">
            <svg width="110" height="111" viewBox="0 0 161 161" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_334_50)">
                    <circle cx="70.5" cy="69.5" r="46.5" fill="white" fill-opacity="0.3"
                        shape-rendering="crispEdges" />
                    <circle cx="70.5" cy="69.5" r="45.5" stroke="white" stroke-width="2"
                        shape-rendering="crispEdges" />
                </g>
                <path
                    d="M78.084 65.25C78.8944 64.731 79.5148 63.9635 79.8524 63.0623C80.19 62.1612 80.2267 61.1749 79.9568 60.2512C79.687 59.3275 79.1252 58.5161 78.3555 57.9385C77.5859 57.3608 76.6498 57.048 75.6875 57.0469H67.25C66.2877 57.048 65.3516 57.3608 64.582 57.9385C63.8123 58.5161 63.2505 59.3275 62.9807 60.2512C62.7108 61.1749 62.7475 62.1612 63.0851 63.0623C63.4227 63.9635 64.0431 64.731 64.8535 65.25C64.2101 65.6619 63.6835 66.2324 63.3243 66.9066C62.9651 67.5808 62.7854 68.3361 62.8025 69.0999C62.8196 69.8636 63.0328 70.6101 63.4218 71.2676C63.8107 71.9252 64.3623 72.4715 65.0234 72.8543C64.3102 73.3211 63.7303 73.9652 63.3408 74.7235C62.9513 75.4817 62.7653 76.3282 62.8012 77.1799C62.8371 78.0316 63.0937 78.8594 63.5456 79.5821C63.9976 80.3049 64.6296 80.8979 65.3796 81.3031C66.1297 81.7082 66.9721 81.9116 67.8243 81.8933C68.6766 81.875 69.5095 81.6357 70.2415 81.1987C70.9735 80.7618 71.5794 80.1423 72 79.4007C72.4205 78.6592 72.6413 77.8212 72.6406 76.9687V72.2437C73.0912 72.6725 73.6266 73.0022 74.2124 73.2114C74.7981 73.4207 75.4212 73.5049 76.0415 73.4587C76.6618 73.4124 77.2655 73.2368 77.8137 72.943C78.362 72.6492 78.8426 72.2438 79.2246 71.753C79.6067 71.2621 79.8816 70.6967 80.0318 70.0931C80.182 69.4895 80.2041 68.8612 80.0966 68.2485C79.9892 67.6359 79.7546 67.0525 79.4079 66.5361C79.0613 66.0196 78.6103 65.5815 78.084 65.25ZM78.7344 61.5C78.7344 62.3081 78.4134 63.0831 77.842 63.6545C77.2706 64.2259 76.4956 64.5469 75.6875 64.5469H72.6406V58.4531H75.6875C76.4956 58.4531 77.2706 58.7741 77.842 59.3455C78.4134 59.9169 78.7344 60.6919 78.7344 61.5ZM64.2031 61.5C64.2031 60.6919 64.5241 59.9169 65.0955 59.3455C65.6669 58.7741 66.4419 58.4531 67.25 58.4531H71.2344V64.5469H67.25C66.4419 64.5469 65.6669 64.2259 65.0955 63.6545C64.5241 63.0831 64.2031 62.3081 64.2031 61.5ZM67.25 72.0469C66.4419 72.0469 65.6669 71.7259 65.0955 71.1545C64.5241 70.5831 64.2031 69.8081 64.2031 69C64.2031 68.1919 64.5241 67.4169 65.0955 66.8455C65.6669 66.2741 66.4419 65.9531 67.25 65.9531H71.2344V72.0469H67.25ZM71.2344 76.9687C71.2344 77.6641 71.0282 78.3438 70.6419 78.9219C70.2556 79.5001 69.7065 79.9507 69.0641 80.2168C68.4217 80.4829 67.7148 80.5525 67.0329 80.4168C66.3509 80.2812 65.7245 79.9463 65.2328 79.4547C64.7412 78.963 64.4063 78.3366 64.2707 77.6546C64.135 76.9726 64.2046 76.2658 64.4707 75.6234C64.7368 74.981 65.1874 74.4319 65.7656 74.0456C66.3437 73.6593 67.0234 73.4531 67.7187 73.4531H71.2344V76.9687ZM75.6875 72.0469C75.0849 72.0469 74.4958 71.8682 73.9947 71.5334C73.4937 71.1986 73.1032 70.7227 72.8726 70.166C72.6419 69.6092 72.5816 68.9966 72.6992 68.4056C72.8167 67.8145 73.1069 67.2716 73.533 66.8455C73.9591 66.4194 74.502 66.1292 75.0931 66.0117C75.6841 65.8941 76.2967 65.9544 76.8535 66.1851C77.4102 66.4157 77.8861 66.8062 78.2209 67.3072C78.5557 67.8083 78.7344 68.3974 78.7344 69C78.7344 69.8081 78.4134 70.5831 77.842 71.1545C77.2706 71.7259 76.4956 72.0469 75.6875 72.0469Z"
                    fill="#424356" />
                <defs>
                    <filter id="filter0_d_334_50" x="0.299999" y="0.299999" width="160.4" height="160.4"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dx="10" dy="11" />
                        <feGaussianBlur stdDeviation="16.85" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix"
                            values="0 0 0 0 0.43125 0 0 0 0 0.436979 0 0 0 0 0.5 0 0 0 0.12 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_334_50" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_334_50" result="shape" />
                    </filter>
                </defs>
            </svg>

        </div>

        <!-- Description Text -->
        <p
            class="px-2 mt-12 md:w-full lg:w-[945px] mt-10 w-full text-[#424356] text-center sm:text-[18px] text-[14px] font-medium leading-[36.54px] tracking-wide uppercase mb-8">
            {{ __('messages.company_description') }}
        </p>


        <!-- Button -->
        <button
            class="rounded-[20px] bg-[#4D63EB] text-white text-center  sm:text-[18px]  text-[14px] font-medium leading-[36.54px] sm:w-[321px] w-[90%] sm:py-2 py-1 shadow-md hover:bg-[#424356] hover:text-white transition-all duration-400 ease-in-out">

            {{ __('messages.button') }}

        </button>
    </section>
    <!-- end #sec1 hero -->

    <div class="max-w-screen-xl mx-auto mx-auto px-4 pb-8">



        @if($errors->any())
        <div id="alert-error" class="flex items-center fixed top-16 w-auto transform px-10 py-4 mb-4 text-red-800 rounded-lg bg-red-50 transition-opacity duration-500 ease-in-out opacity-0 z-[9999999]" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Error</span>
            <div class="ms-3 text-sm font-medium">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        </div>
        @endif
        
        @if(session('success'))
        <div id="alert-success" class="flex items-center fixed top-16 w-auto transform px-10 py-4 mb-4 text-green-800 rounded-lg bg-green-50  transition-opacity duration-500 ease-in-out opacity-0 z-[9999999]" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"></path>
                </svg>
                
                <div class="ms-3 text-md font-medium">
                    Message sent successfully!
                </div>
            </div>
        @endif


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
            <h2 class="ltr:text-left rtl:text-right text-[#424356] text-[19px] font-light leading-normal mb-4">
                {{ __('messages.portfolio') }}
            </h2>
<!-- Link to Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Link to Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Container for Swiper -->
<div class="swiper-container relative">
    <div class="swiper-wrapper relative">
        <!-- Slide 1 -->
        <div class="swiper-slide">
            <a href="">
                <div style="background-image: url('{{ asset('assets/images/Frame 2.png') }}');"
                    class="image-hover sm:w-[423px] sm:h-[403px] w-full h-[321px] flex-shrink-0 rounded-[20px] border-[2px] border-solid border-[rgba(255,255,255,0.5)] bg-lightgray bg-cover bg-no-repeat bg-center">
                    <div class="overlay">
                        <div class="flex flex-col justify-start sm:mb-10 sm:mr-5 mb-5 mx-5">
                            <span class="text-white rtl:text-right ltr:text-left font-alexandria text-lg font-medium leading-[203%]">
                                Party Wizard app
                            </span>
                            <div class="flex gap-3 mt-4">
                                <button class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px] font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                                    UI/UX Design
                                </button>
                                <button class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px] font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                                    Development
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <!-- Slide 2 -->
        <div class="swiper-slide">
            <a href="">
                <div style="background-image: url('{{ asset('assets/images/Frame 1.png') }}');"
                    class="image-hover sm:w-[423px] sm:h-[403px] w-full h-[321px] flex-shrink-0 rounded-[20px] border-[2px] border-solid border-[rgba(255,255,255,0.5)] bg-lightgray bg-cover bg-no-repeat bg-center">
                    <div class="overlay">
                        <div class="flex flex-col justify-start sm:mb-10 sm:mr-5 mb-5 mx-5">
                            <span class="text-white rtl:text-right ltr:text-left font-alexandria text-lg font-medium leading-[203%]">
                                Party Wizard app
                            </span>
                            <div class="flex gap-3 mt-4">
                                <button class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px] font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                                    UI/UX Design
                                </button>
                                <button class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px] font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                                    Development
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
            <a href="">
                <div style="background-image: url('{{ asset('assets/images/Frame 3.png') }}');"
                    class="image-hover sm:w-[423px] sm:h-[403px] w-full h-[321px] flex-shrink-0 rounded-[20px] border-[2px] border-solid border-[rgba(255,255,255,0.5)] bg-lightgray bg-cover bg-no-repeat bg-center">
                    <div class="overlay">
                        <div class="flex flex-col justify-start sm:mb-10 sm:mr-5 mb-5 mx-5">
                            <span class="text-white rtl:text-right ltr:text-left font-alexandria text-lg font-medium leading-[203%]">
                                Party Wizard app
                            </span>
                            <div class="flex gap-3 mt-4">
                                <button class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px] font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                                    UI/UX Design
                                </button>
                                <button class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px] font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                                    Development
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Slide 4 -->
        <div class="swiper-slide">
            <a href="">
                <div style="background-image: url('{{ asset('assets/images/Frame 4.png') }}');"
                    class="image-hover sm:w-[423px] sm:h-[403px] w-full h-[321px] flex-shrink-0 rounded-[20px] border-[2px] border-solid border-[rgba(255,255,255,0.5)] bg-lightgray bg-cover bg-no-repeat bg-center">
                    <div class="overlay">
                        <div class="flex flex-col justify-start sm:mb-10 sm:mr-5 mb-5 mx-5">
                            <span class="text-white rtl:text-right ltr:text-left font-alexandria text-lg font-medium leading-[203%]">
                                Party Wizard app
                            </span>
                            <div class="flex gap-3 mt-4">
                                <button class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px] font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                                    UI/UX Design
                                </button>
                                <button class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px] font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                                    Development
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Slide 5 -->
        <div class="swiper-slide">
            <a href="">
                <div style="background-image: url('{{ asset('assets/images/Frame 5.png') }}');"
                    class="image-hover sm:w-[423px] sm:h-[403px] w-full h-[321px] flex-shrink-0 rounded-[20px] border-[2px] border-solid border-[rgba(255,255,255,0.5)] bg-lightgray bg-cover bg-no-repeat bg-center">
                    <div class="overlay">
                        <div class="flex flex-col justify-start sm:mb-10 sm:mr-5 mb-5 mx-5">
                            <span class="text-white rtl:text-right ltr:text-left font-alexandria text-lg font-medium leading-[203%]">
                                Party Wizard app
                            </span>
                            <div class="flex gap-3 mt-4">
                                <button class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px] font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                                    UI/UX Design
                                </button>
                                <button class="sm:text-[16px] text-[14px] sm:w-[144px] w-[112px] sm:h-[47px] h-[37px] font-light flex-shrink-0 border rounded-[10px] border-gray-50 bg-white/5 backdrop-blur-[20px] text-white">
                                    Development
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination" style="
    bottom: -45px !important;!i;!;
"></div>
    <!-- Add Navigation -->
</div>

<script>
const swiper = new Swiper('.swiper-container', {
    slidesPerView: 1, // عدد الشرائح الافتراضي
    spaceBetween: 100,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1, 
        },
        800: {
            slidesPerView: 2, 
        },
        1024: {
            slidesPerView: 3, 
        },
    },
});


</script>


     
        </section>
        <!-- end #sec4 portfolio -->


        <!-- #sec5 start steps -->
        <section id="sec5" class="py-10 mt-5">
            <div class="mx-auto text-center">
                <!-- steps Heading -->
                <h6 class="text-[#424356] font-extrabold sm:text-[64px] text-[20px] mb-8 text-center">
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
    <section id="features" class="py-10 mt-14 px-3">
            <div class="text-right">
                <!-- steps Heading -->
                <h6 class="text-[35px] sm:text-[64px] font-extrabold text-[#424356] leading-[200%] mb-5  rtl:text-right ltr:text-left" ">
                                                {{ __('messages.features') }}
                                            </h6>
                                            <!-- Descriptive Text -->
                                            <p
                                                class=" rtl:text-right ltr:text-left text-responsive text-[#424356]
            sm:text-[18px] text-[14px] font-medium leading-[36.54px] w-[672px] ">
                                                {{ __('messages.seamless_functions') }}
                                            </p>
                                        </div>

                                        <!-- for desktop -->
                                        <div class=" items-fetures flex flex-col mt-36">
                <div class="flex items-center justify-between">
                    <div>
                        <p
                            class="text-[#424356] text-[36px] font-extrabold leading-[200%] mb-5 rtl:text-right ltr:text-left">
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
                        <p
                            class="text-[#424356] text-[36px] font-extrabold leading-[200%] mb-5 rtl:text-right ltr:text-left">
                            {{ __('messages.custom_design') }}
                        </p>
                    </div>
                </div>
        </div>
        <!-- for mobile -->
        <div class="items-fetures-mobile flex flex-col mt-20 ps-2">
            <div class="flex flex-col gap-3 child-items-features-mobile">
                <div>
                    <p
                        class="text-[#424356] sm:text-[25px] text-[20px] font-[900] leading-[200%] mb-5 rtl:text-right ltr:text-left">
                        {{ __('messages.ui_elements') }}
                    </p>
                </div>
                <div class="w-full h-[130px]">
                    <p
                        class="text-[#424356] sm:text-lg text-[14px] font-normal leading-[200%] mb-5 rtl:text-right ltr:text-left">
                        {{ __('messages.ui_elements_description') }}
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-3 child-items-features-mobile">
                <div>
                    <p
                        class="text-[#424356] sm:text-[25px] text-[20px] font-[900] leading-[200%] mb-5 rtl:text-right ltr:text-left">
                        {{ __('messages.custom_design') }}
                    </p>
                </div>
                <div class="w-full h-[130px]">
                    <p
                        class="text-[#424356] sm:text-lg text-[14px] font-normal leading-[200%] mb-5 rtl:text-right ltr:text-left">
                        {{ __('messages.custom_design_description') }}
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-3 child-items-features-mobile">
                <div>
                    <p
                        class="text-[#424356] sm:text-[25px] text-[20px] font-[900] leading-[200%] mb-5 rtl:text-right ltr:text-left">
                        {{ __('messages.responsive_design') }}
                    </p>
                </div>
                <div class="w-full h-[150px]">
                    <p
                        class="text-[#424356] sm:text-lg text-[14px] font-normal leading-[200%] mb-5 rtl:text-right ltr:text-left">
                        {{ __('messages.responsive_design_description') }}
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-3 child-items-features-mobile">
                <div>
                    <p
                        class="text-[#424356] sm:text-[25px] text-[20px] font-[900] leading-[200%] mb-5 rtl:text-right ltr:text-left">
                        {{ __('messages.free_updates') }}
                    </p>
                </div>
                <div class="w-full h-[130px]">
                    <p
                        class="text-[#424356] sm:text-lg text-[14px] font-normal leading-[200%] mb-5 rtl:text-right ltr:text-left">
                        {{ __('messages.free_updates_description') }}
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-7">
                <div>
                    <p
                        class="text-[#424356] sm:text-[25px] text-[20px] font-[900] leading-[200%] mb-4 rtl:text-right ltr:text-left">
                        {{ __('messages.clean_code') }}
                    </p>
                </div>
                <div class="w-full">
                    <p
                        class="text-[#424356] sm:text-lg text-[14px] font-normal leading-[200%] rtl:text-right ltr:text-left">
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
            <p
                class="text-[#424356] sm:text-[18px] sm:w-[617px] w-[100%] text-[14px] mx-auto font-medium leading-[36.54px] mb-8">
                {{ __('messages.contact_description') }}
            </p>

            <!-- Contact Form -->
            <form action="{{ route('contact.store') }}" method="POST" class="mt-8 space-y-6 sm:p-14 p-4"
                style="max-width: 1060px; height: auto; border-radius: 8px; background: #DEE0F9; margin: 0 auto; direction: rtl; box-shadow: 10px 11px 33.7px 0px rgba(110, 111, 128, 0.12);">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <span class="block rtl:text-right ltr:text-left mb-2 text-[16px] text-[#424356]">
                            <span class="text-red-500">*</span>
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
                            <span class="text-red-500">*</span>
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
                        <span class="text-red-500">*</span>
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
