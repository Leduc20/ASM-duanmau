<body onload="loadAnh()" class="px-2">
    <section class="max-w-full">
        <div class="md:block mx-auto md:w-[1200px]">
            <div class="md:flex justify-between mt-3 md:border-b-2 font-bold">
                <p class="text-[20px]">
                    SẢN PHẨM BÁN CHẠY
                </p>
                <!-- <p class="hidden md:block">
                    <a class="text-[#0088CC]" href="">XEM TẤT CẢ</a>
                </p> -->
            </div>
            <!--show Product -->
            <div class="flex justify-between grid grid-cols-1 gap-4 md:grid-cols-3 gap-6 mt-6">
                <?php foreach ($showProducts as $show) {
                    extract($show);
                    $img = $img_path . $image;
                    // img la ten bien lay ra anh
                    // image Day la ten cot trong database
                    echo '
                <div class="w-full max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-full p-8 rounded-t-lg" src="' . $img . '" alt="product image">
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">' . $name_pro . '</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>First star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Second star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Third star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fourth star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fifth star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="grid">
                                <div class="grid grid-cols-1">
                                    <span class="line-through text-[20px] font-bold text-gray-900 dark:text-white">' . $sale . '0VNĐ</span>
                                    <span class="text-[20px] font-bold text-gray-900 dark:text-white">' . $price . '</span>
                                </div>
                                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            ';
                }

                ?>

            </div>
        </div>
        <div class="mx-auto md:w-[1200px] mt-[55px]">
            <div class="flex justify-between mt-3 md:border-b-2 font-bold">
                <p class="text-[20px]">
                    ĐANG GIẢM GIÁ
                </p>
                <!-- <p class="hidden md:block">
                    <a class="text-[#0088CC]" href="">XEM TẤT CẢ</a>
                </p> -->
            </div>
            <!-- <div class="flex justify-between grid grid-cols-1 gap-4 md:grid-cols-4 gap-8 mt-6">
                <div class="w-full max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div>
                        <a href="#">
                            <img class="w-full p-8 rounded-t-lg" src="../content/image/iphone 8 plus.jpg" alt="product image">
                        </a>
                    </div>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>First star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Second star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Third star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fourth star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fifth star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="grid">
                                <div class="grid grid-cols-1">
                                    <span class="line-through text-[20px] font-bold text-gray-900 dark:text-white">$13.000.000VNĐ</span>
                                    <span class="text-[20px] font-bold text-gray-900 dark:text-white">$5999999999</span>
                                </div>
                                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div>
                        <a href="#">
                            <img class="w-full p-8 rounded-t-lg" src="../upload/goods_425974_sub11.jpg" alt="product image">
                        </a>
                    </div>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>First star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Second star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Third star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fourth star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fifth star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="grid">
                                <div class="grid grid-cols-1">
                                    <span class="line-through text-[20px] font-bold text-gray-900 dark:text-white">$13.000.000VNĐ</span>
                                    <span class="text-[20px] font-bold text-gray-900 dark:text-white">$5999999999</span>
                                </div>
                                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="flex justify-between grid grid-cols-1 gap-4 md:grid-cols-4 gap-8 mt-6">
                <div class="Myhover border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px]" src="image/iphone 13 pro.jpeg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Iphone 13 Pro
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">14.000.000 VNĐ</label><label class=" text-red-600" for="">13.000.000 VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="detail.html">Mua Ngay</a>
                    </div>
                    <div class="hoverproduct">
                        <a href="">Xem nhanh</a>
                    </div>
                </div>
                <div class="border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px]" src="image/iphone 8 plus.jpg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Iphone 8 Plus
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">8.000.000 VNĐ</label><label class=" text-red-600" for="">6.000.000 VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="">Mua Ngay</a>
                    </div>
                </div>
                <div class="border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px]" src="image/iphone xsmax.jpg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Iphone XS Max
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">16.000.000 VNĐ</label><label class="text-red-600" for="">15.000.000 VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="">Mua Ngay</a>
                    </div>
                </div>
                <div class="border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px] h-[241px]" src="image/rog phone 5 pro.jpg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Rog Phone 5 Pro
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">16.000.000 VNĐ</label><label class=" text-red-600" for="">15.000.000 VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="">Mua Ngay</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-full bg-gradient-to-bl from-cyan-500 to-blue-500 mt-10 py-[70px]">
            <div class="max-w-[1200px] mx-auto">
                <div class="text-center text-white font-bold">
                    <div class="">
                        <p class="text-[55px]">GIỜ VÀNG GIÁ SỐC</p>
                        <p class="text-[30px]">
                            GIẢM TỚI 50% TẤT CẢ CÁC SẢN PHẨM ĐIỆN THOẠI
                        </p>
                        <div class="mt-[25px]">
                            <a class="cart border-[1px] p-3 border-sky-500 hover:bg-sky-800" href=""><i class="fa-regular fa-heart"></i>MUA NGAY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto md:w-[1200px]">
            <div class="flex justify-between mt-3 md:border-b-2 font-bold">
                <p class="text-[20px]">
                    CÁC SẢN PHẨM LIÊN QUAN
                </p>
                <p class="hidden md:block">
                    <a class="text-[#0088CC]" href="">XEM TẤT CẢ</a>
                </p>
            </div>

            <div class="md:flex justify-between grid grid-cols-1gap-4md:grid-cols-4 gap-8 mt-6">
                <div class="border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px]" src="image/iphone 13 pro.jpeg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Iphone 13 Pro
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">14.000.000 VNĐ</label><label class=" text-red-600" for="">13.000.000 VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="detail.html">Mua Ngay</a>
                    </div>
                </div>
                <div class="border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px]" src="image/iphone 8 plus.jpg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Iphone 8 Plus
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">8.000.000 VNĐ</label><label class=" text-red-600" for="">6.000.000 VNĐ</label>
                    </div>
                    <div class="border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="detail.html">Mua Ngay</a>
                    </div>
                </div>
                <div class="border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px]" src="image/iphone xsmax.jpg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Iphone XS Max
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">16.000.000 VNĐ</label><label class="text-red-600" for="">15.000.000 VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="">Mua Ngay</a>
                    </div>
                </div>
                <div class="border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px] h-[241px]" src="image/rog phone 5 pro.jpg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Rog Phone 5 Pro
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">16.000.000 VNĐ</label><label class="text-red-600" for="">15.000.000 VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="">Mua Ngay</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="mx-auto md:w-[1200px]">
            <div class="flex justify-between mt-3 md:border-b-2 font-bold">
                <p class="text-[20px]">
                   TOP YÊU THÍCH
                </p>
                <p class="hidden md:block">
                    <a class="text-[#0088CC]" href="">XEM TẤT CẢ</a>
                </p>
            </div>

            <div class="md:flex justify-between grid grid-cols-1gap-4md:grid-cols-4 gap-8 mt-6">
                <div class="border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px]" src="image/iphone 13 pro.jpeg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Iphone 13 Pro
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">14.000.000 VNĐ</label><label class=" text-red-600" for="">13.000.000 VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="detail.html">Mua Ngay</a>
                    </div>
                </div>
            
            </div>
            <div>
            <h1 class="text-center"> Product Slider</h1>
