<article class="flex flex-col" x-show.transition="
    searchTerm.length > 0 ? new String('{{ $name }}').toLowerCase().includes(searchTerm.toLowerCase()) : true;
">

    <h4 class="text-lg sm:text-2xl">{{ $name }}</h4>
  
    <a class="text-xs self-start sm:text-sm text-gray-500 mb-4 transition duration-150 hover:text-primary hover:underline focus:underline focus:text-primary" href="{{ $link }}" title="View code for {{ $name }}" target="_blank">View Code</a>

    @include('_components/'.$component)

</article>