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
            <p>The privacy policy is made to make sure that the information you share with us is protected. We have included the policies and the ways of our work and communication to make you understand our company’s policy and privacy. </p>
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
            <h2>Introduction</h2>
            <p> This section introduces Pix Fax and its commitment to respecting and protecting user privacy and personal data. Users are encouraged to read the Privacy Policy carefully and are informed that if they disagree with its terms, they should refrain from accessing the website.</p>
          </div>
          <div class="step_box">
            <h2>Information Sharing</h2>
            <p> Pix Fax assures users that it does not sell, trade, or transfer their personal information to external parties. However, the company may share information with trusted third-party service providers who assist in delivering services, with the condition that they use the information solely for those specific tasks.</p>
          </div>
          <div class="step_box">
            <h2>Data Retention</h2>
            <p>This section mentions that user personal information will be retained for as long as necessary to provide services and comply with legal obligations, resolve disputes, and enforce policies.</p>
          </div>
          <div class="step_box">
            <h2>Security</h2>
            <p>While the company takes reasonable precautions to protect personal information from unauthorized access, it acknowledges that complete security cannot be guaranteed due to inherent risks associated with transmitting data over the internet.</p>
          </div>
          <div class="step_box">
            <h2>Links to Other Websites</h2>
            <p>Users are informed that Pix Fax's website may contain links to other websites, and the company is not responsible for the privacy practices of those external sites. Users are encouraged to review the privacy policies of any websites that collect their personal information.</p>
          </div>
          <div class="step_box">
            <h2> Changes to Our Privacy Policy</h2>
            <p> The Privacy Policy may be updated periodically, and users will be notified of any changes through updates posted on the website. Users are encouraged to periodically review the Privacy Policy for any modifications.</p>
          </div>
          <div class="step_box">
            <h2>Contact Us</h2>
            <p>Users are provided with contact information (info@pixfax.com) to address any questions or concerns regarding the Privacy Policy.</p>

            <p>This Privacy Policy is an essential document for informing users about how their personal information is handled when interacting with Pix Fax's website. It helps build trust and transparency between the company and its users while ensuring compliance with privacy regulations. Users should have the option to agree to these terms before using the website's
              <a href="https://www.pixfax.com" style="color: #291c97; font-weight: bold" target="_blank">pixfax.com</a></p>
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
}
</style>