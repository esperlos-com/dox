<div class="card">

    <div class="card-body">


        <div style="display:flex; justify-content:space-between;align-items:start">
            <h5 class="card-title">فرم پست ها</h5>
            <a href="{{$isFromTranslate?$previousUrl:$urlWithoutParam}}"
               class="btn btn-primary text-white ">
                <i class="ti-arrow-left"></i>
            </a>
        </div>


        <form wire:submit.prevent="submit">


            <div class="row">
                <div class="col-xl-12">
                    <div wire:ignore class="form-group">
                        <label class="required" for="MenuId">منو</label>
                        <select wire:model.defer="document.menu_id" class="form-control" id="MenuId">

                            <option value="" selected>منو را انتخاب نمایید
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
                        <label for="content">نوشته</label>
                        <textarea wire:model.defer="document.content" id="content"></textarea>
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">ثبت</button>
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
                        'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code | anchor '],
                    plugins: 'advlist autolink link image lists charmap print preview code anchor',
                    image_title: true,
                    automatic_uploads: true,
                    images_upload_url: 'upload',
                    images_upload_base_path: '',
                    file_picker_types: 'image',
                    file_picker_callback: function(cb, value, meta) {
                        var input = document.createElement('input');
                        input.setAttribute('type', 'file');
                        input.setAttribute('accept', 'image/*');
                        input.onchange = function() {
                            var file = this.files[0];

                            var reader = new FileReader();
                            reader.readAsDataURL(file);
                            reader.onload = function () {
                                var id = 'blobid' + (new Date()).getTime();
                                var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                                var base64 = reader.result.split(',')[1];
                                var blobInfo = blobCache.create(id, file, base64);
                                blobCache.add(blobInfo);
                                cb(blobInfo.blobUri(), { title: file.name });
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


