<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/app.js"></script>  

    <title> laravel101 </title>
    <link rel="stylesheet" href="/app.css">
</head>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2fTAzJzrjVo3zWIlC+YR1M52JdPtJq2e1" crossorigin="anonymous">

<body class="font-bold antialiased capitalize" style="font-family:Abel">

<section class="px-6 py-4 ">
    <nav class="flex justify-between items-center text-dark">
        <div>
            <a href="/">
                <img src="./images/logo.svg" alt="logo">
                <i class="fa-brands fa-github"></i>
             </a>
        </div>

        <div class="text-dark">
            <a href="/" class="bg-blue-500 p-2 ml-2 rounded-full text-xs font-semibold uppercase">laravel</a>
            <a href="/customers" class="text-xs p-2 ml-1">customers</a>
            <a href="/customers/create" class="text-xs p-2 ml-1">create</a>
        </div>
    </nav>
</section>

    <header class="max-4xl mx-auto mt-10 text-center bg-blue-500 text-black">
        <div class="max-w-lg mx-auto">
            <div class="max-w-md mx-auto">
                <h1 class="text-3xl"> lazima <span class="text-black-500"> Iwork </span></h1>
                <h2 class="inline-flex mt-2" style="display:inline-flex ;justify-content: center;"> by hamez <img class="sm" src="./images/lary-head.svg" alt=""> </h2>
                <p class="mt-2">on the road to riches </p>
            </div>
            <div class="tw-flex tw-justify-center mt-2">
                <span class="bg-green-300 m-2 inline-block rounded"> <span class="p-2">category:</span> 
                     <select name="" id="" class="p-2 appearance-none bg-transparent">
                        <option value="personal">personal</option>
                        <option value="personal" disabled selected>personal</option>
                        <option value="business">bussiness</option>
                    </select>
                <span class="p-2">other features</span>
                </span>
                <span class="bg-green-500 p-2">search</span>
            </div>
        </div>
    </header>

@yield('content')

</div>
 
<footer class="pt-2  text-black">
        <div class="relative isolate overflow-hidden bg-blue-500 text-black py-16 sm:py-24 lg:py-32">
        <div class="mx-auto max-w-7xl px-3 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-4 gap-y-8 lg:max-w-none lg:grid-cols-2">
            <div class="max-w-xl lg:max-w-lg">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Subscribe to our newsletter.</h2>
                <p class="mt-4 text-lg leading-8 ">get newsletters direct to your mail!.</p>
                <div class="mt-3 flex max-w-md gap-x-4">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-dark shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Enter your email">
                    <button type="submit" class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-dark shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Subscribe</button>
                </div>
            </div>
            <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                <div class="flex flex-col items-start">
                <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                    <svg class="h-6 w-6  text-black" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>
                </div>
                <dt class="mt-4 font-semibold text-dark">Weekly articles</dt>
                <dd class="mt-2 leading-7">weekly updates strsight to your email</dd>
                </div>
                <div class="flex flex-col items-start">
                <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                    <svg class="h-6 w-6 text-dark" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                    </svg>
                </div>
                <dt class="mt-4 font-semibold text-dark">No spam</dt>
                <dd class="mt-2 leading-7">weekly updates strsight to your email, no spam</dd>
                </div>
            </dl>
            </div>
        </div>
        <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
            <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        </div>

</footer>
</body>
</html>

</body>
</html>