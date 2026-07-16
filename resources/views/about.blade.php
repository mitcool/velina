@extends('layout')

@section('seo')
    <title>{{ trans('about.meta-title') }}</title>
    <meta name="description" content="{{ trans('about.meta-descriptions') }}">
    <meta name="author" content="Velina Grebenska">
@endsection

@section('css')

<style>
    ul li{
        font-size:1.2rem;
        text-align: left;
    }
    p.font-weight-bold{
        font-size:1.6rem;
        font-weight:bold;
        color:#a81c51;
    }
    
    #main h5{
        font-size:1.6rem;
    }
</style>
@endsection

@section('content')
<!-- **Wrapper** -->
<div class="wrapper">
	<div class="inner-wrapper">
        <div id="main">
            <div class="container" style="margin-top:200px;">
                <div >
                     <div class="main-title"">
                        <h3>За мен</h3>
                    </div>
                    <img src="{{ asset('images/') }}" alt="">
                    <h5 style="text-align: center;">Творческа автобиография на Велина Гребенска</h5>
                    <hr>
                    <p class="font-weight-bold">Образование:</p>
                    <ul style="text-align-left">
                        <li>2002г - Факултет &quot;Изобразителни изкуства&quot; към ВТУ &quot;Св.св. Кирил и Методий&quot; ,Магистър “Педагогика на изобразителното изкуство”, специалност “Живопис”</li>
                        <li>1997г.- СОУ “Емилиян Станев”, паралелка със засилено изучаване на  изобразително изкуство, гр. Велико Търново,</li>
                        <li>От 2003г живее и работи във Варна.</li>
                    </ul>
                    <hr>
                    <p class="font-weight-bold">Самостоятелни изложби</p>
                    <ul>
                        <li>2008 г. – &quot;Като игра&quot; - съвместна изложба с Кремена Цанкова - ГХГ &quot;Б.Георгиев&quot; -
                        гр.Варна;</li>
                        <li>2011 г. – Изложба рисункая – молив и пастел, Отдел &quot;Изкуство&quot; при Регионална
                        библиотека &quot;П.Р.Славейков&quot; ,Варна;</li>
                        <li>2014 г. – Изложба живопис (маслени бои), гр. Екенес, Финландия.</li>
                        <li>2017 г. - Галерия &quot;Графит&quot;, изложба &quot;Акварел&quot;</li>
                        <li>2017 г. - &quot;Пластове&quot; съвместна изложба с Галина Станева - рисунка и пластика</li>
                        <li>2020г – “Мигновения” -самостоятелна изложба живопис (маслени бои),
                        Художествен музей “Георги Велчев”, гр.Варна;</li>
                        <li>2021г.- “Пулс”- самостоятелна изложба живопис (сух пастел), галерия “Резонанс”,
                        гр.Пловдив;</li>
                        <li>2021г. - Самостоятелна изложба живопис (сух пастел) , галерия “Юка”, гр.Варна;</li>
                        <li>2022г – „Уловени пространства“ – самостоятелна изложба (сух пастел),
                        Художествен музей „Георги Велчев“, гр. Варна. С финансовата подкрепа на
                        Национален фонд „Култура“.</li>
                    </ul>
                    <hr>    
                    <p class="font-weight-bold">Изложби:</p>
                    <ul>
                        <li>2006 г. – Участие в Национална изложба на художниците педагози в гр. Велико
                        Търново;</li>
                        <li>2009 ,10 г. – Участие в изложба &quot;Откритие&quot; за млади автори - галерия &quot;Актив арт&quot;
                        гр. Варна;</li>
                        <li>2011 г. – Участие в изложба на млади автори от Германия, Македония и България
                        &quot;BG 08 – DE 80&quot;, Народно събрание, София;</li>
                        <li>2011- Участие в международна изложба “Балканска рисунка”, Северна Македония</li>
                        <li>2012 г. – Участие в 6-то Международно биенале на пастела, Нови Саз, Полша;</li>
                        <li>2012 г. – Участие в изложба „Дами канят”, галерия „Юка”, Варна;</li>
                        <li>2013 г. – Участие в Национална изложба &quot;Лудогорие&quot;, Разград;</li>
                        <li>2013,15 г. – Участие в Национално биенале на рисунката гр. Велико Търново;</li>
                        <li>2015 г. – Участие в 18-то Международно биенале на графиката Варна.</li>
                        <li>2015 г. - Участие в изложба на варненските художници в Балчик, Градска галерия</li>
                        <li>2016 г. - Участие в изложба &quot;Малки форми&quot;, гр. Добрич</li>
                        <li>2016, 18, 20г.- Участие в Международно биенале на малките форми ,гр.Плевен</li>
                        <li>2016 г. - Участие с инсталация в изложба &quot;Извън комфорт&quot; к-кс &quot;Златни пясъци&quot;,
                        организирана от галерия &quot;Резонанс&quot;, Пловдив</li>
                        <li>2016 г. - Участие в изложба &quot;Пет елемента&quot; Монреал, Канада</li>
                        <li>2016 г. - Участие в изложба - Конкурс на &quot;Алианц България&quot; за живопис, скулптура
                        и графика</li>
                        <li>2016 г. - Участие в изложба &quot;Рисунка и скулптура&quot;, галерия &quot;Шипка 6&quot; София</li>
                        <li>2017 г. - Участие в 19-то Международно биенале на графиката, Варна</li>
                        <li>2017 г. - Участие в Национална изложба графика на името на Георги Герасимов,
                        гр. Пазарджик</li>
                        <li>2017 г. - Уастие в изложба &quot;Лирични послания&quot;, галерия Графит, Варна</li>
                        <li>2018г. Изложба на Арт Група Сряда 5</li>
                        <li>2018 г. - Участие с инсталация в изложба &quot;Извън комфорт&quot; к-кс &quot;Златни пясъци&quot;,
                        организирана от галерия &quot;Резонанс&quot;, Пловдив</li>
                        <li>2018 – „100 гледни точки към Пловдив“ - Изложба гр.Матера, Италия</li>

                        <li>2018г.- Изложба на български автори, Браселона, Испания</li>
                        <li>2018г.- „Капсула на Резонанса“ - Изложба 10 години галерия
                        “Резонанс”,гр.Пловдив</li>
                        <li>2019 - Участие в 20-то Международно биенале на графиката, Варна</li>
                        <li>2019г. – Изложба на Арт Група Сряда 5</li>
                        <li>2019 – „100 гледни точки към Пловдив“, галерия “Резонанс”,гр.Пловдив</li>
                        <li>2019г.- Национална изложба “Създаваме заедно”, галерия “Видима”, Севлиево</li>
                        <li>2020г. Участие в Национална изложба “Пролетен салон”, гр. Габрово;</li>
                        <li>2020г. Участие в българо-италианска графична изложба ”Mirror.Face to face” 
                        Флоренция, Бургас, Стара Загора.</li>
                        <li>2020г. -Участие в 10-то Международно биенале на малките форми, гр.Плевен;</li>
                        <li>2021г. -Участие в 21-во Международно биенале на графиката, Варна;</li>
                        <li>2021г- Участие в Национална изложба “Пролетен салон”, гр. Габрово;</li>
                        <li>2021г.- Участие в Международно биенале “Изкуство на миниатюрата”, гр.Русе;</li>
                        <li>2021г- Участие в изложба “Вино и любов”, гр. Горна Оряховица</li>
                        <li>2022 – Участие в Национална изложба “Пролетен салон”, гр. Габрово</li>
                        <li>2022 – Участие в национална изложба „Приятели на морето“, гр. Бургас</li>
                        <li>2022 - Участие в 11-то Международно биенале на малките форми, гр.Плевен;</li>
                        <li>2023 – Участие във Десети фестивал на визуалните изкуства „Август в изкуството“
                        – гр. Варна</li>
                        <li>2023 – Участие в Национална изложба „Лудогорие“, гр. Разград</li>
                        <li>2023 – Участие в Биенале на малките форми - Плевен</li>
                        <li>2023 – Участие в Национална изложба “Пролетен салон”, гр. Габрово</li>
                        <li>2023 – Участие в четвърти абстрактен арт конкурс, галерия „A – Cube”, гр. София</li>

                        <li>2023 - Участие в Национална изложба графика на името на Георги Герасимов, гр.
                        Пазарджик</li>

                        <li>2023 - Участие в IX Международно биенале “Изкуство на миниатюрата”, гр.Русе</li>
                        <li>2024 – Участие в Национална изложба „Земята на Ботев“, гр. Враца</li>
                        <li>2024 – Българско - нидерландска изложба „ Пасажери между две морета“, Градска
                        галерия, Варна</li>
                        <li>2024 – VI Балканско квадринале на живописта – Стара Загора</li>
                        <li>2025 – 23- то Международно биенале на графиката, Варна</li>
                        <li>2025 - Х – то Международно биенале “Изкуство на миниатюрата”, гр.Русе</li>
                        <li>2025 – „Фрагменти от картини“ – изложба на 6 автора в Галерия 65, гр. София</li>
                    </ul>
                    <hr>
                    <p class="font-weight-bold">Проекти:</p>
                    <ul>
                        <li>2022г – Спечелена творческа стипендия към Национален фонд „Култура“</li>

                        <li>2020г. – участие в проект зад маска съвместно с 24 варненски художника.
                        Проектът е по инициатива на Пламена Рачева, Димитър Трайчев и Нина
                        Локмаджиева.</li>
                        <li>2018 г. - „Оранжерия за мисли“ – арт инсталация по проект към Фонд „Култура“,
                        Община Варна с размери 2,80х2,30х6м</li>
                        <li>2015 г. – Направа на декор към спектакъла &quot;Бяла приказка&quot; по Валери Петров,
                        Театрална Формация &quot;Феникс&quot;.</li>
                        <li>2014 -15 г. – Изписване на стенопис с размери 2.40 х 4.80м;</li>
                        <li>2014 г. – Изработка на илюстрации към книгата &quot;Кучешко време над Черно море&quot;;
                        </li>
                        <li>2009 г. - Работа като преподавател по проект &quot;Изкуство за всички. Всички за
                        изкуството&quot; за младежи в неравностойно положение;</li>
                        <li>2008 г. – Работа като преподавател по проект &quot;Заедно творим красота&quot; за деца и
                        младежи в неравностойно положение;</li>
                        <li>2008 г. – Участие в проект &quot;Автопортети на варненските художници&quot; на галерия
                        &quot;Актив арт&quot; - гр. Варна;</li>
                        <li>2008 г. – Участие в проект &quot; Под чадъра на изкуството&quot;, организиран от
                        изкуствоведа Пламена Рачева;</li>
                        <li>2007 г. – Изписване на стенописи съвместно с ученици в Дом &quot;Другарче&quot; - гр.
                        Варна;</li>
                        <li>2005 г. – Изработка на сценография и костюми за спектакъла &quot;Ние врабчетата&quot; по
                        Йордан Радичков;</li>
                    </ul>
                    <hr>
                    <p class="font-weight-bold">Пленери:</p>
                    <ul>
                        <li>2023 – Пленер на варненски хуожници, местност „Фичоза“, гр. Варна</li>
                        <li>2022 – Национален пленер по живопис, гр. Оряхово</li>
                        <li>2021г. -Национален пленер по живопис, с.Ветрен</li>
                        <li>2021г. – Пленер по живопис, гр.Бяла</li>
                        <li>2016г.- Международен пленер за акварел &quot;Никола Маринов&quot;, гр. Търговище</li>
                        <li>2012 г. – Международен пленер в гр. Почители, Босна и Херцеговина.</li>
                        <li>2011 г. – Международен пленер по живопис – гр. Битоля, Северна Македония;</li>
                        <li>2010 г. – Пленер – кв. &quot;Аспарухово&quot;, Варна; 2010 г. – Участие в пленер – кв.
                        &quot;Аспарухово&quot;, Варна;</li>
                        <li>2009 - Национален пленер по живопис, с.Крапец</li>
                    </ul>

                    <hr>        
                    <p class="font-weight-bold">Награди:</p>
                    <ul>
                        <li>2024 – Награда от изложбата на Сдружението на варненските художници</li>
                    </ul>
         
        </div>
    </div>
