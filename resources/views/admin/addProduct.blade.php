@extends('admin.master')
@section('title')
    افزودن محصول
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            {{--<h5 class="card-title mb-2 text-bold">فرم افزودن کالا</h5>--}}

                            <form action="{{ url('manager/add-product') }}" method="post" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="email"> عنوان محصول:</label>
                                    <input class="form-control" type="text" name="title" id=""><br>
                                </div>
                                <div class="form-group">
                                    <label for="color">رنگ:</label>
                                    <input class="form-control" type="text" name="color" id="color"><br>
                                </div>
                                <div class="form-group">
                                    <label for="size">اندازه:</label>
                                    <input class="form-control" type="text" name="size" id="size"><br>
                                </div>
                                <div class="form-group">
                                    <label for="artist">هنرمند:</label>
                                    <input class="form-control" type="text" name="artist" id="artist"><br>
                                </div>
                                <div class="form-group">
                                    <label for="price">قیمت:</label>
                                    <input class="form-control" type="number" name="price" id="price"><br>
                                </div>

                                <div class="form-group">
                                    <label for="description"> توضیحات </label>
                                    <textarea class="form-control" type="text" name="description" id="description"></textarea><br>
                                </div>
                                <div class="form-group">
                                    <label for="available">موجود:</label>
                                    <input class="" type="checkbox" value="1" name="available" id="available"><br>
                                </div>
                                <div class="form-group">
                                    <label for="email">تعداد</label>
                                    <input class="form-control" type="number" name="count" id=""><br>
                                </div>
                                <div class="form-group">
                                    <label for="email">تصویر:</label>
                                    <input class="form-control" type="file" name="img[]" id=""><br>
                                </div>

                                <button type="submit" name="add_product" class="btn btn-primary">افزودن محصول</button>

                        </div>
                    </div>

                    <!-- /.col-md-6 -->
                </div>

                <div class="row col-6">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-2 text-bold">موضوع</h5>
                                {!! $html ?? 'موضوعی یافت نشد' !!}
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection