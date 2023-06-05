<x-app-layout>
    @section('title')
        {{$title}}
    @endsection
    <x-app.banner></x-app.banner>
    <div class="row justify-content-center pb-5">
        <div class="col-lg-10 text-center">
            <div class="position-relative w-75 mx-auto animated slideInDown">
                <form action="/programs" method="GET" class="forms-sample">
                    <input name="search" id="query"  type="search" value="{{ request('search') }}" class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5 shadow" placeholder="Search for program ... ">
                    <button type="submit" id="search" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px">Search</button>
                </form>
            </div>
        </div>
    </div>
            @if(request('search') !== null)
                <div class="row px-md-5">
                    <p>
                        Search results for: <span class="text-secondary">{{request('search')}}</span>
                    </p>
                </div>
            @endif
    <div class="row g-4 justify-content-center">
        @if($programs->count())
            @foreach($programs as $program)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="package-item rounded">
                        <div class="p-5">
                            <h3>
                                {{$program->program_name}}
                            </h3>
                            <div>
                                <strong>
                                    {{$program->faculty}},
                                </strong>
                                {{$program->university}}
                            </div>
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$program->country}}, {{$program->city}}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-solid fa-bookmark text-primary me-2"></i>{{$program->degree}}</small>
                        </div>
                        <div class="p-3">
                            @isset($program->detail)
                                <div class="mb-3">
                                    {!! \Illuminate\Support\Str::limit($program->detail, 100) !!}
                                </div>
                            @endisset
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-gray"></small>
                            </div>

                            <div class="d-flex justify-content-center mb-2">
                                <a href="/programs/{{$program->id}}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</x-app-layout>
