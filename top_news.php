<html>
<head runat="server">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<title>Six News</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="js/bootstrap.min.js">
<link type="text/css" rel="stylesheet" href="Dinhdang.css"/>
<link type="text/css" rel="stylesheet" href="Dinhdang1.css" />
<script type="text/javascript" src="https://cdn.ckeditor.com/4.10.1/full-all/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link type="text/css" href="style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="dinh-dang.css" />
<style type="text/css">
.top-news {
    position: relative;
    width: 100%;
    padding: 30px 0 0 0;
}

.top-news .tn-img {
    position: relative;
    overflow: hidden;
}

.top-news .tn-img img {
    width: 100%;
    
}

.top-news .tn-img:hover img {
    filter: blur(3px);
    -webkit-filter: blur(3px);
}

.top-news .tn-title {
    position: absolute;
    top: 0; 
    right: 0;
    bottom: 0; 
    left: 0;
    padding: 15px 10px 15px 20px;
    background-image: linear-gradient(rgba(0, 0, 0, .0), rgba(0, 0, 0, .3), rgba(0, 0, 0, .9));
    display: flex;
    align-items: flex-end;
}

.top-news .tn-title a {
    display: block;
    width: 100%;
    color: #ffffff;
    font-size: 18px;
    font-weight: 400;
    transition: .3s;
}

.top-news .tn-left .tn-title a {
    font-size: 30px;
    font-weight: 600;
}

.top-news .tn-title a:hover {
    color: #FF6F61;
}

.top-news .tn-left {
    margin-bottom: 30px;
}

.top-news .tn-right {
    margin-bottom: 60px;
    padding: 0 30px;
}

.top-news .tn-right .col-md-6 {
    padding: 0;
}

.top-news .slick-prev,
.top-news .slick-next {
    width: 28px;
    height: 28px;
    z-index: 1;
    transition: .5s;
    color: #ffffff;
    background: #000000;
    border-radius: 4px;
}

.top-news .slick-prev {
    left: 30px;
}

.top-news .slick-next {
    right: 30px;
}

.top-news .slick-prev:hover,
.top-news .slick-prev:focus,
.top-news .slick-next:hover,
.top-news .slick-next:focus {
    color: #ffffff;
    background: #FF6F61;
}

.top-news .slick-prev::before,
.top-news .slick-next::before {
    font-family: "Font Awesome 5 Free";
    font-size: 18px;
    font-weight: 900;
    color: #ffffff;
}

.top-news .slick-prev::before {
    content: "\f104";
}

.top-news .slick-next::before {
    content: "\f105";
}
</style>
</head>
<body>
<div class="top-news" >
            <div class="container" style="border-bottom: 3px double black;">
                <div class="row">
                    <div class="col-md-9 tn-left">
                        <div class="row tn-slider">
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/home1.jpg" />
                                    <div class="tn-title">
                                        <a href="">Vi???t Nam lu??n coi Nh???t B???n l?? m???t trong nh???ng ?????i t??c quan tr???ng h??ng ?????u</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/home2jpg.jpg" />
                                    <div class="tn-title">
                                        <a  href="">C??c n?????c h??? tr??? Vi???t Nam 1.028 t??? ?????ng trang thi???t b??? v?? v???t t?? y t???</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/home3.jpg" />
                                    <div class="tn-title">
                                        <a  href="">T???p trung t???m so??t F0 t???i c??c khu nh?? tr??? ??? ?????ng Nai</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 tn-right">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tn-img">
                                    <img src="img/home4.jpg" />
                                    <div class="tn-title">
                                        <a href="" style="font-size: 12px;">Qu???n l?? l???ng l???o, Ki??n Giang t??? t???nh ???xanh??? th??nh ???????????</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="tn-img">
                                    <img src="img/home5.jpg" />
                                    <div class="tn-title">
                                        <a href="" style="font-size: 12px;">T??? 13/9, nhi???u ?????a ph????ng ??? Ngh??? An chuy???n sang th???c hi???n Ch??? th??? 15</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="tn-img">
                                    <img src="img/home6.jpg" />
                                    <div class="tn-title">
                                        <a href="" style="font-size: 12px;">Qu???n ?????u ti??n c???a H?? N???i ho??n th??nh ti??m vaccine cho ng?????i t??? 18 tu???i tr??? l??n</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="tn-img">
                                    <img src="img/home7.jpeg" />
                                    <div class="tn-title">
                                        <a href="" style="font-size: 12px;">?????i tuy???n futsal Vi???t Nam l??n ph????ng ??n ?????i ?????u Brazil</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="container">

<div class="row">