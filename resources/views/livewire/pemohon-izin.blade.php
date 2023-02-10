<section id="hero" class="hero d-flex align-items-center">
    <div class="max-w-4xl flex items-center h-full lg:h-screen flex-wrap mx-auto my-48 lg:my-0">

        <!--Main Col-->
        <div id="profile"
            class="w-full lg:w-full lg:rounded-l-lg lg:rounded-r-lg shadow-2xl bg-white opacity-85 mx-6 lg:mx-0 rounded">
            <div class="p-4 md:p-5 text-center lg:text-left rounded">
                <h1 class="text-center text-3xl font-bold pt-8 lg:pt-0">Data Pemohon</h1>
            </div>
            <div class="p-4 md:p-12 text-center lg:text-left ">

                <!-- component -->
                <form method="POST">
                    @csrf
                    <div class="mb-5">
                        <label for="number" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            No. Tiket
                        </label>
                        <input type="number" name="number" id="number" placeholder="" 
                        {{-- value="{{$request_id}}"  --}}
                            class="w-full rounded-md border py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-400 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="name" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            Nama/Nama Perusahaan
                        </label>
                        <input type="text" name="name" id="name" placeholder="Nama"
                        {{-- value="{{$nama}} {{$nama_perusahaan}}" --}}
                            class="w-full rounded-md border py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-400 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="address" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            Alamat 
                        </label>
                        <input type="text" name="address" id="address" placeholder="Alamat"
                        {{-- value="{{$alamat}}" --}}
                            class="w-full rounded-md border py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-400 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="number" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            No. Telp./HP
                        </label>
                        <input type="number" name="number" id="number" placeholder="081234567890"
                        {{-- value="{{$no_telp}}" --}}
                            class="w-full rounded-md border py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-400 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="address" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            Pendidikan
                        </label>
                            <select class="w-full rounded-md border py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-400 focus:shadow-md">
                                <option selected>Pilih</option>
                                <option>SD/Sederajat</option>
                                <option>SMP/Sederajat</option>
                                <option>SMA/Sederajat</option>
                                <option>D1</option>
                                <option>D2</option>
                                <option>D3</option>
                                <option>D4</option>
                                <option>S1</option>
                                <option>S2</option>
                                <option>S3</option>
                                <option>Lainnya</option>
                            </select>
                    </div>
                    <div class="mb-5">
                        <label for="number" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            Usia
                        </label>
                        <input type="number" name="number" id="number" placeholder=""
                            class="w-full rounded-md border py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-400 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="address" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            Bidang Perizinan / Rekomendasi
                        </label>
                        <input type="address" name="address" id="address" placeholder=""
                        {{-- value="{{$sektor_izin}}" --}}
                            class="w-full rounded-md border py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-400 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="address" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            Nama Perizinan / Rekomendasi
                        </label>
                        <input type="address" name="address" id="address" placeholder=""
                        {{-- value="{{$jenis_izin}}" --}}
                            class="w-full rounded-md border py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-400 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="address" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            Status
                        </label>
                        <input type="address" name="address" id="address" placeholder=""
                            class="w-full rounded-md border py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-400 focus:shadow-md" />
                    </div>
                    <div class="mt-10">
                        <a href="">
                        <button class="w-full rounded-md border py-3 px-6 text-base font-medium outline-none focus:shadow-md text-white bg-blue-500 hover:bg-blue-600">LANJUT
                            !
                        </button>
                        </a>
                    </div>
                    {{-- <div class="w-full text-center pt-4">
                        <a href="">
                            <div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
                                <button type="submit"
                                    class="flex-1 mt-4 block md:inline-block appearance-none bg-blue-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-blue-600">LANJUT
                                    !</button>
                            </div>
                        </a>
                    </div> --}}
                </form>       
            </div>

        </div>


        <!-- Pin to top right corner -->
        <div class="absolute top-0 right-0 h-12 w-18 p-4" style="position: fixed;">
            <button class="js-change-theme focus:outline-none">🌙</button>
        </div>

    </div>
</section>
