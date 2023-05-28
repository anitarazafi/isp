<x-admin-layout>
    <h1>Welcome</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="row">
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Logout</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
</x-admin-layout>
