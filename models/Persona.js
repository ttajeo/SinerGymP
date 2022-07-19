const {Schema, model} = require('mongoose');

const PersonaSchema = Schema({
    rut:{
        type: String,
        required: true,
        unique: true
    },
    nombre: {
        type: String,
        required: true,
        unique: false
    },
    apellidoP:{
        type: String,
        required: true,
        unique: false
    },
    apellidoM:{
        type: String,
        required: true,
        unique: false
    },
    direccion:{
        type: String,
        required:true,
        unique: false
    },
    genero: {
        type: String,
        required: true,
        unique: false
    },
    edad: {
        type: Number,
        required: true,
        unique: false
    },
    correo:{
        type: String,
        required: true,
        unique: true
    },
    password:{
        type: String,
        required: true,
        unique: true
    },
    rol:{
        type: String,
        required: true,
        emun: ['ADMIN_ROLE', 'USER_ROLE']
    }
    
});
module.exports = model('Personas',PersonaSchema );