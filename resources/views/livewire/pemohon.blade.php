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
                <form 
                {{-- method="POST"  --}}
                wire:submit.prevent="submit">
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
                    <div class="mb-5">
                        <label for="no_telp" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            No. Telp./HP
                        </label>
                        <input type="no_telp" name="no_telp" id="number" placeholder="081234567890" wire:model="no_telp"
                            class="w-full rounded-md border py-3 px-6 text-base font-medium text-gray-600 outline-none focus:border-blue-400 focus:shadow-md" required/>
                    </div>
                    <div class="mb-5">
                        <label for="gender" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            Jenis Kelamin
                        </label>
                            <select class="w-full rounded-md border py-3 px-6 text-base font-medium text-gray-600 outline-none focus:border-blue-400 focus:shadow-md" required  wire:model="jenis_kelamin">
                                <option selected>Pilih</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Lebih baik tidak menyebutkan">Lebih baik tidak menyebutkan</option>
                            </select>
                    </div>
                    <div class="mb-5">
                        <label for="usia" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            Usia
                        </label>
                        <input type="number" name="usia" id="number" placeholder="" wire:model="usia"
                            class="w-full rounded-md border py-3 px-6 text-base font-medium text-gray-600 outline-none focus:border-blue-400 focus:shadow-md" required/>
                    </div>
                    <div class="mb-5">
                        <label for="pendidikan" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            Pendidikan
                        </label>
                            <select class="w-full rounded-md border py-3 px-6 text-base font-medium text-gray-600 outline-none focus:border-blue-400 focus:shadow-md"  required  wire:model="pendidikan">
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
                        <label for="jenis_layanan" class="mb-3 mt-3 block text-base font-medium text-gray-600">
                            Jenis Layanan
                        </label>
                            <select class="w-full rounded-md border py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-400 focus:shadow-md" required  wire:model="jenis_layanan">
                                <option selected>Pilih</option>
                                <option>Layanan Perizinan</option>
                                <option>Layanan Pengaduan dan informasi</option>
                                <option>Layanan LKPM</option>
                                <option>Layanan OSS</option>
                            </select>
                    </div>
                    {{-- <div> --}}
                        <button type="submit" class="w-full rounded-md border py-3 px-6 text-base font-medium outline-none focus:shadow-md text-white bg-blue-500 hover:bg-blue-600">
                            LANJUT!
                        </button>
                    {{-- </div> --}}

                </form> 
            </div>

        </div>


        <!-- Pin to top right corner -->
        <div class="absolute top-0 right-0 h-12 w-18 p-4" style="position: fixed;">
            <button class="js-change-theme focus:outline-none">🌙</button>
        </div>

    </div>
</section>
