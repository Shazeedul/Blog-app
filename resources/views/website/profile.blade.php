@extends('layouts.website')
@section('content') 

<section class="h-100 gradient-custom-2">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-10 col-xl-12 col-md-12">
          <div class="card">
            <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
              <div class="ms-4 ml-3 mt-5 d-flex flex-column" style="width: 150px;">
                @if (Auth::user()->image || Auth::user()->avatar)
                  @if (Auth::user()->image != null)
                  <img src="{{ asset('storage/'.Auth::user()->image) }}"
                  alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                  style="width: 150px; z-index: 1">
                  @else
                  <img src="{{ asset(Auth::user()->avatar) }}"
                  alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                  style="width: 150px; z-index: 1">
                  @endif
                  {{-- <img src="{{ asset('storage/'.Auth::user()->image) }}"
                  alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                  style="width: 150px; z-index: 1"> --}}
                @else
                  <img src="{{ asset('/assets/website/images/profile-avatar.png') }}"
                  alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                  style="width: 150px; z-index: 1">
                @endif
                
                <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                  style="z-index: 1;">
                  Edit profile
                </button>
              </div>
              <div class="ms-4 ml-2" style="margin-top: 130px;">
                <h5 class="text-white">{{ $profile->name }}</h5>
                <p>{{ $profile->email }}</p>
              </div>
              <div class="ms-4 mr-3 mt-3 d-flex flex-column ml-auto">
                <a class="btn btn-outline-light" href="{{ route('logout') }}">Logout</a>
              </div>
            </div>
            <div class="p-4 text-black" style="background-color: #f8f9fa;">
              <div class="d-flex justify-content-end text-center py-1">
                <div>
                  <p class="mb-1 h5">{{$postCount}}</p>
                  <p class="small text-muted mb-0">Posts</p>
                </div>
                {{-- <div class="px-3">
                  <p class="mb-1 h5">1026</p>
                  <p class="small text-muted mb-0">Followers</p>
                </div>
                <div>
                  <p class="mb-1 h5">478</p>
                  <p class="small text-muted mb-0">Following</p>
                </div> --}}
              </div>
            </div>
            <div class="card-body p-4 text-black">
              <div class="mb-5">
                <p class="lead fw-normal mb-1">About</p>
                <div class="p-4" style="background-color: #f8f9fa;">
                  <p class="font-italic mb-1">{{ $profile->description }}</p>
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="lead fw-normal mb-0">Recent Posts</p>
                <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
              </div>
              <div class="container">
                <div class="row align-items-stretch">
                  <div class="col">
                    @foreach($firstPosts2 as $post)
                    <a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="h-entry v-height gradien d-block mb-2"
                      style="background-image: url({{asset('storage/'.$post->image)}}); background-size:cover; height:300px;">
                      <div class="text">
                        <div class="post-categories mb-3">
                          <span class="post-category text-white bg-success">{{ $post->category->name }}</span>
                          <div class="text text-sm">
                            <h2>{{ $post->title }}</h2>
                            <span class="date">{{ $post->created_at->format('M d, Y')}}</span>
                          </div>
                        </div>
                      </div>
                    </a>
                    @endforeach
                  </div>
                  <div class="col">
                    @foreach($lastPosts2 as $post)
                    <a href="{{ route('website.post', ['slug' => $post->slug]) }}" class="d-block mb-2"
                      style="background-image: url({{asset('storage/'.$post->image)}}); background-size:cover; height:300px;">
                      <span class="post-category text-white bg-success">{{ $post->category->name }}</span>
                      <div class="text text-sm">
                          <h2>{{ $post->title }}</h2>
                          <span class="date">{{ $post->created_at->format('M d, Y')}}</span>
                      </div>
                    </a>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection