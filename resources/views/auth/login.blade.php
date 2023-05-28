<x-auth-layout>
    <div class="login-box">
        <div class="login-logo">
            <a href="/"><b>ISP</b></a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Login to your account</p>

                <x-forms.login></x-forms.login>
                <div>
                    <a href="/forgot-password" class="text-center">I forgot my password</a>
                </div>
                <div>
                    <a href="/register" class="text-center">I don't have an account yet</a>
                </div>
            </div>
            <!-- /.form-box -->
        </div>
    </div>
</x-auth-layout>
