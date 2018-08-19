@extends('layouts.app2')

@section('content')

      <div class="panel panel-default">
            <div class="panel-heading">
            <h1>{{ $gallery->name  }}</h1>
        </div>
    </div>

            <div class="panel-body">
            <div class="gallery_images">
                <ul>
                    @foreach($gallery->images as $image)
                        <li>
                            <a data-lightbox="mygallery" href="{{ url($image->file_path) }}" target="_blank">
                                <img src="{{ url( 'uploads/gallery/images/thumbs/',$image->file_name) }}">
                            </a>

                           <center><a href="{{ url('admin/gallery/image/delete/'.$image->id ) }}" class="btn btn-raised btn-danger">Delete</a>
</center> 
                        </li>
                    @endforeach
                </ul>
            </div>


            <form action="{{ url('admin/image/do-upload') }}" class="dropzone" id="addImages" >
                {{ csrf_field() }}

                <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">
            </form>
            <br>
            <a href="{{ url('admin/gallery/list') }}" class="btn btn-raised btn-primary">Back</a>

        </div>
    </div>


@stop