<template>
  <Head>
    <Title>{{ title }}</Title>
    <Meta name="description" :content="description" />
  </Head>
  <section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="heading text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <h2>Get A Quote</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="main wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="row">
              <div class="col-lg-5">
                <div class="right">
                  <h2>Your Satisfaction is Our Success. Let’s proceed to fulfill your goal. Fill up the form. You’ll receive our response within few minutes. </h2>
                  <div class="contact-box text-center" >
                    <img src="~/assets/images/home.png" width="80px" alt="">
                    <p><b>USA Office:</b></p>
                    <p class="label-contact"> Address:139-25 88 Road Jamaica, NY 11435</p>
                    <p class="label-contact">Email: info@pixfax.com</p>
                    <p class="label-contact">Phone: <a href="">+1 (347) 612‑6179</a></p>
                  </div>
                  <div class="contact-box text-center">
                    <img src="~/assets/images/home.png" width="80px" alt="">
                    <p class="label-contact">Bangladesh Office</p>
                    <p class="label-contact">Address: Dhaka Cantonment</p>
                    <p class="label-contact">Email: info@pixfax.com</p>
                    <p class="label-contact">Phone: 880 1303355740</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 left">
                <h3>Get your custom quote
                       in 30 Minutes</h3>
                <form @submit.prevent="freeTrial" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <label for=""><b>Name</b><span>*</span></label>
                      <input type="text" v-model="allInfo.name" class="form-control" required>
                    </div>
                    <div class="col-sm-6">
                      <label for=""><b>Email</b><span>*</span></label>
                      <input type="email" v-model="allInfo.email" class="form-control" required>
                    </div>
                    <div class="col-sm-6">
                      <label for=""><b>Phone</b><span>*</span></label>
                      <input type="number" v-model="allInfo.phone" class="form-control" required>
                    </div>
                    <div class="col-sm-6 from-group">
                      <label for=""><b>Country</b><span>*</span></label>
                      <select v-model="allInfo.country" required>
                        <option value="US" selected="selected">Us</option>
                        <option v-for="country in countryList" :key="country">{{ country }}</option>
                      </select>
                    </div>
                    <div class="col-sm-4 from-group">
                      <label for=""><b>Quantity</b><span>*</span></label>
                      <input type="number" v-model="allInfo.quantity" class="form-control" required>
                    </div>
                    <div class="col-sm-4 from-group">
                      <label for=""><b>Delivery Time</b><span>*</span></label>
                      <select v-model="allInfo.deliveryTime" required>
                        <option v-for="times in deliveryTimes" :key="deliveryTime">{{ times }}</option>
                      </select>
                    </div>
                    <div class="col-sm-4 from-group">
                      <label for=""><b>Return File Format</b><span>*</span></label>
                      <select v-model="allInfo.returnType" required>
                        <option v-for="type in returnTypes" :key="returnType">{{ type }}</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                      <div v-for="services in allServices" class="col-md-4 service-box">
                        <label for="services.name">
                          {{services.name}}
                          <input type="checkbox" id="{{services.name}}" v-model="services.selected">
                        </label>
                  </div>
                    <div class="col-sm-12 from-group">
                        <label for=""><b>File Link</b></label>
                        <input type="text" v-model="allInfo.fileLink" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for=""><b>Instruction</b>
                      </label>
                      <textarea class="form-control" v-model="allInfo.note" rows="5" id="comment" placeholder="Tell us, what to do with your images." required></textarea>
                    </div>
                    <div class="col-sm-12 form-group">
                      <input type="file" @change="onChange" multiple>
                    </div>
                    <div class="col-sm-12 form-group">
                      <table class="table">
                        <tr v-for="imageFile in uploadFiles" key="imageFile.name">
                          <td>{{imageFile.name}}</td> <td>File Size {{ formatBytes(imageFile.size) }}</td>
                        </tr>
                      </table>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-block" :class="{ 'in-active': status }" type="submit" >Send Now!</button>
                      <img src="~/assets/images/mail_send.gif" class="in-active" :class="{ 'active': sendStatus }"   alt="Send Mail Image" >
                      <p class="text-center in-active " :class="{ 'send-message': sendStatusDone}" >Quotation Send Successfully</p>
                    </div></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script setup>
