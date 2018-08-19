@extends('layouts.app2')

@section('content')

      @include('admin.includes.errors')
      
      <div class="panel panel-default">
            <div class="panel-heading">
                 <h4> Create a new Event</h4>
            </div>
            


            <div class="panel-body">
                  <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                              <label for="title">Event Title</label>
                              <input type="text" name="title" class="form-control">
                        </div>
                        <div class="file-field">
                              <label for="featured">Featured image</label>
                              <input type="file" name="featured" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="address">Event Address</label>
                              <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="start_date">Event Date : </label>
                              {!! Form::input('date','start_date', date('Y-m-d'), ['class' => 'form-control']) !!}
                        </div>                

                        <div class="summernote">
                              <label for="description"> Event Description</label>
                              <textarea name="description" id="description" cols="5" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                              <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                          Store Event
                                    </button>
                              </div>
                        </div>
                  </form>
            </div>
      </div>
@stop

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script>
      $(document).ready(function() {
  $('.summernote').summernote();
});
</script>

@stop