<div id="" class="row">
    <div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar">
        <div>
            <select name="kt_customers_table_length" aria-controls="kt_customers_table" class="form-select form-select-solid form-select-sm" id="dt-length-0">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <label for="dt-length-0"></label>
        </div>
    </div>
    <div id="" class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
        <div class="dt-paging paging_simple_numbers">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="dt-paging-button page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <a class="page-link previous" aria-controls="kt_customers_table" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1"><i class="previous"></i></a>
                    </li>
                @else
                    <li class="dt-paging-button page-item">
                        <a href="{{ $paginator->previousPageUrl() }}" class="page-link previous" aria-controls="kt_customers_table" aria-label="@lang('pagination.previous')" data-dt-idx="previous" tabindex="0"><i class="previous"></i></a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="dt-paging-button page-item disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="dt-paging-button page-item active" aria-current="page"><a href="#" class="page-link" aria-controls="kt_customers_table" data-dt-idx="{{ $page }}" tabindex="0">{{ $page }}</a></li>
                            @else
                                <li class="dt-paging-button page-item"><a href="{{ $url }}" class="page-link" aria-controls="kt_customers_table" data-dt-idx="{{ $page }}" tabindex="0">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="dt-paging-button page-item">
                        <a href="{{ $paginator->nextPageUrl() }}" class="page-link next" aria-controls="kt_customers_table" aria-label="@lang('pagination.next')" data-dt-idx="next" tabindex="0"><i class="next"></i></a>
                    </li>
                @else
                    <li class="dt-paging-button page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <a class="page-link next" aria-controls="kt_customers_table" aria-disabled="true" aria-label="Next" data-dt-idx="next" tabindex="-1"><i class="next"></i></a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
