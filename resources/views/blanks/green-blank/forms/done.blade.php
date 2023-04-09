@extends('blanks.green-blank.blank-layout')

@section('form')
    <form action="{{route('green-blank.save-additional')}}" method="POST">
        @csrf
        @method('POST')
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 sm:p-12 text-gray-900">

                <div class="flex justify-between sm:justify-start sm:block space-x-2">
                    <x-a-button href="{{route('green-blank.additional')}}" class="bg-gray-800 hover:bg-gray-700 hidden md:inline-block">
                        {{ __('← Back') }}
                    </x-a-button>
                    <x-a-button href="{{ route('green-blank.pdf-show') }}" class="bg-gray-800 hover:bg-gray-700">
                        {{ __('Show ') }} <i class="pl-3 fa-solid fa-file-pdf"></i>
                    </x-a-button>
                    <x-a-button href="{{ route('green-blank.pdf-download') }}" class="bg-gray-800 hover:bg-gray-700">
                        {{ __('Download ') }} <i class="pl-3 fa-solid fa-file-export"></i>
                    </x-a-button>
                </div>
            </div>
        </div>
    </form>
@endsection