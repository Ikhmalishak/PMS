<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Example 2</title>
  <style>
    .page-break {
      page-break-after: always;
    }


    @font-face {
      font-family: SourceSansPro;
      src: url(SourceSansPro-Regular.ttf);
    }

    body {
      position: relative;
      width: 18cm;
      height: 29.7cm;
      margin: 0 auto;
      color: #555555;
      background: #FFFFFF;
      font-family: Arial, sans-serif;
      font-size: 14px;
      font-family: SourceSansPro;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      /* Ensure the body takes at least the full height of the viewport */
    }

    main {
      flex: 1;
    }

    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }

    a {
      color: #0087C3;
      text-decoration: none;
    }

    header {
      padding: 10px 0;
      margin-bottom: 20px;
      border-bottom: 1px solid #AAAAAA;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    .content {
      margin: 30px;
      text-align: center;
    }

    .content p {
      font-size: 16px;
      margin: 5px 0;
    }

    footer {
      text-align: center;
      padding: 10px;
      background-color: #f2f2f2;
      position: absolute;
      bottom: 50;
      width: 100%;
    }

    .cover {
      background-color: #3498db;
      color: #ffffff;
      text-align: center;
      padding: 50px;
    }

    .signature-row {
      height: 100%; /* Adjust the height for the signature space */
    }
  </style>
</head>

<body>
  <header class="clearfix">

    <div id="company">
      <h2 class="name">Persatuan Teknologi Komputeran</h2>
      <div>Universiti Malaysia Pahang,</div>
      <div>26600 Pekan,</div>
      <div>Pahang Darul Makmur</div>
      <div><a href="mailto:company@example.com">petakom@gmail.com</a></div>
    </div>
  </header>

  <div class="cover">
    <h1>Kertas Kerja</h1>
    <p>{{ $data->title }}</p>
  </div>

  <div class="content">
    <p><strong>TARIKH</strong><br>{{ $data->start_date }}</p><br>
    <p><strong>LOKASI</strong><br>{{ $data->location}}</p><br>
    <p><strong>ANJURAN</strong><br>{{ $data->organizer }}</p><br><br>
    <p><strong>KERTAS CADANGAN DISEDIAKAN OLEH:</strong><br>PENGARAH PROGRAM<br>{{ $data->title }}<br>NO.TELEFON: {{
      $data->title }}<br>ALAMAT E-MEL: {{ $data->title }}</p>
  </div>


  <footer>
    Page 1 <!-- You can dynamically update this with the actual page number if needed -->
  </footer>
</body>


<body>
  <header class="clearfix">

    <div id="company">
      <h2 class="name">Persatuan Teknologi Komputeran</h2>
      <div>Universiti Malaysia Pahang,</div>
      <div>26600 Pekan,</div>
      <div>Pahang Darul Makmur</div>
      <div><a href="mailto:company@example.com">petakom@gmail.com</a></div>
    </div>
  </header>

  <h2>RINGKASAN EKSEKUTIF</h2> <br>
  <h2>{{$data->title}}</h2>

  <table>
    <tr>
      <td>TAJUK PROGRAM</td>
      <td>{{$data->title}}</td>
    </tr>
    <tr>
      <td>OBJEKTIF</td>
      <td>{{$data->objective}}</td>
    </tr>
    <tr>
      <td>ANJURAN</td>
      <td>{{$data->organizer}}</td>
    </tr>
    <tr>
      <td>KERJASAMA</td>
      <td>{{$data->organizer}}</td>
    </tr>
    <tr>
      <td>TARIKH</td>
      <td>{{$data->start_date}}</td>
    </tr>
    <tr>
      <td>TEMPAT</td>
      <td>{{$data->location}}</td>
    </tr>
    <tr>
      <td>PENYERTAAN</td>
      <td>{{$data->participation}}</td>
    </tr>
  </table>
  <footer>
    Page 2 <!-- You can dynamically update this with the actual page number if needed -->
  </footer>
</body>

<body>
  <header class="clearfix">

    <div id="company">
      <h2 class="name">Persatuan Teknologi Komputeran</h2>
      <div>Universiti Malaysia Pahang,</div>
      <div>26600 Pekan,</div>
      <div>Pahang Darul Makmur</div>
      <div><a href="mailto:company@example.com">petakom@gmail.com</a></div>
    </div>
  </header>

  <h2>PENGESAHAN</h2> <br>
  

  <table style="width:100%; border-collapse: collapse; margin-top: 20px;">
    <tr>
      <th>PENGESAHAN PENYEDIAAN KERTAS KERJA</th>
      <th>PENGESAHAN SEMAKAN KERTAS KERJA & SOKONGAN PENASIHAT PROGRAM</th>
    </tr>
    <tr style="height: 100px;">
      <td style="border: 1px solid #ddd; padding: 10px;">
      <br><br><br><br><br><br><br>
        .......................................................................
        MUHAMMAD NURHIDAYAT BIN MOHD TAUFIK
        PERSATUAN TEKNOLOGI KOMPUTERAN
        UNIVERSITI MALAYSIA PAHANG
      </td>
      <td style="border: 1px solid #ddd; padding: 10px;">
      <br><br><br><br><br><br><br>
        .......................................................................
        MUHAMMAD ZULFAHMI TOH BIN ABDULLAH
        PENASIHAT
        PERSATUAN TEKNOLOGI KOMPUTERAN
        UNIVERSITI MALAYSIA PAHANG
      </td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 10px;">Tarikh: 21 Oktober 2022</td>
      <td style="border: 1px solid #ddd; padding: 10px;">Tarikh: 21 Oktober 2022</td>
    </tr>
  </table>

  <footer>
    Page 2 <!-- You can dynamically update this with the actual page number if needed -->
  </footer>
</body>

</html>