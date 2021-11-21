@include('includes.head')

<div class="jumbotron container mt-5">
    <div class="row container">
    <a href="{{ route('admin') }}" class="btn btn-default" ><span class="fas fa-arrow-left mr-2"></span >Back</a>
    <h3 class="display-6 mt-1">View Staff</h>
    </div>
    <div class="mb-4"></div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs mt-4">
                        <li class="btn-block"><a href="{{ route('view_data') }}"class="btn btn-primary mb-3 btn-block active"  >Security Personnel</a></li>
                        <li class="btn-block"><a href="{{ route('view_staff') }}"class="btn btn-primary  mb-3 btn-block"  >Office Staff</a></li>
                        <li class="btn-block"><a href="{{ route('view_office') }}"class="btn btn-primary  mb-3 btn-block" >Office</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="..." class="rounded" alt="...">
                        </div>
                        <div class="col-lg-8">
                            <h2>Juan Dela Cruz</h2>
                            <p>Contact no.: 0925489137</p>
                            <p>Address: Sample Address</p>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-outline-secondary btn-block" >Edit</button>
                            <button class="btn btn-outline-secondary btn-block" >Delete</button>
                        </div>
                    </div>
                </div>
            <hr>
    </div>
</div>      