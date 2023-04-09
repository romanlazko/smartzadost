@extends('blanks.green-blank.blank-layout')

@section('form')
    
    <form action="{{ route('green-blank.save-mother') }}" method="POST">
        @csrf
        @method('POST')
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 sm:p-12 text-gray-900">
                <h1 class="font-semibold text-md">Matka / Mother:</h1>
                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="surname" :value="__('Přijmení / Surname:')"/>
                        <x-text-input id="surname" name="surname" type="text" class="mt-1 block w-full" :value="old('surname', $mother?->surname)" autofocus autocomplete="surname" maxlength="32"/>
                        <x-input-error class="mt-2" :messages="$errors->get('surname')"/>
                    </x-blank-input>
                </x-blank-div>
                
                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="other_names" :value="__('Ostatní jména / Other names: ℹ️')" class="show-info"/>
                        <x-text-input id="other_names" name="other_names" type="text" class="mt-1 block w-full" :value="old('other_names', $mother?->other_names)" autofocus autocomplete="other_names" maxlength="64"/>
                        <x-input-error class="mt-2" :messages="$errors->get('other_names')"/>
                    </x-blank-input>

                    <x-blank-input-info>
                        {{__("The item 'OTHER NAMES' means that the respondent has used other names in the past than the name he/she currently uses. This could be due to various circumstances, such as marriage, divorce, name change, etc.")}}
                        <br>
                        <b>{{__("If you have not changed your first name, leave the item empty.")}}</b>
                    </x-blank-input-info>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="first_name" :value="__('Jméno(a) / First name(s):')" />
                        <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name', $mother?->first_name)" autofocus autocomplete="first_name" maxlength="23"/>
                        <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="birth" :value="__('Datum narození / Date of birth:')" />
                        <x-text-input id="birth" name="birth" type="date" class="mt-1 block w-full" :value="old('birth', $mother?->birth?->format('Y-m-d'))" autofocus autocomplete="birth" />
                        <x-input-error class="mt-2" :messages="$errors->get('birth')" />
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="nationality" :value="__('Státní občanství / Nationality:')" />
                        <x-select id="nationality" name="passport[nationality]" class="mt-1 block w-full" autocomplete="nationality">
                            <x-options-country :selected="old('passport.nationality', $mother?->passport?->nationality)"/>
                        </x-select>
                        <x-input-error class="mt-2" :messages="$errors->get('birth')" />
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="occupation" :value="__('Povolání / Occupation:')" />
                        <x-text-input id="occupation" name="occupation[occupation]" type="text" class="mt-1 block w-full" :value="old('occupation.occupation', $mother?->occupation?->occupation)" autocomplete="occupation" maxlength="22"/>
                        <x-input-error class="mt-2" :messages="$errors->get('occupation')" />
                    </x-blank-input>
                </x-blank-div>

                <h1 class="font-semibold text-md mt-12">Bydliště / Residence address:</h1>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="street" :value="__('Ulice / Street:')"/>
                        <x-text-input id="street" name="address[street]" type="text" class="mt-1 block w-full" :value="old('address.street', $mother?->address?->street)" autocomplete="street" maxlength="10"/>
                        <x-input-error class="mt-2" :messages="$errors->get('street')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="number" :value="__('Číslo / Number:')"/>
                        <x-text-input id="number" name="address[number]" type="text" class="mt-1 block w-full" :value="old('address.number', $mother?->address?->number)" autocomplete="number" maxlength="5"/>
                        <x-input-error class="mt-2" :messages="$errors->get('number')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="town" :value="__('Město / Town:')"/>
                        <x-text-input id="town" name="address[town]" type="text" class="mt-1 block w-full" :value="old('address.town', $mother?->address?->town)" autocomplete="town" maxlength="10"/>
                        <x-input-error class="mt-2" :messages="$errors->get('town')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="country" :value="__('Stát / Country:')"/>
                        <x-select id="country" name="address[country]" class="mt-1 block w-full" autocomplete="country">
                            <x-options-country :selected="old('address.country', $mother?->address?->country)"/>
                        </x-select>
                        <x-input-error class="mt-2" :messages="$errors->get('country')"/>
                    </x-blank-input>
                </x-blank-div>

                <div class="pt-8 flex justify-between sm:justify-start sm:block">
                    <x-a-button href="{{route('green-blank.children')}}" class="bg-gray-800 hover:bg-gray-700">
                        {{ __('← Back') }}
                    </x-a-button> 
                    <x-primary-button>{{ __('Continue') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
@endsection
    


