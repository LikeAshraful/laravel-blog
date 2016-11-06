@extends('admin.layouts.main')

@section('title','Users')

@section('content')

    <div id="page-wrapper">
        <div class="row">
           <div class="col-md-12 text-center">
               <h1>All  Users</h1>
           </div>
        </div>
        
        <div class="row">
            
            <div class="col-md-12">
                
                 @if( Session::has('message') )
                  <div class="alert alert-warning alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        {{Session::get('message')}}
                    </div>
                @endif
                
                <table class="table table-hover">
                    <tr>
                        <th>Serial No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Updated</th>
                    </tr>
                    
                    
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->email}}</td>
                        <td>{{ $user->role->name }}</td>
                        <td>{{ $user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td>{{ $user->updated_at->diffForHumans() }}</td>
                    </tr>
                    @endforeach
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
        </div>
        
    </div>

@endsection