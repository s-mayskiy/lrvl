
@include('menu')

<h1><a href="{{ route('Categories.show', $SingleNews['category']['categoryTxt']) }}">{{ $SingleNews['category']['name'] }}</a></h1><br>
<h2>{{ $SingleNews['singleNews']['title'] }}</h2>
<p>{{ $SingleNews['singleNews']['text'] }}</p>

