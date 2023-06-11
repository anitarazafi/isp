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
</x-app-layout>
