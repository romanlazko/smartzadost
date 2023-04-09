@extends('blanks.green-blank.blank-layout')

@section('form')
    
    <form action="{{ route("green-blank.save-last-residence-abroad") }}" method="POST">
        @csrf
        @method('POST')
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 sm:p-12 text-gray-900">
                <h1 class="font-semibold text-md">Poslední bydliště v cizině / Last residence abroad:</h1>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="street" :value="__('Ulice / Street:')"/>
                        <x-text-input id="street" name="street" type="text" class="mt-1 block w-full" :value="old('street', $last_residence_abroad?->street)" autofocus autocomplete="street" maxlength="17"/>
                        <x-input-error class="mt-2" :messages="$errors->get('street')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="number" :value="__('Číslo / Number:')"/>
                        <x-text-input id="number" name="number" type="text" class="mt-1 block w-full" :value="old('number', $last_residence_abroad?->number)" autofocus autocomplete="number" maxlength="5"/>
                        <x-input-error class="mt-2" :messages="$errors->get('number')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="town" :value="__('Město / Town:')"/>
                        <x-text-input id="town" name="town" type="text" class="mt-1 block w-full" :value="old('town', $last_residence_abroad?->town)" autofocus autocomplete="town" maxlength="14"/>
                        <x-input-error class="mt-2" :messages="$errors->get('town')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="country" :value="__('Stát / Country:')"/>
                        <x-select id="country" name="country" class="mt-1 block w-full" autocomplete="country">
                            <x-options-country :selected="old('country', $last_residence_abroad?->country)"/>
                        </x-select>
                        <x-input-error class="mt-2" :messages="$errors->get('country')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="post_code" :value="__('PSČ / Post code:')"/>
                        <x-text-input id="post_code" name="post_code" type="text" class="mt-1 block w-full" :value="old('post_code', $last_residence_abroad?->post_code)" autofocus autocomplete="post_code" maxlength="5"/>
                        <x-input-error class="mt-2" :messages="$errors->get('post_code')"/>
                    </x-blank-input>
                </x-blank-div>

                <div class="pt-8 flex justify-between sm:justify-start sm:block">
                    <x-a-button href="{{route('green-blank.employment-after-arrival')}}" class="bg-gray-800 hover:bg-gray-700">
                        {{ __('← Back') }}
                    </x-a-button> 
                    <x-primary-button>{{ __('Continue') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
@endsection