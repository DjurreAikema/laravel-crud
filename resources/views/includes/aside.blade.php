<ul class="list-group list-group-flush">
    <li class="list-group-item"><h3 style="margin-left:-10px;margin-bottom: -7px;font-size: 20px">Product categorieën:</h3></li>
    @foreach($categories as $category)
        <li class="list-group-item"><a
                    href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></li>
    @endforeach
</ul>