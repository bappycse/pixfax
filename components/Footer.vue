<template>
  <footer>
    <div class="footer">
      <div class="site-footer">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-6 col-lg-3 col-sm-12">
              <div class="widget">
                <h3 class="heading">Get Started</h3>
                <ul class="links list-unstyled">
                  <li><Nuxt-link to="/">Home</Nuxt-link></li>
                  <li><Nuxt-link to="/get-quote">Get Quote</Nuxt-link></li>
                  <li><Nuxt-link to="/free-trial">Free Trial</Nuxt-link></li>
                  <li><Nuxt-link to="/prices">Prices</Nuxt-link></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-12">
              <div class="widget">
                <h3 class="heading">Services</h3>
                <ul class="links list-unstyled">
                  <li><Nuxt-link to="/services/clipping-path">Clipping Path</Nuxt-link></li>
                  <li><Nuxt-link to="/services/background-removal">Background Removal</Nuxt-link></li>
                  <li><Nuxt-link to="/services/image-masking">Image Masking</Nuxt-link></li>
                  <li><Nuxt-link to="/services/jewelry-service">Jewelry Photo</Nuxt-link></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-12">
              <div class="widget">
                <h3 class="heading">Company</h3>
                <ul class="links list-unstyled">
                  <li><Nuxt-link to="/about">About Us</Nuxt-link></li>
                  <li><Nuxt-link to="/contact">Contact Us</Nuxt-link></li>
                  <li><Nuxt-link to="/how-it-works">How It Works</Nuxt-link></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-12">
              <div class="widget">
                <h3 class="heading">Contact</h3>
                <ul class="list-unstyled quick-info links">
                  <li class="email"><a href="#">info@pixfax.com</a></li>
                  <li class="address"><a href="#">Dhaka Bangladesh</a></li>
                  <li class="social-link">
                    <a href="https://www.facebook.com/pixfax" target="_blank"><Icon name="bxl:facebook-square" color="#007bff" /></a>
                    <a href="https://x.com/pixfaxstudio" target="_blank"><Icon name="bxl:twitter" color="#007bff" /></a>
                    <a href="https://www.linkedin.com/in/pixfax-studio-9073b23b5/" target="_blank"><Icon name="bxl:linkedin-square" color="#007bff" /></a>
                    <a href="https://www.pinterest.com/pixfax" target="_blank"><Icon name="bxl:pinterest" color="#007bff" /></a>
                    <a href="https://www.instagram.com/pixfax" target="_blank"><Icon name="bxl:instagram" color="#007bff" /></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="footer-bottom-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="footer-bottom">
              <p class="float-left">© 2020 - {{ currentYear }} Pix Fax. All rights reserved.</p>
              <p class="">
                <a href="/terms-and-conditions"> TERMS & CONDITIONS |</a>
                <a href="/privacy-policy"> PRIVACY POLICY |</a>
                <a href="/faq"> FAQ</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </footer>
</template>

<script setup>
const currentYear = new Date().getFullYear();
</script>

<style scoped>
.social-link {
  padding: 0 8px 8px 0;
}

.social-link a {
  margin: 0 8px 8px 0;
  color: #007bff;
  font-size: 35px;
}

</style>