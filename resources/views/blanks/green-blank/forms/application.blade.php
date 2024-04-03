@extends('blanks.green-blank.blank-layout')

@section('form')
    <form action="{{route('green-blank.save-application')}}" method="POST">
        @csrf
        @method('POST')
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 sm:p-12 text-gray-900">
                <h1 class="font-semibold text-md">{{__('greenblank.forms.application.title')}}</h1>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="application1" class="flex justify-start items-center">
                            <x-text-input id="application1" name="application" type="radio" class="mx-3 show-info" value="1" :checked="old('application', $blank?->application)  === 1 ? true : false"/>
                            {{__('greenblank.forms.application.permanent_residence')}}
                        </x-input-label>
                    </x-blank-input>
                    {{-- <x-blank-input-info>
                        {{__("The item 'OTHER NAMES' means that the respondent has used other names in the past than the name he/she currently uses. This could be due to various circumstances, such as marriage, divorce, name change, etc.")}}
                        <br>
                        <b>{{__("If you have not changed your first name, leave the item empty.")}}</b>
                    </x-blank-input-info> --}}
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="application2" class="flex justify-start items-center">
                            <x-text-input id="application2" name="application" type="radio" class="mx-3 show-info" value="2" :checked="old('application', $blank?->application) === 2 ? true : false"/>
                            {{__('greenblank.forms.application.long_term_residence')}}
                        </x-input-label>
                    </x-blank-input>
                    {{-- <x-blank-input-info>
                        {{__("The item 'OTHER NAMES' means that the respondent has used other names in the past than the name he/she currently uses. This could be due to various circumstances, such as marriage, divorce, name change, etc.")}}
                        <br>
                        <b>{{__("If you have not changed your first name, leave the item empty.")}}</b>
                    </x-blank-input-info> --}}
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="application3" class="flex justify-start items-center">
                            <x-text-input id="application3" name="application" type="radio" class="mx-3 show-info" value="3" :checked="old('application', $blank?->application) === 3 ? true : false"/>
                            {{__('greenblank.forms.application.extension_of_validity')}}
                        </x-input-label>
                    </x-blank-input>
                    {{-- <x-blank-input-info>
                        {{__("The item 'OTHER NAMES' means that the respondent has used other names in the past than the name he/she currently uses. This could be due to various circumstances, such as marriage, divorce, name change, etc.")}}
                        <br>
                        <b>{{__("If you have not changed your first name, leave the item empty.")}}</b>
                    </x-blank-input-info> --}}
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="application4" class="flex justify-start items-center">
                            <x-text-input id="application4" name="application" type="radio" class="mx-3 show-info" value="4" :checked="old('application', $blank?->application) === 4 ? true : false"/>
                            {{__('greenblank.forms.application.extension_substitute_exchange')}}
                        </x-input-label>
                    </x-blank-input>
                    {{-- <x-blank-input-info>
                        {{__("The item 'OTHER NAMES' means that the respondent has used other names in the past than the name he/she currently uses. This could be due to various circumstances, such as marriage, divorce, name change, etc.")}}
                        <br>
                        <b>{{__("If you have not changed your first name, leave the item empty.")}}</b>
                    </x-blank-input-info> --}}
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="purpose_of_stay" :value="__('greenblank.forms.application.purpose_of_stay')"/>
                        <x-text-input id="purpose_of_stay" name="purpose_of_stay" type="text" class="mt-1 block w-full uppercase" :value="old('purpose_of_stay', $blank?->purpose_of_stay)" autocomplete="purpose_of_stay" maxlength="32"/>
                        <x-input-error class="mt-2" :messages="$errors->get('purpose_of_stay')"/>
                    </x-blank-input>
                    <x-blank-input-info>
                        {{__("greenblank.forms.application.future_purpose")}}
                    </x-blank-input-info>
                </x-blank-div>

                <div class="pt-8 flex justify-between sm:justify-start sm:block">
                    <x-a-button href="{{route('green-blank.index')}}" class="bg-gray-800 hover:bg-gray-700">
                        {{ __('← Back') }}
                    </x-a-button> 
                    <x-primary-button>{{ __('greenblank.forms.application.continue') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
@endsection