@extends('layouts.app1')

@section('content')

  <div class="panel panel-default">
        <div class="panel-heading">
            <h1>My Galleries</h1>
        </div>

    <div class="panel-body">
        <div class="col-md-8">
            @if( $galleries->count() )
                <table class="table table-strapped table-bordered table-responsive">
                    <thead>
                        <th>Cover</th>
                        <th>Name</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($galleries as $gallery)

                        <tr>
                            <td><img src="{{  asset($gallery->cover_image) }}" alt="" width="200px"></td>
                            <td>{{ $gallery->name  }}
                                <span class="pull-right">
                                    {{ $gallery->images()->count() }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ url('admin/gallery/view/'.$gallery->id ) }}">View</a>
                                <span> / </span>
                                <a href="{{ url('admin/gallery/delete/'.$gallery->id ) }}">Delete</a>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            @endif
        </div>

        <div class="col-md-4">
            @if(count($errors))
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form" method="post" action="{{ url('admin/gallery/save') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                   <div class="file-field">
                              <label for="cover_image">Cover image</label>
                              <input type="file" name="cover_image" class="form-control">
                        </div>

                <div class="form-group">
                    <input type="text" value="{{ old('gallery_name') }}" name="gallery_name" id="gallery_name" class="form-control" placeholder="Name Of The Gallery">
                </div>
                <button class="btn btn-raised btn-primary">Save</button>
            </form>

        </div>
    </div>

@stop