const express = require('express')
const app = express()
const port = 8080;

app.use(express.static('public'));

app.get('/inicio.html', function (req, res) {
    
  });
  app.get('/*',(req, res) =>{
    res.sendFile(__dirname +'/public/404.html' );
  });
  
app.listen(port, ()=>{
    console.log(`Escuchando el puerto http://localhost:${port}`)
});

