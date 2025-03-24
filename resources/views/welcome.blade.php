@extends('layouts.masterlayout')
@section('content')

   <h2>Home Page</h2>
   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
    when an unknown printer took a galley of type and scrambled it to make a type 
    specimen book. It has survived not only five centuries, but also the leap into 
    electronic typesetting, remaining essentially unchanged. It was popularised in 
    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
    and more recently with desktop publishing software like Aldus PageMaker including 
    versions of Lorem Ipsum.</p>
@endsection

@section('title')
 Home

@endsection

@push('scripts')
  <script src="/jquery.js"></script>
  <script src="/bootstrap.js"></script>
  <script src="/example.js"></script>
   
@endpush
@push('scripts')
  <script src="/vue.js"></script>
  
@endpush

@push('style')
  <link rel="stylesheet" href="css/bootstap.css">
@endpush

@prepend('style')
  <style>
     #wrapper{
        background :tan;
    }
   </style>
    
@endprepend