</div>
    
@endsection


{{-- # About Me

## Artistic Biography of Velina Grebenska

### Education

* **2002** – Master's Degree in **Pedagogy of Fine Arts**, specializing in **Painting**, Faculty of Fine Arts, **St. Cyril and St. Methodius University of Veliko Tarnovo**, Bulgaria.
* **1997** – Graduated from **Emiliyan Stanev Secondary School**, specialized Fine Arts program, Veliko Tarnovo, Bulgaria.

Since **2003**, Velina Grebenska has lived and worked in **Varna, Bulgaria**.

## Solo Exhibitions

* **2008** – *Like a Game* – joint exhibition with Kremena Tsankova, Boris Georgiev City Art Gallery, Varna.
* **2011** – Drawing Exhibition (Pencil and Pastel), Art Department, P. R. Slaveykov Regional Library, Varna.
* **2014** – Oil Painting Exhibition, Ekenäs, Finland.
* **2017** – *Watercolor*, Graffit Gallery, Varna.
* **2017** – *Layers* – joint exhibition with Galina Staneva (Drawing and Sculpture).
* **2020** – *Moments* – Solo Oil Painting Exhibition, Georgi Velchev Art Museum, Varna.
* **2021** – *Pulse* – Solo Dry Pastel Exhibition, Resonance Gallery, Plovdiv.
* **2021** – Solo Dry Pastel Exhibition, Yuka Gallery, Varna.
* **2022** – *Captured Spaces* – Solo Dry Pastel Exhibition, Georgi Velchev Art Museum, Varna, supported by the National Culture Fund.

## Group Exhibitions

* **2006** – National Exhibition of Artist-Educators, Veliko Tarnovo.
* **2009–2010** – *Discovery* Exhibition for Young Artists, Active Art Gallery, Varna.
* **2011** – *BG 08 – DE 80* Exhibition of Young Artists from Germany, North Macedonia and Bulgaria, National Assembly, Sofia.
* **2011** – International Exhibition *Balkan Drawing*, North Macedonia.
* **2012** – 6th International Pastel Biennale, Nowy Sącz, Poland.
* **2012** – *Ladies Invite*, Yuka Gallery, Varna.
* **2013** – National Exhibition *Ludogorie*, Razgrad.
* **2013, 2015** – National Drawing Biennale, Veliko Tarnovo.
* **2015** – 18th International Print Biennale, Varna.
* **2015** – Exhibition of Varna Artists, City Gallery, Balchik.
* **2016** – *Small Forms* Exhibition, Dobrich.
* **2016, 2018, 2020** – International Biennale of Small Forms, Pleven.
* **2016** – Installation in *Beyond Comfort*, Golden Sands Resort, organized by Resonance Gallery, Plovdiv.
* **2016** – *Five Elements* Exhibition, Montreal, Canada.
* **2016** – Allianz Bulgaria Competition Exhibition for Painting, Sculpture and Printmaking.
* **2016** – *Drawing and Sculpture*, Shipka 6 Gallery, Sofia.
* **2017** – 19th International Print Biennale, Varna.
* **2017** – National Print Exhibition in memory of Georgi Gerasimov, Pazardzhik.
* **2017** – *Lyrical Messages*, Graffit Gallery, Varna.
* **2018** – Wednesday 5 Art Group Exhibition.
* **2018** – Installation in *Beyond Comfort*, Golden Sands Resort.
* **2018** – *100 Views of Plovdiv*, Matera, Italy.
* **2018** – Exhibition of Bulgarian Artists, Barcelona, Spain.
* **2018** – *Capsule of Resonance* – 10 Years of Resonance Gallery, Plovdiv.
* **2019** – 20th International Print Biennale, Varna.
* **2019** – Wednesday 5 Art Group Exhibition.
* **2019** – *100 Views of Plovdiv*, Resonance Gallery, Plovdiv.
* **2019** – National Exhibition *Creating Together*, Vidima Gallery, Sevlievo.
* **2020** – National Exhibition *Spring Salon*, Gabrovo.
* **2020** – Bulgarian–Italian Print Exhibition *Mirror. Face to Face*, Florence, Burgas and Stara Zagora.
* **2020** – 10th International Biennale of Small Forms, Pleven.
* **2021** – 21st International Print Biennale, Varna.
* **2021** – National Exhibition *Spring Salon*, Gabrovo.
* **2021** – International Biennale *The Art of Miniature*, Ruse.
* **2021** – *Wine and Love* Exhibition, Gorna Oryahovitsa.
* **2022** – National Exhibition *Spring Salon*, Gabrovo.
* **2022** – National Exhibition *Friends of the Sea*, Burgas.
* **2022** – 11th International Biennale of Small Forms, Pleven.
* **2023** – 10th Festival of Visual Arts *August in Art*, Varna.
* **2023** – National Exhibition *Ludogorie*, Razgrad.
* **2023** – Biennale of Small Forms, Pleven.
* **2023** – National Exhibition *Spring Salon*, Gabrovo.
* **2023** – Fourth Abstract Art Competition, A-Cube Gallery, Sofia.
* **2023** – National Print Exhibition in memory of Georgi Gerasimov, Pazardzhik.
* **2023** – 9th International Biennale *The Art of Miniature*, Ruse.
* **2024** – National Exhibition *The Land of Botev*, Vratsa.
* **2024** – Bulgarian–Dutch Exhibition *Passengers Between Two Seas*, City Gallery, Varna.
* **2024** – 6th Balkan Quadriennial of Painting, Stara Zagora.
* **2025** – 23rd International Print Biennale, Varna.
* **2025** – 10th International Biennale *The Art of Miniature*, Ruse.
* **2025** – *Fragments of Paintings* – Exhibition of Six Artists, Gallery 65, Sofia.

## Projects

* **2022** – Recipient of a Creative Scholarship from the National Culture Fund.
* **2020** – Participant in the *Behind the Mask* project with 24 artists from Varna, initiated by Plamena Racheva, Dimitar Traychev and Nina Lokmadzhieva.
* **2018** – *Greenhouse for Thoughts* – Public art installation (2.80 × 2.30 × 6 m), funded by the Culture Fund of the Municipality of Varna.
* **2015** – Stage design for *A White Fairy Tale* by Valeri Petrov, Phoenix Theatre Company.
* **2014–2015** – Mural painting (2.40 × 4.80 m).
* **2014** – Illustrations for the book *Dog Days over the Black Sea*.
* **2009** – Art instructor for the project *Art for Everyone. Everyone for Art* for disadvantaged youth.
* **2008** – Art instructor for the project *Creating Beauty Together* for disadvantaged children and youth.
* **2008** – Participant in the *Self-Portraits of Varna Artists* project, Active Art Gallery.
* **2008** – Participant in the *Under the Umbrella of Art* project, organized by art historian Plamena Racheva.
* **2007** – Collaborative mural project with students at Drugarche Children's Home, Varna.
* **2005** – Set and costume design for *We, the Sparrows* by Yordan Radichkov.

## Artist Residencies and Plein Air Events

* **2023** – Varna Artists' Plein Air, Fichoza, Varna.
* **2022** – National Painting Plein Air, Oryahovo.
* **2021** – National Painting Plein Air, Vetren.
* **2021** – Painting Plein Air, Byala.
* **2016** – Nikola Marinov International Watercolor Plein Air, Targovishte.
* **2012** – International Plein Air, Počitelj, Bosnia and Herzegovina.
* **2011** – International Painting Plein Air, Bitola, North Macedonia.
* **2010** – Plein Air, Asparuhovo District, Varna.
* **2009** – National Painting Plein Air, Krapets.

## Awards

* **2024** – Award from the Exhibition of the Association of Varna Artists. --}}

