<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="input-group mb-3">
        <input id="email" name="email" type="email" class="form-control" placeholder="Email" value="{{old('email')}}" required autocomplete="email">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="row">
        <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
        </div>
        <!-- /.col -->
    </div>
</form>
