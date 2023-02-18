<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/glider.min.css')}}"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Doodhnath</title>
</head>
<body>
    <header>
        <nav data-aos="fade-up">
           <div class="brand-logo">
              <img src="{{asset('asset/logo_image.png')}}" alt="">
           </div>
           <div class="brand-nav">
                <ul>
                    <li>Home</li>
                    <li>About Us</li>
                    <li>Products</li>
                    <li>Contact Us</li>
                </ul> 
           </div>
        </nav>

        <div class="wrapper" >
            <div class="brand-content">
                <button aria-label="Previous" class="brand-prev"><a class="category-btn-left"><i class="fa-solid fa-circle-chevron-left"></i></a></button>
                    <div class="brand-slider">
                        @foreach ($banner as $item)
                            <div class="brand-slider-item">
                                <div class="brand-description brand-item" data-aos="fade-left">
                                    <h1>{{$item->heading}}</h1>
                                    <p>{{$item->content}}</p>
                                    <div class="brand-btn brand-item">
                                    <button class="btn">Contact Us</button>
                                    </div>
                                </div>
                                <div class="brand-image" data-aos="fade-left">
                                    <img src="{{asset('uploads/'.$item->banner_image)}}" alt="">
                                </div>
                            </div>
                        @endforeach
                       
                    </div>
                <button aria-label="Next" class="brand-next"><a class="category-btn-right"><i class="fa-solid fa-circle-chevron-right"></i></a></button>
            </div>
        </div>
    </header>

    <section id="location" data-aos="fade-up">
       <div class="wrapper">
            <div class="location-row">
                <div class="location-item">
                    <div class="location-title">
                        <h4>Location</h4>
                        <span>{{$location->location_name}}</span>
                    </div>
                </div>
                <div class="location-item">
                    <div class="location-title">
                        <h4>Service Time</h4>
                        <span>{{$location->service_time}}</span>
                    </div>
                </div>
                <div class="location-item">
                    <div class="location-title">
                        <h4>Margin</h4>
                        <span>{{$location->margin}}</span>
                    </div>
                </div>
                <div class="location-item">
                    <div class="location-title">
                        <h4>Quantity</h4>
                        <span>{{$location->quantity}}</span>
                    </div>
                </div>
                
            </div>
       </div>
    </section>

    <section class="upcoming-product" data-aos="fade-up">
        <div class="wrapper">
            <div class="product-header">
                <div class="product-content">
                    <h2>Upcoming Product</h2>
                    <p>New latest product comming</p>
                </div>
                <div class="product-arrow">
                    <button aria-label="Previous" class="product-prev"><a class="product-btn-left"><i class="fa-solid fa-circle-chevron-left"></i></a></button>
                    <button aria-label="Next" class="product-next"><a class="product-btn-right"><i class="fa-solid fa-circle-chevron-right"></i></a></button>
                </div>
            </div>
            <div class="product-row">
                 <div class="product-item product-first">
                     <div class="product-image">
                        <img src="asset/Thumb_Cinn_Bauble.png" alt="">
                        <div class="product-discount discount-first">
                            <img src="asset/discount_tick.png" alt="">
                        </div>
                     </div>
                     <div class="product-description">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing 
                            and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the
                        </p>
                        <span>Read Me<a><i class="fa-solid fa-chevron-right"></i></a></span>
                     </div>
                 </div>
                 <div class="product-item product-second">
                    <div class="product-image">
                        <img src="asset/Thumb_Ginger_Bauble.png" alt="">
                    </div>
                    <div class="product-discount discount-second">
                        <img src="asset/discount_tick.png" alt="">
                    </div>
                    <div class="product-description">
                       <p>
                           Lorem Ipsum is simply dummy text of the printing 
                           and typesetting industry. Lorem Ipsum has been the
                           industry's standard dummy text ever since the
                       </p>
                       <span>Read Me<a><i class="fa-solid fa-chevron-right"></i></a></span>
                    </div>
                </div>
                <div class="product-item product-third">
                    <div class="product-image">
                       <img src="asset/Thumb_Santa_Bauble.png" alt="">
                    </div>
                    <div class="product-discount discount-third">
                        <img src="asset/discount_tick.png" alt="">
                    </div>
                    <div class="product-description">
                       <p>
                           Lorem Ipsum is simply dummy text of the printing 
                           and typesetting industry. Lorem Ipsum has been the
                           industry's standard dummy text ever since the
                       </p>
                       <span>Read Me<a><i class="fa-solid fa-chevron-right"></i></a></span>
                    </div>
                </div>
                <div class="product-item product-fourth">
                    <div class="product-image">
                       <img src="asset/Thumb_Ginger_Bauble.png" alt="">
                    </div>
                    <div class="product-discount discount-fourth">
                        <img src="asset/discount_tick.png" alt="">
                    </div>
                    <div class="product-description">
                       <p>
                           Lorem Ipsum is simply dummy text of the printing 
                           and typesetting industry. Lorem Ipsum has been the
                           industry's standard dummy text ever since the
                       </p>
                       <span>Read Me<a><i class="fa-solid fa-chevron-right"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" data-aos="fade-up">
        <div class="wrapper">
            <div class="blog-content">
                <h2>Gallary</h2>
                <p>Our latest events</p>
            </div>
            <div class="blog-row">
                <div class="blog-item">
                    <img src="asset/blog_image_1.jpg" alt="">
                </div>
                <div class="blog-item">
                    <img src="asset/blog_image_3.jpg" alt="">
                </div>
                <div class="blog-item">
                    <img src="asset/blog_image_4.jpeg" alt="">
                </div>
                <div class="blog-item">
                    <img src="asset/blog_image_5.jpg" alt="">
                </div>
                <div class="blog-item">
                    <img src="asset/blog_image_1.jpg" alt="">
                </div>
                <div class="blog-item">
                    <img src="asset/blog_image_3.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" data-aos="fade-up">
       <div class="wrapper">
            <div class="testimonial-header">
                <div class="testimonial-content">
                    <h2>Testimonials</h2>
                    <p>What Our Customer Think</p>
                </div>
                <div class="testimonial-arrow">
                    <button aria-label="Previous" class="testimonial-prev"><a class="testimonial-btn-left"><i class="fa-solid fa-circle-chevron-left"></i></a></button>
                    <button aria-label="Next" class="tesimonials-next"><a class="tesimonial-btn-right"><i class="fa-solid fa-circle-chevron-right"></i></a></button>
                </div>
            </div>
           
            <div class="testimonials-row">
                <div class="testimonial-item tesimonials-first">
                    <img src="asset/gitesh_img.png" alt="">
                    <div class="testimonial-description">
                        <p>" Lorem Ipsum is simply dummy text of the printing 
                            and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and 
                            scrambled it to make a type specimen book "
                        </p>
                        <h4>-Niraj</h4>
                    </div>
                </div>
                <div class="testimonial-item tesimonials-second">
                    <img src="asset/niraj_img.png" alt="">
                    <div class="testimonial-description">
                        <p>" Lorem Ipsum is simply dummy text of the printing 
                            and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and 
                            scrambled it to make a type specimen book "
                        </p>
                        <h4>-Kunal</h4>
                    </div>
                </div>
                <div class="testimonial-item tesimonials-third">
                    <img src="asset/rohit_img.png" alt="">
                    <div class="testimonial-description">
                        <p>" Lorem Ipsum is simply dummy text of the printing 
                            and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and 
                            scrambled it to make a type specimen book "
                        </p>
                        <h4>-Rahul</h4>
                    </div>
                </div>
                <div class="testimonial-item tesimonials-fourth">
                    <img src="asset/gitesh_img.png" alt="">
                    <div class="testimonial-description">
                        <p>" Lorem Ipsum is simply dummy text of the printing 
                            and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and 
                            scrambled it to make a type specimen book "
                        </p>
                        <h4>-Niraj</h4>
                    </div>
                </div>
            </div>
       </div>
    </section>

    <section id="about-us">
        <div class="wrapper">
            <div class="about-body">
                <div class="about-content">
                    <h2>Contact Us</h2>
                    <p>Please fill this form in a decence manner</p>
                </div>
                <div class="input-div">
                    <div class="about-input">
                        <label for="">Full Name*</label><br>
                        <input type="text" placeholder="Enter the Full Name">
                    </div>
                    <div class="about-input">
                        <label for="">Email*</label><br>
                        <input type="text" placeholder="Enter the email">
                    </div>
                    <div class="about-input">
                        <label for="">Message*</label><br>
                        <input type="text" placeholder="Enter the message">
                    </div>
                    <div class="about-input">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" data-aos="fade-up">
        <div class="wrapper">
            <div class="footer-container">
                <div class="footer-logo">
                    <img src="{{asset('asset/logo_image.png')}}"/>
                    <p class="footer-p">Lorem Ipsum is simply dummy 
                        text of the printing and typesetting 
                        industry. Lorem Ipsum has been the 
                        industry's standard dummy 
                        text ever since 
                        the 1500s "
                    </p>
                </div>
                <div class="foooter-compony">
                    <p class="footer-p">Company</p>
                    <ul>
                        <li>Services</li>
                        <li>Account</li>
                        <li>Sitemap</li>
                        <li>About Us</li>
                    </ul>
                </div>
                <div class="foooter-support">
                
                    <p class="footer-p">Support Us</p>
                   <ul>
                     <li>Product</li>
                     <li>Term Policy</li>
                     <li>Social Media</li>
                     <li>Pricing</li>
                   </ul>
                 
                </div>
                <div class="foooter-contact">
                    <p class="footer-p">Contact Us</p>

                    <div class="footer-mobile">
                        <div class="location-mobile">
                            <a><i class="fa-solid fa-location-dot"></i></a>
                            <p class="contact-p">
                                A/20, Azad Nagar, 
                                Mahavir Nagar,
                                Near Shri Narayana
                                Kids Academy,
                                Raipur, Chhattisgarh
                                492001
                            </p>
                        </div>
                        <div class="contact-mobile">
                            <a><i class="fa-solid fa-id-badge"></i></a>
                            <p class="contact-p">+91 7714049827</p>
                        </div>
                    </div>

                    <div class="location">
                        <a><i class="fa-solid fa-location-dot"></i></a>
                        <p class="contact-p">
                            A/20, Azad Nagar,<br> 
                            Mahavir Nagar,<br> 
                            Near Shri Narayana<br>
                            Kids Academy,<br>
                            Raipur, Chhattisgarh<br> 
                            492001
                        </p>
                    </div>

                    <div class="contact">
                        <a><i class="fa-solid fa-id-badge"></i></a>
                        <p class="contact-p">+91 7714049827</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer-copyright">
                <h5>Copyright © Doodhnath</h5>
                <h5 class="footer-digikraft">Powered By Dew Brothers</h5>
            </div>
           
        </div>
    </footer>

    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/glider.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
          AOS.init
            ({
              offet:300,
              duration: 1000,
            });
            new Glider(document.querySelector('.brand-slider'), 
           {
             slidesToScroll: 1,
             slidesToShow: 1,
             draggable: true,
             
             arrows: 
             {
               prev: '.brand-prev',
               next: '.brand-next'
             },
            
            
           });

           new Glider(document.querySelector('.testimonials-row'), 
           {
             slidesToScroll: 1,
             slidesToShow: 1,
             draggable: true,
             dots: '.dots',
             arrows: 
             {
               prev: '.testimonial-prev',
               next: '.tesimonials-next'
             },
             responsive:
               [
               {
                  breakpoint: 700,
                  settings: 
                   {
                      // Set to `auto` and provide item width to adjust to viewport
                      slidesToShow: 3,
                      slidesToScroll: 1,
                      itemWidth: 250,
                   }
                }
               ]
           });

           new Glider(document.querySelector('.product-row'), 
           {
             slidesToScroll: 1,
             slidesToShow: 1,
             draggable: true,
             scrollLock: true,
             arrows: 
             {
               prev: '.product-prev',
               next: '.product-next'
             },
             responsive:
               [
               {
                  breakpoint: 700,
                  settings: 
                   {
                      // Set to `auto` and provide item width to adjust to viewport
                      slidesToShow: 3,
                      slidesToScroll: 1,
                      itemWidth: 250,
                   }
                }
               ]
           });

           
    </script>
</body>
</html>