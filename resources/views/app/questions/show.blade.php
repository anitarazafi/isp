<x-app-layout>
    @section('title')
        {{$title}}
    @endsection
    <x-app.banner></x-app.banner>

    <div class="container-xxl py-5">
        <div class="container">
            <h3>
                {{$question->title}}
            </h3>
            <p>
                {{$question->body}}
            </p>
            <p>
                Author: <em>{{$question->user->first_name ." ". $question->user->last_name}}</em>
            </p>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="justify-content-center wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <form action="/{{$question->id}}/answer" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <textarea name="body" class="form-control" placeholder="Answer detail here" id="body" style="height: 100px">{{old('body')}}</textarea>
                            <label for="body">Answer</label>
                            <x-input-error :messages="$errors->get('body')" class="mt-2" />
                        </div>
                        <button class="btn btn-primary w-100 py-3" type="submit">Answer</button>
                    </form>
                </div>
            </div>
        </div>
        @if($answers->count())
            <h3>Answers:</h3>
            <div class="card">
                <div class="card-body">
                    @foreach($answers as $answer)
                        <div class="border-bottom">
                            <p>
                                {{$answer->body}}
                            </p>
                            <p>
                                Author: <em class="text-primary">{{$answer->user->first_name ." ". $answer->user->last_name}}</em>
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
