@extends('layouts.masterlayout')
@section('content')

   <h2>About Page</h2>
    
    @verbatim
    <div id="app">{{message }}</div>
        
    @endverbatimb
@endsection

@section('title')
 About

@endsection

@push('scripts')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>



<script>
  const { createApp } = Vue

  createApp({
    data() {
        return {
        message : 'Hello vue!'
      }
    }
  }).mount('#app')
</script>
@endpush


