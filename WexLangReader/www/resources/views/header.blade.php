<nav class="navbar navbar-dark bg-dark fixed-top" style="padding-top: 0; padding-bottom: 0; height: 60px;">

    <a class="navbar-brand" href="{{route('texts')}}">

        <img src="{{asset("img/logo.svg")}}" width="30" height="30" class="d-inline-block align-top" alt="">
        <span class="mr-3">WexLang Reader</span>


        <img src="{{asset('img/flags/'. \App\Config\Config::getLearnedLangData()['code'] . '.svg')}}" class="text_flag" alt=""> <i class="text-small">({{\App\Config\Config::getLearnedLangData()['title']}})</i>
        <span class="q_lang_arrow">⟶</span>
        <img src="{{asset('img/flags/'. \App\Config\Config::getKnownLangData()['code'] . '.svg')}}" class="text_flag" alt=""> <i class="text-small">({{\App\Config\Config::getKnownLangData()['title']}})</i>

    </a>


    <div style="">

    </div>




    <script>
        learned_lang_code = "{{\App\Config\Config::getLearnedLangData()['code']}}";
        known_lang_code = "{{\App\Config\Config::getKnownLangData()['code']}}";
    </script>

</nav>
