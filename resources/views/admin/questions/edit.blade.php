<x-admin-layout>
    @section('title')
        {{$title}}
    @endsection

    <div class="row mb-3">
        <div class="col-auto">
            <form method="post" action="/admin/questions/{{$question->id}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-block btn-danger btn-lg">Delete question</button>
            </form>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card card-primary">
                <form action="/admin/questions/{{$question->id}}" method="post">
                @csrf
                @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{ old('title', $question->title)}}">
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                    </div>
                    <div class="form-group mx-4">
                        <label for="body">Question</label>
                        <textarea name="body" id="body" class="form-control" rows="3">
                            @if(old('body') !== null) {!! old('body') !!} @elseif($question->body !== null) {!! $question->body !!} @else Body @endif
                        </textarea>
                        <x-input-error :messages="$errors->get('body')" class="mt-2" />
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
