import Cat from './classes/Cat.js';
import Dog from './classes/Dog.js';
import Lion from './classes/Lion.js';
import Wolf from './classes/Wolf.js';

let cat = new Cat("Tom", 2);
let dog = new Dog("Rover", 2);
let lion = new Lion("Simba", 3);
let wolf = new Wolf("Wolfie", 4);

let animals = [cat, dog, lion, wolf];

animals.forEach((animal) => {
    animal.makeNoise();
    animal.roam();
    animal.sleep();
    console.log("----------");
    
});

console.log(dog instanceof Dog);