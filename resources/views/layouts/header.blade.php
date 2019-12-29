<div id="GetOfferModal" class="modal fade modal-get-offer" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <div class="col-10"></div>
                <h3>ورود</h3>
            </div>
            <div class="modal-body">
                <form class="form" role="form" autocomplete="off" id="formGetOffer" novalidate="" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" id="uname1" required=""
                               placeholder="نام کاربری">
                        <div class="invalid-feedback">لطفا این گزینه را وارد نمایید.</div>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="pwd1" required="" placeholder="رمز">
                        <div class="invalid-feedback">وارد کردن پسور الزامی است.</div>
                    </div>
                    <a href="" class="text-muted py-2 d-block">ثبت نام</a>
                    <a href="" class="text-muted py-2 d-block">فراموشی رمز عبور</a>
                    <div class="form-group py-4">
                        <button type="submit" class="btn btn-light" id="btnGetOffer">ورود</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="searchBox" class="d-none justify-content-center align-content-center align-items-center w-100 h-100 fixed-top">
    <div id="searchBack" class="position-absolute w-100 h-100" style="background-color: rgba(50,50,50,0.9)"></div>
    <form action="" method="get" class="col-10 col-md-6 ">
        @csrf
        <div class="input-group">
            <div class="border-dark border input-group-prepend">
                <a href="">
                    <div class="bg-dark p-2"><img src="{{ asset('img/search.png') }}" alt="search"></div>
                </a>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="جست و جو ...">
        </div>
    </form>
</div>

<nav class="navbar py-4 navbar-expand-lg navbar-dark @isset($header) navbar-back @else dark-back @endif">
    <div class="container">

        <a class="navbar-brand" href="#">بوم نقش پرداز</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropMenu" href="#">
                        محصولات
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">صفحه خانه </a>
                </li>
                <div class="col-1"></div>
                <li class="nav-item">
                    <a href="#GetOfferModal" role="button" class="nav-link" data-toggle="modal">
                        <img class="img-fluid"
                             style="width: 20px;"
                             src="{{ asset('img/user.png') }}"
                             alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a id="searchBtn" class="nav-link" href="#"><img class="img-fluid" style="width: 20px;"
                                                                     src="{{ asset('img/search.png') }}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img class="img-fluid" style="width: 20px;"
                                                      src="{{ asset('img/basket.png') }}" alt="">
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<div class="position-relative">
    <div class="drop-content position-fixed" style="background-color: @isset($header) rgba(34, 34, 34, 0.8) @else #222 @endif">
        <div class="container">
            <div class="d-flex justify-content-around text-gray" style="margin-top:100px;">
                <div class="col-3">
                    <span>عنوان</span>
                    <div class="dropdown-divider"></div>
                    <a href="#">اول</a>
                </div>
                <div class="col-3">
                    <span>عنوان</span>
                    <div class="dropdown-divider"></div>
                    <a href="#">اول</a>
                </div>
                <div class="col-3">
                    <span>عنوان</span>
                    <div class="dropdown-divider"></div>
                    <a href="#">اول</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    /*navigation*/
    let nav = document.getElementsByClassName('navbar')[0];
    window.onscroll = function(){
        if(document.documentElement.scrollTop >= 10 || document.body.scrollTop >= 10)
        {
            nav.classList.remove('py-4');
            nav.classList.add('py-2');
        }
        else
        {
            nav.classList.add('py-4');
            nav.classList.remove('py-2');
        }
    }
    /**/
    searchBtn.onclick = function () {
        if (searchBox.classList.contains('d-none')) {
            searchBox.classList.remove('d-none');
            searchBox.classList.add('d-flex');
        }
    };
    searchBack.onclick = function () {
        searchBox.classList.add('d-none');
        searchBox.classList.remove('d-flex');
    };

    let menu = document.getElementsByClassName('drop-content')[0];
    dropMenu.onmouseover = function () {
        menu.style.display = 'block';
        menu.style.opacity = '1';
    };
    menu.onmouseleave = function () {
        let menu = document.getElementsByClassName('drop-content')[0];
        menu.style.display = 'none';
        menu.style.opacity = '0';
    };

</script>
