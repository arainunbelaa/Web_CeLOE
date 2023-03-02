<?php 
/* 
    Template Name: Page Detail 
*/ 
?>

<?php get_header(); ?>

<!-- Blog Start -->
<div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 mb-5" src="<?php echo get_template_directory_uri().'/assets/img/image.jpg'?>" alt="">
                    <h1 class="mb-4">Pendampingan Internal IPD & IMD 2021</h1>
                    <p>Pada hari Rabu, 10 Maret 2021 Bagian Pengambangan Konten CeLOE telah dilaksanakan Workshop Pendampingan Internal   IPD & IMD 2021. Dalam kegiatan ini dihadiri oleh tim Bang CeLOE dan Tim dari Fakultas Rekayasa Industri (FRI) yang lolos IPD 2020 serta dihadiri ± 34 peserta.</p>
                    <p>Workshop pendampingan internal ini diisi dengan topik-topik berbeda yaitu mengenai IMD 2021, IPD 2021, serta sharing tips & tricks lolos IPD 2020 mulai dari penyusunan hingga serah terima hibah.</p>
                    <p>Kemudian selanjutnya agenda workshop pendampingan internal dilanjutkan dengan sesi tanya jawab interaktif. Dengan adanya workshop pendampingan internal IPD & IMD 2021 ini diharapkan dapat memberikan manfaat dan membantu dalam persiapan penyusunan proposal IPD & IMD 2021.</p>
                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                <div class="mb-5">
                    <h2 class="mb-4">3 Comments</h2>
                    <div class="d-flex mb-4">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/user.jpg'?>" class="img-fluid rounded-circle" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">Fuad Akhsan</a> <small><i>01 Jan 2023</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/user.jpg'?>" class="img-fluid rounded-circle" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">Fuad Akhsan</a> <small><i>01 Jan 2023</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="d-flex ms-5 mb-4">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/user.jpg'?>" class="img-fluid rounded-circle" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">Fuad Akhsan</a> <small><i>01 Jan 2023</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                </div>
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <div class="bg-secondary p-5">
                    <h2 class="mb-4">Leave a comment</h2>
                    <form>
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    <div class="d-flex flex-column justify-content-start bg-secondary p-4">
                        <a class="h5 mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Artikel</a>
                        <a class="h5 mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Informasi</a>
                        <a class="h5 mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Luaran penelitian</a>
                        <a class="h5 mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Dokumentasi</a>
                        <a class="h5" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Seminar</a>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Recent Post</h2>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri().'/assets/img/image.jpg'?>" style="width: 100px; height: 100px; object-fit: cover;" alt="detail.html">
                        <a href="<?php echo get_home_url() . '/detail/'; ?>" class="h5 d-flex align-items-center bg-secondary px-3 mb-0">Pendampingan Internal IPD & IMD 2021
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri().'/assets/img/image1.jpg'?>" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-secondary px-3 mb-0">Implementasi Pembelajaran Daring Dosen Telkom University
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri().'/assets/img/image2.jpg'?>" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-secondary px-3 mb-0">Penyusunan Materi, Aktifitas LMS dan Sertifikasi CeLOE
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri().'/assets/img/image.jpg'?>" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-secondary px-3 mb-0">Sertifikasi CeLOE (CMCC & 5C)
                        </a>
                    </div>
                    <div class="d-flex">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri().'/assets/img/image1.jpg'?>" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-secondary px-3 mb-0">Sosialisasi Pemanfaatan CloucSwyft untuk Praktikum Daring
                        </a>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/blog-1.jpg'?>" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Tag Cloud</h2>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-secondary m-1">Leadership</a>
                        <a href="" class="btn btn-secondary m-1">Development</a>
                        <a href="" class="btn btn-secondary m-1">Marketing</a>
                        <a href="" class="btn btn-secondary m-1">Biomedical</a>
                        <a href="" class="btn btn-secondary m-1">Writing</a>
                        <a href="" class="btn btn-secondary m-1">Technician</a>
                        <a href="" class="btn btn-secondary m-1">Design</a>
                        <a href="" class="btn btn-secondary m-1">Multimedia</a>
                        <a href="" class="btn btn-secondary m-1">Experience</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Plain Text Start -->
                <div>
                    <h2 class="mb-4">Plain Text</h2>
                    <div class="bg-secondary text-center" style="padding: 30px;">
                        <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                        <a href="" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    <?php get_footer(); ?>