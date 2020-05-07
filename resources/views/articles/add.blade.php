@extends('layout.layout')
@section('content')
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-heading">
                    افزودن مقاله جدید :
                </h2>
                <h3 class="section-subheading text-muted">
                    برای ثبت مقاله جدید از فرم زیر استفاده نمایید
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
               <form method="post" action="/store">
                 {{csrf_field()}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">عنوان مقاله</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="عنوان مقاله را وارد کنید">
                    <?php if ($errors->has('title')): ?>
                      <p style="color:red">{{$errors->first('title')}}</p>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">متن کوتاه</label>
                    <input type="text" name="demo" class="form-control" id="exampleInputPassword1" placeholder="بخش اولیه مقاله را وارد کنید">
                    <?php if ($errors->has('demo')): ?>
                      <p style="color:red">{{$errors->first('demo')}}</p>
                    <?php endif; ?>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">دسته بندی مقاله</label>
                    <select class="form-control" name="category[]" multiple>
                      <?php foreach ($categories as $category): ?>
                        <option value="{{$category->id}}">{{$category->title}}</option>
                      <?php endforeach; ?>

                    </select>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">متن کامل مقاله</label>
                    <textarea name="text" class="form-control" rows="5"></textarea>
                    <?php if ($errors->has('text')): ?>
                      <p style="color:red">{{$errors->first('text')}}</p>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">تصویر مقاله</label>
                    <input type="file" id="exampleInputFile">
                  </div>
                  <button type="submit" class="btn btn-primary">ثبت</button>
                  <button type="reset" class="btn btn-danger">انصراف</button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
