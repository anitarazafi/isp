<x-auth-layout>
    <div class="register-box">
        <div class="register-logo">
            <a href="/"><b>ISP</b></a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>

                <x-forms.register></x-forms.register>

                <a href="/login" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div>
    </div>
</x-auth-layout>
