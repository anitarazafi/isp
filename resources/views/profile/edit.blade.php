@php
    $countries = getAllCountries();
@endphp
<x-admin-layout>
    @section('title')
        {{$title}}
    @endsection

    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">General information</h3>
                </div>
                <!-- /.card-header -->
                @if (session('status') === 'profile-updated')
                    <div class="ps-5">
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-success"
                        >{{ __('Saved.') }}</p>
                    </div>
                @endif
                <!-- form start -->
                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>
                <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="card-body">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input name="first_name" value="{{old('first_name', $user->first_name)}}" type="text" class="form-control" id="first_name">
                            <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input name="last_name" value="{{old('last_name', $user->last_name)}}" type="text" class="form-control" id="last_name">
                            <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" value="{{old('email', $user->email)}}" type="email" class="form-control" id="email">
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="country" name="country">
                                <option selected>{{$user->country}}</option>
                                @foreach($countries as $country)
                                    <option value="{{$country}}">{{$country}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('country')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input name="city" value="{{old('city', $user->city)}}" type="text" class="form-control" id="city">
                            <x-input-error class="mt-2" :messages="$errors->get('city')" />
                        </div>
                        <div class="form-group">
                            <label for="university">University</label>
                            <input name="university" value="{{old('university', $user->university)}}" type="text" class="form-control" id="university">
                            <x-input-error class="mt-2" :messages="$errors->get('university')" />
                        </div>
                        <div class="form-group">
                            <label for="image">Insert profile picture</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Password</h3>
                </div>
                <!-- /.card-header -->
                @if (session('status') === 'password-updated')
                    <div class="ps-5">
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-success"
                        >{{ __('Password updated.') }}</p>
                    </div>
                @endif
                <!-- form start -->
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')

                    <div class="card-body">
                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input name="current_password" type="password" class="form-control" id="current_password" autocomplete="current-password">
                            <x-input-error class="mt-2" :messages="$errors->updatePassword->get('current_password')" />
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input name="password" type="password" class="form-control" id="password" autocomplete="new-password">
                            <x-input-error class="mt-2" :messages="$errors->updatePassword->get('password')" />
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" autocomplete="new-password">
                            <x-input-error class="mt-2" :messages="$errors->updatePassword->get('password_confirmation')" />
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
