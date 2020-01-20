new Vue({
    el: '#map_app',
    data: {
        homePageSlide: 1,
        stateList: [
            {
                id: 1,
                state: "Karnataka",
                numberOfBranches: 36
            },
            {
                id: 2,
                state: "Telangana",
                numberOfBranches: 36
            },
            {
                id: 3,
                state: "Andra pradesh",
                numberOfBranches: 36
            },
            {
                id: 4,
                state: "Madya pradesh",
                numberOfBranches: 36
            }
        ],
        initialIndex: 0,
        selectedSate: null
    },
    created: function(){
        this.selectedSate = this.stateList[this.initialIndex];
        // $('.owl-carousel').owlCarousel({
        //     loop:true,
        //     nav:false,
        //     dots:true,
        //     items:1
        //   });
        
    },
    mounted: function() {
        let self=this;
        let intervalPicker = setInterval(function($event){
            self.homePageSlide=self.homePageSlide+1;
            if(self.homePageSlide == 4){
                clearInterval(intervalPicker);
            }
        }, 500);
        
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