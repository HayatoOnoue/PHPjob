let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
function isEven(num) {
  if (num % 2 === 0) {
    console.log(num + 'は偶数です');
  }
}

console.log('even.jsの出力');
for (let i = 0; i < numbers.length; i++) {
  isEven(numbers[i]);
}