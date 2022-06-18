@extends('layouts.frontend')

@section('title')
Home Page
@endsection

@section('content')
<!--About -->
<section id="about" data-aos="fade-up">
  <div class="container">
    <div class="row justify-content-center align-items-center text-center">
      <div class="col-lg-5">
        <div class="row">

          <h1 data-aos="fade-up">We are  <span class="auto-type" class="text-orange" ></span></h1>
          <p data-aos="fade-up" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae.<br/><br/>
            Maxime mollitia, molestiae quas vel sint commodi repudiandae.
            Maxime mollitia, molestiae quas vel sint commodi repudiandae.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae.
            Maxime mollitia, molestiae quas vel sint commodi repudiandae.
          </p>
        </div>
      </div>
      <div class="col-lg-5">
        <img src="{{asset('frontend/images/team2.jpg')}}" data-aos="zoom-in" class="rounded-circle p-2" width="400" height="400" data-aos="zoom-in" style="background: var(--gradient);">
      </div>
    </div>
  </div>
</section>
<!--end About-->

<!--Gallery-->
<section  id="activities" class="" style="background: var(--gradient)" data-aos="zoom-in">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12 mb-5">
        <h1 class="text-white">Our Works and Activities <span class="auto-type"></span></h1>
      </div>
    </div>
  </div>
  <div class="container align-items-center d-flex justify-content-center owl-carousel owl-theme" id="our-works">
      <div class="gallery">
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img src="{{asset('frontend/images/service11.jpg')}}" alt="Cinque Terre" data-aos="zoom-in">
        </a>
      <div class="desc">Add a description of the image here</div>
    </div>

    <div class="gallery" >
      <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <img src="{{asset('frontend/images/service22.jpg')}}" alt="Cinque Terre" data-aos="zoom-in">
      </a>
    <div class="desc">Add a description of the image here</div>
  </div>

  <div class="gallery">
    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <img src="{{asset('frontend/images/service33.jpg')}}" alt="Cinque Terre" data-aos="zoom-in">
    </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <img src="{{asset('frontend/images/service44.jpg')}}" alt="Cinque Terre" data-aos="zoom-in">
  </a>
<div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <img src="{{asset('frontend/images/service33.jpg')}}" alt="Cinque Terre" data-aos="zoom-in">
</a>
<div class="desc">Add a description of the image here</div>
</div>
  </div>
</section>
<!--end Gallery-->

<!--Our Services-->
<section id="services"data-aos="zoom-in" >
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Our Services <span class="auto-type" class="text-orange" ></span></h1>

      </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service custom-card">
            <div class="icon-box">
              <i class="ri-pencil-ruler-2-line"></i>
            </div>
            <h5>Documentation Prepare</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis deleniti dicta veritatis, atque placeat nostrum omnis commodi adipisci quam quae ipsam distinctio sed non voluptates rem neque, laborum ut! Nisi.</p>
            <a href="#" class="custom-link">Read++</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service custom-card">
            <div class="icon-box">
              <i class="ri-edit-box-line"></i>
            </div>
            <h5>Documentation Prepare</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis deleniti dicta veritatis, atque placeat nostrum omnis commodi adipisci quam quae ipsam distinctio sed non voluptates rem neque, laborum ut! Nisi.</p>
            <a href="#" class="custom-link">Read++</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service custom-card">
            <div class="icon-box">
              <i class="ri-auction-line"></i>
            </div>
            <h5>Documentation Prepare</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis deleniti dicta veritatis, atque placeat nostrum omnis commodi adipisci quam quae ipsam distinctio sed non voluptates rem neque, laborum ut! Nisi.</p>
            <a href="#" class="custom-link">Read++</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service custom-card">
            <div class="icon-box">
              <i class="ri-settings-5-line"></i>
            </div>
            <h5>Documentation Prepare</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis deleniti dicta veritatis, atque placeat nostrum omnis commodi adipisci quam quae ipsam distinctio sed non voluptates rem neque, laborum ut! Nisi.</p>
            <a href="#" class="custom-link">Read++</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service custom-card">
            <div class="icon-box">
              <i class="ri-award-fill"></i>
            </div>
            <h5>Documentation Prepare</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis deleniti dicta veritatis, atque placeat nostrum omnis commodi adipisci quam quae ipsam distinctio sed non voluptates rem neque, laborum ut! Nisi.</p>
            <a href="#" class="custom-link">Read++</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service custom-card">
            <div class="icon-box">
              <i class="ri-file-paper-2-line"></i>
            </div>
            <h5>Documentation Prepare</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis deleniti dicta veritatis, atque placeat nostrum omnis commodi adipisci quam quae ipsam distinctio sed non voluptates rem neque, laborum ut! Nisi.</p>
            <a href="#" class="custom-link">Read++</a>
          </div>
        </div>

      </div>

  </div>
</section>
<!--end our services-->

