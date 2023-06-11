<x-app-layout>
    @section('title')
        {{$title}}
    @endsection
    <x-app.banner></x-app.banner>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-8 justify-content-center wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <form action="/questions" method="POST">
                        @csrf
                            <div class="form-floating mb-3">
                                <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{old('title')}}">
                                <label for="title">Title</label>
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                            <div class="form-floating mb-3">
                                <textarea name="body" class="form-control" placeholder="Question detail here" id="body" style="height: 100px">{{old('body')}}</textarea>
                                <label for="body">Question detail</label>
                                <x-input-error :messages="$errors->get('body')" class="mt-2" />
                            </div>
                            <button class="btn btn-primary w-100 py-3" type="submit">Post question</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
