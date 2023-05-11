@extends('layouts.app')

@section('header')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blanks') }}
        </h2>
    </div>
@endsection

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 md:flex md:justify-between md:items-center">
                <div class="lg:w-1/2">
                    <a href="{{ route("green-blank.index") }}" class="flex justify-between items-center space-x-4 w-full">
                        <div>
                            <img src="img/green_blank/greenblank-mini.jpg" alt="" class="w-36 sm:w-20 rounded-full">
                        </div>
                        <div class="">
                            <p>
                                {{ __("Žádost o vydání a prodloužení doby platnosti povolení k dlouhodobému pobytu") }}
                            </p>
                            <small class="text-sm text-gray-500" class="w-full">
                                Application for the issue and extension of a long-term residence permit
                            </small>
                        </div>
                    </a>
                </div>
                <div class="space-x-3 hidden lg:block">
                    <x-a-button href="{{ route('green-blank.index') }}">
                        {{ __('Fill ') }} <i class="pl-3 fa-solid fa-file-pen"></i></i></i>
                    </x-a-button>
                    <x-a-target-button href="{{ route('green-blank.pdf-show') }}">
                        {{ __('Show ') }} <i class="pl-3 fa-solid fa-file-pdf"></i>
                    </x-a-target-button>
                    <x-a-target-button href="{{ route('green-blank.pdf-download') }}">
                        {{ __('Download ') }} <i class="pl-3 fa-solid fa-file-export"></i>
                    </x-a-target-button>
                </div>
            </div>
        </div>
        <x-advertisement.centr1/>
    </div>
    
@endsection
