<main id="main" class="main">

    <div class="pagetitle">
        <h1 >Thêm danh mục bài viết</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= BASE_URL ?>/login/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Thêm danh mục bài viết</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <?php
        check_message('primary');
    ?>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- No Labels Form -->
                        <form autocomplete="off" class="row g-3" method="POST" action="<?= BASE_URL ?>/post/insertCategory">
                            <div class="col-md-12 my-4">
                                <input type="text" name="title_category_post" class="form-control" placeholder="Tên danh mục">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="desc_category_post" class="form-control" placeholder="Mô tả">
                            </div>
                            <div class="text-center">
                                <button type="submit" name="add_cate_post" class="btn btn-primary">Thêm danh mục</button>
                            </div>
                        </form><!-- End No Labels Form -->

                    </div>
                </div>


            </div>
        </div>
    </section>

</main><!-- End #main -->