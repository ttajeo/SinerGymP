const { response } = require('express');
const Persona = require('../models/Persona');
const bcryptjs = require('bcryptjs');
const usuariosGet = async(req, res = response) => {
    const usuarios = await Persona.find();
    res.json({
       
        usuarios
    });
}
const usuariosPost = async (req, res = response) => {

    const { rut, nombre, apellidoP, apellidoM, genero, edad, correo, password, direccion, rol } = req.body;
    const usuario = new Persona({ rut, nombre, apellidoP, apellidoM, genero, edad, correo, password, direccion, rol });
    //Verificar que exista el correo
    const existeEmail = await Persona.findOne({ correo });
    if (existeEmail) {
        return res.status(400).json({
            msg: 'El correo ya esta registrado'
        });
    }
    //Encriptar contraseña
    const salt = bcryptjs.genSaltSync();
    usuario.password = bcryptjs.hashSync(password, salt);
    //Guardar en base de datos
    await usuario.save();
    res.json({
        msg: 'Usuario Registrado',
        usuario

    });
}

const usuariosDelete = async(req, res = response) => {     //Eliminar usuarios y sus datos
    const {id} = req.params;
    const usuario = await Persona.findByIdAndDelete(id);

    res.json(usuario);
}



module.exports = {
    usuariosGet,
    usuariosDelete,
    usuariosPost
}