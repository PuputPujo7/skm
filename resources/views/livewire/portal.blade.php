<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">DPMPTSP Provinsi Jawa Tengah</h1>
                <h1 data-aos="fade-up">Aplikasi Survey Kepuasan Masyarakat</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Selamat Datang di Aplikasi SKM DPMPTSP Provinsi Jawa Tengah</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="https://skm.dpmptsp.jatengprov.go.id/nilai-skm"
                            class="scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <button type="button" class="mt-2 btn btn-success">LIHAT NILAI SKM</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-3 text-center" data-aos="zoom-out" data-aos-delay="200">
                    <label for="exampleFormControlInput1" class="text-center form-label">Silahkan Masukkan Nomor Tiket Izin/Nomor Antrian Anda</label>
                    <div class="input-group">
                    <div class="input-group-text">
                        <select id="inputState" class="form-select">
                            {{-- <option selected>Pilih</option> --}}
                            <option>Nomor Tiket</option>
                            <option>Nomor Antrian</option>
                        </select>
                    </div>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="000012345 atau A012">
                    </div>
                    {{-- <input class="form-control px-2" placeholder="000012345"> --}}
                    <a href="#" class="">
                        <div class="d-grid gap-2 mt-4">
                            <button class="btn btn-primary" type="button">SUBMIT !</button>
                        </div>
                    </a>
                    <a href="https://skm.dpmptsp.jatengprov.go.id/data-pemohon-manual" class="">
                        <div class="d-grid gap-2 mt-4">
                            <button class="btn btn-danger" type="button">TIDAK MEMILIKI NOMOR TIKET?</button>
                        </div>
                    </a> 
                    <div class="gap-2 mt-4 text-center">
                        <p>Scan QR Code Untuk Pengisian SKM Melalui Smartphone :</p>
                        <div class="bg-dark text-center rounded">
                        <img src="qr-code.png" class="bg-dark card-img-top  text-center" alt="..." style="width: 96px">
                        <img src="ptsp.png" class="bg-dark card-img-top  text-center" alt="..." style="width: 96px">
                        </div>
                    </div>
            </div>
            
            
        </div>
        
    </div>

    

</section><!-- End Hero -->