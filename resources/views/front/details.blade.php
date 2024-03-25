@extends('front/layouts/app')
@section('title', 'Portfolio CMS Yuda Pratama')
@section('content')

<section id="Header" class="flex flex-col gap-[100px] bg-portto-black relative max-h-[665px] mb-[493px]">
    <nav class="container max-w-[1130px] mx-auto flex justify-between items-center pt-[30px] z-10">
        <a href="index.html" class="flex shrink-0 h-fit w-fit">
            <img src="{{ asset('images/logos/logo.svg') }}" alt="logo">
        </a>
        <div class="flex gap-[50px] items-center">
            <ul class="flex gap-[50px] items-center text-white">
                <li>
                    <a href="index.html"  class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Home</a>
                </li>
                <li>
                    <a href=""  class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Services</a>
                </li>
                <li>
                    <a href=""  class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Testimonials</a>
                </li>
                <li>
                    <a href=""  class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Pricing</a>
                </li>
                <li>
                    <a href=""  class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">About</a>
                </li>
            </ul>
            <button class="bg-portto-light-gold font-bold text-lg p-[14px_30px] rounded-full transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">Hire Me</button>
        </div>
    </nav>
    <div class="hero container max-w-[1130px] mx-auto flex flex-col justify-center items-center relative">
        <h1 class="font-extrabold text-[50px] leading-[70px] text-white text-center z-10">AI Finance Insurance</h1>
        <p class="text-xl leading-[30px] text-white z-10">Website Development</p>
        <div class="flex shrink-0 w-full h-[800px] rounded-[50px] overflow-hidden bg-white mt-[70px] z-10">
            <img src="{{ asset('images/thumbnails/details-thumbnail.png') }}" class="w-full h-full object-cover" alt="thumbnail">
        </div>
        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-[135px] w-[35%]" alt="background icon">
    </div>
</section>

