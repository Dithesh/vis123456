new Vue({
    el: '#testimonial',
    data: {
        selectedslide:null
    },
    methods: {
        testimonialslide: function(valtxt) {
            this.selectedslide = valtxt;
        },
    }
  })