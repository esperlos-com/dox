<div class="container h-100-vh">
    <div class="row align-items-center h-100-vh">
        <div class="col-lg-4 offset-lg-1 p-t-b-25">
            <h3 class="m-0">@lang('panel/global.login.title')</h3>

            <p>@lang('panel/global.login.form.title')</p>
            <form wire:submit.prevent="login">
                <div class="form-group mb-4">
                    <input wire:model.defer="email" type="text" class="form-control form-control-lg" id="exampleInputEmail1" autofocus placeholder="@lang('panel/global.login.form.username')">
                    @error('email')
                    <x-error-message>
                        {{$message}}
                    </x-error-message>

                    @enderror
                </div>
                <div class="form-group mb-4">
                    <input wire:model.defer="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="@lang('panel/global.login.form.password')">
                    @error('password')
                    <x-error-message>
                        {{$message}}
                    </x-error-message>
                    @enderror
                </div>
                <button  class="btn btn-primary btn-lg btn-block btn-uppercase mb-4">@lang('panel/global.button.login')</button>

            </form>
        </div>
        <div class="col-lg-6 d-none p-t-b-25 d-lg-flex justify-content-center ">
            <h1 class="blue" style="font-size:50px">{{\App\Http\Helpers\Strings::appName()}}</h1>
        </div>

    </div>
</div>
