@if ($paginator->hasPages())
  <div class="row blog-area">
    <div class="col-sm-12 text-center bolg_side-left">
      <nav aria-label="Page navigation">
        <ul class="pagination">
          @if ($paginator->onFirstPage())
            <li class="page-item">
              <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
          @else
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
          @endif
          @foreach ($elements as $element)
            @if (is_array($element))
              @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                  <li class="page-item active"><a class="page-link active" href="#">{{ $page }}</a></li>
                @else
                  <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
              @endforeach
            @endif
          @endforeach
          @if ($paginator->hasMorePages())
            <li class="page-item">
              <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          @else
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          @endif


        </ul>
      </nav>
    </div>
  </div>
@endif
