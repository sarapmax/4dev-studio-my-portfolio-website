@extends('backoffice.layout.admin')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Feedback</h2>
        <ol class="breadcrumb">
            <li>
                <strong>Feedback</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInUp">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Feedback</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Read</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Send Date Time</th>
                                    <th></th>
                                </tr>
                                @foreach($contacts as $index => $contact)
                                <tr>
                                    <td>{{ $index+1}}</td>
                                    <td>
                                        @if($contact->read)
                                            <i class="fa fa-check text-success"></i>
                                        @else
                                            <a href="{{ url('backoffice/read_contact/'. $contact->id) }}"><i class="fa fa-eye"></i></a>
                                        @endif
                                    </td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->phone_number }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->message }}</td>
                                    <td>{{ $contact->created_at->format('d-m-Y H:i') }}</td>
                                    <td>
                                        <a href="{{ url('backoffice/destroy_contact/'. $contact->id) }}" onclick="return confirm('Are you sure ?');" class="btn btn-default btn-xs" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </thead>
                        </table>

                        @include('default.paginate', ['paginator' => $contacts])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection