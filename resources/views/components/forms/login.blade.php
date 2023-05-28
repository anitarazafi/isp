<form method="POST" action="{{ route('login') }}">
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

    <div class="input-group mb-3">
        <input id="password" name="password" type="password" class="form-control" placeholder="Password" value="{{old('password')}}" required autocomplete="password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <div class="row">
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        <!-- /.col -->
    </div>
</form>
