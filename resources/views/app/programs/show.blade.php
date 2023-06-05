<x-app-layout>
    @section('title')
        {{$title}}
    @endsection
    <x-app.banner></x-app.banner>
    <div class="px-5 justify-content-center">
        <h2 class="mb-3">
            Program name:
            <span class="text-primary">
            {{$program->program_name}}
        </span>
        </h2>
        <h3 class="mb-3">
            Faculty:
            <span class="text-secondary">
            {{$program->faculty}}
        </span>
        </h3>
        <h3 class="mb-3">
            University:
            <span class="text-secondary">
            {{$program->university}}
        </span>
        </h3>
        <p class="fs-3 mb-3">
            {{$program->country}}, {{$program->city}}
        </p>
        <p>
            <span class="bg-secondary px-3 rounded-pill text-white">
                {{$program->degree}}
            </span>
        </p>
        @isset($program->detail)
            <p class="fs-3">
                {!! $program->detail !!}
            </p>
        @endisset
    </div>
    <div class="px-5 py-2 justify-content-center">
        <a href="" type="button" class="btn btn-block btn-primary btn-lg">Rate this program</a>
    </div>
    <div class="px-5 py-2 justify-content-center">
        <a href="" type="button" class="btn btn-block btn-primary btn-lg">Find alumni or students from this program</a>
    </div>
    <div class="px-5 py-2 justify-content-center">
        <a href="" type="button" class="btn btn-block btn-outline-primary btn-lg">Related posts</a>
    </div>
</x-app-layout>
