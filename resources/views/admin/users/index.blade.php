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


                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $index => $user)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td><img src="{{'storage/users/'.$user->avatar}}" width="80" alt="{{$user->name}}" srcset=""></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->roles->isNotEmpty())
                                        {{ $user->roles->map(function($role) {
                                            return $role->name;
                                        })->implode(', ') }}
                                        @else
                                            No Roles
                                        @endif
                                    </td>
                                    <td>
                                        <x-action-row
                                        :model="$user"
                                        :editPermission="'edit-user'"
                                        :editLink="route('user.edit', $user)"
                                        :deleteLink="route('user.destroy', $user)"
                                        :deletePermission="'destroy-user'"
                                    ></x-action-row>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th scope="row"></th>
                                    <td colspan="4">No users found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>




                </div>
            </div>
        </div>
       </div>

@endsection
