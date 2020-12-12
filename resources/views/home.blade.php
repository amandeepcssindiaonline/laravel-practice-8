@extends('layouts.main')

@section('content')
<div class="header" id="topheader">
    <!-- main header 1 -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container text-uppercase p-2">
            <!-- Main header 2 -->
            <a class="navbar-brand" href="#">Toilet Cleaners</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Nav bar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="header-section">
        <div class="center-div">
            <h1 class="font-weight-bold">Save Money ---- Save Time</h1>
            <p> Check out our top bathroom and toilet cleaning products </p>
            <div class="header-buttons">
                <a href="zest1.html">Zest</a>
                <a href="brush1.html">Brush Set</a>
                <a href="organic1.html">Organic Bathroom Cleaner</a> 
            </div>
        </div>
    </section>

</div>
<!-- main header 1 close-->

<!--  ************************ header part end******************-->
<!-- ************************* Three extra header div ------>
<section class="header-extradiv">
    <div class="container">
        <div class="row">
            <div class="extra-div col-lg-4 col-md-4 col-12">
                <a href="#"><i class="fa-2x fa fa-desktop" aria-hidden="true"></i>
                </a>
                <h2> Cheaper products</h2>
                <p> This is one of the cheapest product. We recommend to use as a domestic cleaner</p>
            </div>
            <div class="extra-div col-lg-4 col-md-4 col-12">
                <a href="#"><i class="fa-2x fa fa-trophy" aria-hidden="true"></i>
                </a>
                <h2> Quality products</h2>
                <p> This is one of the cheapest product. We recommend to use as a domestic cleaner</p>
            </div>
            <div class="extra-div col-lg-4 col-md-4 col-12">
                <a href="#"><i class="fa-2x fa fa-magic" aria-hidden="true"></i>
                </a>
                <h2>  Easy to use</h2>
                <p> This is one of the cheapest product. We recommend to use as a domestic cleaner.</p>
            </div>
        </div>
    </div>
</section>
<!--  ************** three extra div ends *********-->
<!--************* Offer section start *********-->
<section class="serviceoffers" id="servicediv">
    <div class="container headings text-center">
        <h1 class="text-center font-weight-bold">Benefits</h1>
        <p class="text-center font-weight-bold">These are the benefits for using our one of the best products.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0">
                <div class="names my-3">
                    <h1>Healthy Environment</h1>
                    <div class="progress w-70">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:100%">100%</div>
                    </div>
                </div>
                <div class="names my-3">
                    <h1>Eliminates Bacteria and Germs</h1>
                    <div class="progress w-70">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:100%">100%</div>
                    </div>
                </div>
                <div class="names my-3">
                    <h1>Cleans difficult areas without scrubbing</h1>
                    <div class="progress w-70">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width:90%">90%</div>
                    </div>
                </div>
                <div class="names my-3">
                    <h1>Pleasant smell</h1>
                    <div class="progress w-70">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:95%">95%</div>
                    </div>
                </div>
                <div class="names my-3">
                    <h1>Acid free</h1>
                    <div class="progress w-70">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:80%">80%</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 servicediv">
                <div class="row">
                    <div class="col-lg-2 col-2 service-icons">
                        <i class="fa-2x fa fa-desktop" aria-hidden="true"></i>
                    </div>
                    <div class="col-lg-10 col-10">
                        <h2>Effectiveness</h2>
                        <p style= "text-align:left;"> According to some findings, Easy Off Bam Power Cleaner Toilet Bleach & Hygiene is the best in the market, getting a CHOICE score of 75 percent. But at $5.98 a bottle, it is on the steep end of things. </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-2 service-icons">
                        <i class="fa-2x fa fa-wifi" aria-hidden="true"></i>
                    </div>
                    <div class="col-lg-10 col-10">
                        <h2> Easy of use</h2>
                        <p> For an easy and effective way to clean your toilets, hundreds of customers say this system from some products can’t be beat.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-2 service-icons">
                        <i class="fa-2x fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="col-lg-10 col-10">
                        <h2> Quality products</h2>
                        <p> As we know that a clean toilet can be the pride of a clean bathroom, while protecting you and your family from all the nasty bacteria that tends to live around an uncleaned toilet area. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--*********************** Offer section end ************* -->

