new Vue({
    el: '#map_app',
    data: {
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