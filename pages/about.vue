<template>
  <Head>
    <Title>{{ title }}</Title>
    <Meta name="description" :content="description" />
  </Head>
  <section class="about-us-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ">
          <h3 class="text-center">We are more than a generic agency.</h3>
          <h4 class="text-center">Explore our Services and our Solutions for your business.</h4>
          <p>Welcome to Pix Fax – the leading provider of professional image editing services to eCommerce businesses, photographers, individuals, and photo editing agencies. We strive for creating the perfect images to convey your vision and achieve your goals. We understand that visual media is a powerful tool in marketing, creative expression, and storytelling, and we are here to help you make the most of it.</p>
          <p>At Pix Fax, we have a team of experienced professionals with a wide range of experience in image editing and post-production. Our team has years of experience working with both digital and traditional media, and we specialize in a wide range of image editing services including color correction, retouching, background removal, and manipulation. We also offer services for digital asset management, graphic design, and video editing.</p>
          <p>We understand that everyone has different needs, so we are always happy to work with you to develop a custom solution tailored to your individual requirements. We understand the importance of creating high-quality visuals for your business, and our team is dedicated to providing the highest-quality image editing services to ensure that you are getting the most out of your visuals. We strive to provide a fast turnaround time and excellent customer service to ensure that you get the best results as quickly and efficiently as possible. </p>
        </div>
      </div>
    </div>
  </section>
  <section class="step_box_area p-50">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="step_box">
            <h2>Our Missions</h2>
            <p>At Pix Fax, our mission is to provide the highest quality professional image editing services to our customers. We prioritize creating the best possible user experience so that our customers can create stunning visuals with ease. Our commitment to customer service and satisfaction is what sets us apart from the competition.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="~/assets/images/works2.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="step_box_area p-50">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="image-box">
            <img src="~/assets/images/works5.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="step_box">
            <h2>Our Vision</h2>
            <p>Our vision is to be the leading image editing service provider for eCommerce businesses, photographers, and individuals. We employ all our effort to be the premier choice for anyone looking to create stunning visuals with ease and confidence. We continue to invest in the latest technology and innovative approaches to ensure our customers get the best value for their money. We aspire to be the go-to source when it comes to editing visuals</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script setup>
const title = ref('Pixfax | About Us');
const description = ref(' Pix Fax provided clipping path related services');
</script>

<style scoped>

</style>