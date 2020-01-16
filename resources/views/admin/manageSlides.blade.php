@extends('admin.master')

@section('title')
    مدیریت اسلاید ها
@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                @if(isset($message))
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <span class="alert alert-info ">{{ $message }}</span>
                            </div>
                        </div>
                    </div>
                @endif

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-2 text-bold">افزودن اسلاید</h5>

                                <p class="card-text">
                                <form action="{{ url('manager/slides') }}" method="post" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf

                                <b>نام محصول : </b>
                                <select name="products" class="form-control">
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->title }}</option>
                                        @endforeach
                                    </select>
                                    <textarea name="description" class="my-2 form-control">توضیحات اسلاید ...</textarea>
                                    <input type="file" name="img" class="my-2 form-control">
                                    <input type="submit" class="btn btn-primary" value="افزودن">
                                </form>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-2 text-bold"></h5>

                                <p class="card-text">
                                <p class="dropdown-divider"></p>
                                <table class="table table-bordered table table-hover">
                                    @forelse($slides as $slide)
                                        <tr>
                                            <td class="col-12"><img class="col-10 col-lg-3 img-fluid" src="{{ asset('upload/'.$slide->img) }}"></td>
                                            <td><a href="{{ url('manager/slides/delete/'.$slide->id) }}">حذف</a></td>
                                        </tr>
                                    @empty
                                        <p>هیچ اسلاید یافت نشد</p>
                                    @endforelse
                                </table>
                                </p>

                            </div>
                        </div>
                    </div>
            <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection

