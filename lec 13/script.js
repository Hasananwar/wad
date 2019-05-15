
var database=[{
    user:"HASAN",
    password:"123"

},
    {
        user: "jamal",
        password: "987"
    },
    {
        user:"ali",
        password:"567"
    }
    ]
var newsfeed=[{
    user:"ali",
    content:"I am happy today"
},
    {
        user: "HASAN",
        content: "I am ha ha ha"
    }

]
a=prompt("Enter name");
b=prompt("Enter password");

        for(var i=0;i<database.length;i++) {
            if (a === database[i].user && b === database[i].password) {
                for (var j=0;j<newsfeed.length;j++) {
                    if (a === newsfeed[j].user) {
                        console.log(newsfeed[j]);

                    }
                }
            }

        }

