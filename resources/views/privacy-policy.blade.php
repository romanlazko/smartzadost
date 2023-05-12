@extends('layouts.app')

@section('header')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Privacy policy / Informace o zpracování osobních údajů') }}
        </h2>
    </div>
@endsection

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1></h1>

                <p>
                    1. Dle nařízení Evropského parlamentu a rady (EU) 2016/679, o ochraně fyzických osob v souvislosti se zpracováním osobních údajů a o volném pohybu těchto údajů a o zrušení směrnic 95/46/ES (dále jen „nařízení“).
                </p>
                <br>
                <p>
                    2. Správcem byl ustanoven pověřenec pro ochranu osobních údajů.
                </p>
                <br>
                <p>
                    3. Správce může zpracovávat osobní údaje nezbytné pro řádný výkon své činnosti.
                </p>
                <br>
                <p>
                    4. Osobními údaji se rozumí ty údaje, kterými lze přímo či nepřímo identifikovat fyzickou osobu (zejména jméno a příjmení, datum narození, rodné číslo, bydliště, údaje o dokladech totožnosti, kontaktní adresa, telefonní číslo, e-mail, IP adresa, číslo bankovního účtu apod., vč. jejich pozdějších aktualizacích). Předmětem zpracování, nevyžaduje-li to situace, nejsou citlivé osobní údaje.
                </p>
                <br>
                <p>
                    5. Účel zpracování vychází z konkrétního případu zpracování, obecně jím je zejména zpracování nabídky služeb, informace o službách, příprava smlouvy. Správce je oprávněn použít poskytnuté osobní údaje i pro obchodní a marketingové účely.
                </p>
                <br>
                <p>
                    6. Právním základem zpracování jsou především důvody dle čl. 6 odst. 1 písm. a) až c) nařízení, není-li v konkrétním případě stanoveno jinak.
                </p>
                <br>
                <p>
                    7. Příjemci a zpracovatele osobních údajů mohou být externí poskytovatelé služeb účetních, právních, dále poskytujících serverové, webové, cloudové nebo IT služby. V neposlední řadě jsou to zaměstnanci a spolupracovníci správce.
                </p>
                <br>
                <p>
                    8. Osobní údaje nebudou poskytnuty třetím osobám ze zemí mimo EU, ani mezinárodním organizacím, nebude-li v konkrétním případě nezbytné postupovat jinak (zejména stanoví-li to právní předpis nebo vykonatelné rozhodnutí).
                </p>
                <br>
                <p>
                    9. Osobní údaje budou uloženy v souladu s platným právními předpisy po dobu, po kterou bude správce poskytovat služby či plnit smlouvu a/nebo po dobu nezbytnou k plnění archivační povinnosti podle platných právních předpisů. U smluvních dokumentů půjde zpravidla nejdéle o 10 let od jejich ukončení. Výjimkou může být uchování osobních údajů pro obchodní a marketingové účely, které mohou být uchovány až do odvolání souhlasu osobních údajů.
                </p>
                <br>
                <p>
                    10. Na základě zpracovaných osobních údajů nedochází k automatizovanému rozhodování vč. profilování.
                </p>
                <br>
                <p>
                    11. Osobní údaje jsou získávány výhradně od subjektu údajů.
                </p>
                <br>
                <p>
                    12. V souvislosti se zpracováním osobních údajů mají subjekty údajů dle nařízení především tato práva: Subjekt údajů má v prvé řadě právo na to být informován o zpracování svých osobních údajů při shromažďování osobních údajů (tj. nejčastěji při prvním styku se správcem). Tím se rozumí právo na určité informace o zpracování jeho osobních údajů, tak aby byla především naplněna zásada transparentnosti zpracování. Jde zejména o informace o účelu zpracování, totožnosti správce, o jeho oprávněných zájmech, o příjemcích osobních údajů. V tomto případě jde o pasivní právo, jelikož aktivitu musí vůči subjektu údajů vyvinout správce, aby požadované informace stanovené v obecném nařízení subjektu údajů poskytl, resp. zpřístupnil.
                </p>
                <br>
                <p>
                    Mezi další práva patří:
                </p>
                <br>
                <p>
                    1. Přístup k osobním údajům, se rozumí oprávnění subjektu údajů na základě své aktivní žádosti získat od správce informaci (potvrzení), zda jsou či nejsou jeho osobní údaje zpracovávány a pokud jsou zpracovávány, má subjekt údajů právo na přístup k těmto osobním údajům a zároveň má právo získat následující informace:
                </p>
                <br>
                <p>
                    • účely zpracování,<br>
                    • kategorie dotčených osobních údajů,<br>
                    • příjemci nebo kategorie příjemců, kterým osobní údaje byly nebo budou zpřístupněny,<br>
                    • plánovaná doba, po kterou budou osobní údaje uloženy,<br>
                    • existence práva požadovat od správce opravu nebo výmaz osobních údajů, právo vznést námitku,<br>
                    • právo podat stížnost u dozorového úřadu,<br>
                    • veškeré dostupné informace o zdroji osobních údajů, pokud nejsou získány od subjektu údajů,<br>
                    • skutečnost, že dochází k automatizovanému rozhodování, včetně profilování.<br>
                </p>
                <br>
                <p>
                    2. Oprava a doplnění osobních údajů, kdy správce bez zbytečného odkladu opraví nebo doplní nepřesné nebo chybějící osobní údaje.
                </p>
                <br>
                <p>
                    3. Výmaz, osobního údaje dle čl. 17 nařízení, zejména pokud již není potřebný pro zpracovávaný účel nebo je odvolán souhlas.
                </p>
                <br>
                <p>
                    4. Omezení zpracování, osobních údajů dle čl. 18 nařízení. Subjekt údajů má právo na to, aby správce omezil zpracování osobních údajů, čl. 18 písm. 1 a) až d) nařízení.
                </p>
                <br>
                <p>
                    5. Přenositelnost osobních údajů, dle čl. 20 nařízení, Subjekt údajů má právo získat osobní údaje, které se ho týkají, jež poskytl správci, ve strukturovaném, běžně používaném a strojově čitelném formátu, a právo předat tyto údaje jinému správci, aniž by tomu správce, kterému byli osobní údaje poskytnuty, bránil.
                </p>
                <br>
                <p>
                    6. Automatizované individuální rozhodování, tedy právo nebýt předmětem žádného rozhodnutí založeného výhradně na automatizované zpracování včetně profilování, pokud toto není nezbytné plnění smlouvy.
                </p>
                <br>
                <p>
                    Odvolat udělený souhlas se zpracováním osobních údajů byl-li právním základem zpracování důvod dle čl. 6 odst. 1 písm. a) nařízení. Odvoláním není dotčená zákonnost zpracování vycházejícího ze souhlasu, který byl dán před jeho odvoláním.
                </p>
                <br>
                <p>
                    Výše popsaná práva je možné uplatnit u správce písemně doporučeným dopisem nebo e-mailem zaslaným na shora uvedenou adresu.
                </p>
                <br>
                <p>
                    Kromě tohoto nařízení je možno podat stížnost v souvislosti se zpravováním osobních údajů u Úřadu pro ochranu osobních údajů. Více informací a kontaktní údaje jsou dostupné na adrese https://www.uoou.cz/.
                </p>
                <br>
                <p>
                    Subjekt má také právo kdykoliv vznést námitku proti zpracování osobních údaj dle čl. 21 nařízení.
                </p>
                <br>
                <p>
                    Důsledkem neposkytnutí údajů může být neuzavření smlouvy. Bude-li správce užívat osobní údaje k jinému účelu, než který je zde stanoven, poskytne informaci o tomto jiném účelu a další právními předpisy stanovené informace.
                </p>
                <br>
                <p>
                    Kontaktní údaje: help@smartzadost.cz
                </p>
            </div>
        </div>
    </div>
    
@endsection
