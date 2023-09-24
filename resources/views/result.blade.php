@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                            @foreach ($results as $result)
                                <h3>Computer/Self-Efficacy</h3>
                                <h5>SCORE : {{ $result-> avgCSE }}</h5>
                                <p id="descAvgCSE"></p>
                                <script>
                                    $resultAvgSCE = {{ $result-> avgCSE }};
                                    if (($resultAvgSCE >= 1) && ($resultAvgSCE <= 2.59)) {
                                        let text = "Anda belum siap pada kemampuan Computer/Self-Efficacy, perlu persiapan banyak untuk mengimplementasikan e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgCSE").innerHTML = text;
                                    } else if (($resultAvgSCE >= 2.6) && ($resultAvgSCE <= 3.39)) {
                                        let text = "Anda belum siap pada kemampuan Computer/Self-Efficacy, tetapi hanya perlu beberapa persiapan saja untuk mengimplementasikan e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgCSE").innerHTML = text;
                                    } else if (($resultAvgSCE >= 3.4) && ($resultAvgSCE <= 4.19)) {
                                        let text = "Anda sudah siap pada kemampuan Computer/Self-Efficacy, tetapi masih membutuhkan improvement dalam mengimplementasikan e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgCSE").innerHTML = text;
                                    } else if (($resultAvgSCE >= 4.2) && ($resultAvgSCE <= 5)) {
                                        let text = "Anda sudah siap pada kemampuan Computer/Self-Efficacy untuk implementasi e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgCSE").innerHTML = text;
                                    }
                                </script>
                                
                                <h3>Self-Directed Learning</h3>
                                <h5>SCORE : {{ $result-> avgSDL }}</h5>
                                <p id="descAvgSDL"></p>
                                <script>
                                    $resultAvgSDL = {{ $result-> avgSDL }};
                                    if (($resultAvgSDL >= 1) && ($resultAvgSDL <= 2.59)) {
                                        let text = "Anda belum siap pada kemampuan Self-Directed Learning, perlu persiapan banyak untuk mengimplementasikan e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgSDL").innerHTML = text;
                                    } else if (($resultAvgSDL >= 2.6) && ($resultAvgSDL <= 3.39)) {
                                        let text = "Anda belum siap pada kemampuan Self-Directed Learning, tetapi hanya perlu beberapa persiapan saja untuk mengimplementasikan e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgSDL").innerHTML = text;
                                    } else if (($resultAvgSDL >= 3.4) && ($resultAvgSDL <= 4.19)) {
                                        let text = "Anda sudah siap pada kemampuan Self-Directed Learning, tetapi masih membutuhkan improvement dalam mengimplementasikan e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgSDL").innerHTML = text;
                                    } else if (($resultAvgSDL >= 4.2) && ($resultAvgSDL <= 5)) {
                                        let text = "Anda sudah siap pada kemampuan Self-Directed Learning untuk implementasi e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgSDL").innerHTML = text;
                                    }
                                </script>

                                <h3>Motivation for Learning</h3>
                                <h5>SCORE : {{ $result-> avgMFL }}</h5>
                                <p id="descAvgMFL"></p>
                                <script>
                                    $resultAvgMFL = {{ $result-> avgMFL }};
                                    if (($resultAvgMFL >= 1) && ($resultAvgMFL <= 2.59)) {
                                        let text = "Anda belum siap pada kemampuan Motivation for Learning, perlu persiapan banyak untuk mengimplementasikan e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgMFL").innerHTML = text;
                                    } else if (($resultAvgMFL >= 2.6) && ($resultAvgMFL <= 3.39)) {
                                        let text = "Anda belum siap pada kemampuan Motivation for Learning, tetapi hanya perlu beberapa persiapan saja untuk mengimplementasikan e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgMFL").innerHTML = text;
                                    } else if (($resultAvgMFL >= 3.4) && ($resultAvgMFL <= 4.19)) {
                                        let text = "Anda sudah siap pada kemampuan Motivation for Learning, tetapi masih membutuhkan improvement dalam mengimplementasikan e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgMFL").innerHTML = text;
                                    } else if (($resultAvgMFL >= 4.2) && ($resultAvgMFL <= 5)) {
                                        let text = "Anda sudah siap pada kemampuan Motivation for Learning untuk implementasi e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgMFL").innerHTML = text;
                                    }
                                </script>

                                <h3>Online Self-Efficacy</h3>
                                <h5>SCORE : {{ $result-> avgOCSE }}</h5>
                                <p id="descAvgOCSE"></p>
                                <script>
                                    $resultAvgOCSE = {{ $result-> avgOCSE }};
                                    if (($resultAvgOCSE >= 1) && ($resultAvgOCSE <= 2.59)) {
                                        let text = "Anda belum siap pada kemampuan Online Self-Efficacy, perlu persiapan banyak untuk mengimplementasikan e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgOCSE").innerHTML = text;
                                    } else if (($resultAvgOCSE >= 2.6) && ($resultAvgOCSE <= 3.39)) {
                                        let text = "Anda belum siap pada kemampuan Online Self-Efficacy, tetapi hanya perlu beberapa persiapan saja untuk mengimplementasikan e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgOCSE").innerHTML = text;
                                    } else if (($resultAvgOCSE >= 3.4) && ($resultAvgOCSE <= 4.19)) {
                                        let text = "Anda sudah siap pada kemampuan Online Self-Efficacy, tetapi masih membutuhkan improvement dalam mengimplementasikan e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgOCSE").innerHTML = text;
                                    } else if (($resultAvgOCSE >= 4.2) && ($resultAvgOCSE <= 5)) {
                                        let text = "Anda sudah siap pada kemampuan Online Self-Efficacy untuk implementasi e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgOCSE").innerHTML = text;
                                    }
                                </script>
                                <h3>Learner Control</h3>
                                <h5>SCORE : {{ $result-> avgLC }}</h5>
                                <p id="descAvgLC"></p>
                                <script>
                                    $resultAvgLC = {{ $result-> avgLC }};
                                    if (($resultAvgLC >= 1) && ($resultAvgLC <= 2.59)) {
                                        let text = "Anda belum siap pada kemampuan Learner Control, perlu persiapan banyak untuk mengimplementasikan e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgLC").innerHTML = text;
                                    } else if (($resultAvgLC >= 2.6) && ($resultAvgLC <= 3.39)) {
                                        let text = "Anda belum siap pada kemampuan Learner Control, tetapi hanya perlu beberapa persiapan saja untuk mengimplementasikan e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgLC").innerHTML = text;
                                    } else if (($resultAvgLC >= 3.4) && ($resultAvgLC <= 4.19)) {
                                        let text = "Anda sudah siap pada kemampuan Learner Control, tetapi masih membutuhkan improvement dalam mengimplementasikan e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgLC").innerHTML = text;
                                    } else if (($resultAvgLC >= 4.2) && ($resultAvgLC <= 5)) {
                                        let text = "Anda sudah siap pada kemampuan Learner Control untuk implementasi e-Learning. Anda dapat mengakses [Guidance Page] untuk meningkatkan kesiapan anda";
                                        document.getElementById("descAvgLC").innerHTML = text;
                                    }
                                </script>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection