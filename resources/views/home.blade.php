@extends('layout.main')

@section('home')



    
    <!-- Jumbotron -->
    <div class="jumbotron text-center">
        <h1>Welcome to Our Website</h1>
        <p>Your One-Stop Solution for Everything</p>
        <a class="btn btn-primary btn-lg" href="/contact" role="button">Contact Us</a>
    </div>

    <!-- Features Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-box">
                    <i class="fas fa-globe"></i>
                    <h3>Global Reach</h3>
                    <p>We serve clients all around the world.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <i class="fas fa-cogs"></i>
                    <h3>Quality Services</h3>
                    <p>Our services are of the highest quality.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <i class="fas fa-users"></i>
                    <h3>Customer Support</h3>
                    <p>Our dedicated team is here to assist you.</p>
                </div>
            </div>
        </div>
    </div>

      








@endsection