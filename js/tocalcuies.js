function toCelsius(f) {
    return (5 / 9) * (f - 32);
}
function toFahrenheit(c) {
    return (c * 9 / 5) + 32;
}
let celsius = toCelsius(10); 
console.log("10°F in Celsius is: " + celsius);
let fahrenheit = toFahrenheit(10); 
console.log("10°C in Fahrenheit is: " + fahrenheit);
