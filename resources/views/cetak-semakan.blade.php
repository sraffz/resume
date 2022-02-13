<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keputusan Semakan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css"
        integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
</head>

<body>
    <div class="col-md-12">
        <div class="text-center">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                @if (count($result) > 0)
                                    @foreach ($result as $r)
                                        <p style="font-size: 30PX"><strong>SLIP KEHADIRAN UJIAN PENILAIAN KELAYAKAN
                                                PENDIDIK
                                                YIK 2021</strong></p>
                                        <p style="text-transform: uppercase; font-size: 25PX">
                                            <strong>{{ $r->nama }} ({{ $r->ic }})</strong>
                                        </p>
                                        <p style="font-size: 20px">

                                            Sukacita dimaklumkan tuan/puan terpilih untuk menduduki Ujian
                                            Penilaian Kelayakan Pendidik YIK 2021 sebagaimana
                                            berikut:- <br>
                                            <br>
                                            <strong>Pengkhususan</strong> : {{ $r->jawatandipohon }} <br>
                                            <strong>Tarikh</strong> : {{ $r->tarikh->format('d/m/Y') }} ({{ $r->hari }}) <br>
                                            <strong>Masa</strong> : {{ $r->masa }} {{ $r->waktu }}<br>
                                            <strong>Tempat</strong> : {{ $r->tempat }}
                                            <br>
                                            <br>

                                            Calon-calon <strong>hendaklah</strong> : <br>
                                            - Hadir awal 15 minit sebelum peperiksaan bermula. <br>
                                            - Berpakaian kemas. <br>
                                            - Sila bawa alat tulis sendiri. <br>
                                            - Tidak membawa telefon bimbit ke dalam dewan peperiksaan. <br>
                                            - Memakai pelitup muka. <br>
                                            - Mengamalkan penjarakan sosial sepanjang ujian.
                                            <br><br>
                                            Sila buat bayaran wang proses untuk menduduki peperiksaan melalui online banking sebanyak RM5.00 (wang pendaftaran
                                            ujian) ke
                                            Akaun <strong>Bank Islam</strong> Yayasan Islam Kelantan: <strong>03018010002220</strong> dan
                                            bawa resit
                                            bersama slip kehadiran ini semasa ujian.
                                        </p>
                                    @endforeach
                                @else
                                    <p>
                                        Dukacita dimaklumkan saudara/saudari tidak terpilih untuk menjalani sesi Ujian
                                        Kelayakan Guru YIK. <br> Sebab : Tiada rekod / maklumat tidak lengkap / tidak
                                        cukup
                                        syarat.
                                    </p>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        try {
            this.print();
        } catch (e) {
            window.onload = window.print;
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"
        integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous">
    </script>
</body>

</html>
