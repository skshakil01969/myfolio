@extends('backend.layouts.master')

@section('content')
    
<div class="br-mainpanel">
  <div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">ADD SERVICES</h4>
    <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
  </div><!-- d-flex -->

  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper row justify-content-center">

      
      <div class="col-md-12">
        <!--Message alart--->
        @include('backend.layouts.messages')
        <!--Message alart End--->
      <form action="{{ route('admin.blog-post.update', $editBlog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="form-group">
              <label class=" text-primary" for="title">Post Image</label>
              <input name="post_image" type="file" class="form-control" id="work_image">
              <img  src="{{ asset('storage/images/blog/'.$editBlog->post_image) }}" alt="" class="img-fluid">
            </div>

            
          <div class="form-group">
            <label class=" text-primary" for="title">Tilte</label>
            <input value="{{ $editBlog->title }}" name="title" type="text" class="form-control" id="name">
          </div>


          <div class="form-group">
            <label class=" text-primary" for="title">Post Category</label>
            <select name="blog_cat_id" id="" class="form-control">
              <option value="">Select</option>
              @foreach ($blogCats as $blogCat)
              <option
              @if ($blogCat->id == $editBlog->blog_cat_id)
                  selected
              @endif
              value="{{ $blogCat->id }}">{{ $blogCat->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label class=" text-primary" for="title">Description</label>
            <textarea name="description" id="ckeditor" cols="30" rows="10">{{ $editBlog->description }}</textarea>

          </div>


          <div class="form-group">
            <input type="submit" class="btn btn-primary" id="addlink" value="Update Work">
          </div>
  
      </form>
    </div>

      
  </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->

@endsection