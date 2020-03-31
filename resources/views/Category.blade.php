@include('menu');

<h1>{{ $Category['name'] }}</h1>
@foreach ($Category['news'] as $singleNews)
    <a href="{{ route('News.show', $singleNews['id'])}}">{{ $singleNews['title']}}</a><br>
@endforeach

