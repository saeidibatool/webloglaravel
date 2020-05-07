@extends('layout.layout')
@section('content')
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-heading">
                    افزودن دسته‌بندی جدید:
                </h2>
                <h3 class="section-subheading text-muted">
                  برای ثبت دسته‌بندی جدید از فرم زیر استفاده کنید
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
               <form method="post" action="{{route('categories.store')}}">
                 {{csrf_field()}}

                   <div class="form-group">
                    <label for="exampleInputPassword1">عنوان دسته بندی</label>
                    <input type="text" name="title" class="form-control" id="exampleInputPassword1">
                    <?php if ($errors->has('title')): ?>
                      <p style="color:red">{{$errors->first('title')}}</p>
                    <?php endif; ?>
                  </div>

                  <button type="submit" class="btn btn-primary">ثبت</button>
                  <button type="reset" class="btn btn-danger">انصراف</button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
