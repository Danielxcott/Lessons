const login = () =>{
    return new Promise((resolve,reject)=>{
        setTimeout(()=>{
            resolve("lucien");
        },2000)
    })
}
const fetchData = () =>{
    return new Promise((resolve,reject)=>{
        setTimeout(()=>{
            resolve("Your fetch Data");
        },5000)
    })
} 
const errorData = () =>{
    return new Promise((resolve,reject)=>{
        setTimeout(()=>{
            reject("this is error");
        },3000)
    })
}
function finalResult(){
    console.log("here is your final result");
}

//pyramid of dom  || call back hell
// login().then((data)=>{
//     console.log(data);
//     fetchData().then((data)=>{
//         console.log("here is "+data);
//         finalResult();
//     }).catch((err)=>{
//         console.log(err)
//     })
// }).catch(()=>{
//     console.log("can't solve");   
// })

//promise Chaining to avoid callback hell
login().then((data)=>{
    console.log(data);
    return fetchData();
})
.then((fData)=>{
    console.log(fData);
    finalResult();
    return errorData();
})
.catch((error)=>{
    console.log("can't solve the problem"+error);
})
