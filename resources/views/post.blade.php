@extends('layouts.app')

@section('content')
<div class="container">
    <post-component v-bind:post="{{$id}}"></post-component>
</div>
@endsection