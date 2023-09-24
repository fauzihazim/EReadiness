@extends('layouts.app')

@section('content')
    @if (DB::table('answers')->select('nim')->where('nim', auth()->user()->nim)->first() != null)
        <script>window.location.replace("/showResultRoute/{{ Auth::user()->nim }}");
        </script>
    @endif
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
                            <h1>Kuisioner E-learning Readiness</h1>
                            <h4>Berikut merupakan Kuisioner yang mengukur kesiapan anda terhadap E-learning. Jawaban Anda
                                atas pertanyaan berikut akan membantu Anda menentukan apa yang perlu Anda lakukan untuk
                                meningkatkan kesiapan E-learning</h4>
                            <p><strong>Petunjuk: </strong>Pilih jawaban yang paling akurat untuk setiap jawaban. Kemudian
                                klik tombol <strong>Apakah Saya Siap?</strong>
                                <br>STS = Sangat Tidak Setuju
                                <br>TS = Tidak Setuju
                                <br>R = Ragu-ragu
                                <br>S = Setuju
                                <br>SS = Sangat Setuju
                            </p>
                            <form method="post" action="{{ route('saveAnswerRoute') }}">
                                @csrf
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="background-color: rgb(241, 94, 94)">No</th>
                                            <th scope="col"
                                                style="text-align: center; background-color: rgb(241, 94, 94);">Pertanyaan
                                            </th>
                                            <th scope="col" style="background-color: rgb(241, 94, 94)">STS</th>
                                            <th scope="col" style="background-color: rgb(241, 94, 94)">TS</th>
                                            <th scope="col" style="background-color: rgb(241, 94, 94)">R</th>
                                            <th scope="col" style="background-color: rgb(241, 94, 94)">S</th>
                                            <th scope="col" style="background-color: rgb(241, 94, 94)">SS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- (Computer/Internet Self-Efficacy) CSE --}}
                                        <tr>
                                            <th scope="row" colspan="7" style="text-align: center;"
                                                class="table-danger">Computer/Internet Self-Efficacy</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Saya merasa percaya diri dalam menjalankan fungsi dasar program Microsoft
                                                Office (MS Word, MS Excel, MS PowerPoint)</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE1"
                                                        id="qa1CSE1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE1"
                                                        id="qa1CSE2" value="2" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE1"
                                                        id="qa1CSE3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE1"
                                                        id="qa1CSE4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE1"
                                                        id="qaCSE5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Saya merasa yakin dengan pengetahuan dan keterampilan saya tentang cara
                                                mengelola software (LMS, Google Workspace) untuk pembelajaran online.</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE2"
                                                        id="qa2CSE1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE2"
                                                        id="qa2CSE2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE2"
                                                        id="qa2CSE3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE2"
                                                        id="qa2CSE4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE2"
                                                        id="qa2CSE5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Saya merasa percaya diri dalam menggunakan internet (Google, Microsoft Edge)
                                                untuk mencari atau mengumpulkan informasi untuk pembelajaran online</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE3"
                                                        id="qa3CSE1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE3"
                                                        id="qa3CSE2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE3"
                                                        id="qa3CSE3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE3"
                                                        id="qa3CSE4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE3"
                                                        id="qa3CSE5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Saya menggunakan komputer yang dapat berjalan dengan baik saat pembelajaran
                                                online</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE4"
                                                        id="qa4CSE1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE4"
                                                        id="qa4CSE2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE4"
                                                        id="qa4CSE3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE4"
                                                        id="qa4CSE4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE4"
                                                        id="qa4CSE5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Saya terhubung pada koneksi internet yang cepat dan stabil saat pembelajaran
                                                online</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE5"
                                                        id="qa5CSE1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE5"
                                                        id="qa5CSE2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE5"
                                                        id="qa5CSE3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE5"
                                                        id="qa5CSE4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="CSE5"
                                                        id="qa5CSE5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- Self-Directed Learning --}}
                                        <tr>
                                            <th scope="row" colspan="7" style="text-align: center;"
                                                class="table-danger">Self-Directed Learning</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Saya merencanakan rencana studi saya sendiri</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL1"
                                                        id="qa1SDL1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL1"
                                                        id="qa1SDL2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL1"
                                                        id="qa1SDL3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL1"
                                                        id="qa1SDL4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL1"
                                                        id="qa1SDL5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Saya mencari bantuan ketika menghadapi masalah belajar</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL2"
                                                        id="qa2SDL1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL2"
                                                        id="qa2SDL2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL2"
                                                        id="qa2SDL3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL2"
                                                        id="qa2SDL4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL2"
                                                        id="qa2SDL5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Saya mengatur waktu dengan baik</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL3"
                                                        id="qa3SDL1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL3"
                                                        id="qa3SDL2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL3"
                                                        id="qa3SDL3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL3"
                                                        id="qa3SDL4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL3"
                                                        id="qa3SDL5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Saya menetapkan tujuan pembelajaran saya</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL4"
                                                        id="qa4SDL1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL4"
                                                        id="qa4SDL2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL4"
                                                        id="qa4SDL3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL4"
                                                        id="qa4SDL4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL4"
                                                        id="qa4SDL5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Saya memiliki ekspektasi yang tinggi pada performa belajar saya</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL5"
                                                        id="qa5SDL1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL5"
                                                        id="qa5SDL2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL5"
                                                        id="qa5SDL3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL5"
                                                        id="qa5SDL4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SDL5"
                                                        id="qa5SDL5" value="5">
                                                </div>
                                            </td>
                                        </tr>

                                        {{-- Motivation for learning --}}
                                        <tr>
                                            <th scope="row" colspan="7" style="text-align: center;"
                                                class="table-danger">Motivation for Learning</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Saya terbuka terhadap ide-ide baru</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL1"
                                                        id="qa1MFL1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL1"
                                                        id="qa1MFL2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL1"
                                                        id="qa1MFL3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL1"
                                                        id="qa1MFL4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL1"
                                                        id="qa1MFL5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Saya memiliki motivasi untuk belajar</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL2"
                                                        id="qa2MFL1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL2"
                                                        id="qa2MFL2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL2"
                                                        id="qa2MFL3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL2"
                                                        id="qa2MFL4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL2"
                                                        id="qa2MFL5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Saya belajar dari kesalahan</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL3"
                                                        id="qa3MFL1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL3"
                                                        id="qa3MFL2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL3"
                                                        id="qa3MFL3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL3"
                                                        id="qa3MFL4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL3"
                                                        id="qa3MFL5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Saya suka berbagi ide dengan orang lain</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL4"
                                                        id="qa4MFL1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL4"
                                                        id="qa4MFL2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL4"
                                                        id="qa4MFL3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL4"
                                                        id="qa4MFL4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="MFL4"
                                                        id="qa4MFL5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        

                                        {{-- Online Communication for Self-Efficacy --}}
                                        <tr>
                                            <th scope="row" colspan="7" style="text-align: center;"
                                                class="table-danger">Online Communication for Self-Efficacy</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Saya merasa percaya diri dalam menggunakan aplikasi online (Email, Zoom, Google Meet, WhatsApp, Telegram) untuk berkomunikasi secara efektif dengan orang lain</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="OCSE1"
                                                        id="qa1OCSE1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="OCSE1"
                                                        id="qa1OCSE2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="OCSE1"
                                                        id="qa1OCSE3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="OCSE1"
                                                        id="qa1OCSE4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="OCSE1"
                                                        id="qa1OCSE5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Saya merasa percaya diri dalam mengekspresikan diri (emosi dan humor) melalui teks</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="OCSE2"
                                                        id="qa2OCSE1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="OCSE2"
                                                        id="qa2OCSE2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="OCSE2"
                                                        id="qa2OCSE3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="OCSE2"
                                                        id="qa2OCSE4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="OCSE2"
                                                        id="qa2OCSE5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Saya merasa percaya diri dalam memposting pertanyaan saat diskusi online (Forum LMS)</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="OCSE3"
                                                        id="qa3OCSE1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="OCSE3"
                                                        id="qa3OCSE2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="OCSE3"
                                                        id="qa3OCSE3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="OCSE3"
                                                        id="qa3OCSE4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="OCSE3"
                                                        id="qa3OCSE5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        {{-- Learner Control --}}
                                        <tr>
                                            <th scope="row" colspan="7" style="text-align: center;"
                                                class="table-danger">Learner Control</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Saya dapat mengarahkan proses pembelajaran saya sendiri</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC1"
                                                        id="qa1LC1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC1"
                                                        id="qa1LC2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC1"
                                                        id="qa1LC3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC1"
                                                        id="qa1LC4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC1"
                                                        id="qa1LC5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Saya tidak terganggu oleh aktivitas online saat pembelajaran online (media sosial, browsing, gaming)</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC2"
                                                        id="qa2LC1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC2"
                                                        id="qa2LC2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC2"
                                                        id="qa2LC3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC2"
                                                        id="qa2LC2" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC2"
                                                        id="qa2LC2" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Saya tidak terganggu oleh aktivitas lainnya saat pembelajaran online (mengerjakan pekerjaan lain, diperintah oleh orang sekitar)</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC3"
                                                        id="qa3LC1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC3"
                                                        id="qa3LC2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC3"
                                                        id="qa3LC3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC3"
                                                        id="qa3LC4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC3"
                                                        id="qa3LC5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Saya mengulangi materi pembelajaran online berdasarkan kebutuhan saya</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC4"
                                                        id="qa4LC1" value="1" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC4"
                                                        id="qa4LC2" value="2">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC4"
                                                        id="qa4LC3" value="3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC4"
                                                        id="qa4LC4" value="4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="LC4"
                                                        id="qa4LC5" value="5">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <input type="hidden" id="nim" name="nim" value={{ Auth::user()->nim }}>
                                <div style="text-align:right;">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
