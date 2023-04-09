@extends('blanks.green-blank.blank-layout')

@section('form')
    <form action="{{route('green-blank.save-application')}}" method="POST">
        @csrf
        @method('POST')
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 sm:p-12 text-gray-900">
                <h1 class="font-semibold text-md">Žádost / Application</h1>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="application1" class="flex justify-start items-center">
                            <x-text-input id="application1" name="application" type="radio" class="mx-3 show-info" value="1" :checked="$blank?->application === 1 ? true : false"/>
                            {{__('O povolení k trvalému pobytu / For permanent residence permit:')}}
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
                            <x-text-input id="application2" name="application" type="radio" class="mx-3 show-info" value="2" :checked="$blank?->application === 2 ? true : false"/>
                            {{__('O povolení k dlouhodobému pobytu / For long term residence permit:')}}
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
                            <x-text-input id="application3" name="application" type="radio" class="mx-3 show-info" value="3" :checked="$blank?->application === 3 ? true : false"/>
                            {{__('O prodloužení doby platnosti povolení k dlouhodobému pobytu / For the extension of validity period of long term residence permit:')}}
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
                            <x-text-input id="application4" name="application" type="radio" class="mx-3 show-info" value="4" :checked="$blank?->application === 4 ? true : false"/>
                            {{__('O prodloužení doby platnosti průkazu o povolení k pobytu pro cizince - výměnu rozhodnutí o povolení k pobytu za průkaz o povolení k pobytu pro cizince / For the extension of validity of the resident alien permit - for the issue of a substitute resident alien permit card - exchange of a residence permit decision for a resident alien card:')}}
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
                        <x-input-label for="purpose_of_stay" :value="__('Účel pobytu na území / Purpose of stay in the Czech Republic: ℹ️')"/>
                        <x-text-input id="purpose_of_stay" name="purpose_of_stay" type="text" class="mt-1 block w-full uppercase" :value="old('purpose_of_stay', $blank?->purpose_of_stay)" autocomplete="purpose_of_stay" maxlength="32"/>
                        <x-input-error class="mt-2" :messages="$errors->get('purpose_of_stay')"/>
                    </x-blank-input>
                    <x-blank-input-info>
                        {{__("Information about the future purpose of your stay in the Czech Republic.")}}
                    </x-blank-input-info>
                </x-blank-div>

                <div class="pt-8 flex justify-between sm:justify-start sm:block">
                    <x-a-button href="{{route('green-blank.index')}}" class="bg-gray-800 hover:bg-gray-700">
                        {{ __('← Back') }}
                    </x-a-button> 
                    <x-primary-button>{{ __('Continue') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
@endsection