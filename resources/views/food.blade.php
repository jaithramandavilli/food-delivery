<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Enjoy Our cusine with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    @if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">x</button>
    {{session()->get('message')}}
</div>
@endif
    <div class="menu-item-carousel">
        <div class="col-lg-14">
            <div class="owl-menu-item owl-carousel">

                @foreach($data as $data)
                <form action="{{url('/addcart',$data->id)}}" method="post">
                    @csrf
                <div class="item">
                    <div style="background-image:url('/foodimage/{{$data->Image}}');" class='card'>
                        <div class="price"><h6>Rs.{{$data->Price}}</h6></div>
                        <div class='info'>
                          <h1 class='title'>{{$data->Title}}</h1>
                          <p class='description'>{{$data->Description}}</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>

                    <input type="number" name="quantity" min="1"  value="1" style="width:80px;border-bottom:1px solid black">
                    <input type="submit" value="Add to Cart">

                </div>
                </form>
               @endforeach
            </div>
        </div>
    </div>
</section>

