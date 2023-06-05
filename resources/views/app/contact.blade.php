<x-app-layout>
    @section('title')
        {{$title}}
    @endsection
    <x-app.banner></x-app.banner>
    <div class="container-xxl py-5">
        <div class="container">
            @if(session()->has('message'))
            <div class="row">
                <div class="col">
                    <p class="text-success">
                        {{session('message')}}
                    </p>
                </div>
            </div>
            @endif
            <div class="row g-4">
                <div class="col-md-8 justify-content-center wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <form action="/contact" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Name</label>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                    <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="body" class="form-control" placeholder="Leave a message here" id="body" style="height: 100px"></textarea>
                                    <label for="body">Message</label>
                                    <x-input-error :messages="$errors->get('body')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
