@extends('front/layouts/app')
@section('title', 'Portfolio CMS Yuda Pratama')
@section('content')

<section id="Header" class="flex flex-col gap-[100px] bg-portto-black relative">
    <nav class="container max-w-[1130px] mx-auto flex justify-between items-center pt-[30px] z-10">
        <a href="index.html" class="w-[161px] flex shrink-0 h-fit w-fit">
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
    <div class="hero container max-w-[1130px] mx-auto flex justify-between items-center relative">
        <div class="flex flex-col gap-[50px] h-fit w-fit text-white z-10">
            <p class="font-semibold text-2xl">I’m Shayna 👋</p>
            <h1 class="font-extrabold text-[80px] leading-[90px]">Professional Designer & Dev</h1>
            <button class="font-bold text-[26px] leading-[39px] rounded-[30px] p-[30px_40px] bg-portto-purple w-fit transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5]">Explore Now</button>
        </div>
        <div class="flex max-w-[471px] max-h-[567px] z-10">
            <img src="{{ asset('images/hero-image.png') }}" class="w-full h-full object-contain" alt="hero image">
        </div>
        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2" alt="background icon">
    </div>
    <div class="company-logos w-full overflow-hidden pb-[190px]">
        <div class="group/slider flex flex-nowrap w-max items-center">
            <div class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate  flex gap-[70px] pl-[70px] items-center flex-nowrap">
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum1.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum2.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum3.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum4.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum1.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum2.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum3.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum4.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
            </div>
            <div class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate  flex gap-[70px] pl-[70px] items-center flex-nowrap ">
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum1.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum2.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum3.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum4.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum1.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum2.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum3.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{ asset('images/logos/logoipsum4.png') }}" class="w-full h-full object-contain" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <div class="stats container max-w-[1130px] mx-auto bg-gradient-to-r from-[#FFEDD3] to-[#FFCD83] flex justify-between items-center px-[100px] rounded-[30px] w-full h-[180px] absolute transform -translate-x-1/2 translate-y-1/2 bottom-0 left-1/2">
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">$230M</p>
            <p class="font-semibold text-lg">Valuation</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">31,934</p>
            <p class="font-semibold text-lg">Projects</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">245</p>
            <p class="font-semibold text-lg">Startups IPO</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">9/10</p>
            <p class="font-semibold text-lg">Successful</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">562</p>
            <p class="font-semibold text-lg">Companies</p>
        </div>
    </div>
</section>

<section id="Services" class="container max-w-[1130px] mx-auto pt-[190px] pb-[100px]">
    <div class="flex flex-col gap-[50px]">
        <div class="flex justify-between items-center">
            <h2 class="font-extrabold text-[50px] leading-[70px]">Actually, I Do Design <br>& Code for Living</h2>
            <a href="" class="font-bold text-lg bg-portto-black rounded-full w-fit h-fit p-[14px_30px] text-white transition-all duration-300 hover:bg-white hover:text-portto-black hover:ring hover:ring-portto-black">All Services</a>
        </div>
        <div class="grid grid-cols-2 gap-[30px]">
            <div class="p-[50px] pb-0 rounded-[30px] flex flex-col gap-[50px] bg-[#F4F5F8]">
                <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-purple">
                    <img src="{{ asset('images/icons/crown.svg') }}" class="w-10 h-10 object-contain" alt="icon">
                </div>
                <div class="flex flex-col gap-5">
                    <p class="font-extrabold text-[32px] leading-[48px]">High-Quality Mobile App UI/UX Design</p>
                    <p class="text-lg leading-[34px]">Delivering great experience to users so that they are comfortable while using your product.</p>
                </div>
                <div class="w-full h-[350px]">
                    <img src="{{ asset('images/services1.png') }}" class="w-full object-contain" alt="image">
                </div>
            </div>
            <div class="p-[50px] pb-0 rounded-[30px] flex flex-col gap-[50px] bg-[#F4F5F8]">
                <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-green">
                    <img src="{{ asset('images/icons/code.svg') }}" class="w-10 h-10 object-contain" alt="icon">
                </div>
                <div class="flex flex-col gap-5">
                    <p class="font-extrabold text-[32px] leading-[48px]">AI Business Dashboard Finance Company</p>
                    <p class="text-lg leading-[34px]">Delivering great experience to users so that they are comfortable while using product.</p>
                </div>
                <div class="w-full h-[350px]">
                    <img src="{{ asset('images/services2.png') }}" class="w-full object-contain" alt="image">
                </div>
            </div>
            <div class="col-span-2 p-[50px] pb-0 rounded-[30px] flex gap-[50px] bg-[#F4F5F8]">
                <div class="flex flex-col gap-[50px]">
                    <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-red">
                        <img src="{{ asset('images/icons/3dcube.svg') }}" class="w-10 h-10 object-contain" alt="icon">
                    </div>
                    <div class="flex flex-col gap-5">
                        <p class="font-extrabold text-[32px] leading-[48px]">Robust Plugins Connected Machine Learning</p>
                        <p class="text-lg leading-[34px]">Delivering great experience to users so that they are comfortable while using your product to grow.</p>
                    </div>
                </div>
                <div class="w-[450px] h-[350px] flex shrink-0">
                    <img src="{{ asset('images/services3.png') }}" class="w-full object-contain" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Projects" class=" w-full flex flex-col py-[100px] bg-[url('{{ ('images/background/background1.png') }}')] bg-cover bg-center bg-no-repeat">
    <div class="flex flex-col gap-[10px] mb-[50px]">
        <h2 class="font-extrabold text-[50px] leading-[70px] text-center text-white">Great Projects</h2>
        <p class="text-lg text-center text-white">Working with awesome team from around the world</p>
    </div>
    <div class="projects w-full flex flex-col mb-[30px] overflow-hidden">    
        <div class="group/slider slider flex flex-nowrap w-max items-center">
            <div class="project-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap">
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="{{ asset('images/thumbnails/thumbnail1.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Website Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="{{ asset('images/thumbnails/thumbnail2.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Website Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="{{ asset('images/thumbnails/thumbnail3.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Website Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
            </div>
            <div class="project-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap ">
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="{{ asset('images/thumbnails/thumbnail1.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Website Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="{{ asset('images/thumbnails/thumbnail2.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Website Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="{{ asset('images/thumbnails/thumbnail3.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Website Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="projects w-full flex flex-col overflow-hidden">    
        <div class="group/slider slider flex flex-nowrap w-max items-center">
            <div class="project-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap">
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="{{ asset('images/thumbnails/thumbnail1.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Website Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="{{ asset('images/thumbnails/thumbnail2.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Website Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="{{ asset('images/thumbnails/thumbnail3.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Website Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
            </div>
            <div class="project-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap ">
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="{{ asset('images/thumbnails/thumbnail1.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Website Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="{{ asset('images/thumbnails/thumbnail2.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Website Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="{{ asset('images/thumbnails/thumbnail3.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Website Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Workflow" class="container max-w-[1130px] mx-auto pt-[100px] pb-[200px] relative">
    <div class="flex flex-col gap-[50px] justify-center">
        <h2 class="font-extrabold text-[50px] leading-[70px] text-center">My Workflow Suitable <br>For Any Project</h2>
        <div class="flex justify-between items-center">
            <div class="w-[350px] flex flex-col shrink-0 gap-[30px] items-center">
                <div class="flex-none">
                    <img src="{{ asset('images/icons/messages-notif.svg') }}" alt="icon">
                </div>
                <div class="flex flex-col gap-[10px] text-center">
                    <p class="font-extrabold text-[22px] leading-[33px]">Research & Validate</p>
                    <p class="text-lg leading-[34px]">Ensuring all requirements were matching with market conditions</p>
                </div>
            </div>
            <div class="w-[350px] flex flex-col shrink-0 gap-[30px] items-center">
                <div class="flex-none">
                    <img src="{{ asset('images/icons/programming-notif.svg') }}" alt="icon">
                </div>
                <div class="flex flex-col gap-[10px] text-center">
                    <p class="font-extrabold text-[22px] leading-[33px]">Building with Teams</p>
                    <p class="text-lg leading-[34px]">Working with agile framework to product a better results</p>
                </div>
            </div>
            <div class="w-[350px] flex flex-col shrink-0 gap-[30px] items-center">
                <div class="flex-none">
                    <img src="{{ asset('images/icons/like-notif.svg') }}" alt="icon">
                </div>
                <div class="flex flex-col gap-[10px] text-center">
                    <p class="font-extrabold text-[22px] leading-[33px]">Deliver to Clients</p>
                    <p class="text-lg leading-[34px]">We bring an instant results to the clients so that they are happys</p>
                </div>
            </div>
        </div>
    </div>
    <div class="stats container max-w-[1130px] mx-auto bg-gradient-to-r from-[#FFEDD3] to-[#FFCD83] flex justify-between items-center px-[100px] rounded-[30px] w-full h-[180px] absolute transform -translate-x-1/2 translate-y-1/2 bottom-0 left-1/2">
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">$230M</p>
            <p class="font-semibold text-lg">Valuation</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">31,934</p>
            <p class="font-semibold text-lg">Projects</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">245</p>
            <p class="font-semibold text-lg">Startups IPO</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">9/10</p>
            <p class="font-semibold text-lg">Successful</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">562</p>
            <p class="font-semibold text-lg">Companies</p>
        </div>
    </div>
</section>

<section id="Testimonials" class="bg-[#F4F5F8]">
    <div class="container max-w-[1130px] mx-auto pt-[180px] pb-[100px]">
        <h2 class="font-extrabold text-[50px] leading-[70px] text-center">I Have Delivered Success <br>For All My Clients</h2>
        <div class="grid grid-cols-2 gap-[30px] mt-[50px]">
            <div class="card-testi bg-white rounded-[30px] flex flex-col p-5 gap-5">
                <div class="h-[40px] flex shrink-0">
                    <img src="{{ asset('images/logos/logo-testi.svg') }}" alt="logo">
                </div>
                <p class="font-semibold text-[22px] leading-[40px]">“Her working method were truly different from other freelancers, she has this kind of mindset that can create user-center product and user loved it”</p>
                <div class="flex h-8">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-[70px] h-[70px] shrink-0">
                        <img src="{{ asset('images/photo/photo.png') }}" alt="photo">
                    </div>
                    <div class="flex flex-col gap-[2px]">
                        <p class="font-bold text-xl leading-[30px]">Jessi Lyio</p>
                        <p class="text-lg text-[#878C9C]">CPO Agolia Modd</p>
                    </div>
                </div>
            </div>
            <div class="card-testi bg-white rounded-[30px] flex flex-col p-5 gap-5">
                <div class="h-[40px] flex shrink-0">
                    <img src="{{ asset('images/logos/logo-testi2.svg') }}" alt="logo">
                </div>
                <p class="font-semibold text-[22px] leading-[40px]">“She helped us to build our first prototype to win our investor and early users heart that generate huge attraction. Will hire her back again anytime soon”</p>
                <div class="flex h-8">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-[70px] h-[70px] shrink-0">
                        <img src="{{ asset('images/photo/photo2.png') }}" alt="photo">
                    </div>
                    <div class="flex flex-col gap-[2px]">
                        <p class="font-bold text-xl leading-[30px]">Mariam Sya</p>
                        <p class="text-lg text-[#878C9C]">Founder TinderJobs</p>
                    </div>
                </div>
            </div>
            <div class="card-testi bg-white rounded-[30px] flex flex-col p-5 gap-5">
                <div class="h-[40px] flex shrink-0">
                    <img src="{{ ('images/logos/logo-testi3.svg') }}" alt="logo">
                </div>
                <p class="font-semibold text-[22px] leading-[40px]">“She helped us to build our first prototype to win our investor and early users heart that generate huge attraction. Will hire her back again anytime soon”</p>
                <div class="flex h-8">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-[70px] h-[70px] shrink-0">
                        <img src="{{ asset('images/photo/photo3.png') }}" alt="photo">
                    </div>
                    <div class="flex flex-col gap-[2px]">
                        <p class="font-bold text-xl leading-[30px]">John Ceyna</p>
                        <p class="text-lg text-[#878C9C]">Investor at Wokiya</p>
                    </div>
                </div>
            </div>
            <div class="card-testi bg-white rounded-[30px] flex flex-col p-5 gap-5">
                <div class="h-[40px] flex shrink-0">
                    <img src="{{ asset('images/logos/logo-testi4.svg') }}" alt="logo">
                </div>
                <p class="font-semibold text-[22px] leading-[40px]">“Her working method were truly different from other freelancers, she has this kind of mindset that can create user-center product and user loved it”</p>
                <div class="flex h-8">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                    <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-[70px] h-[70px] shrink-0">
                        <img src="{{ asset('images/photo/photo.png') }}" alt="photo">
                    </div>
                    <div class="flex flex-col gap-[2px]">
                        <p class="font-bold text-xl leading-[30px]">Yein Balli</p>
                        <p class="text-lg text-[#878C9C]">CMO Waniwani</p>
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
    <p class="text-sm text-[#A0A0AC] text-center">All Rights Reserved. Copyright Yuda Pratama 2024.</p>
</footer>

@push('after-script')
<script src="{{ asset('js/main.js') }}"></script>
@endpush
@endsection
