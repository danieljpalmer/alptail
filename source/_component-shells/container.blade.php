<article x-show.transition="new String('{{ $name }}').includes(searchTerm);">

    <h4 class="text-2xl mb-4">{{ $name }}</h4>
    @yield('content')

</article>