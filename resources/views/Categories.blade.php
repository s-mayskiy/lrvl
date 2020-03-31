@include('menu')

<h1>Категории</h1><br>
@foreach ($Categories as $category)
    <a href="{{ route('Categories.show', $category["categoryTxt"]) }}">{{ $category["name"] }}</a><br>
@endforeach


