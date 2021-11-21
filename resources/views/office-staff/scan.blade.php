@include('includes.head')

<body>
    

<div class="jumbotron container mt-5">
    <div class="row container">
    <a href="{{ route('office-staff') }}" class="btn btn-default" ><span class="fas fa-arrow-left mr-2"></span >Back</a>
    <h3 class="display-6 mt-1">Scan QR Code</h>
    </div>
    <div class="mb-4"></div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs mt-4">
                        <li class="btn-block"><a href="{{ route('office-staff') }}"class="btn btn-primary mb-3 btn-block active"  >Ongoing</a></li>
                        <li class="btn-block"><a href="{{ route('scan') }}"class="btn btn-primary  mb-3 btn-block"  >Scan QR Code</a></li>
                        <li class="btn-block"><a href="{{ route('viewvisit') }}"class="btn btn-primary  mb-3 btn-block" >All Visit</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card container">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="container text-center">
                                <img src="#" alt="qrcode scan" width="500" height="600">
                                <h4>Scan Visitor QR Code</h4>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="container text-center">
                                <h4>Visitor Details</h4>
                            
                            </div>
                            <form action="#" method="#" class=" text-center">
                                    @csrf
                                    {{-- Firstname --}}
                                    <div class="mb-3 mt-4">
                                        <input type="text" name="firstname" id="firstname" placeholder="First Name" value="{{ old('firstname') }}"
                                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('firstname') border-danger @enderror">
                                        {{-- error message --}}
                                        @error('name')
                                            <div class="text-danger mt-2 text-sm">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- Code --}}
                                    <div class="mb-3 mt-4">
                                        <input type="text" name="code" id="code" placeholder="Code" value="{{ old('code') }}"
                                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('code') border-danger @enderror">
                                        {{-- error message --}}
                                        @error('name')
                                            <div class="text-danger mt-2 text-sm">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <a class="btn btn-success" >Start Visit</a>    
                            </form>
                        </div>
                    </div>
                </div>                 
            </div>                    
        </div>
    </div>
</div>
</body>