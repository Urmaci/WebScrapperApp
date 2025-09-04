<template>
  <div class="bookAdditionalInformation">
    <table>
      <tbody>
        <tr :key="item" v-for="(item, i) in bookData.bookDetails[0]">
          <th>{{ item }}</th>
          <th>{{ bookData.bookDetails[1][i] }}</th>
        </tr>
        <!-- <tr>
          <th>Çevirmen:</th>
          <th>Tugrul Veli Soylu</th>
        </tr>
        <tr>
          <th>Yayın Tarihi:</th>
          <th>10.05.2024</th>
        </tr>
        <tr>
          <th>Orjinal Adı:</th>
          <th>Schema therapy</th>
        </tr>
        <tr>
          <th>ISBN:</th>
          <th>9789756329627</th>
        </tr>
        <tr>
          <th>Dil:</th>
          <th>TÜRKÇE</th>
        </tr>
        <tr>
          <th>Sayfa Sayısı:</th>
          <th>616</th>
        </tr>
        <tr>
          <th>Cilt Tipi:</th>
          <th>Karton Kapak</th>
        </tr>
        <tr>
          <th>Kağıt Cinsi:</th>
          <th>Kitap Kağıdı</th>
        </tr>
        <tr>
          <th>Boyut:</th>
          <th>13.5 x 21 cm</th>
        </tr> -->
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: ["bookData"],
};
</script>
