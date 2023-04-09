
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/base.css">
        <link rel="stylesheet" href="style/text.css">
        <link rel="stylesheet" href="style/own.css">
    </head>

    <body>
        <div id="page-container">
            <div id="pf1" class="pf w0 h0" data-page-no="1">
                <div class="pc pc1 w0 h0">
                    <!-- КАРТИНКА -->
                    <div>
                        <img class="bi x0 y0 w1 h1" alt="" src="img/green_blank/first_page.png"/>
                    </div>

                    <!-- ВЕРХУШКА -->
                    <div class="c x2 y1d w3 h8">
                        <div class="t m0 x4 h3 y1e ff4 fs2 fc2 sc2 ls2 ws3">            <span class="_ _9"></span>               <span class="_ _9"></span>               <span class="_ _9"></span>        <span class="ff3 fs1 fc1 sc0 ls3"><b>ŽÁDOST / APPLICATION</b></span>
                        </div>

                        <div class="t m0 x5 h9 y1f ff3 fs0 sc0 ls5 ws3">  <span class="fs3 ls4" style="font-family: 'Dejavu Sans'; font-size: 45px; transform: translate(0,-5px);">@if($blank?->application === 1)<span class="fc3">⊠</span>@else<span class="fc1">□</span>@endif</span>   <span class="fc1">O POVOLENÍ K TRVALÉMU POBYTU / FOR PERMANENT RESIDENCE PERMIT</span></div>

                        <div class="t m0 x6 ha y20 ff3 fs0 sc0 ls5 ws3">  <span class="fs3 ls4" style="font-family: 'Dejavu Sans'; font-size: 45px; transform: translate(0,-5px);">@if($blank?->application === 2)<span class="fc3">⊠</span>@else<span class="fc1">□</span>@endif</span>   <span class="fc1">O POVOLENÍ K DLOUHODOBÉMU POBYTU / FOR LONG TERM RESIDENCE PERMIT</span></div>

                        <div class="t m0 x7 ha y21 ff3 fs0 sc0 ls5 ws3">  <span class="fs3 ls4" style="font-family: 'Dejavu Sans'; font-size: 45px; transform: translate(0,-5px);">@if($blank?->application === 3)<span class="fc3">⊠</span>@else<span class="fc1">□</span>@endif</span>   <span class="fc1">O PRODLOUŽENÍ DOBY PLATNOSTI POVOLENÍ K DLOUHODOBÉMU POBYTU / FOR THE EXTENSION OF VALIDITY</span></div>
                        

                        <div class="t m0 x8 h2 y22 ff3 fs0 fc1 sc0 ls5 ws3">PERIOD OF LONG TERM RESIDENCE PERMIT</div>

                        <div class="t m0 x9 ha y23 ff1 fs0 sc0 ls5 ws3"><span class="fs3 ls4" style="font-family: 'Dejavu Sans'; font-size: 45px; transform: translate(0,-5px);">@if($blank?->application === 4)<span class="fc3">⊠</span>@else<span class="fc1">□</span>@endif</span>   <span class="fc1">O PRODLOUŽENÍ DOBY PLATNOSTI PR<span class="cz_roboto">Ů</span>KAZU O POVOLENÍ K POBYTU PRO CIZINCE - VÝM<span class="cz_roboto">Ě</span>NU ROZHODNUTÍ O </span></div>

                        <div class="t m0 xa h2 y24 ff1 fs0 fc1 sc0 ls5 ws3"><div class="cz_translate10">POVOLENÍ K POBYTU ZA PR<span class="cz_roboto">Ů</span>KAZ O POVOLENÍ K POBYTU PRO CIZINCE / FOR THE EXTENSION OF VALIDITY OF THE </div></div>

                        <div class="t m0 xb h2 y25 ff1 fs0 fc1 sc0 ls5 ws3">RESIDENT ALIEN PERMIT - FOR THE ISSUE OF A SUBSTITUTE RESIDENT ALIEN PERMIT CARD - EXCHANGE OF A </div>

                        <div class="t m0 xc h2 y26 ff1 fs0 fc1 sc0 ls5 ws3">RESIDENCE PERMIT DECISION FOR A RESIDENT ALIEN CARD</div>
                        <div class="t m0 xd h3 y27 ff3 fs1 fc1 sc0 ls5 ws3"><b>NA ÚZEMÍ <span class="cz_roboto">Č</span>ESKÉ REPUBLIKY / IN THE CZECH REPUBLIC</b></div>

                        <div class="t m0 xe h4 y28 ff3 fs1 fc1 sc0 ls5 ws3"><b>( požadovaný ozna<span class="cz_roboto">č</span>te k<span class="cz_roboto">ř</span>ížkem / cross the box which applies )</b></div>
                    </div>

                    <!-- ДЕФОЛТНЫЙ ТЕКСТ -->
                    <div>
                        <div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls5 ws3">Strana 1 / Page 1</div>

                        <div class="t m0 x2 h3 y2 ff3 fs1 fc1 sc0 ls5 ws3"> <b class="cz_translate10">1. P<span class="cz_roboto">Ř</span>ÍJMENÍ / SURNAME</b></div>

                        <div class="t m0 x2 h3 y3 ff3 fs1 fc1 sc0 ls5 ws3"> <b>2. OSTATNÍ JMÉNA / OTHER NAMES</b></div>

                        <div class="t m0 x2 h3 y4 ff3 fs1 fc1 sc0 ls5 ws3"> <b class="cz_translate10">3. VŠECHNA D<span class="cz_roboto">Ř</span>ÍV<span class="cz_roboto">Ě</span>JŠÍ P<span class="cz_roboto">Ř</span>ÍJMENÍ / ALL PREVIOUS SURNAMES</b></div>

                        <div class="t m0 x2 h3 y5 ff3 fs1 fc1 sc0 ls5 ws3"> <b>4. JMÉNO(A) / FIRST NAME(S)</b></div>

                        <div class="t m0 x2 h3 y6 ff3 fs1 fc1 sc0 ls5 ws3"> <b>5. POHLAVÍ / SEX</b> <span class="_ _1"> </span> MUŽ / MALE<span class="_ _2"> </span>ŽENA / FEMALE</div>

                        <div class="t m0 x2 h3 y18 ff3 fs1 fc1 sc0 ls5 ws3"> <b>6. DATUM NAROZENÍ (DDMMRRRR) / DATE OF BIRTH (DDMMYYYY)</div>

                        <div class="t m0 x2 h3 y7 ff3 fs1 fc1 sc0 ls5 ws3"> <b>7. RODINNÝ STAV / MARITAL STATUS</b><span class="_ _3"> </span><span class="ff1 fs0 v0">   SVOBODNÝ/Á / SINGLE</span></div>
                        <div class="t m0 x3 h3 y8 ff1 fs0 fc1 sc0 ls5 ws3">ŽENATÝ/VDANÁ / MARRIED<span class="_ _4"> </span>  ROZVEDENÝ/Á / DIVORCED<span class="_ _5"> </span>  VDOVEC/VDOVA / WIDOWED</div>

                        <div class="t m0 x2 h3 y19 ff3 fs1 fc1 sc1 ls5 ws3"> <b>8. STÁT NAROZENÍ (kód) / COUNTRY OF BIRTH (code)*</b></div>

                        <div class="t m0 x2 h3 y9 ff3 fs1 fc1 sc0 ls5 ws3"> <b>9. MÍSTO NAROZENÍ / PLACE OF BIRTH</b></div>

                        <div class="t m0 x2 h3 y1a ff3 fs1 fc1 sc0 ls5 ws3"> <b>10. STÁTNÍ OB<span class="cz_roboto">Č</span>ANSTVÍ (kód) / NATIONALITY (code)*</b></div>

                        <div class="t m0 x2 h3 ya ff3 fs1 fc1 sc0 ls5 ws3"> <b class="cz_translate10">11. NEJVYŠŠÍ DOSAŽENÉ VZD<span class="cz_roboto">Ě</span>LÁNÍ / EDUCATION</b></div>

                        <div class="t m0 x2 h3 yb ff3 fs1 fc1 sc0 ls5 ws3"> <b>12. POVOLÁNÍ / OCCUPATION</b></div>

                        <div class="t m0 x2 h3 yc ff3 fs1 fc1 sc0 ls5 ws3"> <b class="cz_translate10">13. ZAM<span class="cz_roboto">Ě</span>STNÁNÍ P<span class="cz_roboto">Ř</span>ED P<span class="cz_roboto">Ř</span>ÍCHODEM NA ÚZEMÍ / </b></div>

                        <div class="t m0 x3 h3 yd ff3 fs1 fc1 sc0 ls5 ws3"><b>EMPLOYMENT BEFORE ARRIVAL TO THE CZECH REPUBLIC</b></div>
                        <div class="t m0 x3 h3 ye ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">ZAM<span class="cz_roboto">Ě</span>STNAVATEL / EMPLOYER</div></div>
                        <div class="t m0 x3 h3 yf ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">PRACOVNÍ ZA<span class="cz_roboto">Ř</span>AZENÍ / POSITION</div></div>
                        <div class="t m0 x3 h3 y10 ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">ULICE / STREET<span class="_ _6"> </span>   <span class="cz_roboto">Č</span>. / No.</div></div>
                        <div class="t m0 x3 h3 y11 ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">M<span class="cz_roboto">Ě</span>STO / TOWN<span class="_ _7"> </span> PS<span class="cz_roboto">Č</span> / POST CODE</div></div>

                        <div class="t m0 x2 h3 y12 ff3 fs1 fc1 sc0 ls5 ws3"> <b class="cz_translate10">14. ZAM<span class="cz_roboto">Ě</span>STNÁNÍ PO VSTUPU NA ÚZEMÍ / EMPLOYMENT AFTER ARRIVAL TO THE CZECH REPUBLIC</b></div>
                        <div class="t m0 x3 h3 y13 ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">ZAM<span class="cz_roboto">Ě</span>STNAVATEL / EMPLOYER</div></div>
                        <div class="t m0 x3 h3 y14 ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">PRACOVNÍ ZA<span class="cz_roboto">Ř</span>AZENÍ / POSITION</div></div>
                        <div class="t m0 x3 h3 y15 ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">ULICE / STREET<span class="_ _6"> </span>   <span class="cz_roboto">Č</span>. / No.</div></div>
                        <div class="t m0 x3 h3 y16 ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">M<span class="cz_roboto">Ě</span>STO / TOWN<span class="_ _7"> </span> PS<span class="cz_roboto">Č</span> / POST CODE</div></div>

                        <div class="t m0 x2 h3 y17 ff3 fs1 fc1 sc0 ls5 ws3"> <b class="cz_translate10">15. Ú<span class="cz_roboto">Č</span>EL POBYTU NA ÚZEMÍ / PURPOSE OF STAY IN THE CZECH REPUBLIC</b></div>
                        <div class="c x2 y1b w2 h6">
                            <div class="t m0 x0 h7 y1c ff1 fs0 fc1 sc0 ls5 ws3">*) Strana 1 /Page 1</div>
                        </div>
                    </div>

                    <!-- ПОЛЯ ДЛЯ ВВОДА -->
                    <div>
                        <!-- 1 SURNAME -->
                        <div class="c x10 y2a w4 hb">
                            <div class="t m0 x0 hc y2b ff6 fs4 fc3 sc0 ls5 ws3"><div class="translate38_ls23">{{ $personal?->surname }}</div></div>
                        </div>

                        <!-- 2 OHTER_NAMES -->
                        <div class="c x10 y2c w5 hd">
                            <div class="t m0 x0 he y2d ff7 fs4 fc3 sc0 ls5 ws3"><div class="translate38_ls23">{{ slice_string(32, $personal?->other_names)->get(0) }}</div></div>
                            <div class="t m0 x0 he y2e ff7 fs4 fc3 sc0 ls5 ws3"><div class="translate38_ls23">{{ slice_string(32, $personal?->other_names)->get(1) }}</div></div>
                        </div>

                        <!-- 3 PREVIOUS_NAMES -->
                        <div class="c x10 y32 w5 h12">
                            <div class="t m0 x0 h13 y33 ffa fs4 fc3 sc0 ls5 ws3"><div class="translate38_ls23">{{ slice_string(32, $personal?->all_previous_surnames)->get(0) }}</div></div>
                            <div class="t m0 x0 h13 y34 ffa fs4 fc3 sc0 ls5 ws3"><div class="translate38_ls23">{{ slice_string(32, $personal?->all_previous_surnames)->get(1) }}</div></div>
                        </div>

                        <!-- 4 FIRST_NAME -->
                        <div class="c x11 y35 w7 hb">
                            <div class="t m0 x0 hf y2b ffb fs4 fc3 sc0 ls5 ws3"><div class="translate38_ls23">{{ $personal?->first_name }}</div></div>
                        </div>

                        <!-- 5 SEX MALE -->
                        <div class="c x15 y42 wc h18">
                            <div class="t m0 x0 h19 y2b ff16 fsa fc3 sc0 ls5"><div class="translate38_ls23">@if($personal?->sex === 'MALE')X @endif</div></div>
                        </div>
                        <!-- 5 SEX FEMALE -->
                        <div class="c x16 y42 wc h18">
                            <div class="t m0 x0 h19 y2b ff17 fsa fc3 sc0 ls5"><div class="translate38_ls23">@if($personal?->sex == 'FEMALE')X @endif</div></div>
                        </div>

                        <!-- 6 DAY -->
                        <div class="c x19 y45 wd h18">
                            <div class="t m0 x0 h19 y2b ff1c fsa fc3 sc0 ls5"><div class="translate38_ls23">{{ $personal?->birth?->format('d') }}</div></div>
                        </div>
                        <!-- 6 MONTH -->
                        <div class="c x1a y45 we h18">
                            <div class="t m0 x0 h19 y2b ff1d fsa fc3 sc0 ls5"><div class="translate38_ls23">{{ $personal?->birth?->format('m') }}</div></div>
                        </div>
                        <!-- 6 YEAR -->
                        <div class="c x1b y45 wf h18">
                            <div class="t m0 x0 h19 y2b ff1e fsa fc3 sc0 ls5 ws3"><div class="translate38_ls23">{{ $personal?->birth?->format('Y') }}</div></div>
                        </div>

                        <!-- 7 MARRIED -->
                        <div class="c x11 y43 wc h1a">
                            <div class="t m0 x0 h1b y3a ff18 fsb fc3 sc0 ls5"><div class="translate38_ls23">@if($spouse?->marital_status === 'MARRIED')X @endif</div></div>
                        </div>
                        <!-- 7 DIVORCED -->
                        <div class="c x17 y43 wc h1a">
                            <div class="t m0 x0 h1b y3a ff19 fsb fc3 sc0 ls5"><div class="translate38_ls23">@if($spouse?->marital_status === 'DIVORCED')X @endif</div></div>
                        </div>
                        <!-- 7 WIDOWED -->
                        <div class="c x18 y43 wc h1a">
                            <div class="t m0 x0 h1b y3a ff1a fsb fc3 sc0 ls5"><div class="translate38_ls23">@if($spouse?->marital_status === 'WIDOWED')X @endif</div></div>
                        </div>
                        <!-- 7 SINGLE -->
                        <div class="c x18 y44 wc h18">
                            <div class="t m0 x0 h19 y2b ff1b fsa fc3 sc0 ls5"><div class="translate38_ls23">@if($spouse?->marital_status === 'SINGLE')X @endif</div></div>
                        </div>

                        <!-- 8 COUNTRY OF BIRTH -->
                        <div class="c x1c y46 w10 h18">
                            <div class="t m0 x0 h19 y2b ff1f fsa fc3 sc0 ls6 ws3"><div class="translate38_ls23">{{ $passport?->country_of_birth }}</div></div>
                        </div>

                        <!-- 9 PLACE_OF_BIRTH -->
                        <div class="c x12 y37 w8 hb">
                            <div class="t m0 x0 hf y2b ffd fs4 fc3 sc0 ls5 ws3"><div class="translate38_ls23">{{ $passport?->place_of_birth }}</div></div>
                        </div>

                        <!-- 10 NATIONALITY -->
                        <div class="c x1c y47 w10 h18">
                            <div class="t m0 x0 h19 y2b ff20 fsa fc3 sc0 ls6 ws3"><div class="translate38_ls23">{{ $passport?->nationality }}</div></div>
                        </div>

                        <!-- 11 EDUCATION -->
                        <div class="c x10 y2f w6 hb">
                            <div class="t m0 x0 hf y2b ff8 fs4 fc3 sc0 ls5 ws3"><div class="translate38_ls23">{{ $education?->education }}</div></div>
                        </div>

                        <!-- 12 OCCUPATION -->
                        <div class="c x11 y36 w7 hb">
                            <div class="t m0 x0 hf y2b ffc fs4 fc3 sc0 ls5 ws3"><div class="translate38_ls23">{{ $occupation?->occupation }}</div></div>
                        </div>

                        <!-- 13 EMPLOYER -->
                        <div class="c x13 y38 w9 hb">
                            <div class="t m0 x0 hf y2b ffe fs4 fc3 sc0 ls5 ws3"><div class="translate38_ls23">{{ $employment_before_arrival?->employer }}</div></div>
                        </div>
                        <!-- 13 POSITION -->
                        <div class="c x13 y39 w9 h14">
                            <div class="t m0 x0 h15 y3a fff fs4 fc3 sc0 ls7 ws3"><div class="translate38_ls23">{{ $employment_before_arrival?->position }}</div></div>
                        </div>
                        <!-- 13 STREET -->
                        <div class="c x14 y3d wa hb">
                            <div class="t m0 x0 hf y2b ff12 fs4 fc3 sc0 ls7 ws3"><div class="translate38_ls23">{{ $employment_before_arrival?->street }}</div></div>
                        </div>
                        <!-- 13 TOWN -->
                        <div class="c x14 y3f wb hb">
                            <div class="t m0 x0 hf y2b ff14 fs4 fc3 sc0 ls7 ws3"><div class="translate38_ls23">{{ $employment_before_arrival?->town }}</div></div>
                        </div>
                        <!-- 13 No -->
                        <div class="c x1d y48 w11 h1a">
                            <div class="t m0 x0 h1b y3a ff21 fsb fc3 sc0 ls6 ws3"><div class="translate38_ls23">{{ $employment_before_arrival?->number }}</div></div>
                        </div>
                        <!-- 13 POST CODE -->
                        <div class="c x1d y49 w11 h1a">
                            <div class="t m0 x0 h1b y4a ff22 fsb fc3 sc0 ls6 ws3"><div class="translate38_ls23">{{ $employment_before_arrival?->post_code }}</div></div>
                        </div>

                        <!-- 14 EMPLOYER -->
                        <div class="c x13 y3b w9 h14">
                            <div class="t m0 x0 h15 y3a ff10 fs4 fc3 sc0 ls7 ws3"><div class="translate38_ls23">{{ $employment_after_arrival?->employer }}</div></div>
                        </div>
                        <!-- 14 POSITION -->
                        <div class="c x13 y3c w9 hb">
                            <div class="t m0 x0 hf y2b ff11 fs4 fc3 sc0 ls7 ws3"><div class="translate38_ls23">{{ $employment_after_arrival?->position }}</div></div>
                        </div>
                        <!-- 14 STREET -->
                        <div class="c x14 y3e wa hb">
                            <div class="t m0 x0 hf y2b ff13 fs4 fc3 sc0 ls7 ws3"><div class="translate38_ls23">{{ $employment_after_arrival?->street }}</div></div>
                        </div>
                        <!-- 14 TOWN -->
                        <div class="c x14 y40 wb h16">
                            <div class="t m0 x0 h17 y41 ff15 fs9 fc3 sc0 ls7 ws3"><div class="translate38_ls23">{{ $employment_after_arrival?->town }}</div></div>
                        </div>
                        <!-- 14 No -->
                        <div class="c x1d y4b w11 h1a">
                            <div class="t m0 x0 h1b y4a ff23 fsb fc3 sc0 ls6 ws3"><div class="translate38_ls23">{{ $employment_after_arrival?->number }}</div></div>
                        </div>
                        <!-- 14 POST CODE -->
                        <div class="c x1d y4c w11 h18">
                            <div class="t m0 x0 h19 y2b ff24 fsa fc3 sc0 ls6 ws3"><div class="translate38_ls23">{{ $employment_after_arrival?->post_code }}</div></div>
                        </div>

                        <!-- 15 PURPOSE_OF_STAY -->
                        <div class="c x10 y30 w6 h10">
                            <div class="t m0 x0 h11 y31 ff9 fs4 fc3 sc0 ls5 ws3"><div class="translate38_ls23">{{ $blank?->purpose_of_stay }}</div></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="break_block"></div>

            <div id="pf2" class="pf w0 h0" data-page-no="2">
                <div class="pc pc2 w0 h0">
                    <!-- КАРТИНКА -->
                    <div>
                        <img class="bi x0 y0 w1 h1" alt="" src="img/green_blank/second_page.png"/>
                    </div>
                    
                    <!-- ДЕФОЛТНЫЙ ТЕКСТ -->
                    <div>
                        <div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls5 ws3">Strana 2 / Page 2</div>

                        <div class="t m0 x2 h3 y4d ff3 fs1 fc1 sc0 ls5 ws3"><b class="cz_translate10">16. POSLEDNÍ BYDLIŠT<span class="cz_roboto">Ě</span> V CIZIN<span class="cz_roboto">Ě</span> / LAST RESIDENCE ABROAD</b></div>
                        <div class="t m0 x3 h5 y4e ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">ULICE / STREET<span class="_ _6"> </span>   <span class="cz_roboto">Č</span>. / No.</div></div>
                        <div class="t m0 x3 h5 y4f ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">M<span class="cz_roboto">Ě</span>STO / TOWN<span class="_ _7"> </span> PS<span class="cz_roboto">Č</span> / POST CODE</div></div>
                        <div class="t m0 x3 h5 y78 ff1 fs1 fc1 sc0 ls5 ws3">STÁT (kód) / COUNTRY (code)*</div>

                        <div class="t m0 x2 h3 y50 ff3 fs1 fc1 sc0 ls5 ws3"><b class="cz_translate10">17. P<span class="cz_roboto">Ř</span>EDCHOZÍ POBYT NA ÚZEMÍ DELŠÍ NEŽ 3 M<span class="cz_roboto">Ě</span>SÍCE / </b></div>
                        <div class="t m0 x3 h3 y51 ff3 fs1 fc1 sc0 ls5 ws3"><b>PREVIOUS  STAY IN THE CZECH REPUBLIC LONGER THAN 3 MONTHS</b></div>
                        <div class="t m0 x3 h5 y52 ff1 fs1 fc1 sc0 ls5 ws3">POBYT OD / STAY FROM<span class="_ _b"> </span>DO /TILL</div>
                        <div class="t m0 x3 h5 y53 ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">D<span class="cz_roboto">Ů</span>VOD A MÍSTO POBYTU / PURPOSE AND PLACE OF STAY</div></div>

                        
                        <div class="t m0 x2 h3 y56 ff3 fs1 fc1 sc0 ls5 ws3"><b>18. ADRESA MÍSTA POBYTU NA ÚZEMÍ / RESIDENCE ADDRESS IN THE CZECH REPUBLIC</b></div>
                        <div class="t m0 x3 h5 y57 ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">ULICE / STREET<span class="_ _6"> </span>   <span class="cz_roboto">Č</span>. / No.</div></div>
                        <div class="t m0 x3 h5 y58 ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">M<span class="cz_roboto">Ě</span>STO / TOWN<span class="_ _7"> </span> PS<span class="cz_roboto">Č</span> / POST CODE</div></div>

                        <div class="t m0 x2 h3 y59 ff3 fs1 fc1 sc0 ls5 ws3"><b class="cz_translate10">19. ADRESA PRO DORU<span class="cz_roboto">Č</span>OVÁNÍ, JE-LI ODLIŠNÁ OD MÍSTA POBYTU /</b></div>
                        <div class="t m0 x3 h3 y5a ff3 fs1 fc1 sc0 ls5 ws3"><b>DELIVERY ADDRESS IF DIFFERENT FROM RESIDENCE ADDRESS</b></div>
                        <div class="t m0 x3 h5 y5b ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">ULICE / STREET<span class="_ _6"> </span>   <span class="cz_roboto">Č</span>. / No.</div></div>
                        <div class="t m0 x3 h5 y5c ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">M<span class="cz_roboto">Ě</span>STO / TOWN<span class="_ _7"> </span> PS<span class="cz_roboto">Č</span> / POST CODE</div></div>

                        <div class="t m0 x2 h3 y5d ff3 fs1 fc1 sc0 ls5 ws3"><b>20. DEN VSTUPU NA ÚZEMÍ / DATE OF ARRIVAL TO THE CZECH REPUBLIC</b></div>

                        <div class="t m0 x2 h3 y5e ff3 fs1 fc1 sc0 ls5 ws3"><b class="cz_translate10">21. <span class="cz_roboto">Č</span>ÍSLO CESTOVNÍHO DOKLADU / TRAVEL DOCUMENT NUMBER</b></div>
                        <div class="t m0 x3 h5 y79 ff1 fs1 fc1 sc0 ls5 ws3">STÁT (kód) / COUNTRY (code)*</div>

                        <div class="t m0 x2 h3 y5f ff3 fs1 fc1 sc0 ls5 ws3"><b>22. PLATNOST CESTOVNÍHO DOKLADU / TRAVEL DOCUMENT VALID UNTIL</b></div>

                        <div class="t m0 x2 h3 y60 ff3 fs1 fc1 sc0 ls5 ws3"><b>23. MANŽEL(KA) / SPOUSE</b></div>
                        <div class="t m0 x3 h5 y61 ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">P<span class="cz_roboto">Ř</span>ÍJMENÍ / SURNAME</div></div>
                        <div class="t m0 x3 h5 y62 ff1 fs1 fc1 sc0 ls5 ws3">OSTATNÍ JMÉNA / OTHER NAMES</div>
                        <div class="t m0 x3 h5 y63 ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">D<span class="cz_roboto">Ř</span>ÍV<span class="cz_roboto">Ě</span>JŠÍ P<span class="cz_roboto">Ř</span>ÍJMENÍ / PREVIOUS SURNAME</div></div>
                        <div class="t m0 x3 h5 y64 ff1 fs1 fc1 sc0 ls5 ws3">JMÉNO(A) / FIRST NAME(S)</div>
                        <div class="t m0 x3 h5 y7a ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">STÁTNÍ OB<span class="cz_roboto">Č</span>ANSTVÍ (kód) / NATIONALITY (code)*</div></div>
                        <div class="t m0 x3 h5 y65 ff1 fs1 fc1 sc0 ls5 ws3">DATUM NAROZENÍ / DATE OF BIRTH</div>
                        <div class="t m0 x3 h5 y7b ff1 fs1 fc1 sc0 ls5 ws3">STÁT NAROZENÍ (kód) / COUNTRY OF BIRTH (code)*</div>
                        <div class="t m0 x3 h5 y66 ff1 fs1 fc1 sc0 ls5 ws3">MÍSTO NAROZENÍ / PLACE OF BIRTH</div>
                        <div class="t m0 x3 h5 y67 ff1 fs1 fc1 sc0 ls5 ws3">POVOLÁNÍ / OCCUPATION </div>
                        <div class="t m0 x3 h5 y68 ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">BYDLIŠT<span class="cz_roboto">Ě</span> / RESIDENCE ADDRESS</div></div>
                        <div class="t m0 x1e h2 y69 ff1 fs0 fc1 sc0 ls5 ws3"><div class="cz_translate10">ULICE / STREET<span class="_ _c"> </span>   <span class="cz_roboto">Č</span>. / No.</div></div>
                        <div class="t m0 x1e h2 y6a ff1 fs0 fc1 sc0 ls5 ws3"><div class="cz_translate10">M<span class="cz_roboto">Ě</span>STO / TOWN<span class="_ _d"> </span> PS<span class="cz_roboto">Č</span> / POST CODE</div></div>
                        <div class="t m0 x1e h2 y7c ff1 fs0 fc1 sc0 ls5 ws3">STÁT (kód) / COUNTRY (code)*</div>

                        <div class="t m0 x2 h3 y6b ff3 fs1 fc1 sc0 ls5 ws3"><b class="cz_translate10">24. D<span class="cz_roboto">Ě</span>TI / CHILDREN</b></div>
                        <div class="t m0 x1e h2 y6c ff1 fs0 fc1 sc0 ls5 ws3"><div class="cz_translate10">P<span class="cz_roboto">Ř</span>ÍJMENÍ A OSTATNÍ JMÉNA /<span class="_ _e"> </span>JMÉNO(A) / <span class="_ _f"> </span>STÁTNÍ OB<span class="cz_roboto">Č</span>ANSTVÍ (kód) /</div></div>
                        <div class="t m0 x1e h2 y6d ff1 fs0 fc1 sc0 ls5 ws3">SURNAME AND OTHER NAMES<span class="_ _10"> </span>FIRST NAME(S)<span class="_ _f"></span>NATIONALITY (code)*</div>

                        <div class="t m0 x3 h7 y6e ff1 fs2 fc1 sc0 ls5">1.</div>
                        <div class="t m0 x3 h7 y6f ff1 fs2 fc1 sc0 ls5">2.</div>
                        <div class="t m0 x3 h7 y6f ff1 fs2 fc1 sc0 ls5">2.</div>
                        <div class="c x2 y70 w13 h1d">
                            <div class="t m0 x1f h7 y1c ff1 fs2 fc1 sc0 ls5">3.</div>
                        </div>
                        <div class="t m0 x3 h7 y71 ff1 fs2 fc1 sc0 ls5">4.</div>

                        <div class="t m0 x1e h2 y72 ff1 fs0 fc1 sc0 ls5 ws3"><div class="cz_translate10">DATUM NAROZENÍ / <span class="_ _11"> </span>MÍSTO NAROZENÍ /<span class="_ _12"> </span>BYDLIŠT<span class="cz_roboto">Ě</span> /<span class="_ _13"> </span>POVOLÁNÍ /</div></div>
                        <div class="t m0 x1e h2 y73 ff1 fs0 fc1 sc0 ls5 ws3">DATE OF BIRTH<span class="_ _14"> </span>BIRTH PLACE<span class="_ _15"> </span>RESIDENCE ADDRESS<span class="_ _16"> </span>OCCUPATION </div>

                        <div class="t m0 x3 h7 y74 ff1 fs2 fc1 sc0 ls5">1.</div>
                        <div class="t m0 x3 h7 y75 ff1 fs2 fc1 sc0 ls5">2.</div>
                        <div class="t m0 x3 h7 y76 ff1 fs2 fc1 sc0 ls5">3.</div>
                        <div class="c x2 y77 w13 h1d">
                            <div class="t m0 x1f h7 y1c ff1 fs2 fc1 sc0 ls5">4.</div>
                        </div>

                        <div class="t m0 x2 h7 y7e ff1 fs0 fc1 sc0 ls5 ws3">*) Strana 2 /Page 2</div>
                    </div>

                    <!-- ПОЛЯ ДЛЯ ВВОДА -->
                    <div>
                        <!-- 16 LAST_RESIDENCE_ABROAD_STREET -->
                        <div class="c x21 y85 wa hb">
                            <div class="t m0 x0 hf y2b ff2c fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $last_residence_abroad?->street }}</div></div>
                        </div>
                        <!-- 16 LAST_RESIDENCE_ABROAD_TOWN -->
                        <div class="c x21 y89 wb hb">
                            <div class="t m0 x0 hf y2b ff30 fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $last_residence_abroad?->town }}</div></div>
                        </div>
                        <!-- 16 LAST_RESIDENCE_ABROAD_No -->
                        <div class="c x1d y85 w11 h18">
                            <div class="t m0 x0 h19 y2b ff38 fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $last_residence_abroad?->number }}</div></div>
                        </div>
                        <!-- 16 LAST_RESIDENCE_ABROAD_POST_CODE -->
                        <div class="c x1d y89 w11 h18">
                            <div class="t m0 x0 h19 y2b ff37 fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $last_residence_abroad?->post_code }}</div></div>
                        </div>
                        <!-- 16 LAST_RESIDENCE_ABROAD_COUNTRY -->
                        <div class="c x1c y96 w10 h18">
                            <div class="t m0 x0 h19 y2b ff3d fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $last_residence_abroad?->country }}</div></div>
                        </div>

                        <!-- 17 PREVIOUS_STAY_IN_THE_CZECH_REPUBLIC -->
                        <div class="c x10 y7f w14 hb">
                            <div class="t m0 x0 hf y2b ff26 fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $previous_stay_in_cz?->purpose_of_stay }} {{ $previous_stay_in_cz?->place_of_stay }}</div></div>
                        </div>
                        <!-- 17 PREVIOUS_STAY_FROM_DAY -->
                        <div class="c x12 y99 wd h18">
                            <div class="t m0 x0 h19 y2b ff4a fsa fc3 sc0 ls6"><div class="translate40_ls23">{{ $previous_stay_in_cz?->from?->format('d') }}</div></div>
                        </div>
                        <!-- 17 PREVIOUS_STAY_FROM_MONTH -->
                        <div class="c x24 y99 wd h18">
                            <div class="t m0 x0 h19 y2b ff49 fsa fc3 sc0 ls6"><div class="translate40_ls23">{{ $previous_stay_in_cz?->from?->format('m') }}</div></div>
                        </div>
                        <!-- 17 PREVIOUS_STAY_FROM_YEAR -->
                        <div class="c x22 y99 w15 h18">
                            <div class="t m0 x0 h19 y2b ff41 fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $previous_stay_in_cz?->from?->format('Y') }}</div></div>
                        </div>
                        <!-- 17 PREVIOUS_STAY_TILL_DAY -->
                        <div class="c x19 y99 wd h18">
                            <div class="t m0 x0 h19 y2b ff48 fsa fc3 sc0 ls6"><div class="translate40_ls23">{{ $previous_stay_in_cz?->till?->format('d') }}</div></div>
                        </div>
                        <!-- 17 PREVIOUS_STAY_TILL_MONTH -->
                        <div class="c x1a y99 wd h18">
                            <div class="t m0 x0 h19 y2b ff47 fsa fc3 sc0 ls6"><div class="translate40_ls23">{{ $previous_stay_in_cz?->till?->format('m') }}</div></div>
                        </div>
                        <!-- 17 PREVIOUS_STAY_TILL_YEAR -->
                        <div class="c x16 y99 w15 h18">
                            <div class="t m0 x0 h19 y2b ff40 fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $previous_stay_in_cz?->till?->format('Y') }}</div></div>
                        </div>

                        <!-- 18 RESIDENCE_ADDRESS_STREET -->
                        <div class="c x21 y84 wa h14">
                            <div class="t m0 x0 h15 y3a ff2b fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $residence?->street }}</div></div>
                        </div>
                        <!-- 18 RESIDENCE_ADDRESS_TOWN -->
                        <div class="c x21 y88 wb hb">
                            <div class="t m0 x0 hf y2b ff2f fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $residence?->town }}</div></div>
                        </div>
                        <!-- 18 RESIDENCE_ADDRESS_No -->
                        <div class="c x1d y84 w11 h18">
                            <div class="t m0 x0 h19 y2b ff35 fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $residence?->number }}</div></div>
                        </div>
                        <!-- 18 RESIDENCE_ADDRESS_POST_CODE -->
                        <div class="c x1d y88 w11 h18">
                            <div class="t m0 x0 h19 y2b ff36 fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $residence?->post_code }}</div></div>
                        </div>

                        <!-- 19 DELIVERY_ADDRESS_STREET -->
                        <div class="c x21 y83 wa hb">
                            <div class="t m0 x0 hf y2b ff2a fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $delivery?->street }}</div></div>
                        </div>
                        <!-- 19 DELIVERY_ADDRESS_TOWN -->
                        <div class="c x21 y87 wb h14">
                            <div class="t m0 x0 h15 y4a ff2e fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $delivery?->town }}</div></div>
                        </div>
                        <!-- 19 DELIVERY_ADDRESS_No -->
                        <div class="c x1d y83 w11 h1a">
                            <div class="t m0 x0 h1b y3a ff34 fsb fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $delivery?->number }}</div></div>
                        </div>
                        <!-- 19 DELIVERY_ADDRESS_POST_CODE -->
                        <div class="c x1d y87 w11 h18">
                            <div class="t m0 x0 h19 y2b ff33 fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $delivery?->post_code }}</div></div>
                        </div>

                        <!-- 20 DATE_OF_ARRIVAL_MONTH -->
                        <div class="c x1a y98 wd h18">
                            <div class="t m0 x0 h19 y2b ff4b fsa fc3 sc0 ls6"><div class="translate40_ls23">{{ $previous_stay_in_cz?->date_of_arrival?->format('m') }}</div></div>
                        </div>
                        <!-- 20 DATE_OF_ARRIVAL_YEAR -->
                        <div class="c x16 y98 wf h18">
                            <div class="t m0 x0 h19 y2b ff3f fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $previous_stay_in_cz?->date_of_arrival?->format('Y') }}</div></div>
                        </div>

                        <!-- 21 DOCUMENT_NUMBER -->
                        <div class="c x29 ya3 w1b hb">
                            <div class="t m0 x0 hf y2b ff55 fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $passport?->number }}</div></div>
                        </div>
                        <!-- 21 DOCUMENT_COUNTRY -->
                        <div class="c x1c y95 w10 h18">
                            <div class="t m0 x0 h19 y2b ff3c fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $passport?->country }}</div></div>
                        </div>

                        <!-- 22 DOCUMENT_VALID_DAY -->
                        <div class="c x19 y97 wd h18">
                            <div class="t m0 x0 h19 y2b ff50 fsa fc3 sc0 ls6"><div class="translate40_ls23">{{ $passport?->expires?->format('d') }}</div></div>
                        </div>
                        <!-- 22 DOCUMENT_VALID_MONTH -->
                        <div class="c x1a y97 wd h18">
                            <div class="t m0 x0 h19 y2b ff4c fsa fc3 sc0 ls6"><div class="translate40_ls23">{{ $passport?->expires?->format('m') }}</div></div>
                        </div>
                        <!-- 22 DOCUMENT_VALID_YEAR -->
                        <div class="c x16 y97 wf h18">
                            <div class="t m0 x0 h19 y2b ff3e fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $passport?->expires?->format('Y') }}</div></div>
                        </div>

                        @if($spouse?->marital_status === 'MARRIED')
                            <!-- 23 SPOUSE_SURNAME -->
                            <div class="c x27 ya0 w19 hb">
                                <div class="t m0 x0 hf y2b ff52 fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $spouse?->surname }}</div></div>
                            </div>
                            <!-- 23 SPOUSE_OTHER_NAMES -->
                            <div class="c x10 y80 w14 h14">
                                <div class="t m0 x0 h15 y4a ff27 fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $spouse?->other_names }}</div></div>
                            </div>
                            <!-- 23 SPOUSE_PREVIOUS_SURNAME -->
                            <div class="c x10 y81 w14 hb">
                                <div class="t m0 x0 hf y2b ff28 fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $spouse?->all_previous_surnames }}</div></div>
                            </div>
                            <!-- 23 SPOUSE_FIRST_NAME -->
                            <div class="c x11 ya1 w7 h14">
                                <div class="t m0 x0 h15 y4a ff53 fs8 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $spouse?->first_name }}</div></div>
                            </div>
                            <!-- 23 SPOUSE_NATIONALITY -->
                            <div class="c x1c y93 w10 h18">
                                <div class="t m0 x0 h19 y2b ff3a fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $spouse?->passport?->nationality }}</div></div>
                            </div>
                            <!-- 23 SPOUSE_DATE_OF_BIRTH_DAY -->
                            <div class="c x19 y9a wd h18">
                                <div class="t m0 x0 h19 y2b ff4f fsa fc3 sc0 ls6"><div class="translate40_ls23">{{ $spouse?->birth?->format('d') }}</div></div>
                            </div>
                            <!-- 23 SPOUSE_DATE_OF_BIRTH_MONTH -->
                            <div class="c x1a y9a wd h18">
                                <div class="t m0 x0 h19 y2b ff4d fsa fc3 sc0 ls6"><div class="translate40_ls23">{{ $spouse?->birth?->format('m') }}</div></div>
                            </div>
                            <!-- 23 SPOUSE_DATE_OF_BIRTH_YEAR -->
                            <div class="c x16 y9a wf h18">
                                <div class="t m0 x0 h19 y2b ff42 fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $spouse?->birth?->format('Y') }}</div></div>
                            </div>
                            <!-- 23 SPOUSE_COUNTRY_OF_BIRTH -->
                            <div class="c x1c y92 w10 h1a">
                                <div class="t m0 x0 h1b y4a ff39 fsb fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $spouse?->passport?->country_of_birth }}</div></div>
                            </div>
                            <!-- 23 SPOUSE_PLACE_OF_BIRTH -->
                            <div class="c x28 ya2 w1a h14">
                                <div class="t m0 x0 h15 y3a ff54 fs8 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $spouse?->passport?->place_of_birth }}</div></div>
                            </div>
                            <!-- 23 SPOUSE_OCCUPATION -->
                            <div class="c x26 y9f w18 h14">
                                <div class="t m0 x0 h15 y4a ff51 fs8 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $spouse?->occupation?->occupation }}</div></div>
                            </div>
                            <!-- 23 SPOUSE_STREET -->
                            <div class="c x21 y82 wa hb">
                                <div class="t m0 x0 hf y2b ff29 fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $spouse?->address?->street }}</div></div>
                            </div>
                            <!-- 23 SPOUSE_TOWN -->
                            <div class="c x21 y86 wb hb">
                                <div class="t m0 x0 hf y2b ff2d fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $spouse?->address?->town }}</div></div>
                            </div>
                            <!-- 23 SPOUSE_No -->
                            <div class="c x1d y8a w11 h18">
                                <div class="t m0 x0 h19 y2b ff31 fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $spouse?->address?->number }}</div></div>
                            </div>
                            <!-- 23 SPOUSE_POST_CODE -->
                            <div class="c x1d y8b w11 h1a">
                                <div class="t m0 x0 h1b y4a ff32 fsb fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $spouse?->address?->post_code }}</div></div>
                            </div>
                            <!-- 23 SPOUSE_COUNTRY -->
                            <div class="c x1c y94 w10 h1a">
                                <div class="t m0 x0 h1b y3a ff3b fsb fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $spouse?->address?->country }}</div></div>
                            </div>
                        @endif
                        
                        <!-- 24 CHILDREN_1_SURNAME_AND_OTHER -->
                        <div class="c x25 ya8 w1d h14">
                            <div class="t m0 x0 h15 y3a ff5a fs8 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $children?->get(0)?->surname }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_2_SURNAME_AND_OTHER -->
                        <div class="c x25 ya9 w1d h14">
                            <div class="t m0 x0 h15 y4a ff5b fs8 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $children?->get(1)?->surname }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_3_SURNAME_AND_OTHER -->
                        <div class="c x25 yaa w1d hb">
                            <div class="t m0 x0 hf y2b ff5c fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $children?->get(2)?->surname }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_4_SURNAME_AND_OTHER -->
                        <div class="c x25 yab w1d hb">
                            <div class="t m0 x0 hf y2b ff5d fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $children?->get(3)?->surname }}</div></div>
                        </div>



                        <!-- 24 CHILDREN_1_FIRST_NAME -->
                        <div class="c x2b ya8 w1f h14">
                            <div class="t m0 x0 h15 y3a ff65 fs8 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $children?->get(0)?->first_name }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_2_FIRST_NAME -->
                        <div class="c x2b ya9 w1f h14">
                            <div class="t m0 x0 h15 y4a ff66 fs8 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $children?->get(1)?->first_name }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_3_FIRST_NAME -->
                        <div class="c x2b yaa w1f hb">
                            <div class="t m0 x0 hf y2b ff67 fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $children?->get(2)?->first_name }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_4_FIRST_NAME -->
                        <div class="c x2b yab w1f hb">
                            <div class="t m0 x0 hf y2b ff68 fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $children?->get(3)?->first_name }}</div></div>
                        </div>



                        <!-- 24 CHILDREN_1_NATIONALITY -->
                        <div class="c x1c ya4 w1c h18">
                            <div class="t m0 x0 h19 y2b ff56 fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(0)?->passport?->nationality }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_2_NATIONALITY -->
                        <div class="c x1c ya5 w1c h18">
                            <div class="t m0 x0 h19 y2b ff57 fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(1)?->passport?->nationality }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_3_NATIONALITY -->
                        <div class="c x1c ya6 w1c h1a">
                            <div class="t m0 x0 h1b y3a ff58 fsb fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(2)?->passport?->nationality }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_4_NATIONALITY -->
                        <div class="c x1c ya7 w1c h1a">
                            <div class="t m0 x0 h1b y4a ff59 fsb fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(3)?->passport?->nationality }}</div></div>
                        </div>

                        <!-- 24 CHILDREN_1_DATE_OF_BIRTH_DAY -->
                        <div class="c x25 y9b w17 h1e">
                            <div class="t m0 x0 h1f y34 ff4e fsc fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(0)?->birth?->format('d') }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_1_DATE_OF_BIRTH_MONTH -->
                        <div class="c x2a y9b w17 h1e">
                            <div class="t m0 x0 h1f y34 ff61 fsc fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(0)?->birth?->format('m') }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_1_DATE_OF_BIRTH_YEAR -->
                        <div class="c x23 y9b w15 h1e">
                            <div class="t m0 x0 h1f y34 ff43 fsc fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(0)?->birth?->format('Y') }}</div></div>
                        </div>

                        <!-- 24 CHILDREN_2_DATE_OF_BIRTH_DAY -->
                        <div class="c x25 y9c w17 h20">
                            <div class="t m0 x0 h21 y34 ff5e fsd fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(1)?->birth?->format('d') }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_2_DATE_OF_BIRTH_MONTH -->
                        <div class="c x2a y9c w17 h20">
                            <div class="t m0 x0 h21 y34 ff62 fsd fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(1)?->birth?->format('m') }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_2_DATE_OF_BIRTH_YEAR -->
                        <div class="c x23 y9c w15 h20">
                            <div class="t m0 x0 h21 y34 ff44 fsd fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(1)?->birth?->format('Y') }}</div></div>
                        </div>

                        <!-- 24 CHILDREN_3_DATE_OF_BIRTH_DAY -->
                        <div class="c x25 y9d w17 h22">
                            <div class="t m0 x0 h23 y31 ff5f fse fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(2)?->birth?->format('d') }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_3_DATE_OF_BIRTH_MONTH -->
                        <div class="c x2a y9d w17 h22">
                            <div class="t m0 x0 h23 y31 ff63 fse fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(2)?->birth?->format('m') }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_3_DATE_OF_BIRTH_YEAR -->
                        <div class="c x23 y9d w15 h22">
                            <div class="t m0 x0 h23 y31 ff45 fse fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(2)?->birth?->format('Y') }}</div></div>
                        </div>

                        <!-- 24 CHILDREN_4_DATE_OF_BIRTH_DAY -->
                        <div class="c x25 y9e w17 h22">
                            <div class="t m0 x0 h23 y31 ff60 fse fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(3)?->birth?->format('d') }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_4_DATE_OF_BIRTH_MONTH -->
                        <div class="c x2a y9e w17 h22">
                            <div class="t m0 x0 h23 y31 ff64 fse fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(3)?->birth?->format('m') }}</div></div>
                        </div>
                        <!-- 24 CHILDREN_4_DATE_OF_BIRTH_YEAR -->
                        <div class="c x23 y9e w15 h22">
                            <div class="t m0 x0 h23 y31 ff46 fse fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $children?->get(3)?->birth?->format('Y') }}</div></div>
                        </div>
                        
                        <!-- 24 CHILDREN_1_BIRTH_PLACE -->
                        <div class="c x11 y9b w22 h1e">
                            <div class="t m0 x0 h1f y34 ff75 fsc fc3 sc0 ls6 ws3"><div class="translate29_fs40">{{ $children?->get(0)?->passport?->place_of_birth }}</div></div>
                        </div>

                        <!-- 24 CHILDREN_2_BIRTH_PLACE -->
                        <div class="c x11 y9c w22 h20">
                            <div class="t m0 x0 h21 y34 ff76 fsd fc3 sc0 ls6 ws3"><div class="translate29_fs40">{{ $children?->get(1)?->passport?->place_of_birth }}</div></div>
                        </div>

                        <!-- 24 CHILDREN_3_BIRTH_PLACE -->
                        <div class="c x11 y9d w22 h22">
                            <div class="t m0 x0 h23 y31 ff77 fse fc3 sc0 ls6 ws3"><div class="translate29_fs40">{{ $children?->get(2)?->passport?->place_of_birth }}</div></div>
                        </div>

                        <!-- 24 CHILDREN_4_BIRTH_PLACE -->
                        <div class="c x11 y9e w22 h22">
                            <div class="t m0 x0 h23 y31 ff78 fse fc3 sc0 ls6 ws3"><div class="translate29_fs40">{{ $children?->get(3)?->passport?->place_of_birth }}</div></div>
                        </div>

                        <!-- 24 CHILDREN_1_RESIDENCE_ADDRESS -->
                        <div class="c x15 y9b w1e h1e">
                            <div class="t m0 x0 h1f y34 ff69 fsc fc3 sc0 ls6 ws3"><div class="translate0_fs25"> {{ $children?->get(0)?->address?->country }}   {{ $children?->get(0)?->address?->town }} {{ $children?->get(0)?->address?->street }} {{ $children?->get(0)?->address?->number }}</div></div>
                        </div>

                        <!-- 24 CHILDREN_2_RESIDENCE_ADDRESS -->
                        <div class="c x15 y9c w1e h20">
                            <div class="t m0 x0 h21 y34 ff6a fsd fc3 sc0 ls6 ws3"><div class="translate0_fs25"> {{ $children?->get(1)?->address?->country }}   {{ $children?->get(1)?->address?->town }} {{ $children?->get(1)?->address?->street }} {{ $children?->get(1)?->address?->number }}</div></div>
                        </div>

                        <!-- 24 CHILDREN_3_RESIDENCE_ADDRESS -->
                        <div class="c x15 y9d w1e h22">
                            <div class="t m0 x0 h23 y31 ff6b fse fc3 sc0 ls6 ws3"><div class="translate0_fs25"> {{ $children?->get(2)?->address?->country }}   {{ $children?->get(2)?->address?->town }} {{ $children?->get(2)?->address?->street }} {{ $children?->get(2)?->address?->number }}</div></div>
                        </div>

                        <!-- 24 CHILDREN_4_RESIDENCE_ADDRESS -->
                        <div class="c x15 y9e w1e h22">
                            <div class="t m0 x0 h23 y31 ff6c fse fc3 sc0 ls6 ws3"><div class="translate0_fs25"> {{ $children?->get(3)?->address?->country }}   {{ $children?->get(3)?->address?->town }} {{ $children?->get(3)?->address?->street }} {{ $children?->get(3)?->address?->number }}</div></div>
                        </div>

                        <!-- 24 CHILDREN_1_OCCUPATION -->
                        <div class="c x2d y9b w21 h1e">
                            <div class="t m0 x0 h1f y34 ff71 fsc fc3 sc0 ls6 ws3"><div class="translate29_fs40">{{ $children?->get(0)?->occupation?->occupation }}</div></div>
                        </div>

                        <!-- 24 CHILDREN_2_OCCUPATION -->
                        <div class="c x2d y9c w21 h20">
                            <div class="t m0 x0 h21 y34 ff72 fsd fc3 sc0 ls6 ws3"><div class="translate29_fs40">{{ $children?->get(1)?->occupation?->occupation }}</div></div>
                        </div>

                        <!-- 24 CHILDREN_3_OCCUPATION -->
                        <div class="c x2d y9d w21 h22">
                            <div class="t m0 x0 h23 y31 ff73 fse fc3 sc0 ls6 ws3"><div class="translate29_fs40">{{ $children?->get(2)?->occupation?->occupation }}</div></div>
                        </div>

                        <!-- 24 CHILDREN_4_OCCUPATION -->
                        <div class="c x2d y9e w21 h22">
                            <div class="t m0 x0 h23 y31 ff74 fse fc3 sc0 ls6 ws3"><div class="translate29_fs40">{{ $children?->get(3)?->occupation?->occupation }}</div></div>
                        </div>
                        
                        <!--<div class="c x2c y9b w20 h1e">
                            <div class="t m0 x0 h1f y34 ff6d fsc fc3 sc0 ls6 ws3"><div class="translate40_ls23">TEXT1</div></div>
                        </div>
                        <div class="c x2c y9c w20 h20">
                            <div class="t m0 x0 h21 y34 ff6e fsd fc3 sc0 ls6 ws3"><div class="translate40_ls23">TEXT2</div></div>
                        </div>
                        <div class="c x2c y9d w20 h22">
                            <div class="t m0 x0 h23 y31 ff6f fse fc3 sc0 ls6 ws3"><div class="translate40_ls23">TEXT3</div></div>
                        </div>
                        <div class="c x2c y9e w20 h22">
                            <div class="t m0 x0 h23 y31 ff70 fse fc3 sc0 ls6 ws3"><div class="translate40_ls23">TEXT4</div></div>
                        </div>-->
                    </div>
                </div>
            </div>

            <div class="break_block"></div>

            <div id="pf3" class="pf w0 h0" data-page-no="3">
                <div class="pc pc3 w0 h0">
                    <!-- КАРТИНКА -->
                    <div>
                        <img class="bi x0 y0 w1 h1" alt="" src="img/green_blank/third_page.png"/>
                    </div>
                    
                    <!-- ДЕФОЛТНЫЙ ТЕКСТ -->
                    <div>
                        <div class="c x2e yac w23 h24">
                            <div class="t m0 x2f h2 yad ff1 fs0 fc0 sc0 ls5 ws3">Strana 3 / Page 3</div>
                        </div>
                        <div class="t m0 x2e h3 yae ff3 fs1 fc1 sc0 ls5 ws3"><b>25. OTEC / FATHER</b></div>
                        <div class="t m0 x30 h5 yaf ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">P<span class="cz_roboto">Ř</span>ÍJMENÍ / SURNAME</div></div>
                        <div class="t m0 x30 h5 yb0 ff1 fs1 fc1 sc0 ls5 ws3">OSTATNÍ JMÉNA / OTHER NAMES</div>
                        <div class="t m0 x30 h5 yb1 ff1 fs1 fc1 sc0 ls5 ws3">JMÉNO(A) / FIRST NAME(S)</div>
                        <div class="t m0 x30 h5 yb2 ff1 fs1 fc1 sc0 ls5 ws3">DATUM NAROZENÍ / DATE OF BIRTH</div>
                        <div class="t m0 x30 h5 yca ff1 fs1 fc1 sc0 ls3 ws3"><div class="cz_translate10">STÁTNÍ OB<span class="cz_roboto">Č</span>ANSTVÍ (kód) / NATIONALITY (code)*</div></div>
                        <div class="t m0 x30 h5 yb3 ff1 fs1 fc1 sc0 ls5 ws3">POVOLÁNÍ / OCCUPATION </div>
                        <div class="t m0 x30 h5 yb4 ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">BYDLIŠT<span class="cz_roboto">Ě</span> / RESIDENCE ADDRESS</div></div>

                        <div class="t m0 x2e h3 yb5 ff3 fs1 fc1 sc0 ls5 ws3"><b>26. MATKA / MOTHER</b></div>
                        <div class="t m0 x30 h5 yb6 ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">P<span class="cz_roboto">Ř</span>ÍJMENÍ / SURNAME</div></div>
                        <div class="t m0 x30 h5 yb7 ff1 fs1 fc1 sc0 ls5 ws3">OSTATNÍ JMÉNA / OTHER NAMES</div>
                        <div class="t m0 x30 h5 yb8 ff1 fs1 fc1 sc0 ls5 ws3">JMÉNO(A) / FIRST NAME(S)</div>
                        <div class="t m0 x30 h5 yb9 ff1 fs1 fc1 sc0 ls5 ws3">DATUM NAROZENÍ / DATE OF BIRTH</div>
                        <div class="t m0 x30 h5 ycb ff1 fs1 fc1 sc0 ls3 ws3"><div class="cz_translate10">STÁTNÍ OB<span class="cz_roboto">Č</span>ANSTVÍ (kód) / NATIONALITY (code)*</div></div>
                        <div class="t m0 x30 h5 yba ff1 fs1 fc1 sc0 ls5 ws3">POVOLÁNÍ / OCCUPATION </div>
                        <div class="t m0 x30 h5 ybb ff1 fs1 fc1 sc0 ls5 ws3"><div class="cz_translate10">BYDLIŠT<span class="cz_roboto">Ě</span> / RESIDENCE ADDRESS</div></div>

                        <div class="t m0 x2e h3 ybc ff3 fs1 fc1 sc0 ls5 ws3"><b>27. SOUROZENCI / BROTHERS AND SISTERS</b></div>
                        <div class="t m0 x31 h2 ybd ff1 fs0 fc1 sc0 ls5 ws3">P<span class="cz_roboto">Ř</span>ÍJMENÍ A OSTATNÍ JMÉNA /<span class="_ _17"> </span>JMÉNO(A) / <span class="_ _18"> </span>STÁTNÍ OB<span class="cz_roboto">Č</span>ANSTVÍ (kód) /</div>
                        <div class="t m0 x31 h2 ybe ff1 fs0 fc1 sc0 ls5 ws3">SURNAME AND OTHER NAMES<span class="_ _19"> </span>FIRST NAMES <span class="_ _18"></span>NATIONALITY (code)*</div>
                        <div class="t m0 x30 h7 ybf ff1 fs2 fc1 sc0 ls5">1.</div>
                        <div class="t m0 x30 h7 yc0 ff1 fs2 fc1 sc0 ls5">2.</div>
                        <div class="t m0 x30 h7 yc1 ff1 fs2 fc1 sc0 ls5">3.</div>
                        <div class="t m0 x30 h7 yc2 ff1 fs2 fc1 sc0 ls5">4.</div>
                        <div class="t m0 x31 h2 yc3 ff1 fs0 fc1 sc0 ls5 ws3">DATUM NAROZENÍ / <span class="_ _11"> </span>BYDLIŠT<span class="cz_roboto">Ě</span> /<span class="_ _1a"> </span>POVOLÁNÍ /</div>
                        <div class="t m0 x31 h2 yc4 ff1 fs0 fc1 sc0 ls5 ws3">DATE OF BIRTH<span class="_ _14"> </span>RESIDENCE ADDRESS<span class="_ _1b"> </span>OCCUPATION</div>
                        <div class="t m0 x30 h7 yc5 ff1 fs2 fc1 sc0 ls5">1.</div>
                        <div class="t m0 x30 h7 yc6 ff1 fs2 fc1 sc0 ls5">2.</div>
                        <div class="t m0 x30 h7 yc7 ff1 fs2 fc1 sc0 ls5">3.</div>
                        <div class="t m0 x30 h7 yc8 ff1 fs2 fc1 sc0 ls5">4.</div>

                        <div class="t m0 x2e h3 yc9 ff3 fs1 fc1 sc0 ls5 ws3"><b class="cz_translate10">28. DOPL<span class="cz_roboto">Ň</span>UJÍCÍ INFORMACE / ADDITIONAL INFORMATION</b></div>

                        <div class="t m0 x2e h7 ycc ff1 fs0 fc1 sc0 ls5 ws3">*) Strana 3 /Page 3</div>
                    </div>
                    
                    <!-- ПОЛЯ ДЛЯ ВВОДА -->
                    <div>
                        <!-- 25 FATHER_SURNAME -->
                        <div class="c x33 ycd w24 h14">
                            <div class="t m0 x0 h15 y4a ff79 fs8 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $father?->surname }}</div></div>
                        </div>
                        <!-- 25 FATHER_OTHER_NAMES_1 -->
                        <div class="c x33 yce w24 h14">
                            <div class="t m0 x0 h15 y4a ff7a fs8 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ slice_string(32, $father?->other_names)->get(0) }}</div></div>
                        </div>
                        <!-- 25 FATHER_OTHER_NAMES_2 -->
                        <div class="c x33 ycf w24 hb">
                            <div class="t m0 x0 hf y2b ff7b fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ slice_string(32, $father?->other_names)->get(1) }}</div></div>
                        </div>
                        <!-- 25 FATHER_FIRST_NAME -->
                        <div class="c x3c ydf w19 hb">
                            <div class="t m0 x0 hf y2b ff97 fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $father?->first_name }}</div></div>
                        </div>
                        <!-- 25 FATHER_DATE_OF_BIRTH_DAY -->
                        <div class="c x38 yd7 wd h18">
                            <div class="t m2 x0 h19 y2b ff8c fsa fc3 sc0 ls6"><div class="translate40_ls23">{{ $father?->birth?->format('d') }}</div></div>
                        </div>
                        <!-- 25 FATHER_DATE_OF_BIRTH_MONTH -->
                        <div class="c x37 yd7 wd h18">
                            <div class="t m1 x0 h19 y2b ff8b fsa fc3 sc0 ls6"><div class="translate40_ls23">{{ $father?->birth?->format('m') }}</div></div>
                        </div>
                        <!-- 25 FATHER_DATE_OF_BIRTH_YEAR -->
                        <div class="c x35 yd7 w15 h18">
                            <div class="t m0 x0 h19 y2b ff83 fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $father?->birth?->format('Y') }}</div></div>
                        </div>
                        <!-- 25 FATHER_NATIONALITY -->
                        <div class="c x34 yd5 w10 h1a">
                            <div class="t m0 x0 h1b y3a ff81 fsb fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $father?->passport?->nationality }}</div></div>
                        </div>
                        <!-- 25 FATHER_OCCUPATION -->
                        <div class="c x3b ydd w7 h14">
                            <div class="t m0 x0 h15 y3a ff95 fs8 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $father?->occupation?->occupation }}</div></div>
                        </div>
                        <!-- 25 FATHER_RESIDENCE_ADDRESS -->
                        <div class="c x33 yd0 w24 h14">
                            <div class="t m0 x0 h15 y4a ff7c fs8 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $father?->address?->street }} {{ $father?->address?->number }} {{ $father?->address?->town }} {{ $father?->address?->country }}</div></div>
                        </div>


                        
                        <!-- 26 MOTHER_SURNAME -->
                        <div class="c x33 yd1 w24 hb">
                            <div class="t m0 x0 hf y2b ff7d fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $mother?->surname }}</div></div>
                        </div>
                        <!-- 26 MOTHER_OTHER_NAMES_1 -->
                        <div class="c x33 yd2 w24 hb">
                            <div class="t m0 x0 hf y2b ff7e fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ slice_string(32, $mother?->other_names)->get(0) }}</div></div>
                        </div>
                        <!-- 26 MOTHER_OTHER_NAMES_2 -->
                        <div class="c x33 yd3 w24 hb">
                            <div class="t m0 x0 hf y2b ff7f fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ slice_string(32, $mother?->other_names)->get(1) }}</div></div>
                        </div>
                        <!-- 26 MOTHER_FIRST_NAME -->
                        <div class="c x3d ye0 w18 h14">
                            <div class="t m0 x0 h15 y4a ff98 fs8 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $mother?->first_name }}</div></div>
                        </div>
                        <!-- 26 MOTHER_DATE_OF_BIRTH_DAY -->
                        <div class="c x38 yd8 wd h1a">
                            <div class="t m1 x0 h1b y4a ff8a fsb fc3 sc0 ls6"><div class="translate40_ls23">{{ $mother?->birth?->format('d') }}</div></div>
                        </div>
                        <!-- 26 MOTHER_DATE_OF_BIRTH_MONTH -->
                        <div class="c x37 yd8 wd h1a">
                            <div class="t m1 x0 h1b y4a ff89 fsb fc3 sc0 ls6"><div class="translate40_ls23">{{ $mother?->birth?->format('m') }}</div></div>
                        </div>
                        <!-- 26 MOTHER_DATE_OF_BIRTH_YEAR -->
                        <div class="c x35 yd8 w15 h1a">
                            <div class="t m0 x0 h1b y4a ff84 fsb fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $mother?->birth?->format('Y') }}</div></div>
                        </div>
                        <!-- 26 MOTHER_NATIONALITY -->
                        <div class="c x34 yd6 w10 h18">
                            <div class="t m0 x0 h19 y2b ff82 fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $mother?->passport?->nationality }}</div></div>
                        </div>
                        <!-- 26 MOTHER_OCCUPATION -->
                        <div class="c x3b yde w7 hb">
                            <div class="t m0 x0 hf y2b ff96 fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $mother?->occupation?->occupation }}</div></div>
                        </div>
                        <!-- 26 MOTHER_RESIDENCE_ADDRESS -->
                        <div class="c x33 yd4 w24 hb">
                            <div class="t m0 x0 hf y2b ff80 fs4 fc3 sc0 ls7 ws3"><div class="translate40_ls23">{{ $mother?->address?->country }} {{ $mother?->address?->town }} {{ $mother?->address?->street }} {{ $mother?->address?->number }}</div></div>
                        </div>


                        
                        <!-- 27 BROTHERS_SISTERS_1_SURNAME -->
                        <div class="c x3f ye5 w26 hb">
                            <div class="t m0 x0 hf y2b ff9d fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $siblings?->get(0)?->surname }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_2_SURNAME -->
                        <div class="c x3f ye6 w26 hb">
                            <div class="t m0 x0 hf y2b ffa2 fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $siblings?->get(1)?->surname }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_3_SURNAME -->
                        <div class="c x3f ye7 w26 hb">
                            <div class="t m0 x0 hf y2b ffa3 fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $siblings?->get(2)?->surname }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_4_SURNAME -->
                        <div class="c x3f ye8 w26 hb">
                            <div class="t m0 x0 hf y2b ffa4 fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $siblings?->get(3)?->surname }}</div></div>
                        </div>
                        
                        <!-- 27 BROTHERS_SISTERS_1_FIRST_NAME -->
                        <div class="c x40 ye5 w27 hb">
                            <div class="t m0 x0 hf y2b ff9e fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $siblings?->get(0)?->first_name }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_2_FIRST_NAME -->
                        <div class="c x40 ye6 w27 hb">
                            <div class="t m0 x0 hf y2b ff9f fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $siblings?->get(1)?->first_name }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_3_FIRST_NAME -->
                        <div class="c x40 ye7 w27 hb">
                            <div class="t m0 x0 hf y2b ffa0 fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $siblings?->get(2)?->first_name }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_4_FIRST_NAME -->
                        <div class="c x40 ye8 w27 hb">
                            <div class="t m0 x0 hf y2b ffa1 fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $siblings?->get(3)?->first_name }}</div></div>
                        </div>

                        <!-- 27 BROTHERS_SISTERS_1_NATIONALITY -->
                        <div class="c x3e ye1 w1c h1a">
                            <div class="t m0 x0 h1b y4a ff99 fsb fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $siblings?->get(0)?->passport?->nationality }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_2_NATIONALITY -->
                        <div class="c x3e ye2 w1c h1a">
                            <div class="t m0 x0 h1b y4a ff9a fsb fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $siblings?->get(1)?->passport?->nationality }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_3_NATIONALITY -->
                        <div class="c x3e ye3 w1c h1a">
                            <div class="t m0 x0 h1b y4a ff9b fsb fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $siblings?->get(2)?->passport?->nationality }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_4_NATIONALITY -->
                        <div class="c x3e ye4 w1c h1a">
                            <div class="t m0 x0 h1b y3a ff9c fsb fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $siblings?->get(3)?->passport?->nationality }}</div></div>
                        </div>

                        <!-- 27 BROTHERS_SISTERS_1_DATE_OF_BIRTH_DAY -->
                        <div class="c x3a yd9 wd h18">
                            <div class="t m2 x0 h19 y2b ff8e fsa fc3 sc0 ls6"><div class="translate40_ls23">{{ $siblings?->get(0)?->birth?->format('d') }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_1_DATE_OF_BIRTH_MONTH -->
                        <div class="c x39 yd9 wd h18">
                            <div class="t m2 x0 h19 y2b ff8d fsa fc3 sc0 ls6"><div class="translate40_ls23">{{ $siblings?->get(0)?->birth?->format('m') }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_1_DATE_OF_BIRTH_YEAR -->
                        <div class="c x36 yd9 wf h18">
                            <div class="t m0 x0 h19 y2b ff85 fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $siblings?->get(0)?->birth?->format('Y') }}</div></div>
                        </div>

                        <!-- 27 BROTHERS_SISTERS_2_DATE_OF_BIRTH_DAY -->
                        <div class="c x3a yda wd h18">
                            <div class="t m2 x0 h19 y2b ff8f fsa fc3 sc0 ls6"><div class="translate40_ls23">{{ $siblings?->get(1)?->birth?->format('d') }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_2_DATE_OF_BIRTH_MONTH -->
                        <div class="c x39 yda wd h18">
                            <div class="t m3 x0 h19 y2b ff92 fsa fc3 sc0 ls6"><div class="translate40_ls23">{{ $siblings?->get(1)?->birth?->format('m') }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_2_DATE_OF_BIRTH_YEAR -->
                        <div class="c x36 yda wf h18">
                            <div class="t m0 x0 h19 y2b ff86 fsa fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $siblings?->get(1)?->birth?->format('Y') }}</div></div>
                        </div>

                        <!-- 27 BROTHERS_SISTERS_3_DATE_OF_BIRTH_DAY -->
                        <div class="c x3a ydb wd h1a">
                            <div class="t m0 x0 h1b y3a ff90 fsb fc3 sc0 ls6"><div class="translate40_ls23">{{ $siblings?->get(2)?->birth?->format('d') }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_3_DATE_OF_BIRTH_MONTH -->
                        <div class="c x39 ydb wd h1a">
                            <div class="t m0 x0 h1b y3a ff93 fsb fc3 sc0 ls6"><div class="translate40_ls23">{{ $siblings?->get(2)?->birth?->format('m') }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_3_DATE_OF_BIRTH_YEAR -->
                        <div class="c x36 ydb wf h1a">
                            <div class="t m1 x0 h1b y3a ff87 fsb fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $siblings?->get(2)?->birth?->format('Y') }}</div></div>
                        </div>

                        <!-- 27 BROTHERS_SISTERS_4_DATE_OF_BIRTH_DAY -->
                        <div class="c x3a ydc wd h1a">
                            <div class="t m0 x0 h1b y3a ff91 fsb fc3 sc0 ls6"><div class="translate40_ls23">{{ $siblings?->get(3)?->birth?->format('d') }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_4_DATE_OF_BIRTH_MONTH -->
                        <div class="c x39 ydc wd h1a">
                            <div class="t m0 x0 h1b y3a ff94 fsb fc3 sc0 ls6"><div class="translate40_ls23">{{ $siblings?->get(3)?->birth?->format('m') }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_4_DATE_OF_BIRTH_YEAR -->
                        <div class="c x36 ydc wf h1a">
                            <div class="t m1 x0 h1b y3a ff88 fsb fc3 sc0 ls6 ws3"><div class="translate40_ls23">{{ $siblings?->get(3)?->birth?->format('Y') }}</div></div>
                        </div>
                        
                        <!-- 27 BROTHERS_SISTERS_1_RESIDENCE_ADDRESS -->
                        <div class="c x41 ye9 w28 hb">
                            <div class="t m0 x0 hf y2b ffa5 fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $siblings?->get(0)?->address?->country }} {{ $siblings?->get(0)?->address?->town }} {{ $siblings?->get(0)?->address?->street }} {{ $siblings?->get(0)?->address?->number }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_2_RESIDENCE_ADDRESS -->
                        <div class="c x41 yea w28 hb">
                            <div class="t m0 x0 hf y2b ffa6 fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $siblings?->get(1)?->address?->country }} {{ $siblings?->get(1)?->address?->town }} {{ $siblings?->get(1)?->address?->street }} {{ $siblings?->get(1)?->address?->number }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_3_RESIDENCE_ADDRESS -->
                        <div class="c x41 yeb w28 hb">
                            <div class="t m0 x0 hf y2b ffa7 fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $siblings?->get(2)?->address?->country }} {{ $siblings?->get(2)?->address?->town }} {{ $siblings?->get(2)?->address?->street }} {{ $siblings?->get(2)?->address?->number }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_4_RESIDENCE_ADDRESS -->
                        <div class="c x41 yec w28 hb">
                            <div class="t m0 x0 hf y2b ffa8 fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $siblings?->get(3)?->address?->country }} {{ $siblings?->get(3)?->address?->town }} {{ $siblings?->get(3)?->address?->street }} {{ $siblings?->get(3)?->address?->number }}</div></div>
                        </div>
                        
                        <!-- 27 BROTHERS_SISTERS_1_OCCUPATION -->
                        <div class="c x38 yd9 w29 h18">
                            <div class="t m0 x0 h19 y2b ffa9 fsa fc3 sc0 ls6 ws3"><div class="translate29_fs40">{{ $siblings?->get(0)?->occupation?->occupation }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_2_OCCUPATION -->
                        <div class="c x38 yda w29 h18">
                            <div class="t m0 x0 h19 y2b ffaa fsa fc3 sc0 ls6 ws3"><div class="translate29_fs40">{{ $siblings?->get(1)?->occupation?->occupation }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_3_OCCUPATION -->
                        <div class="c x38 ydb w29 h1a">
                            <div class="t m0 x0 h1b y3a ffab fsb fc3 sc0 ls6 ws3"><div class="translate29_fs40">{{ $siblings?->get(2)?->occupation?->occupation }}</div></div>
                        </div>
                        <!-- 27 BROTHERS_SISTERS_4_OCCUPATION -->
                        <div class="c x38 ydc w29 h1a">
                            <div class="t m0 x0 h1b y3a ffac fsb fc3 sc0 ls6 ws3"><div class="translate29_fs40">{{ $siblings?->get(3)?->occupation?->occupation }}</div></div>
                        </div>
                        
                        <!-- 28 ADDITIONAL_INFORMATION_EMAIL -->
                        <div class="c x33 yed w2a hb">
                            <div class="t m0 x0 hf y2b ffad fs4 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $additional?->email }}</div></div>
                        </div>
                        <!-- 28 ADDITIONAL_INFORMATION_PHONE -->
                        <div class="c x33 yee w2b h14">
                            <div class="t m0 x0 h25 y4a ffae fs8 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ $additional?->phone }}</div></div>
                        </div>
                        <!-- 28 ADDITIONAL_INFORMATION -->
                        <div class="c x33 w2b h14" style="bottom:107px">
                            <div class="t m0 x0 h25 y4a ffae fs8 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ slice_string(80, $additional?->information)->get(0) }}</div></div>
                        </div>
                        <div class="c x33 w2b h14" style="bottom:93px">
                            <div class="t m0 x0 h25 y4a ffae fs8 fc3 sc0 ls7 ws3"><div class="translate29_fs40">{{ slice_string(80, $additional?->information)->get(1) }}</div></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="break_block"></div>

            <div id="pf4" class="pf w0 h0" data-page-no="4">
                <div class="pc pc4 w0 h0">
                    <!-- КАРТИНКА -->
                    <div>
                        <img class="bi x0 y0 w1 h1" alt="" src="img/green_blank/fourth_page.png"/>
                    </div>
                    
                    <!-- ДЕФОЛТНЫЙ ТЕКСТ -->
                    <div>
                        <div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls5">Strana 4 / Page 4</div>

                        <div class="t m0 x2 h4 yef ff3 fs2 fc1 sc0 ls5"><b>29.</b></div>
                        <div class="c x2 yf1 w2c h26">
                            <div class="t m0 x42 h3 yf2 ff3 fs1 fc1 sc0 ls5 ws3">   <b>POU<span class="cz_roboto">Č</span>ENÍ PRO ŽADATELE / INSTRUCTIONS FOR APPLICANTS</b></div>
                            <div class="t m0 x42 h2 yf3 ff1 fs0 fc1 sc0 ls5 ws3">   1. Údaje v žádosti musí být vypln<span class="cz_roboto">ě</span>ny strojem nebo h<span class="cz_roboto">ů</span>lkovým písmem v <span class="cz_roboto">č</span>eském jazyce. V p<span class="cz_roboto">ř</span>ípad<span class="cz_roboto">ě</span> nedostatku místa </div>
                            <div class="t m0 x42 h2 yf4 ff1 fs0 fc1 sc0 ls5 ws3">       v p<span class="cz_roboto">ř</span>íslušných rubrikách uve<span class="cz_roboto">ď</span>te údaje na zvláštní p<span class="cz_roboto">ř</span>ílohu.</div>

                            <div class="t m0 x42 h2 yf5 ff1 fs0 fc1 sc0 ls5 ws3">   2. Práva a povinnosti cizinc<span class="cz_roboto">ů</span>, spojená s pobytem na území <span class="cz_roboto">Č</span>R jsou upravená zákonem <span class="cz_roboto">č</span>. 326/1999 Sb., o pobytu </div>
                            <div class="t m0 x42 h2 yf6 ff1 fs0 fc1 sc0 ls5 ws3">       cizinc<span class="cz_roboto">ů</span> na území <span class="cz_roboto">Č</span>eské republiky a o zm<span class="cz_roboto">ě</span>n<span class="cz_roboto">ě</span> n<span class="cz_roboto">ě</span>kterých zákon<span class="cz_roboto">ů</span>, ve zn<span class="cz_roboto">ě</span>ní pozd<span class="cz_roboto">ě</span>jších p<span class="cz_roboto">ř</span>edpis<span class="cz_roboto">ů</span>. </div>
                            <div class="t m0 x42 h2 yf7 ff1 fs0 fc1 sc0 ls5 ws3">       <span class="cz_roboto">Ř</span>ízení o žádosti je zahájeno dnem, kdy došla v<span class="cz_roboto">ě</span>cn<span class="cz_roboto">ě</span> a místn<span class="cz_roboto">ě</span> p<span class="cz_roboto">ř</span>íslušnému správnímu orgánu. <span class="cz_roboto">Ř</span>ízení je upraveno </div>
                            <div class="t m0 x42 h2 yf8 ff1 fs0 fc1 sc0 ls5 ws3">       zákonem <span class="cz_roboto">č</span>. 500/2004 Sb., správní <span class="cz_roboto">ř</span>ád.</div>

                            <div class="t m0 x42 h2 yf9 ff1 fs0 fc1 sc0 ls5 ws3">   3. Osobní údaje cizince jsou zpracovávány službou cizinecké a pohrani<span class="cz_roboto">č</span>ní policie pro ú<span class="cz_roboto">č</span>ely <span class="cz_roboto">ř</span>ízení dle zákona </div>
                            <div class="t m0 x42 h2 yfa ff1 fs0 fc1 sc0 ls5 ws3">       <span class="cz_roboto">č</span>. 326/1999 Sb., a ve stanovených p<span class="cz_roboto">ř</span>ípadech Ministerstvem vnitra v souladu se zákonem <span class="cz_roboto">č</span>. 101/2000 Sb., </div>
                            <div class="t m0 x42 h2 yfb ff1 fs0 fc1 sc0 ls5 ws3">       o ochran<span class="cz_roboto">ě</span> osobních údaj<span class="cz_roboto">ů</span>, ve zn<span class="cz_roboto">ě</span>ní pozd<span class="cz_roboto">ě</span>jších p<span class="cz_roboto">ř</span>edpis<span class="cz_roboto">ů</span>. Rozsah osobních údaj<span class="cz_roboto">ů</span>, který je cizinec povinen uvést</div>
                            <div class="t m0 x42 h2 yfc ff1 fs0 fc1 sc0 ls5 ws3">       v žádosti dle zákona <span class="cz_roboto">č</span>. 326/1999 Sb.,  stanoví § 70 odst. 4 téhož zákona. Dle § 159 odst. 1 a 2 zákona </div>
                            <div class="t m0 x42 h2 yfd ff1 fs0 fc1 sc0 ls5 ws3">       <span class="cz_roboto">č</span>. 326/1999 Sb. lze osobní údaje cizince poskytnout cizinci samotnému a dále tomu, kdo je pot<span class="cz_roboto">ř</span>ebuje k pln<span class="cz_roboto">ě</span>ní </div>
                            <div class="t m0 x42 h2 yfe ff1 fs0 fc1 sc0 ls5 ws3">       úkol<span class="cz_roboto">ů</span> stanovených zákonem. Cizinec je oprávn<span class="cz_roboto">ě</span>n, pokud zjistí nebo se domnívá, že orgán služby cizinecké </div>
                            <div class="t m0 x42 h2 yff ff1 fs0 fc1 sc0 ls5 ws3">       a pohrani<span class="cz_roboto">č</span>ní policie nebo Ministerstvo vnitra zpracovává jeho  osobní údaje v rozporu se zákonem <span class="cz_roboto">č</span>. 101/2000 </div>
                            <div class="t m0 x42 h2 y100 ff1 fs0 fc1 sc0 ls5 ws3">       Sb., požadovat od tohoto orgánu vysv<span class="cz_roboto">ě</span>tlení p<span class="cz_roboto">ř</span>ípadn<span class="cz_roboto">ě</span> odstran<span class="cz_roboto">ě</span>ní vzniklého stavu (zejména provedení opravy, </div>
                            <div class="t m0 x42 h2 y101 ff1 fs0 fc1 sc0 ls5 ws3">       dopln<span class="cz_roboto">ě</span>ní nebo likvidaci osobních údaj<span class="cz_roboto">ů</span>). V p<span class="cz_roboto">ř</span>ípad<span class="cz_roboto">ě</span>, že nebude tomuto požadavku vyhov<span class="cz_roboto">ě</span>no, má cizinec právo </div>
                            <div class="t m0 x42 h2 y102 ff1 fs0 fc1 sc0 ls5 ws3">       obrátit se p<span class="cz_roboto">ř</span>ímo na Ú<span class="cz_roboto">ř</span>ad pro ochranu osobních údaj<span class="cz_roboto">ů</span>. Dle § 21 odst. 4 zákona <span class="cz_roboto">č</span>. 101/2000 Sb. je cizinec </div>
                            <div class="t m0 x42 h2 y103 ff1 fs0 fc1 sc0 ls5 ws3">       oprávn<span class="cz_roboto">ě</span>n obrátit se v uvedené v<span class="cz_roboto">ě</span>ci na Ú<span class="cz_roboto">ř</span>ad pro ochranu osobních údaj<span class="cz_roboto">ů</span> i p<span class="cz_roboto">ř</span>ímo.</div>

                            <div class="t m0 x42 h2 y104 ff1 fs0 fc1 sc0 ls5 ws3">   1. The answers in this application form must be typed or written in block letters in Czech. If there is not enough</div>
                            <div class="t m0 x42 h2 y105 ff1 fs0 fc1 sc0 ls5 ws3">       space for any answer, please enclose an additional sheet of paper.</div>

                            <div class="t m0 x42 h2 y106 ff1 fs0 fc1 sc0 ls5 ws3">   2. The rights and duties of aliens residing in the Czech Republic are defined in Act No. 326/1999  regulating the </div>
                            <div class="t m0 x42 h2 y107 ff1 fs0 fc1 sc0 ls5 ws3">       residence of aliens in the Czech Republic and amending certain related acts as amended. The proceedings are </div>
                            <div class="t m0 x42 h2 y108 ff1 fs0 fc1 sc0 ls5 ws3">       deemed to be initiated on the date of delivery of the application to the competent authority. The proceeding are </div>
                            <div class="t m0 x42 h2 y109 ff1 fs0 fc1 sc0 ls5 ws3">       regulated by the Code of Administrative Procedure (Act No. 500/2004).</div>

                            <div class="t m0 x42 h2 y10a ff1 fs0 fc1 sc0 ls5 ws3">   3. Personal data of aliens are processed by the Alien and Border Police for the purposes of proceedings in terms</div>
                            <div class="t m0 x42 h2 y10b ff1 fs0 fc1 sc0 ls5 ws3">       of Act No. 326/1999 and, in specified cases, by the Ministry of the Interior in compliance with Act No. 101/2000 </div>
                            <div class="t m0 x42 h2 y10c ff1 fs0 fc1 sc0 ls5 ws3">       regulating the protection of personal data as amended. The range of personal data to be disclosed in this </div>
                            <div class="t m0 x42 h2 y10d ff1 fs0 fc1 sc0 ls5 ws3">       application is defined in Section 70,  paragraph 4 of Act No. 326/1999. According to Section 159, paragraphs 1 </div>
                            <div class="t m0 x42 h2 y10e ff1 fs0 fc1 sc0 ls5 ws3">       and 2 of Act No. 326/1999, an alien´s  personal data may be released to the alien himself/herself and to</div>
                            <div class="t m0 x42 h2 y10f ff1 fs0 fc1 sc0 ls5 ws3">       authorities  that require them for the purpose of tasks set by law. If the alien finds or believes that the processing </div>
                            <div class="t m0 x42 h2 y110 ff1 fs0 fc1 sc0 ls5 ws3">       of his/her personal data by the Alien and Border Police or by the Ministry of the Interior is inconsistent with Act </div>
                            <div class="t m0 x42 h2 y111 ff1 fs0 fc1 sc0 ls5 ws3">       No. 101/2000, he/she is entitled to request the processing authority to explain or to rectify the situation (in </div>
                            <div class="t m0 x42 h2 y112 ff1 fs0 fc1 sc0 ls5 ws3">       particular to correct, add or destroy personal data). If the processing authority fails to comply with such reguest,</div>
                            <div class="t m0 x42 h2 y113 ff1 fs0 fc1 sc0 ls5 ws3">       the alien is entitled to seek the assistance of the Personal Data Protection Office. The alien may directly contact</div>
                            <div class="t m0 x42 h2 y114 ff1 fs0 fc1 sc0 ls5 ws3">       the Personal Data Protection Office with reference to Section 21, paragraph 4 of Act No. 101/2000.  </div>

                            <div class="t m0 x42 h2 y116 ff1 fs0 fc1 sc0 ls5 ws3">   Svým podpisem potvrzuji úplnost a pravdivost uvedených údaj<span class="cz_roboto">ů</span> v žádosti/  </div>
                            <div class="t m0 x42 h2 y117 ff1 fs0 fc1 sc0 ls5 ws3">   I declare that I have answered all questions in this application fully and truthfully</div>

                            <div class="t m0 x42 h2 y119 ff1 fs0 fc1 sc0 ls8 ws3">   Místo / Place ......................   Dne / Date   ...................................              Podpis / Signature  ...............................</div>
                        </div>

                        <div class="t m0 x2 h3 yf0 ff3 fs1 fc1 sc0 ls5"><b>30.</b></div>
                        <div class="c x2 yf1 w2c h26">
                            <div class="t m0 x42 h5 y11b ff1 fs1 fc1 sc0 ls5 ws3">    Žádost p<span class="cz_roboto">ř</span>ijal a podle doklad<span class="cz_roboto">ů</span> ov<span class="cz_roboto">ě</span><span class="cz_roboto">ř</span>il: /</div>
                            <div class="t m0 x42 h5 y11c ff1 fs1 fc1 sc0 ls5 ws3">    Application received and documentation checked by:</div>
                            <div class="t m0 x42 h5 y11d ff1 fs1 fc1 sc0 ls3 ws3">    Místo / Place  ............................   Dne / Date  ..............................     .......................................................</div>
                            <div class="t m0 x42 h5 y11e ff1 fs1 fc1 sc0 ls3 ws3">                                                                                                                               Razítko a podpis / </div>
                            <div class="t m0 x42 h5 y11f ff1 fs1 fc1 sc0 ls3 ws3">                                                                                                                           Stamp and Signature</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="break_block"></div>

            <div id="pf5" class="pf w0 h0" data-page-no="5">
                <div class="pc pc5 w0 h0">
                    <!-- КАРТИНКА -->
                    <div>
                        <img class="bi x0 y0 w1 h1" alt="" src="img/green_blank/fifth_page.png"/>
                    </div>
                    
                    <!-- ДЕФОЛТНЫЙ ТЕКСТ -->
                    <div>
                        <div class="c x2e yac w23 h24">
                            <div class="t m0 x2f h2 yad ff1 fs0 fc0 sc0 ls5 ws3">Strana 5 / Page 5</div>
                        </div>

                        <div class="t m0 x43 h3 y120 ff3 fs1 fc1 sc0 ls5"><b>31.</b></div>
                        <div class="c x43 y127 w2d h28">
                            <div class="t m0 x46 h5 y128 ff1 fs1 fc1 sc0 ls5 ws3">    Pr<span class="cz_roboto">ů</span>kaz o povolení k pobytu pro cizince p<span class="cz_roboto">ř</span>edal / Resident Alien Card issued by:</div>
                            <div class="t m0 x46 h5 y129 ff1 fs1 fc1 sc0 ls3 ws3">    Místo / Place .........................  Dne / Date ........................     .................................................................  </div>
                            <div class="t m0 x46 h5 y12a ff1 fs1 fc1 sc0 ls5 ws3">                                                                                                                Razítko a podpis vydávajícího / </div>
                            <div class="t m0 x46 h5 y12b ff1 fs1 fc1 sc0 ls5 ws3">                                                                                                     Stamp and Signature of issuing Authority</div>
                        </div>

                        <div class="t m0 x43 h3 y121 ff3 fs1 fc1 sc0 ls5"><b>32.</b></div>
                        <div class="c x43 y127 w2d h28">
                            <div class="t m0 x46 h5 y12c ff1 fs1 fc1 sc0 ls5 ws3">    P<span class="cz_roboto">ř</span>evzetí Pr<span class="cz_roboto">ů</span>kazu o povolení k pobytu <span class="cz_roboto">č</span>.: ....................................... pro cizince /</div>
                            <div class="t m0 x46 h5 y12d ff1 fs1 fc1 sc0 ls5 ws3">    Resident Alien Permit Card No. received by</div>
                            <div class="t m0 x46 h5 y12e ff1 fs1 fc1 sc0 ls3 ws3">    Místo / Place .......................   Dne / Date   .........................             ....................................................  </div>
                            <div class="t m0 x46 h5 y109 ff1 fs1 fc1 sc0 ls3 ws3">                                                                                                                           Podpis / Signature</div>
                        </div>

                        <div class="t m0 x43 h3 y122 ff3 fs1 fc1 sc0 ls5"><b>33.</b></div>
                        <div class="c x43 y127 w2d h28">
                            <div class="t m0 x46 h5 y12f ff1 fs1 fc1 sc0 ls5 ws3">    Ú<span class="cz_roboto">ř</span>ední záznamy / For office use only:</div>
                        </div>
                        <div class="t m0 x44 h7 y123 ff1 fs2 fc1 sc0 ls5">KOLKOVÁ</div>
                        <div class="t m0 x44 h7 y124 ff1 fs2 fc1 sc0 ls5 ws3">ZNÁMKA /</div>
                        <div class="t m0 x1e h7 y125 ff1 fs2 fc1 sc0 ls5">REVENUE</div>
                        <div class="t m0 x45 h7 y126 ff1 fs2 fc1 sc0 ls5">STAMP</div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>