@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Current News
            <small>For Current People</small>
          </h1>
          
          <!-- Blog Post -->
          @foreach($posts as $post)
          <div class="card mb-4">
            <img class="img-fluid rounded" src="{{$post->image}}" alt="{{$post->title}}">
            <div class="card-body">
              <a class="text-dark" href="{{$post->url()}}">
                <h2 class="card-title">{{$post->title}}</h2>
              </a>
              <p class="subtitle lead">{{$post->excerpt}}</p>
              <p class="card-text">
                {{str_limit(strip_tags($post->body), 160)}}
              </p>
              <a href="{{$post->url()}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on {{$post->created_at->format('Y-m-d')}} by <a href="{{$post->author->url()}}">{{$post->author->name}}</a>
            </div>
          </div>
          @endforeach


          <!-- Pagination -->
                   
          <div class="d-flex justify-content-center mb-5">
            {{$posts->links('vendor.pagination.simple-bootstrap-4')}}
          </div>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">


          <!-- Side Widget -->
          <div class="card my-4 price-ticker">
            <h5 class="card-header">Current Price</h5>
            <div class="card-body">
              <p class="grlc-price h4"><i class="fa fa-spinner"></i></p>
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
</big></div></div><div class="card my-4"><h5 class="card-header">Advertisement</h5><div class="card-body"><big>Person who read this advertisement infinite gay unless they watch Puffycheeses. Reflect all no u, destroy all shields and reverse all reverse cards. <a href="https://goo.gl/G2rBFk" target="_blank">https://www.twitch.tv/puffycheeses</a></big></div></div><div class="card my-4"><h5 class="card-header">Advertisement</h5><div class="card-body"><big>This is an adspace. Please contact Beorn_619 for more info.
#4</big></div></div>
  
  
  
  

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection

@push('scripts')
<script type="text/javascript">
  $.get('https://api.coinmarketcap.com/v1/ticker/garlicoin/')
  .done(function(res){
    var len = $('.price-ticker').length;
    if(len != 0) {
      var data = res[0];
      var el = $('.grlc-price');
      el.text('$ '+ data.price_usd.substr(0,4) + ' USD');
    }
  });
</script>
@endpush