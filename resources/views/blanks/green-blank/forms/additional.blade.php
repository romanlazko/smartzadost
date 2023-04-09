@extends('blanks.green-blank.blank-layout')

@section('form')
    <form action="{{route('green-blank.save-additional')}}" method="POST">
        @csrf
        @method('POST')
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 sm:p-12 text-gray-900">
                <h1 class="font-semibold text-md">Doplňující informace / Additional information:</h1>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="email" :value="__('Kontaktní e-mail / Contact email:')"/>
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $additional?->email)" autocomplete="email" maxlength="32"/>
                        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="phone" :value="__('Telefonní číslo / Phone number:')"/>
                        <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $additional?->phone)" autocomplete="phone" maxlength="32"/>
                        <x-input-error class="mt-2" :messages="$errors->get('phone')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="information" :value="__('Doplňující informace / Additional information:')"/>
                        <x-text-input id="information" name="information" type="text" class="mt-1 block w-full" :value="old('information', $additional?->information)" autocomplete="information" maxlength="140"/>
                        <x-input-error class="mt-2" :messages="$errors->get('information')"/>
                    </x-blank-input>
                </x-blank-div>

                <div class="pt-8 flex justify-between sm:justify-start sm:block">
                    <x-a-button href="{{route('green-blank.siblings')}}" class="bg-gray-800 hover:bg-gray-700">
                        {{ __('← Back') }}
                    </x-a-button> 
                    <x-primary-button>{{ __('Continue') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
@endsection