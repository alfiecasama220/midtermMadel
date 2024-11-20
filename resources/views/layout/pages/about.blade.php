@extends('layout.pages.app')

@section('layout')

<div class="container mt-4">
    <!-- About Header -->
    <div class="text-center mb-5">
        <h1 class="text-dark font-weight-bold">About Us</h1>
        <p class="text-secondary">Members</p>
    </div>

    <div class="col mb-5">
        <p class="h6">
            Del Mundo Landscape Specialist is a premier provider of innovative and sustainable landscaping solutions. With a deep commitment to transforming spaces into breathtaking outdoor environments, we specialize in crafting tailored designs that combine functionality, aesthetics, and harmony with nature.

        Our team of dedicated professionals brings years of expertise in landscaping, garden design, and environmental stewardship, ensuring every project reflects our client’s vision and our passion for excellence. From residential gardens to large-scale commercial landscapes, we take pride in creating spaces that inspire, refresh, and stand the test of time.
        
        At Del Mundo Landscape Specialist, we don’t just design landscapes; we create experiences—one that blends beauty, innovation, and sustainability for future generations.
        </p>
    </div>
    <!-- Members Section -->
    <div class="row">
        
        @foreach($members as $member)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100" style="border-radius: 10px;">
                <div class="card-body text-center">
                     {{-- <img src="https://media.wired.com/photos/598e35fb99d76447c4eb1f28/master/pass/phonepicutres-TA.jpg" alt="Profile Picture" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;"> --}}
                    <h5 class="card-title font-weight-bold text-dark">{{ $member['name'] }}</h5>
                    <p class="text-secondary {{ $member['text'] }}">{{ $member['role'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Custom CSS -->
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .card {
        background-color: #fff;
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-10px);
    }
    .card-title {
        font-size: 1.2rem;
        margin-top: 10px;
    }
    .text-secondary {
        font-size: 0.9rem;
    }
</style>

@endsection
