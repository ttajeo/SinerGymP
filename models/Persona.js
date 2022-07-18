const mongoose = require('mongoose');
const schema_persona = new mongoose.Schema({
    id: {
        type: String,
        required: true,
        unique: true
    },
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
    sexo: {
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
    }
    
});
module.exports = mongoose.model('Persona', schema_persona, 'usuarios');