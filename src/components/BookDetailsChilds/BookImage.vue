<template>
  <div class="book-image">
    <div class="image">
      <img :src="imgSource" />
    </div>
  </div>
</template>

<script>
export default {
  props: ["imgSource"],
};
</script>
