<x-admin-layout>
    @section('title')
        {{$title}}
    @endsection

    <div class="row">
        <div class="col-12">
            <div class="card">
                @if($questions->count())
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th style="width: 40px">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($questions as $question)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$question->title}}</td>
                                        <td>{{$question->user->first_name ." ".$question->user->last_name}}</td>
                                        <td>
                                            <a href="/admin/questions/{{$question->id}}/edit">
                                                <span class="badge bg-primary">Edit</span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer clearfix">
                        {{$questions->links()}}
                    </div>
                @endif
            </div>
        </div>
    </div>

</x-admin-layout>
