@extends('admin.layouts.main')

@section('title','Skills')

@section('content')

    <div id="page-wrapper">
        <div class="row">
           <div class="col-md-12 text-center">
               <h1>All  Skills</h1>
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
                        <th>Skill Title</th>
                        <th>Skill Percentage</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Delete</th>
                    </tr>
                    
                    
                    @foreach($skills as $skill)
                    <tr>
                        <td>{{ $skill->id }}</td>
                        <td><a href="/admin/skills/{{$skill->id}}/edit">{{ $skill->skill_title}}</a></td>
                        <td>{{ $skill->skill_percent }}</td>
                        <td>{{ $skill->created_at->diffForHumans() }}</td>
                        <td>{{ $skill->updated_at->diffForHumans() }}</td>
                        <td><a class="btn btn-danger" href = "{{ url('/admin/skills/' . $skill->id . '/delete') }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                    </tr>
                    @endforeach
                </table>
                {{ $skills->links() }}
            </div>
        </div>
    </div>
    
@endsection