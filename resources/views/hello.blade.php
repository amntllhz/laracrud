<x-header></x-header>

<section class= "max-w-6xl mx-auto">
    <div class="flex rounded-2xl shadow-md bg-white p-6 mt-16 ring-1 ring-inset ring-blue-200 items-center">

        <div class="w-1/2">

            {{-- badge --}}
            <div class="small-badge w-fit gap-x-3 flex bg-blue-50 rounded-full py-1.5 px-4 items-center ring-2 ring-inset ring-prim/10 mb-2">
                <svg class="sm:w-4" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.0001 18.3334C14.6025 18.3334 18.3334 14.6024 18.3334 10C18.3334 5.39765 14.6025 1.66669 10.0001 1.66669C5.39771 1.66669 1.66675 5.39765 1.66675 10C1.66675 14.6024 5.39771 18.3334 10.0001 18.3334Z" stroke="#1D4ED8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6.66667 2.5H7.5C5.875 7.36667 5.875 12.6333 7.5 17.5H6.66667" stroke="#1D4ED8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12.5 2.5C14.125 7.36667 14.125 12.6333 12.5 17.5" stroke="#1D4ED8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M2.5 13.3333V12.5C7.36667 14.125 12.6333 14.125 17.5 12.5V13.3333" stroke="#1D4ED8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M2.5 7.5C7.36667 5.875 12.6333 5.875 17.5 7.5" stroke="#1D4ED8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>              
                <p class="text-xs font-semibold text-blue-500">Laravel C-R-U-D Project</p>
            </div>

            {{-- headline --}}
            <div class="flex flex-col mb-6">
                <p class="text-5xl font-extrabold text-blue-700 leading-tight mb-2">A Laravel Project <br> With C-R-U-D Features</p>
                <p class="max-w-md text-base text-blue-400">"Laravel project with user-friendly Create, Read, Update, and Delete features, plus a handy search function!"</p>
            </div>

            {{-- link --}}
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-xl bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Start
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>

        <div class="w-1/2">
            <div>
                <img src="{{ asset('images/hero-img.png') }}" alt="" class="">
            </div>
        </div>
    </div>
</section>

<x-footer></x-footer>