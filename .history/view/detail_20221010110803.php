<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- slider product -->
  <!--page-icon------------>
  <link rel="shortcut icon" href="images/logo.png">
  <!--stylesheet------------->
  <link rel="stylesheet" type="text/css" href="../slide pro/css/sliepro.css">
  <!--light-slider.css------------->
  <link rel="stylesheet" type="text/css" href="../slide pro/css/lightslider.css">
  <!--Jquery-------------------->
  <script type="text/javascript" src="../slide pro/js/jquery.js"></script>
  <!--lightslider.js--------------->
  <script type="text/javascript" src="../slide pro/js/lightslider.js"></script>
</head>

<body>
  <?php
  if (is_array($sp)) {

    extract($sp);
    $img = $img_path . $image;
    echo '<div class="text-gray-700 body-font overflow-hidden bg-white">
      <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
          <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="' . $img . '">
          <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
            <h2 class="text-sm title-font text-gray-500 tracking-widest"></h2>
            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">' . $name_pro . '</h1>
            <div class="flex mb-4">
              <span class="flex items-center">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <span class="text-gray-600 ml-3">4 Re</span>
              </span>
              <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                <a class="text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
              </span>
            </div>
            <p class="leading-relaxed">' . $detail . '.</p>
            <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
              <div class="flex">
                <span class="mr-3">Color</span>
                <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
                <button class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
                <button class="border-2 border-gray-300 ml-1 bg-red-500 rounded-full w-6 h-6 focus:outline-none"></button>
              </div>
              <div class="flex ml-6 items-center">
                <span class="mr-3">Size</span>
                <div class="relative">
                  <select class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10">
                    <option>SM</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                  </select>
                  <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M6 9l6 6 6-6"></path>
                    </svg>
                  </span>
                </div>
              </div>
            </div>
            <div class="flex">
              <span class="title-font font-medium text-2xl text-gray-900">$' . $price . '</span>
              <button class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Mua Ngay</button>
              <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>

      </div>
      
      
      ';
  }
  ?>

  <?php
  echo '<div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 mb-4 max-w-[1200px]">
  <form class="w-full bg-white rounded-lg px-4 pt-2">
     <div class="flex flex-wrap -mx-3 mb-6">
        <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Viết bình luận mới</h2>
        <div class="w-full md:w-full px-3 mb-2 mt-2">
           <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder="Bình luận...." required></textarea>
        </div>
        <div class="w-full md:w-full flex items-start md:w-full px-3">
           <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
              <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>
           </div>
           <div class="-mr-1">
              <input type="submit" class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" value="Bình luận">
           </div>
        </div>
     </form>
  </div>
</div>';
  ?>

  <div class="slider">
    <ul id="autoWidth" class="cS-hidden">
      <!--1------------------------------------>
      <?php 
      foreach ($product_like as $show) {
        extract($show);
        $linksp="index.php?act=detail&id_hh".$id_hh;
        echo '
        <li class="item-a">
        <!--box-slider--------------->
        <div class="box">
          <!--img-box---------->
          
          <!--detail-box--------->
          <div class="detail-box">
            <!--type-------->
            <div class="type">
              <a href="#">'.$name_pro.'</a>
              <span>Noe Arrival</span>
            </div>
            <!--price-------->
            <a href="#" class="price">$23</a>

          </div>

        </div>
      </li>
        ';

      }
      ?>
      
      <div class="slide-img">
            <img alt="1" src=""> 
            <!--overlayer---------->
            <div class="overlay">
              <!--buy-btn------>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>
</div>

</body>

</html>
<script type="text/javascript" src="../slide pro/js/script.js"></script>
