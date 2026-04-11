<nav aria-label="Page navigation example" style="margin-top: 50px;">
    <ul class="pagination pagination-lg justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true" aria-label="Primeira página">
                @if ($firstPage === 'first')
                    <i class="bi bi-chevron-bar-left"></i>
                @endif
            </a>
        </li>

        @for ($i = 1; $i <= 10; $i++)
            <li class="page-item"><a class="page-link" href="#">{{ $i }}</a></li>
        @endfor

        <li class="page-item">
            <a class="page-link" href="#" aria-label="Última página">
                @if ($lastPage === 'last')
                    <i class="bi bi-chevron-bar-right"></i>
                @endif
            </a>
        </li>
    </ul>
</nav>