<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from utouchdesign.com/themes/realfun/single-property-page-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Aug 2021 07:06:49 GMT -->
   <head>
      @include('includes.head') 
   </head>
   <body>
      <!-- Preloader Start -->
      <div class="preloader">
         <div class="utf-preloader">
            <span></span>
            <span></span>
            <span></span>
         </div>
      </div>
      <!-- Preloader End -->
      <!-- Wrapper -->
      <div id="wrapper">
         <!-- Header Container -->
         @include('includes.topbar')
         <div class="clearfix"></div>
         <!-- Header Container / End --> 
         <!-- Titlebar -->
         <div class="parallax titlebar" data-background="{{asset('public/assets1/images/listing-02.jpg')}}" data-color="rgba(48, 48, 48, 1)" data-color-opacity="0.8" data-img-width="800" data-img-height="505">
            <div id="titlebar">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <h2>Property Listing Detail</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                           <ul>
                              <li><a href="index.html">Home</a></li>
                              <li>Property Listing Detail</li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- {{asset('storage/app/' . $property->primaryimage)}} -->
         <!-- Content -->
         <div class="container">
            <div class="row margin-bottom-50">
               <div class="col-md-12">
                  <!-- Slider -->
                  <div class="property-slider default"> 
                     <a href="{{asset('storage/app/'.$property->primaryimage)}}" data-background-image="{{asset('storage/app/'.$property->primaryimage)}}" class="item mfp-gallery"></a> 
                     @foreach($images as $image)
                     <a href="{{asset('public/images/'.$image->file)}}" data-background-image="{{asset('public/images/' .$image->file)}}" class="item mfp-gallery"></a> 
                     @endforeach
                  </div>
                  <!-- Slider Thumbs -->
                  <div class="property-slider-nav">
                     <div class="item"><img src="{{asset('storage/app/'.$property->primaryimage)}}" style="height:100px;width:100%" alt=""></div>
                     @foreach($images as $image)
                     <div class="item"><img src="{{asset('public/images/'. $image->file)}}" style="height:100px;width:100%" alt=""></div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <!-- Property Description -->
               <div class="col-md-9">
                  <!-- Titlebar -->
                  <div id="titlebar-dtl-item" class="property-titlebar margin-bottom-0">
                     <div class="property-title">
                        <div class="property-pricing">$ {{$property->price}}</div>
                        <h2>{{$property->title}} 
                           @if($property->property_type == 1)
                           <span class="property-badge-sale">For Sale</span>
                           @elseif($property->property_type == 2)
                           <span class="property-badge-rent">For Leased</span>
                           @else
                           <span class="property-badge-sale">Auction</span>
                           @endif
                        </h2>
                        @if( ! is_null($property->city) ||  ! is_null($property->street) )
                        <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i>{{$property->street}},
                        {{$property->city}},{{$property->state}},{{$property->zip}},{{$property->country}}</span> @endif
                     </div>
                  </div>
                  <div class="property-description">
                     <!-- Description -->
                     @if( !is_null($property->description))
                     <div class="utf-desc-headline-item">
                        <h3><i class="icon-material-outline-description"></i> Property Description</h3>
                     </div>
                     <div class="show-more">
                        <p> {!! htmlspecialchars_decode(nl2br($property->description)) !!}</p>
                        <a href="#" class="show-more-button">Show More <i class="sl sl-icon-plus"></i></a> 
                     </div>
                     @endif
                     <!-- Details -->
                     <div class="utf-desc-headline-item">
                        <h3><i class="sl sl-icon-briefcase"></i> Property Details</h3>
                     </div>
                     <ul class="property-features margin-top-0">
                        @if( !is_null($property->property_categories))      
                        <li>Property Category: <span> {{$property->propertycategories->name}}</span></li>
                        @endif
                        @if( !is_null($property->property_id))      
                        <li>Property ID: <span> {{$property->property_id}}</span></li>
                        @endif
                        @if( !is_null($property->price))         
                        <li> Total Price: <span> $ {{$property->price}}</span></li>
                        @endif
                        @if( !is_null($property->area))        
                        <li>Lot Size: <span> {{$property->area}} Sq Ft</span></li>
                        @endif
                        @if( !is_null($property->bluilding_height))        
                        <li>Property Size: <span>  {{$property->bluilding_height}} Sq Ft</span></li>
                        @endif
                        @if( !is_null($property->frontage))        
                        <li>Frontage: <span> {{$property->frontage}}</span></li>
                        @endif
                        @if( !is_null($property->year_built))       
                        <li>Year Built: <span> {{$property->year_built}}</span></li>
                        @endif
                        @if( !is_null($property->buyer_fee))     
                        <li>Buyer Fee Payable : <span> {{$property->buyer_fee}}</span></li>
                        @endif
                        @if( !is_null($property->expire_date))     
                        <li>Expiry Date: <span>{{date('d-m-Y', strtotime($property->expire_date))}} </span></li>
                        @endif
                        @if( !is_null($property->room))     
                        <li>Room/Units: <span> {{$property->room}} </span></li>
                        @endif
                        @if( !is_null($property->cap_rate))     
                        <li>Cap Rate : <span> {{$property->cap_rate}} % </span></li>
                        @endif
                        @if( !is_null($property->available_space))     
                        <li>Available Space :<span> {{$property->available_space}}  Sq Ft</span></li>
                        @endif
                        @if( !is_null($property->leased_rate))     
                        <li>Leased Rate :<span> $ {{$property->leased_rate}}  </span></li>
                        @endif
                        @if( $property->tenancy == 1) 
                        <li>Tenancy : <span>  Single </span></li>
                        @endif
                        @if( $property->tenancy == 2 ) 
                        <li>Tenancy : <span> Multiple </span></li>
                        @endif
                     </ul>
                     <ul class="property-features checkboxes margin-top-5">
                        @if(($property->new_lunch == 1))       
                        <li>New Lunch</li>
                        @endif
                        @if( ($property->lighting == 1))      
                        <li>Lighting</li>
                        @endif
                        @if( ($property->heating == 1))     
                        <li>Heating</li>
                        @endif
                        @if(($property->gas == 1) )     
                        <li>Gas</li>
                        @endif
                        @if( ($property->water == 1))     
                        <li>Water</li>
                        @endif
                     </ul>
                     <!-- Video -->
                     @if(count($property->videos) > 0)
                     <div class="utf-desc-headline-item">
                        <h3><i class="icon-feather-video"></i> Property Video</h3>
                     </div>
                     <div class="row">
                        <div class="margin-top-30"></div>
                        @foreach($videos as $video)
                        <div class="col-md-5 " >
                           <a  href="{{asset('public/images/'.$video->file)}}" target="blank">
                              <video width="300" height="300" controls>
                                 <source src="{{asset('public/images/'.$video->file)}}">
                              </video>
                           </a>
                           <div class="offset-md-1"></div>
                        </div>
                        @endforeach
                     </div>
                     @endif
                  </div>
               </div>
               <!-- Property Description / End --> 
            </div>
         </div>
         <!-- Footer -->
         <div class="margin-top-65"></div>
         @include('includes.footer')
         <!-- Footer / End --> 
         <!-- Back To Top Button -->
         <div id="backtotop"><a href="#"></a></div>
      </div>
      <!-- Wrapper / End -->
      <!-- Scripts --> 
      <script src="{{asset('public/assets1/scripts/jquery-3.3.1.min.js')}}"></script> 
      <script src="{{asset('public/assets1/scripts/bootstrap.min.js')}}"></script>
      <script src="{{asset('public/assets1/scripts/chosen.min.js')}}"></script> 
      <script src="{{asset('public/assets1/scripts/magnific-popup.min.js')}}"></script> 
      <script src="{{asset('public/assets1/scripts/owl.carousel.min.js')}}"></script> 
      <script src="{{asset('public/assets1/scripts/rangeSlider.js')}}"></script> 
      <script src="{{asset('public/assets1/scripts/sticky-kit.min.js')}}"></script> 
      <script src="{{asset('public/assets1/scripts/slick.min.js')}}"></script> 
      <script src="{{asset('public/assets1/scripts/masonry.min.js')}}"></script> 
      <script src="{{asset('public/assets1/scripts/mmenu.min.js')}}"></script> 
      <script src="{{asset('public/assets1/scripts/tooltips.min.js')}}"></script> 
      <script src="{{asset('public/assets1/scripts/typed.js')}}"></script>
      <script src="{{asset('public/assets1/scripts/custom_jquery.js')}}"></script> 
   </body>
   <!-- Mirrored from utouchdesign.com/themes/realfun/single-property-page-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Aug 2021 07:06:49 GMT -->
</html>