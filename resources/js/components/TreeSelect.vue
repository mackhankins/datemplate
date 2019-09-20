<template>
  <div>
    <treeselect
      v-model="value"
      :multiple="false"
      :defaultExpandLevel="1"
      :options="options"
      placeholder="Series Naviation"
    />
  </div>
</template>

<script>
// import the component
import Treeselect from "@riophae/vue-treeselect";
// import the styles
import "@riophae/vue-treeselect/dist/vue-treeselect.css";

export default {
  props: ["optionsString"],
  components: { Treeselect },
  data() {
    return {
      value: null
    };
  },
  computed: {
    options: function() {
      return JSON.parse(this.optionsString);
    }
  }
};
</script>
