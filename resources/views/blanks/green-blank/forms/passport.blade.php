@extends('blanks.green-blank.blank-layout')

@section('form')
    <form action="{{route('green-blank.save-passport')}}" method="POST">
        @csrf
        @method('POST')
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 sm:p-12 text-gray-900">
                <h1 class="font-semibold text-md">Údaje o pasu / Passport data:</h1>
                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="number" :value="__('Číslo cestovního dokladu / Travel document number:')"/>
                        <x-text-input id="number" name="number" type="text" class="mt-1 block w-full" :value="old('number', $passport?->number)" autofocus autocomplete="number" maxlength="12"/>
                        <x-input-error class="mt-2" :messages="$errors->get('number')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="country" :value="__('Stát / Country:')"/>
                        <x-select id="country" name="country" class="mt-1 block w-full" autocomplete="country">
                            <x-options-country :selected="old('country', $passport?->country)"/>
                        </x-select>
                        <x-input-error class="mt-2" :messages="$errors->get('country')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="nationality" :value="__('Státní občanství / Nationality:')" />
                        <x-select id="nationality" name="nationality" class="mt-1 block w-full" autocomplete="nationality">
                            <x-options-country :selected="old('nationality', $passport?->nationality)"/>
                        </x-select>
                        <x-input-error class="mt-2" :messages="$errors->get('birth')" />
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="country_of_birth" :value="__('Stát narození / Country of birth:')" />
                        <x-select id="country_of_birth" name="country_of_birth" class="mt-1 block w-full" autocomplete="country_of_birth">
                            <x-options-country :selected="old('country_of_birth', $passport?->country_of_birth)"/>
                        </x-select>
                        <x-input-error class="mt-2" :messages="$errors->get('country_of_birth')" />
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="place_of_birth" :value="__('Místo narození / Place of birth: ℹ️')"/>
                        <x-text-input id="place_of_birth" name="place_of_birth" type="text" class="mt-1 block w-full" :value="old('place_of_birth', $passport?->place_of_birth)" autocomplete="place_of_birth" maxlength="20"/>
                        <x-input-error class="mt-2" :messages="$errors->get('place_of_birth')"/>
                    </x-blank-input>
                    <x-blank-input-info>
                        {{__("Information about the place where you were born.")}}
                        <br><br>
                        <b>{{ __("You need to enter the city where you were born.") }}</b>
                    </x-blank-input-info>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="issued" :value="__('Platnost cestovního dokladu OD / Travel document valid FROM:')"/>
                        <x-text-input id="issued" name="issued" type="date" class="mt-1 block w-full" :value="old('issued', $passport?->issued?->format('Y-m-d'))" autofocus autocomplete="issued"/>
                        <x-input-error class="mt-2" :messages="$errors->get('issued')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="expires" :value="__('Platnost cestovního dokladu DO / Travel document valid TO:')"/>
                        <x-text-input id="expires" name="expires" type="date" class="mt-1 block w-full" :value="old('expires', $passport?->expires?->format('Y-m-d'))" autofocus autocomplete="expires"/>
                        <x-input-error class="mt-2" :messages="$errors->get('expires')"/>
                    </x-blank-input>
                </x-blank-div>

                <div class="pt-8 flex justify-between sm:justify-start sm:block">
                    <x-a-button href="{{route('green-blank.personal')}}" class="bg-gray-800 hover:bg-gray-700">
                        {{ __('← Back') }}
                    </x-a-button> 
                    <x-primary-button>{{ __('Continue') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
@endsection