<link rel="stylesheet" href="public/build/css/contact.css">
<!-- Bootstrap -->
<link href="public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<script src="public/build/js/validate.js"></script>
<div class="container">
    <div style="margin-top:20px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15673.639009712078!2d106.79655480892333!3d10.856406769165929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527726d97057f%3A0x3d5f5a2cd75f494a!2zS2h1IEPDtG5nIE5naOG7hyBDYW8gUXXhuq1uIDk!5e0!3m2!1svi!2s!4v1713201980509!5m2!1svi!2s" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact">
        <div class="left" style="display: block; padding: 100px 0 0 75px;">
            <h2>
                Liên hệ với chúng tôi
            </h2>
            <div class="follow_us_contents" style="width: 340px; margin-top: 50px; margin-left: 80px;">
                <h2 style="color:red">Follow Us</h2>
                <ul class="social d-flex flex-row">
                    <li style="list-style: none;"><a href="#" style=""><i class="fa-brands fa-facebook"></i></a></li>
                    <li style="list-style: none;"><a href="#" style="margin-left:20px;"><i class="fa-brands fa-twitter"></i></a></li>
                    <li style="list-style: none;"><a href="#" style="margin-left:20px;"><i class="fa-brands fa-google"></i></a></li>
                    <li style="list-style: none;"><a href="#" style="margin-left:20px;"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <div class="form">
                <form action="" method="post" id="form__submit">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Họ và tên</label>
                                <input id="name" type="text" class="form-control" name="name">
                                <small></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Giới tính</label>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="male"> Nam: <input id="male" type="radio" checked value="2"
                                                name="sex"></label>
                                    </div>
                                    <div class="col-6">
                                        <label for="female"> Nữ: <input id="female" type="radio" value="1"
                                                name="sex"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <input id="phone" type="text" class="form-control" name="phoneNumber">
                                <small></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="text" class="form-control" name="email" required=""
                                    pattern="[^@\s]+@[^@\s]+\.[^@\s]+">
                                <small></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <input id="address" type="text" class="form-control" name="address">
                                <small></small>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="contents">Nội dung</label>
                                <textarea id="contents" type="text" class="form-control" name="contents"></textarea>
                                <small></small>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Gửi</button>
                            </div>
                            <small id="success" style="color: green"> </small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
validator({
    form: "#form__submit",
    formGroup: ".form-group",
    error: "small",
    rules: [
        validator.isRequired('#name'),
        validator.isRequired('#phone'),
        validator.isRequired('#email'),
        validator.isEmail('#email'),
        validator.isRequired('#address'),
        validator.isRequired('#contents'),
        validator.isPhone('#phone'),
    ],
    onsubmit: (data) => {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'contact/sendContact');
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function(e) {
            if (e.target.status == 200) {
                // const data = JSON.parse(this.responseText);
                document.getElementById('success').innerText = "Gửi thành công";
                setTimeout(() => {
                    document.getElementById('success').innerText = "";
                }, 2000);
                document.getElementById('form__submit').reset();
            }

        }
        xhr.send(`data=${JSON.stringify(data)}`)
    }
});
</script>