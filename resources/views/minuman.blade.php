<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Menu | Mister Geprek</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/geprek.jpg') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ URL::asset('css/icons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/red-color.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/yellow-color.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
</head>
<body itemscope>
 <!--  -->

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Menu</a></li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block less-spacing gray-bg top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="remove-ext">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box style2 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="popular-dish-thumb">
                                                <a href="food-detail.html" title="" itemprop="url"><img src="{{ URL::asset('images/resource/milosaurus.jpg') }}" alt="geprekijo.jpg" itemprop="image"></a>
                                                
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">Milosaurus</a></h4>
                                            
                                                <span class="price">Rp15.000,00</span>
                                                <a class="brd-rd4 " href="food-detail.html" title="Order Now" itemprop="url">Pesan</a>
                                                
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box style2 wow fadeIn" data-wow-delay="0.3s">
                                            <div class="popular-dish-thumb">
                                                <a href="food-detail.html" title="" itemprop="url"><img src="{{ URL::asset('images/resource/chocobar.jpg') }}" alt="popular-dish-img2.jpg" itemprop="image"></a>
                                                
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">Chocobar</a></h4>
                                                
                                                <span class="price">Rp15.000,00</span>
                                                <a class="brd-rd4" href="food-detail.html" title="Order Now" itemprop="url">Pesan</a>
                                                
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box style2 wow fadeIn" data-wow-delay="0.4s">
                                            <div class="popular-dish-thumb">
                                                <a href="food-detail.html" title="" itemprop="url"><img src="{{ URL::asset('images/resource/strawbronies.jpg') }}" alt="popular-dish-img3.jpg" itemprop="image"></a>
                                                
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">Strawbronies</a></h4>
                                                
                                                <span class="price">Rp.15.000,00</span>
                                                <a class="brd-rd4" href="food-detail.html" title="Order Now" itemprop="url">Pesan</a>
                                                
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                </div>
                                
                                        <h4>Pilih Opsi</h4>
                                        <button type="button" class="btn btn-secondary" onclick="location.href='{{ url('menu')}}'">Makanan</button>
                                        <br><br>
                                        <button type="button" class="btn btn-secondary" onclick="location.href='{{ url('#')}}'">Minuman</button>
                                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
    </main><!-- Main Wrapper -->

    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
</body> 


</html>