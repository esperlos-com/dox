<div>
    <h3>@lang($title)</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @foreach( $items as $item)
                <li class="breadcrumb-item"><a href="#">@lang($item)</a></li>
            @endforeach


        </ol>
    </nav>
</div>