const axios = useNuxtApp().$axios
const { $axios } = useNuxtApp();
const title = ref('Pixfax | Get Quote');
const description = ref(' Pix Fax provided clipping path related services');
const allServices = [
  { id: 1, name: "Clipping Path", selected: false },
  { id: 2, name: "Background Remove", selected: false },
  { id: 3, name: "Image Masking", selected: false },
  { id: 4, name: "Shadow Creation", selected: false },
  { id: 5, name: "Ghost Mannequin", selected: false },
  { id: 6, name: "Photo Retouching", selected: false },
  { id: 7, name: "Color Change", selected: false },
  { id: 8, name: "Car Photo Editing", selected: false },
  { id: 9, name: "Multi Clipping path", selected: false },
  { id: 10, name: "Jewelry Photo Editing", selected: false },
  { id: 11, name: "E-Commerce Service", selected: false },
  { id: 12, name: "Vector Services", selected: false },
];

const deliveryTimes = [
  "12 Hours",
  "24 Hours",
  "36 Hours",
  "48 Hours",
  "72 Hours",
  "Flexible",
];

const returnTypes = [
  "JPG",
  "PNG",
  "PSD",
  "TIFF",
];
const serviceData = ref([]);

const selectedServices = () => {
  for (let i = 0; i < allServices.length; i++) {
    if (allServices[i].selected === true) {
      serviceData.value.push(allServices[i].name);
    }
  }
  return serviceData;
};



const allInfo = ref({
  name: null,
  email: null,
  country: null,
  phone: null,
  note: null,
  files: null,
  quantity: null,
  deliveryTime: null,
  returnType: null,
  fileLink: null,
  serviceName: serviceData,
  serviceType: "Commercial",
});

const resetData = () => {
  allInfo.value.name = null;
  allInfo.value.email = null;
  allInfo.value.country = null;
  allInfo.value.phone = null;
  allInfo.value.note = null;
  allInfo.value.files = null;
  allInfo.value.quantity = null;
  allInfo.value.deliveryTime = null;
  allInfo.value.returnType = null;
  allInfo.value.serviceName = null;
  allInfo.value.fileLink = null;
}

const status = ref(false);
const sendStatus = ref(false);
const sendStatusDone = ref(false);

