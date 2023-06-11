<x-app-layout>
    <x-app.hero></x-app.hero>

    <x-app.forum></x-app.forum>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Student Guides</h1>
            </div>
            <div class="row g-4">
                @if($guides->count())
                    @foreach($guides as $guide)
                        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                            <a href="/posts/{{$guide->id}}">
                                <div class="service-item rounded pt-3">
                                    <div class="p-4">
                                        <img class="img-fluid" src="{{asset('img/image_1.png')}}" alt="" />
                                        <h5>{{\Illuminate\Support\Str::words($guide->title, 15)}}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <p>No Content yet. Come back soon :)</p>
                @endif
            </div>
            <div class="row justify-content-center py-5">
                <div class="col-auto">
                    <a href="/student-guides" class="btn btn-primary rounded-pill py-2 px-4">See all</a>
                </div>
            </div>
        </div>
    </div>

    <x-app.cta></x-app.cta>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">
                    Posts
                </h6>
                <h1 class="mb-5">Latest posts from the members</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @if($posts->count())
                    @foreach($posts as $post)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="package-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="{{getPostImage($post)}}" alt="" />
                                </div>
                                <div class="d-flex border-bottom">
                                    <small class="flex-fill text-center border-end py-2"
                                    ><i class="fa fa-solid fa-tag text-primary me-2"></i
                                        >{{$post->topic->name}}</small
                                    >
                                    <small class="flex-fill text-center border-end py-2"
                                    ><i class="fa fa-solid fa-globe text-primary me-2"></i>{{$post->post_country}}</small
                                    >
                                    <small class="flex-fill text-center py-2"
                                    ><i class="fa fa-user text-primary me-2"></i>{{$post->user->first_name. " " .$post->user->last_name}}</small
                                    >
                                </div>
                                <div class="p-4">
                                    <p>
                                        {{\Illuminate\Support\Str::words($post->title, 15)}}
                                    </p>
                                    <div class="d-flex justify-content-center mb-2">
                                        <a
                                            href="/posts/{{$post->id}}"
                                            class="btn btn-sm btn-outline-primary px-3 rounded-pill"
                                        >Read More</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No content yet. Come back later :)</p>
                @endif
            </div>
            <div class="row justify-content-center py-5">
                <div class="col-auto">
                    <a href="/posts" class="btn btn-primary rounded-pill py-2 px-4">Read all</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
