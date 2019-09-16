<!-- Vue SFC -->
<template>

</template>

<script>
  // import the component
  import Treeselect from '@riophae/vue-treeselect'

  export default {
    // register the component
    components: { Treeselect },
    data() {
      return {
        // define the default value
        value: null,
        // define options
        options: [ {
          id: 'a',
          label: 'a',
          children: [ {
            id: 'aa',
            label: 'aa',
          }, {
            id: 'ab',
            label: 'ab',
          } ],
        }, {
          id: 'b',
          label: 'b',
        }, {
          id: 'c',
          label: 'c',
        } ],
      }
    },
  }
</script>
