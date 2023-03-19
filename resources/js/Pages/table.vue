<script>
export default {
    data() {
        return {
            header: {no:'No', name:'Name', email:'E-Mail'},
            items:[
                {no:1, name:'Daiki', email:'daiki@hoge.net'},
                {no:2, name:'Naoki', email:'naoki@hoge.net'},
                {no:3, name:'Yuki', email:'yuki@hoge.net'},
                {no:4, name:'Aoi', email:'aoi@hoge.net'},
                {no:5, name:'Hnako', email:'hanako@hoge.net'},
                {no:6, name:'Momo', email:'momo@hoge.net'},
                {no:7, name:'Taro', email:'taro@hoge.net'}, 
                {no:8, name:'Shiori', email:'siori@hoge.net'},
                {no:9, name:'Jiro', email:'jiro@hoge.net'},
                {no:10, name:'Sigeru', email:'sigeru@hoge.net'},
            ]
        }
    },
};
</script>

<template>
  <div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th v-for="(label, key) in header" :key="key">{{label}}</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(item, index) in items" :key="item.no">
        <td v-for="(label, key) in header" :key="'td'+key+item.no">{{item[key]}}</td>
      </tr>
    </tbody>
  </table>
</div>
</template>
