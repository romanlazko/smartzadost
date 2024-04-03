@extends('blanks.green-blank.blank-layout')

@section('form')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
    <div class="p-6 sm:p-12 text-gray-900">
        <div class="md:flex space-x-3">
            <div class="w-full md:w-1/6 ">
                <img src="/img/green_blank/greenblank-mini.jpg" alt="" class="">
            </div>
            <div class="w-full md:w-5/6">
                <p>
                    {{ __("greenblank.forms.index.application") }}
                </p>
                <br>
                <p>
                    <b>{{ __("greenblank.forms.index.diversity") }}</b>
                </p>
                <br>
                <p>
                    {{ __("greenblank.forms.index.information")}}
                </p>
                <div class="mt-4 p-3 rounded-xl bg-gray-800 text-white">
                    <p>
                        {{ __("greenblank.forms.index.encryption") }}
                    </p>
                </div>
            </div>
        </div>
        
        <div class="flex justify-between sm:justify-start sm:block">
            <x-a-button :href="route('green-blank.application')" class="mt-8 bg-gray-800 hover:bg-gray-700">
                {{ __("greenblank.forms.index.start_filling") }}
            </x-a-button>
        </div>
    </div>
</div>
@endsection