<!-- ********************* Our pricing start *******************-->
<section class="pricing" id="pricingdiv">
    <div class="container headings text-center">
        <h1 class="text-center font-weight-bold text-white"> We provide good quality products at value for money prices.</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">Bright Bowl(5lit)</div>
                        <div class="card-body">
                            <li> $<span class="money">32.20</span>/product</li>
                            <li> Cleans & disinfects in one action</li>
                            <li> Thickness formula clings to surface/li>
                            <li> Remove rust stains & scale deposits </li>
                            <li> Affordable</li>
                            <li>  Pleasant fragrance</li>
                        </div>
                        <div class="card-footer">
                            <a href ="#">View Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header"> Splash Caress</div>
                        <div class="card-body">
                            <li> $<span class="money">38.70</span>/product</li>
                            <li> Frequently sanitized </li>
                            <li> Eco-friendly</li>
                            <li> Eliminates Bacteria and Germs</li>
                            <li> Reduced heavy scrubbing</li>
                            <li> Easy to use</li>
                            <li> </li>
                        </div>
                        <div class="card-footer">
                            <a href ="#">View Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">Super Bowl</div>
                        <div class="card-body">
                            <li> $<span class="money">20</span>/product</li>
                            <li> Septic safe</li>
                            <li> Cleans & Deodories</li>
                            <li> Eco-friendly</li>
                            <li>Light and refreshing fragrance</li>
                            <li> Leave the toilet smelling clean and refreshed</li>
                        </div>
                        <div class="card-footer">
                            <a href ="#">View Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- *********************  Our Pricing end *******************-->
<!--**********************our second pricing begin **************-->
<section class="pricing" id="pricingdiv">
    <div class="container headings text-center">
        <h1 class="text-center font-weight-bold text-white"></h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">Pro-Tabs(Bacteria base)5kg Urinal Deodoriser</div>
                        <div class="card-body">
                            <li>$<span class="money">$95.00</span>/product</li>
                            <li>Used for cleaning and reducing odour problems associated with urinals.</li>
                            <li>Readily Bio-deg</li>
                            <li>Charged with pro-active bacteria</li>
                            <li>Eliminates odours-removes the cause of odours </li>
                        </div>
                        <div class="card-footer">
                            <a href ="#">View Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">Zest Toilet & Washroom Cleaner 1L</div>
                        <div class="card-body">
                            <li> $<span class="money">14.20</span>/product</li>
                            <li> Removes body fat in the shower </li>
                            <li> Rust stains in the toilet</li>
                            <li> Without toxic ingredients</li>
                            <li> Eliminates Bacteria and Germs</li>
                            <li> Do not recommended for marble or limestone surfaces</li>
                            <li> Australian made</li>
                        </div>
                        <div class="card-footer">
                            <a href ="#">View Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">Big Blue Toilet Treatment</div>
                        <div class="card-body">
                            <li> $<span class="money">4.10</span>/product</li>
                            <li> Non-toxic, non-corrosive, & safe for septic tanks</li>
                            <li> Deodorizes the water every flush & leaves a nice blue colour.</li>
                            <li>Keeps your toilet clean & fresh for up to 600 flushes</li>
                        </div>
                        <div class="card-footer">
                            <a href ="#">View Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--**********************our second pricing end **************-->
<!--********************** Our third pricing start *************-->
<section class="pricing" id="pricingdiv">
    <div class="container headings text-center">
        <h1 class="text-center font-weight-bold text-white"></h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">Toilet Bowl & Bathroom Cleaner 20L</div>
                        <div class="card-body">
                            <li> $<span class="money">112.40</span>/product</li>
                            <li> Rapid penetration by cleaning accumulated debris.</li>
                            <li> Eliminates odours by destroying the source</li>
                            <li> Destroys organic soils</li>
                            <li> Non-Corrosive and Safe for all surfaces</li>
                        </div>
                        <div class="card-footer">
                            <a href ="#">View Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">Go Getter(5L)</div>
                        <div class="card-body">
                            <li> $<span class="money">31.00</span>/product</li>
                            <li>Commercial Grade Disinfectant</li>
                            <li> Removes scale and rust build-up</li>
                            <li> Clings to vertical surfaces for extended contact </li>
                            <li>kills a wide range of odour producing bacteria</li>
                        </div>
                        <div class="card-footer">
                            <a href ="#">View Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">Duck 3 in 1 Fresh Pine 750mL</div>
                        <div class="card-body">
                            <li> $<span class="money">4.40</span>/product</li>
                            <li> Delivers powerful cleaning</li>
                            <li> Removes stains</li>
                            <li> Leaves a fresh Pine fragrance.</li>
                            <li>Light and refreshing fragrance</li>
                            <li> Leave the toilet smelling clean and refreshed</li>
                        </div>
                        <div class="card-footer">
                            <a href ="#">View Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--********************** Our third pricing start *************-->
