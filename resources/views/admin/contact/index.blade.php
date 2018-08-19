@extends('layouts.app2')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
           <h4> Contact Details</h4>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                   Name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Msg
                </th>
                <th>
                    Trash
                </th>
                </thead>

                <tbody>
                @if($contacts->count() > 0)
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>

                            <td>{{ $contact->email }}</td>

                            <td>{{ $contact->msg }}

                            </td>

                            <td>
                                <a href="{{ route('contact.delete', ['id' => $contact->id]) }}" class="btn btn-xs btn-danger">Trash</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No Messages</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@stop