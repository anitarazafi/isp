@php
    $countries = getAllCountries();
@endphp
<x-admin-layout>
    @section('title')
        {{$title}}
    @endsection

    <div class="row justify-content-between bg-dark py-3 px-5 mb-3">
        <div class="col-5">
            <form action="/admin/posts/{{$post->id}}/approve" method="POST">
                @csrf
                @if($post->isApproved == 0)
                    <p>Post approbation pending! &nbsp;
                        <button type="submit" class="btn btn-success">Approve</button>
                    </p>
                @else
                    <button type="submit" class="btn btn-warning">Unpublish post</button>
                @endif
            </form>
        </div>
        <div class="col-5">
            <form action="/admin/posts/{{$post->id}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Post details</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/admin/posts/{{$post->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" value="{{old('title', $post->title)}}">
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="topic_id" name="topic_id" required>
                                <option disabled selected>Topic</option>
                                @foreach($topics as $topic)
                                    <option @if(old('topic_id') == $topic->id || $post->topic_id == $topic->id) selected @endif value="{{$topic->id}}">{{$topic->name}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('topic_id')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="post_country" name="post_country" required>
                                <option disabled selected>Country</option>
                                @foreach($countries as $country)
                                    <option @if(old('post_country') == $country || $post->post_country == $country) selected @endif value="{{$country}}">{{$country}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('post_country')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="image">Insert image (optional)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="summernote">Detail</label>
                            <textarea id="summernote" name="body">@if(old('body') !== null) {!! old('body') !!} @elseif($post->body !== null) {!! $post->body !!} @else Enter more detail @endif</textarea>
                            <x-input-error :messages="$errors->get('body')" class="mt-2" />
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
