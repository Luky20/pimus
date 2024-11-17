@extends('layout.mainweb')

@section('title')
PIMUS 14 - Registration
@endsection

@section('style')
<link rel="stylesheet" href="{{ url('/assets/css/register-cabang.css') }}">
@endsection

@section('content')
{{-- card --}}
{{-- @foreach ($category as $item) --}}
<section id="card">
    <div class="container">
        <div class="card-cabang">
            <?php
            date_default_timezone_set('Asia/Jakarta');

            $timeNow = date('Y-m-d H:i:s');
            $timeNow = strtotime($timeNow);
            $closeDate = strtotime($date[0]->close);
            $extendedCloseDate = strtotime('2024-11-15 23:59:00');

            $extendedCloseDateRevisiA = strtotime('2024-11-23 12:00:00');
            $extendedCloseDateRevisiB = strtotime('2024-12-03 08:00:00');

            $open = false;
            $openExtendedRevisi = false;

            $isExtendedAccess = in_array($category->id, [1, 2, 3, 5, 6, 7, 8, 9, 10, 11]);

            $isExtendedAccessRevisi = in_array($category->id, [1,2,3,5,6,7, 8, 9, 10, 11, 12]);

            // cek apakah user sudah registrasi di kategori terkait (PKM-Riset Sosial Humaniora, PKM-Kewirausahaan, PKM-Riset Eksakta, PKM-Pengabdian kepada Masyarakat, Ide Bisnis)
            $userNRP = Auth::user()->user_details->nrp ?? null;
            $registeredNRP = DB::table('user_details')
                ->join('teams', 'user_details.teams_id', '=', 'teams.id')
                ->where('user_details.nrp', $userNRP)
                ->where('teams.status', '=', 'Tolak')
                ->whereIn('teams.competition_categories_id', [1,2,3,5,6,7, 8, 9, 10, 11, 12])
                ->exists();

            if ($timeNow > strtotime($date[0]->open) && ($isExtendedAccess ? $timeNow < $extendedCloseDate : $timeNow < $closeDate)) {
                $open = true;
            }
            
            if ($isExtendedAccessRevisi && $registeredNRP) {
                if (in_array($category->id, [1,2,3,5,6,7, 8, 9, 10, 11])) {
                    $openExtendedRevisi = $timeNow < $extendedCloseDateRevisiA;
                } elseif ($category->id == 12) {
                    $openExtendedRevisi = $timeNow < $extendedCloseDateRevisiB;
                }
            }

            $category_name = $category->name == 'PKM-Riset Sosial Humaniora' ? 'Program Kreativitas Mahasiswa' : $category->name;

            echo '
                    <div class="image">
                        <img src="../assets/images/logo-cabang/' . $category->name . '.png" alt="Gambar ' . $category->name . '">
                    </div>
                    <div class="info">
                        <h1 class="title text-lowercase">' . $category_name . '</h1>
                        <p class="desc">' . $category->desc . '</p>';
                        
            if ($userId == null) {
                if ($userId == null) {
                if ($open || $openExtendedRevisi) {
                    if ($category->id == 8) {
                        echo '
                            <div>
                                <a href="/login" class="buttons" id="register">Register PKM-Riset Sosial Humaniora</a><br><br>
                                <a href="/login" class="buttons" id="register">Register PKM-Kewirausahaan</a><br><br>
                                <a href="/login" class="buttons" id="register">Register PKM-Riset Eksakta</a><br><br>
                                <a href="/login" class="buttons" id="register">Register PKM-Pengabdian kepada Masyarakat</a><br><br>
                            </div>
                        ';
                    } else {
                        echo '<div><a href="/login" class="buttons" id="register">Register Now!</a></div>';
                    }
                } else {
                    echo '
                            <div class="mt-3" style="font-weight: bold;">
                                <p class="text-danger" style="font-size: 20px;">*) Masa Registrasi sudah selesai</p>
                            </div>
                            ';
                    }
                }
            } else {
                // Jika user sudah login tapi belum registrasi
                if ($user == null) {
                    if ($open || $openExtendedRevisi) {
                        if ($category->id == 8) {
                            echo '
                                <div>
                                    <a href="/registration/cabang/register?cabang=8" class="buttons" id="register">Register PKM-Riset Sosial Humaniora</a><br><br>
                                    <a href="/registration/cabang/register?cabang=9" class="buttons" id="register">Register PKM-Kewirausahaan</a><br><br>
                                    <a href="/registration/cabang/register?cabang=10" class="buttons" id="register">Register PKM-Riset Eksakta</a><br><br>
                                    <a href="/registration/cabang/register?cabang=11" class="buttons" id="register">Register PKM-Pengabdian kepada Masyarakat</a><br><br>
                                </div>
                            ';
                        } else {
                            echo '<div><a href="/registration/cabang/register?cabang=' . $category->id . '" class="buttons" id="register">Register Now!</a></div>';
                        }
                    } else {
                        echo '<div class="mt-3" style="font-weight: bold;"><p class="text-danger" style="font-size: 20px;">*) Masa Registrasi sudah selesai</p></div>';
                    }
                } else {
                    foreach ($user as $item1) {
                        $status = $item1->status;
                        $pesan = $item1->message;
                        if ($status == 'Tolak') {
                            if ($category->id == 8) {
                                echo '
                                    <div>
                                    <a href="/registration/cabang/register?cabang=8" class="buttons" id="register">Register PKM-Riset Sosial Humaniora</a><br><br>
                                    <a href="/registration/cabang/register?cabang=9" class="buttons" id="register">Register PKM-Kewirausahaan</a><br><br>
                                    <a href="/registration/cabang/register?cabang=10" class="buttons" id="register">Register PKM-Riset Eksakta</a><br><br>
                                    <a href="/registration/cabang/register?cabang=11" class="buttons" id="register">Register PKM-Pengabdian kepada Masyarakat</a><br><br>
                                </div>
                                ';
                            } else {
                                echo '
                                    <div>
                                        <a href="/registration/cabang/register?cabang=' . $category->id . '" class="buttons" id="register">Register Now!</a>
                                    </div>
                                    ';
                            }
                            echo '
                                <div class="mt-3" style="font-weight: bold;">
                                    <p class="text-danger" style="font-size: 20px;">*) Registrasi ' . $item1->name . ' Anda ditolak karena ' . $pesan . '</p>
                                </div>
                                ';
                        } else {
                            echo '<div class="mt-3" style="font-weight: bold;"> ';

                            if ($status == 'Terima') {
                                echo ' <p class="text-success" style="font-size: 20px;">*) Registrasi ' . $item1->name . ' Anda di' . strtolower($status) . '</p>';
                            } elseif ($status == 'Pending') {
                                echo ' <p class="text-warning" style="font-size: 20px;">*) Registrasi ' . $item1->name . ' Anda sedang ' . strtolower($status) . '</p>';
                            }

                            echo '</div>';
                        }
                    }
                }
            }
            echo '</div>';
            ?>
        </div>
    </div>
</section>
{{-- @endforeach --}}
@endsection