<x-header></x-header>

<section class= "max-w-6xl mx-auto">
    <div class="overflow-hidden flex rounded-3xl shadow-md bg-white p-6 mt-16 ring-1 ring-inset ring-prim/50 items-center">

        <div class="w-fit ml-6">

            {{-- badge --}}
            <div class="small-badge w-fit gap-x-3 flex bg-indigo-100 rounded-full py-1 px-4 items-center ring-2 ring-inset ring-prim/10 mb-2">
                <svg class="w-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#6366F2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8.0001 3H9.0001C7.0501 8.84 7.0501 15.16 9.0001 21H8.0001" stroke="#6366F2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 3C16.95 8.84 16.95 15.16 15 21" stroke="#6366F2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 16V15C8.84 16.95 15.16 16.95 21 15V16" stroke="#6366F2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 9.0001C8.84 7.0501 15.16 7.0501 21 9.0001" stroke="#6366F2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                                  
                <p class="text-xs font-semibold text-prim">Laravel C-R-U-D Project</p>
            </div>

            {{-- headline --}}
            <div class="flex flex-col mb-6">
                <p class="text-5xl font-extrabold text-prim leading-tight mb-2">A Laravel Project <br> With C-R-U-D Features</p>
                <p class="max-w-md text-base text-gray-500">"Laravel project with user-friendly Create, Read, Update, and Delete features, plus a handy search function!"</p>
            </div>

            {{-- link --}}
            <a href="{{ route('home') }}" class="inline-flex justify-center items-center py-2 px-5 text-base font-medium text-center text-white rounded-xl bg-prim hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Start
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
        
        <div class="w-2/3 translate-x-56">
            <img src="{{ asset('images/hero-img-2.png') }}" alt="" class="0">
        </div>        
    </div>
</section>

<x-footer></x-footer>