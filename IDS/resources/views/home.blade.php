@extends('layout.main')

@section('layout.content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <!-- <div class="card-body"> -->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        <!-- Hi, {{Auth::users()->name}} -->
                    @endif

                    <!-- You are logged in! -->
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
</div>
@endsection
