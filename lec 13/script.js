
var database={
    user:"HASAN",
    password:123

}
var newsfeed=[{
    user:"ali",
    content:"I am happy today"
},
    {
        user: "umer",
        content: "I am ha ha ha"
    }

]
var j=function () {
    a=prompt("Enter name");
    b=prompt("Enter password");
    if(a===database.user && b===database.password)
    {
        console.log(newsfeed);
    }else
    {
        alert("wrong password");
    }


}