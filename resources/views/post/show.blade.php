@extends('layouts.app')

@section('content')
  <div class="container">

      <div class="row">
        
        <!-- Post Content Column -->
        <div class="col-lg-8">
          
          <h1 class="mt-4">{{$post->title}}</h1>
          <p class="lead">by <a href="#">Beorn_619</a><span style="float:right">2018-02-16</span>
          </p>
          <hr>
          <img class="img-fluid rounded" src="/{{$post->image}}" alt="">
          <hr>
          {!!$post->body!!}
          <hr>
        </div>      
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">


          <!-- Side Widget -->
          <div class="card my-4">
  
  <h5 class="card-header">Current Price</h5>
  <div class="card-body">
    <big>$0.40</big>
    <p style="color: grey">Price provided by CoinMarketCap</p>
  </div>
</div>          


  <div class="card my-4"><h5 class="card-header">Advertisement</h5><div class="card-body"><big><a target="_blank" href="https://nanex.co/exchange/GRLCNANO" style="text-decoration: none; color: black;"><p style="text-align: center;">Buy and sell your Garlic on</p><img width="298px" height="118" src="https://nanex.co/assets/logo.svg"></img></a></big></div></div><div class="card my-4"><h5 class="card-header">Advertisement</h5><div class="card-body"><big>Looking for a pool?<br>
Why not join <a target="_blank" href="https://goo.gl/B5d3mC">http://rypenation.club</a><br>
A small pool looking for success, only a 1% fee.
To start mining simply replace your current pool address with: <br> <code>stratum+tcp://allium.rypenation.club:3333</code><br>
See you soon.</big></div></div><div class="card my-4"><h5 class="card-header">Advertisement</h5><div class="card-body"><big>GarliChurch: The first church of Garlicoin.
Come worship with us.
<a href="https://goo.gl/19N5VC" target="_blank">http://garlichurch.com/</a>
</big></div></div><div class="card my-4"><h5 class="card-header">Advertisement</h5><div class="card-body"><big>Person who read this advertisement infinite gay unless they watch Puffycheeses. Reflect all no u, destroy all shields and reverse all reverse cards. <a href="https://goo.gl/G2rBFk" target="_blank">https://www.twitch.tv/puffycheeses</a></big></div></div><div class="card my-4"><h5 class="card-header">Advertisement</h5><div class="card-body"><big><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Text ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6764350321168022"
     data-ad-slot="6621391471"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></big></div></div>
  
  
  
          

<div class="card my-4">
  
  <h5 class="card-header">Donate To The Author</h5>
  <div class="card-body">
    <big>GSxaLg2xcJk6ZMRUywR1hyksTZLrhEiscg</big>
    <p style="color: grey">100% of donations go to the author!</p>
  </div>
</div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection