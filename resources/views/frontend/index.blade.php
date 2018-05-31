<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
{{-- nav --}}
<div class="container-fluid nav-section py-3 d-none d-md-block">
    <div class="container ">
        <div class="row">
            <div class="col-lg-3 col-md-4 nav-logo col-sm-6">
                <a href="#" class="navbar-brand p-0">
                    <img src="{{url('/img/logo2.png')}}" width="220" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-4 nav-search d-none d-md-block">
                <div class="input-group ">
                    <a class="btn  search-bar-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">请输入城市</a>
                        <a class="dropdown-item" href="#">休斯敦</a>
                        <a class="dropdown-item" href="#">纽约</a>
                        <a class="dropdown-item" href="#">洛杉矶</a>
                        <a class="dropdown-item" href="#">芝加哥</a>
                    </div>
                    <input type="text" placeholder="请选择城市名称" class="form-control search-city" aria-label="Text input with dropdown button">
                    <input type="text" placeholder="请输入商品" class="form-control search-item" name="search-zip" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-search" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <div class="d-none d-lg-block text-center mt-1">
                    <a href="#" class="mx-2 my-1 tag-a">手机</a>
                    <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                    <a href="#" class="mx-2 my-1 tag-a">美妆</a>
                    <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
                    <a href="#" class="mx-2 my-1 tag-a">手机</a>
                    <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                    <a href="#" class="mx-2 my-1 tag-a">箱包</a>
                    <a href="#" class="mx-2 my-1 tag-a">其他</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <div class="container d-flex justify-content-center">
                    <a href="#" class="navbar-brand p-0 a-icon">
                        <i class="fas fa-sign-in-alt fa-2x"></i><br>登录
                    </a>&nbsp;
                    <a href="#" class="navbar-brand p-0 a-icon">
                        <i class="fas fa-building fa-2x"></i><br>注册
                    </a>&nbsp;
                    <a href="#" class="navbar-brand p-0 a-icon">
                        <i class="far fa-mobile fa-2x"></i><br>APP
                    </a>&nbsp;
                    <a href="#" class="navbar-brand p-0 a-icon">
                        <i class="fas fa-building fa-2x"></i><br>社区
                    </a>&nbsp;
                    <a href="#" class="navbar-brand p-0 a-icon">
                        <i class="fas fa-building fa-2x"></i><br>关于
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-1">
    <div class="row">
        <div class="col-md-6 nav-btn-section">
            <a href="#" class="btn btn-main-round-light">转寄</a>
            <a href="#" class="btn btn-main-round-light">小铺</a>
            <a href="#" class="btn btn-main-round-light">折扣</a>
            <a href="#" class="btn btn-main-round-light">社区</a>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>
<div class="nav-section-sm d-md-none d-sm-block d-xs-block">
    <div class="row ">
        <div class="col col-sm-3 text-center">
            <a href="">
                <i class="fas fa-home fa-4x"></i>
            </a>
        </div>
        <div class="col col-sm-3 text-center">
            <a href="">
                <i class="fas fa-home fa-4x"></i>
            </a>
        </div>
        <div class="col col-sm-3 text-center">
            <a href="">
                <i class="fas fa-home fa-4x"></i>
            </a>
        </div>
        <div class="col col-sm-3 text-center">
            <a href="">
                <i class="fas fa-home fa-4x"></i>
            </a>
        </div>
    </div>
</div>
<div class="bg-danger d-md-none d-sm-block d-xs-block text-center nav-sm">
    <img class="nav-logo-sm" src="{{url('/img/logo.png')}}" alt="">
</div>
{{-- slide --}}
<div class="container slide-long d-none d-md-block">
    <div class="row my-1">
        <div class="col-md-6 pr-1">
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner">
                    <div id="img-slide-div" class="carousel-item active ">
                        <img class="slide-long-img img-fluid" src="{{asset('/img/long1.png')}}" alt="First slide">
                    </div>
                    <div id="img-slide-div" class="carousel-item ">
                        <img class="slide-long-img img-fluid" src="{{asset('/img/long2.png')}}" alt="Second slide">
                    </div>
                    <div id="img-slide-div" class="carousel-item ">
                        <img class="slide-long-img img-fluid" src="{{asset('/img/long3.png')}}" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 pl-1">
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner">
                    <div id="img-slide-div" class="carousel-item active ">
                        <img class="slide-long-img img-fluid" src="{{asset('/img/long1.png')}}" alt="First slide">
                    </div>
                    <div id="img-slide-div" class="carousel-item ">
                        <img class="slide-long-img img-fluid" src="{{asset('/img/long2.png')}}" alt="Second slide">
                    </div>
                    <div id="img-slide-div" class="carousel-item ">
                        <img class="slide-long-img img-fluid" src="{{asset('/img/long3.png')}}" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-1">
        <div class="col-md-6 pr-1">
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner">
                    <div id="img-slide-div" class="carousel-item active ">
                        <img class="slide-long-img img-fluid" src="{{asset('/img/long1.png')}}" alt="First slide">
                    </div>
                    <div id="img-slide-div" class="carousel-item ">
                        <img class="slide-long-img img-fluid" src="{{asset('/img/long2.png')}}" alt="Second slide">
                    </div>
                    <div id="img-slide-div" class="carousel-item ">
                        <img class="slide-long-img img-fluid" src="{{asset('/img/long3.png')}}" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 pl-1">
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner">
                    <div id="img-slide-div" class="carousel-item active ">
                        <img class="slide-long-img img-fluid" src="{{asset('/img/long1.png')}}" alt="First slide">
                    </div>
                    <div id="img-slide-div" class="carousel-item ">
                        <img class="slide-long-img img-fluid" src="{{asset('/img/long2.png')}}" alt="Second slide">
                    </div>
                    <div id="img-slide-div" class="carousel-item ">
                        <img class="slide-long-img img-fluid" src="{{asset('/img/long3.png')}}" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- adv-top --}}
<div class="container adv-top-section my-3 py-2 px-4">
    <div class="row my-1">
        <div class="col-md-6 px-1">
            <a href="" class="btn-main-outline-round-light adv-btn-hot ">热门推荐</a>
            <a href="" class="btn-main-outline-round-light adv-btn-like ">最多关注</a>
        </div>
        <div class="col-md-6 px-1">
            <nav aria-label="Page navigation example ">
                <ul class="pagination mb-0 float-right">
                    <li class="page-item">
                        <a class="page-link" href="#carouselExampleControls" aria-label="Previous" data-slide="prev">
                            <i class="fas fa-arrow-circle-left " style="font-size: 20px;"></i>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#carouselExampleControls" aria-label="Next" data-slide="next">
                            <i class="fas fa-arrow-circle-right" style="font-size: 20px;"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row adv-top-hot">
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="row mx-0">
                            <div class="col-md-2">
                                <div class="card">
                                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                    <div class="card-body p-1">
                                        <p class=" adv-card-price">99元包邮（99元定金） </p>
                                        <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                    </div>
                                    <i class="fas fa-cut adv-cut"></i>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card">
                                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                    <div class="card-body p-1">
                                        <p class=" adv-card-price">99元包邮（99元定金） </p>
                                        <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                    </div>
                                    <i class="fas fa-cut fa-2x adv-cut"></i>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card">
                                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                    <div class="card-body p-1">
                                        <p class=" adv-card-price">99元包邮（99元定金） </p>
                                        <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                    </div>
                                    <i class="fas fa-cut fa-2x adv-cut"></i>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card">
                                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                    <div class="card-body p-1">
                                        <p class=" adv-card-price">99元包邮（99元定金） </p>
                                        <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                    </div>
                                    <i class="fas fa-cut fa-2x adv-cut"></i>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card">
                                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                    <div class="card-body p-1">
                                        <p class=" adv-card-price">99元包邮（99元定金） </p>
                                        <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                    </div>
                                    <i class="fas fa-cut fa-2x adv-cut"></i>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card">
                                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                    <div class="card-body p-1">
                                        <p class=" adv-card-price">99元包邮（99元定金） </p>
                                        <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                    </div>
                                    <i class="fas fa-cut fa-2x adv-cut"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mx-0">
                            <div class="col-md-2">
                                <div class="card">
                                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                    <div class="card-body p-1">
                                        <p class=" adv-card-price">99元包邮（99元定金） </p>
                                        <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                    </div>
                                    <i class="fas fa-cut fa-2x adv-cut"></i>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card">
                                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                    <div class="card-body p-1">
                                        <p class=" adv-card-price">99元包邮（99元定金） </p>
                                        <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                    </div>
                                    <i class="fas fa-cut fa-2x adv-cut"></i>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card">
                                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                    <div class="card-body p-1">
                                        <p class=" adv-card-price">99元包邮（99元定金） </p>
                                        <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                    </div>
                                    <i class="fas fa-cut fa-2x adv-cut"></i>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card">
                                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                    <div class="card-body p-1">
                                        <p class=" adv-card-price">99元包邮（99元定金） </p>
                                        <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                    </div>
                                    <i class="fas fa-cut fa-2x adv-cut"></i>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card">
                                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                    <div class="card-body p-1">
                                        <p class=" adv-card-price">99元包邮（99元定金） </p>
                                        <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                    </div>
                                    <i class="fas fa-cut fa-2x adv-cut"></i>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card">
                                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                    <div class="card-body p-1">
                                        <p class=" adv-card-price">99元包邮（99元定金） </p>
                                        <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                    </div>
                                    <i class="fas fa-cut fa-2x adv-cut"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="container ">
            <div class="d-flex justify-content-end">
                <nav aria-label="Page navigation example ">
                    <ul class="pagination mb-0">
                        <li class="page-item">
                            <a class="page-link" href="#carouselExampleControls" aria-label="Previous" data-slide="prev">
                                <i class="fas fa-arrow-circle-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#carouselExampleControls" aria-label="Next" data-slide="next">
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>--}}
    </div>
    <div class="row adv-top-like">
        <div class="row">
            <div class="col-md-2">
                <div class="card">
                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quis!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quis!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quis!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quis!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quis!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quis!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- card vertical --}}
