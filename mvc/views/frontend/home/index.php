<?php require_once './mvc/views/frontend/home/layout/slide.php' ?>

<style>
    .banner
{
	width: 100%;
	margin-top: 30px;
    margin-bottom: 30px;
}
.banner_item
{
	display: -webkit-box;
	display: -moz-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	height: 265px;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
}
.banner_category
{
	height: 50px;
	background: #FFFFFF;
	min-width: 180px;
	padding-left: 25px;
	padding-right: 25px;
}
.banner_category a
{
	display: block;
	color: #1e1e27;
	text-transform: uppercase;
	font-size: 22px;
	font-weight: 600;
	text-align: center;
	line-height: 50px;
	width: 100%;
	-webkit-transition: color 0.3s ease;
	-moz-transition: color 0.3s ease;
	-ms-transition: color 0.3s ease;
	-o-transition: color 0.3s ease;
	transition: color 0.3s ease;
}
.banner_category a:hover
{
	color: #b5aec4;
}
</style>
<!-- banner -->
<div class="banner">
		<div class="container">
			<div class="row" style="display:flex;justify-content:center;">
				<div class="col-md-4" style="width: 350px;">
					<div class="banner_item align-items-center" style="background-image:url(public/build/images/phone.png)">
						<div class="banner_category">
							<a href="categories.html">Phone's</a>
						</div>
					</div>
				</div>
				<div class="col-md-4" style="width: 350px; margin: 0 30px 0 30px;">
					<div class="banner_item align-items-center" style="background-image:url(public/build/images/laptop.png)">
						<div class="banner_category">
							<a href="categories.html">Laptop's</a>
						</div>
					</div>
				</div>
				<div class="col-md-4" style="width: 350px;">
					<div class="banner_item align-items-center" style="background-image:url(public/build/images/watch.jpg)">
						<div class="banner_category">
							<a href="categories.html">Watch's</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- sản phẩm -->
<?php if(isset($product) && $product != NULL){?>
<section class="product">
    <div class="container">
        <div class="title__product">
            <h3>Sản phẩm</h3>
        </div>
        <div class="list__product">
            <?php foreach($product as $value){?>
            <div class="card">
                <div class="before box">
                    <div class="images">
                        <a href="<?= $value['slug'] ?>"><img src="<?= $value['image'] ?>" alt=""></a>
                    </div>
                    <div class="contents">
                        <a href="<?= $value['slug'] ?>">
                            <p class="title"><?= $value['name'] ?></p>
                            <p class="price">
                                <!-- <s>200.000 đ</s> -->
                                <span><?= number_format($value['price']).'đ'; ?></span>
                            </p>
                            <div class="info">
                                <?php $contents = json_decode($value['properties'],true); ?>
                                <?php if(isset($contents) && $contents != NULL){?>
                                <?php for ($i=0; $i < 5; $i++) {?>
                                <p><strong><?= $contents[$i]['name'] ?><?= $contents[$i]['name'] ? ':' : '' ?></strong>
                                    <?= $contents[$i]['value'] ?></p>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </a>
                    </div>
                    <!-- <span class="discout">10%</span> -->
                </div>
                <div class="after box">
                    <p class="title"><?= $value['name'] ?></p>
                    <div class="btn">
                        <button class="buy"><i class="fas fa-cart-plus"></i></button>
                        <a class="detail" href="javascript:void(0)"><i class="fas fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>
<?php require_once './mvc/views/frontend/home/layout/contact.php' ?>