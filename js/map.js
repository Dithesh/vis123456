new Vue({
    el: '#map_app',
    data: {
        homePageSlide: 1,
        stateList: [
            {
                id: 1,
                state: "Karnataka",
                numberOfBranches: 35
            },
            {
                id: 2,
                state: "Telangana",
                numberOfBranches: 05
            },
            {
                id: 3,
                state: "Andra pradesh",
                numberOfBranches: 17
            },
            {
                id: 4,
                state: "Madya pradesh",
                numberOfBranches: 29
            },
            {
                id: 5,
                state: "Chhattisgarh",
                numberOfBranches: 04
            },
            {
                id: 6,
                state: "Delhi",
                numberOfBranches: 01
            },
            {
                id: 7,
                state: "Gujarat",
                numberOfBranches: 20
            },
            {
                id: 8,
                state: "Haryana",
                numberOfBranches: 04
            },
            {
                id: 9,
                state: "Uttar Pradesh",
                numberOfBranches: 07
            },
            {
                id: 10,
                state: "Uttarkhand",
                numberOfBranches: 03
            },
            {
                id: 11,
                state: "Maharastra",
                numberOfBranches: 35
            },
            {
                id: 12,
                state: "12",
                numberOfBranches: 03
            },
            {
                id: 13,
                state: "Odisha",
                numberOfBranches: 05
            },
            {
                id: 16,
                state: "Rajasthan",
                numberOfBranches: 15
            },
            {
                id: 17,
                state: "Tamil Nadu",
                numberOfBranches: 45
            },
            
        ],
        initialIndex: 0,
        selectedSate: null,
    },
    created: function(){
        this.selectedSate = this.stateList[this.initialIndex];
    },
    mounted: function() {
        let self=this;
        let loaded = window.localStorage.getItem('loaded');
        
            let intervalPicker = setInterval(function($event){
                self.homePageSlide=self.homePageSlide+1;
                if(loaded < 1){
                    self.homePageSlide = 4;
                }
                if(self.homePageSlide == 4){
                    clearInterval(intervalPicker);
                    setTimeout(()=>{
                        
                    $('.footTestimonial').owlCarousel({
                        loop:true,
                        nav:false,
                        dots:true,
                        items:1
                    });
                    $('.hero_slider').owlCarousel({
                        animateOut: 'fadeOut',
                        loop:true,
                        nav:false,
                        dots:true,
                        autoplay:true,
                        autoplayTimeout:3000,
                        items:1,
                        
                    });
                    }, 50)
                    window.localStorage.setItem('loaded', '1');
                }
            }, 3000);
    },
    methods: {
        changeIndex: function(index) {
            this.initialIndex = index;
            this.selectedSate = this.stateList[this.initialIndex];
        },
        moveStates: function(val) {
            let total = this.initialIndex + val;
            if(total < 0){
                total = 0;
            } else if(total > this.stateList.length - 1){
                total = 0;
            }
            this.changeIndex(total);
        }
    }
  })