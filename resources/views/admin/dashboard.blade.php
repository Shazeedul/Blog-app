@extends('layouts.admin')
@section('title', 'Dasboard')
@section('content')

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('website')}}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div> <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $postCount }}</h3>
                        <p>Posts</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-calendar"></i>
                    </div>
                    <a href="{{route('posts.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $categoryCount }}</h3>
                        <p>Categories</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pricetag"></i>
                    </div>
                    <a href="{{route('categories.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $tagCount }}</h3>
                        <p>Tags</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pricetags"></i>
                    </div>
                    <a href="{{route('tags.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $userCount }}</h3>
                        <p>Users</p>
                    </div>
                    <div class="icon">
                        {{-- <i class="ion ion-pie-graph"></i> --}}
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{route('users.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Post List</h3>
                                <a href="{{route('posts.create')}}" class="btn btn-primary">Post Add</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Tags</th>
                                        <th>Author</th>
                                        <th>Created Date</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($posts->count())
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>
                                                <div style="max-width: 70px; max-height:70px;overflow:hidden">
                                                    <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid img-rounded" alt="">
                                                </div>
                                            </td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->category->name }}</td>
                                            <td>
                                                @foreach($post->tags as $tag) 
                                                    <span class="badge badge-primary">{{ $tag->name }} </span>
                                                @endforeach
                                            </td>
                                            <td>{{ $post->user->fname.' '.$post->user->lname }}</td>
                                            <td>{{ $post->created_at->format('d M, Y') }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('posts.show', [$post->id]) }}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i> </a>
                                                <a href="{{ route('posts.edit', [$post->id]) }}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                                                <form action="{{ route('posts.destroy', [$post->id]) }}" class="mr-1" method="POST">
                                                    @method('DELETE')
                                                    @csrf 
                                                    <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else   
                                        <tr>
                                            <td colspan="6">
                                                <h5 class="text-center">No posts found.</h5>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection