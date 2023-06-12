<x-app-layout>
    @section('title')
        {{$title}}
    @endsection
    <x-app.banner></x-app.banner>

    <div class="row justify-content-start pb-5">
        <div class="col-lg-10 ms-5">
            <a href="/questions/create" class="btn btn-primary rounded-pill py-2 px-4">Post a question</a>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">
                    Forum
                </h6>
                <h1 class="mb-5">Last posted questions</h1>
            </div>
            <div class="row g-4">
                @if($questions->count())
                    @foreach($questions as $question)
                        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                            <a href="/questions/{{$question->id}}">
                                <div class="service-item rounded pt-3">
                                    <div class="p-4">
                                        <h5>{{$question->title}}</h5>
                                        <p>
                                            {{\Illuminate\Support\Str::words($question->body, 25)}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <p>No content yet. </p>
                @endif
            </div>
            <div class="row justify-content-center py-5">
                <div class="col-auto">
                    {{$questions->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
