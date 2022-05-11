<div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Amazing <em>Services &amp; Features</em> for you</h4>
            <img src={{ asset("/images/".$services[0]->img) }} alt="">
            <p>{{ $services[0]->description }}</p> 
            {{-- an str replace have to been on the paragraph juste before this comment --}}
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon" style="background-image: url({{ asset("images/".$services[0]->cardicon)}})"></div>
            <h4>{{ $services[0]->cardtitle }}</h4>
            <p>{{ $services[0]->carddescription }}</p>
            <div class="text-button">
              <a href="#">{{ $services[0]->cardbtn }}<i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"  style="background-image: url({{ asset("images/".$services[1]->cardicon)}})"></div>
            <h4>{{ $services[1]->cardtitle }}</h4>
            <p>{{ $services[1]->carddescription }}</p>
            <div class="text-button">
              <a href="#">{{ $services[1]->cardbtn }}<i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <div class="icon"  style="background-image: url({{ asset("images/".$services[2]->cardicon)}})"></div>
            <h4>{{ $services[2]->cardtitle }}</h4>
            <p>{{ $services[2]->carddescription }}</p>
            <div class="text-button">
              <a href="#">{{ $services[2]->cardbtn }}<i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"  style="background-image: url({{ asset("images/".$services[3]->cardicon)}})"></div>
            <h4>{{ $services[3]->cardtitle }}</h4>
            <p>{{ $services[3]->carddescription }}</p>
            <div class="text-button">
              <a href="#">{{ $services[3]->cardbtn }}<i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>