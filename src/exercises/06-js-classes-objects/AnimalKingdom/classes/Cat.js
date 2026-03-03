import Feline from "./Feline.js";

class Cat extends Feline{
    constructor(_name, _age){
      super(_name, _age);
    }

    makeNoise(){
        console.log("Meowing: Meoooww")
    }

}

export default Cat;