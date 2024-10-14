const object = {
    id: 1,
    name: 'umair',
    enroll(){
        console.log('you are successfully enrolled')
    }
}
object.enroll();
console.log(object.id);


const car = {type:"Fiat", model:"500", color:"white"};
console.log("The car type is " + car.type + "and model is " + car.model);
//create Create an empty Object
const person = {};
person.firstName = "John";
person.lastName = "Doe";
person.age = 50;
person.eyeColor = "blue"; 
console.log(person.firstName + " is " + person.age + " years old.");
//access object properties in two ways:
console.log(person['eyeColor']);
//using function
const personn = {
    firstName: "John",
    lastName : "Doe",
    id       : 5566,
    fullName : function() {
      return this.firstName + " " + this.lastName;
    }
  };
  console.log(personn.fullName());
//   //In the example above, this refers to the person object:

// this.firstName means the firstName property of person.

// this.lastName means the lastName property of person.