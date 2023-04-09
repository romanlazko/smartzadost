@extends('blanks.green-blank.blank-layout')

@section('form')
    
    <form action="{{ route('green-blank.save-spouse') }}" method="POST">
        @csrf
        @method('POST')
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 sm:p-12 text-gray-900">
                <h1 class="font-semibold text-md">Rodinný stav / Marital status:</h1>

                <x-blank-div>
                    <x-blank-input>
                        <x-select id="marital_status" name="marital_status" class="mt-1 block w-full" autocomplete="marital_status">
                            <x-option :selected="old('marital_status', $spouse?->marital_status)" value="SINGLE">Svobodný/á / Single</x-option>
                            <x-option :selected="old('marital_status', $spouse?->marital_status)" value="MARRIED">Ženatý/Vdaná / Married</x-option>
                            <x-option :selected="old('marital_status', $spouse?->marital_status)" value="DIVORCED">Rozvedený/á / Divorced</x-option>
                            <x-option :selected="old('marital_status', $spouse?->marital_status)" value="WIDOWED">Vdovec/Vdova / Widowed</x-option>
                        </x-select>
                        <x-input-error class="mt-2" :messages="$errors->get('marital_status')"/>
                    </x-blank-input>
                </x-blank-div>

                <div id="spouse">
                    <x-blank-div>
                        <x-blank-input>
                            <x-input-label for="surname" :value="__('Přijmení / Surname:')"/>
                            <x-text-input id="surname" name="surname" type="text" class="mt-1 block w-full" :value="old('surname', $spouse?->surname)" autofocus autocomplete="surname" maxlength="24"/>
                            <x-input-error class="mt-2" :messages="$errors->get('surname')"/>
                        </x-blank-input>
                    </x-blank-div>
                    
                    <x-blank-div>
                        <x-blank-input>
                            <x-input-label for="other_names" :value="__('Ostatní jména / Other names: ℹ️')" onclick="$('#other_names_info').toggle('hidden')"/>
                            <x-text-input id="other_names" name="other_names" type="text" class="mt-1 block w-full" :value="old('other_names', $spouse?->other_names)" autofocus autocomplete="other_names" maxlength="32"/>
                            <x-input-error class="mt-2" :messages="$errors->get('other_names')"/>
                        </x-blank-input>

                        <x-blank-input-info id="other_names_info">
                            {{__("The item 'OTHER NAMES' means that the respondent has used other names in the past than the name he/she currently uses. This could be due to various circumstances, such as marriage, divorce, name change, etc.")}}
                            <br>
                            <b>{{__("If you have not changed your first name, leave the item empty.")}}</b>
                        </x-blank-input-info>
                    </x-blank-div>

                    <x-blank-div>
                        <x-blank-input>
                            <x-input-label for="all_previous_surnames" :value="__('Všechna dřívější příjmení / All previous surnames: ℹ️')"/>
                            <x-text-input id="all_previous_surnames" name="all_previous_surnames" type="text" class="mt-1 block w-full" :value="old('all_previous_surnames', $spouse?->all_previous_surnames)" autofocus autocomplete="all_previous_surnames" maxlength="32"/>
                            <x-input-error class="mt-2" :messages="$errors->get('all_previous_surnames')"/>
                        </x-blank-input>

                        <x-blank-input-info id="all_previous_surnames_info">
                            {{__("The item 'ALL PREVIOUS SURNAMES' means that the respondent used several different surnames in the past, but currently uses only the current surname. This could be due to various circumstances, such as marriage, divorce, name change, etc.")}}
                            <br>
                            <b>{{__("If you have not changed your surname, leave the item empty.")}}</b>
                        </x-blank-input-info>
                    </x-blank-div>

                    <x-blank-div>
                        <x-blank-input>
                            <x-input-label for="first_name" :value="__('Jméno(a) / First name(s):')" />
                            <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name', $spouse?->first_name)" autofocus autocomplete="first_name"  maxlength="23"/>
                            <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                        </x-blank-input>
                    </x-blank-div>

                    <x-blank-div>
                        <x-blank-input>
                            <x-input-label for="birth" :value="__('Datum narození / Date of birth:')" />
                            <x-text-input id="birth" name="birth" type="date" class="mt-1 block w-full" :value="old('birth', $spouse?->birth?->format('Y-m-d'))" autocomplete="birth" />
                            <x-input-error class="mt-2" :messages="$errors->get('birth')" />
                        </x-blank-input>
                    </x-blank-div>

                    <x-blank-div>
                        <x-blank-input>
                            <x-input-label for="nationality" :value="__('Státní občanství / Nationality:')" />
                            <x-select id="nationality" name="passport[nationality]" class="mt-1 block w-full" autocomplete="nationality">
                                <x-options-country :selected="old('passport.nationality', $spouse?->passport?->nationality)"/>
                            </x-select>
                            <x-input-error class="mt-2" :messages="$errors->get('nationality')" />
                        </x-blank-input>
                    </x-blank-div>

                    <x-blank-div>
                        <x-blank-input>
                            <x-input-label for="country_of_birth" :value="__('Stát narození / Country of birth:')" />
                            <x-select id="country_of_birth" name="passport[country_of_birth]" class="mt-1 block w-full" autocomplete="country_of_birth">
                                <x-options-country :selected="old('passport.country_of_birth', $spouse?->passport?->country_of_birth)"/>
                            </x-select>
                            <x-input-error class="mt-2" :messages="$errors->get('country_of_birth')" />
                        </x-blank-input>
                    </x-blank-div>

                    <x-blank-div>
                        <x-blank-input>
                            <x-input-label for="place_of_birth" :value="__('Místo narození / Place of birth:')"/>
                            <x-text-input id="place_of_birth" name="passport[place_of_birth]" type="text" class="mt-1 block w-full" :value="old('passport.place_of_birth', $spouse?->passport?->place_of_birth)" autocomplete="place_of_birth" maxlength="19"/>
                            <x-input-error class="mt-2" :messages="$errors->get('place_of_birth')"/>
                        </x-blank-input>
                    </x-blank-div>

                    <x-blank-div>
                        <x-blank-input>
                            <x-input-label for="occupation" :value="__('Povolání / Occupation:')"/>
                            <x-text-input id="occupation" name="occupation[occupation]" type="text" class="mt-1 block w-full" :value="old('occupation.occupation', $spouse?->occupation?->occupation)" autocomplete="occupation" maxlength="22"/>
                            <x-input-error class="mt-2" :messages="$errors->get('occupation')"/>
                        </x-blank-input>
                    </x-blank-div>

                    <h1 class="font-semibold text-md mt-12">Bydliště / Residence address:</h1>

                    <x-blank-div>
                        <x-blank-input>
                            <x-input-label for="street" :value="__('Ulice / Street:')"/>
                            <x-text-input id="street" name="address[street]" type="text" class="mt-1 block w-full" :value="old('address.street', $spouse?->address?->street)" autocomplete="street" maxlength="17"/>
                            <x-input-error class="mt-2" :messages="$errors->get('street')"/>
                        </x-blank-input>
                    </x-blank-div>

                    <x-blank-div>
                        <x-blank-input>
                            <x-input-label for="number" :value="__('Číslo / Number:')"/>
                            <x-text-input id="number" name="address[number]" type="text" class="mt-1 block w-full" :value="old('address.number', $spouse?->address?->number)" autocomplete="number"  maxlength="5"/>
                            <x-input-error class="mt-2" :messages="$errors->get('number')"/>
                        </x-blank-input>
                    </x-blank-div>

                    <x-blank-div>
                        <x-blank-input>
                            <x-input-label for="town" :value="__('Město / Town:')"/>
                            <x-text-input id="town" name="address[town]" type="text" class="mt-1 block w-full" :value="old('address.town', $spouse?->address?->town)" autocomplete="town" maxlength="14"/>
                            <x-input-error class="mt-2" :messages="$errors->get('town')"/>
                        </x-blank-input>
                    </x-blank-div>

                    <x-blank-div>
                        <x-blank-input>
                            <x-input-label for="country" :value="__('Stát / Country:')"/>
                            <x-select id="country" name="address[country]" class="mt-1 block w-full" autocomplete="country">
                                <x-options-country :selected="old('address.country', $spouse?->address?->country)"/>
                            </x-select>
                            <x-input-error class="mt-2" :messages="$errors->get('country')"/>
                        </x-blank-input>
                    </x-blank-div>

                    <x-blank-div>
                        <x-blank-input>
                            <x-input-label for="post_code" :value="__('PSČ / Post code:')"/>
                            <x-text-input id="post_code" name="address[post_code]" type="text" class="mt-1 block w-full" :value="old('address.post_code', $spouse?->address?->post_code)" autocomplete="post_code" maxlength="5"/>
                            <x-input-error class="mt-2" :messages="$errors->get('post_code')"/>
                        </x-blank-input>
                    </x-blank-div>
                </div>

                <div class="pt-8 flex justify-between sm:justify-start sm:block">
                    <x-a-button href="{{route('green-blank.delivery-address')}}" class="bg-gray-800 hover:bg-gray-700">
                        {{ __('← Back') }}
                    </x-a-button> 
                    <x-primary-button>{{ __('Continue') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#marital_status').change(function() {
                if ($(this).val() === 'MARRIED') {
                    $('#spouse').show();
                } else {
                    $('#spouse').hide();
                }
            });

            if ($('#marital_status').val() === 'MARRIED') {
                $('#spouse').show();
            } else {
                $('#spouse').hide();
            }
        });
    </script>
@endsection
    