<ul>
  <li>Auto Slide</li>
  <li>Stop On Hover</li>
  <li>Slide One Item</li>
</ul>
<div class="container">
  <div class="row" id="slider-text">
    <div class="col-md-6" >
      <h2>NEW COLLECTION</h2>
    </div>
  </div>
</div>

<!-- Item slider-->
<div class="container-fluid">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">

          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://images.unsplash.com/photo-1539840093138-9b3e230e5206?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=765a2eb222b1851840a4a157780fb487&auto=format&fit=crop&w=1534&q=80" class="img-responsive center-block"></a>
              <h4 class="text-center">MAYORAL SUKNJA</h4>
              <h5 class="text-center">200,00 TK</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://images.unsplash.com/photo-1524010349062-860def6649c3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e725946a3f177dce83a705d4b12019c2&auto=format&fit=crop&w=500&q=60" class="img-responsive center-block"></a>
              <h4 class="text-center">MAYORAL KOŠULJA</h4>
              <h5 class="text-center">800 TK</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://images.unsplash.com/photo-1511556820780-d912e42b4980?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=04aebe9a22884efa1a5f61e434215597&auto=format&fit=crop&w=500&q=60" class="img-responsive center-block"></a>
              <span class="badge">10%</span>
              <h4 class="text-center">PANTALONE TERI 2</h4>
              <h5 class="text-center">4000,00 TK</h5>
              <h6 class="text-center">5000,00 TK</h6>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://images.unsplash.com/photo-1531925470851-1b5896b67dcd?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=91fe0ca1b5d72338a8aac04935b52148&auto=format&fit=crop&w=500&q=60" class="img-responsive center-block"></a>
              <h4 class="text-center">CVETNA HALJINA</h4>
              <h5 class="text-center">4000,00 RSD</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://images.unsplash.com/photo-1516961642265-531546e84af2?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=74065eec3c2f6a8284bbe30402432f1d&auto=format&fit=crop&w=500&q=60" class="img-responsive center-block"></a>
              <h4 class="text-center">MAJICA FOTO</h4>
              <h5 class="text-center">40,00 TK</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://images.unsplash.com/photo-1532086853747-99450c17fa2e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=61a42a11f627b0d21d0df757d9b8fe23&auto=format&fit=crop&w=500&q=60" class="img-responsive center-block"></a>
              <h4 class="text-center">MAJICA MAYORAL</h4>
              <h5 class="text-center">100,00 TK</h5>
            </div>
          </div>

        </div>

        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right" class="img-responsive"></a>
      </div>
      </div>
    </div>
  </div>
</div>
            </div>
        </div>
        </div>
        <!-- footer -->
        <!-- bg-gradient-to-tr from-cyan-500 to-blue-500 -->



    </section>

</body>