@extends('front/layout')
@section('container')
<section id="aa-slider">
   <div class="aa-slider-area">
      <div id="sequence" class="seq">
         <div class="seq-screen">
            <ul class="seq-canvas">
               <!-- single slide item -->
               @foreach($home_banner as $list)
               <li>
                  <div class="seq-model">
                     <img data-seq src="{{asset('storage/media/banner/'.$list->image)}}" />
                  </div>
                  @if($list->btn_text!='')
                  <div class="seq-title">
                     <a data-seq target="_blank" href="{{$list->btn_link}}" class="aa-shop-now-btn aa-secondary-btn">{{$list->btn_text}}</a>
                  </div>
                  @endif
               </li>
               @endforeach
            </ul>
         </div>
         <!-- slider navigation btn -->
         <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
            <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
            <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
         </fieldset>
      </div>
   </div>
</section>
<!-- / slider -->
<!-- Start Promo section -->
<section id="aa-promo">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="aa-promo-area">
               <div class="row">
                  <!-- promo left --> 
                  @foreach($home_categories as $list)
                  <div class="col-md-6 no-padding">
                     <div class="aa-promo-right">
                        <div class="aa-promo-banner">
                           <img src="{{asset('storage/media/category/'.$list->category_image)}}" alt="img">                    
                           <div class="aa-prom-content">
                              <h4><a href="{{url('category/.$list->category_slug')}}">{{$list->category_name}}</a></h4>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- / Promo section -->
<!-- Products section -->
<section id="aa-product">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="row">
               <div class="aa-product-area">
                  <div class="aa-product-inner">
                     <ul class="nav nav-tabs aa-products-tab">
                        @foreach($home_categories as $list)
                        <li><a href="#cat{{$list->id}}" data-toggle="tab">{{$list->category_name}}</a></li>
                        @endforeach
                     </ul>
                     <div class="tab-content">
                        @php
                        $loop_count=1;
                        @endphp
                        @foreach($home_categories as $list)
                        @php
                        $cat_class='';
                        if($loop_count==1){
                        $cat_class='in active';
                        $loop_count++;
                        }
                        @endphp
                        <div class="tab-pane fade {{$cat_class}}" id="cat{{$list->id}}">
                           <ul class="aa-product-catg">
                           @if(isset($home_categories_product[$list->id][0]))

                              @foreach($home_categories_product[$list->id] as $productArr)

                              print_r($home_categories_product[$list->id]);
                              <li>
                                 <figure>
                                    <a class="aa-product-img" href="{{url('product/'.$productArr->slug)}}"><img src="{{asset('storage/media/'.$productArr->image)}}" alt="{{$productArr->name}}"></a>
                                    <a class="aa-add-card-btn"href="{{url('product/'.$productArr->slug)}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                    <figcaption>
                                       <h4 class="aa-product-title"><a href="{{url('product/'.$productArr->slug)}}">{{$productArr->name}}</a></h4>
                                    </figcaption>
                                 </figure>
                              </li>
                              @endforeach
                              @else

                       <li>
                        <figure>
                           no data found
                        </figure>    
                       </li>

                             @endif
                           </ul>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- / Products section -->
<!-- banner section -->
<section id="aa-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="row">
               <div class="aa-banner-area">
                  <a href="#"><img src="{{asset('front_assets/img/fashion-banner.jpg')}}" alt="fashion banner img"></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- popular section -->
<section id="aa-popular-category">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="row">
               <div class="aa-popular-category-area">
                  <!-- start prduct navigation -->
                  <ul class="nav nav-tabs aa-products-tab">
                     <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                     <li><a href="#featured" data-toggle="tab">Featured</a></li>
                     <li><a href="#latest" data-toggle="tab">Latest</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                     <!-- Start men popular category -->
                     <div class="tab-pane fade in active" id="popular">
                        <ul class="aa-product-catg aa-popular-slider">
                           <!-- start single product item -->
                           <li>
                              <figure>
                                 <a class="aa-product-img" href="#"><img src="{{asset('front_assets/img/man/polo-shirt-2.png')}}" alt="polo shirt img"></a>
                                 <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                 <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                    <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                 </figcaption>
                              </figure>
                              <!-- product badge -->
                              <!-- start single product item -->
                        </ul>
                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                     </div>
                     <!-- / popular product category -->
                     <!-- start featured product category -->
                     <div class="tab-pane fade" id="featured">
                        <ul class="aa-product-catg aa-featured-slider">
                           <!-- start single product item -->
                           <li>
                              <figure>
                                 <a class="aa-product-img" href="#"><img src="{{asset('front_assets/img/man/polo-shirt-2.png')}}" alt="polo shirt img"></a>
                                 <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                 <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                    <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                 </figcaption>
                              </figure>
                              <!-- product badge -->
                              <!-- start single product item -->
                        </ul>
                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                     </div>
                     <!-- / featured product category -->
                     <!-- start latest product category -->
                     <div class="tab-pane fade" id="latest">
                        <ul class="aa-product-catg aa-latest-slider">
                           <!-- start single product item -->
                           <li>
                              <figure>
                                 <a class="aa-product-img" href="#"><img src="{{asset('front_assets/img/man/polo-shirt-2.png')}}" alt="polo shirt img"></a>
                                 <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                 <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                    <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                 </figcaption>
                              </figure>
                              <!-- product badge -->
                              <!-- start single product item -->
                           </li>
                        </ul>
                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                     </div>
                     <!-- / latest product category -->              
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- / popular section -->
<!-- Support section -->
<!-- <section id="aa-support">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-support-area"> -->
<!-- single support -->
<!-- <div class="col-md-4 col-sm-4 col-xs-12">
   <div class="aa-support-single">
     <span class="fa fa-truck"></span>
     <h4>FREE SHIPPING</h4>
     <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
   </div>
   </div> -->
