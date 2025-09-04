<template>
  <div class="book-description">
    <p>
      {{ descriptionSetting }}
    </p>
  </div>
</template>

<script>
export default {
  props: ["bookData"],
  computed: {
    descriptionSetting() {
      return this.bookData.bookDescription.split(".").slice(1, -1).toString();
    },
  },
};
</script>
