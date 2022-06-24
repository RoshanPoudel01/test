<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Digital Health Nepal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

<link rel="stylesheet" type="text/css" href="{{asset('assets/library/bxslider/jquery.bxslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/library/fontAwesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/library/bootstrap/css/bootstrap.css')}}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                </div> --}}
                <section class="introduction">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img width="40%" height="40%" src="assets/image/logo.png" class="img-responsive" alt="logo">
                            </div>
                            <div class="col-md-8 intro">
                                <p class="government">Government of Nepal</p>
                                <p class="name">Ministry of Health and Population </p>

                            </div>
                            <div class="col-md-1">
                                <img src="assets/image/nepal_flag.gif" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- <section class="top-bar"> -->
                    <!-- <div class="top-content"> -->
                        <div class="navigationmain">
                            <div class="navsection">
                                <div class="navstarts">
                                    <div id="header-area" class="header_area">
                        <div class="header_bottom">
                            <div class="">
                                <div class="">
                                    <nav role="navigation" class="navbar navbar-default mainmenu">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <!-- Collection of nav links and other content for toggling -->
                                        <div id="navbarCollapse" class="collapse navbar-collapse">
                                            <ul id="fresponsive" class="nav navbar-nav dropdown">
                                                <li><a href="#">Home</a></li>
                                                <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle">About Us<span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="singlepage.html">About MOHP</a></li>
                                                        <!-- <li>
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Submenu 2<span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="singlepage.html">Lorem ipsum</a></li>
                                                                <li><a href="singlepage.html">Lorem ipsum</a></li>

                                                            </ul>
                                                        </li> -->
                                                    </ul>
                                                </li>
                                                <!-- <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle">About Us<span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">About MOHP</a></li>
                                                        <li>
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Submenu 2<span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Lorem ipsum</a></li>
                                                                <li><a href="#">Lorem ipsum</a></li>

                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li> -->
                                                <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle">News Notices<span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">News/Notices</a></li>
                                                        <!-- <li>
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Submenu 2<span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Lorem ipsum</a></li>
                                                                <li><a href="#">Lorem ipsum</a></li>

                                                            </ul>
                                                        </li> -->
                                                    </ul>
                                                </li>
                                                <li>
                                                    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div><!-- /.header_bottom -->

                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                <!-- </section> -->
                <section class="sliderinfo">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="col-md-8">
                                    <section class="slider mainslider">
                                        <ul class="bxslider">
                                                <li>
                                                    <img src="assets/image/72344527916-days-activism_mowcsc_nepal.jpg" alt="" class="img-responsive imgback1">
                                                </li>
                                            <li>
                                            <img src="assets/image/72344527916-days-activism_mowcsc_nepal.jpg" alt="" class="img-responsive imgback1">
                                            </li>
                                        </ul>
                                    </section>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="title">
                                        <p><strong>लैंगिक हिंसा विरुद्धको १६ दिने अभियान</strong></p>
                                    </div>
                                    <div class="news">
                                        <small>2075/08/01</small>
                                        <p>लैङ्गिक हिंसा विरुद्धको १६ दिने अन्तर्राष्ट्रिय अभियान २०१८ को नारा नेपाली नाराः– "लैङ्गिक हिंसा र दुव्र्यवहार : छैन हामीलाई स्वीकार” English Slogan:- "Orange the World : #HearMeToo" नेपाल सरकार मन्त्रिपरिषदको मिति २०७५/८ /२ गतेको बैठकले "सम्वत २०७५ साल मंसीर ९ गते देखि मंसीर २४ गतेसम्म (२५ नोभेम्बरदेखि १० डिसेम्बर २०१८ सम्म) सामाजिक सचेतना सहित लैगिक हिंसा विरुद्धको अभियान संचालन गर्न संघीय </p>
                                    </div>
                                </div> -->
                                <div class="col-md-12 newsportion">
                                    <p class="update">Recent Update</p>
                                    <p class="maininfo">अपाङ्गता भएका व्यक्तिहरुको लागि सहायक सामग्री उत्पादन र वितरणको प्रभावकारिता अध्ययन</p>
                                </div>

                                    <div class="col-md-5 brief">
                                        <strong><p>Ministry of Women, Children and Social Welfare</p></strong>
                                        <hr style="border:solid thin; border-color:#ccc; margin:0; padding:0; margin-bottom:10px; width:80px;">
                                        <p>"ग्रामीण महिलाका लागि उत्पादन ऋण व्यवस्था कार्यक्रम" को रुपमा आ.व. २०३९।०४० मा शुरु भएको महिला विकास अभियान कार्यक्रमहरुबाट प्राप्त उपलव्धी, अनुभव र समसामयिक आवश्यकताका आधारमा २०५२ असोज ६ गते " महिला तथा समाज कल्याण मन्त्रालय" को स्थापना भयो । महिला तथा समाजका विभिन्न वर्गको सामाजिक, आर्थिक तथा राजनीतिक सशक्तिकरण गर्दै दिगो शान्ति एवं विकासमा उनीहरुको भूमिकालाई सशक्त बनाउने कार्यमा संलग्न महिला तथा समाज कल्याण मन्त्रालयको नाम बालबालिकालाई अझ उच्च प्राथमिकता दिने हेतुले २०५७ मा मन्त्रालयको नाम परिवर्तन गरी "महिला, बालबालिका तथा समाज कल्याण मन्त्रालय" नामाकरण गरियो । २०७५ सालबाट  यस मन्त्रालयको नाम  महिला, बालबालिका तथा जेष्ठ नागरिक मन्त्रालय रहेको छ ।</p>
                                        <p>नेपाल सरकार (कार्य विभाजन) नियमावली, २०६९ आनुसार महिला, बालबालिका तथा जेष्ठ नागरिक मन्त्रालयको कार्यक्षेत्र भित्र महिला, बालबालिका तथा समाज कल्याण सम्बन्धी नीति, योजना तथा कार्यक्रमको तर्जुमा, कार्यान्वयन, अनुगमन र मूल्यांकनको साथै अध्ययन, अनुसन्धान तथा सर्वेक्षणका विषयहरु तोकिएका छन् । यसैगरी अनाथ बालबालिका, असहाय महिला, बृद्धरबृद्धा, अपाङ्गरअशक्तको संरक्षण, बालबालिकाको कल्याण, ज्येष्ठ नागरिकको सुरक्षा र कल्याण, महिला कल्याण तथा सीप विकास पनि यस मन्त्रालयक� </p>
                                        <a class="pull-right" href="#">View More</a>
                                        <hr style="border:solid thin; border-color:#ccc;">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="tabpart">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#recentupdate">Recent Update</a></li>
                                            <li><a data-toggle="tab" href="#notice">Notice</a></li>
                                            <li><a data-toggle="tab" href="#pressrelease">Press Release</a></li>
                                         </ul>
                                         <div class="tab-content">
                                            <div id="recentupdate" class="tab-pane fade in active">
                                                <div class="breifing">
                                                    <i class="fa fa-calendar"></i>
                                                    <p>दुर्गम क्षेत्रका ज्यान जोखिममा परेका गर्भवती तथा सुत्केरी महिलाहरुकालागि हवाई उद्धारसम्बन्धी कार्यवि </p>
                                                    <small>2018/12/18</small>
                                                    <hr>
                                                </div>
                                                 <div class="breifing">
                                                    <i class="fa fa-calendar"></i>
                                                    <p>दुर्गम क्षेत्रका ज्यान जोखिममा परेका गर्भवती तथा सुत्केरी महिलाहरुकालागि हवाई उद्धारसम्बन्धी कार्यवि </p>
                                                    <small>2018/12/18</small>
                                                    <hr>
                                                </div>
                                                 <div class="breifing">
                                                    <i class="fa fa-calendar"></i>
                                                    <p>दुर्गम क्षेत्रका ज्यान जोखिममा परेका गर्भवती तथा सुत्केरी महिलाहरुकालागि हवाई उद्धारसम्बन्धी कार्यवि </p>
                                                    <small>2018/12/18</small>
                                                    <hr>
                                                </div>
                                                 <div class="breifing">
                                                    <i class="fa fa-calendar"></i>
                                                    <p>दुर्गम क्षेत्रका ज्यान जोखिममा परेका गर्भवती तथा सुत्केरी महिलाहरुकालागि हवाई उद्धारसम्बन्धी कार्यवि </p>
                                                    <small>2018/12/18</small>
                                                    <hr>
                                                </div>
                                                 <div class="breifing">
                                                    <i class="fa fa-calendar"></i>
                                                    <p>दुर्गम क्षेत्रका ज्यान जोखिममा परेका गर्भवती तथा सुत्केरी महिलाहरुकालागि हवाई उद्धारसम्बन्धी कार्यवि </p>
                                                    <small>2018/12/18</small>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div id="notice" class="tab-pane fade">
                                               <div class="breifing">
                                                    <i class="fa fa-calendar"></i>
                                                    <p>मंगला सहाना दीर्घकालीन पुनर्स्थापना केन्द्र सन्चालन गर्न (परामर्श ) सेवा खरिदका लागि आशय पत्र आव्हान  </p>
                                                    <small>2018/12/18</small>
                                                    <hr>
                                                </div>
                                                <div class="breifing">
                                                    <i class="fa fa-calendar"></i>
                                                    <p>मंगला सहाना दीर्घकालीन पुनर्स्थापना केन्द्र सन्चालन गर्न (परामर्श ) सेवा खरिदका लागि आशय पत्र आव्हान  </p>
                                                    <small>2018/12/18</small>
                                                    <hr>
                                                </div>
                                                <div class="breifing">
                                                    <i class="fa fa-calendar"></i>
                                                    <p>मंगला सहाना दीर्घकालीन पुनर्स्थापना केन्द्र सन्चालन गर्न (परामर्श ) सेवा खरिदका लागि आशय पत्र आव्हान  </p>
                                                    <small>2018/12/18</small>
                                                    <hr>
                                                </div>
                                                <div class="breifing">
                                                    <i class="fa fa-calendar"></i>
                                                    <p>मंगला सहाना दीर्घकालीन पुनर्स्थापना केन्द्र सन्चालन गर्न (परामर्श ) सेवा खरिदका लागि आशय पत्र आव्हान  </p>
                                                    <small>2018/12/18</small>
                                                    <hr>
                                                </div>
                                                <div class="breifing">
                                                    <i class="fa fa-calendar"></i>
                                                    <p>मंगला सहाना दीर्घकालीन पुनर्स्थापना केन्द्र सन्चालन गर्न (परामर्श ) सेवा खरिदका लागि आशय पत्र आव्हान  </p>
                                                    <small>2018/12/18</small>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div id="pressrelease" class="tab-pane fade">
                                                 <div class="breifing">
                                                    <i class="fa fa-calendar"></i>
                                                    <p>लैंगिक हिंसा बिरुद्धको १६ दिने अभियान कार्यक्रम -  कर्णाली प्रदेश  -  दिन १ </p>
                                                    <small>2018/12/18</small>
                                                    <hr>
                                                </div>
                                                <div class="breifing">
                                                    <i class="fa fa-calendar"></i>
                                                    <p>लैंगिक हिंसा बिरुद्धको १६ दिने अभियान कार्यक्रम -  कर्णाली प्रदेश  -  दिन १ </p>
                                                    <small>2018/12/18</small>
                                                    <hr>
                                                </div>
                                                <div class="breifing">
                                                    <i class="fa fa-calendar"></i>
                                                    <p>लैंगिक हिंसा बिरुद्धको १६ दिने अभियान कार्यक्रम -  कर्णाली प्रदेश  -  दिन १ </p>
                                                    <small>2018/12/18</small>
                                                    <hr>
                                                </div>
                                                <div class="breifing">
                                                    <i class="fa fa-calendar"></i>
                                                    <p>लैंगिक हिंसा बिरुद्धको १६ दिने अभियान कार्यक्रम -  कर्णाली प्रदेश  -  दिन १ </p>
                                                    <small>2018/12/18</small>
                                                    <hr>
                                                </div>
                                                <div class="breifing">
                                                    <i class="fa fa-calendar"></i>
                                                    <p>लैंगिक हिंसा बिरुद्धको १६ दिने अभियान कार्यक्रम -  कर्णाली प्रदेश  -  दिन १ </p>
                                                    <small>2018/12/18</small>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                            <div class="col-md-2">
                                <aside>
                                    <div class="minister">
                                        <img src="assets/image/birodh.jpg" class="img-responsive text-center" alt="">
                                        <strong>Mr Binod Khatiwada</strong>
                                        <p>Hon'ble Minister</p>
                                    </div>
                                    <div class="minister">
                                        <img src="assets/image/bhawani.png" class="img-responsive" alt="">
                                        <strong>Mr. Bhawani Prasad Khapung</strong>
                                        <p>Hon'ble State Minister</p>
                                    </div>
                                    <div class="minister">
                                        <img src="assets/image/dev-kumari.jpg" class="img-responsive" alt="">
                                        <strong>Dev Kumari Guragain</strong>
                                        <p>Secretary</p>
                                    </div>
                                    <div class="minister">
                                        <img src="assets/image/DRROSHAN.jpg" class="img-responsive" alt="">
                                        <strong>Dr.Roshan Pokhrel</strong>
                                        <p>Secretary</p>

                                    </div>
                                    <div class="minister">
                                        <img src="assets/image/Ganesh-Shrivastav.jpg" class="img-responsive" alt="">
                                        <strong>Sunita Nepal</strong>
                                        <p>Sr. Health Education Officer</p>
                                        <p>Phone: 9848438654</p>

                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="gallery">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <h4><strong>Our Publications</strong></h4>
                                <a href="#" class="thumbnail">
                                    <img src="assets/image/logo.png" class="img-responsive">
                                    <h4>Development of Costing Framework and Costing of Gender Equality Instruments in Nepal - 2016</h4>
                                    <p>View More</p>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <h4><strong>Photo Gallery</strong></h4>
                                <a href="#" class="thumbnail">
                                    <img src="assets/image/gallery2.jpg" class="img-responsive">
                                    <h4>Ministry of Women, Children and Senior Citizen</h4>
                                    <p>View More</p>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <h4><strong>Audio Gallery</strong></h4>
                                <a href="#" class="thumbnail">
                                    <div class="audio">
                                        <i class="fa fa-volume-up"></i>
                                    </div>
                                    <h4>महिला बालबालिका तथा जेष्ठ नागरिक  मन्त्रालय</h4>
                                    <p>View More</p>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <h4><strong>Video Gallery</strong></h4>
                                <a href="#" class="thumbnail">
                                    <iframe title="YouTube video player" class="youtube-player" type="text/html" src="https://www.youtube.com/embed/vCaLTj_CQMk" allowfullscreen="" width="100%" height="170" frameborder="0"></iframe>
                                    <h4>Girls are the future of Nepal: Nepal Girl Summit </h4>
                                    <p>View More</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="footer">
                    <div class="container">
                        <div class="col-md-4">
                            <h5><strong>Contact Details</strong></h5>
                            <ul>
                                <li>Government of Nepal</li>
                                <li>Ministry of Health and Population</li>
                                <li>Phone:+977- 014262543, 4262802</li>
                                <li>Fax:+977-01-4262696</li>
                                <li>Email:info (@) mohp.gov.np</li>

                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="pagedetails">
                                <ul>
                                    <li>Page Last Updated On : 2018-12-05 10:51:31</li>
                                    <li>Current Time : 09:21:41 AM</li>
                                    <li>Visitor Counter : 1997</li>
                                </ul>
                                <h5><strong>Stay Connected</strong></h5>
                                <div class="icons">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </div>
                                <div class="icons">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="icons">
                                <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 twittes">
                            <a href="#">Tweets by mohp</a>
                        </div>
                    </div>
                </section>
                <section class="copyright">
                    <div class="container">
                        <div class="col-md-12">
                            <p>
                            Copyright © 2018. All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </section>
                <script src="assets/js/jquery-2.2.2.min.js"></script>
                <script src="assets/library/bootstrap/js/bootstrap.min.js"></script>
                <script src="assets/library/bxslider/jquery.bxslider.min.js"></script>
                            <script>
                                $(document).ready(function(){
                                  $('.bxslider').bxSlider({
                                      auto:true
                                  });
                                });
                            </script>
                            <script type="text/javascript">
                                (function($){
                    $(document).ready(function(){
                        $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                            event.preventDefault();
                            event.stopPropagation();
                            $(this).parent().siblings().removeClass('open');
                            $(this).parent().toggleClass('open');
                        });
                    });
                })(jQuery);
                            </script>
    </body>
</html>
