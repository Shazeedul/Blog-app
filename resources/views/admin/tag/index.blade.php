@extends('layouts.admin')
@section('title', 'Tag')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tag List</h1>
                </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('website')}}">Home</a></li>
                <li class="breadcrumb-item active">Tag List</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div>


    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Tag List</h3>
                            
                                <a href="{{route('tags.create')}}" class="btn btn-primary">Create Tag</a>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Post Count</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($tags->count() > 0)
                                    @foreach ($tags as $tag)
                                    <tr>
                                        <td>{{ $tag->id }}</td>
                                        <td>{{ $tag->name }}</td>
                                        <td>{{ $tag->slug }}</td>
                                        <td>
                                            {{ $tag->id }}
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ route('tags.edit', [$tag->id]) }}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                                            <form action="{{ route('tags.destroy', [$tag->id]) }}" class="mr-1" method="POST">
                                                @method('DELETE')
                                                @csrf 
                                                <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                                            </form>
                                            {{-- <a href="{{ route('tags.show', [$tag->id]) }}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i> </a> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else   
                                    <tr>
                                        <td colspan="5">
                                            <h5 class="text-center">No tags found.</h5>
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer d-flex justify-content-center">
                            {{ $tags->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Main Content -->
    


@endsection



