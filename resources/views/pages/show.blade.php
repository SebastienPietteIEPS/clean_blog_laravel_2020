<h1>{{ $page ->titre }}</h1>
    <div class="">
        <h2>{{ $page ->sousTitre }}</h2>
    </div>
    <div class="">
         {!! html_entity_decode($page ->texte) !!}
    </div>
