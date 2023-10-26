@extends('admin.layouts.base')

@section('content')
@php setPageTitle('Users'); @endphp

       <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                 


                </div>
            </div>
        </div>
       </div>

@endsection
