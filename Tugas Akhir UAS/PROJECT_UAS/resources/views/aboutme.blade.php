@extends('layout.app')
@section('content')

    <style>
        header.masthead{
            padding-top: 10%;
            padding-bottom: 55%;
            background:url("assets/img/bgasli.svg");
            background-position: center;
            background-attachment: scroll;
            background-size: 100%;
        }
        .word{
            
            background:#C4C4C4
            background-size:100%
        }
        .kartu {
        width: 8000px;
        margin: 0 auto;
        margin-top: 70px;
        transition: all .3s;
        background-color:none;
        color:white;
        border:none;
        } 
      .foto {
        padding: 20px;
      }
      tbody {
    font-size: 20px;
    font-weight: 300;
}
.biodata {
    margin-top: 30px;
}      .kartu {
        width: 70%;
        height: 100%;
        margin: 0 auto;
        margin-top: 70px;
    transition: all .3s;
    background-color:transparent;
    color:white;
    border:none;
      } 
      .foto {
        padding: 20px;
      }
      tbody {
    font-size: 20px;
    font-weight: 300;
}
.biodata {
    margin-top: 30px;
}

.img-thumbnail{
  background-color:transparent;
  border:transparent;
}
        
    </style>
    <body>
        <header style="margin-top:-5%" class="masthead">
        <div style="padding-bottom:0" class="section-title" data-aos="fade-up">
        </div>
        <div class="container"data-aos="fade-right" style="margin-bottom:1%;">
        <h1 style="color:white;">About US</h1>
  <div style="margin-left:auto;" class="mb-6 card kartu">
    <div  class="row">
    <p style="padding-left:-3%;color:white;">Web ini merupakan Web penjualan dari vapestore kami yang bertujuan untuk memudahkan pembeli untuk belanja di vapestore kami melalui online. 
    Kami juga menyediakan berbagai MOD dan RDA untuk memenuhi kebutuhan vape anda.</p>
    <div  class="col-md-4">
      <div  class="foto">
        <p style="margin-left:39%;padding-bottom:-10%"> OWNER</p>
        <img style="width:250px; height: 250px; border-radius:200%;margin-top:18%;" src="assets/img/foto2.svg" class="img-thumbnail">
      </div>
    </div>
    <div style="color:black" class="col-md-8 kertas-biodata">
      <div style="margin-top:14%" class="biodata">
        <table height="120%" width="120%" border="0">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px;margin-top: 13%; padding-right: 13px;color:white;">
          <tbody>
            <tr>
              <td width="25%" valign="top" class="textt">NAMA</td>
                <td width="2%">:</td>
                <td>Achmad Aria Reza</td>
            </tr>
          <tr>
              <td class="textt">STATUS</td>
                <td>:</td>
                <td>MAHASISWA</td>
            </tr>
            <tr>
              <td class="textt">ALAMAT</td>
                <td>:</td>
                <td>Jambu Timur Rt 03 / Rw 01</td>
          </tr>       
        </tbody></table>
        </td>
    </tr>
    </tbody></table>
  </div>
      </div>
    </div>
  </div>
</div>

                                
        </header>
    </body>
@endsection