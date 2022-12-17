<div>
    <h3>{{$title}}</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @foreach( $items as $item)
                <li class="breadcrumb-item"><a href="#">{{$item}}</a></li>
            @endforeach


        </ol>
    </nav>
</div>
