{{-- See docs for Tagify: https://github.com/yairEO/tagify --}}

{{-- Note CDN imports in the master layout head and end of body. --}}

<div
x-cloak
wire:ignore
x-data="{
    tagify: null
}"

class="w-full"

x-init="
    tagify = new Tagify($refs['tag-input']);
"

>
    <input x-ref="tag-input" placeholder="Add tags...">
</div>
