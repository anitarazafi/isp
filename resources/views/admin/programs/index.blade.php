<x-admin-layout>
    @section('title')
        {{$title}}
    @endsection
    <div class="row mb-3">
        <div class="col-auto">
            <a href="/admin/programs/create" type="button" class="btn btn-block btn-primary btn-lg">Create Program</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bordered Table</h3>
                </div>
                @if($programs->count())
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Degree</th>
                                <th>Name</th>
                                <th>University</th>
                                <th>Country</th>
                                <th style="width: 40px">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($programs as $program)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$program->degree}}</td>
                                        <td>{{$program->program_name}}</td>
                                        <td>{{$program->university}}</td>
                                        <td>{{$program->country}}</td>
                                        <td>
                                            <a href="/admin/programs/{{$program->id}}/edit">
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
                        {{$programs->links()}}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-admin-layout>
