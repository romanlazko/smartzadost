@extends('blanks.green-blank.blank-layout')

@section('form')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
    <div class="p-6 sm:p-12 text-gray-900">
        <div class="md:flex space-x-3">
            <div class="w-full md:w-1/6 ">
                <img src="/img/green_blank/greenblank-mini.jpg" alt="" class="">
            </div>
            <div class="w-full md:w-5/6">
                <p>
                    {{ __("This is an application for a long-term residence, which is submitted by foreign nationals who are not citizens of the European Union or the European Economic Area and who wish to stay in the country for a long period of time.") }}
                </p>
                <br>
                <p>
                    <b>{{ __("These can be, for example, students studying in the Czech Republic, entrepreneurs, spouses or family members of Czech citizens, etc.") }}</b>
                </p>
                <br>
                <p>
                    {{ __("The application must contain the applicant's personal data, purpose of stay, place of residence and other necessary information.")}}
                </p>
            </div>
        </div>
        
        
        <div class="flex justify-between sm:justify-start sm:block">
            <x-a-button :href="route('green-blank.application')" class="mt-8 bg-gray-800 hover:bg-gray-700">
                {{ __("Start filling") }}
            </x-a-button>
        </div>
    </div>
</div>
@endsection