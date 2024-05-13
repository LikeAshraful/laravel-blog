@extends('layouts.app')
@section('title', 'blog likeashraful')

@push('css')
    
@endpush

@section('content')
    <feature-post></feature-post>
    <four-column-list></four-column-list>
    <trending-post></trending-post>
    <two-column-list></two-column-list>
@endsection

@push('scripts')
@endpush
