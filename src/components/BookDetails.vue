<template>
  <div class="book-details">
    <div class="row">
      <div class="book-header">
        <BookImage :imgSource="bookData.imgSource" />
        <BookContent :bookData="bookData" />
      </div>
      <div class="book-footer">
        <BookInformation :bookData="bookData" />
      </div>
    </div>
  </div>
</template>

<script>
//components
import BookImage from "./BookDetailsChilds/BookImage.vue";
import BookContent from "./BookDetailsChilds/BookContent.vue";
import BookInformation from "./BookDetailsChilds/BookInformation.vue";

//css
import "../assets/styles/multi.css";
import "../assets/styles/main.css";
import "../assets/styles/BookImage.css";
import "../assets/styles/BookContent.css";
import "../assets/styles/BookInformation.css";

import axios from "axios";

export default {
  created() {
    const url = "http://localhost:8000/getBookInformation.php";
    axios
      .get(`${url}`, {
        headers: { "Content-Type": "application/json" },
      })
      .then((data_response) => {
        this.bookData.bookName = data_response.data.bookName;
        this.bookData.bookCategory = data_response.data.bookCategory;
        this.bookData.writerAndPublishingHouse =
          data_response.data.writerAndPublishingHouse;
        this.bookData.imgSource = data_response.data.imgSource;
        this.bookData.bookPrice = data_response.data.bookPrice;
        this.bookData.bookDescription = data_response.data.bookDescription;
        this.bookData.bookDetails.push(data_response.data.detailsTitle);
        this.bookData.bookDetails.push(data_response.data.detailsContent);
      });
  },
  components: {
    BookContent,
    BookImage,
    BookInformation,
  },
  data() {
    return {
      bookData: {
        bookName: "",
        bookCategory: null,
        writerAndPublishingHouse: null,
        imgSource: "",
        bookPrice: "",
        bookDescription: "",
        bookDetails: [],
      },
    };
  },
};
</script>
