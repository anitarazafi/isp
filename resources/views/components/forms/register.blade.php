@php
    $countries = getAllCountries();
@endphp
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="input-group mb-3">
        <input id="first_name" name="first_name" type="text" class="form-control" placeholder="First name" value="{{old('first_name')}}" required autofocus autocomplete="first_name">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
    </div>

    <div class="input-group mb-3">
        <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Last name" value="{{old('last_name')}}" required autocomplete="last_name">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
    </div>

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

    <div class="input-group mb-3">
        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" placeholder="Retype your password" value="{{old('password')}}" required autocomplete="password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="form-group">
        <select class="form-control" id="country" name="country" required>
            <option disabled selected>Country</option>
            @foreach($countries as $country)
                <option value="{{$country}}">{{$country}}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('country')" class="mt-2" />
    </div>

    <div class="row">
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
        <!-- /.col -->
    </div>
</form>
