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

        
    </style>
    <body>
        <header style="margin-top:-5%" class="masthead">
        <div style="padding-bottom:0" class="section-title" data-aos="fade-up">
        </div>
        <div class="container"data-aos="fade-right" style="margin-bottom:1%;">
        <h1 style="color:white;font-family:Roboto Slab">Contact US</h1>
  <div style="margin-left:0;" class="mb-6 card kartu">
    <div class="row">
    <p style="padding-left:-3%;color:white;">Untuk pembelian bisa melalui kontak kami dibawah ini :</p>
    <div style="color:black" class="col-md-8 kertas-biodata">
      <div style="margin-top:-9.9%" class="biodata">
        <table height="120%" width="120%" border="0">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px;margin-top: 11%; padding-right: 13px;color:white;">
          <tbody>
            <tr>
              <td width="25%" valign="top" class="textt">Instagram</td>
                <td width="2%">:</td>
                <td><a href="https://www.instagram.com/ejaaxyz/">https://www.instagram.com/ejaaxyz/</a></td>
            </tr>
          <tr>
              <td class="textt">Whatsapp</td>
                <td>:</td>
                <td><a href="https://wa.me/08213428306">https://wa.me/08213428306</a></td>
            </tr>
            <tr>
              <td class="textt">Twitter</td>
                <td>:</td>
                <td><a href="https://twitter.com/Rezaa_ejaaaaa">https://twitter.com/Rezaa_ejaaaaa</td>
          </tr>
        </tbody>
      </table>
      </td>
    </tr>
    </tbody>
  </table>
  </div>
    </div>
    </div>
  </div>
</div>
<div data-aos="zoom-in" style="padding-bottom: 80px; padding-left: 5%; padding-right: 5%;text-align: center;background-color:#4A60D2;width:100%;height:290px">
    <div class="container" style=" padding: 0 15px; margin-top:18%;margin-left:15%;">   
    <p style="padding-top:-10%;margin-right:30%;color:white;font-size:40px">or click the icon below to order</p> 
      <div class="lesson" style="float: left; width: 25%;">
        <div class="lesson-icon" style="position: relative;">
          <a href="https://www.instagram.com/ejaaxyz/"><img style="width:200px; height: 200px;background-color:#4A60D2;padding-bottom:5%" src="assets/img/ig.svg"></a>
        </div>
      </div>
      <div class="lesson" style="float: left; width: 25%;">
        <div class="lesson-icon" style="position: relative;">
          <a href="https://wa.me/08213428306"><img style="width:200px;background-color:#4A60D2; height: 200px;padding-bottom:5%" src="assets/img/wa.svg"></a>
        </div>
      </div>
      <div class="lesson" style="float: left; width: 25%;">
        <div class="lesson-icon" style="position: relative;">
          <a href="https://twitter.com/Rezaa_ejaaaaa"><img style="width:200px;background-color:#4A60D2; height: 200px;padding-bottom:5%" src="assets/img/twt.svg"></a>
        </div>
      </div>
                                
        </header>
    </body>
@endsection