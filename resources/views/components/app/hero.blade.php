<div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">
                        Find your study destination with us
                    </h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">
                        Find the best programs around the world and filter out according to your need.
                    </p>
                    <div class="position-relative w-75 mx-auto animated slideInDown">
                        <form action="/programs" method="GET" class="forms-sample">
                            <input name="search" id="query"  type="search" value="{{ request('search') }}" class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5 shadow" placeholder="Search for program ... ">
                            <button type="submit" id="search" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
