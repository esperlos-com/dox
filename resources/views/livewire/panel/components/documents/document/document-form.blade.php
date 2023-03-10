<div class="card">

    <div class="card-body">


        <div style="display:flex; justify-content:space-between;align-items:start">
            <h5 class="card-title">@lang('panel/global.document.form.title')</h5>
            <a href="{{$isFromTranslate?$previousUrl:$urlWithoutParam}}"
               class="btn btn-primary text-white ">
                <i class="ti-arrow-left"></i>
            </a>
        </div>


        <form wire:submit.prevent="submit">


            <div class="row">
                <div class="col-xl-12">
                    <div wire:ignore class="form-group">
                        <label class="required" for="MenuId">@lang('panel/global.document.form.menu')</label>
                        <select wire:model.defer="document.menu_id" class="form-control" id="MenuId">

                            <option value="" selected>@lang('panel/global.document.form.select_menu')
                            </option>

                            @foreach($menus as $item)
                                <option disabled
                                        value="{{ $item->id }}">{{ $item->title }}</option>
                                @foreach($submenus as $submenuItem)

                                    @if($submenuItem->pid == $item->id)
                                        <option
                                            value="{{ $submenuItem->id }}">
                                            &nbsp;&nbsp;&nbsp;{{$submenuItem->title }}</option>
                                    @endif


                                @endforeach




                            @endforeach

                        </select>
                        @error('document.menu_id')
                        <x-error-message>{{$message}}</x-error-message>@enderror
                    </div>
                </div>

            </div>

            <div wire:ignore class="row">
                <div wire.ignore class="col-xl-12">

                    <div class="form-group">
                        <label for="content">@lang('panel/global.document.form.content')</label>
                        <textarea
                            wire:model.defer="document.content"
                            id="content"></textarea>
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">@lang('panel/global.button.submit')</button>
        </form>


    </div>

</div>


@push('custom-scripts')
    <script src="{{asset('assets/vendors/bundle.js')}}"></script>
    <script src="{{asset('assets/vendors/tinymce/tinymce.bundle.js')}}"></script>
    <script>

        var KTTinymce = function () {
            // Private functions
            var demos = function () {

                tinymce.init({
                    selector: '#content',
                    menubar: true,
                    height: "1200",
                    allow_html_in_named_anchor: true,
                    paste_data_images: true,
                    file_browser_callback_types: 'image',
                    images_file_types: 'jpeg,jpg,png,gif',
                    toolbar: ['styleselect fontselect fontsizeselect',
                        'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify',
                        'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code | anchor | codesample | ltr rtl | pageembed'],
                    plugins: 'advlist autolink link image lists charmap print preview code anchor codesample directionality pageembed',
                    image_title: true,
                    automatic_uploads: true,
                    images_upload_url: 'upload',
                    images_upload_base_path: '',
                    file_picker_types: 'image',
                    images_upload_credentials: true,
                    images_upload_handler: function (blobInfo, success, failure) {
                        var xhr, formData;
                        xhr = new XMLHttpRequest();
                        xhr.withCredentials = false;
                        xhr.open('POST', '/document-management/upload');
                        var token = '{{ csrf_token() }}';
                        xhr.setRequestHeader("X-CSRF-Token", token);
                        xhr.onload = function () {
                            var json;
                            if (xhr.status != 200) {
                                failure('HTTP Error: ' + xhr.status);
                                return;
                            }
                            json = JSON.parse(xhr.responseText);

                            if (!json || typeof json.location != 'string') {
                                failure('Invalid JSON: ' + xhr.responseText);
                                return;
                            }
                            success(json.location);
                        };
                        formData = new FormData();
                        formData.append('file', blobInfo.blob(), blobInfo.filename());
                        xhr.send(formData);
                    },
                    file_picker_callback: function (cb, value, meta) {

                        var input = document.createElement('input');
                        input.setAttribute('type', 'file');
                        input.setAttribute('accept', 'image/*');
                        input.onchange = function () {
                            var file = this.files[0];
                            var reader = new FileReader();
                            reader.readAsDataURL(file);
                            reader.onload = function () {
                                var id = 'blobid' + (new Date()).getTime() + file.name;
                                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                                var base64 = reader.result.split(',')[1];
                                var blobInfo = blobCache.create(id, file, base64);
                                blobCache.add(blobInfo);
                                cb(blobInfo.blobUri(), {title: file.name});
                            };
                        };
                        input.click();
                    },
                    setup: function (editor) {
                        editor.on('init change', function () {
                            editor.save();
                        });
                        editor.on('change', function (e) {

                        @this.set('document.content', editor.getContent());
                        });
                    },
                });
            }

            return {
                // public functions
                init: function () {
                    demos();
                }
            };
        }();

        // Initialization
        jQuery(document).ready(function () {
            KTTinymce.init();

        });

    </script>


@endpush


