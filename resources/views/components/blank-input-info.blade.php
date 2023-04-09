<div {!! $attributes->merge(['class' => 'sm:px-12 mb-6 w-full order-1 hidden sm:w-1/2 sm:order-2 sm:m-0 blank-input-info']) !!}>
    <div class="p-3 bg-slate-200 rounded-sm text-slate-500 text-sm">
        {{$slot}}
    </div>
</div>