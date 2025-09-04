<template>
  <div class="book-content">
    <div class="titles">
      <h1>{{ bookData.bookName }}</h1>
      <div class="authorAndCategoryAndEvulations">
        <div class="author">
          <h4>Yazar & Yayınevi :</h4>
          <div class="humans">
            <span :key="man" v-for="man in bookData.writerAndPublishingHouse"
              >{{ man }}
            </span>
          </div>
        </div>
        <div class="CategoryAndEvulations">
          <h4>Kategori :</h4>
          <div class="child-wrapper">
            <div class="category">
              <span :key="category" v-for="category in bookData.bookCategory">{{
                category
              }}</span>
            </div>
            <span class="bracket">|</span>
            <div class="evulations">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="priceAndShortDescription">
      <h5>
        ₺{{ priceSetting }},<span>{{ pennySetting }}</span>
      </h5>
      <p>
        {{ firstStop }}
      </p>
    </div>
    <div class="addToCardAndBuyNow">
      <div class="addToCard">
        <div class="quantity">
          <button class="decrease" @click="quantity > 1 && quantity--">
            <i class="bi bi-dash"></i>
          </button>
          <input type="text" v-model="quantity" />
          <button class="increase" @click="quantity++">
            <i class="bi bi-plus"></i>
          </button>
        </div>
        <button class="addToCard"><span>+ Sepete Ekle</span></button>
        <button class="heart"><i class="bi bi-suit-heart"></i></button>
      </div>
      <div class="buyNow">
        <button><span>Şimdi Satın Al</span></button>
      </div>
    </div>
    <div class="benefits">
      <span>
        <i class="bi bi-box2-fill"></i>
        Ücretsiz Kargo ve Değişim
      </span>
      <span>
        <i class="bi bi-check-circle-fill"></i>
        Esnek ve güvenli ödeme, teslimatta ödeme
      </span>
      <span>
        <i class="bi bi-trophy-fill"></i>
        600.000 memnun müşteri
      </span>
    </div>
    <div class="guaranteeSafeAndSecureCheckOut">
      <h3>Güvenli ve Emniyetli Ödeme Garantisi</h3>
      <div class="bank-images">
        <img
          v-for="img in imageData"
          :key="img"
          :src="img.imgSrc"
          :alt="img.alt"
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["bookData"],
  data() {
    return {
      quantity: 1,
      imageData: [
        {
          imgSrc: require("@/assets/images/BookContent/BankImages/mastercard.png"),
          alt: "Mastercard",
        },
        {
          imgSrc: require("@/assets/images/BookContent/BankImages/visa.png"),
          alt: "Visa",
        },
        {
          imgSrc: require("@/assets/images/BookContent/BankImages/paypal.png"),
          alt: "Paypal",
        },
        {
          imgSrc: require("@/assets/images/BookContent/BankImages/yapikredi.png"),
          alt: "Yapı Kredi",
        },

        {
          imgSrc: require("@/assets/images/BookContent/BankImages/bbva.png"),
          alt: "BBVA",
        },
        {
          imgSrc: require("@/assets/images/BookContent/BankImages/isbankasi.png"),
          alt: "İş Bankası",
        },
      ],
    };
  },
  computed: {
    priceSetting() {
      return this.bookData.bookPrice.split(",")[0];
    },
    pennySetting() {
      return this.bookData.bookPrice.split(",")[1];
    },
    firstStop() {
      return this.bookData.bookDescription.split(".", 1).toString();
    },
  },
};
</script>
