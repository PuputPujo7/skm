<section id="hero" class="hero d-flex align-items-center">
    <div class="max-w-4xl flex items-center h-full lg:h-screen flex-wrap mx-auto my-48 lg:my-0">

        <!--Main Col-->
        <div id="profile"
            class="w-full lg:w-full lg:rounded-l-lg lg:rounded-r-lg shadow-2xl bg-white opacity-85 mx-6 lg:mx-0 rounded">
            <div class="p-4 md:p-5 text-center lg:text-left rounded">
                <h1 class="text-center text-3xl font-bold pt-8 lg:pt-0">Data Pemohon</h1>
            </div>
            <div class="p-4 md:p-12 text-center lg:text-left ">
                <form wire:submit.prevent="submit" class="">
                    <div class="mb-5">
                        <label for="nama" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            Nama 
                        </label>
                        <input type="text" name="nama" id="nama" placeholder="Nama" wire:model="nama"
                            class="w-full rounded-md border py-3 px-6 text-base font-medium text-gray-600 outline-none focus:border-blue-400 focus:shadow-md" required/>
                    </div>
                    <div class="mb-5">
                        <label for="alamat" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            Alamat 
                        </label>
                        <input type="text" name="alamat" id="alamat" placeholder="Alamat" wire:model="alamat"
                            class="w-full rounded-md border py-3 px-6 text-base font-medium text-gray-600 outline-none focus:border-blue-400 focus:shadow-md" required/>
                    </div>
                    {{-- <div class="mt-3">
                        <h2 class="mt-5 text-center text-2xl font-bold text-blue-800 underline">Coba</h2>
                        <div class="mb-3 sm:grid-cols-2 lg:grid-cols-2">
                            <div>
                                <label for="nama"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama/
                                    Perusahaan - Instansi</label>
                                <input type="text" wire:model="nama"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Nama/ Perusahaan..." required>
                            </div>

                        </div>
                        <div class="mb-3 sm:grid-cols-2 lg:grid-cols-2">
                            <div>
                                <label for="alamat"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
                                <input type="text" wire:model="alamat"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Nama/ Perusahaan..." required>
                            </div>

                        </div> --}}

                            <main x-data="app" class="">             
                    {{-- <div> --}}
                        <button type="submit" class="w-full rounded-md border py-3 px-6 text-base font-medium outline-none focus:shadow-md text-white bg-blue-500 hover:bg-blue-600">
                            LANJUT!
                        </button>
                    {{-- </div> --}}    
                              <!-- trigger button -->
                              {{-- <button type="submit"  --}}
                              {{-- @click="openToast()"  --}}
                              {{-- class="rounded-md bg-blue-500 px-4 py-2 font-bold text-white transition hover:bg-blue-600">Simpan</button> --}}


                    {{-- </div> --}}
                </form>

            {{-- </div> --}}
        </div>


        <!-- Pin to top right corner -->
        <div class="absolute top-0 right-0 h-12 w-18 p-4" style="position: fixed;">
            <button class="js-change-theme focus:outline-none">🌙</button>
        </div>

    </div>
</section>
