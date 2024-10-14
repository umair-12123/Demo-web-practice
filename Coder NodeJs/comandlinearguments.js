const args = process.argv.slice(2);

if (args.length < 2) {
    console.log('Please provide two numbers.');
    process.exit(1);
}

const num1 = parseFloat(args[0]);
const num2 = parseFloat(args[1]);
const sum = num1 + num2;

console.log(`The sum of ${num1} and ${num2} is ${sum}.`);
