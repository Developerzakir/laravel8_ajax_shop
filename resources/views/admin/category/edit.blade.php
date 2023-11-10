@extends('layouts.admin')

@section('content')

<div class="card">

        <div class="card-header">
        <h2>Edit / Update Category</h2>
        </div>

        <div class="card-body">

        <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype='multipart/form-data'>
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <label for="">Name</label>
                    <input type="text" value="{{$category->name}}" class="form-control" name="name">
                </div>

                <div class="col-md-6">
                    <label for="">Slug</label>
                    <input type="text" value="{{$category->slug}}" class="form-control" name="slug">
                </div>

                <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea name="description"   class="form-control" rows="3">{{$category->description}}</textarea>
                </div>

                <div class="col-md-6">
                    <label for="">Status</label>
                    <input type="checkbox" name="status" {{$category->status == "1" ? "checked" : ''}}>
                </div>

                <div class="col-md-6">
                    <label for="">Popular</label>
                    <input type="checkbox" name="popular" {{$category->popular == "1" ? "checked" : ''}} >
                </div>

                <div class="col-md-12">
                    <label for="">Meta Title</label>
                    <input type="text" value="{{$category->meta_title}}" class="form-control" name="meta_title">
                </div>

                <div class="col-md-12">
                    <label for="">Meta Keywords</label>
                    <input type="text" value="{{$category->meta_keywords}}" class="form-control" name="meta_keywords">
                </div>

                <div class="col-md-12">
                    <label for="">Meta Description</label>
                    <input type="text" value="{{$category->meta_descrip}}" class="form-control" name="meta_descrip">
                </div>
                @if($category->image)
                 <img src="{{asset('assets/uploads/category/'.$category->image)}}" width="100px" height="100px" alt="">
                @endif

                <div class="col-md-12">
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>


            </div>

        </form>

            
        </div>
</div>


@endsection