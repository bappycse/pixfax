<template>
  <div>
    <Head>
      <Title>{{ title }}</Title>
      <Meta name="description" :content="description" />
    </Head>
  </div>
  <section class="banner_main">
    <div class="container">
      <div class="row d_flex">
        <div class="col-sm-12 col-md-9">
          <div class="text-bg">
            <h1>Get your images edited by the most expert hands</h1>
            <p>Superb image editing services at your convenience, from simple background removal to complex clipping paths. Image editing services for photographers, eCommerce businesses, and product sellers at eCommerce platforms.</p>
            <a href="/get-quote">Get Started</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-3">
          <div class="text-img">
            <img src="~/assets/images/banner.png" alt="Banner Image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-last">
          <div>
            <img src="~/assets/images/virtual_photo.jpg" alt="Banner Image">
          </div>
        </div>
        <div class=" col-md-6 col-sm-pull-6">
          <div class="starting_box">
            <h2>Get your images edited by the most expert hands</h2>
            <h3>Image editing services for photographers, eCommerce businesses, and product sellers at eCommerce platforms.</h3>
            <p class="desc">Get rid of the hectic task of image editing. Once you are done with photo shooting, send your raw photos to us and let us do the rest. We will take care of the image editing part and turn your ordinary-looking photos into top-notch ones.</p>
            <p><span>Starting at 25¢ per image</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="service_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="titlepage service_area_constent">
            <h2>Services We Provide</h2>
            <p> Pix Fax – An outsourcing company providing all kinds of image editing services including background removal, image masking, ghost mannequin effect, shadow creation, color correction, and eCommerce Product photo editing service.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="service-box service_box_1 d-md-flex">
            <div class="image">
            </div>
            <div class="text">
              <h3>Background Removal Service</h3>
              <p>Background removal service is a process of digitally removing the background from an image to focus on the subject matter. It enhances the overall look and feel of the image.</p>
              <a href="/services/background-removal" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="service-box service_box_2 d-md-flex">
            <div class="image">
            </div>
            <div class="text">
              <h3>Clipping Path Services</h3>
              <p>Clipping path services are an image editing technique used to remove backgrounds from images for eCommerce products, architectural projects, and other visual media.</p>
              <a href="/services/clipping-path" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="service-box service_box_3 d-md-flex">
            <div class="image">
            </div>
            <div class="text">
              <h3>Ghost Mannequin Service</h3>
              <p>Ghost mannequin service is an innovative way to enhance the look of your product photos, making them look more realistic and professional. </p>
              <a href="/services/ghost-mannequin" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="service-box service_box_4 d-md-flex">
            <div class="image">
            </div>
            <div class="text">
              <h3>Car Photo Editing</h3>
              <p>Car Photo Editing is the process of digitally enhancing a photograph of a car to make it look more visually appealing</p>
              <a href="/services/car-service" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="service-box service_box_5 d-md-flex">
            <div class="image">
            </div>
            <div class="text">
              <h3>Image Masking Service</h3>
              <p>Image masking services are a specialized subset of image processing services that involve editing out certain elements from an image, such as backgrounds, objects, and unwanted elements. </p>
              <a href="/services/image-masking" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="service-box service_box_6 d-md-flex">
            <div class="image">
            </div>
            <div class="text">
              <h3>Shadow Creation Services</h3>
              <p>Take advantage of the Shadow Creation service from Pix Fax, and give your images the extra dimension they need to stand out!</p>
              <a href="/services/shadow-creation" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="service-box service_box_7 d-md-flex">
            <div class="image">
            </div>
            <div class="text">
              <h3>Photo Retouch Services</h3>
              <p>Photo retouching is a process of editing photos to enhance their look and quality. It includes color correction, blemish removal, airbrushing, and any other digital editing.</p>
              <a href="/services/photo-retouch" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="service-box service_box_8 d-md-flex">
            <div class="image">
            </div>
            <div class="text">
              <h3>Color Changes Service</h3>
              <p>E-commerce photo editing services provide a cost-effective way to enhance product images for online stores.</p>
              <a href="/services/color-change" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <a class="read_more" href="#">Read More</a>
      </div>
    </div>
  </div>
  <!-- end banner -->
  <!-- Services  -->
  <div id="service" class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="titlepage">
            <h2>Edited by Hands</h2>
            <p>Our highly professional and expert graphic designers edit each photo with their hands. No automated tool or artificial intelligence is used to edit. So, you get an accurate image editing service.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="services-box">
            <img src="~/assets/images/service_icon1.png" alt="">
            <h3>Perfect Results</h3>
            <p>Once edited by professional image editors, the photos go through several cross-check by the quality assurance team to provide a flawless result to the customers. </p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="services-box">
            <img src="~/assets/images/service_icon2.png" alt="">
            <h3>24/7 Customer Support</h3>
            <p>If you have any queries regarding image editing services, our 24/7 dedicated customer support team is there to answer. </p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="services-box">
            <img src="~/assets/images/service_icon3.png" alt="">
            <h3>Quick Turnaround</h3>
            <p>We are committed to editing images as customer demand and getting them back to them within the shortest possible time. .</p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="services-box">
            <img src="~/assets/images/service_icon4.png" alt="">
            <h3>Budget-friendly Pricing Policy</h3>
            <p>Our budget-friendly pricing policy targets audiences from all businesses and attracts customers the most. Check our pricing policy</p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="services-box">
            <img src="~/assets/images/service_icon5.png" alt="">
            <h3>Optimized for eCommerce</h3>
            <p>Product photo editing service customized for eCommerce business, personal portfolio making, and websites, available in all formats.</p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="services-box">
            <img src="~/assets/images/service_icon6.png" alt="">
            <h3>Unlimited Revision </h3>
            <p>Get unlimited revisions until and unless you are satisfied. We've edited more than 8 million images for 31,593 businesses like yours</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="how_it_works">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="works_section">
            <h2 class="page_subtitle">How It Works</h2>
          </div>
        </div>
      </div>
      <div class="row how_it_works_box">
        <div class="col-md-6 align-self-center">
          <ul class="how_works">
            <li>Request a quote for the images.</li>
            <li>We’ll review and get back to you with the proposal.</li>
            <li>Request a quote for the images.</li>
            <li>Once approved and uploaded the images, we’ll start processing the job.</li>
            <li>Download the images once the job is done.</li>
          </ul>
        </div>
        <div class="col-md-6">
          <div class="image-box">
            <img src="~/assets/images/section-how-it-works-01.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="why" class="why">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="titlepage">
            <h2>Why you should choose</h2>
            <h4>We Are 9 Years Experienced At Professional Photo Editing Service With 100% Satisfaction Quality Standards within Budget. </h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div id="box_ho" class="why-box">
            <img src="~/assets/images/home_why1.png" alt="">
            <h3>Cost-Effective</h3>
            <p> Pix Fax offers cost-effective image editing services that can help businesses save money on their production costs. </p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="why-box">
            <img src="~/assets/images/home_why2.png" alt="">
            <h3>Superb Quality</h3>
            <p> Pix Fax's experienced team of editors and designers can provide high-quality image editing services that meet the highest industry standards. </p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="why-box">
            <img src="~/assets/images/home_why3.png" alt="">
            <h3>Secure Data Transfer</h3>
            <p>We use secure data transfer systems to ensure your images remain safe and secure.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="price_message_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <img src="~/assets/images/heart-01.png" alt="">
          <h3>Rediscover your passion for your work again<br>
          </h3>
          <div class="link p-20"><a href="/get-quote" class="btn">Get Quote</a></div>
        </div>
      </div>
    </div>
  </section>
</template>
<script setup>
  const title = ref('Pixfax');
  const description = ref(' Pix Fax provided clipping path related services');
</script>

<style scoped>
.price_message_area {
  background: #f2f2f2;
  padding: 50px;
}
.price_message_area h3 {
  font-size: 32px;
  font-weight: 500;
  line-height: 48px;
  color: #2b1b9a;
}

.price_message_area h3 span {
  font-weight: 700;
}

</style>
