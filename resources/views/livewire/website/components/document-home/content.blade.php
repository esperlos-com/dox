@push('custom-styles')
    <link rel="stylesheet" href="{{asset('assets/vendors/hilightjs/styles/base16/one-light.min.css')}}"/>
@endpush

<article class="document-container w-100">
    <header class="mb-4">
        <h1>{{$menu->menu_tl->title??$menu->title}}</h1>
        <nav  aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a >{{$breadcrumb['title']}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$breadcrumb['child']['title']}}</li>
            </ol>
        </nav>
    </header>
    {!! $document->document_tl->content??$document?->content !!}
</article>


@push('custom-scripts')
    <script src="{{asset('assets/vendors/hilightjs/highlight.min.js')}}"></script>


    <script defer>

        document.addEventListener('DOMContentLoaded', (event) => {

            document.querySelectorAll('pre code').forEach((el) => {
                hljs.highlightElement(el);
            });
        });
    </script>
@endpush



