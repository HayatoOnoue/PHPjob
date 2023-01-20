class Car {
  constructor(gas, number) {
    this.gas = gas;
    this.number = number;
  }
  
  getNumGas() {
    console.log(`ガソリンは${this.gas}です。ナンバーは${this.number}です`);
  }
}

let car = new Car('レギュラー', '1234');
console.log('Car.jsの出力');
car.getNumGas();