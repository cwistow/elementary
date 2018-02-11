@extends('layouts.app')

@php
  $args = array( 'posts_per_page' => 2 );
  $posts_object = new WP_Query( $args );
@endphp

@section('content')
  @include('partials.hero')
  @php($i=0)
  @while($posts_object->have_posts()) @php($posts_object->the_post())
    @php($i++)
    @include('partials.content-front-page')
  @endwhile
  
  {!! wp_reset_postdata() !!}
  
  @include('partials.content-contact-form')
@endsection
