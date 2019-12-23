﻿  

  


  <?php $__env->startSection('content'); ?>
  
  
  
  
    <!-- Main Container -->
    <div class="main-container col1-layout">
      <div class="container">
        <div class="row">
          <div class="col-main">
            <div class="product-view-area">
              <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
                <div class="icon-sale-label sale-left">Sale</div>
                <div class="large-image">
                  <a href="source/images/products-images/<?php echo e($detailProduct->image); ?>" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20">
                    <img class="zoom-img" src="source/images/products-images/<?php echo e($detailProduct->image); ?>" alt="products"> </a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">

                <div class="product-name">
                  <h1><?php echo e($detailProduct->name); ?></h1>
                </div>
                <div class="price-box">
                  <p class="special-price">
                    <span class="price-label">Special Price</span>
                    <span class="price"> 
                      
                      <?php if($detailProduct->promotion_price): ?>
                          <?php echo e(trim(number_format($detailProduct->promotion_price,0,',','.').'₫')); ?>                                                  
                      <?php else: ?>
                          <?php echo e(number_format($detailProduct->price,0,',','.').'₫'); ?>

                      <?php endif; ?>
                    </span>
                  </p>
                  <p class="old-price">
                    <span class="price-label">Regular Price:</span>
                    <span class="price">
                      <?php if($detailProduct->promotion_price): ?>
                          <?php echo e(number_format($detailProduct->price,0,',','.').'₫'); ?>                                                  
                      <?php endif; ?>  
                    </span>
                  </p>
                </div>

                <div class="short-description">
                  <h2>Quick Overview</h2>
                  <div>
                    <?php echo e($detailProduct->detail); ?>

                  </div>

                </div>

                <div class="product-variation">
                  <form action="#" method="post">
                    <div class="cart-plus-minus">
                      <label for="qty">Quantity:</label>
                      <div class="numbers-row">
                        <div   class="dec qtybutton">
                          <i class="fa fa-minus">&nbsp;</i>
                        </div>
                        <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                        <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                          class="inc qtybutton">
                          <i class="fa fa-plus">&nbsp;</i>
                        </div>
                      </div>
                    </div>
                    <button class="button pro-add-to-cart" id ="<?php echo e($detailProduct->id); ?>" title="Add to Cart" type="button">
                      <span>
                        <i class="fa fa-shopping-cart"></i> Add to Cart</span>
                    </button>
                  </form>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Main Container End -->
    <!-- Related Product Slider -->
    <section class="upsell-product-area">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">

            <div class="page-header">
              <h2>Related Products</h2>
            </div>
            <div class="slider-items-products">
              <div id="upsell-product-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                    <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                      <div class="product-item">
                        <div class="item-inner fadeInUp">
                          <div class="product-thumbnail">

                            <?php if($prod->promotion_price): ?>
                              <div class="icon-sale-label sale-left">Sale</div>
                            <?php endif; ?>
                            <?php if($prod->new): ?>
                              <div class="icon-new-label new-right">New</div>
                            <?php endif; ?>                            

                            <div class="pr-img-area">
                              <a title="Ipsums Dolors Untra" href="apple.store.vn/<?php echo e($prod->url); ?>.html">
                                <img class="first-img" src="source/images/products-images/<?php echo e($prod->image); ?>" alt="">
                                <img class="hover-img" src="source/images/products-images/<?php echo e($prod->image); ?>" alt="">
                              </a>
                              <button type="button" class="add-to-cart-mt" id="<?php echo e($prod->id); ?>">
                                <i class="fa fa-shopping-cart"></i>
                                <span> Add to Cart</span>
                              </button>
                            </div>

                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a title="Ipsums Dolors Untra" href="apple.store.vn/<?php echo e($prod->url); ?>.html"><?php echo e($prod->name); ?> </a>
                              </div>
                              <div class="item-content">

                                <div class="item-price">
                                  <div class="price-box">
                                    <span class="regular-price">
                                          <div class="price">
                                                <?php if($prod->promotion_price): ?>
                                                  <?php echo e(trim(number_format($prod->promotion_price,0,',','.').'₫')); ?>                                                  
                                                <?php else: ?>
                                                    <?php echo e(number_format($prod->price,0,',','.').'₫'); ?>

                                                <?php endif; ?>
                                          </div>
                                          <div class="hash-old-price ">
                                                <?php if($prod->promotion_price): ?>
                                                  <?php echo e(number_format($prod->price,0,',','.').'₫'); ?>                                                  
                                                <?php endif; ?>
                                          </div>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- Related Product Slider End -->

  <?php $__env->stopSection(); ?>


  
<?php echo $__env->make('layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP PLACE\htdocs\Laravel_Shopping\laraShopPage\resources\views/pages/detail.blade.php ENDPATH**/ ?>