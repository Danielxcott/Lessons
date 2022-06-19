// /* Celsius to Farenheit */
// function convertTemp (Celsius){
//     let result = Celsius * (9/5) + 32;
//     console.log(result+" F ");
// }
// convertTemp(55);

// /*Prime Number */
// let num = prompt("pls put a prime number in the box");
// switch(true){
//     case num%2 == 0:
//         console.log(`${num} is not a prime number`);
//         break;
//     case num === 1:
//         console.log("It is neither a prime number nor composite number");
//         break;
//     case num === 0:
//         console.log("Not a zero");
//         break;
//     case num<0:
//         console.log("pls only type integer");
//         break;
//     default:
//         console.log(`${num} is a prime Number`);
// }

/*Filter odd Number */
// let num = [1,2,3,4,5,6,7,8,9,10];
// let odd = [];
// for(let i = 0;i<num.length;i++){
//     if(num[i]%2 != 0){
//      odd.push(num[i]);
//     }
// }
// console.log(odd);

/*Sum All Num */
const num = [8,3];
// function sumAllNum(arr){
//     const max = Math.max(...arr);
//     const min = Math.min(...arr);
//     let temp = 0;
//     for(let i = min; i<=max; i++){
//         temp += i;
//     }
//     return temp;
// }
function sumAllNum(arr){
    const sort = arr.sort((a,b)=>a-b);
    const firt = sort[0];
    const last = sort[1];
    const sum = (last-firt+1)*(firt+last)/2;
    return sum;
}
console.log(sumAllNum(num))