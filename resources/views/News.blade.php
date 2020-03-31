@include('menu')

<h1>Новости</h1><br>
@foreach ($News as $singleNews)
    <a href="{{ route('News.show', $singleNews['id'])}}">{{ $singleNews['title']}}</a><br>
@endforeach