<section id="Details" class="container max-w-[1130px] mx-auto pt-[50px]">
    <div class="flex gap-[50px] justify-between">
        <div class="flex flex-col gap-5">
            <h2 class="font-extrabold text-2xl">The First Purpose</h2>
            <div class="description flex flex-col gap-4 font-medium text-lg leading-[38px]">
                <p>FinanceAI is a cutting-edge mobile application revolutionizing personal finance management through artificial intelligence. This intuitive app is engineered to empower users with real-time financial insights and personalized.</p>
                <p>At the heart of FinanceAI lies a sophisticated AI engine that analyzes spending patterns, investment choices, and saving habits to offer tailored recommendations. Whether it's optimizing budgets, identifying investment opportunities, or potential savings, FinanceAI ensures users are always a step ahead in their financial.</p>
            </div>
            <div class="flex gap-4">
                <div class="flex items-center gap-1 bg-[#F4F5F8] p-[8px_10px] rounded-[12px]">
                    <div class="w-5 h-5 flex shrink-0">
                        <img src="{{ asset('images/icons/crown-black.svg') }}" alt="icon">
                    </div>
                    <p class="font-semibold">Startup</p>
                </div>
                <div class="flex items-center gap-1 bg-[#F4F5F8] p-[8px_10px] rounded-[12px]">
                    <div class="w-5 h-5 flex shrink-0">
                        <img src="{{ asset('images/icons/code-black.svg') }}" alt="icon">
                    </div>
                    <p class="font-semibold">Future AI</p>
                </div>
                <div class="flex items-center gap-1 bg-[#F4F5F8] p-[8px_10px] rounded-[12px]">
                    <div class="w-5 h-5 flex shrink-0">
                        <img src="{{ asset('images/icons/chart-2-black.svg') }}" alt="icon">
                    </div>
                    <p class="font-semibold">Finance</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-5">
            <h2 class="font-extrabold text-2xl">Software Used</h2>
            <div class="software-container flex flex-col shrink-0 gap-5 w-[325px]">
                <div class="card-software w-full flex items-center bg-[#F4F5F8] rounded-2xl p-5 gap-4 transition-all duration-300 hover:ring-2 hover:ring-portto-purple">
                    <div class="w-[70px] h-[70px] bg-white rounded-full flex shrink-0 items-center justify-center">
                        <img src="{{ asset('images/logos/react.svg') }}" alt="tool">
                    </div>
                    <div class="flex flex-col gap-[2px]">
                        <p class="tool-title font-bold text-xl leading-[30px]">React JS</p>
                        <p class="text-lg text-[#878C9C]">Web Framework</p>
                    </div>
                </div>
                <div class="card-software w-full flex items-center bg-[#F4F5F8] rounded-2xl p-5 gap-4 transition-all duration-300 hover:ring-2 hover:ring-portto-purple">
                    <div class="w-[70px] h-[70px] bg-white rounded-full flex shrink-0 items-center justify-center">
                        <img src="{{ asset('images/logos/blender.svg') }}" alt="tool">
                    </div>
                    <div class="flex flex-col gap-[2px]">
                        <p class="tool-title font-bold text-xl leading-[30px]">Blender 3D</p>
                        <p class="text-lg text-[#878C9C]">Product Modeling</p>
                    </div>
                </div>
                <div class="card-software w-full flex items-center bg-[#F4F5F8] rounded-2xl p-5 gap-4 transition-all duration-300 hover:ring-2 hover:ring-portto-purple">
                    <div class="w-[70px] h-[70px] bg-white rounded-full flex shrink-0 items-center justify-center">
                        <img src="{{ asset('images/logos/figma.svg') }}" alt="tool">
                    </div>
                    <div class="flex flex-col gap-[2px]">
                        <p class="tool-title font-bold text-xl leading-[30px]">Figma</p>
                        <p class="text-lg text-[#878C9C]">UI/UX Design</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Screenshots" class="container max-w-[1130px] mx-auto pt-[50px]">
    <div class="flex flex-col gap-5">
        <h2 class="font-extrabold text-2xl">Screenshots</h2>
        <div class="grid grid-cols-4 gap-5">
            <a href="{{ asset('images/thumbnails/thumbnail1.png') }}" class="group w-full h-[190px] flex overflow-hidden rounded-[30px] ring-1 ring-[#E4E5E8] transition-all duration-300 hover:ring-[3px] hover:ring-portto-purple relative" data-fancybox="gallery" data-caption="Screenshot #1">
                <img src="{{ asset('images/thumbnails/thumbnail1.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                <img src="{{ asset('images/icons/eye.svg') }}" class="absolute transition-all duration-300 opacity-0 group-hover:opacity-100  transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-10" alt="icon eye">
            </a>
            <a href="{{ asset('images/thumbnails/thumbnail2.png') }}" class="group w-full h-[190px] flex overflow-hidden rounded-[30px] ring-1 ring-[#E4E5E8] transition-all duration-300 hover:ring-[3px] hover:ring-portto-purple relative" data-fancybox="gallery" data-caption="Screenshot #1">
                <img src="{{ asset('images/thumbnails/thumbnail2.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                <img src="{{ asset('images/icons/eye.svg') }}" class="absolute transition-all duration-300 opacity-0 group-hover:opacity-100  transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-10" alt="icon eye">
            </a>
            <a href="{{ asset('images/thumbnails/thumbnail3.png') }}" class="group w-full h-[190px] flex overflow-hidden rounded-[30px] ring-1 ring-[#E4E5E8] transition-all duration-300 hover:ring-[3px] hover:ring-portto-purple relative" data-fancybox="gallery" data-caption="Screenshot #1">
                <img src="{{ asset('images/thumbnails/thumbnail3.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                <img src="{{ asset('images/icons/eye.svg') }}" class="absolute transition-all duration-300 opacity-0 group-hover:opacity-100  transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-10" alt="icon eye">
            </a>
            <a href="{{ asset('images/thumbnails/thumbnail1.png') }}" class="group w-full h-[190px] flex overflow-hidden rounded-[30px] ring-1 ring-[#E4E5E8] transition-all duration-300 hover:ring-[3px] hover:ring-portto-purple relative" data-fancybox="gallery" data-caption="Screenshot #1">
                <img src="{{ asset('images/thumbnails/thumbnail1.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                <img src="{{ asset('images/icons/eye.svg') }}" class="absolute transition-all duration-300 opacity-0 group-hover:opacity-100  transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-10" alt="icon eye">
            </a>
        </div>
    </div>
</section>

