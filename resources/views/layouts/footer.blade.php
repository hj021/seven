<footer class="footer">
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-12 col-md-4 mb-5 p-2">
                <span>موضوعات</span>
                @foreach($categories as $category)
                <a class="text-white d-block mt-3" href="{{ url('category/'.$category->name) }}">{{ $category->name }}</a>
                @endforeach
            </div>
            <div class="col-12 col-md-4 mb-5 p-2">
                <span>درباره ما</span>
                <p class="d-block mt-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, hic, inventore. A ab culpa dolore eos fugit illo magnam minus porro, quibusdam quis recusandae tempore. Atque consequatur dicta nesciunt quam?</p>
            </div>
            <div class="col-12 col-md-4 mb-5">دیگر</div>
        </div>
        <div class="container d-block py-5">
            <img src="{{ asset('img/instagram.png') }}" class="img-fluid float-right mx-2" style="width:30px;" alt="">
            <img src="{{ asset('img/telegram.png') }}" class="img-fluid float-right mx-2" style="width:30px;" alt="">
        </div>
        <div class="container d-block p-2">
            تمامی حقوق این سایت متعلق به بوم نقش پرداز می باشد
        </div>
    </div>
</footer>