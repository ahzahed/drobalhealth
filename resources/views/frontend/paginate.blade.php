@if ($paginator->lastPage() > 1)
<div class="row">
    <div class="col-12">
        <div class="blog-pagination">
            <ul class="flat-pagination clearfix">

                @for ($i = 1; $i <= $paginator->lastPage(); $i++)

                    <li><a href="{{ $paginator->url($i) }}" style="margin-left: 8px"
                            class="{{ ($paginator->currentPage() == $i) ? 'btn active' : 'btn' }}">{{ $i }}</a></li>

                    @endfor
                    <li class="next">
                        <a href="{{ $paginator->url($paginator->currentPage()+1) }}"
                            class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? 'btn disabled' : 'btn ' }}"><i
                                class="fa fa-angle-right"></i></a>
                    </li>
                    <li class="prev">
                        <a href="{{ $paginator->url(1) }}"
                            class="{{ ($paginator->currentPage() == 1) ? 'btn disabled' : 'btn' }}"><i
                                class="fa fa-angle-left"></i></a>
                    </li>
            </ul>
        </div><!-- /.blog-pagination -->
    </div>
</div>
@endif