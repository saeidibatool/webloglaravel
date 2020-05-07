@extends('layout.layout')
@section('content')
<section id="portfolio" class="bg-light-gray">
 <div class="container">
     <div class="row">
         <div class="col-lg-12">
             <h2 class="section-heading">
                 {{$article->title}}
             </h2>
             <h3 class="section-subheading text-muted">
                 نویسنده : {{$article->user->name}}  | در تاریخ : {{Verta::instance($article->created_at)->format('Y-n-j')}}|دسته بندی : شماره ۱
             </h3>
        </div>
     </div>
     <div class="row">
         <div class="col-md-12 col-sm-6 portfolio-item">
              <img src="{{$article->image}}" class="img-responsive blog-detail" alt="portfolio-Pic" style="width:500px">
             <p>
                 {{$article->demo}}
             </p>
             <p>
                 {{$article->text}}
             </p>


         </div>
         </div>
         <div class="row">
         <div class="col-lg-12">
           <?php if (Auth::check()): ?>
             <h3 class="section-subheading text-muted">
                 نظر خود را در رابطه با این مقاله برای ما بنویسیسد:
             </h3>
          <?php else: ?>
            <h3 class="section-subheading text-muted">
                برای ثبت نظر وارد شوید
                <a href="{{route('register')}}" class="btn btn-primary">ثبت نام</a>
                <a href="{{route('login')}}" class="btn btn-success">ورود اعضا</a>
            </h3>
          <?php endif; ?>
         </div>
     </div>
         <div class="row">
             <div class="col-lg-12">
               <?php if (Auth::check()): ?>
                <form>
                    <div class="form-group">
                     <label for="exampleInputPassword1">متن نظر شما</label>
                     <textarea class="form-control" rows="5"></textarea>
                   </div>

                   <button type="submit" class="btn btn-primary">ثبت</button>
                   <button type="reset" class="btn btn-danger">انصراف</button>
                 </form>
               <?php endif; ?>
             </div>

     </div>

     <!-- </div> -->
 </div>
</section>


<section class="comment">
<div class="container">
    <div class="row">

      <?php foreach ($article->comment as $comment): ?>
        <div class="col-md-12 col-sm-6  comments">
            <img src="/img/user.png" width="30" class="userComment">
            <h5>{{$comment->user->name}}</h5>
        <p>
          {{$comment->comment}}
        </p>
        </div>
      <?php endforeach; ?>



    </div>
</div>
</section>
@endsection
