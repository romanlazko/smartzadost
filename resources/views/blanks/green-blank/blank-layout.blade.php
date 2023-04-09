@extends('layouts.app')

@section('header')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <div class="w-1/2">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Application for the issue and extension of a long-term residence permit') }}
            </h2>
        </div>
        <div class="space-x-3 hidden md:block">
            <x-a-button href="{{ route('green-blank.pdf-empty') }}" class="bg-gray-800 hover:bg-gray-700">
                {{ __('Empty ') }} <i class="pl-3 fa-solid fa-file"></i></i>
            </x-a-button>
            <x-a-button href="{{ route('green-blank.pdf-show') }}" class="bg-gray-800 hover:bg-gray-700">
                {{ __('Show ') }} <i class="pl-3 fa-solid fa-file-pdf"></i></i>
            </x-a-button>
            <x-a-button href="{{ route('green-blank.pdf-download') }}" class="bg-gray-800 hover:bg-gray-700">
                {{ __('Download ') }} <i class="pl-3 fa-solid fa-file-export"></i>
            </x-a-button>
        </div>
        <div class="space-x-3 md:hidden block">
            <a href="{{ route('green-blank.pdf-empty') }}">
                <i class="pl-3 fa-solid fa-file"></i>
            </a>
            <a href="{{ route('green-blank.pdf-show') }}">
                <i class="pl-3 fa-solid fa-file-pdf"></i>
            </a>
            <a href="{{ route('green-blank.pdf-download') }}">
                <i class="pl-3 fa-solid fa-file-export"></i>
            </a>
        </div>
        
    </div>
@endsection

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        @yield('form')
            
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('label').click(function(){
                var currentInfo = $(this).closest('.blank-div').find('.blank-input-info');
                $('.blank-input-info').not(currentInfo).hide('fast');
                currentInfo.toggle('hidden');
            });
            
            $('.close-button').click(function(){
                $(this).closest('.section').hide('slow', function(){
                    $(this).find('input, select').val('');
                })
            });

            $('.open-button').click(function(){
                $(this).closest('.section').next('.section').show('slow');
            });
        });
    </script>
@endsection