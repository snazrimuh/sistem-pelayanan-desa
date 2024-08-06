<!DOCTYPE html>
<html>

<head>
    <title>Surat Keterangan</title>
    <style>
    body {
        font-family: 'Times New Roman';
        margin: 30px;
    }

    .header {
        display: flex;
        align-items: center;
    }

    .header img {
        width: 75px;
        inline-block;
    }

    .header-text {
        text-align: center;
        flex-grow: 1;
        margin-left: 90px;
        display: inline-block;
    }

    .header-text strong {
        font-size: 20px;
        display: block;
    }

    .header-text em {
        font-size: 14px;
        display: block;
    }

    .separator {
        border-bottom: 3px solid black;
        /* margin: 40px 0; */
    }

    .content {
        margin: 0 20px;
    }

    .content p {
        margin: 5px 0;
    }

    .table-content {
        width: 100%;
    }

    .table-content td {
        vertical-align: top;
    }

    .table-content td:first-child {
        width: 200px;
    }

    .table-content td:nth-child(2) {
        width: 10px;
    }

    .table-content td:last-child {
        width: calc(100% - 210px);
    }

    .signature-table {
        width: 100%;
        margin-top: 40px;
    }

    .signature-table td {
        vertical-align: top;
        padding: 10px;
    }

    .left-signature {
        text-align: left;
    }

    .right-signature {
        text-align: right;
    }

    .center-signature {
        text-align: center;
    }
    </style>
</head>

<body>

    <div class="header">
        <img src="data:image/png;base64,{{ $image }}" alt="Logo">
        <div class="header-text">
            <strong>PEMERINTAH KABUPATEN SUKOHARJO</strong>
            <strong>KECAMATAN POLOKARTO</strong>
            <strong>DESA NGOMBAKAN</strong>
            <em>Alamat: Jln. Kenanga No. 01 Telp. (0271) 610014 Kode Pos 575555</em>
        </div>
    </div>
    <div class="separator"></div>

    <div class="content">
        <p>No Kode Desa/Kelurahan</p>
        <p>33 11 072004</p>

        <p style="text-align: center; margin-top: 20px;">KETERANGAN</p>
        <p style="text-align: center; margin-right: 50px;">SURAT _____________________</p>
        <p style="text-align: center;">PENGANTAR</p>
        <p style="text-align: center; margin-bottom: 30px;">Nomor:
            {{ $pelayanan->kode_pelayanan }}/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/{{ $pelayanan->created_at->format('Y') }}
        </p>

        <p>Yang bertanda tangan di bawah ini Kami Kepala Desa Ngombakan Kecamatan Polokarto Kabupaten Sukoharjo,
            menerangkan bahwa:</p>

        <table class="table-content">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><b>{{ $pelayanan->nama }}</b></td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $pelayanan->tempat_tgl_lahir }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $pelayanan->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $pelayanan->pekerjaan }}</td>
            </tr>
            <tr>
                <td>Bukti Identitas</td>
                <td>:</td>
                <td>{{ $pelayanan->nik }}</td>
            </tr>
            <tr>
                <td>Tempat Tinggal</td>
                <td>:</td>
                <td>{{ $pelayanan->tempat_tinggal }}</td>
            </tr>
            <tr>
                <td>Keperluan</td>
                <td>:</td>
                <td>{{ $pelayanan->keperluan }}</td>
            </tr>
            <tr>
                <td>Tujuan</td>
                <td>:</td>
                <td>{{ $pelayanan->tujuan }}</td>
            </tr>
            <tr>
                <td>Berlaku Mulai</td>
                <td>:</td>
                <td>{{ $pelayanan->created_at->format('d-m-Y') }} s/d Selesai</td>
            </tr>
            <tr>
                <td>Keterangan Lain-Lain</td>
                <td>:</td>
                <td>{{ $pelayanan->keterangan_lain }}</td>
            </tr>
        </table>

        <p style="text-align: center; margin-top: 10px;">Demikian untuk menjadikan maklum bagi yang berkepentingan.</p>

        <table class="signature-table">
            <tr>
                <td class="left-signature">
                    <p> </p>
                </td>
                <td class="right-signature">
                    <p>Ngombakan, {{ $pelayanan->created_at->format('d-m-Y') }}</p>
                </td>
            </tr>
            <tr>
                <td class="left-signature">
                    <p>Tanda Tangan Pemegang</p>
                    <br><br><br><br>
                    <p>____________________</p>
                </td>
                <td class="right-signature">
                    <p>{{ $pelayanan->mengetahui }} Ngombakan</p>
                    <br><br><br><br>
                    <p>____________________</p>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>