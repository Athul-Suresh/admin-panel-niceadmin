@extends('admin.layouts.base')

@section('content')
    @php setPageTitle('Users'); @endphp

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Add User</h4>
                    <a class="btn btn-primary text-white" href="{{ route('user.index') }}">List</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="row g-3" action="{{route('user.store')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <x-input-with-errors  type="text" name="name" label="Name" value="" />
                        <x-input-with-errors type="email"  name="email" label="Email" value="" />
                        <x-input-with-errors type="password"  name="password" label="Password" value="" />
                        <x-input-with-errors type="password"  name="password_confirmation" label="Confirm Password" value="" />

                        <div class="col-12">
                            <label for="inputAddress5" class="form-label">Address</label>
                            <textarea class="form-control" id="inputAddres5s" maxlength="255" name="address" placeholder="1234 Main St"></textarea>
                        </div>

                        <x-input-with-errors type="url"  name="twitter_url" label="Twitter URL" value="" />
                        <x-input-with-errors type="url"  name="instagram_url" label="Instagram URL" value="" />
                        <x-input-with-errors type="url"  name="facebook_url" label="Facebook URL" value="" />
                        <x-input-with-errors type="url"  name="linkedin_url" label="Linkedin URL" value="" />


                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Profile Image</label>
                            <input type="file" class="form-control" name="avatar" id="avatar">
                        </div>

                        <div class="col-6">
                            <label for="inputRole" class="form-label">Role</label>
                            <select id="inputRole" class="form-select"  name="role">
                              <option selected value="">Choose...</option>
                              @forelse ($roles as $role)
                              <option value="{{$role->name}}">{{$role->name}}</option>
                              @empty
                              <option value="{{null}}">No Role </option>
                              @endforelse
                            </select>
                            @error('role')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        <x-form-button-group :route="route('user.index')"/>
                        
                    </form>



                </div>
            </div>
        </div>
    </div>
@endsection
