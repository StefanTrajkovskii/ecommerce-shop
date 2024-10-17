<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My E-commerce Store</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-gilroy-bold">
    <div class="bg-cover h-[1200px]" style="background-image: url('https://utfs.io/f/MYoGxdDQ4S6I82dew0DDI09M7pJ4W5fSAqBCXLgvynbQFOmz');">
        <div class="absolute inset-0 bottom-0 bg-gradient-to-t  to-transparent opacity-50 h-[20%]"></div>
    </div>

    <div id="menu" class="flex absolute top-0 text-white items-center w-[99%]">
        <h1 class=" text-[28px] text-left capitalize text-white w-[20%] justify-center items-center pl-[100px] mt-[30px] font-bold">Panto</h1>

        <div class="w-[478px] h-[22px]">
            <div class="flex justify-center items-center absolute left-[493px] top-[41px] gap-2">
              <a class="flex-grow-0 flex-shrink-0 text-lg text-left text-white hover:cursor-pointer">Furniture</a>
              <svg
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="flex-grow-0 flex-shrink-0 w-[18px] h-[18px] relative"
                preserveAspectRatio="xMidYMid meet"
              >
                <path
                  d="M4.00005 7.49554C3.99969 7.62361 4.02324 7.75016 4.06897 7.86588C4.1147 7.98159 4.18145 8.08354 4.26431 8.16423L8.54962 12.305C8.67742 12.4311 8.83772 12.5 9.00315 12.5C9.16858 12.5 9.32888 12.4311 9.45668 12.305L13.742 8.01849C13.8878 7.87297 13.9796 7.66387 13.997 7.43718C14.0144 7.21048 13.9561 6.98477 13.8348 6.8097C13.7136 6.63463 13.5394 6.52453 13.3505 6.50363C13.1617 6.48273 12.9736 6.55274 12.8278 6.69825L8.99958 10.5304L5.17137 6.82685C5.06653 6.72201 4.93887 6.65542 4.80349 6.63495C4.66811 6.61448 4.53068 6.64098 4.40746 6.71133C4.28424 6.78167 4.18038 6.89292 4.10818 7.03189C4.03598 7.17087 3.99846 7.33177 4.00005 7.49554Z"
                  fill="white"
                  style="fill:white;fill-opacity:1;"
                ></path>
              </svg>
            </div>
            <a class="absolute left-[657px] top-[41px] text-lg text-left text-white hover:cursor-pointer">Shop</a>
            <a class="absolute left-[762px] top-[41px] text-lg text-left text-white hover:cursor-pointer">About Us</a>
            <a class="absolute left-[902px] top-[41px] text-lg text-left text-white hover:cursor-pointer">Contact</a>
        </div>

        <div class="ml-auto pr-[70px] pt-[20px] relative"> <!-- Added relative to position the second SVG above -->
            <!-- First SVG (Bag Icon) -->
            <svg
                width="39"
                height="39"
                viewBox="0 0 39 39"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-[39px] h-[39px] relative hover:cursor-pointer"
                preserveAspectRatio="xMidYMid meet"
            >
                <path
                    d="M19.508 3.249C23.654 3.249 27.177 6.619 27.316 11.045H27.269C27.276 11.207 27.249 11.367 27.23 11.521H27.456C29.422 11.521 31.484 12.700 32.307 15.421L32.392 15.883L33.730 25.28C34.482 31.271 30.898 33.975 26.1 34.164L25.725 34.167H12.937C8.052 34.167 4.236 32.071 5.074 25.742L5.126 25.28L6.417 15.883C6.797 12.88 8.695 11.672 10.497 11.597L10.772 11.521H10.917C10.895 11.398 10.895 11.265 10.917 11.045C11.056 6.619 14.579 3.249 19.508 3.249ZM14.365 16.078C13.469 16.078 12.753 16.797 12.753 17.564C12.753 18.331 13.469 19.049 14.365 19.049C15.261 19.049 15.978 18.331 15.978 17.564L15.966 17.208C15.87 16.694 15.129 16.078 14.365 16.078ZM23.973 16.078C23.077 16.078 22.361 16.797 22.361 17.564C22.361 18.331 23.077 19.049 23.973 19.049C24.869 19.049 25.586 18.331 25.586 17.564C25.586 16.797 24.869 16.078 23.973 16.078ZM19.444 5.502C16.092 5.502 13.518 8.059 13.518 11.045C13.542 11.265 13.542 11.398 13.518 11.521H24.388C24.341 11.316 24.314 11.107 24.312 11.045C24.312 8.059 21.739 5.502 19.444 5.502Z"
                    fill="white"
                    style="fill:white;fill-opacity:1;"
                ></path>
            </svg>

            <!-- Second SVG (Ellipse) positioned above the first one and slightly to the right -->
            <svg
                width="20"
                height="26"
                viewBox="0 0 20 26"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-[25.24px] absolute ml-[20px] -mt-[50px]"
                preserveAspectRatio="none"
            >
                <ellipse
                    cx="10"
                    cy="12.799"
                    rx="10"
                    ry="12.622"
                    fill="#E58411"
                    style="fill:#E58411;fill:color(display-p3 0.8980 0.5176 0.0667);fill-opacity:1;"
                ></ellipse>
                <path
                    d="M9.86971 19.3758C12.2795 19.3758 13.7347 17.0606 13.7394 13.0741C13.744 9.11703 12.2701 6.84912 9.86971 6.84912C7.46462 6.84912 6.00472 9.11113 6.00004 13.0741C5.99069 17.0488 7.45526 19.3699 9.86971 19.3758ZM9.86971 17.2555C8.7701 17.2555 8.05887 15.8617 8.06355 13.0741C8.06823 10.3278 8.77478 8.94576 9.86971 8.94576C10.9599 8.94576 11.6712 10.3278 11.6712 13.0741C11.6759 15.8617 10.9646 17.2555 9.86971 17.2555Z"
                    fill="white"
                    style="fill:white;fill-opacity:1;"
                ></path>
            </svg>
        </div>

    </div>

    <div id="hero-section" class="absolute top-0 w-[100%] items-center pt-[100px]">
        <p class="text-[80px] text-center capitalize text-white font-bold mt-5">
            <span class="text-[80px] text-center capitalize text-white">Make your interior more</span><br />
            <span class="text-[80px] text-center capitalize text-white">minimalistic &#x26; modern</span>
        </p>

        <div class="flex justify-center mt-6">
            <p class="w-[606px] opacity-80 text-2xl text-center text-white">
                Turn your room with panto into a lot more minimalist and modern with ease and speed
            </p>
        </div>

        <!-- Centering the search bar -->
        <div class="flex justify-center mt-16">
            <div
                class="flex justify-between items-center w-[344px] relative pl-5 pr-2 py-2 rounded-[42px] bg-white/[0.15] border-[0.86px] border-white/60 backdrop-blur"
            >
            <input
            class="flex-grow-0 flex-shrink-0 w-[200px] h-[25px] opacity-80 text-lg text-center placeholder-white text-white bg-transparent border-none focus:outline-none"
            placeholder="Search furniture"/>

                <div
                    class="flex justify-start items-start flex-grow-0 flex-shrink-0 relative gap-2.5 p-[11px] rounded-3xl bg-[#e58411]"
                >
                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="flex-grow-0 flex-shrink-0 w-[18px] h-[18px] relative"
                        preserveAspectRatio="xMidYMid meet"
                    >
                        <path
                            d="M15.75 15.75L12.3855 12.3795M14.25 7.875C14.25 9.56576 13.5784 11.1873 12.3828 12.3828C11.1873 13.5784 9.56576 14.25 7.875 14.25C6.18424 14.25 4.56274 13.5784 3.36719 12.3828C2.17165 11.1873 1.5 9.56576 1.5 7.875C1.5 6.18424 2.17165 4.56274 3.36719 3.36719C4.56274 2.17165 6.18424 1.5 7.875 1.5C9.56576 1.5 11.1873 2.17165 12.3828 3.36719C13.5784 4.56274 14.25 6.18424 14.25 7.875Z"
                            stroke="white"
                            style="stroke:white;stroke-opacity:1;"
                            stroke-width="2"
                            stroke-linecap="round"
                        ></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
