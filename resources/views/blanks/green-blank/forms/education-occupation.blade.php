@extends('blanks.green-blank.blank-layout')

@section('form')
    <form action="{{route('green-blank.save-education-occupation')}}" method="POST">
        @csrf
        @method('POST')
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 sm:p-12 text-gray-900">
                <h1 class="font-semibold text-md">Vzdělání a povolání / Education and occupation:</h1>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="education" :value="__('Nejvyšší dosažené vzdělání / Education:')"/>
                        <x-select id="education" name="education" class="mt-1 block w-full" autocomplete="education">
                            <x-option  :selected="old('education', $education?->education)" value="PRIMARY EDUCATION">Základní vzdělání / Primary education</x-option >
                            <x-option  :selected="old('education', $education?->education)" value="SECONDARY EDUCATION">Středoškolské vzdělání / Secondary education</x-option >
                            <x-option  :selected="old('education', $education?->education)" value="VOCATIONAL EDUCATION">Odborné vzdělání / Vocational education</x-option >
                            <x-option  :selected="old('education', $education?->education)" value="HIGH SCHOOL: BACHELOR'S DEGREE">Vysokoškolské: bakalářský titul / High school: bachelor's degree</x-option >
                            <x-option  :selected="old('education', $education?->education)" value="HIGH SCHOOL: MASTER'S DEGREE">Vysokoškolské: magisterský titul / High school: master's degree</x-option >
                            <x-option  :selected="old('education', $education?->education)" value="HIGH SCHOOL: DOCTORATE OR PHD">Vysokoškolské: doktorát nebo PhD / High school: doctorate or PhD</x-option >
                        </x-select>
                        <x-input-error class="mt-2" :messages="$errors->get('education')"/>
                    </x-blank-input>
                </x-blank-div>

                <x-blank-div>
                    <x-blank-input>
                        <x-input-label for="occupation" :value="__('Povolání / Occupation: ℹ️')" class="show-info"/>
                        <x-text-input id="occupation" name="occupation" type="text" class="mt-1 block w-full" :value="old('occupation', $occupation?->occupation)" autofocus autocomplete="occupation" maxlength="23"/>
                        <x-input-error class="mt-2" :messages="$errors->get('occupation')"/>
                    </x-blank-input>
                    <x-blank-input-info>
                        {{ __("Information about your current profession or employment.") }}
                        <br><br>
                        <b>{{ __("If you are working, you must specify your position.") }}</b>
                        <br><br>
                        <b>{{ __("If you are retired or a student, you must enter the appropriate category.") }}</b>
                    </x-blank-input-info>
                </x-blank-div>

                <div class="pt-8 flex justify-between sm:justify-start sm:block">
                    <x-a-button href="{{route('green-blank.passport')}}" class="bg-gray-800 hover:bg-gray-700">
                        {{ __('← Back') }}
                    </x-a-button> 
                    <x-primary-button>{{ __('Continue') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
@endsection