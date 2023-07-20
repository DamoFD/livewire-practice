<div>
@if ($paginator->hasPages())
<ul class="flex justify-between mt-10">

    <!-- previous page link -->
    @if ($paginator->onFirstPage())
        <li class="px-2 py-1 rounded border shadow bg-gray-300 text-gray-600">Prev</li>
    @else
        <li wire:click="previousPage" class="cursor-pointer px-2 py-1 rounded border shadow bg-white">Prev</li>
    @endif
    <!-- !previous page link -->

    <!-- numbers -->
    @foreach ($elements as $element)
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="mx-2 text-gray-500">{{$page}}</li>
                @else
                    <li wire:click="gotoPage({{$page}})" class="mx-2 cursor-pointer">{{$page}}</li>
              @endif
            @endforeach
        @endif
    @endforeach
    <!-- !numbers -->

    <!-- next page link -->
    @if ($paginator->hasMorePages())
        <li wire:click="nextPage" class="cursor-pointer px-2 py-1 rounded border shadow bg-white">Next</li>
    @else
        <li class="px-2 py-1 rounded border shadow bg-gray-300 text-gray-600">Next</li>
    @endif
    <!--!next page link -->
</ul>
@endif
</div>