<section id="Featured-testimonial" class="container max-w-[1130px] mx-auto">
    <div class="flex gap-[100px] items-center px-[65px] pt-[100px]">
        <div class="flex flex-col gap-5 relative">
            <div class="flex w-[200px] h-[250px] rounded-[30px] shrink-0 overflow-hidden z-10">
                <img src="{{ asset('images/photo/photo5.png') }}" alt="photo">
            </div>
            <div class="flex flex-col gap-[6px] text-center">
                <p class="font-bold text-2xl">Shirley Pop</p>
                <p class="text-xl text-[#878C9C]">Founder Bwalajar</p>
            </div>
            <img src="{{ asset('images/icons/quote.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-[21px] top-[14px]" alt="icon">
        </div>
        <div class="flex flex-col gap-[50px]">
            <div class="flex shrink-0">
                <img src="{{ asset('images/logos/logo-testi5.svg') }}" alt="logo">
            </div>
            <p class="font-semibold text-[32px] leading-[60px]">She helped us to build our first prototype to win our investor and early users heart that generate huge attraction. Will hire her back again anytime soon.</p>
            <div class="flex h-8 w-fit shrink-0">
                <img src="{{ asset('images/icons/Star.svg') }}" class="w-full h-full" alt="star">
                <img src="{{ asset('images/icons/Star.svg') }}" class="w-full h-full" alt="star">
                <img src="{{ asset('images/icons/Star.svg') }}" class="w-full h-full" alt="star">
                <img src="{{ asset('images/icons/Star.svg') }}" class="w-full h-full" alt="star">
                <img src="{{ asset('images/icons/Star.svg') }}" class="w-full h-full" alt="star">
            </div>
        </div>
    </div>
</section>

