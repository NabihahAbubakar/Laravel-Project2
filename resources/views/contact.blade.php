@extends('layout.main')

@section('contact')


    



    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 form-container">
                <h2 class="text-center">Contact Us</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <input type="message" class="form-control" id="comment" placeholder="Enter your message">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Select your city</label>
                        <br>



                        {{-- Task 2.1 (Array/foreach--}}
                        @php
                          $cities = ["Karachi", "Lahore", "Faisalabad", "Rawalpindi", "Islamabad", "Multan", "Gujranwala", "Hyderabad", "Peshawar", "Quetta", "Sialkot", "Bahawalpur", "Sargodha", "Larkana", "Gujrat", "Kasur", "Rahim Yar Khan", "Sahiwal", "Jhang", "Sheikhupura", "Mardan", "Mingora", "Chiniot", "Kamoke", "Mandi Bahauddin", "Hafizabad", "Attock", "Sukkur", "Chakwal"]  
                        @endphp
                        <select>
                            @foreach($cities as $city)
                            <option>
                                <h1>{{$city}}</h1>
                            </option>
                            @endforeach
                        </select>





                    </div>


                    <div class="submit">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>



                   {{-- Task 1 --}}
                    @if($email == "@")
                    <div class="equal">
                        &check; your message has been sent 
                    </div>
                    @elseif($email=="")
                    <div class="null">
                         Please enter your email &#33;
                    </div>
                    @else
                    <div class="wrong">
                       please enter a valid email address &#33;
                    </div>
                    @endif
                 





                </form>
            </div>
        </div>
    </div>

   



@endsection

    
