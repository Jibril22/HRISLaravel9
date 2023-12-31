@extends('layouts.admin')

@section('content')
    {{-- Content Dan Footer --}}
    <div id="layoutSidenav_content">
        {{-- Content --}}
        <main>
            <div class="container-fluid mt-4">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Laporan</li>
                    <li class="breadcrumb-item active">Rekap Absensi</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Rekap Absensi Periode Tahun {{ $tahun }}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jan</th>
                                        <th>Feb</th>
                                        <th>Mar</th>
                                        <th>Apr</th>
                                        <th>Mei</th>
                                        <th>Jun</th>
                                        <th>Jul</th>
                                        <th>Aug</th>
                                        <th>Sep</th>
                                        <th>Okt</th>
                                        <th>Nov</th>
                                        <th>Des</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @if ($tahun == 2022)
                                        <tr>
                                            <td>{{ 'Cuti' }}</td>
                                            <td>{{ $totalcutijanuari2022 }}</td>
                                            <td>{{ $totalcutifebruari2022 }}</td>
                                            <td>{{ $totalcutimaret2022 }}</td>
                                            <td>{{ $totalcutiapril2022 }}</td>
                                            <td>{{ $totalcutimei2022 }}</td>
                                            <td>{{ $totalcutijuni2022 }}</td>
                                            <td>{{ $totalcutijuli2022 }}</td>
                                            <td>{{ $totalcutiagustus2022 }}</td>
                                            <td>{{ $totalcutiseptember2022 }}</td>
                                            <td>{{ $totalcutioktober2022 }}</td>
                                            <td>{{ $totalcutinovember2022 }}</td>
                                            <td>{{ $totalcutidesember2022 }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ 'Sakit' }}</td>
                                            <td>{{ $sakitjanuari2022 }}</td>
                                            <td>{{ $sakitfebruari2022 }}</td>
                                            <td>{{ $sakitmaret2022 }}</td>
                                            <td>{{ $sakitapril2022 }}</td>
                                            <td>{{ $sakitmei2022 }}</td>
                                            <td>{{ $sakitjuni2022 }}</td>
                                            <td>{{ $sakitjuli2022 }}</td>
                                            <td>{{ $sakitagustus2022 }}</td>
                                            <td>{{ $sakitseptember2022 }}</td>
                                            <td>{{ $sakitoktober2022 }}</td>
                                            <td>{{ $sakitnovember2022 }}</td>
                                            <td>{{ $sakitdesember2022 }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ 'Ijin' }}</td>
                                            <td>{{ $ijinjanuari2022 }}</td>
                                            <td>{{ $ijinfebruari2022 }}</td>
                                            <td>{{ $ijinmaret2022 }}</td>
                                            <td>{{ $ijinapril2022 }}</td>
                                            <td>{{ $ijinmei2022 }}</td>
                                            <td>{{ $ijinjuni2022 }}</td>
                                            <td>{{ $ijinjuli2022 }}</td>
                                            <td>{{ $ijinagustus2022 }}</td>
                                            <td>{{ $ijinseptember2022 }}</td>
                                            <td>{{ $ijinoktober2022 }}</td>
                                            <td>{{ $ijinnovember2022 }}</td>
                                            <td>{{ $ijindesember2022 }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ 'Alpa' }}</td>
                                            <td>{{ $alpajanuari2022 }}</td>
                                            <td>{{ $alpafebruari2022 }}</td>
                                            <td>{{ $alpamaret2022 }}</td>
                                            <td>{{ $alpaapril2022 }}</td>
                                            <td>{{ $alpamei2022 }}</td>
                                            <td>{{ $alpajuni2022 }}</td>
                                            <td>{{ $alpajuli2022 }}</td>
                                            <td>{{ $alpaagustus2022 }}</td>
                                            <td>{{ $alpaseptember2022 }}</td>
                                            <td>{{ $alpaoktober2022 }}</td>
                                            <td>{{ $alpanovember2022 }}</td>
                                            <td>{{ $alpadesember2022 }}</td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td>{{ 'Cuti' }}</td>
                                            <td>{{ $totalcutijanuari2023 }}</td>
                                            <td>{{ $totalcutifebruari2023 }}</td>
                                            <td>{{ $totalcutimaret2023 }}</td>
                                            <td>{{ $totalcutiapril2023 }}</td>
                                            <td>{{ $totalcutimei2023 }}</td>
                                            <td>{{ $totalcutijuni2023 }}</td>
                                            <td>{{ $totalcutijuli2023 }}</td>
                                            <td>{{ $totalcutiagustus2023 }}</td>
                                            <td>{{ $totalcutiseptember2023 }}</td>
                                            <td>{{ $totalcutioktober2023 }}</td>
                                            <td>{{ $totalcutinovember2023 }}</td>
                                            <td>{{ $totalcutidesember2023 }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ 'Sakit' }}</td>
                                            <td>{{ $sakitjanuari2023 }}</td>
                                            <td>{{ $sakitfebruari2023 }}</td>
                                            <td>{{ $sakitmaret2023 }}</td>
                                            <td>{{ $sakitapril2023 }}</td>
                                            <td>{{ $sakitmei2023 }}</td>
                                            <td>{{ $sakitjuni2023 }}</td>
                                            <td>{{ $sakitjuli2023 }}</td>
                                            <td>{{ $sakitagustus2023 }}</td>
                                            <td>{{ $sakitseptember2023 }}</td>
                                            <td>{{ $sakitoktober2023 }}</td>
                                            <td>{{ $sakitnovember2023 }}</td>
                                            <td>{{ $sakitdesember2023 }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ 'Ijin' }}</td>
                                            <td>{{ $ijinjanuari2023 }}</td>
                                            <td>{{ $ijinfebruari2023 }}</td>
                                            <td>{{ $ijinmaret2023 }}</td>
                                            <td>{{ $ijinapril2023 }}</td>
                                            <td>{{ $ijinmei2023 }}</td>
                                            <td>{{ $ijinjuni2023 }}</td>
                                            <td>{{ $ijinjuli2023 }}</td>
                                            <td>{{ $ijinagustus2023 }}</td>
                                            <td>{{ $ijinseptember2023 }}</td>
                                            <td>{{ $ijinoktober2023 }}</td>
                                            <td>{{ $ijinnovember2023 }}</td>
                                            <td>{{ $ijindesember2023 }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ 'Alpa' }}</td>
                                            <td>{{ $alpajanuari2023 }}</td>
                                            <td>{{ $alpafebruari2023 }}</td>
                                            <td>{{ $alpamaret2023 }}</td>
                                            <td>{{ $alpaapril2023 }}</td>
                                            <td>{{ $alpamei2023 }}</td>
                                            <td>{{ $alpajuni2023 }}</td>
                                            <td>{{ $alpajuli2023 }}</td>
                                            <td>{{ $alpaagustus2023 }}</td>
                                            <td>{{ $alpaseptember2023 }}</td>
                                            <td>{{ $alpaoktober2023 }}</td>
                                            <td>{{ $alpanovember2023 }}</td>
                                            <td>{{ $alpadesember2023 }}</td>
                                        </tr>
                                    @endif


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        {{-- End Content --}}
    </div>
    {{-- End Content Dan Footer --}}
@endsection
