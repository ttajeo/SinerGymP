const express= require('express');
const cors = require('cors');
const { dbConnection } = require('../database/config');
const bodyParser=require("body-parser");
const { db } = require('./Persona');
const { Socket } = require('dgram');

class Server{
    constructor(){
        this.app     = express();
        this.port    = process.env.PORT;
         this.server = require('http').createServer(this.app);
         this.io     = require('socket.io')(this.server);
        this.usuariosPath= '/api/usuarios';
        this.formPath= '/api/form';
        //Conectar a base de datos
        this.conectarDB();
        //Middlewares
        this.middlewares();
        //rutas de mi aplicacion
        this.routes();
        //Sockets
        this.sockets();
        
    }
    async conectarDB(){
      db.on('error', console.log.bind(console, 'Connection error'));
      db.once('open', function(callback){
        console.log("connection succeeded");
    });
      await dbConnection();
      
    }

    middlewares(){
        //BodyParser
        this.app.use(bodyParser.json());
        this.app.use(bodyParser.urlencoded({
          extended:true
        }));
        //CORS
        this.app.use(cors());
        
        //Lectura y parseo del body
        this.app.use(express.json());

        //Directorio Publico
        this.app.use(express.static('public') );

    }
    routes(){
      this.app.use( this.usuariosPath , require('../routes/user'));  
    }
    sockets(){
      this.io.on('connection', socket =>{
        console.log('Cliente conectado');
      });
    }
    listen(){
        this.server.listen(this.port, () =>{
            console.log('Servidor corriendo en puerto ', this.port);
          });
    }
}
module.exports = Server;