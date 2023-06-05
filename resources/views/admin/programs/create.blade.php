@php
    $countries = getAllCountries();
    $degrees = getAllDegrees();
@endphp
<x-admin-layout>
    @section('title')
        {{$title}}
    @endsection
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Program details</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/admin/programs" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="program_name">Program name</label>
                            <input name="program_name" type="text" class="form-control" id="program_name" placeholder="Computer Science" value="{{old('program_name')}}">
                            <x-input-error :messages="$errors->get('program_name')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="faculty">Faculty name</label>
                            <input name="faculty" type="text" class="form-control" id="faculty" placeholder="Faculty of Applied Science" value="{{old('faculty')}}">
                            <x-input-error :messages="$errors->get('faculty')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="university">University</label>
                            <input name="university" type="text" class="form-control" id="university" placeholder="University of İstanbul" value="{{old('university')}}">
                            <x-input-error :messages="$errors->get('university')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="country" name="degree" required>
                                <option disabled selected>Degree</option>
                                @foreach($degrees as $degree)
                                    <option @if(old('degree') == $degree) selected @endif value="{{$degree}}">{{$degree}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('degree')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="country" name="country" required>
                                <option disabled selected>Country</option>
                                @foreach($countries as $country)
                                    <option @if(old('country') == $country) selected @endif value="{{$country}}">{{$country}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('country')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input name="city" type="text" class="form-control" id="city" placeholder="" value="{{old('city')}}">
                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="summernote">Detail</label>
                            <textarea id="summernote" name="detail">@if(old('detail') !== null) {!! old('detail') !!} @else Add some details if necessary @endif</textarea>
                            <x-input-error :messages="$errors->get('detail')" class="mt-2" />
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
