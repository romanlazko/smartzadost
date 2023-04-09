@extends('blanks.green-blank.blank-layout')

@section('form')
    <form action="{{ route('green-blank.save-children') }}" method="POST">
        @csrf
        @method('POST')

        @for ($i = 0; $i < 4; $i++)
            <div class="@if ($i > 0 AND !$children?->get($i)?->surname AND !isset(remove_empty_values(old('children') ?? [])[$i])) hidden @endif section">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                    <div class="p-6 sm:p-12 text-gray-900">
                        <div class="flex justify-between items-center">
                            <h1 class="font-semibold text-md">Dítě ({{$i+1}}) / Child ({{$i+1}}):  </h1>
                            @if ($i > 0)
                                <x-a-button class="close-button bg-gray-800 hover:bg-gray-700 text-gray-500">
                                    {{ __('╳') }}
                                </x-a-button>
                            @endif
                        </div>

                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="surname{{ $i }}" :value="__('Přijmení / Surname:')"/>
                                <x-text-input id="surname{{ $i }}" name="children[{{ $i }}][surname]" type="text" class="mt-1 block w-full" :value="old('children.'.$i.'.surname', $children?->get($i)?->surname)" autocomplete="surname" maxlength="29"/>
                                <x-input-error class="mt-2" :messages="$errors->get('surname')"/>
                            </x-blank-input>
                        </x-blank-div>

                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="first_name{{ $i }}" :value="__('Jméno(a) / First name(s):')" />
                                <x-text-input id="first_name{{ $i }}" name="children[{{ $i }}][first_name]" type="text" class="mt-1 block w-full" :value="old('children.'.$i.'.first_name', $children?->get($i)?->first_name)" autocomplete="first_name" maxlength="29"/>
                                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                            </x-blank-input>
                        </x-blank-div>

                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="birth{{ $i }}" :value="__('Datum narození / Date of birth:')" />
                                <x-text-input id="birth{{ $i }}" name="children[{{ $i }}][birth]" type="date" class="mt-1 block w-full" :value="old('children.'.$i.'.birth', $children?->get($i)?->birth?->format('Y-m-d'))" autocomplete="birth" />
                                <x-input-error class="mt-2" :messages="$errors->get('birth')" />
                            </x-blank-input>
                        </x-blank-div>

                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="nationality{{ $i }}" :value="__('Státní občanství / Nationality:')" />
                                <x-select id="nationality{{ $i }}" name="children[{{ $i }}][passport][nationality]" class="mt-1 block w-full" autocomplete="nationality">
                                    <x-options-country :selected="old('children.'.$i.'.passport.nationality', $children?->get($i)?->passport?->nationality)"/>
                                </x-select>
                                <x-input-error class="mt-2" :messages="$errors->get('birth')" />
                            </x-blank-input>
                        </x-blank-div>

                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="place_of_birth{{ $i }}" :value="__('Místo narození / Place of birth:')"/>
                                <x-text-input id="place_of_birth{{ $i }}" name="children[{{ $i }}][passport][place_of_birth]" type="text" class="mt-1 block w-full" :value="old('children.'.$i.'.passport.place_of_birth', $children?->get($i)?->passport?->place_of_birth)" autocomplete="place_of_birth" maxlength="15"/>
                                <x-input-error class="mt-2" :messages="$errors->get('place_of_birth')"/>
                            </x-blank-input>
                        </x-blank-div>

                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="occupation{{ $i }}" :value="__('Povolání / Occupation:')"/>
                                <x-text-input id="occupation{{ $i }}" name="children[{{ $i }}][occupation][occupation]" type="text" class="mt-1 block w-full" :value="old('children.'.$i.'.occupation.occupation', $children?->get($i)?->occupation?->occupation)" autocomplete="occupation" maxlength="14"/>
                                <x-input-error class="mt-2" :messages="$errors->get('occupation')"/>
                            </x-blank-input>
                        </x-blank-div>

                        <h1 class="font-semibold text-md mt-12">Bydliště / Residence address:</h1>

                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="street{{ $i }}" :value="__('Ulice / Street:')"/>
                                <x-text-input id="street{{ $i }}" name="children[{{ $i }}][address][street]" type="text" class="mt-1 block w-full" :value="old('children.'.$i.'.address.street', $children?->get($i)?->address?->street)" autocomplete="street" maxlength="12"/>
                                <x-input-error class="mt-2" :messages="$errors->get('street')"/>
                            </x-blank-input>
                        </x-blank-div>

                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="number{{ $i }}" :value="__('Číslo / Number:')"/>
                                <x-text-input id="number{{ $i }}" name="children[{{ $i }}][address][number]" type="text" class="mt-1 block w-full" :value="old('children.'.$i.'.address.number', $children?->get($i)?->address?->number)" autocomplete="number" maxlength="3"/>
                                <x-input-error class="mt-2" :messages="$errors->get('number')"/>
                            </x-blank-input>
                        </x-blank-div>
        
                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="town{{ $i }}" :value="__('Město / Town:')"/>
                                <x-text-input id="town{{ $i }}" name="children[{{ $i }}][address][town]" type="text" class="mt-1 block w-full" :value="old('children.'.$i.'.address.town', $children?->get($i)?->address?->town)" autocomplete="town" maxlength="12"/>
                                <x-input-error class="mt-2" :messages="$errors->get('town')"/>
                            </x-blank-input>
                        </x-blank-div>
        
                        <x-blank-div>
                            <x-blank-input>
                                <x-input-label for="country{{ $i }}" :value="__('Stát / Country:')"/>
                                <x-select id="country{{ $i }}" name="children[{{ $i }}][address][country]" class="mt-1 block w-full" autocomplete="country">
                                    <x-options-country :selected="old('children.'.$i.'.address.country', $children?->get($i)?->address?->country)"/>
                                </x-select>
                                <x-input-error class="mt-2" :messages="$errors->get('country')"/>
                            </x-blank-input>
                        </x-blank-div>
                        @if ($i < 3)
                            <div class="pt-8 flex justify-between sm:justify-start sm:block">
                                <x-a-button class="bg-gray-800 hover:bg-gray-700 text-gray-500 open-button">
                                    {{ __('+ Fill more child') }}
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
                    <x-a-button href="{{route('green-blank.spouse')}}" class="bg-gray-800 hover:bg-gray-700">
                        {{ __('← Back') }}
                    </x-a-button> 
                    <x-primary-button>{{ __('Continue') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
@endsection
    


