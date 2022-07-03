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
function finalResult(){
    console.log("here is your final result");
}

login().then((data)=>{
    console.log(data);
    fetchData().then((data)=>{
        console.log("here is "+data);
        finalResult();
    }).catch((err)=>{
        console.log(err)
    })
}).catch(()=>{
    console.log("can't solve");   
})