<x-admin-layout>
    @section('title')
        {{$title}}
    @endsection

    <div class="row mb-3">
        <div class="col-auto">
            <a href="/admin/posts/create" type="button" class="btn btn-block btn-primary btn-lg">Create Post</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                @if($posts->count())
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Topic</th>
                                <th>Country</th>
                                <th>Author</th>
                                <th style="width: 40px">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$post->topic->name}}</td>
                                    <td>{{$post->post_country}}</td>
                                    <td>{{$post->user->first_name}}</td>
                                    <td>
                                        @if($post->isApproved == 0)
                                            <span class="badge bg-danger">Unpublished</span>
                                        @else
                                            <span class="badge bg-success">Published</span>
                                        @endif
                                        <a href="/admin/posts/{{$post->id}}/edit">
                                            <span class="badge bg-primary">Edit</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        {{$posts->links()}}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-admin-layout>
