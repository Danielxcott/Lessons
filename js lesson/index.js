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
// const num = [8,3];
// function sumAllNum(arr){
//     const max = Math.max(...arr);
//     const min = Math.min(...arr);
//     let temp = 0;
//     for(let i = min; i<=max; i++){
//         temp += i;
//     }
//     return temp;
// }
// function sumAllNum(arr){
//     const sort = arr.sort((a,b)=>a-b);
//     const firt = sort[0];
//     const last = sort[1];
//     const sum = (last-firt+1)*(firt+last)/2;
//     return sum;
// }
// console.log(sumAllNum(num))

/*Filter through two array */
// function differArray(arr1,arr2){
//     return arr1.concat(arr2).filter(item=>!arr1.includes(item) || !arr2.includes(item));
// }
// function differArray(arr1,arr2){
//     return arr1.filter(item=>!arr2.includes(item)).concat(arr2.filter(item=>!arr1.includes(item)));
// }
// function differArray(arr1,arr2){
//     let newArr = [];
//     let order = [...arr1,...arr2].sort();
//     for(let i = 0; i<=order.length;i++){
//         if(order[i] !== order[i+1] && order[i] !== order[i-1]){
//             newArr.push(order[i]);
//         }
//     }
//     const result = newArr.sort((a,b)=>a-b);
//     return result ;
// }
// console.log(differArray([1,2,3,6],[3,7,9,5,1,10]));

/*isPermutation*/
// const isPermutation = (arr1,arr2) =>{
//     const x = arr1.split("").sort().join("");
//     const y = arr2.split("").sort().join("");
//     return x == y;
// }
// console.log(isPermutation("hello daniel","elloh andiel"));

/*Name swap*/
// const nameSwap = (str) =>{
//     const x = str.split(" ");
//     const y = x.reverse();
//     return y.join(" ");
// }
// const nameSwap = (str) =>{
//     const x = str.split(" ");
//     const result = x[1]+" "+x[0];
//     return result;
// }
// const nameSwap = (str) => {
//     const x = str.split(" ");
//     let resultSwap = [];
//     for(let i = 1; i>=0;i--){
//         resultSwap.push(x[i]);
//     }
//     return resultSwap.join(" ");
// }
// console.log(nameSwap("Ariana Grande"))
//Repeat a string with loop
// let newItem = "";
// function loop(item,num){
//     for(let i=0;i<=num;i++){
//         newItem += item;
//     }
//     return newItem;
// }

// console.log(loop("car ",5))