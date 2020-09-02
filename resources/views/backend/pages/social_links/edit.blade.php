@extends('backend.layouts.master')

@section('content')
    
<div class="br-mainpanel">
  <div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Update Social link</h4>
    <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
  </div><!-- d-flex -->

  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper row justify-content-center">

      
      <div class="col-md-12">
        <!--Message alart--->
        @include('backend.layouts.messages')
        <!--Message alart End--->
      <form action="{{ route('admin.profile-sociallink.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="icon_class">FrontAwesome Icon Class</label>
          <input value="{{ $edit->icon_class }}" name="icon_class" type="text" class="form-control" id="icon_class">
        </div>

        <div class="form-group">
          <label for="name">Icon Name</label>
          <input value="{{ $edit->name }}" name="name" type="text" class="form-control" id="name">
        </div>

        <div class="form-group">
          <label for="link">Social Link</label>
          <input value="{{ $edit->link }}" name="link" type="text" class="form-control" id="link">
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" id="addlink" value="Update Link">
        </div>
  
      </form>
    </div>

      
  </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->

@endsection