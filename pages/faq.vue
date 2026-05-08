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
            <h1> Pix Fax FAQ</h1>
            <p>Find answers to all your frequently asked questions (FAQs) about Pix Fax below. You’ll find all information about our services, pricing, how it works, payments systems, etc.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="step_box_area p-50">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="step_box">
            <h2>1. Is There Any Log In/ Sign In Option To Access In CEI Website?</h2>
            <p> No. You do not need to log in/ sign in at our website to access information.</p>
          </div>
          <div class="step_box">
            <h2>2. Can I Use The Images From Your Website?</h2>
            <p> Sure, you can use any image without editing or distorting.</p>
          </div>
          <div class="step_box">
            <h2>3. How Can I Contact You?</h2>
            <p>How Can I Contact You?</p>
          </div>
          <div class="step_box">
            <h2>4. How Will Get The Detail Information?</h2>
            <p>Click on the download. You will get the necessary information.</p>
          </div>
          <div class="step_box">
            <h2>5. Do you edit anything other than product images?</h2>
            <p>Yes. However beautiful your portrait or cat may be, we only edit product images. That means photographs of something you’re going to sell online.</p>
          </div>
          <div class="step_box">
            <h2>6. What categories of product images do yu edit?</h2>
            <p> We edit any and all types of product images: apparel, accessories, jewelry, furniture, home goods, automotive, appliance, home improvement, you name it.</p>
          </div>
          <div class="step_box">
            <h2>7. What image file types can I submit?</h2>
            <p>You can upload JPG, PNG, TIFF, or PSD product images for editing.</p>
          </div>
          <div class="step_box">
            <h2>8. What image file types can I get back?</h2>
            <p>Edited product images can be returned as JPG, PNG, TIFF, or PSD.</p>
          </div>
          <div class="step_box">
            <h2>9. Can I customize image editing?</h2>
            <p>If you're not quite sure what you need, that's not a problem at all! Feel free to explore our services to get a sense of what might be helpful for you. If you're still uncertain, simply reach out to us. Let us know your ultimate objectives and we'll be more than glad to guide you in choosing the right services.</p>
          </div>
          <div class="step_box">
            <h2>10. Who Are You?</h2>
            <p> Pix Fax, is a USA based Image Photo manipulation service provider. With an experience of 15 years, it has become one of the leading photo editing company. With a great team of expert graphic designers and well-equipped self-owned production house, we provide world class quality image manipulation services which include image cut out, image masking, photo manipulation, glamour retouching, image restoration, pre-press work, advertisement, magazine design, etc.</p>
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
.step_box ul {
  margin-left: 45px;
}

.step_box ul li{
  margin-bottom: 10px;
  font-size: 16px;
  line-height: 26px;
  list-style: disc;
}
</style>