@extends('blanks.green-blank.blank-layout')

@section('form')
    <form action="{{route('green-blank.save-previous-stay-in-cz')}}" method="POST">
        @csrf
        @method('POST')
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 sm:p-12 text-gray-900">
                <h1 class="font-semibold text-md">Předchozí pobyt na území delší než 3 měsíce / Previous  stay in the Czech Republic longer than 3 months:</h1>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="from" :value="__('Pobyt OD / Stay FROM:')"/>
                        <x-text-input id="from" name="from" type="date" class="mt-1 block w-full" :value="old('from', $previous_stay_in_cz?->from?->format('Y-m-d'))" autofocus autocomplete="from"/>
                        <x-input-error class="mt-2" :messages="$errors->get('from')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="till" :value="__('DO / TILL:')"/>
                        <x-text-input id="till" name="till" type="date" class="mt-1 block w-full" :value="old('till', $previous_stay_in_cz?->till?->format('Y-m-d'))" autofocus autocomplete="till"/>
                        <x-input-error class="mt-2" :messages="$errors->get('till')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="purpose_of_stay" :value="__('Účel pobytu na území / Purpose of stay in the Czech Republic:')" class="show-info"/>
                        <x-text-input id="purpose_of_stay" name="purpose_of_stay" type="text" class="mt-1 block w-full" :value="old('purpose_of_stay', $previous_stay_in_cz?->purpose_of_stay)" autocomplete="purpose_of_stay" maxlength="15"/>
                        <x-input-error class="mt-2" :messages="$errors->get('purpose_of_stay')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="place_of_stay" :value="__('Místo pobytu / Place of stay: ℹ️')" class="show-info"/>
                        <x-text-input id="place_of_stay" name="place_of_stay" type="text" class="mt-1 block w-full" :value="old('place_of_stay', $previous_stay_in_cz?->place_of_stay)" autofocus autocomplete="place_of_stay" maxlength="15"/>
                        <x-input-error class="mt-2" :messages="$errors->get('place_of_stay')"/>
                    </x-blank-input>

                    <x-blank-input-info>
                        {{__("This field is filled with information about the place of stay during your previous stay in the Czech Republic.")}}
                        <br>
                        <b>{{ __("You need to enter the city in which you were.") }}</b>
                    </x-blank-input-info>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="date_of_arrival" :value="__('Den vstupu na území / Date of arrival to the Czech Republic: ℹ️')" class="show-info"/>
                        <x-text-input id="date_of_arrival" name="date_of_arrival" type="date" class="mt-1 block w-full" :value="old('date_of_arrival', $previous_stay_in_cz?->date_of_arrival?->format('Y-m-d'))" autofocus autocomplete="date_of_arrival"/>
                        <x-input-error class="mt-2" :messages="$errors->get('date_of_arrival')"/>
                    </x-blank-input>

                    <x-blank-input-info>
                        {{__("The date of start of long-term stay (over 90 days) in the territory of the Czech Republic. Usually this date is indicated by the stamp in the passport. If you enter the Czech Republic through a neighboring country, indicate the date of crossing the border of the Schengen area.")}}
                    </x-blank-input-info>
                </x-blank-div>

                <div class="pt-8 flex justify-between sm:justify-start sm:block">
                    <x-a-button href="{{route('green-blank.last-residence-abroad')}}" class="bg-gray-800 hover:bg-gray-700">
                        {{ __('← Back') }}
                    </x-a-button> 
                    <x-primary-button>{{ __('Continue') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
@endsection