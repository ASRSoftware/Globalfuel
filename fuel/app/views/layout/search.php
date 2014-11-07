<?php echo $header ?>



<div class="container">

</div>
<div class="container">
    <div class="row">
        
        <?php echo $sidebar ?>
        <div class="col-md-8">
            <div class="breadcrumbs">
                <ol class="breadcrumb text-right">
                    <li><a href="index-2.html">Home</a></li><li class="active">About Us</li>
                </ol>
            </div>
            <section>
                <div class="title">
                   Search
                </div>
                <div class="caption">
                   
                </div>
               
            </section>
            
            
            
            <!-- BODY OF THE SEARCH   -->
            <section>
                
                <?php 
                
                for($i=0;$i<=10;$i++)
                {

                
                ?>
                
                <div class="col-md-4 col-sm-4">
                            <div class="thumbnail boxed">
                                <div class="listing-image">
                                    <span class="listing-tag important">New</span>
                                    <img src="assets/images/demo-content/listing11.jpg" alt="Listing">
                                    <div class="image-links">
                                        <div class="left">
                                            <a class="inner" href="assets/images/demo-content/listing11.jpg" data-lightbox="related-5">
                                                <i class="fa fa-camera"></i>
                                            </a>
                                        </div>
                                        <div class="right">
                                            <a class="inner" href="03-portfolio-detail.html">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="image-tags">
                                        <ul class="property-tags">
                                            <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                                            <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                                            <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="description">
                                    <h4>Miss Valley Residence<br>
                                        <small>California, USA</small></h4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <strong>Type:</strong>
                                        </div>
                                        <div class="col-xs-6">
                                            Villa
                                        </div>
                                        <div class="col-xs-6">
                                            <strong>Size:</strong>
                                        </div>
                                        <div class="col-xs-6">
                                            6 000 Sq
                                        </div>
                                        <div class="col-xs-6">
                                            <strong>Rooms:</strong>
                                        </div>
                                        <div class="col-xs-6">
                                            6 Bed, 4 Bath
                                        </div>
                                    </div>
                                    <hr>
                                                <span class="price-tag">
                                                    2 750 000 USD
                                                </span>
                                    <a href="#" class="btn btn-link " role="button">+ Show Details</a>
                                </div>
                            </div>
                        </div>
                 <?php 
                
                }
                
                ?>
            </section>
        </div>
    </div>
</div>


<div class="container">

</div>

<?php echo $footer ?>