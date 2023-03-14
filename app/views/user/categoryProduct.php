<div class="clear"></div>
<section>
    <?php
    $title_name = "Chưa có sản phẩm";
    foreach ($category_id as $key => $proname) {
        if (isset($proname['title_category'])) {
            $title_name = $proname['title_category'];
        }
    };
    ?>
    <div class="bg_in">
        <div class="breadcrumbs">

            <ol itemscope itemtype="http://schema.org/BreadcrumbList">

                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

                    <a itemprop="item" href="<?= BASE_URL ?>">

                        <span itemprop="name">Trang chủ</span></a>

                    <meta itemprop="position" content="1" />

                </li>

                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

                    <a itemprop="item" href="sanpham.php">

                        <span itemprop="name"><?=$title_name?></span></a>

                    <meta itemprop="position" content="2" />

                </li>


            </ol>

        </div><!-- end breadcrumbs -->

        <div class="module_pro_all">
            <div class="box-title">
                <div class="title-bar">
                    <h1>Danh mục : <?=$title_name?></h1>
                    <a class="read_more" href="sanpham.php">
                        Xem thêm
                    </a>
                </div>
            </div><!-- end box title -->

            <div class="pro_all_gird">
                <div class="girds_all list_all_other_page ">

                    <?php
                    foreach ($category_id as $key => $pro) {
                    ?>
                        <div class="grids">
                            <div class="grids_in">
                                <div class="content">
                                    <div class="img-right-pro">

                                        <a href="<?= BASE_URL ?>/userproduct/detailProduct/<?=$pro['id_product']?>">
                                            <img class="lazy img-pro content-image" src="<?= ROOT ?>/uploads/product/<?= $pro['img_product'] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                                        </a>

                                        <div class="content-overlay"></div>
                                        <div class="content-details fadeIn-top">
                                            <?= $pro['desc_product'] ?>

                                        </div>
                                    </div>
                                    <div class="name-pro-right">
                                        <a href="<?= BASE_URL ?>/userproduct/detailProduct/<?=$pro['id_product']?>">
                                            <h3><?= $pro['title_product'] ?></h3>
                                        </a>
                                    </div>
                                    <div class="add_card">
                                        <a onclick="return giohang(579);">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                        </a>
                                    </div>
                                    <div class="price_old_new">
                                        <div class="price">
                                            <span class="news_price"><?= number_format($pro['price_product'], 0, ',', '.') . 'đ' ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

</section>