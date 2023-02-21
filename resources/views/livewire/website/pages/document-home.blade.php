@push('custom-styles')
    <link rel="stylesheet" href="{{asset('assets/vendors/hilightjs/styles/base16/default-dark.min.css')}}"/>

@endpush



<main id="main">

    <livewire:website.components.document-home.content/>
</main>

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
