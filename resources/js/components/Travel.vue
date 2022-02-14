<template>
        <div class="container" >
            <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 60px;">
                <h2 class="movimientos" style="margin-bottom: 0px;">Moviminetos a realizar: {{movements}} </h2> 
                <div class="col-4 d-flex align-items-center justify-content-center "  >
                    <a id="start" @click="earth" style="margin-bottom: 0px;">Pedir otros movimientos</a>
                </div>
            </div>
            <div class="row">
                <div class="col-4" v-for="(coordinate, key) in coordinatesJSON" :key="key">
                    <div  :class="initialSelect == axis(coordinate) ? 'cubo-active cubo' : 'cubo'" @click="selectInitial(axis(coordinate))">
                        {{axis(coordinate)}}
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="initial" class="movimientos" >Elija un valor inicial</label>
                        <select class="form-control movimientos" id="initial" v-model="initialSelect">
                            <option class="movimientos" style="color:#165A6D" :disabled="initialSelect>0" :value="0" > Valor inicial</option>
                            <option  class="movimientos" style="color:#165A6D" v-for="(coordinate, key) in coordinatesJSON" :key="key" :value="axis(coordinate)"> {{axis(coordinate)}}</option> 
                        </select>
                    </div>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-center">
                    <a id="start" @click="travel">Comienza el viaje!</a>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="initial"  v-if="route != 0 "  class="movimientos" style="margin-bottom:5px;" >Ruta:</label>
                        <p class="movimientos" style="color:#165A6D" v-if="route != 0 ">
                            {{route}}
                        </p>
                    </div>
                    
                </div>

            </div>
        </div>
</template>
<script>
    import Swal from 'sweetalert2';

    export default {

        props:{
            coordinates: {}
        },
        data() {
            return {
                initialSelect: 0,
                movements: 0,
                movementsToTravel:[],
                route : 0,
                coordinatesJSON: {}
            }
        },
        created() {
            this.coordinatesJSON = JSON.parse(this.coordinates)
            this.earth()
        },
        methods: {
                axis(coordenate){
                    return '['+coordenate.y+','+coordenate.x+']'
                },
                selectInitial(initial){
                this.initialSelect = initial
                },
                selectInitialNew(initial){
                this.initialSelect = '[' + initial +']'
                },
                travel(){

                    if(this.initialSelect == 0) {
                        Swal.fire(
                        'Cuidado!',
                        'Por favor elija un valor inicial ',
                        'warning'
                        )  
                    }
                    else{
                        var form = new FormData();

                        form.append('initial', this.initialSelect)
                        form.append('itmes', this.movementsToTravel)


                        axios.post('../api/final-position.php', form).then((response) => {
                            this.route = response['data']['movements']
                                for (let i = 0; i < this.route.length; i++) {
                                    setTimeout(() => { this.selectInitialNew(this.route[i]) }, i * 1200)
                                }
                        }).catch(error=> {
                            
                        })
                    }
                },
                earth(){
                    axios.get('../api/earth.php').then((response) => {
                    this.movements = response['data']

                    this.movementsToTravel = '[' + this.movements.slice(1, -3).split(',').map(function(num) {
                    return num = num.replace(/ /g, "").charAt(0); ;
                    }).toString() + ']';

                    }).catch(error=> {
                        
                    })
                    
                }
            }
    }
</script>

<style lang="scss" scoped>


    .cubo{
        background-color:rgb(209, 156, 255);
        height: 22vh;
        margin-bottom:40px;
        align-items:center;
        justify-content:center;
        display: flex;
        border-radius: 5px;
        color:white;
        font-size: 50px;
        cursor: pointer;
        transition: all .3s ease;
    }

    .cubo-active, .cubo:hover{
        background-color:rgb(142, 44, 225);
    }

    .movimientos {
        color: #272727;
        font-size: 25px;
        margin-bottom: 30px;
        letter-spacing: 0.05em;
        font-weight:600;
    }

    #start {
        background: white;
        border-radius: 5px;
        padding: 10px 20px;
        -webkit-box-shadow: 0 0 4px 4px rgb(0 0 0 / 10%);
        box-shadow: 0 0 4px 4px rgb(0 0 0 / 10%);
        color: #272727;
        letter-spacing: 0.1em;
        -webkit-transition: all 350ms ease-in-out;
        transition: all 350ms ease-in-out;
        font-weight:600;
        cursor:pointer;

    }


    #start:hover {
        color: white;
        background: #00A5CD;
    }
</style>