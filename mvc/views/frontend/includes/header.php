<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <base href="http://localhost/shopping/">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="public/build/css/shopping.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="name__shop">
        <div class="container">
            <div class="row">
                <div class="box">
                    <a href="">
                        <h3>ECOMMERCE</h3>
                    </a>
                </div>
                <div class="box">
                    <div class="box__search">
                        <input type="search" class="search__input" id="search__input" placeholder="Nhập từ khóa ...">
                        <button  style="background: rgb(5 118 194);" id="search"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- nagivation  -->
    <section class="nagivation">
        <div class="container">
            <div class="box menu">
                <nav>
                    <?php if($data_index['menu'] !== NULL){?>
                    <ul>
                        <?php foreach($data_index['menu'] as $key => $val){?>
                        <li><a
                                href="<?= isset($val['children']) && $val['children'] != null ? 'javascript:void(0)': $val['url'] ?>"><?= $val['name'] ?></a>
                            <?php if($val['children'] != null){?>
                            <ul class="nav__children">
                                <?php  foreach($val['children'] as $val_Child){?>
                                <li><a href="<?= $val_Child['url'] ?>"><?= $val_Child['name'] ?></a></li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </nav>
            </div>
            <div class="box">
                <div class="cart">
                    <a href="javascript:void(0)" style="text-decoration: none;color:black; margin-right:20px;" class="open__cart">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="total_qty"><?= count($data_index['cart']); ?></span>
                    </a>
                    <!-- <div class="list__items_cart">
                        <?php if(isset($data_index['cart']) && $data_index !== NULL){?>
                            <?php foreach($data_index['cart'] as $key => $val){?>
                                <div class="item">
                                    <div class="image">
                                        <img src="<?= $val['image'] ?>" alt="">
                                    </div>
                                    <div class="name__product">
                                        <p><?= $val['name'] ?> </p>
                                        <p><?= number_format($val['price']) ?> đ</p>
                                    </div>
                                    <div class="quantily">
                                        <span class="qty"><?= $val['qty'] ?></span>
                                    </div>
                            </div>
                            <?php } ?>
                        <?php } ?>
                    </div> -->
                </div>
            </div>
            <div class="button_sign">
                        <?php if(isset($_SESSION['user']) && $data_index['user'] !== null) {?>
                        <div class="avatar" style="display: flex; margin-left:10px;">
                            <div class="images">
                                <i class="fa-solid fa-user" style="position:absolute; top:25%;"></i>
                            </div>
                            <div class="selection__info">
                                <div><a href="thong-tin-chung.html" target="_blank" style="text-decoration: none;">Thông tin chung</a></div>
                                <div><a href="doi-mat-khau.html" target="_blank" style="text-decoration: none;">Đổi mật khẩu</a></div>
                                <div>
                                    <a href="dang-xuat.html" style="text-decoration: none;">Đăng xuất</a>
                                </div>
                            </div>
                        </div>
                        <?= ($data_index['user']['username']) ?>

                        <?php } else {?>
                        <a href="/shopping/auth/signup" class="register" style="text-decoration: none;">Đăng ký</a>
                        <a href="/shopping/auth/signin" class="login" style="text-decoration: none;color:black">Đăng nhập</a>
                        <?php } ?>
                    </div>
        </div>
    </section>
    <script>
    document.querySelector('#search__input').addEventListener("keyup", (e) => {
        const value = e.target.value;
    })
    document.querySelector('#search__input').addEventListener("click", (e) => {
        const value = e.target.value;

    })
    </script>