<x-admin-layout>
    @section('title')
        {{$title}}
    @endsection
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Bordered Table</h3>
                    </div>
                    @if($messages->count())
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Sender</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($messages as $message)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$message->name}}, < <em>{{$message->email}}</em> ></td>
                                            <td>{{$message->subject}}</td>
                                            <td>{{$message->body}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{$messages->links()}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
</x-admin-layout>
