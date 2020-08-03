{{-- See docs for Filepond: https://github.com/pqina/filepond --}}

{{-- Note CDN imports in the master layout head and end of body. --}}

<div
    class=""
    x-data="{
        pond: null
    }"

    x-init="
        FilePond.registerPlugin(FilePondPluginFileValidateType);
        FilePond.registerPlugin(FilePondPluginFileValidateSize);
        FilePond.registerPlugin(FilePondPluginImagePreview);

        FilePond.setOptions({
            acceptedFileTypes:
            [
                'image/png', 'image/jpeg'
            ],
            allowMultiple: true,
            maxFileSize: '1MB'
        });

        const filepond = FilePond.create(
            $refs.filepond
        );

        pond = filepond;
    "

>
    <input type="file" x-ref="filepond">
</div>
