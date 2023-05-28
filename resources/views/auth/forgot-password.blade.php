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

                <x-forms.forgot-password></x-forms.forgot-password>

                <p class="mt-3 mb-1">
                    <a href="/login">Login</a>
                </p>
                <p class="mb-0">
                    <a href="/register" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</x-auth-layout>
