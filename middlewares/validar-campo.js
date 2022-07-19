const { validationResult } = require('express-validator');
const Persona = require('../models/Persona');

const validarCampos = (req, res, next)=>{
    const errors= validationResult(req);
    if (!errors.isEmpty()) {
        return res.status(400).json(errors);
    }
    next();
};

 const existepersonaId = async(id ='')=>{
    const existePersona = await Persona.findOne({id});
    if (!existePersona) {
        throw new Error(`El ID: ${id}, ya está registrado `);
    }
 }
module.exports ={
    validarCampos,
    existepersonaId
}