@extends('layouts.auth')
@section('title')
    {{ trans('Eewgister') }}
@endsection
@section ('content')
<div class="card">
  <div class="card-body register-card-body">
    <p class="login-box-msg">Register a new membership</p>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
        </div>
        <br>
        @endif

        <form id="customerform" method="post" action="{{url('registerProcess')}}">
          @csrf
          <div>   <span class="text-danger">{{ $errors->first('first_name') }}</span>  </div>
      <div class="input-group mb-3">
        <input type="text" name="first_name" class="form-control" placeholder="First Name">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
        </div>
        </div>

      </div>
      <div>     <span class="text-danger">{{ $errors->first('email') }}</span>  </div>
      <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>

          </div>
        </div>
      </div>
        <div>  <span class="text-danger">{{ $errors->first('password') }}</span> </div>
      <div class="input-group mb-3">
        <input type="password" name="password"  class="form-control" placeholder="Please Enter Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div>  <span class="text-danger">{{ $errors->first('phone') }}</span></div>
      <div class="input-group mb-3">
        <input type="text" name='phone' class="form-control" placeholder="Inset Phone">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>

          </div>
        </div>
      </div>
            <!-- /.col -->
        <div class="col-6">
          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
        <!-- /.col -->
    </form>

    <a href="login.html" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div><!-- /.card -->
</div>

@endsection