<!-- single support -->
<!-- <div class="col-md-4 col-sm-4 col-xs-12">
   <div class="aa-support-single">
     <span class="fa fa-clock-o"></span>
     <h4>30 DAYS MONEY BACK</h4>
     <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
   </div>
   </div> -->
<!-- single support -->
<!-- <div class="col-md-4 col-sm-4 col-xs-12">
   <div class="aa-support-single">
     <span class="fa fa-phone"></span>
     <h4>SUPPORT 24/7</h4>
     <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
   </div>
   </div>
   </div>
   </div>
   </div>
   </div>
   </section> -->
<!-- / Support section -->
<!-- Testimonial -->
<section id="aa-testimonial">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="aa-testimonial-area">
               <ul class="aa-testimonial-slider">
                  <!-- single slide -->
                  <li>
                     <div class="aa-testimonial-single">
                        <img class="aa-testimonial-img" src="img/testimonial-img-2.jpg" alt="testimonial img">
                        <span class="fa fa-quote-left aa-testimonial-quote"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                        <div class="aa-testimonial-info">
                           <p>Allison</p>
                           <span>Designer</span>
                           <a href="#">Dribble.com</a>
                        </div>
                     </div>
                  </li>
                  <!-- single slide -->
                  <li>
                     <div class="aa-testimonial-single">
                        <img class="aa-testimonial-img" src="img/testimonial-img-1.jpg" alt="testimonial img">
                        <span class="fa fa-quote-left aa-testimonial-quote"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                        <div class="aa-testimonial-info">
                           <p>KEVIN MEYER</p>
                           <span>CEO</span>
                           <a href="#">Alphabet</a>
                        </div>
                     </div>
                  </li>
                  <!-- single slide -->
                  <li>
                     <div class="aa-testimonial-single">
                        <img class="aa-testimonial-img" src="img/testimonial-img-3.jpg" alt="testimonial img">
                        <span class="fa fa-quote-left aa-testimonial-quote"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                        <div class="aa-testimonial-info">
                           <p>Luner</p>
                           <span>COO</span>
                           <a href="#">Kinatic Solution</a>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- / Testimonial -->
<!-- Latest Blog -->
<section id="aa-latest-blog">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="aa-latest-blog-area">
               <h2>LATEST BLOG</h2>
               <div class="row">
                  <!-- single latest blog -->
                  <div class="col-md-4 col-sm-4">
                     <div class="aa-latest-blog-single">
                        <figure class="aa-blog-img">
                           <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>  
                           <figcaption class="aa-blog-img-caption">
                              <span href="#"><i class="fa fa-eye"></i>5K</span>
                              <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                              <a href="#"><i class="fa fa-comment-o"></i>20</a>
                              <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                           </figcaption>
                        </figure>
                        <div class="aa-blog-info">
                           <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p>
                           <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                        </div>
                     </div>
                  </div>
                  <!-- single latest blog -->
                  <div class="col-md-4 col-sm-4">
                     <div class="aa-latest-blog-single">
                        <figure class="aa-blog-img">
                           <a href="#"><img src="img/promo-banner-3.jpg" alt="img"></a>  
                           <figcaption class="aa-blog-img-caption">
                              <span href="#"><i class="fa fa-eye"></i>5K</span>
                              <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                              <a href="#"><i class="fa fa-comment-o"></i>20</a>
                              <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                           </figcaption>
                        </figure>
                        <div class="aa-blog-info">
                           <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p>
                           <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>         
                        </div>
                     </div>
                  </div>
                  <!-- single latest blog -->
                  <div class="col-md-4 col-sm-4">
                     <div class="aa-latest-blog-single">
                        <figure class="aa-blog-img">
                           <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>  
                           <figcaption class="aa-blog-img-caption">
                              <span href="#"><i class="fa fa-eye"></i>5K</span>
                              <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                              <a href="#"><i class="fa fa-comment-o"></i>20</a>
                              <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                           </figcaption>
                        </figure>
                        <div class="aa-blog-info">
                           <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p>
                           <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- / Latest Blog -->
<!-- Client Brand -->
<section id="aa-client-brand">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="aa-client-brand-area">
               <ul class="aa-client-brand-slider">
                  <li><a href="#"><img src="{{asset('front_assets/img/client-brand-wordpress.png')}}" alt="wordPress img"></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection