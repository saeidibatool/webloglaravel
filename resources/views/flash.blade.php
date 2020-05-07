@extends('layout.layout')

@section('content')
<?php if (Session::has('message')): ?>
  <!-- <div class="alert alert-info">
    {{Session::get('status')}}

  </div> -->

  <div class="alert alert-{{Session::get('alertClass')}}">
    {{Session::get('message')}}

  </div>

<?php endif; ?>
@endsection
