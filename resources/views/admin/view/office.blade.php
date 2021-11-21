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
                        <div class="col-lg-8">
                            <h4>Admission Office</h4>
                            <p>Building 123</p>
                            <p>ICT Building</p>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-outline-secondary btn-block" >Edit</button>
                            <button class="btn btn-outline-secondary btn-block" >Delete</button>
                        </div>
                    </div>
                </div>
            <hr>
            <div class="row container ml-2">         
            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Visitor Code</th>
                <th scope="col">Time In</th>
                <th scope="col">Time Out</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>10am</td>
                <td>3pm</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>1pm</td>
                <td>2:30pm</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>4:00</td>
                <td>5:30</td>
                </tr>
            </tbody>
            </table> 
        </div>
    </div>
</div>      