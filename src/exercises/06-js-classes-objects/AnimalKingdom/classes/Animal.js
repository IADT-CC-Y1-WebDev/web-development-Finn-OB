class Animal{
    constructor(_name, _age){
        this.name = _name;
        this.age = _age;
    }

    sleep(){
        console.log("ZZZzzzzzzz");
    }

    makeNoise(){
        console.log("Noises...");
    }

    roam(){
        console.log("Roaming: roam roam roam");
    }
}

export default Animal