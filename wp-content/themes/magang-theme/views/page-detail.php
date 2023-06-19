<?php
/*
Template Name: Page Detail
*/
?>

<?php get_header(); ?>
<script src="<?php echo get_template_directory_uri() . '/assets/js/calender.js' ?>" defer></script>

<!-- Blog Start -->
<?php
$url = $_SERVER['REQUEST_URI'];
$id_news = explode("?news=", basename($url));

$andWhere = " AND id='" . $id_news[1] . "'";
$get_row_news = getRowNews('news', $andWhere);

// Start Komen Logic
if (isset($_POST['submit-komen'])) {
    global $wpdb;
    $current_datetime = current_datetime()->format('Y-m-d H:i:s');

    $data = array(
        'news_id' => $id_news[1],
        'nama' => isset($_POST['nama_komen']) ? $_POST['nama_komen'] : '',
        'komen_body' => isset($_POST['body_komen']) ? $_POST['body_komen'] : '',
        'date_added' => $current_datetime,
        'date_modified' => $current_datetime,
    );

    addKomen('komen', $data);
    echo "<script type='text/javascript'>window.location=document.location.href;</script>";
}
// End Komen Logic

// Start Reply Logic
if (isset($_POST['submit-reply-1'])) {
    global $wpdb;
    $current_datetime = current_datetime()->format('Y-m-d H:i:s');

    $data = array(
        'news_id' => $id_news[1],
        'parent_komen_id' => $_POST['komen-id'],
        'nama' => isset($_POST['nama_komen']) ? $_POST['nama_komen'] : '',
        'komen_body' => "@" . $_POST['komen-nama'] . " - " . $_POST['body_komen'],
        'date_added' => $current_datetime,
        'date_modified' => $current_datetime,
    );

    addKomen('komen', $data);
    echo "<script type='text/javascript'>window.location=document.location.href;</script>";
}
// End Reply Logic
?>
<div class="container-fluid py-6 px-5">
    <div class="row g-5">
        <div class="col-lg-8">
            <!-- Blog Detail Start -->
            <div class="mb-5">
                <img class="img-fluid w-100 mb-5"
                    src="<?= content_url() . '/uploads/images/news/' . $get_row_news->gambar; ?>" alt="Foto">
                <h2 class="mb-4">
                    <?php echo $get_row_news->judul; ?>
                </h2>
                <p>
                    <?php echo $get_row_news->deskripsi; ?>
                </p>
            </div>
            <!-- Blog Detail End -->

            <!-- Comment List Start -->
            <div class="mb-5">
                <h3 class="mb-4">
                    <?php
                    $where = $id_news[1];
                    $tambil_data = getRowKomen('komen', $where);
                    echo count($tambil_data);
                    ?> Comments
                </h3>
                <?php
                foreach ($tambil_data as $data) :
                ?>
                <?php
                    if ($data->parent_komen_id == 0) :
                    ?>
                <div class="d-flex mb-4">
                    <!-- <img src="<?php echo get_template_directory_uri() . '/assets/img/user.jpg' ?>"
                        class="img-fluid rounded-circle" style="width: 45px; height: 45px;"> -->
                    <div class="ps-3">
                        <h6><a href="">
                                <?php echo $data->nama ?>
                            </a> <small><i>
                                    <?php
                                            $date = date_create($data->date_added);
                                            echo date_format($date, "D, d M Y");
                                            ?>
                                </i></small></h6>
                        <p>
                            <?php echo $data->komen_body; ?>
                        </p>
                        <button class="btn btn-sm btn-light shadow-none" data-toggle="reply-form"
                            data-target="<?php echo $data->id; ?>" id="btn-reply">Reply</button>
                        </button>
                        <form method="POST" class="reply-form d-none bg-secondary rounded p-3"
                            id="<?php echo $data->id; ?>">
                            <div class="row g-3">
                                <input type="hidden" name="komen-id" value="<?= $data->id; ?>">
                                <input type="hidden" name="komen-nama" value="<?= $data->nama; ?>">
                                <div class="col-12">
                                    <input type="text" name="nama_komen" class="form-control bg-white border-0"
                                        placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea name="body_komen" class="form-control bg-white border-0" rows="5"
                                        placeholder="Reply to <?= $data->nama; ?>"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-2" name="submiwt-reply-1"
                                        type="submit">Reply</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                        foreach ($tambil_data as $data_reply) :
                        ?>
                <?php
                            if ($data_reply->parent_komen_id != 0 && $data_reply->parent_komen_id == $data->id) :
                            ?>
                <div class="d-flex ms-5 mb-4">
                    <!-- <img src="<?php echo get_template_directory_uri() . '/assets/img/user.jpg' ?>"
                        class="img-fluid rounded-circle" style="width: 45px; height: 45px;"> -->
                    <div class="ps-3">
                        <h6><a href=""><?php echo $data_reply->nama ?></a> <small><i>
                                    <?php
                                                    $date = date_create($data_reply->date_added);
                                                    echo date_format($date, "D, d M Y");
                                                    ?>
                                </i></small></h6>
                        <p> <?php echo $data_reply->komen_body; ?></p>
                        <!-- <button class="btn btn-sm btn-light">Reply</button> -->
                    </div>
                </div>
                <?php
                            endif;
                            ?>
                <?php endforeach; ?>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- Comment List End -->

            <!-- Comment Form Start -->
            <div class="bg-secondary p-5">
                <h2 class="mb-4">Leave a comment</h2>
                <form method="POST" action="">
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" name="nama_komen" class="form-control bg-white border-0"
                                placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea name="body_komen" class="form-control bg-white border-0" rows="5"
                                placeholder="Comment"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" name="submit-komen" type="submit">Leave Your
                                Comment</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Comment Form End -->
        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-4">
            <!-- Search Form Start -->
            <!-- <div class="mb-5">
                <div class="input-group">
                    <input type="text" class="form-control p-3" placeholder="Keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div> -->
            <!-- Search Form End -->

            <!-- Category Start -->
            <div class="mb-5">
                <h2 class="mb-4">Categories</h2>
                <div class="d-flex flex-column justify-content-start bg-secondary p-4">
                    <?php
                    $tampilKategori = allKategori('kategori');
                    foreach ($tampilKategori as $data) :
                    ?>
                    <a class="h5 mb-3" href="news/?kategori=<?= $data->nama_kategori; ?>">
                        <i class="bi bi-arrow-right text-primary me-2"></i><?= $data->nama_kategori; ?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Category End -->

            <!-- Recent Post Start -->
            <?php
            $tambil_data = recentNews('news');
            ?>
            <div class="mb-5">
                <h2 class="mb-4">Recent Post</h2>
                <?php
                foreach ($tambil_data as $data) :
                ?>
                <div class="d-flex mb-3">
                    <img class="img-fluid" src="<?= content_url() . '/uploads/images/news/' . $data->gambar; ?>"
                        style="width: 100px; height: 100px; object-fit: cover;" alt="<?php echo $data->gambar; ?>">
                    <a href="<?= get_home_url() . '/detail/?news=' . $data->id; ?>"
                        class="col-8 h5 d-flex flex-column justify-content-center align-items-start bg-secondary px-3 mb-0">
                        <p class="news-title" style="font-size: 1.5vw;">
                            <?php echo $data->judul; ?>
                        </p>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- Recent Post End -->

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
        <style>
            .active-day {
                width: 5px;
                height: 5px;
                color: white;
                font-weight: bold;
                background: #dc3545;
                border-radius: 100%;
            }
            </style>

            <div>
                <h2 class="mb-3">Calender</h2>
                <div cellspacing is used to specify the space between the cell and its contents -->
                    <div class="d-flex align-content-center justify-content-between">
                        <button onclick="prevMonth()" class="btn" style="background: #dc3545; color: white;">&lt;</button>
                        <h2 id="month-year" align="center" style="color: rgba(255, 22, 22, 0.863);"></h2>
                        <button onclick="nextMonth()" class="btn" style="background: #dc3545; color: white;">&gt;</button>
                    </div>

                    <table class="table-borderless table-margin" bgcolor="white" align="center" cellspacing="12"
                        cellpadding="12">

                        <caption align="top">
                        </caption>
                        <thead>
                            <tr>
                                <!-- Here we have applied inline style 
                                    to make it more attractive-->
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                            </tr>
                        </thead>

                        <tbody id="calendar-body" style="text-align: center;"></tbody>
                    </table>
                    </body>
                </div>
            </div>
            <!-- Plain Text End -->

        </div>
        <!-- Sidebar End -->
    </div>
</div>
<!-- Blog End -->

<script>
document.addEventListener(
    "click",
    function(event) {
        var target = event.target;
        var replyForm;
        if (target.matches("[data-toggle='reply-form']")) {
            replyForm = document.getElementById(target.getAttribute("data-target"));
            replyForm.classList.toggle("d-none");
        }
    },
    false
);
</script>


<?php get_footer(); ?>