<!--Review-->
<section id="review" class="slider" data-aos="zoom-in">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mb-5">
        <h1 class="text-center text-white">Our Portfolio!</h1>
      </div>
    </div>

    <div class="review owl-carousel owl-theme">
        <div class="item">
          <img src="{{asset('frontend/images/team1.jpg')}}" class="img-fluid" data-aos="zoom-in">
          <h3>Nirdosh Shrestha</h3>
          <small>Web Developer</small>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea explicabo! Labore assumenda, esse omnis pariatur laboriosam aspernatur harum doloribus nam dicta quam adipisci, illo quia, laborum non inventore ullam?</p>

        </div>

        <div class="item">
          <img src="{{asset('frontend/images/team1.jpg')}}" class="img-fluid" data-aos="zoom-in">
          <h3>Rajendra Maharjan</h3>
          <small>Director of Chamati Finiance</small>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea explicabo! Labore assumenda, esse omnis pariatur laboriosam aspernatur harum doloribus nam dicta quam adipisci, illo quia, laborum non inventore ullam?</p>

        </div>

        <div class="item">
          <img src="{{asset('frontend/images/team3.jpg')}}" class="img-fluid" data-aos="zoom-in">
          <h3>Surendra Man Maskey</h3>
          <small>Owner ABC Pvt Ltd.</small>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea explicabo! Labore assumenda, esse omnis pariatur laboriosam aspernatur harum doloribus nam dicta quam adipisci, illo quia, laborum non inventore ullam?</p>

        </div>
    </div>

  </div>
</section>
<!--end Review-->

<!--Our Team-->
<section id="team" data-aos="zoom-in">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mb-5">
        <h1 class="text-center">Our Team Member</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="our-team">
          <div class="img-wrapper">
              <img src="{{asset('frontend/images/team1.jpg')}}" class="img-fluid" data-aos="zoom-in">
              <div class="overlay"></div>
              <div class="social-links">
                <a href="#"><i class='bx bxl-facebook' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-youtube' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>

            </div>
            </div>
           <div class="content">
            <h3>John Doe</h3>
            <p>Marketing Director</p>
           </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="our-team">
          <div class="img-wrapper">
              <img src="{{asset('frontend/images/team2.jpg')}}" class="img-fluid" data-aos="zoom-in">
              <div class="overlay"></div>
              <div class="social-links">
                <a href="#"><i class='bx bxl-facebook' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-youtube' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>

            </div>
            </div>
           <div class="content">
            <h3>John Doe</h3>
            <p>Marketing Director</p>
           </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="our-team">
          <div class="img-wrapper">
              <img src="{{asset('frontend/images/team3.jpg')}}" class="img-fluid" data-aos="zoom-in">
              <div class="overlay"></div>
              <div class="social-links">
                <a href="#"><i class='bx bxl-facebook' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-youtube' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>

            </div>
            </div>
           <div class="content">
            <h3>John Doe</h3>
            <p>Marketing Director</p>
           </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Our Team-->

<!--Contact-->
<section id="contact" style="background:  #18191A;">
    <div class="container">
        <div class="row d-flex justify-content-lg-around align-items-center text-center">
            <div class="col-lg-12 mb-2">
                <h1 data-aos="fade-right">Contat Us</h1>
                <p class="text-white text-center"data-aos="fade-left" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum id error placeat eum ab quaerat quisquam beatae adipisci<br/>quod asperiores sit voluptatem fugit corrupti similique ipsa, reprehenderit explicabo repellat maiores!</p>
            </div>
            <div class="col-lg-10 d-flex justify-content-lg-around align-items-center text-center mb-5">
              <div><i class="ri-phone-line fs-1 p-4" style="color:#ff4d29;"></i><span class="text-white">977-1-4378534</span></div>
              <div><i class="ri-phone-line fs-1 p-4" style="color:#ff4d29;"></i><span class="text-white">9801014247</span></div>
              <div><i class="ri-mail-line fs-1 p-4" style="color:#ff4d29;"></i><span class="text-white">nirdoshsresta@gmail.com</span></div>

            </div>
        </div>
          <form>
              <div class="row gx-5 col-lg-12 d-flex justify-content-center">
                  <div class="col-lg-6" data-aos="zoom-in">
                      <div class="form-group mb-4">
                          <input type="text" name="name" placeholder="Type your Name" class="form-control">
                      </div>
                      <div class="form-group mb-4">
                          <input type="text" name="email" placeholder="Type your Email" class="form-control">
                      </div>
                      <div class="form-group mb-4">
                          <input type="number" name="phone" placeholder="Type your Phone/Mobile No" class="form-control">
                      </div>
                      <div class="form-group mb-4">
                          <textarea name="message" class="form-control" placeholder="Type your message" cols="9" rows="6"></textarea>
                      </div>
                      <div class="form-group">
                          <div class="text-center"><button class="btn btn-brand px-5">Submit</button></div>
                      </div>
                  </div>
                  <div class="col-lg-6" data-aos="zoom-in">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.3670772299215!2d85.32052891449199!3d27.70595043216137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb197c6e3ae77b%3A0x6b93034305e64b0e!2sGLOBAL%20DREAMS%20EDUCATIONAL%20CONSULTANCY%20PVT.%20LTD.!5e0!3m2!1sen!2snp!4v1648317024732!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
              </div>
          </form>

    </div>
</section>
<!--end Contact-->

<!--modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Our Works</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{asset('frontend/images/service11.jpg')}}" class="img-fluid img-thumbnail" alt="Cinque Terre">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


@endsection

@section('script')
@endsection
