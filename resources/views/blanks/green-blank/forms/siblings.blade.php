@extends('blanks.green-blank.blank-layout')

@section('form')
    <form action="{{ route('green-blank.save-siblings') }}" method="POST">
        @csrf
        @method('POST')
        @for ($i = 0; $i < 4; $i++)
        
            <div class="@if ($i > 0 AND !$siblings?->get($i)?->surname AND !isset(remove_empty_values(old('siblings') ?? [])[$i])) hidden @endif section">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                    <div class="p-6 sm:p-12 text-gray-900">
                        <div class="flex justify-between items-center">
                            <h1 class="font-semibold text-md">Sourozenec ({{$i+1}}) / Sibling ({{$i+1}}):  </h1>
                            @if ($i > 0)
                                <x-a-button class="bg-gray-800 hover:bg-gray-700 text-gray-500 close-button">
                                    {{ __('╳') }}
                                </x-a-button>
                            @endif
                            
                        </div>
                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="surname{{ $i }}" :value="__('Přijmení / Surname:')"/>
                                <x-text-input id="surname{{ $i }}" name="siblings[{{ $i }}][surname]" type="text" class="mt-1 block w-full" :value="old('siblings.'.$i.'.surname', $siblings?->get($i)?->surname)" autocomplete="surname" maxlength="33" />
                                <x-input-error class="mt-2" :messages="$errors->get('surname')"/>
                            </x-blank-input>
                        </x-blank-div>

                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="first_name{{ $i }}" :value="__('Jméno(a) / First name(s):')" />
                                <x-text-input id="first_name{{ $i }}" name="siblings[{{ $i }}][first_name]" type="text" class="mt-1 block w-full" :value="old('first_name', $siblings?->get($i)?->first_name)" autocomplete="first_name" maxlength="30" />
                                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                            </x-blank-input>
                        </x-blank-div>

                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="birth{{ $i }}" :value="__('Datum narození / Date of birth:')" />
                                <x-text-input id="birth{{ $i }}" name="siblings[{{ $i }}][birth]" type="date" class="mt-1 block w-full" :value="old('birth', $siblings?->get($i)?->birth?->format('Y-m-d'))" autocomplete="birth"/>
                                <x-input-error class="mt-2" :messages="$errors->get('birth')" />
                            </x-blank-input>
                        </x-blank-div>

                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="nationality{{ $i }}" :value="__('Státní občanství / Nationality:')" />
                                <x-select id="nationality{{ $i }}" name="siblings[{{ $i }}][passport][nationality]" class="mt-1 block w-full" autocomplete="nationality" >
                                    <x-options-country :selected="old('siblings.'.$i.'.passport.nationality', $siblings?->get($i)?->passport?->nationality)"/>
                                </x-select>
                                <x-input-error class="mt-2" :messages="$errors->get('nationality')" />
                            </x-blank-input>
                        </x-blank-div>

                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="occupation{{ $i }}" :value="__('Povolání / Occupation:')" />
                                <x-text-input id="occupation{{ $i }}" name="siblings[{{ $i }}][occupation][occupation]" type="text" class="mt-1 block w-full" :value="old('siblings.'.$i.'.occupation.occupation', $siblings?->get($i)?->occupation?->occupation)" autocomplete="occupation" maxlength="20"/>
                                <x-input-error class="mt-2" :messages="$errors->get('occupation')" />
                            </x-blank-input>
                        </x-blank-div>
        
                        <h1 class="font-semibold text-md mt-12">Bydliště / Residence address:</h1>

                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="street{{ $i }}" :value="__('Ulice / Street:')"/>
                                <x-text-input id="street{{ $i }}" name="siblings[{{ $i }}][address][street]" type="text" class="mt-1 block w-full" :value="old('siblings.'.$i.'.address.street', $siblings?->get($i)?->address?->street)" autocomplete="street" maxlength="12"/>
                                <x-input-error class="mt-2" :messages="$errors->get('street')"/>
                            </x-blank-input>
                        </x-blank-div>

                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="number{{ $i }}" :value="__('Číslo / Number:')"/>
                                <x-text-input id="number{{ $i }}" name="siblings[{{ $i }}][address][number]" type="text" class="mt-1 block w-full" :value="old('siblings.'.$i.'.address.number', $siblings?->get($i)?->address?->number)" autocomplete="number" maxlength="5"/>
                                <x-input-error class="mt-2" :messages="$errors->get('number')"/>
                            </x-blank-input>
                        </x-blank-div>
        
                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="town{{ $i }}" :value="__('Město / Town:')"/>
                                <x-text-input id="town{{ $i }}" name="siblings[{{ $i }}][address][town]" type="text" class="mt-1 block w-full" :value="old('siblings.'.$i.'.address.town', $siblings?->get($i)?->address?->town)" autocomplete="town" maxlength="12"/>
                                <x-input-error class="mt-2" :messages="$errors->get('town')"/>
                            </x-blank-input>
                        </x-blank-div>
        
                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="country{{ $i }}" :value="__('Stát / Country:')"/>
                                <x-select id="country{{ $i }}" name="siblings[{{ $i }}][address][country]" class="mt-1 block w-full" autocomplete="country">
                                    <x-options-country :selected="old('siblings.'.$i.'.address.country', $siblings?->get($i)?->address?->country)"/>
                                </x-select>
                                <x-input-error class="mt-2" :messages="$errors->get('country')"/>
                            </x-blank-input>
                        </x-blank-div>

                        @if ($i < 3)
                            <div class="pt-8 flex justify-between sm:justify-start sm:block">
                                <x-a-button class="bg-gray-800 hover:bg-gray-700 text-gray-500 open-button">
                                    {{ __('+ Fill more sibling') }}
                                </x-a-button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
        @endfor
        
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 sm:px-12 text-gray-900">
                <div class="flex justify-between sm:justify-start sm:block">
                    <x-a-button href="{{route('green-blank.father')}}" class="bg-gray-800 hover:bg-gray-700">
                        {{ __('← Back') }}
                    </x-a-button> 
                    <x-primary-button>{{ __('Continue') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
@endsection
    