const countryList = [
  "Afghanistan",
  "Albania",
  "Algeria",
  "American Samoa",
  "Andorra",
  "Angola",
  "Anguilla",
  "Antarctica",
  "Antigua and Barbuda",
  "Argentina",
  "Armenia",
  "Aruba",
  "Australia",
  "Austria",
  "Azerbaijan",
  "Bahamas (the)",
  "Bahrain",
  "Bangladesh",
  "Barbados",
  "Belarus",
  "Belgium",
  "Belize",
  "Benin",
  "Bermuda",
  "Bhutan",
  "Bolivia (Plurinational State of)",
  "Bonaire, Sint Eustatius and Saba",
  "Bosnia and Herzegovina",
  "Botswana",
  "Bouvet Island",
  "Brazil",
  "British Indian Ocean Territory (the)",
  "Brunei Darussalam",
  "Bulgaria",
  "Burkina Faso",
  "Burundi",
  "Cabo Verde",
  "Cambodia",
  "Cameroon",
  "Canada",
  "Cayman Islands (the)",
  "Central African Republic (the)",
  "Chad",
  "Chile",
  "China",
  "Christmas Island",
  "Cocos (Keeling) Islands (the)",
  "Colombia",
  "Comoros (the)",
  "Congo (the Democratic Republic of the)",
  "Congo (the)",
  "Cook Islands (the)",
  "Costa Rica",
  "Croatia",
  "Cuba",
  "Curaçao",
  "Cyprus",
  "Czechia",
  "Côte d'Ivoire",
  "Denmark",
  "Djibouti",
  "Dominica",
  "Dominican Republic (the)",
  "Ecuador",
  "Egypt",
  "El Salvador",
  "Equatorial Guinea",
  "Eritrea",
  "Estonia",
  "Eswatini",
  "Ethiopia",
  "Falkland Islands (the) [Malvinas]",
  "Faroe Islands (the)",
  "Fiji",
  "Finland",
  "France",
  "French Guiana",
  "French Polynesia",
  "French Southern Territories (the)",
  "Gabon",
  "Gambia (the)",
  "Georgia",
  "Germany",
  "Ghana",
  "Gibraltar",
  "Greece",
  "Greenland",
  "Grenada",
  "Guadeloupe",
  "Guam",
  "Guatemala",
  "Guernsey",
  "Guinea",
  "Guinea-Bissau",
  "Guyana",
  "Haiti",
  "Heard Island and McDonald Islands",
  "Holy See (the)",
  "Honduras",
  "Hong Kong",
  "Hungary",
  "Iceland",
  "India",
  "Indonesia",
  "Iran (Islamic Republic of)",
  "Iraq",
  "Ireland",
  "Isle of Man",
  "Israel",
  "Italy",
  "Jamaica",
  "Japan",
  "Jersey",
  "Jordan",
  "Kazakhstan",
  "Kenya",
  "Kiribati",
  "Korea (the Democratic People's Republic of)",
  "Korea (the Republic of)",
  "Kuwait",
  "Kyrgyzstan",
  "Lao People's Democratic Republic (the)",
  "Latvia",
  "Lebanon",
  "Lesotho",
  "Liberia",
  "Libya",
  "Liechtenstein",
  "Lithuania",
  "Luxembourg",
  "Macao",
  "Madagascar",
  "Malawi",
  "Malaysia",
  "Maldives",
  "Mali",
  "Malta",
  "Marshall Islands (the)",
  "Martinique",
  "Mauritania",
  "Mauritius",
  "Mayotte",
  "Mexico",
  "Micronesia (Federated States of)",
  "Moldova (the Republic of)",
  "Monaco",
  "Mongolia",
  "Montenegro",
  "Montserrat",
  "Morocco",
  "Mozambique",
  "Myanmar",
  "Namibia",
  "Nauru",
  "Nepal",
  "Netherlands (the)",
  "New Caledonia",
  "New Zealand",
  "Nicaragua",
  "Niger (the)",
  "Nigeria",
  "Niue",
  "Norfolk Island",
  "Northern Mariana Islands (the)",
  "Norway",
  "Oman",
  "Pakistan",
  "Palau",
  "Palestine, State of",
  "Panama",
  "Papua New Guinea",
  "Paraguay",
  "Peru",
  "Philippines (the)",
  "Pitcairn",
  "Poland",
  "Portugal",
  "Puerto Rico",
  "Qatar",
  "Republic of North Macedonia",
  "Romania",
  "Russian Federation (the)",
  "Rwanda",
  "Réunion",
  "Saint Barthélemy",
  "Saint Helena, Ascension and Tristan da Cunha",
  "Saint Kitts and Nevis",
  "Saint Lucia",
  "Saint Martin (French part)",
  "Saint Pierre and Miquelon",
  "Saint Vincent and the Grenadines",
  "Samoa",
  "San Marino",
  "Sao Tome and Principe",
  "Saudi Arabia",
  "Senegal",
  "Serbia",
  "Seychelles",
  "Sierra Leone",
  "Singapore",
  "Sint Maarten (Dutch part)",
  "Slovakia",
  "Slovenia",
  "Solomon Islands",
  "Somalia",
  "South Africa",
  "South Georgia and the South Sandwich Islands",
  "South Sudan",
  "Spain",
  "Sri Lanka",
  "Sudan (the)",
  "Suriname",
  "Svalbard and Jan Mayen",
  "Sweden",
  "Switzerland",
  "Syrian Arab Republic",
  "Taiwan",
  "Tajikistan",
  "Tanzania, United Republic of",
  "Thailand",
  "Timor-Leste",
  "Togo",
  "Tokelau",
  "Tonga",
  "Trinidad and Tobago",
  "Tunisia",
  "Turkey",
  "Turkmenistan",
  "Turks and Caicos Islands (the)",
  "Tuvalu",
  "Uganda",
  "Ukraine",
  "United Arab Emirates (the)",
  "United Kingdom of Great Britain and Northern Ireland (the)",
  "United States Minor Outlying Islands (the)",
  "United States of America (the)",
  "Uruguay",
  "Uzbekistan",
  "Vanuatu",
  "Venezuela (Bolivarian Republic of)",
  "Viet Nam",
  "Virgin Islands (British)",
  "Virgin Islands (U.S.)",
  "Wallis and Futuna",
  "Western Sahara",
  "Yemen",
  "Zambia",
  "Zimbabwe",
  "Åland Islands"
];

const imageFile = ref("");
const uploadFiles = ref([]);

const onChange = (e) => {
  selectedServices();
  status.value = false;
  sendStatusDone.value = false;
  uploadFiles.value = [];
  if (e.target.files.length === 0) {
    imageFile.value = "";
  }
  console.log(e.target.files);
  imageFile.value = e.target.files;

  for (let i = 0; i < imageFile.value.length; i++) {
    uploadFiles.value.push(imageFile.value[i]);
  }
  console.log(uploadFiles.value);
}


