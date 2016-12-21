@extends('admin.layouts.main')

@section('title','Works')

@section('content')

    <div id="page-wrapper">
        <div class="row">
           <div class="col-md-12 text-center">
               <h1>All  Works</h1>
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
                        <th>Work Title</th>
                        <th>Work Description</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Service</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Delete</th>
                    </tr>
                    
                    
                    @foreach($works as $work)
                    <tr>
                        <td>{{ $work->id }}</td>
                        <td><a href="/admin/work/{{$work->id}}/edit">{{ $work->title}}</a></td>
                        <td>{{ str_limit($work->description, 50) }}</td>
                        <td><img src="/{{ $work->img_path }}" alt="" width="60" height="60"></td>
                        <td>{{ $work->date }}</td>
                        <td>{{ $work->service }}</td>
                        <td>{{ $work->created_at->diffForHumans() }}</td>
                        <td>{{ $work->updated_at->diffForHumans() }}</td>
                        <td><a class="btn btn-danger" href = "{{ url('/admin/work/' . $work->id . '/delete') }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                    </tr>
                    @endforeach
                </table>
                {{ $works->links() }}
            </div>
        </div>
    </div>
    
@endsection