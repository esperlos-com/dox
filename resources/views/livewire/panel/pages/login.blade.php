<div class="container h-100-vh">
    <div class="row align-items-center h-100-vh">
        <div class="col-lg-6 d-none p-t-b-25 d-lg-flex justify-content-center ">
            <img class="img-fluid" src="{{asset('assets/media/svg/logo.svg')}}" alt="...">
        </div>
        <div class="col-lg-4 offset-lg-1 p-t-b-25">
            <div class="d-flex align-items-center m-b-20">
                <h3 class="m-0">مدیریت داکس</h3>
            </div>
            <p>برای ادامه وارد شوید.</p>
            <form wire:submit.prevent="login">
                <div class="form-group mb-4">
                    <input wire:model.defer="email" type="text" class="form-control form-control-lg" id="exampleInputEmail1" autofocus placeholder="ایمیل">
                    @error('email')
                    <x-error-message>
                        {{$message}}
                    </x-error-message>

                    @enderror
                </div>
                <div class="form-group mb-4">
                    <input wire:model.defer="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="رمز عبور">
                    @error('password')
                    <x-error-message>
                        {{$message}}
                    </x-error-message>
                    @enderror
                </div>
                <button  class="btn btn-primary btn-lg btn-block btn-uppercase mb-4">ورود</button>
                {{--  <div class="d-flex justify-content-between align-items-center mb-4">
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck">
                          <label class="custom-control-label" for="customCheck">به خاطر سپاری</label>
                      </div>
                      <a href="#" class="auth-link text-black">فراموشی رمز عبور؟</a>
                  </div>
                  <div class="row">
                      <div class="col-md-6 mb-4">
                          <a href="" class="btn btn-outline-facebook btn-block">
                              <i class="fa fa-facebook-square m-l-5"></i> با فیسبوک
                          </a>
                      </div>
                      <div class="col-md-6 mb-4">
                          <a href="" class="btn btn-outline-google btn-block">
                              <i class="fa fa-google m-l-5"></i> با گوگل
                          </a>
                      </div>
                  </div>
                  <div class="text-center">
                      حسابی ندارید؟ <a href="register.html" class="text-primary">ایجاد</a>
                  </div>--}}
            </form>
        </div>
    </div>
</div>
