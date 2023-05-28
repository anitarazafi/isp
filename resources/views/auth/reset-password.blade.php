<x-auth-layout>
    <div class="login-box">
        <div class="login-logo">
            <a href="/"><b>ISP</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <x-forms.reset-password></x-forms.reset-password>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</x-auth-layout>
