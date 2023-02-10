{{-- <script>
    let d = new Date();
    document.body.innerHTML = "<h1>Time right now is:  " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()
    "</h1>"
</script> --}}
{{-- <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200"> --}}
    {{-- id={{ asset('storage/' . $pertanyaans->id) }}  --}}
    {{-- <div id="svgs" class='rating flex flex-row justify-center gap-3'>
        <svg class="h-12 transition-all duration-100 fill-gray-400 fill-yellow-400 cursor-pointer"
            viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <path
                d="M575.852903 115.426402L661.092435 288.054362c10.130509 20.465674 29.675227 34.689317 52.289797 37.963825l190.433097 27.62866c56.996902 8.288598 79.7138 78.281203 38.475467 118.496253l-137.836314 134.35715c-16.372539 15.963226-23.84251 38.987109-19.954032 61.49935l32.540421 189.716799c9.721195 56.792245-49.833916 100.077146-100.793444 73.267113L545.870691 841.446188a69.491196 69.491196 0 0 0-64.67153 0l-170.376737 89.537324c-50.959528 26.810033-110.51464-16.474868-100.793444-73.267113L242.569401 667.9996c3.888478-22.512241-3.581493-45.536125-19.954032-61.49935L84.779055 472.245428c-41.238333-40.215049-18.521435-110.207655 38.475467-118.496252l190.433097-27.62866c22.61457-3.274508 42.159288-17.498151 52.289797-37.963826L451.319277 115.426402c25.479764-51.675827 99.053862-51.675827 124.533626 0z"
                ></path>
        </svg>
        <svg class="h-12 transition-all duration-100 fill-gray-400 fill-yellow-400 cursor-pointer"
            viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <path
                d="M575.852903 115.426402L661.092435 288.054362c10.130509 20.465674 29.675227 34.689317 52.289797 37.963825l190.433097 27.62866c56.996902 8.288598 79.7138 78.281203 38.475467 118.496253l-137.836314 134.35715c-16.372539 15.963226-23.84251 38.987109-19.954032 61.49935l32.540421 189.716799c9.721195 56.792245-49.833916 100.077146-100.793444 73.267113L545.870691 841.446188a69.491196 69.491196 0 0 0-64.67153 0l-170.376737 89.537324c-50.959528 26.810033-110.51464-16.474868-100.793444-73.267113L242.569401 667.9996c3.888478-22.512241-3.581493-45.536125-19.954032-61.49935L84.779055 472.245428c-41.238333-40.215049-18.521435-110.207655 38.475467-118.496252l190.433097-27.62866c22.61457-3.274508 42.159288-17.498151 52.289797-37.963826L451.319277 115.426402c25.479764-51.675827 99.053862-51.675827 124.533626 0z"
                ></path>
        </svg>
        <svg class="h-12 transition-all duration-100 fill-gray-400 fill-yellow-400 cursor-pointer"
            viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <path
                d="M575.852903 115.426402L661.092435 288.054362c10.130509 20.465674 29.675227 34.689317 52.289797 37.963825l190.433097 27.62866c56.996902 8.288598 79.7138 78.281203 38.475467 118.496253l-137.836314 134.35715c-16.372539 15.963226-23.84251 38.987109-19.954032 61.49935l32.540421 189.716799c9.721195 56.792245-49.833916 100.077146-100.793444 73.267113L545.870691 841.446188a69.491196 69.491196 0 0 0-64.67153 0l-170.376737 89.537324c-50.959528 26.810033-110.51464-16.474868-100.793444-73.267113L242.569401 667.9996c3.888478-22.512241-3.581493-45.536125-19.954032-61.49935L84.779055 472.245428c-41.238333-40.215049-18.521435-110.207655 38.475467-118.496252l190.433097-27.62866c22.61457-3.274508 42.159288-17.498151 52.289797-37.963826L451.319277 115.426402c25.479764-51.675827 99.053862-51.675827 124.533626 0z"
                ></path>
        </svg>
        <svg class="h-12 transition-all duration-100 fill-gray-400 fill-yellow-400 cursor-pointer"
            viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <path
                d="M575.852903 115.426402L661.092435 288.054362c10.130509 20.465674 29.675227 34.689317 52.289797 37.963825l190.433097 27.62866c56.996902 8.288598 79.7138 78.281203 38.475467 118.496253l-137.836314 134.35715c-16.372539 15.963226-23.84251 38.987109-19.954032 61.49935l32.540421 189.716799c9.721195 56.792245-49.833916 100.077146-100.793444 73.267113L545.870691 841.446188a69.491196 69.491196 0 0 0-64.67153 0l-170.376737 89.537324c-50.959528 26.810033-110.51464-16.474868-100.793444-73.267113L242.569401 667.9996c3.888478-22.512241-3.581493-45.536125-19.954032-61.49935L84.779055 472.245428c-41.238333-40.215049-18.521435-110.207655 38.475467-118.496252l190.433097-27.62866c22.61457-3.274508 42.159288-17.498151 52.289797-37.963826L451.319277 115.426402c25.479764-51.675827 99.053862-51.675827 124.533626 0z"
                ></path>
        </svg>
    </div> 
    
</div>
<script>
    const svgs = document.querySelector('.rating').children;
    const id = document.getElementById('id');

    for(let i = 0;i<svgs.length;i++){ 
        svgs[i].onclick = ()=>{
            for(let j = 0;j<=i;j++){
                svgs[j].classList.add("fill-yellow-400"); // this class should be added to whitelist while in production mode
            }
            for(let k = i + 1;k<svgs.length;k++){
                svgs[k].classList.remove("fill-yellow-400"); // this class should be added to whitelist while in production mode
            }
        }
    }
</script> --}}

{{-- <div id="reactions__container"><div><div id="reactions" class="reactions-refresh"><div class="text-bold align align--center spacing-bottom-small prompt">Bagaimana Menurutmu?</div><div class="align align--center spacing-bottom">13 Responses</div><div class="reaction-items"><div class="align align--center align--wrap reaction-items__container reaction-items__container--refresh" style="width: 349px;"><div class="reaction-item reaction-item--refresh reaction-item__enabled"><div class="reaction-item__button reaction-item__button--refresh" tabindex="0"><div class="reaction-item__image-wrapper reaction-item__image-wrapper--refresh"><img class="reaction-item__image reaction-item__image--refresh" src="//c.disquscdn.com/next/current/publisher-admin/assets/img/emoji/upvote-512x512.png" title="Terima kasih" alt="Terima kasih"></div></div><div class="reaction-tooltip" style=""><span class="reaction-tooltip__text">Terima kasih</span><div class="reaction-tooltip__triangle"><div class="reaction-tooltip__inner-triangle"></div></div></div></div><div class="reaction-item reaction-item--refresh reaction-item__enabled"><div class="reaction-item__button reaction-item__button--refresh" tabindex="0"><div class="reaction-item__image-wrapper reaction-item__image-wrapper--refresh"><img class="reaction-item__image reaction-item__image--refresh" src="//c.disquscdn.com/next/current/publisher-admin/assets/img/emoji/love-512x512.png" title="Suka" alt="Suka"></div></div><div class="reaction-tooltip" style=""><span class="reaction-tooltip__text">Suka</span><div class="reaction-tooltip__triangle"><div class="reaction-tooltip__inner-triangle"></div></div></div></div><div class="reaction-item reaction-item--refresh reaction-item__enabled"><div class="reaction-item__button reaction-item__button--refresh" tabindex="0"><div class="reaction-item__image-wrapper reaction-item__image-wrapper--refresh"><img class="reaction-item__image reaction-item__image--refresh" src="//c.disquscdn.com/next/current/publisher-admin/assets/img/emoji/surprised-512x512.png" title="Menarik" alt="Menarik"></div></div><div class="reaction-tooltip" style=""><span class="reaction-tooltip__text">Menarik</span><div class="reaction-tooltip__triangle"><div class="reaction-tooltip__inner-triangle"></div></div></div></div><div class="reaction-item reaction-item--refresh reaction-item__enabled"><div class="reaction-item__button reaction-item__button--refresh" tabindex="0"><div class="reaction-item__image-wrapper reaction-item__image-wrapper--refresh"><img class="reaction-item__image reaction-item__image--refresh" src="//c.disquscdn.com/next/current/publisher-admin/assets/img/emoji/sad-512x512.png" title="Bingung" alt="Bingung"></div></div><div class="reaction-tooltip" style=""><span class="reaction-tooltip__text">Bingung</span><div class="reaction-tooltip__triangle"><div class="reaction-tooltip__inner-triangle"></div></div></div></div><div class="reaction-item reaction-item--refresh reaction-item__enabled"><div class="reaction-item__button reaction-item__button--refresh" tabindex="0"><div class="reaction-item__image-wrapper reaction-item__image-wrapper--refresh"><img class="reaction-item__image reaction-item__image--refresh" src="//c.disquscdn.com/next/current/publisher-admin/assets/img/emoji/angry-512x512.png" title="Error" alt="Error"></div></div><div class="reaction-tooltip" style=""><span class="reaction-tooltip__text">Error</span><div class="reaction-tooltip__triangle"><div class="reaction-tooltip__inner-triangle"></div></div></div></div></div></div><div class="err text-semibold"></div></div></div></div> --}}

{{-- <div class="rating1">
    <input type="radio" id="star1"><label for="star1"></label>  
    <input type="radio" id="star2"><label for="star2"></label>
    <input type="radio" id="star3"><label for="star3"></label>
    <input type="radio" id="star4"><label for="star4"></label>  
</div>
<style>
    body
    {
        background: #060606;
    }
    .rating1
    {
        margin: 190px auto;
        width: 400px;
    }
    .rating1 >*
    {
        float: right;
    }
    .rating1 input
    {
        display: none;
    }
    .rating1 label
    {
        /* display: block; */
        cursor: pointer;
        width: 20%;
        height: 40px;
        position: relative;
    }

    .rating1 label::after
    {
        content: '☆';
        /* position: absolute; */
        font-size: 80px;
        color: #444;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        /* text-align: center; */
        -webkit-font-smoothing: antialiased;
        -webkit-animation: 1s pulse ease;
        animation: 1s pulse ease;
        transition: all 0.4s ease-out;
    }
    .rating1 label:hover::after
    {
        color: #5e5e5e;
        text-shadow: 0 0 15px #5e5e5e;
    }
    .rating1 input:checked + label::after,
    .rating1 input:checked ~ label::after
    {
        content: '★';
        color: #f9bf3b;
        text-shadow: 0 0 20px #f9bf3b;
    }

</style> --}}

{{-- <div class="container py-md mt-2 rounded">
    <div class="col-lg-12">
        <div class="bg-red-400 shadow border-0 rounded">
            <div class="p-5 flex font-sans">
                <div class="flex-none w-48 relative">
                <img src="/classic-utility-jacket.jpg" alt="" class="absolute inset-0 w-full h-full object-cover" loading="lazy" />
                </div>
                <form class="flex-auto p-6">
                <div class="flex flex-wrap">
                    <h1 class="flex-auto text-lg font-semibold text-slate-900">
                    Classic Utility Jacket
                    </h1>
                    <div class="text-lg font-semibold text-slate-500">
                    $110.00
                    </div>
                    <div class="w-full flex-none text-sm font-medium text-slate-700 mt-2">
                    In stock
                    </div>
                </div> --}}
                <div id="profile" class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200">
                    <div class="space-x-2 flex text-sm">
                    <label>
                        <div class="group flex relative">
                            <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-300 peer-checked:font-semibold peer-checked:bg-slate-500 peer-checked:text-white">
                                <img src="sad-512x512.png" alt="">
                            </div>
                            <input class="sr-only peer" name="size" type="radio" value="1" checked />
                            <span class="flex text-wrap group-hover:opacity-100 transition-opacity bg-gray-400 px-1 text-sm text-gray-100 rounded-md absolute left-1/2 
                            -translate-x-1/2 translate-y-full opacity-0 m-4 mx-auto">Tidak Baik</span>
                        </div>
                        {{-- <input class="sr-only peer" name="size" type="radio" value="1" checked />
                        <span class="group-hover:opacity-100 transition-opacity bg-gray-800 px-1 text-sm text-gray-100 rounded-md absolute left-1/2 
                                    -translate-x-1/2 translate-y-full opacity-0 m-4 mx-auto">Tidak Baik</span>
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-300 peer-checked:font-semibold peer-checked:bg-slate-500 peer-checked:text-white">
                            <img src="sad-512x512.png" alt=""> --}}
                            
                        {{-- </div> --}}
                    </label>
                    <label>
                        {{-- <input class="sr-only peer" name="size" type="radio" value="Kurang Baik" /> --}}
                        <div class="group flex relative">
                            <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-300 peer-checked:font-semibold peer-checked:bg-slate-500 peer-checked:text-white">
                                <img src="surprised-512x512.png" alt="">
                            </div>
                            <input class="sr-only peer" name="size" type="radio" value="2" checked />
                                <span class="flex text-wrap group-hover:opacity-100 transition-opacity bg-gray-400 px-1 text-sm text-gray-100 rounded-md absolute left-1/2 
                                -translate-x-1/2 translate-y-full opacity-0 m-4 mx-auto">Kurang Baik</span>
                        </div>
                    </label>
                    <label>
                        {{-- <input class="sr-only peer" name="size" type="radio" value="Baik" /> --}}
                        <div class="group flex relative">
                            <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-300 peer-checked:font-semibold peer-checked:bg-slate-500 peer-checked:text-white">
                                <img src="upvote-512x512.png" alt="">
                            </div>
                            <input class="sr-only peer" name="size" type="radio" value="3" checked />
                                <span class="flex text-wrap group-hover:opacity-100 transition-opacity bg-gray-400 px-1 text-sm text-gray-100 rounded-md absolute left-1/2 
                                -translate-x-1/2 translate-y-full opacity-0 m-4 mx-auto">Baik</span>
                        </div>
                    </label>
                    </label>
                    <label>
                        {{-- <input class="sr-only peer" name="size" type="radio" value="Sangat Baik" /> --}}
                        <div class="group flex relative">
                            <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-300 peer-checked:font-semibold peer-checked:bg-slate-500 peer-checked:text-white">
                                <img src="love-512x512.png" alt="">
                            </div>
                            <input class="sr-only peer" name="size" type="radio" value="4" checked />
                                <span class="flex text-wrap group-hover:opacity-100 transition-opacity bg-gray-400 px-1 text-sm text-gray-100 rounded-md absolute left-1/2 
                                -translate-x-1/2 translate-y-full opacity-0 m-4 mx-auto">Sangat Baik</span>
                        </div>
                    </label>
                    {{-- <label>
                        <input class="sr-only peer" name="size" type="radio" value="xl" />
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                            <img src="sad-512x512.png" alt="">
                        </div>
                    </label> --}}
                    </div>
                </div>
                {{-- <div class="flex space-x-4 mb-6 text-sm font-medium">
                    <div class="flex-auto flex space-x-4">
                    <button class="h-10 px-6 font-semibold rounded-md bg-black text-white" type="submit">
                        Buy now
                    </button>
                    <button class="h-10 px-6 font-semibold rounded-md border border-slate-200 text-slate-900" type="button">
                        Add to bag
                    </button>
                    </div>
                    <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border border-slate-200" type="button" aria-label="Like">
                    <svg width="20" height="20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                    </svg>
                    </button>
                </div> --}}
                {{-- <p class="text-sm text-slate-700">
                    Free shipping on all continental US orders.
                </p>
                </form>
            </div>
        </div>
    </div>
</div> --}}


{{-- <div class="rating">
    <input type="radio" name="rating" id="rating-5">
    <label for="rating-5"></label>
    <input type="radio" name="rating" id="rating-4">
    <label for="rating-4"></label>
    <input type="radio" name="rating" id="rating-3">
    <label for="rating-3"></label>
    <input type="radio" name="rating" id="rating-2">
    <label for="rating-2"></label>
    <input type="radio" name="rating" id="rating-1">
    <label for="rating-1"></label>
    <div class="emoji-wrapper">
      <div class="emoji">
        <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
        <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534"/>
        <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff"/>
        <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>
        <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>
        <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff"/>
        <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>
        <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63"/>
        <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347"/>
      </svg>
        <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
        <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
        <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347"/>
        <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534"/>
        <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff"/>
        <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347"/>
        <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff"/>
        <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534"/>
        <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff"/>
        <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347"/>
        <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff"/>
      </svg>
        <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
        <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
        <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347"/>
        <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff"/>
        <circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>
        <g fill="#fff">
          <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10"/>
          <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>
        </g>
        <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>
        <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff"/>
      </svg>
        <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
  <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
  <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347"/>
  <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
  <g fill="#fff">
    <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>
    <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>
  </g>
  <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
  <g fill="#fff">
    <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1"/>
    <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>
  </g>
  <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
  <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff"/>
</svg>
        <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
        <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
        <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
        <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f"/>
        <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
        <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
        <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f"/>
        <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
        <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347"/>
        <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b"/>
      </svg>
        <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <g fill="#ffd93b">
          <circle cx="256" cy="256" r="256"/>
          <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>
        </g>
        <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4"/>
        <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea"/>
        <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88"/>
        <g fill="#38c0dc">
          <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>
        </g>
        <g fill="#d23f77">
          <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>
        </g>
        <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347"/>
        <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b"/>
        <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2"/>
      </svg>
      </div>
    </div>
  </div>
<style>
    /* * { box-sizing: border-box; }

.container {
  background-image: url("https://www.toptal.com/designers/subtlepatterns/patterns/concrete-texture.png");
  display: flex;
  flex-wrap: wrap;
  height: 100vh;
  align-items: center;
  justify-content: center;
  padding: 0 20px;
} */

.rating {
  display: flex;
  width: 100%;
  justify-content: center;
  overflow: hidden;
  flex-direction: row-reverse;
  height: 150px;
  position: relative;
}

.rating-0 {
  filter: grayscale(100%);
}

.rating > input {
  display: none;
}

.rating > label {
  cursor: pointer;
  width: 40px;
  height: 40px;
  margin-top: auto;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23e3e3e3' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 76%;
  transition: .3s;
}

.rating > input:checked ~ label,
.rating > input:checked ~ label ~ label {
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
}


.rating > input:not(:checked) ~ label:hover,
.rating > input:not(:checked) ~ label:hover ~ label {
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23d8b11e' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
}

.emoji-wrapper {
  width: 100%;
  text-align: center;
  height: 100px;
  overflow: hidden;
  position: absolute;
  top: 0;
  left: 0;
}

.emoji-wrapper:before,
.emoji-wrapper:after{
  content: "";
  height: 15px;
  width: 100%;
  position: absolute;
  left: 0;
  z-index: 1;
}

.emoji-wrapper:before {
  top: 0;
  background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
}

.emoji-wrapper:after{
  bottom: 0;
  background: linear-gradient(to top, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
}

.emoji {
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: .3s;
}

.emoji > svg {
  margin: 15px 0; 
  width: 70px;
  height: 70px;
  flex-shrink: 0;
}

#rating-1:checked ~ .emoji-wrapper > .emoji { transform: translateY(-100px); }
#rating-2:checked ~ .emoji-wrapper > .emoji { transform: translateY(-200px); }
#rating-3:checked ~ .emoji-wrapper > .emoji { transform: translateY(-300px); }
#rating-4:checked ~ .emoji-wrapper > .emoji { transform: translateY(-400px); }
#rating-5:checked ~ .emoji-wrapper > .emoji { transform: translateY(-500px); }

.feedback {
  max-width: 360px;
  background-color: #fff;
  width: 100%;
  padding: 30px;
  border-radius: 8px;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  align-items: center;
  box-shadow: 0 4px 30px rgba(0,0,0,.05);
}

</style> --}}