<!-- *********************  Our customer feedback start *******************-->
<section class="happyclients">
    <div class="container headings text-center">
        <h1 class="text-center font-weight-bold"> Our other products </h1>
        <p class="pt-1"> We are providing one of the best range products </p>
    </div>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner container">
            <div class="carousel-item active">
                <div class ="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="{{ asset('images/3.jpg') }}" class="img-fluidi img-thumbnail"></a>
                            <p class="m-4 "><b>BLUE LAZER</b> is a highly effective toilet and urinal cleaner that is safe to use on stainless steel, to remove uric acid build-ups. Body fats, soap scale and mildew found in shower and bath areas are also removed rapidly with BLUE LAZER, leaving the area free of harmful bacteria. </p>
                            <h1>Blue Lazer(5 lit)</h1>
                            <h2> Bathroom & Toilet cleaner </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="images/6.jpg" class="img-fluidi img-thumbnail"></a>
                            <p class="m-4 "><b>Zest Cleaner</b> is a unique product that offers total washroom and toilet care. Its fiercely effective, yet gentle action removes lime, hard water scale, rust and waste products from all washroom surfaces and is also suitable for cleaning tiled floors.</p>
                            <h1>Zest(1 lit) </h1>
                            <h2>Toilet & Washroom Cleaner</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="images/7.jpg" class="img-fluidi img-thumbnail"></a>
                            <p class="m-4 "> <b>PUNCH</b> a highly concentrated alkaline cleaner with extremely high water softening and degreasing qualities. Its aggressive cleaning and wetting action penetrates into the pores of the vitrified surface, helping to lift out old dirt and build up - in hot or cold water. </p>
                            <h1> Punch (15 lit) </h1>
                            <h2> Extremely Heavy Duty Toilet & Washroom Cleaner</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class ="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="images/8.jpg" class="img-fluidi img-thumbnail"></a>
                            <p class="m-4 "><b>Deluxe Toilet Tissue Roll Dispenser</b> suits the individually wrapped RapidClean Image Deluxe Toilet Tissue Roll 400s – 700s which deliver premium quality and softness in the form of a conventional toilet roll</p>
                            <h1>Dispenser Toilet Tissue Little Jumbo WHITE</h1>
                            <h2>Toilet roll</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="images/9.jpg" class="img-fluidi img-thumbnail"></a>
                            <p class="m-4 ">Safe for People, Pets & the Planet!
                                Rapid penetrating action which breaks down and cleans accumulated debris.It also eliminates odours by destroying the source having
                                multi Enzyme formula to give best results.
                            </p>
                            <h1> Enzyme Wizard </h1>
                            <h2>Bathroom and Toilet Bowl Cleaner(5L)</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="images/10.jpg" class="img-fluidi img-thumbnail"></a>
                            <p class="m-4 "> We have range of best products. A clean toilet can be the pride of a clean bathroom, while protecting you and your family from all the nasty bacteria that tends to live around an uncleaned toilet area</p>
                            <h1> Zest(5 lit) </h1>
                            <h2> Bathroom & Toilet cleaner</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class ="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="images/12.jpg" class="img-fluidi img-thumbnail"></a>
                            <p class="m-4 "> <b>Bright Bowl</b> is a pleasantly fragranced, biodegradable, thickened acidic cleaner formulated to clean and disinfect toilet bowls, urinals and rest room floors. Bright Bowl is suitable for use on all rest room surfaces, including porcelain and stainless steel.</p>
                            <h1>Bright Bowl </h1>
                            <h2>Toilet Bowl & Urinal Cleaner</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="images/5.jpg" class="img-fluidi img-thumbnail"></a>
                            <p class="m-4 "> Each Superior heavy duty bristles remove tough built-up grime Rounded head with all round bristling to get right into the bowl Removable end cap allows threaded handle to be screwed in converting</p>
                            <h1> Large Industrial Sanitary Brush</h1>
                            <h2> Toilet brush</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="images/11.jpg" class="img-fluidi img-thumbnail"></a>
                            <p class="m-4 "> A modern design Toilet Brush Set with a stainless finished handle and lid ideal for contemporary bathrooms.The base is made with steel and powder coated with stylish colour combinations and a non slip rubber base.</p>
                            <h1> Toilet Set - Blue Metal </h1>
                            <h2> Toilet brush </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
<!-- *********************  Our customer feedback end  *******************-->
<!-- *********************  Contact us start  *******************-->
<section class="contactus" id="contactid">
    <div class="container headings text-center">
        <h1 class="text-center font-weight-bold"> Contact us </h1>
        <p class="pt-1"> We're Here to help and answer any question </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 col-1">
                <form action="/action_page.php">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter username" id="username" required autocomplete="off">
                    </div>
                <form action="/action_page.php">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" required autocomplete="off">
                    </div>
                <form action="/action_page.php">
                    <div class="form-group">
                        <input type="number" class="form-control" id="mobile" placeholder="Enter mobile number" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" id="comment"  placeholder="Your message" required autocomplete="off"> </textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- *********************  Contact us end  *******************-->
<!-- *********************  Newsletter start  *******************-->
<section class="newsletter" id="newsletterid">
    <div class="container headings text-center">
        <h1 class="text-center font-weight-bold"> SUBSSCRIBE TO OUR NEWSLETTER </h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control news-letter" placeholder="Your Email">
                    <div class="input-group-append">
                        <span class="input-group-text">@example.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        
@endsection