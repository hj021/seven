<nav class="navbar py-4 navbar-expand-lg navbar-dark navbar-back">
    <div class="container">

        <a class="navbar-brand" href="#">بوم نقش پرداز</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

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
                    <a class="nav-link" href="#"><img class="img-fluid" style="width: 20px;" src="{{ asset('img/user.png') }}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img class="img-fluid" style="width: 20px;" src="{{ asset('img/search.png') }}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img class="img-fluid" style="width: 20px;" src="{{ asset('img/basket.png') }}" alt=""></a>
                </li>
            </ul>
        </div>




    </div>
</nav>

<div class="position-relative">
    <div class="drop-content">
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

<div class="slider-container">
    <div class="slider-control left inactive"></div>
    <div class="slider-control right"></div>
    <ul class="slider-pagi"></ul>
    <div class="slider">

        <div class="slide slide-0 active">
            <div class="slide__bg"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405"/>
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading">Project name 1</h2>
                    <p class="slide__text-desc">Lornihil animi facere, doloremque voluptate tempore quia.</p>
                    <a href="http://hkmbhutto.wix.com/abdulrasheed"
                       class="slide__text-link">Project link</a>
                </div>
            </div>
        </div>

        <div class="slide slide-1 ">
            <div class="slide__bg" style="background-image: url({{ asset('img/slide.png') }});"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405"/>
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading">Project name 2</h2>
                    <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio
                        veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil
                        animi facere, doloremque voluptate tempore quia.</p>
                    <a href="http://hkmbhutto.wix.com/abdulrasheed"
                       class="slide__text-link">Project link</a>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    let menu = document.getElementsByClassName('drop-content')[0];
    dropMenu.onmouseover = function(){
        menu.style.opacity = '1';
    }
    menu.onmouseleave = function(){
        let menu = document.getElementsByClassName('drop-content')[0];
        menu.style.opacity = '0';
    }
</script>