function formatBytes(bytes, decimals = 2) {
  if (!+bytes) return '0 Bytes'

  const k = 1024
  const dm = decimals < 0 ? 0 : decimals
  const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB']
  const i = Math.floor(Math.log(bytes) / Math.log(k))

  return `${parseFloat((bytes / Math.pow(k, i)).toFixed(dm))} ${sizes[i]}`
}

function freeTrial() {
  sendStatus.value = true;
  status.value = true
  const fd = new FormData();
  for(let i= 0; i < imageFile.value.length; i++){
    fd.append('image[]', imageFile.value[i]);
  }

  fd.append('name', allInfo.value.name);
  fd.append('email', allInfo.value.email);
  fd.append('country', allInfo.value.country);
  fd.append('phone', allInfo.value.phone);
  fd.append('note', allInfo.value.note);
  fd.append('serviceName', allInfo.value.serviceName);
  fd.append('quantity', allInfo.value.quantity);
  fd.append('deliveryTime', allInfo.value.deliveryTime);
  fd.append('returnType', allInfo.value.returnType);
  fd.append('fileLink', allInfo.value.fileLink);
  fd.append('serviceType', allInfo.value.serviceType);
  $axios.post('https://api.pixfax.com/api/free-trial', fd)
      .then((response) => {
        if(response.status == 200){
          sendStatus.value = false;
          sendStatusDone.value = true;
          uploadFiles.value = '';
          resetData();
        }
      })
}
</script>

<style  scoped>
select{
  line-height: 1.2;
  width: 100%;
  padding: 10px 10px 33px;
  background: #f8f8f9;
  border: none;
}
.contact {
  padding-bottom: 85px;
}

.contact .heading {
  visibility: visible;
  animation-name: fadeInUp;
  padding: 50px;
  color: #fff;
}

.contact .heading h2 {
  font-size: 45px;
  font-weight: 700;
  color: #fff;
}

.contact .heading h2 span {
  color: #7035cf;
  font-weight: 700;
}

.contact .heading p {
  font-size: 30px;
  font-weight: 600;
  color: #fff;
  line-height: 26px;
  margin: 0;
}

.contact .main {
  background: #ffffff;
  box-shadow: 1px 1px 20px 0 rgba(0, 0, 0, 0.08);
  padding: 0 0 0 15px;
}

.contact .main h3 {
  font-size: 20px;
  font-weight: 500;
  color: #4a545e;
  margin-bottom: 20px;
}

.contact .form-control {
  padding: 25px;
  font-size: 13px;
  margin-bottom: 10px;
  background: #f8f8f9;
  border: 0;
  border-radius: 5px;
}

.contact button.btn {
  padding: 10px;
  border-radius: 5px;
  font-size: 15px;
  background: linear-gradient(to right, rgba(114, 96, 206, 1) 0%, rgba(70, 96, 241, 1) 100%);
  color: #ffffff;
}

.contact .main .left {
  padding: 40px 60px;
  background: #fff;
}

.contact .main .right {
  background-size: cover;
  padding: 40px;
  color: #ffffff;
  height: 100%;
}

.contact .main .right h4 {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 30px;
}

.contact .main .right .info {
  margin-bottom: 10px;
}

.contact .main .right .info i {
  font-size: 25px;
  color: #ffffff;
}

.contact .main .right .info span {
  font-size: 14px;
  font-weight: 400;
  line-height: 20px;
  margin-left: 15px;
}
.contact .info a:hover {
  color: #ccc;
}

.contact .info a {
  color: #ffff;
}

.contact .main .right .social a {
  text-decoration: none;
  font-size: 30px;
  color: #ffffff;
  margin-right: 20px;
}

.service-box label {
  font-size: 14px;
  margin: 10px 0;
  background: #f8f8f9;
  padding: 5px 7px;
  border-radius: 5px;
  width: 90%;
  text-align: center;
}

.service-box input {
  margin: 4px 5px 0;
}

.form-control {
  font-family: system-ui, sans-serif;
  font-size: 2rem;
  font-weight: bold;
  line-height: 1.1;
}

.social-link {
  padding: 8px;
}

.social-link a {
  margin: 0 8px;
  color: #007bff;
}

.in-active {
  display: none;
}

.active {
  display: block;
}

.send-message {
  background: #7035cf;
  display: block;
  color: #fff;
  padding: 10px 5px;
}



</style>