<section id="Book"  class="container max-w-[1130px] mx-auto">
    <div class="bg-portto-black flex justify-between px-[50px] rounded-[50px] h-[476px] mt-[100px] bg-[url('{{ asset('images/Ellipse.svg') }}')] bg-center bg-no-repeat bg-contain bg-[length:400px_400px] relative">
        <div class="group/projects w-[220px] overflow-hidden">    
            <div class="slider flex flex-col h-max justify-center">
                <div class="project-container animate-[slideToT_30s_linear_infinite] group-hover/projects:pause-animate flex flex-col gap-[30px] pt-[30px] justify-center">
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('images/thumbnails/thumbnail1.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('images/thumbnails/thumbnail2.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('images/thumbnails/thumbnail3.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider flex flex-col h-max justify-center">
                <div class="project-container animate-[slideToT_30s_linear_infinite] group-hover/projects:pause-animate flex flex-col gap-[30px] pt-[30px] justify-center">
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('images/thumbnails/thumbnail1.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('images/thumbnails/thumbnail2.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('images/thumbnails/thumbnail3.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-5 items-center justify-center text-center w-fit">
            <h2 class="font-extrabold text-[40px] leading-[60px] text-white">Let Me Help You <br>Grow Business Today</h2>
            <p class="font-semibold text-lg leading-[32px] text-white">I will dedicate my entire career to focus <br>on finishing your future dreams</p>
            <a href="book.html" class="bg-portto-light-gold font-bold text-lg p-[14px_30px] rounded-full transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">Book a Meeting</a>
        </div>
        <div class="group/projects w-[220px] overflow-hidden">    
            <div class="slider flex flex-col h-max justify-center">
                <div class="project-container animate-[slideToB_30s_linear_infinite] group-hover/projects:pause-animate flex flex-col gap-[30px] pt-[30px] justify-center">
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('images/thumbnails/thumbnail1.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('images/thumbnails/thumbnail2.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('images/thumbnails/thumbnail3.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider flex flex-col h-max justify-center">
                <div class="project-container animate-[slideToB_30s_linear_infinite] group-hover/projects:pause-animate flex flex-col gap-[30px] pt-[30px] justify-center">
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('images/thumbnails/thumbnail1.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('images/thumbnails/thumbnail2.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('images/thumbnails/thumbnail3.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="FAQ" class="container max-w-[1130px] mx-auto">
    <div class="flex gap-[70px] items-center pt-[100px] pb-[150px]">
        <div class="flex flex-col gap-[30px]">
            <div class="w-20 h-20 flex shrink-0 rounded-full bg-portto-purple items-center justify-center">
                <img src="{{ asset('images/icons/messages.svg') }}" alt="icon">
            </div>
            <div class="flex flex-col gap-[10px]">
                <h2 class="font-extrabold text-[50px] leading-[70px]">Frequently Asked Questions</h2>
                <p class="text-lg text-[#878C9C]">If you have any question please contact me.</p>
            </div>
            <a href="" class="bg-portto-black font-bold text-lg text-white rounded-full p-[14px_30px] w-fit transition-all duration-300 hover:bg-white hover:text-portto-black hover:ring hover:ring-portto-black">Contact Me</a>
        </div>
        <div class="flex flex-col gap-[30px] w-[603px] shrink-0">
            <div class="flex flex-col p-5 rounded-2xl bg-[#F4F5F8] w-full">
                <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-1">
                    <span class="font-bold text-2xl">How do I work usually?</span>
                    <div class="arrow w-9 h-9 flex shrink-0">
                        <img src="{{ asset('images/icons/arrow-circle-down.svg') }}" class="transition-all duration-300" alt="icon">
                    </div>
                </button>
                <div id="accordion-faq-1" class="accordion-content hide">
                    <p class="text-[20px] leading-[36px] pt-5">As a freelancer, my work process is characterized by flexibility, self-discipline, and a strong emphasis on client communication.</p>
                </div>
            </div>
            <div class="flex flex-col p-5 rounded-2xl bg-[#F4F5F8] w-full">
                <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-2">
                    <span class="font-bold text-2xl">How much I charge per project?</span>
                    <div class="arrow w-9 h-9 flex shrink-0">
                        <img src="{{ asset('images/icons/arrow-circle-down.svg') }}" class="transition-all duration-300" alt="icon">
                    </div>
                </button>
                <div id="accordion-faq-2" class="accordion-content hide">
                    <p class="text-[20px] leading-[36px] pt-5">I don’t charge hourly. I charge based on the project brief and given timeline to finish that particular project.</p>
                </div>
            </div>
            <div class="flex flex-col p-5 rounded-2xl bg-[#F4F5F8] w-full">
                <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-3">
                    <span class="font-bold text-2xl">Can I work full-time?</span>
                    <div class="arrow w-9 h-9 flex shrink-0">
                        <img src="{{ asset('images/icons/arrow-circle-down.svg') }}" class="transition-all duration-300" alt="icon">
                    </div>
                </button>
                <div id="accordion-faq-3" class="accordion-content hide">
                    <p class="text-[20px] leading-[36px] pt-5">I don’t work full-time. At this moment, I prefer to work remotely and based on the certain project only.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-portto-black text-white pb-[50px] border-t-[10px] border-portto-purple">
    <div class="container max-w-[1130px] mx-auto flex justify-between pt-[100px] pb-[50px] mb-[50px] relative border-b border-[#585867]">
        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute h-[300px] top-[70px] -left-[20px] z-0" alt="icon">
        <div class="flex shrink-0 h-fit z-10">
            <img src="{{ asset('images/logos/logo.svg') }}" alt="logo">
        </div>
        <div class="flex gap-[100px] z-10">
            <div class="flex flex-col gap-5">
                <p class="font-bold text-lg">Explore</p>
                <a href="" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Services</a>
                <a href="" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Testimonials</a>
                <a href="" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Pricing</a>
                <a href="" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">About</a>
            </div>
            <div class="flex flex-col gap-5">
                <p class="font-bold text-lg">Services</p>
                <a href="" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">UI/UX Design</a>
                <a href="" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Web Development</a>
                <a href="" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Data Science</a>
                <a href="" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Digital Marketing</a>
            </div>
            <div class="flex flex-col gap-5">
                <p class="font-bold text-lg">About</p>
                <a href="" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">My Profile</a>
                <a href="" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">How do I work</a>
                <a href="" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Achievements</a>
                <a href="" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Team A</a>
            </div>
            <div class="flex flex-col gap-5">
                <p class="font-bold text-lg">Connect</p>
                <a href="" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300 flex items-center gap-[6px]"><img src="{{ asset('images/icons/call.svg') }}" alt="icon">081547293418</a>
                <a href="" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300 flex items-center gap-[6px]"><img src="{{ asset('images/icons/dribbble.svg') }}" alt="icon">yudaap</a>
                <a href="" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300 flex items-center gap-[6px]"><img src="{{ asset('images/icons/sms.svg') }}" alt="icon">yudaapro27@gmail.com</a>
            </div>
        </div>
    </div>
    <p class="text-sm text-[#A0A0AC] text-center">All Rights Reserved. Copyright  Yuda Pratama 2024.</p>
</footer>


@push('after-style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
@endpush

@push('after-script')
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });
</script>
@endpush
@endsection
