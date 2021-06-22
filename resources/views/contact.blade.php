@extends('layouts.index')

@section('content')
	@include('partials.contact.header')
	@include('partials.contact.pageheader')
	@include('partials.contact.googlemap')
	@include('partials.contact.contact')
@endsection

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
<script src="js/map.js"></script>