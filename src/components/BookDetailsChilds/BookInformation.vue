<template>
  <div class="book-information">
    <div class="information-header">
      <button
        :class="activeComponent == 'BookDescription' ? 'active' : ''"
        @click="activeComponent = 'BookDescription'"
      >
        Description
      </button>
      <button
        :class="activeComponent == 'BookAdditionalInformation' ? 'active' : ''"
        @click="activeComponent = 'BookAdditionalInformation'"
      >
        Additional Information
      </button>
    </div>
    <div class="information-content">
      <BookDescription
        v-if="activeComponent == 'BookDescription'"
        :bookData="bookData"
      />
      <BookAdditionalInformation
        v-if="activeComponent == 'BookAdditionalInformation'"
        :bookData="bookData"
      />
    </div>
  </div>
</template>

<script>
import BookDescription from "./BookInformationChilds/BookDescription.vue";
import BookAdditionalInformation from "./BookInformationChilds/BookAdditionalInformation.vue";

export default {
  props: ["bookData"],
  components: {
    BookDescription,
    BookAdditionalInformation,
  },
  data() {
    return {
      activeComponent: "BookDescription",
    };
  },
};
</script>
