@extends('blanks.green-blank.blank-layout')

@section('form')
    
    <form action="{{ route('green-blank.save-personal') }}" method="POST">
        @csrf
        @method('POST')
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 sm:p-12 text-gray-900">
                <h1 class="font-semibold text-md">Osobní údaje / Personal data:</h1>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="surname" :value="__('Přijmení / Surname:')"/>
                        <x-text-input id="surname" name="surname" type="text" class="mt-1 block w-full" :value="old('surname', $personal?->surname)" autofocus autocomplete="surname" maxlength="32"/>
                        <x-input-error class="mt-2" :messages="$errors->get('surname')"/>
                    </x-blank-input>
                </x-blank-div>
                
                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="other_names" :value="__('Ostatní jména / Other names: ℹ️')"/>
                        <x-text-input id="other_names" name="other_names" type="text" class="mt-1 block w-full" :value="old('other_names', $personal?->other_names)" autocomplete="other_names" maxlength="64"/>
                        <x-input-error class="mt-2" :messages="$errors->get('other_names')"/>
                    </x-blank-input>

                    <x-blank-input-info>
                        {{__("Means that the respondent has used other names in the past than the name he/she currently uses. This could be due to various circumstances, such as marriage, divorce, name change, etc.")}}
                        <br><br>
                        <b>{{__("If you have not changed your first name, leave the item empty.")}}</b>
                    </x-blank-input-info>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="all_previous_surnames" :value="__('Všechna dřívější příjmení / All previous surnames: ℹ️')"/>
                        <x-text-input id="all_previous_surnames" name="all_previous_surnames" type="text" class="mt-1 block w-full" :value="old('all_previous_surnames', $personal?->all_previous_surnames)" autocomplete="all_previous_surnames_info" maxlength="64"/>
                        <x-input-error class="mt-2" :messages="$errors->get('all_previous_surnames')"/>
                    </x-blank-input>

                    <x-blank-input-info>
                        {{__("Means that the respondent used several different surnames in the past, but currently uses only the current surname. This could be due to various circumstances, such as marriage, divorce, name change, etc.")}}
                        <br><br>
                        <b>{{__("If you have not changed your surname, leave the item empty.")}}</b>
                    </x-blank-input-info>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="first_name" :value="__('Jméno(a) / First name(s):')" />
                        <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name', $personal?->first_name)" autocomplete="first_name" maxlength="23"/>
                        <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="birth" :value="__('Datum narození / Date of birth:')" />
                        <x-text-input id="birth" name="birth" type="date" class="mt-1 block w-full" :value="old('birth', $personal?->birth?->format('Y-m-d'))" autocomplete="birth" />
                        <x-input-error class="mt-2" :messages="$errors->get('birth')" />
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="sex" :value="__('Pohlaví / Sex:')" />
                        <x-select id="sex" name="sex" class="mt-1 block w-full" autocomplete="sex">
                            <x-option :selected="old('sex', $personal?->sex)" value="MALE">Male</x-option>
                            <x-option :selected="old('sex', $personal?->sex)" value="FEMALE">Female</x-option>
                        </x-select>
                        <x-input-error class="mt-2" :messages="$errors->get('sex')" />
                    </x-blank-input>
                </x-blank-div>
                <div class="pt-8 flex justify-between sm:justify-start sm:block">
                    <x-a-button href="{{route('green-blank.application')}}" class="bg-gray-800 hover:bg-gray-700">
                        {{ __('← Back') }}
                    </x-a-button> 
                    <x-primary-button>{{ __('Continue') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
@endsection
    


