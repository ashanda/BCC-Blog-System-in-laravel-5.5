@extends('layouts.app')

@section('content')

<div class="panel panel-default">
            <div class="panel-heading">
                <div class="text-center"><h2>WelCome To SLIATE - Badulla </h2><p>Web Administrative Area</p></div>
                  
            </div>
<div class="panel-body">
            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                         PUBLISHED NEWS
                    </div>
                    <div class="panel-body">
                        <h1 class="text-center">{{ $posts_count }}</h1>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-danger">
                    <div class="panel-heading text-center">
                        TRASHED NEWS
                    </div>
                    <div class="panel-body">
                        <h1 class="text-center">{{ $trashed_count }}</h1>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                        USERS 
                    </div>
                    <div class="panel-body">
                        <h1 class="text-center">{{ $users_count }}</h1>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                        EVENTS
                    </div>
                    <div class="panel-body">
                        <h1 class="text-center">{{ $events_count }}</h1>
                    </div>
                </div>
            </div>

               <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                         ALBUMS
                    </div>
                    <div class="panel-body">
                        <h1 class="text-center">{{ $galleries_count }}</h1>
                    </div>
                </div>
            </div>
    <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                MESSAGES
            </div>
            <div class="panel-body">
                <h1 class="text-center">{{ $contacts_count }}</h1>
            </div>
        </div>
    </div>

        </div>
    </div>
@endsection
