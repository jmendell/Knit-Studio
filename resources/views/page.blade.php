@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.sage-partials.content-page')
  @endwhile
@endsection