<div class="container my-3 card-vertical-section">
    <div class="card-vertical-main p-3">
        <div class="row card-main-header">
            <div class="col-md-4 text-left">
                <a href="">
                    <h3 class="mb-3 ">每日推荐<i class="fas fa-caret-down"></i></h3>
                </a>
            </div>
            <div class="col-md-8 text-right d-none d-md-block">
                <a href="#" class="mx-2 my-1 tag-a">手机</a>
                <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                <a href="#" class="mx-2 my-1 tag-a">美妆</a>
                <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
                <a href="#" class="mx-2 my-1 tag-a">保健品</a>
                <a href="#" class="mx-2 my-1 tag-a">手机</a>
                <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                <a href="#" class="mx-2 my-1 tag-a">美妆</a>
                <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
                <a href="#" class="mx-2 my-1 tag-a">保健品</a>
            </div>
        </div>
        <div class="row card-vertical-main-row">
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row card-vertical-main-row">
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row card-vertical-main-row">
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- adv-right --}}
<div class="container adv-section-right my-3">
    <div class=" adv-main">
        <div class="row">
            <div class="col-md-4 text-left">
                <a href="">
                    <h3 class="mb-3 ">精品速递<i class="fas fa-caret-down"></i></h3>
                </a>
            </div>
            <div class="col-md-8 text-right d-none d-md-block">
                <a href="#" class="mx-2 my-1 tag-a">手机</a>
                <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                <a href="#" class="mx-2 my-1 tag-a">美妆</a>
                <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
                <a href="#" class="mx-2 my-1 tag-a">保健品</a>
                <a href="#" class="mx-2 my-1 tag-a">手机</a>
                <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                <a href="#" class="mx-2 my-1 tag-a">美妆</a>
                <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
                <a href="#" class="mx-2 my-1 tag-a">保健品</a>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- card horizontal  --}}
