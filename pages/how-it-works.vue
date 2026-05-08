<template>
  <Head>
    <Title>{{ title }}</Title>
    <Meta name="description" :content="description" />
  </Head>
  <section class="individual_banner">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <div class="">
            <h1>How it works / Our working process</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="step_box_area p-50 even_step">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="image-box">
            <img src="~/assets/images/works1.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="step_box">
            <h2>Step 1</h2>
            <h3>Get things going by asking for a quote</h3>
            <p>Select the services you need, image complexity, and turnaround time. Our team will give a probable estimation and will make a customized quote for you. We take 24 hours as a default turnaround however, you can ask for faster or slower service which may vary the service charge. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="step_box_area p-50 odd_step">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="step_box">
            <h2>Step 2</h2>
            <h3>Upload your images</h3>
            <p>on our secure and encrypted system. We prefer JPG  format but we accept PSD, TIFF, PNG, NEF, RAW, CR2, DNG, and PDF as well. </p>
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
  <section class="step_box_area p-50 even_step">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="image-box">
            <img src="~/assets/images/works5.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="step_box">
            <h2>Step 3</h2>
            <h3>Set your requirements and approve your quotation. </h3>
            <p>After receiving your quotation, you can make any last-minute changes to the scheduling, the number of photographs, and the file format. Once everything is in order, please accept your quote so that we may begin.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="step_box_area p-50 odd_step">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="step_box">
            <h2>Step 4</h2>
            <h3>Go back and concentrate on your work when we edit your photos </h3>
            <p>When we will be editing your images, you can relax or go back to your core business which your love most. Meanwhile, we will take care of your image editing, cross-check by an expert QA team and turn your raw photos into professional ones.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="image-box">
            <img src="~/assets/images/works5.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="step_box_area p-50 even_step">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="image-box">
            <img src="~/assets/images/works5.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="step_box">
            <h2>Step 5</h2>
            <h3>Download your perfectly edited images </h3>
            <p>As your photos are ready to use, we will provide you with the download links, and here you go.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script setup>
const title = ref('Pixfax | How it Works');
const description = ref(' Pix Fax provided clipping path related services');
</script>
<style scoped>
</style>