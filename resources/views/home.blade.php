@extends('layouts.dashnav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">


                    <h2>Find your Path.!</h2>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    
                      <!-- Indicators -->
                      <ul class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ul>
                      
                      <!-- The slideshow -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="images/1.jpg" alt="Los Angeles" width="1100" height="300">
                        {{-- <button class="btn" href="{{url('/test')}}" >Take Tests</button> --}}
                        </div>
                        <div class="carousel-item">
                          <img src="images/2.jpg" alt="Chicago" width="1100" height="300">
                        </div>
                        <div class="carousel-item">
                          <img src="images/3.jfif" alt="New York" width="1100" height="300">
                        </div>
                      </div>
                      
                      <!-- Left and right controls -->
                      <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
                    </div>
                    
                    </div>

                        <div class="card-columns">
                      
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                  <p class="card-text" href="#">Internship Opportunities</p>
                                  <a href="#" class="btn btn-primary stretched-link">View</a>
                                </div>
                            </div>
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                  <p class="card-text" href="#">Colleges/Jobs</p>
                                  <a href="https://en.wikipedia.org/wiki/List_of_colleges_in_Mumbai" class="btn btn-primary stretched-link">View</a>
                                </div>
                             </div>
                             <div class="card bg-light">
                                <div class="card-body text-center">
                                  <p class="card-text" href="#">Online Courses</p>
                                  <a href="#" class="btn btn-primary stretched-link">view</a>
                                </div>
                              </div>
                        </div>
                    </div>

                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