<div class="container my-3 p-3">
    <div class="row">
        <div class="col-md-8 card-horizontal-section  ">
            <div class="row card-main-header mt-3">
                <div class="col-md-4 text-left">
                    <a href="">
                        <h3 class="mb-3 ">每日推荐<i class="fas fa-caret-down"></i></h3>
                    </a>
                </div>
                <div class="col-md-8 text-right d-none d-md-block">
                    <a href="#" class="mx-2 my-1 tag-a">手机</a>
                    <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                    <a href="#" class="mx-2 my-1 tag-a">美妆</a>
                    <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
                    <a href="#" class="mx-2 my-1 tag-a">保健品</a>
                    <a href="#" class="mx-2 my-1 tag-a">手机</a>
                    <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                    <a href="#" class="mx-2 my-1 tag-a">美妆</a>
                    <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
                </div>
            </div>
            <div class="row card-horizon-main p-3">
                <div class="card-horizon my-3">
                    <div class="row">
                        <div class="col-md-6 card-left">
                            <img class="img-fluid card-left-img " src="{{asset('/img/nike1.jpg')}}" alt="">
                        </div>
                        <div class="col-md-6 card-right card-right-new ">
                            <ul class="nav nav-tabs mr-2" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">商品详情</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">商品对比</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                    <div class="card-right-btn text-center ">
                                        <div class="text-center card-right-footer-new float-left">
                                            <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                                            <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                                            <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                                        </div>
                                        <div class="text-right mr-3">
                                            <a href="#" class="btn btn-main">点击购买</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="card-body text-center">
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    </div>
                                    <div class="card-right-btn text-center ">
                                        <a href="#" class="btn btn-main-outline">价格对比</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-horizon my-3">
                    <div class="row">
                        <div class="col-md-6 card-left">
                            <img class="img-thumbnail img-fluid card-left-img " src="{{asset('/img/nike1.jpg')}}" alt="">
                        </div>
                        <div class="col-md-6 card-right card-right-new ">
                            <ul class="nav nav-tabs mr-2" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">商品详情</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">商品对比</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                    <div class="card-right-btn text-center ">
                                        <a href="#" class="btn btn-main">点击购买</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="card-body text-center">
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    </div>
                                    <div class="card-right-btn text-center ">
                                        <a href="#" class="btn btn-main-outline">价格对比</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center card-right-footer-new ">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
                <div class="card-horizon my-3">
                    <div class="row">
                        <div class="col-md-6 card-left">
                            <img class="img-thumbnail img-fluid card-left-img " src="{{asset('/img/nike1.jpg')}}" alt="">
                        </div>
                        <div class="col-md-6 card-right card-right-new ">
                            <ul class="nav nav-tabs mr-2" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">商品详情</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">商品对比</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                    <div class="card-right-btn text-center ">
                                        <a href="#" class="btn btn-main">点击购买</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="card-body text-center">
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    </div>
                                    <div class="card-right-btn text-center ">
                                        <a href="#" class="btn btn-main-outline">价格对比</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center card-right-footer-new ">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
                <div class="card-horizon my-3">
                    <div class="row">
                        <div class="col-md-6 card-left">
                            <img class="img-thumbnail img-fluid card-left-img " src="{{asset('/img/nike1.jpg')}}" alt="">
                        </div>
                        <div class="col-md-6 card-right card-right-new ">
                            <ul class="nav nav-tabs mr-2" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">商品详情</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">商品对比</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                    <div class="card-right-btn text-center ">
                                        <a href="#" class="btn btn-main">点击购买</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="card-body text-center">
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    </div>
                                    <div class="card-right-btn text-center ">
                                        <a href="#" class="btn btn-main-outline">价格对比</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center card-right-footer-new ">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
                <div class="card-horizon my-3">
                    <div class="row">
                        <div class="col-md-6 card-left">
                            <img class="img-thumbnail img-fluid card-left-img " src="{{asset('/img/nike1.jpg')}}" alt="">
                        </div>
                        <div class="col-md-6 card-right card-right-new ">
                            <ul class="nav nav-tabs mr-2" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">商品详情</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">商品对比</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                    <div class="card-right-btn text-center ">
                                        <a href="#" class="btn btn-main">点击购买</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="card-body text-center">
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                        <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    </div>
                                    <div class="card-right-btn text-center ">
                                        <a href="#" class="btn btn-main-outline">价格对比</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center card-right-footer-new ">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 right-adv-zone">
            <div class="col right-adv-zone-detail mb-3">
                123
            </div>
            <div class="col right-adv-zone-detail mb-3">
                123
            </div>
            <div class="col right-adv-zone-detail mb-3">
                123
            </div>
            <div class="col right-adv-zone-detail mb-3">
                123
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container text-center">
        <p>
            <a href="mailto:name@email.com">关于我们 |</a>
            <a href="mailto:name@email.com">加入我们 |</a>
            <a href="mailto:name@email.com">联系我们 |</a>
            <a href="mailto:name@email.com">业务咨询 </a>
        </p>
        <p>
            Oimee@2018 All Rights Reserved
        </p>
    </div>
</footer>
<script src="/js/app.js"></script>
<script src="/js/font-awesome.js"></script>
</body>
</html>