<template>
        <treeselect v-model="value" :multiple="false" :options="options" />
</template>

<script>
    // import the component
    import Treeselect from '@riophae/vue-treeselect'
    // import the styles
    import '@riophae/vue-treeselect/dist/vue-treeselect.css'

    export default {
        // register the component
        components: { Treeselect },
        data() {
            return {
                // define the default value
                value: null,
                // define options
                options: this.options,
            }
        },
    }
</script>
