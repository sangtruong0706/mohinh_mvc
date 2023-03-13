<section>
    <div class="bg_in">
        <div class="wrapper_all_main">
            <div class="wrapper_all_main_right">
                <!--breadcrumbs-->
                <div class="breadcrumbs">
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href=".">
                                <span itemprop="name">Trang chủ</span></a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <span itemprop="item">
                                <strong itemprop="name">
                                    Sản phẩm
                                </strong>
                            </span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
                <!--breadcrumbs-->

                <div class="content_page">
                    <div class="box-title">
                        <div class="title-bar">
                            <h1>Tin tức</h1>
                        </div>
                    </div>
                    <div class="content_text">
                        <ul class="list_ul">
                            <?php 
                                foreach ($all_post as $key=>$post)
                                {
                            ?>
                                    <li class="lists">
                                        <div class="img-list">
                                            <a href="<?= BASE_URL ?>/userpost/detailPost/<?=$post['id_post']?>">
                                                <img src="<?= ROOT ?>/uploads/post/<?=$post['img_post']?>" alt="So sánh công nghệ hiển thị 3LCD và DLP" class="img-list-in">
                                            </a>
                                        </div>
                                        <div class="content-list">
                                            <div class="content-list_inm">
                                                <div class="title-list">
                                                    <h3>
                                                        <a href="<?= BASE_URL ?>/userpost/detailPost/<?=$post['id_post']?>"><?=$post['title_post']?></a>
                                                    </h3>
                                                    <p class="list-news-status-p">
                                                        <a title="Thiết bị văn phòng">Thiết bị văn phòng</a> | <a title="26-12-2017">26-12-2017</a>
                                                    </p>
                                                </div>
                                                <div class="content-list-in">
                                                    <p><span style="font-size:16px"><?=$post['content_post']?></span></p>
                                                </div>
                                                <div class="xt"><a href="<?= BASE_URL ?>/userpost/detailPost/<?=$post['id_post']?>">Xem thêm</a></div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                            <?php
                                }
                            ?>

                        </ul>
                        <div class="clear"></div>
                        <div class="wp_page">
                            <div class="page">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="clear"></div>
        </div>
    </div>
</section>