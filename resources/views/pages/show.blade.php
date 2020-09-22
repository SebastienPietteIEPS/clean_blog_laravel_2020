@extends('templates.index')



@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{asset ('assets/img/' . $page->image)}})">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>{{ $page->titre }}</h1>
              <span class="subheading">{{ $page->sousTitre }}</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Textes -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="clearfix">
            {!! html_entity_decode ($page->texte) !!}
          </div>
          {{-- Ici viennent les contenus complémentaires (posts, formulaires,...) --}}
        </div>
      </div>
    </div>
@endsection
